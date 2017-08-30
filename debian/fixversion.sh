#!/bin/bash
VERSION=`cat debian/composer.json | grep version | awk -F'"' '{print $4}'`
REVISION=`cat debian/revision | perl -ne 'chomp; print join(".", splice(@{[split/\./,$_]}, 0, -1), map {++$_} pop @{[split/\./,$_]}), "\n";'`
echo ${VERSION}.${REVISION}
sed -i -e '/\"version\"/c\    \"version\": \"'${VERSION}'.'${REVISION}'",' debian/flexipeehp/usr/share/php/FlexiPeeHP/composer.json

sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSION}.${REVISION}';" debian/flexipeehp/usr/share/php/FlexiPeeHP/FlexiBeeRO.php
sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSION}.${REVISION}';" src/FlexiPeeHP/FlexiBeeRO.php
