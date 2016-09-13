<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

/**
 * Obtain Actions for given evidence
 *
 * @param string $evidence
 * @param \FlexiPeeHP\FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array Actions structure
 */
function getEvidenceActions($evidence, $syncer)
{
    $actions  = [];
    $flexinfo    = $syncer->performRequest($evidence.'/actions.json');
    if (count($flexinfo) && array_key_exists('actions', $flexinfo)) {
        foreach ($flexinfo['actions']['action'] as $evidenceActions) {
            $key           = $evidenceActions['actionId'];
            $actions[$key] = $evidenceActions;
        }
    }
    return $actions;
}


echo '<?php
/**
 * FlexiPeeHP - Evidence Actions.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * EvidenceActions
 *
 * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
 */

class Actions
{
';


$syncer = new \FlexiPeeHP\FlexiBeeRO(null, ['evidence' => 'evidence-list']);

$evidencies = $syncer->getColumnsFromFlexibee(['evidencePath', 'evidenceName']);

$evlist = [];
foreach ($evidencies['evidences']['evidence'] as $evidenceID => $evidence) {
    $evlist[$evidence['evidencePath']] = $evidence['evidenceName'];
}

foreach ($evidencies['evidences']['evidence'] as $evidenceID => $evidence) {
    $structure = getEvidenceActions($evidence['evidencePath'], $syncer);
    if (count($structure)) {
        echo '    /**
     * Evidence '.$evidence['evidencePath'].' ('.$evidence['evidenceName'].') Actions.
     *
     * @var array
     */
';
        echo ' static public $'.lcfirst(\FlexiPeeHP\FlexiBeeRO::evidenceToClassName($evidence['evidencePath'])).' = '.var_export($structure,
            true).';
';

        $syncer->addStatusMessage($evidenceID.' of '.count($evidencies['evidences']['evidence']).' '.$evidence['evidencePath'].': actions obtained',
            'success');
    } else {
        $syncer->addStatusMessage($evidenceID.' of '.count($evidencies['evidences']['evidence']).' '.$evidence['evidencePath'].': obtaining actions problem',
            'error');
    }
}

echo '}
';
