#!/bin/sh
php  -qf update_evidencelist_class.php > EvidenceList.php
mv -f EvidenceList.php ../src/FlexiPeeHP/EvidenceList.php
php -qf update_properties_class.php > ../src/FlexiPeeHP/Properties.php
php -qf update_actions_class.php > ../src/FlexiPeeHP/Actions.php
php -qf update_relations_class.php > ../src/FlexiPeeHP/Relations.php
