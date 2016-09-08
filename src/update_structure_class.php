<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

/**
 * Obtain structure for given evidence
 *
 * @param string $evidence
 * @param \FlexiPeeHP\FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array Evidence structure
 */
function getColumnsInfo($evidence, $syncer)
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


echo '<?php
/**
 * FlexiPeeHP - Struktura evidenci.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Struktura Evidencí
 *
 * @link https://demo.flexibee.eu/c/demo/evidence-list.json vlastnosti evidence
 */

class Structure
{
';


$syncer = new \FlexiPeeHP\FlexiBeeRO(null, ['evidence' => 'evidence-list']);

$evidencies = $syncer->getColumnsFromFlexibee(['evidencePath', 'evidenceName']);

$evlist = [];
foreach ($evidencies['evidences']['evidence'] as $evidenceID => $evidence) {
    $evlist[$evidence['evidencePath']] = $evidence['evidenceName'];
}
echo '    /**
     * Evidence Path/Name listing.
     *
     * @var array
     */
';
echo ' static public $evidence = '.var_export($evlist, true).';

';

foreach ($evidencies['evidences']['evidence'] as $evidenceID => $evidence) {
    $structure = getColumnsInfo($evidence['evidencePath'], $syncer);
    if (count($structure)) {
        echo '    /**
     * Evidence '.$evidence['evidencePath'].' ('.$evidence['evidenceName'].') structure.
     *
     * @var array
     */
';
        echo ' static public $'.lcfirst(\FlexiPeeHP\FlexiBeeRO::evidenceToClassName($evidence['evidencePath'])).' = '.var_export($structure,
            true).';
';

        $syncer->addStatusMessage($evidenceID.' of '.count($evidencies['evidences']['evidence']).' '.$evidence['evidencePath'].': structure obtained',
            'success');
    } else {
        $syncer->addStatusMessage($evidenceID.' of '.count($evidencies['evidences']['evidence']).' '.$evidence['evidencePath'].': structure problem',
            'error');
    }
}

echo '}
';
