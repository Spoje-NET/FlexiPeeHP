<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

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
echo '<?php
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
echo '    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
';
echo ' static public $version = \''.$statuser->getDataValue('version').'\';

';


$syncer = new FlexiBeeRO();

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    $structure = getPropertiesInfo($evidencePath, $syncer);
    if (count($structure)) {
        echo '    /**
     * Evidence '.$evidencePath.' ('.$evidenceName.') structure.
     *
     * @var array
     */
';
        echo ' static public $'.lcfirst(FlexiBeeRO::evidenceToClassName($evidencePath)).' = '.str_replace('http://demo.flexibee.eu/c/demo/',
            '', var_export($structure, true)).';
';

        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': structure obtained',
            'success');
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': structure problem',
            'error');
    }
}

echo '}
';
