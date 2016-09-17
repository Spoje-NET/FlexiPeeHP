#!/bin/bash
/usr/bin/apigen generate --source src --destination docs --title "FlexiPeeHP `cat debian/version` " --charset UTF-8 --access-levels public --access-levels protected --php --tree
