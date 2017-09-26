<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

define('EASE_APPNAME', 'FlexiPeehUP');
define('EASE_LOGGER', 'console|syslog');

$outFile = 'Properties.php';
$outJson = 'Properties.json';
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
$evidenceProps .= '    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
';
$evidenceProps .= ' static public $version = \''.$statuser->getDataValue('version').'\';

';


$syncer = new FlexiBeeRO();
$syncer->addStatusMessage('Updating Evidences Properties');

$properties = [];

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
    $properties[$evidencePath] = $structure;
    if (count($structure)) {
        $evidenceProps .= '    /**
     * Evidence '.$evidencePath.' ('.$evidenceName.') structure.
     *
     * @var array
     */
';
        $evidenceProps .= ' static public $'.lcfirst(FlexiBeeRO::evidenceToClassName($evidencePath)).' = '.str_replace('http://demo.flexibee.eu/c/demo/',
                '', var_export($structure, true)).';
';

        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': structure obtained',
            'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': structure problem',
            'error');
    }
}

$evidenceProps .= '}
';

$syncer->addStatusMessage('Updating of '.$ok.' Evidences Properties done',
    'success');
file_put_contents($outFile, $evidenceProps);

file_put_contents($outJson, json_encode($properties));

