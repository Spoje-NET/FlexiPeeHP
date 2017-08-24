<?php
/**
 * FlexiPeeHP - Evidence Relations.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Evidence Relations
 *
 * @link https://demo.flexibee.eu/devdoc/relations Provádění akcí
 */

class Relations
{
    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
 public static  $version = '2017.1.17';

    /**
     * Evidence banka-polozka (#banBanZapoctyPol) Relations.
     *
     * @var array
     */
 public static  $bankaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence adresar (Adresy firem) Relations.
     *
     * @var array
     */
 public static  $adresar = array (
  0 => 
  array (
    'url' => 'mistaUrceni',
    'evidenceType' => 'MISTO_URCENI',
    'name' => 'Místa určení',
  ),
  1 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  2 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  3 => 
  array (
    'url' => 'rezervace',
    'evidenceType' => 'REZERVACE',
    'name' => 'Rezervace',
  ),
  4 => 
  array (
    'url' => 'dodavatele',
    'evidenceType' => 'DODAVATEL',
    'name' => 'Nákupní ceny',
  ),
  5 => 
  array (
    'url' => 'kontakty',
    'evidenceType' => 'ADR_KONTAKT',
    'name' => 'Kontakty',
  ),
  6 => 
  array (
    'url' => 'cenHladiny',
    'evidenceType' => 'CENOVA_UROVEN',
    'name' => 'Cenové úrovně',
  ),
  7 => 
  array (
    'url' => 'smlouvy',
    'evidenceType' => 'SMLOUVA',
    'name' => 'Smlouvy',
  ),
  8 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  9 => 
  array (
    'url' => 'odberatele',
    'evidenceType' => 'ODBERATEL',
    'name' => 'Prodejní ceny',
  ),
  10 => 
  array (
    'url' => 'bankovniSpojeni',
    'evidenceType' => 'ADR_BANKOVNI_UCET',
    'name' => 'Bankovní spojení',
  ),
);
    /**
     * Evidence atribut (Atributy) Relations.
     *
     * @var array
     */
 public static  $atribut = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence banka (Banka) Relations.
     *
     * @var array
     */
 public static  $banka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'BANKA_POLOZKA',
    'name' => 'Položky bankovního dokladu',
  ),
);
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Relations.
     *
     * @var array
     */
 public static  $adresarBankovniUcet = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cenova-uroven (Cenové úrovně) Relations.
     *
     * @var array
     */
 public static  $cenovaUroven = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'skupinyZbozi',
    'evidenceType' => 'SKUPINA_ZBOZI',
    'name' => 'Skupiny zboží',
  ),
  2 => 
  array (
    'url' => 'firmy',
    'evidenceType' => 'ADRESAR',
    'name' => 'Adresář',
  ),
  3 => 
  array (
    'url' => 'skupinyCen',
    'evidenceType' => 'CENIKOVA_SKUPINA',
    'name' => 'Ceníkové skupiny',
  ),
  4 => 
  array (
    'url' => 'ceniky',
    'evidenceType' => 'CENIK',
    'name' => 'Ceníky',
  ),
);
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Relations.
     *
     * @var array
     */
 public static  $odberatel = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cenik (Ceník) Relations.
     *
     * @var array
     */
 public static  $cenik = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'poplatky',
    'evidenceType' => 'POPLATKY',
    'name' => 'Poplatky',
  ),
  2 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  3 => 
  array (
    'url' => 'rezervace',
    'evidenceType' => 'REZERVACE',
    'name' => 'Rezervace',
  ),
  4 => 
  array (
    'url' => 'vyrobni-cisla',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  5 => 
  array (
    'url' => 'sklad-karty',
    'evidenceType' => 'SKLADOVA_KARTA',
    'name' => 'Skladová karta',
  ),
  6 => 
  array (
    'url' => 'dodavatele',
    'evidenceType' => 'DODAVATEL',
    'name' => 'Nákupní ceny',
  ),
  7 => 
  array (
    'url' => 'sady-a-komplety',
    'evidenceType' => 'SADY_A_KOMPLETY',
    'name' => 'Sady a komplety',
  ),
  8 => 
  array (
    'url' => 'cenHladiny',
    'evidenceType' => 'CENOVA_UROVEN',
    'name' => 'Cenové úrovně',
  ),
  9 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  10 => 
  array (
    'url' => 'prislustenstvi',
    'evidenceType' => 'PRISLUSENSTVI',
    'name' => 'Příslušenství',
  ),
  11 => 
  array (
    'url' => 'atributy',
    'evidenceType' => 'ATRIBUT',
    'name' => 'Atributy',
  ),
  12 => 
  array (
    'url' => 'podobne-zbozi',
    'evidenceType' => 'PODOBNE_ZBOZI',
    'name' => 'Podobné zboží',
  ),
  13 => 
  array (
    'url' => 'odberatele',
    'evidenceType' => 'ODBERATEL',
    'name' => 'Prodejní ceny',
  ),
);
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Relations.
     *
     * @var array
     */
 public static  $cenikovaSkupina = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Relations.
     *
     * @var array
     */
 public static  $certifikacniAutorita = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Relations.
     *
     * @var array
     */
 public static  $intrastatDodaciPodminky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Relations.
     *
     * @var array
     */
 public static  $dodavatelskaSmlouva = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkySmlouvy',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Standardní položky smluv',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  3 => 
  array (
    'url' => 'polozkySmlouvyExt',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Externí položky smluv',
  ),
);
    /**
     * Evidence dodavatel (Dodavatelé) Relations.
     *
     * @var array
     */
 public static  $dodavatel = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Relations.
     *
     * @var array
     */
 public static  $radaBanka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Relations.
     *
     * @var array
     */
 public static  $radaInternihoDokladu = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Relations.
     *
     * @var array
     */
 public static  $radaPohledavky = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Relations.
     *
     * @var array
     */
 public static  $radaPokladniPohyb = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Relations.
     *
     * @var array
     */
 public static  $radaFakturyPrijate = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Relations.
     *
     * @var array
     */
 public static  $radaNabidkyPrijate = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Relations.
     *
     * @var array
     */
 public static  $radaObjednavkyPrijate = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Relations.
     *
     * @var array
     */
 public static  $radaPoptavkyPrijate = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Relations.
     *
     * @var array
     */
 public static  $radaSkladovyPohyb = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Relations.
     *
     * @var array
     */
 public static  $radaFakturyVydane = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Relations.
     *
     * @var array
     */
 public static  $radaNabidkyVydane = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Relations.
     *
     * @var array
     */
 public static  $radaObjednavkyVydane = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Relations.
     *
     * @var array
     */
 public static  $radaPoptavkyVydane = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Relations.
     *
     * @var array
     */
 public static  $radaZavazku = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Relations.
     *
     * @var array
     */
 public static  $intrastatDruhDopravy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence forma-dopravy (Formy dopravy) Relations.
     *
     * @var array
     */
 public static  $formaDopravy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence forma-uhrady (Formy úhrady) Relations.
     *
     * @var array
     */
 public static  $formaUhrady = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'zauctovani',
    'evidenceType' => 'FORMA_UHRADY_ZAUCTOVANI',
    'name' => 'Zaúčtování',
  ),
);
    /**
     * Evidence interni-doklad (Interní doklady) Relations.
     *
     * @var array
     */
 public static  $interniDoklad = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'INTERNI_DOKLAD_POLOZKA',
    'name' => 'Položky interního dokladu',
  ),
);
    /**
     * Evidence inventura (Inventury) Relations.
     *
     * @var array
     */
 public static  $inventura = array (
  0 => 
  array (
    'url' => 'inventura-polozky',
    'evidenceType' => 'INVENTURA_POLOZKA',
    'name' => 'Položka inventury',
  ),
  1 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
);
    /**
     * Evidence konst-symbol (Konstantní symboly) Relations.
     *
     * @var array
     */
 public static  $konstSymbol = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence kontakt (Kontakty) Relations.
     *
     * @var array
     */
 public static  $kontakt = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Relations.
     *
     * @var array
     */
 public static  $intrastatKrajUrceni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence kurz (Kurzy) Relations.
     *
     * @var array
     */
 public static  $kurz = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Relations.
     *
     * @var array
     */
 public static  $intrastatKurz = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Relations.
     *
     * @var array
     */
 public static  $kurzProCenotvorbu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence kusovnik (Kusovník) Relations.
     *
     * @var array
     */
 public static  $kusovnik = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Relations.
     *
     * @var array
     */
 public static  $intrastatKodNomenklatury = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence leasing (Leasing) Relations.
     *
     * @var array
     */
 public static  $leasing = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'zapujcky',
    'evidenceType' => 'ZAPUJCKA',
    'name' => 'Zápůjčky/odpovědná osoba',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence majetek (Majetek) Relations.
     *
     * @var array
     */
 public static  $majetek = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'majetek-udalosti',
    'evidenceType' => 'MAJETEK_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'zapujcky',
    'evidenceType' => 'ZAPUJCKA',
    'name' => 'Zápůjčky/odpovědná osoba',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence mapovani-skladu (Mapování skladů) Relations.
     *
     * @var array
     */
 public static  $mapovaniSkladu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence misto-urceni (Místa určení) Relations.
     *
     * @var array
     */
 public static  $mistoUrceni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence mena (Měny) Relations.
     *
     * @var array
     */
 public static  $mena = array (
  0 => 
  array (
    'url' => 'kurzy',
    'evidenceType' => 'KURZ',
    'name' => 'Kurzy',
  ),
  1 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
);
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Relations.
     *
     * @var array
     */
 public static  $intrastatMernaJednotka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Relations.
     *
     * @var array
     */
 public static  $mernaJednotka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence naklad (Náklady na události / aktivity) Relations.
     *
     * @var array
     */
 public static  $naklad = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Relations.
     *
     * @var array
     */
 public static  $intrastatObchodniTransakce = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence smlouva (Odběratelské smlouvy) Relations.
     *
     * @var array
     */
 public static  $smlouva = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkySmlouvy',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Standardní položky smluv',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  3 => 
  array (
    'url' => 'polozkySmlouvyExt',
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'name' => 'Externí položky smluv',
  ),
);
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Relations.
     *
     * @var array
     */
 public static  $odpisovaSkupina = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pohledavka (Ostatní pohledávky) Relations.
     *
     * @var array
     */
 public static  $pohledavka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POHLEDAVKA_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence zavazek (Ostatní závazky) Relations.
     *
     * @var array
     */
 public static  $zavazek = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'ZAVAZEK_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Relations.
     *
     * @var array
     */
 public static  $uzivatelskyDotazParametr = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Relations.
     *
     * @var array
     */
 public static  $penezniUstav = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence podobne-zbozi (Podobné) Relations.
     *
     * @var array
     */
 public static  $podobneZbozi = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pokladni-pohyb (Pokladna) Relations.
     *
     * @var array
     */
 public static  $pokladniPohyb = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POKLADNI_POHYB_POLOZKA',
    'name' => 'Položky pokladního dokladu',
  ),
);
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Relations.
     *
     * @var array
     */
 public static  $parametr = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Relations.
     *
     * @var array
     */
 public static  $prikazKInkasuPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Relations.
     *
     * @var array
     */
 public static  $prikazKUhradePolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Relations.
     *
     * @var array
     */
 public static  $interniDokladPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence inventura-polozka (Položky inventur) Relations.
     *
     * @var array
     */
 public static  $inventuraPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Relations.
     *
     * @var array
     */
 public static  $pohledavkaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Relations.
     *
     * @var array
     */
 public static  $zavazekPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Relations.
     *
     * @var array
     */
 public static  $pokladniPohybPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  2 => 
  array (
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
);
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Relations.
     *
     * @var array
     */
 public static  $nabidkaPrijataPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Relations.
     *
     * @var array
     */
 public static  $objednavkaPrijataPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Relations.
     *
     * @var array
     */
 public static  $fakturaPrijataPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  2 => 
  array (
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
);
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Relations.
     *
     * @var array
     */
 public static  $poptavkaPrijataPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Relations.
     *
     * @var array
     */
 public static  $skladovyPohybPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  2 => 
  array (
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
);
    /**
     * Evidence smlouva-polozka (Položky smluv) Relations.
     *
     * @var array
     */
 public static  $smlouvaPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Relations.
     *
     * @var array
     */
 public static  $nabidkaVydanaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Relations.
     *
     * @var array
     */
 public static  $objednavkaVydanaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Relations.
     *
     * @var array
     */
 public static  $poptavkaVydanaPolozka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Relations.
     *
     * @var array
     */
 public static  $fakturaVydanaPolozka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'vyrobniCislaVydana',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
  2 => 
  array (
    'url' => 'vyrobniCislaPrijata',
    'evidenceType' => 'VYROBNI_CISLA',
    'name' => 'Výrobní čísla',
  ),
);
    /**
     * Evidence poplatek (Poplatky) Relations.
     *
     * @var array
     */
 public static  $poplatek = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence psc (Poštovní směrovací čísla) Relations.
     *
     * @var array
     */
 public static  $psc = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prodejka (Prodejní kasa) Relations.
     *
     * @var array
     */
 public static  $prodejka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_OUT_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence text (Předdefinované texty) Relations.
     *
     * @var array
     */
 public static  $text = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Relations.
     *
     * @var array
     */
 public static  $predpisZauctovani = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence faktura-prijata (Přijaté faktury) Relations.
     *
     * @var array
     */
 public static  $fakturaPrijata = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_IN_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Relations.
     *
     * @var array
     */
 public static  $nabidkaPrijata = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'NABIDKA_IN_POLOZKA',
    'name' => 'Položky nabídky přijaté',
  ),
);
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Relations.
     *
     * @var array
     */
 public static  $objednavkaPrijata = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'OBJEDNAVKA_IN_POLOZKA',
    'name' => 'Položky objednávky přijaté',
  ),
);
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Relations.
     *
     * @var array
     */
 public static  $poptavkaPrijata = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POPTAVKA_IN_POLOZKA',
    'name' => 'Položky poptávky přijaté',
  ),
);
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Relations.
     *
     * @var array
     */
 public static  $skladovyPohyb = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
    'name' => 'Položky příjemky/výdejky',
  ),
);
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Relations.
     *
     * @var array
     */
 public static  $prikazKInkasu = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozky',
    'evidenceType' => 'PRIKAZ_K_UHRADE_POLOZKA',
    'name' => 'Položky',
  ),
);
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Relations.
     *
     * @var array
     */
 public static  $prikazKUhrade = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozky',
    'evidenceType' => 'PRIKAZ_K_UHRADE_POLOZKA',
    'name' => 'Položky',
  ),
);
    /**
     * Evidence priloha (Příloha) Relations.
     *
     * @var array
     */
 public static  $priloha = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence prislustenstvi (Příslušenství) Relations.
     *
     * @var array
     */
 public static  $prislustenstvi = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence rezervace (Rezervace) Relations.
     *
     * @var array
     */
 public static  $rezervace = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Relations.
     *
     * @var array
     */
 public static  $rocniRada = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence sady-a-komplety (Sady) Relations.
     *
     * @var array
     */
 public static  $sadyAKomplety = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence sazba-dph (Sazby DPH) Relations.
     *
     * @var array
     */
 public static  $sazbaDph = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Relations.
     *
     * @var array
     */
 public static  $dashboardSharing = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Relations.
     *
     * @var array
     */
 public static  $bankovniUcet = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence pokladna (Seznam pokladen) Relations.
     *
     * @var array
     */
 public static  $pokladna = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Relations.
     *
     * @var array
     */
 public static  $typProdejky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence sklad (Seznam skladů) Relations.
     *
     * @var array
     */
 public static  $sklad = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Relations.
     *
     * @var array
     */
 public static  $preneseniDph = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skladova-karta (Skladové karty) Relations.
     *
     * @var array
     */
 public static  $skladovaKarta = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'skladovy-pohyb-polozky',
    'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
    'name' => 'Položky příjemky/výdejky',
  ),
);
    /**
     * Evidence skupina-atributu (Skupiny atributů) Relations.
     *
     * @var array
     */
 public static  $skupinaAtributu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skupina-firem (Skupiny firem) Relations.
     *
     * @var array
     */
 public static  $skupinaFirem = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Relations.
     *
     * @var array
     */
 public static  $skupinaZbozi = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence skupina-stitku (Skupiny štítků) Relations.
     *
     * @var array
     */
 public static  $skupinaStitku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dashboard-panel (Správa přehledů) Relations.
     *
     * @var array
     */
 public static  $dashboardPanel = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Relations.
     *
     * @var array
     */
 public static  $ucetniOsnova = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stav-smlouvy (Stavy smluv) Relations.
     *
     * @var array
     */
 public static  $stavSmlouvy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stav-zakazky (Stavy zakázek) Relations.
     *
     * @var array
     */
 public static  $stavZakazky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stat (Státy) Relations.
     *
     * @var array
     */
 public static  $stat = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stredisko (Střediska) Relations.
     *
     * @var array
     */
 public static  $stredisko = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-atributu (Typy atributů) Relations.
     *
     * @var array
     */
 public static  $typAtributu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Relations.
     *
     * @var array
     */
 public static  $typBanka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Relations.
     *
     * @var array
     */
 public static  $dodavatelskyTypSmlouvy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Relations.
     *
     * @var array
     */
 public static  $typInternihoDokladu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-leasingu (Typy leasingů) Relations.
     *
     * @var array
     */
 public static  $typLeasingu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-majetku (Typy majetků) Relations.
     *
     * @var array
     */
 public static  $typMajetku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Relations.
     *
     * @var array
     */
 public static  $typNakladu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Relations.
     *
     * @var array
     */
 public static  $typSmlouvy = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Relations.
     *
     * @var array
     */
 public static  $typPohledavky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Relations.
     *
     * @var array
     */
 public static  $typZavazku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Relations.
     *
     * @var array
     */
 public static  $typPokladniPohyb = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Relations.
     *
     * @var array
     */
 public static  $typFakturyPrijate = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Relations.
     *
     * @var array
     */
 public static  $typNabidkyPrijate = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Relations.
     *
     * @var array
     */
 public static  $typObjednavkyPrijate = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Relations.
     *
     * @var array
     */
 public static  $typPoptavkyPrijate = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Relations.
     *
     * @var array
     */
 public static  $typSkladovyPohyb = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Relations.
     *
     * @var array
     */
 public static  $typAktivity = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Relations.
     *
     * @var array
     */
 public static  $typUzivatelskeVazby = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Relations.
     *
     * @var array
     */
 public static  $typFakturyVydane = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Relations.
     *
     * @var array
     */
 public static  $typNabidkyVydane = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Relations.
     *
     * @var array
     */
 public static  $typObjednavkyVydane = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Relations.
     *
     * @var array
     */
 public static  $typPoptavkyVydane = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-zakazky (Typy zakázek) Relations.
     *
     * @var array
     */
 public static  $typZakazky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Relations.
     *
     * @var array
     */
 public static  $typVzajemnychZapoctu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence majetek-udalost (Události) Relations.
     *
     * @var array
     */
 public static  $majetekUdalost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence udalost (Události, aktivity) Relations.
     *
     * @var array
     */
 public static  $udalost = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'naklady',
    'evidenceType' => 'NAKLAD',
    'name' => 'Náklady aktivity',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence umisteni (Umístění) Relations.
     *
     * @var array
     */
 public static  $umisteni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Relations.
     *
     * @var array
     */
 public static  $umisteniVeSkladuMistnost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Relations.
     *
     * @var array
     */
 public static  $umisteniVeSkladuPolice = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Relations.
     *
     * @var array
     */
 public static  $umisteniVeSkladuRegal = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Relations.
     *
     * @var array
     */
 public static  $umisteniVeSkladu = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence sablona-upominky (Upomínky) Relations.
     *
     * @var array
     */
 public static  $sablonaUpominky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence strom (Uzel stromu) Relations.
     *
     * @var array
     */
 public static  $strom = array (
  0 => 'prilohy',
  1 => 'PRILOHA',
  2 => 'Přílohy',
);
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Relations.
     *
     * @var array
     */
 public static  $uzivatelskyDotaz = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'params',
    'evidenceType' => 'UZIVATELSKY_DOTAZ_PARAMETR',
    'name' => 'Parametry',
  ),
  2 => 
  array (
    'url' => 'props',
    'evidenceType' => 'UZIVATELSKY_DOTAZ_VLASTNOST',
    'name' => 'Vlastnosti',
  ),
);
    /**
     * Evidence filtr (Uživatelské filtry) Relations.
     *
     * @var array
     */
 public static  $filtr = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence custom-button (Uživatelské tlačítko) Relations.
     *
     * @var array
     */
 public static  $customButton = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Relations.
     *
     * @var array
     */
 public static  $uzivatelskyDotazVlastnost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence faktura-vydana (Vydané faktury) Relations.
     *
     * @var array
     */
 public static  $fakturaVydana = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'FAKTURA_OUT_POLOZKA',
    'name' => 'Položky faktur',
  ),
);
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Relations.
     *
     * @var array
     */
 public static  $nabidkaVydana = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'NABIDKA_OUT_POLOZKA',
    'name' => 'Položky nabídky vydané',
  ),
);
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Relations.
     *
     * @var array
     */
 public static  $objednavkaVydana = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'OBJEDNAVKA_OUT_POLOZKA',
    'name' => 'Položky objednávky vydané',
  ),
);
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Relations.
     *
     * @var array
     */
 public static  $poptavkaVydana = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'POPTAVKA_OUT_POLOZKA',
    'name' => 'Položky poptávky vydané',
  ),
);
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Relations.
     *
     * @var array
     */
 public static  $hodnoceniZakazky = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Relations.
     *
     * @var array
     */
 public static  $vzajemnyZapocet = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'vazby',
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'name' => 'Vazby mezi doklady',
  ),
  3 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
  4 => 
  array (
    'url' => 'polozkyDokladu',
    'evidenceType' => 'BANKA_POLOZKA',
    'name' => 'Položky bankovního dokladu',
  ),
);
    /**
     * Evidence zakazka (Zakázky) Relations.
     *
     * @var array
     */
 public static  $zakazka = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'udalosti',
    'evidenceType' => 'ADR_UDALOST',
    'name' => 'Události',
  ),
  2 => 
  array (
    'url' => 'prilohy',
    'evidenceType' => 'PRILOHA',
    'name' => 'Přílohy',
  ),
);
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Relations.
     *
     * @var array
     */
 public static  $formaUhradyZauctovani = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Relations.
     *
     * @var array
     */
 public static  $intrastatZvlastniPohyb = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence zapujcka (Zápůjčky) Relations.
     *
     * @var array
     */
 public static  $zapujcka = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence rada (dokladové řady) Relations.
     *
     * @var array
     */
 public static  $rada = array (
  0 => 
  array (
    'url' => 'uzivatelske-vazby',
    'evidenceType' => 'VAZBA',
    'name' => 'Uživatelské vazby',
  ),
  1 => 
  array (
    'url' => 'polozkyRady',
    'evidenceType' => 'ROCNI_RADA',
    'name' => 'Roční položky číselné řady',
  ),
);
    /**
     * Evidence ucet (Účtový rozvrh) Relations.
     *
     * @var array
     */
 public static  $ucet = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cinnost (Činnost) Relations.
     *
     * @var array
     */
 public static  $cinnost = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Relations.
     *
     * @var array
     */
 public static  $stavCeniku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Relations.
     *
     * @var array
     */
 public static  $typStavuCeniku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cislo-baliku (Čísla balíků) Relations.
     *
     * @var array
     */
 public static  $cisloBaliku = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Relations.
     *
     * @var array
     */
 public static  $cleneniKontrolniHlaseni = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Relations.
     *
     * @var array
     */
 public static  $cleneniDph = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
    /**
     * Evidence stitek (Štítky) Relations.
     *
     * @var array
     */
 public static  $stitek = array (
  0 => 'uzivatelske-vazby',
  1 => 'VAZBA',
  2 => 'Uživatelské vazby',
);
}
