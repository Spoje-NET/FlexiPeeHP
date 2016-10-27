<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

/**
 * Obtain Relations for given evidence
 *
 * @param string     $evidence
 * @param FlexiBeeRO $syncer Class to read from FlexiBee
 * @return array     Relations structure
 */
function getEvidenceRelations($evidence, FlexiBeeRO $syncer)
{
    $relations = [];
    $flexinfo  = $syncer->performRequest($evidence.'/relations.json');
    if (count($flexinfo) && array_key_exists('relations', $flexinfo)) {
        if (isset($flexinfo['relations']['relation'])) {
            foreach ($flexinfo['relations']['relation'] as $evidenceRelations) {
                $relations[] = $evidenceRelations;
            }
        } else {
            $syncer->addStatusMessage(sprintf('Missing relations for %s',
                    $evidence), 'warning');
        }
    }
    return $relations;
}
echo '<?php
/**
 * FlexiPeeHP - Evidence Relations.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Evidence Relations
 *
 * @link https://demo.flexibee.eu/devdoc/relations Provádění akcí
 */

class Relations
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
    $structure = getEvidenceRelations($evidencePath, $syncer);
    if (count($structure)) {
        echo '    /**
     * Evidence '.$evidencePath.' ('.$evidenceName.') Relations.
     *
     * @var array
     */
';
        echo ' static public $'.lcfirst(FlexiBeeRO::evidenceToClassName($evidencePath)).' = '.var_export($structure,
            true).';
';

        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': relations obtained',
            'success');
    } else {
        $syncer->addStatusMessage($pos.' of '.count(EvidenceList::$name).' '.$evidencePath.': obtaining relations problem',
            'error');
    }
}

echo '}
';
