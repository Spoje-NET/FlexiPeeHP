#!/bin/bash
PACKAGE=`cat debian/composer.json | grep '"name"' | head -n 1 |  awk -F'"' '{print $4}'`
VERSION=`cat debian/composer.json | grep version | awk -F'"' '{print $4}'`
sed -i -e '/\"version\"/c\    \"version\": \"'${VERSION}'",' debian/flexipeehp/usr/share/php/FlexiPeeHP/composer.json

sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSION}';" debian/flexipeehp/usr/share/php/FlexiPeeHP/FlexiBeeRO.php
sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSION}';" src/FlexiPeeHP/FlexiBeeRO.php

#dch -b -v ${VERSION}-${REVISION} --package "${PACKAGE}" "${CHANGES}"
