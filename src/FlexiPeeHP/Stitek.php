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
        'vsbBan' => 'banka', // Banka
//      'vsbCis' => 'ciselnik', // Číselníky
        'vsbFap' => 'faktura-prijata', // Přijaté faktury
        'vsbFav' => 'faktura-vydana', // Vydané faktury
//      'vsbInt' => '' // Interní doklady
        'vsbKatalog' => 'cenik', // Adresář
//      'vsbMaj' => '', // Majetek
//      'vsbMzd' => 'mzda', // Mzdy
        'vsbNap' => 'nabidka-prijata', // Nabídky přijaté
        'vsbNav' => 'nabidka-vydana', // Nabídky vydané
        'vsbObp' => 'objednavka-prijata', // Objednávky přijaté
        'vsbObv' => 'objednavka-vydana', // Objednávky vydané
        'vsbPhl' => 'pohledavka', // Pohledávky
        'vsbPok' => 'pokladna', // Pokladna
        'vsbPpp' => 'poptavka-prijata', // Poptávky přijaté
        'vsbPpv' => 'poptavka-vydana', // Poptávky vydané
        'vsbSkl' => 'sklad', // Sklad
        'vsbZav' => 'zavazek', // Závazky
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
            $list = array_combine($list, $list);
        } else {
            $list = [$listRaw => $listRaw];
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

    /**
     * Set Label for Current Object record
     *
     * @param string     $label
     * @param FlexiBeeRW $object
     *
     * @return boolean   success result ?
     */
    static public function setLabel($label, $object)
    {
        return $object->insertToFlexiBee(['id' => $object->getMyKey(), 'stitky' => $label]);
    }

    /**
     * UnSet Label for Current Object record
     *
     * @param string     $label
     * @param FlexiBeeRW $object
     *
     * @return boolean   success result ?
     */
    static public function unsetLabel($label, $object)
    {
        $result = true;
        $labels = self::getLabels($object);
        if (array_key_exists($label, $labels)) {
            unset($labels[$label]);
            $object->insertToFlexiBee(['id' => $object->getMyKey(), 'stitky@removeAll' => 'true',
                'stitky' => $labels]);
            $result = ($object->lastResponseCode == 201);
        }
        return $result;
    }

}
