all: fresh build install

fresh:
	git pull
	composer update

install: build
	echo install
	
static: 
	cd tools/ ; ./update_all.sh ; cd ..

build: static doc
	echo build

clean:
	rm -rf debian/flexipeehp
	rm -rf debian/flexipeehp-doc
	rm -rf debian/*.log
	rm -rf docs/*
	rm -rf static/*

doc:
	debian/apigendoc.sh

test:
	phpunit --bootstrap testing/bootstrap.php

deb:
	debuild -i -us -uc -b

.PHONY : install
	
