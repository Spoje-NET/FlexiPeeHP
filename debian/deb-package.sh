#!/bin/bash
cd ..

#cd src 
#echo update Structure class
#php -qf update_structure_class.php > FlexiPeeHP/Structure.php
#echo update Actions class
#php -qf update_actions_class.php > FlexiPeeHP/Actions.php
#cd ..

PACKAGE=`cat debian/composer.json | grep '"name"' | head -n 1 |  awk -F'"' '{print $4}'`
VERSION=`cat debian/composer.json | grep version | awk -F'"' '{print $4}'`
echo $VERSION > debian/version
REVISION=`cat debian/revision | perl -ne 'chomp; print join(".", splice(@{[split/\./,$_]}, 0, -1), map {++$_} pop @{[split/\./,$_]}), "\n";'`
CHANGES=`git log -n 1 | tail -n+5`
dch -b -v $VERSION-$REVISION --package $PACKAGE $CHANGES

debuild -i -us -uc -b


LASTVERSION=`cat debian/lastversion`
if [ $LASTVERSION == $VERSION  ];
then
    echo $REVISION > debian/revision
else
    echo 0 > debian/revision
    echo $VERSION > debian/lastversion
fi

rm -rf debian/flexipeehp/
rm -rf debian/flexipeehp-doc/

cd ..
ls *.deb

#~/bin/publish-deb-packages.sh
