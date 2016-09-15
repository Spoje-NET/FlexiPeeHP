<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

/**
 * Obtain Actions for given evidence
 *
 * @param string     $evidence
 * @param FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array Actions structure
 */
function getEvidenceActions($evidence, FlexiBeeRO $syncer)
{
    $actions  = [];
    $flexinfo = $syncer->performRequest($evidence.'/actions.json');
    if (count($flexinfo) && array_key_exists('actions', $flexinfo)) {
        if (isset($flexinfo['actions']['action'])) {
            foreach ($flexinfo['actions']['action'] as $evidenceActions) {
                $key           = $evidenceActions['actionId'];
                $actions[$key] = $evidenceActions;
            }
        } else {
            $syncer->addStatusMessage(sprintf('Missing actions for %s',
                    $evidence), 'warning');
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


$syncer = new FlexiBeeRO();

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    $structure = getEvidenceActions($evidencePath, $syncer);
    if (count($structure)) {
        echo '    /**
     * Evidence '.$evidencePath.' ('.$evidenceName.') Actions.
     *
     * @var array
     */
';
        echo ' static public $'.lcfirst(FlexiBeeRO::evidenceToClassName($evidencePath)).' = '.var_export($structure,
            true).';
';

        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': actions obtained',
            'success');
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': obtaining actions problem',
            'error');
    }
}

echo '}
';
