#!/bin/sh

CURRENT=`php -qf current_version.php`

if [ `php -qf time_to_update.php` = "true"  ] 
then
    echo updating for $CURRENT
    php  -qf update_evidencelist_class.php
    mv -f EvidenceList.php ../src/FlexiPeeHP/EvidenceList.php
    php -qf update_properties_class.php 
    mv Properties.php ../src/FlexiPeeHP/Properties.php
    php -qf update_actions_class.php 
    mv Actions.php  ../src/FlexiPeeHP/Actions.php
    php -qf update_relations_class.php 
    mv Relations.php ../src/FlexiPeeHP/Relations.php
else
    echo  $CURRENT still fresh
fi
