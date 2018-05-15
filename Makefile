all: fresh build install

fresh:
	git pull

install: build
#	cp -rvf src/FlexiPeeHP /usr/share/php/FlexiPeeHP
	
static: 
	rm -rf static/*
	echo "STATIC  #######################
	cd tools/ ; ./update_all.sh ; cd ..

build: static doc
	cd tools/ ; ./update_all.sh ; cd ..

clean:
	rm -rf debian/flexipeehp
	rm -rf debian/flexipeehp-doc
	rm -rf debian/*.log
	rm -rf debian/*.substvars
	rm -rf docs/*
	rm -f  debianTest/composer.lock

doc:
	VERSION=`cat debian/composer.json | grep version | awk -F'"' '{print $4}'`; \
	apigen generate --source src --destination docs --title "FlexiPeeHP ${VERSION}" --charset UTF-8 --access-levels public --access-levels protected --php --tree

pretest:
	composer --ansi --no-interaction update
	php -f tests/PrepareForTest.php

phpunit:
	composer update
	vendor/bin/phpunit --bootstrap testing/bootstrap.php

changelog:
	CHANGES=`git log -n 1 | tail -n+5` ; dch -b -v `cat debian/version`-`cat debian/revision` --package flexipeehp "$(CHANGES)"

deb: changelog
	debuild -i -us -uc -b

rpm:
	rpmdev-bumpspec --comment="Build" --userstring="Vítězslav Dvořák <info@vitexsoftware.cz>" flexipeehp.spec
	rpmbuild -ba flexipeehp.spec 

verup:
	git commit debian/composer.json debian/version debian/revision  -m "`cat debian/version`-`cat debian/revision`"
	git push origin master

.PHONY : install
	
