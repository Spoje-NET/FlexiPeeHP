<?php

namespace FlexiPeeHP;

define('EASE_APPNAME', 'FlexiPeehUP');
define('EASE_LOGGER', 'console|syslog');

require_once '../testing/bootstrap.php';

$outFile = 'Properties.php';
$ok      = 0;

/**
 * Obtain structure for given evidence
 *
 * @param string     $evidence
 * @param FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array     Evidence structure
 */
function getPropertiesInfo($evidence, FlexiBeeRO $syncer)
{
    $properties = [];
    $flexinfo   = $syncer->performRequest($evidence.'/properties.json');
    if (count($flexinfo) && array_key_exists('properties', $flexinfo)) {
        foreach ($flexinfo['properties']['property'] as $evidenceProperty) {
            $key                      = $evidenceProperty['propertyName'];
            $properties[$key]         = $evidenceProperty;
            $properties[$key]['name'] = $evidenceProperty['name'];
            $properties[$key]['type'] = $evidenceProperty['type'];
            if(array_key_exists('url', $evidenceProperty)){
               $properties[$key]['url'] = str_replace('?limit=0', '', $evidenceProperty['url']);
            }
        }
    }
    return $properties;
}
$evidenceProps = '<?php
/**
 * FlexiPeeHP - Evidence Properties.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Evidence Properties
 *
 * @link https://demo.flexibee.eu/c/demo/evidence-list.json vlastnosti evidence
 */

class Properties
{
';

$statuser = new Status();


$syncer = new FlexiBeeRO();
$syncer->setObjectName('FlexiBee Evidence Properties');
$syncer->addStatusMessage('Updating Evidences Properties');

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    if ($evidencePath == 'nastaveni') {
        $info      = json_decode(file_get_contents('nastaveni-properties.json'),
            true);
        $structure = $info['properties']['property'];
    } else {
        $structure = getPropertiesInfo($evidencePath, $syncer);
    }

    if (count($structure)) {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': structure obtained',
            'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': structure problem',
            'error');
    }
    file_put_contents('Properties.'.$evidencePath.'.json',
        json_encode($structure));
}

$syncer->addStatusMessage('Updating of '.$ok.' Evidences Properties done',
    'success');
