#!/bin/bash
cd ..

PACKAGE=`cat debian/composer.json | grep '"name"' | head -n 1 |  awk -F'"' '{print $4}' | awk -F'/' '{print $2}'`
VERSION=`cat debian/composer.json | grep version | awk -F'"' '{print $4}'`
REVISION=`cat debian/revison | perl -ne 'chomp; print join(".", splice(@{[split/\./,$_]}, 0, -1), map {++$_} pop @{[split/\./,$_]}), "\n";'`
CHANGES=`git log -n 1 | tail -n+5`
dch -b -v $VERSION-$REVISION --package $PACKAGE $CHANGES

debuild -i -us -uc -b


LASTVERSION=`cat debian/lastversion`
if [ $LASTVERSION == $VERSION  ];
then
    echo $REVISION > debian/revison
else
    echo 0 > debian/revison
    echo $VERSION > debian/lastversion
fi


cd ..
ls *.deb

#~/bin/publish-deb-packages.sh
