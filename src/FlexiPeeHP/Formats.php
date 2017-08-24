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
 public static  $version = '2017.1.17';


    /**
     * Availble Formats.
     *
     * @see https://www.flexibee.eu/api/dokumentace/ref/format-types/
     * @var array formats known to flexibee
     */
    public static  $formats = [
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
            'suffix' => 'ical', 'content-type' => 'text/calendar', 'import' => false],
        'TEXT' => ['desc' => 'Prostý text', 'suffix' => 'txt',
            'content-type' => 'text/plain', 'import' => false],
    ];


    /**
     * Array of formats indexed by Content-Type
     *
     * @return array
     */
    public static  function byContentType()
    {
        return \Ease\Sand::reindexArrayBy(self::$formats, 'content-type');
    }

    /**
     * Array of formats indexed by Suffix
     *
     * @return array
     */
    public static  function bySuffix()
    {
        return \Ease\Sand::reindexArrayBy(self::$formats, 'suffix');
    }

    /**
     * Obtain Suffix for given content
     *
     * @param string $suffix
     * @return string
     */
    public static  function suffixToContentType($suffix)
    {
        $types = self::bySuffix();
        return isset($types[$suffix]) ? $types[$suffix]['content-type'] : null;
    }

    /**
     * Obtain Content-Type for given suffix
     *
     * @param string $contentType
     * @return string
     */
    public static  function contentTypeToSuffix($contentType)
    {
        $types = self::byContentType();
        return isset($types[$contentType]) ? $types[$contentType]['suffix'] : null;
    }

        /**
     * Evidence banka-polozka (#banBanZapoctyPol) Formats.
     *
     * @var array
     */
 public static  $bankaPolozka = array (
  'JS' => 'js',
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
  'DBF' => 'dbf',
  'XLS' => 'xls',
  'ISDOC' => 'isdoc',
  'ISDOCx' => 'isdocx',
);
    /**
     * Evidence pravo-viditelnosti (#uzivPristup) Formats.
     *
     * @var array
     */
 public static  $pravoViditelnosti = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence adresar (Adresy firem) Formats.
     *
     * @var array
     */
 public static  $adresar = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence atribut (Atributy) Formats.
     *
     * @var array
     */
 public static  $atribut = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence banka (Banka) Formats.
     *
     * @var array
     */
 public static  $banka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence format-elektronickeho-bankovnictvi (Bankovní formáty) Formats.
     *
     * @var array
     */
 public static  $formatElektronickehoBankovnictvi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Formats.
     *
     * @var array
     */
 public static  $adresarBankovniUcet = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenova-uroven (Cenové úrovně) Formats.
     *
     * @var array
     */
 public static  $cenovaUroven = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Formats.
     *
     * @var array
     */
 public static  $odberatel = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenik (Ceník) Formats.
     *
     * @var array
     */
 public static  $cenik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Formats.
     *
     * @var array
     */
 public static  $cenikovaSkupina = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Formats.
     *
     * @var array
     */
 public static  $certifikacniAutorita = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Formats.
     *
     * @var array
     */
 public static  $intrastatDodaciPodminky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Formats.
     *
     * @var array
     */
 public static  $dodavatelskaSmlouva = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dodavatel (Dodavatelé) Formats.
     *
     * @var array
     */
 public static  $dodavatel = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Formats.
     *
     * @var array
     */
 public static  $radaBanka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Formats.
     *
     * @var array
     */
 public static  $radaInternihoDokladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Formats.
     *
     * @var array
     */
 public static  $radaPohledavky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Formats.
     *
     * @var array
     */
 public static  $radaPokladniPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Formats.
     *
     * @var array
     */
 public static  $radaFakturyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Formats.
     *
     * @var array
     */
 public static  $radaNabidkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Formats.
     *
     * @var array
     */
 public static  $radaObjednavkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Formats.
     *
     * @var array
     */
 public static  $radaPoptavkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Formats.
     *
     * @var array
     */
 public static  $radaSkladovyPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Formats.
     *
     * @var array
     */
 public static  $radaFakturyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Formats.
     *
     * @var array
     */
 public static  $radaNabidkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Formats.
     *
     * @var array
     */
 public static  $radaObjednavkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Formats.
     *
     * @var array
     */
 public static  $radaPoptavkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Formats.
     *
     * @var array
     */
 public static  $radaZavazku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Formats.
     *
     * @var array
     */
 public static  $intrastatDruhDopravy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence eet-komunikace (EET komunikace) Formats.
     *
     * @var array
     */
 public static  $eetKomunikace = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence forma-dopravy (Formy dopravy) Formats.
     *
     * @var array
     */
 public static  $formaDopravy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence forma-uhrady (Formy úhrady) Formats.
     *
     * @var array
     */
 public static  $formaUhrady = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence hlavni-kniha (Hlavní kniha) Formats.
     *
     * @var array
     */
 public static  $hlavniKniha = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence individualni-cenik (Individuální ceník) Formats.
     *
     * @var array
     */
 public static  $individualniCenik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence interni-doklad (Interní doklady) Formats.
     *
     * @var array
     */
 public static  $interniDoklad = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence inventura (Inventury) Formats.
     *
     * @var array
     */
 public static  $inventura = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence konst-symbol (Konstantní symboly) Formats.
     *
     * @var array
     */
 public static  $konstSymbol = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence kontakt (Kontakty) Formats.
     *
     * @var array
     */
 public static  $kontakt = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Formats.
     *
     * @var array
     */
 public static  $intrastatKrajUrceni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence kurz (Kurzy) Formats.
     *
     * @var array
     */
 public static  $kurz = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Formats.
     *
     * @var array
     */
 public static  $intrastatKurz = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Formats.
     *
     * @var array
     */
 public static  $kurzProCenotvorbu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence kusovnik (Kusovník) Formats.
     *
     * @var array
     */
 public static  $kusovnik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Formats.
     *
     * @var array
     */
 public static  $intrastatKodNomenklatury = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence leasing (Leasing) Formats.
     *
     * @var array
     */
 public static  $leasing = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence majetek (Majetek) Formats.
     *
     * @var array
     */
 public static  $majetek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence mapovani-skladu (Mapování skladů) Formats.
     *
     * @var array
     */
 public static  $mapovaniSkladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence misto-urceni (Místa určení) Formats.
     *
     * @var array
     */
 public static  $mistoUrceni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence mena (Měny) Formats.
     *
     * @var array
     */
 public static  $mena = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Formats.
     *
     * @var array
     */
 public static  $intrastatMernaJednotka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Formats.
     *
     * @var array
     */
 public static  $mernaJednotka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nastaveni (Nastavení) Formats.
     *
     * @var array
     */
 public static  $nastaveni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence naklad (Náklady na události / aktivity) Formats.
     *
     * @var array
     */
 public static  $naklad = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenikovy-pohyb-nakup (Nákupní, prodejní a skladové pohyby) Formats.
     *
     * @var array
     */
 public static  $cenikovyPohybNakup = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cenikovy-pohyb-prodej (Nákupní, prodejní a skladové pohyby) Formats.
     *
     * @var array
     */
 public static  $cenikovyPohybProdej = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Formats.
     *
     * @var array
     */
 public static  $intrastatObchodniTransakce = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence strom-koren (Obecný strom) Formats.
     *
     * @var array
     */
 public static  $stromKoren = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence obratova-predvaha (Obratová předvaha) Formats.
     *
     * @var array
     */
 public static  $obratovaPredvaha = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence obrat (Obraty) Formats.
     *
     * @var array
     */
 public static  $obrat = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence smlouva (Odběratelské smlouvy) Formats.
     *
     * @var array
     */
 public static  $smlouva = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Formats.
     *
     * @var array
     */
 public static  $odpisovaSkupina = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pohledavka (Ostatní pohledávky) Formats.
     *
     * @var array
     */
 public static  $pohledavka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zavazek (Ostatní závazky) Formats.
     *
     * @var array
     */
 public static  $zavazek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Formats.
     *
     * @var array
     */
 public static  $uzivatelskyDotazParametr = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Formats.
     *
     * @var array
     */
 public static  $penezniUstav = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence podklady-dph (Podklady DPH) Formats.
     *
     * @var array
     */
 public static  $podkladyDph = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence podobne-zbozi (Podobné) Formats.
     *
     * @var array
     */
 public static  $podobneZbozi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pohyb-na-uctech (Pohyby na účtech) Formats.
     *
     * @var array
     */
 public static  $pohybNaUctech = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pokladni-pohyb (Pokladna) Formats.
     *
     * @var array
     */
 public static  $pokladniPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Formats.
     *
     * @var array
     */
 public static  $parametr = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Formats.
     *
     * @var array
     */
 public static  $prikazKInkasuPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Formats.
     *
     * @var array
     */
 public static  $prikazKUhradePolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Formats.
     *
     * @var array
     */
 public static  $interniDokladPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence inventura-polozka (Položky inventur) Formats.
     *
     * @var array
     */
 public static  $inventuraPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Formats.
     *
     * @var array
     */
 public static  $pohledavkaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Formats.
     *
     * @var array
     */
 public static  $zavazekPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Formats.
     *
     * @var array
     */
 public static  $pokladniPohybPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Formats.
     *
     * @var array
     */
 public static  $nabidkaPrijataPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Formats.
     *
     * @var array
     */
 public static  $objednavkaPrijataPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Formats.
     *
     * @var array
     */
 public static  $fakturaPrijataPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Formats.
     *
     * @var array
     */
 public static  $poptavkaPrijataPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Formats.
     *
     * @var array
     */
 public static  $skladovyPohybPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence smlouva-polozka (Položky smluv) Formats.
     *
     * @var array
     */
 public static  $smlouvaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Formats.
     *
     * @var array
     */
 public static  $nabidkaVydanaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Formats.
     *
     * @var array
     */
 public static  $objednavkaVydanaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Formats.
     *
     * @var array
     */
 public static  $poptavkaVydanaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Formats.
     *
     * @var array
     */
 public static  $fakturaVydanaPolozka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poplatek (Poplatky) Formats.
     *
     * @var array
     */
 public static  $poplatek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence psc (Poštovní směrovací čísla) Formats.
     *
     * @var array
     */
 public static  $psc = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prodejka (Prodejní kasa) Formats.
     *
     * @var array
     */
 public static  $prodejka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence text (Předdefinované texty) Formats.
     *
     * @var array
     */
 public static  $text = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Formats.
     *
     * @var array
     */
 public static  $predpisZauctovani = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence faktura-prijata (Přijaté faktury) Formats.
     *
     * @var array
     */
 public static  $fakturaPrijata = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Formats.
     *
     * @var array
     */
 public static  $nabidkaPrijata = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Formats.
     *
     * @var array
     */
 public static  $objednavkaPrijata = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Formats.
     *
     * @var array
     */
 public static  $poptavkaPrijata = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Formats.
     *
     * @var array
     */
 public static  $skladovyPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Formats.
     *
     * @var array
     */
 public static  $prikazKInkasu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Formats.
     *
     * @var array
     */
 public static  $prikazKUhrade = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence priloha (Příloha) Formats.
     *
     * @var array
     */
 public static  $priloha = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prislustenstvi (Příslušenství) Formats.
     *
     * @var array
     */
 public static  $prislustenstvi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rezervace (Rezervace) Formats.
     *
     * @var array
     */
 public static  $rezervace = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Formats.
     *
     * @var array
     */
 public static  $rocniRada = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence sady-a-komplety (Sady) Formats.
     *
     * @var array
     */
 public static  $sadyAKomplety = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence saldo (Saldo) Formats.
     *
     * @var array
     */
 public static  $saldo = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence sazba-dph (Sazby DPH) Formats.
     *
     * @var array
     */
 public static  $sazbaDph = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Formats.
     *
     * @var array
     */
 public static  $dashboardSharing = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Formats.
     *
     * @var array
     */
 public static  $bankovniUcet = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence pokladna (Seznam pokladen) Formats.
     *
     * @var array
     */
 public static  $pokladna = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Formats.
     *
     * @var array
     */
 public static  $typProdejky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence sklad (Seznam skladů) Formats.
     *
     * @var array
     */
 public static  $sklad = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Formats.
     *
     * @var array
     */
 public static  $preneseniDph = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skladova-karta (Skladové karty) Formats.
     *
     * @var array
     */
 public static  $skladovaKarta = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-atributu (Skupiny atributů) Formats.
     *
     * @var array
     */
 public static  $skupinaAtributu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-firem (Skupiny firem) Formats.
     *
     * @var array
     */
 public static  $skupinaFirem = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Formats.
     *
     * @var array
     */
 public static  $skupinaZbozi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence skupina-stitku (Skupiny štítků) Formats.
     *
     * @var array
     */
 public static  $skupinaStitku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rozvaha-po-uctech (Soupis aktiv a pasiv) Formats.
     *
     * @var array
     */
 public static  $rozvahaPoUctech = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dashboard-panel (Správa přehledů) Formats.
     *
     * @var array
     */
 public static  $dashboardPanel = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Formats.
     *
     * @var array
     */
 public static  $ucetniOsnova = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-skladu-k-datu (Stav skladu k datu) Formats.
     *
     * @var array
     */
 public static  $stavSkladuKDatu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence saldo-k-datu (Stav úhrad k datu) Formats.
     *
     * @var array
     */
 public static  $saldoKDatu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-smlouvy (Stavy smluv) Formats.
     *
     * @var array
     */
 public static  $stavSmlouvy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-zakazky (Stavy zakázek) Formats.
     *
     * @var array
     */
 public static  $stavZakazky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-uctu (Stavy účtů) Formats.
     *
     * @var array
     */
 public static  $stavUctu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stat (Státy) Formats.
     *
     * @var array
     */
 public static  $stat = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stredisko (Střediska) Formats.
     *
     * @var array
     */
 public static  $stredisko = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-organizace (Typ organizace) Formats.
     *
     * @var array
     */
 public static  $typOrganizace = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-atributu (Typy atributů) Formats.
     *
     * @var array
     */
 public static  $typAtributu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Formats.
     *
     * @var array
     */
 public static  $typBanka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Formats.
     *
     * @var array
     */
 public static  $dodavatelskyTypSmlouvy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Formats.
     *
     * @var array
     */
 public static  $typInternihoDokladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-leasingu (Typy leasingů) Formats.
     *
     * @var array
     */
 public static  $typLeasingu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-majetku (Typy majetků) Formats.
     *
     * @var array
     */
 public static  $typMajetku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Formats.
     *
     * @var array
     */
 public static  $typNakladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Formats.
     *
     * @var array
     */
 public static  $typSmlouvy = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Formats.
     *
     * @var array
     */
 public static  $typPohledavky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Formats.
     *
     * @var array
     */
 public static  $typZavazku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Formats.
     *
     * @var array
     */
 public static  $typPokladniPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Formats.
     *
     * @var array
     */
 public static  $typFakturyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Formats.
     *
     * @var array
     */
 public static  $typNabidkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Formats.
     *
     * @var array
     */
 public static  $typObjednavkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Formats.
     *
     * @var array
     */
 public static  $typPoptavkyPrijate = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Formats.
     *
     * @var array
     */
 public static  $typSkladovyPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Formats.
     *
     * @var array
     */
 public static  $typAktivity = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Formats.
     *
     * @var array
     */
 public static  $typUzivatelskeVazby = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Formats.
     *
     * @var array
     */
 public static  $typFakturyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Formats.
     *
     * @var array
     */
 public static  $typNabidkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Formats.
     *
     * @var array
     */
 public static  $typObjednavkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Formats.
     *
     * @var array
     */
 public static  $typPoptavkyVydane = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-zakazky (Typy zakázek) Formats.
     *
     * @var array
     */
 public static  $typZakazky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Formats.
     *
     * @var array
     */
 public static  $typVzajemnychZapoctu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence majetek-udalost (Události) Formats.
     *
     * @var array
     */
 public static  $majetekUdalost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence udalost (Události, aktivity) Formats.
     *
     * @var array
     */
 public static  $udalost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni (Umístění) Formats.
     *
     * @var array
     */
 public static  $umisteni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Formats.
     *
     * @var array
     */
 public static  $umisteniVeSkladuMistnost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Formats.
     *
     * @var array
     */
 public static  $umisteniVeSkladuPolice = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Formats.
     *
     * @var array
     */
 public static  $umisteniVeSkladuRegal = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Formats.
     *
     * @var array
     */
 public static  $umisteniVeSkladu = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence sablona-upominky (Upomínky) Formats.
     *
     * @var array
     */
 public static  $sablonaUpominky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence strom (Uzel stromu) Formats.
     *
     * @var array
     */
 public static  $strom = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Formats.
     *
     * @var array
     */
 public static  $uzivatelskyDotaz = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence filtr (Uživatelské filtry) Formats.
     *
     * @var array
     */
 public static  $filtr = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence custom-button (Uživatelské tlačítko) Formats.
     *
     * @var array
     */
 public static  $customButton = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatelska-vazba (Uživatelské vazby) Formats.
     *
     * @var array
     */
 public static  $uzivatelskaVazba = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence strom-cenik (Vazba uzlu na objekt) Formats.
     *
     * @var array
     */
 public static  $stromCenik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence vazba (Vazby dokladu) Formats.
     *
     * @var array
     */
 public static  $vazba = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Formats.
     *
     * @var array
     */
 public static  $uzivatelskyDotazVlastnost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence faktura-vydana (Vydané faktury) Formats.
     *
     * @var array
     */
 public static  $fakturaVydana = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Formats.
     *
     * @var array
     */
 public static  $nabidkaVydana = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Formats.
     *
     * @var array
     */
 public static  $objednavkaVydana = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Formats.
     *
     * @var array
     */
 public static  $poptavkaVydana = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Formats.
     *
     * @var array
     */
 public static  $hodnoceniZakazky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Formats.
     *
     * @var array
     */
 public static  $vzajemnyZapocet = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence danova-evidence (Výkaz daňové evidence) Formats.
     *
     * @var array
     */
 public static  $danovaEvidence = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence vykaz-hospodareni (Výkaz hospodaření za měsíc) Formats.
     *
     * @var array
     */
 public static  $vykazHospodareni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence vyrobni-cislo (Výrobní čísla) Formats.
     *
     * @var array
     */
 public static  $vyrobniCislo = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zakazka (Zakázky) Formats.
     *
     * @var array
     */
 public static  $zakazka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Formats.
     *
     * @var array
     */
 public static  $formaUhradyZauctovani = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Formats.
     *
     * @var array
     */
 public static  $intrastatZvlastniPohyb = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zapujcka (Zápůjčky) Formats.
     *
     * @var array
     */
 public static  $zapujcka = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence rada (dokladové řady) Formats.
     *
     * @var array
     */
 public static  $rada = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence prodejka-platba (Úhrada) Formats.
     *
     * @var array
     */
 public static  $prodejkaPlatba = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence setting-store (Úložiště nastavení) Formats.
     *
     * @var array
     */
 public static  $settingStore = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence analyza-zakazky (Účetní analýza zakázky) Formats.
     *
     * @var array
     */
 public static  $analyzaZakazky = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ucetni-denik (Účetní deník) Formats.
     *
     * @var array
     */
 public static  $ucetniDenik = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ucetni-obdobi (Účetní období) Formats.
     *
     * @var array
     */
 public static  $ucetniObdobi = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence ucet (Účtový rozvrh) Formats.
     *
     * @var array
     */
 public static  $ucet = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cinnost (Činnost) Formats.
     *
     * @var array
     */
 public static  $cinnost = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Formats.
     *
     * @var array
     */
 public static  $stavCeniku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Formats.
     *
     * @var array
     */
 public static  $typStavuCeniku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cislo-baliku (Čísla balíků) Formats.
     *
     * @var array
     */
 public static  $cisloBaliku = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Formats.
     *
     * @var array
     */
 public static  $cleneniKontrolniHlaseni = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Formats.
     *
     * @var array
     */
 public static  $cleneniDph = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence stitek (Štítky) Formats.
     *
     * @var array
     */
 public static  $stitek = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
    /**
     * Evidence zurnal (Žurnál) Formats.
     *
     * @var array
     */
 public static  $zurnal = array (
  'HTML' => 'html',
  'XML' => 'xml',
  'JSON' => 'json',
  'CSV' => 'csv',
);
}
