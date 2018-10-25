#!/bin/bash
VERSTR=`dpkg-parsechangelog --show-field Version`
sed -i -e '/\"version\"/c\    \"version\": \"'${VERSTR}'",' debian/flexipeehp/usr/share/php/FlexiPeeHP/composer.json
sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSTR}';" debian/flexipeehp/usr/share/php/FlexiPeeHP/FlexiBeeRO.php
sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSTR}';" src/FlexiPeeHP/FlexiBeeRO.php

#dch -b -v ${VERSION}-${REVISION} --package "${PACKAGE}" "${CHANGES}"
