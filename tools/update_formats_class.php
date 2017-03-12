<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

define('EASE_APPNAME', 'FlexiPeehUP');
define('EASE_LOGGER', 'console|syslog');

$outFile = 'Formats.php';
$ok      = 0;

/**
 * Obtain Formats for given evidence
 *
 * @param string     $evidence
 * @param FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array     Formats structure
 */
function getEvidenceFormats($evidence, FlexiBeeRO $syncer)
{

    $syncer->setEvidence($evidence);
    $flexinfo = $syncer->getColumnsFromFlexibee(['id'], ['limit' => 1]);
    if (is_array($flexinfo) && array_key_exists('id', $flexinfo[0])) {
        $id = is_numeric($flexinfo[0]['id']) ? intval($flexinfo[0]['id']) : $flexinfo[0]['id'];

        foreach (FlexiBeeRO::$formats as $cancode => $candidate) {
            $syncer->setFormat($candidate['suffix']);
            $syncer->loadFromFlexiBee($id);
            if ($syncer->lastResponseCode == 200) {
                $formats[$cancode] = $candidate['suffix'];
            }
        }
    } else {
        $syncer->addStatusMessage(sprintf('Missing formats for %s', $evidence),
            'warning');
        $formats = ['HTML' => 'html', 'XML' => 'xml', 'JSON' => 'json', 'CSV' => 'csv'];
    }
    return $formats;
}
$evidenceFormats = '<?php
/**
 * FlexiPeeHP - Evidence Formats.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */
namespace FlexiPeeHP;

/**
 * Evidence Formats
 *
 * @link https://demo.flexibee.eu/devdoc/formats Provádění akcí
 */
class Formats
{
';
$statuser        = new Status();
$evidenceFormats .= ' /**
 * Source FlexiBee server version.
 *
 * @var string
 */
';
$evidenceFormats .= ' static public $version = \''.$statuser->getDataValue('version').'\';

';


$syncer = new FlexiBeeRO();
$syncer->addStatusMessage('Updating Evidences Formats');

$pos = 0;
foreach (EvidenceList::$name as $evidencePath => $evidenceName) {
    $pos++;
    $structure = getEvidenceFormats($evidencePath, $syncer);
    if (count($structure)) {
        $evidenceFormats .= '    /**
     * Evidence '.$evidencePath.' ('.$evidenceName.') Formats.
     *
     * @var array
     */
';
        $evidenceFormats .= ' static public $'.lcfirst(FlexiBeeRO::evidenceToClassName($evidencePath)).' = '.var_export($structure,
                true).';
';

        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': formats: '.implode(',',
                $structure).' obtained', 'success');
        $ok++;
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': obtaining formats problem',
            'error');
    }
}

$evidenceFormats .= '}
';

$syncer->addStatusMessage('Updating of '.$ok.' Evidences Formats done',
    'success');
file_put_contents($outFile, $evidenceFormats);
