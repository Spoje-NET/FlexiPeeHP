all: fresh build install

fresh:
	git pull

install: build
	echo install
	
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
	debian/apigendoc.sh

test:
	composer update
	phpunit --bootstrap testing/bootstrap.php

deb:
	debuild -i -us -uc -b

.PHONY : install
	
