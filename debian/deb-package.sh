#!/bin/bash
cd ..
VERSION=`cat composer.json | grep version | awk -F'"' '{print $4}'`
REVISION=`cat debian/revison | perl -ne 'chomp; print join(".", splice(@{[split/\./,$_]}, 0, -1), map {++$_} pop @{[split/\./,$_]}), "\n";'`

CHANGES=`git log -n 1 | tail -n+5`
dch -b -v $VERSION-$REVISION --package flexipeehp $CHANGES

debuild -i -us -uc -b

echo $REVISION > debian/revison
cd ..
ls *.deb

~/bin/publish-deb-packages.sh
