<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

define('EASE_APPNAME', 'FlexiPeehUP');
define('EASE_LOGGER', 'console|syslog');

$outFile = 'Actions.php';
$ok      = 0;

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
$evidenceActions = '<?php
/**
 * FlexiPeeHP - Evidence Actions.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
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

$statuser = new Status();
$evidenceActions .= '    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
';
$evidenceActions .= ' static public $version = \''.$statuser->getDataValue('version').'\';

';

$syncer = new FlexiBeeRO();
$syncer->addStatusMessage('Updating Evidences Actions');

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    $structure = getEvidenceActions($evidencePath, $syncer);
    if (count($structure)) {
        $evidenceActions .= '    /**
     * Evidence '.$evidencePath.' ('.$evidenceName.') Actions.
     *
     * @var array
     */
';
        $evidenceActions .= ' static public $'.lcfirst(FlexiBeeRO::evidenceToClassName($evidencePath)).' = '.var_export($structure,
                true).';
';

        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': actions obtained',
            'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': obtaining actions problem',
            'error');
    }
}

$evidenceActions .= '}
';

$syncer->addStatusMessage('Updating of '.$ok.' Evidences Actions done',
    'success');
file_put_contents($outFile, $evidenceActions);
