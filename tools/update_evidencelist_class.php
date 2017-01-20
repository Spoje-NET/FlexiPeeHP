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
function getColumnsInfo($evidence, FlexiBeeRO $syncer)
{
    $useKeywords = [];
    $flexinfo    = $syncer->performRequest($evidence.'/properties.json');
    if (count($flexinfo) && array_key_exists('properties', $flexinfo)) {
        foreach ($flexinfo['properties']['property'] as $evidenceProperty) {
            $key                       = $evidenceProperty['propertyName'];
            $useKeywords[$key]         = $evidenceProperty;
            $useKeywords[$key]['name'] = $evidenceProperty['name'];
            $useKeywords[$key]['type'] = $evidenceProperty['type'];
        }
    }
    return $useKeywords;
}
$statuser = new Status();


echo '<?php
/**
 * FlexiPeeHP - Seznam Evidencí.
 *
 * Generated: '.date(DATE_RFC2822).' 
 * From:      '.$statuser->url.'
 *    
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Evidencies listing and its properties
 * Seznam Evidencí a jejich vlastnosti
 *
 * @link https://demo.flexibee.eu/c/demo/evidence-list Přehled evidencí
 */
class EvidenceList extends FlexiBeeRO
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = \'evidence-list\';

';

echo '    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
';
echo ' static public $version = \''.$statuser->getDataValue('version').'\';

';

$syncer = new EvidenceList();

$evidencies = $syncer->getColumnsFromFlexibee(['evidencePath', 'evidenceName']);

$evlist = [];
foreach ($evidencies['evidences']['evidence'] as $evidenceID => $evidence) {
    $evlist[$evidence['evidencePath']]   = $evidence['evidenceName'];
    $fullList[$evidence['evidencePath']] = $evidence;
}
echo '    /**
     * Evidences Path/Name listing.
     *
     * @var array
     */
';
echo ' static public $name = '.var_export($evlist, true).';

';
echo '    /**
     * All Evidence\'s all properties listing.
     *
     * @var array
     */
';
echo ' static public $evidences = '.var_export($fullList, true).';

';

echo '}
';
