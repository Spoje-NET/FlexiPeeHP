FROM vitexsoftware/easephpframework
COPY src/ /usr/share/php/FlexiPeeHP
COPY static/ /usr/share/php/FlexiPeeHP/static
COPY debian/composer.json /usr/share/php/FlexiPeeHP/composer.json
COPY docs/  /usr/share/doc/flexipeehp/html
