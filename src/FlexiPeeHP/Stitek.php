<?php
/**
 * FlexiPeeHP - Objekt štítku.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Štítek
 *
 * @link https://demo.flexibee.eu/c/demo/stitek/properties Vlastnosti evidence
 */
class Stitek extends FlexiBeeRW
{
    /**
     * Evidence Path for vsb supported by label
     *
     * @var array
     */
    static public $vsbToEvidencePath = [
        'vsbAdr' => 'adresar', // Adresář
        'vsbSkl' => 'sklad', // Sklad
        'vsbPhl' => 'pohledavka', // Pohledávky
        'vsbZav' => 'zavazek', // Závazky
        'vsbObp' => 'objednavka-prijata', // Objednávky přijaté
        'vsbNav' => 'objednavka-vydana', // Nabídky vydané
        'vsbPpp' => 'poptavka-prijata', // Poptávky přijaté
        'vsbObv' => 'objednavka-vydana', // Objednávky vydané
        'vsbNap' => 'nabidka-prijata', // Nabídky přijaté
        'vsbPpv' => 'poptavka-vydana', // Poptávky vydané
//        'vsbMzd' => 'mzda', // Mzdy
//        'vsbCis' => 'ciselnik', // Číselníky
    ];

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'stitek';

    /**
     * Obtain labels for current record
     *
     * @param FlexiBeeRO $object data source
     * @return array labels
     */
    public static function getLabels($object)
    {
        $labels    = null;
        $labelsRaw = $object->getDataValue('stitky');

        if (strlen($labelsRaw)) {
            $labels = is_array($labelsRaw) ? $labelsRaw : self::listToArray($labelsRaw);
        }
        return $labels;
    }

    /**
     * Convert coma-separated list to array
     *
     * @param string $listRaw
     * @return array
     */
    public static function listToArray($listRaw)
    {
        if (strstr($listRaw, ',')) {
            $list = array_map('trim', explode(',', $listRaw));
        } else {
            $list = [$listRaw];
        }
        return $list;
    }

    /**
     * Obtain list of availble labels for given object
     *
     * @param FlexiBeeRO $object
     * @return array
     */
    public static function getAvailbleLabels($object)
    {
        $labels         = [];
        $evidenceBackup = $object->getEvidence();
        $object->setEvidence('stitek');
        $pathToVsb      = array_flip(self::$vsbToEvidencePath);

        if (array_key_exists($evidenceBackup, $pathToVsb)) {
            $labelsRaw = $object->getColumnsFromFlexiBee(['kod', 'nazev'],
                [$pathToVsb[$evidenceBackup] => true], 'nazev');
            if (count($labelsRaw)) {
                foreach ($labelsRaw as $labelInfo) {
                    $labels[$labelInfo['kod']] = $labelInfo['nazev'];
                }
            }
        }

        $object->setEvidence($evidenceBackup);
        return $labels;
    }

}
