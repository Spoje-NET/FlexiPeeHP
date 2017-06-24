<?php
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
 /**
 * Source FlexiBee server version.
 *
 * @var string
 */
 static public $version = '2017.1.12-beta-1';


    /**
     * Availble Formats.
     *
     * @see https://www.flexibee.eu/api/dokumentace/ref/format-types/
     * @var array formats known to flexibee
     */
    static public $formats = [
        'JS' => ['desc' => 'JavaScropt',
            'suffix' => 'js', 'content-type' => 'application/javascript', 'import' => false],
        'CSS' => ['desc' => 'Kaskádový styl',
            'suffix' => 'css', 'content-type' => 'text/css', 'import' => false],
        'HTML' => ['desc' => 'HTML stránka pro zobrazení informací na webové stránce.',
            'suffix' => 'html', 'content-type' => 'text/html', 'import' => false],
        'XML' => ['desc' => 'Strojově čitelná struktura ve formátu XML.', 'suffix' => 'xml',
            'content-type' => 'application/xml', 'import' => true],
        'JSON' => ['desc' => 'Strojově čitelná struktura ve formátu JSON. ', 'suffix' => 'json',
            'content-type' => 'application/json', 'import' => true],
        'CSV' => ['desc' => 'Tabulkový výstup do formátu CSV (Column Separated Values).',
            'suffix' => 'csv', 'content-type' => 'text/csv', 'import' => true],
        'DBF' => ['desc' => 'Databázový výstup ve formátu DBF (dBase).', 'suffix' => 'dbf',
            'content-type' => 'application/dbf', 'import' => true],
        'XLS' => ['desc' => 'Tabulkový výstup ve formátu Excel.', 'suffix' => 'xls',
            'content-type' => 'application/ms-excel', 'import' => true],
        'ISDOC' => ['desc' => 'e-faktura ISDOC.', 'suffix' => 'isdoc', 'content-type' => 'application/x-isdoc',
            'import' => false],
        'ISDOCx' => ['desc' => 'e-faktura ISDOC s PDF přílohou', 'suffix' => 'isdocx',
            'content-type' => 'application/x-isdocx',
            'import' => false],
        'EDI' => ['desc' => 'Elektronická výměna data (EDI) ve formátu INHOUSE.',
            'suffix' => 'edi', 'content-type' => 'application/x-edi-inhouse', 'import' => 'objednavka-prijata'],
        'PDF' => ['desc' => 'Generování tiskového reportu. Jedná se o stejnou funkci která je dostupná v aplikaci. Export do PDF',
            'suffix' => 'pdf', 'content-type' => 'application/pdf', 'import' => false],
        'vCard' => ['desc' => 'Výstup adresáře do formátu elektronické vizitky vCard.',
            'suffix' => 'vcf', 'content-type' => 'text/vcard', 'import' => false],
        'iCalendar' => ['desc' => 'Výstup do kalendáře ve formátu iCalendar. Lze takto exportovat události, ale také třeba splatnosti u přijatých či vydaných faktur.',
            'suffix' => 'ical', 'content-type' => 'text/calendar', 'import' => false]
    ];


    /**
     * Array of formats indexed by Content-Type
     *
     * @return array
     */
    static function byContentType()
    {
        return \Ease\Sand::reindexArrayBy(self::$formats, 'content-type');
    }

    /**
     * Array of formats indexed by Suffix
     *
     * @return array
     */
    static function bySuffix()
    {
        return \Ease\Sand::reindexArrayBy(self::$formats, 'suffix');
    }

    /**
     * Obtain Suffix for given content
     *
     * @param string $suffix
     * @return string
     */
    static function suffixToContentType($suffix)
    {
        $types = self::bySuffix($suffix);
        return isset($types[$suffix]) ? $types[$suffix]['content-type'] : null;
    }

    /**
     * Obtain Content-Type for given suffix
     *
     * @param string $contentType
     * @return string
     */
    static function contentTypeToSuffix($contentType)
    {
        $types = self::byContentType($contentType);
        return isset($types[$contentType]) ? $types[$contentType]['suffix'] : null;
    }

        /**
     * Evidence nastaveni (Nastavení) Formats.
     *
     * @var array
     */
 static public $nastaveni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
}
