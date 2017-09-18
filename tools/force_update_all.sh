#!/bin/sh
CURRENT=`php -qf current_version.php`
php  -qf update_evidencelist_class.php
mv -f EvidenceList.php ../src/FlexiPeeHP/EvidenceList.php
php -qf update_properties_class.php 
mv Properties.php ../src/FlexiPeeHP/Properties.php
php -qf update_actions_class.php 
mv Actions.php  ../src/FlexiPeeHP/Actions.php
php -qf update_relations_class.php 
mv Relations.php ../src/FlexiPeeHP/Relations.php
php -qf update_formats_class.php 
mv Formats.php ../src/FlexiPeeHP/Formats.php
echo git commit  ../src/FlexiPeeHP/ -m \"Update for FlexiBee ${CURRENT}\"
