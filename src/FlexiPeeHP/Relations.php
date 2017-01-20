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
    static public $version = '2016.4.13';

    /**
     * Evidence kontakt (Kontakty) Relations.
     *
     * @var array
     */
    static public $kontakt = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
    ];

    /**
     * Evidence adresar (Adresy firem) Relations.
     *
     * @var array
     */
    static public $adresar = [
        0 =>
        [
            'url' => 'mistaUrceni',
            'evidenceType' => 'MISTO_URCENI',
            'name' => 'Místa určení',
        ],
        1 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        2 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        3 =>
        [
            'url' => 'rezervace',
            'evidenceType' => 'REZERVACE',
            'name' => 'Rezervace',
        ],
        4 =>
        [
            'url' => 'dodavatele',
            'evidenceType' => 'DODAVATEL',
            'name' => 'Nákupní ceny',
        ],
        5 =>
        [
            'url' => 'kontakty',
            'evidenceType' => 'ADR_KONTAKT',
            'name' => 'Kontakty',
        ],
        6 =>
        [
            'url' => 'cenHladiny',
            'evidenceType' => 'CENOVA_UROVEN',
            'name' => 'Cenové úrovně',
        ],
        7 =>
        [
            'url' => 'smlouvy',
            'evidenceType' => 'SMLOUVA',
            'name' => 'Smlouvy',
        ],
        8 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        9 =>
        [
            'url' => 'odberatele',
            'evidenceType' => 'ODBERATEL',
            'name' => 'Prodejní ceny',
        ],
        10 =>
        [
            'url' => 'bankovniSpojeni',
            'evidenceType' => 'ADR_BANKOVNI_UCET',
            'name' => 'Bankovní spojení',
        ],
    ];

    /**
     * Evidence udalost (Události, aktivity) Relations.
     *
     * @var array
     */
    static public $udalost = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'naklady',
            'evidenceType' => 'NAKLAD',
            'name' => 'Náklady aktivity',
        ],
        2 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
    ];

    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Relations.
     *
     * @var array
     */
    static public $typAktivity = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Relations.
     *
     * @var array
     */
    static public $typNakladu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence naklad (Náklady na události / aktivity) Relations.
     *
     * @var array
     */
    static public $naklad = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Relations.
     *
     * @var array
     */
    static public $adresarBankovniUcet = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence skupina-firem (Skupiny firem) Relations.
     *
     * @var array
     */
    static public $skupinaFirem = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence smlouva (Odběratelské smlouvy) Relations.
     *
     * @var array
     */
    static public $smlouva = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkySmlouvy',
            'evidenceType' => 'SMLOUVA_POLOZKA',
            'name' => 'Standardní položky smluv',
        ],
        2 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        3 =>
        [
            'url' => 'polozkySmlouvyExt',
            'evidenceType' => 'SMLOUVA_POLOZKA',
            'name' => 'Externí položky smluv',
        ],
    ];

    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Relations.
     *
     * @var array
     */
    static public $dodavatelskaSmlouva = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkySmlouvy',
            'evidenceType' => 'SMLOUVA_POLOZKA',
            'name' => 'Standardní položky smluv',
        ],
        2 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        3 =>
        [
            'url' => 'polozkySmlouvyExt',
            'evidenceType' => 'SMLOUVA_POLOZKA',
            'name' => 'Externí položky smluv',
        ],
    ];

    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Relations.
     *
     * @var array
     */
    static public $typSmlouvy = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Relations.
     *
     * @var array
     */
    static public $dodavatelskyTypSmlouvy = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence stav-smlouvy (Stavy smluv) Relations.
     *
     * @var array
     */
    static public $stavSmlouvy = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence smlouva-polozka (Položky smluv) Relations.
     *
     * @var array
     */
    static public $smlouvaPolozka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
    ];

    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Relations.
     *
     * @var array
     */
    static public $objednavkaPrijata = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'OBJEDNAVKA_IN_POLOZKA',
            'name' => 'Položky objednávky přijaté',
        ],
    ];

    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Relations.
     *
     * @var array
     */
    static public $objednavkaPrijataPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Relations.
     *
     * @var array
     */
    static public $radaObjednavkyPrijate = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Relations.
     *
     * @var array
     */
    static public $typObjednavkyPrijate = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence objednavka-vydana (Vydané objednávky) Relations.
     *
     * @var array
     */
    static public $objednavkaVydana = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'OBJEDNAVKA_OUT_POLOZKA',
            'name' => 'Položky objednávky vydané',
        ],
    ];

    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Relations.
     *
     * @var array
     */
    static public $objednavkaVydanaPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Relations.
     *
     * @var array
     */
    static public $typObjednavkyVydane = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Relations.
     *
     * @var array
     */
    static public $radaObjednavkyVydane = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence poptavka-vydana (Vydané poptávky) Relations.
     *
     * @var array
     */
    static public $poptavkaVydana = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'POPTAVKA_OUT_POLOZKA',
            'name' => 'Položky poptávky vydané',
        ],
    ];

    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Relations.
     *
     * @var array
     */
    static public $poptavkaVydanaPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Relations.
     *
     * @var array
     */
    static public $typPoptavkyVydane = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Relations.
     *
     * @var array
     */
    static public $radaPoptavkyVydane = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Relations.
     *
     * @var array
     */
    static public $poptavkaPrijata = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'POPTAVKA_IN_POLOZKA',
            'name' => 'Položky poptávky přijaté',
        ],
    ];

    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Relations.
     *
     * @var array
     */
    static public $poptavkaPrijataPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Relations.
     *
     * @var array
     */
    static public $typPoptavkyPrijate = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Relations.
     *
     * @var array
     */
    static public $radaPoptavkyPrijate = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence nabidka-vydana (Vydané nabídky) Relations.
     *
     * @var array
     */
    static public $nabidkaVydana = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'NABIDKA_OUT_POLOZKA',
            'name' => 'Položky nabídky vydané',
        ],
    ];

    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Relations.
     *
     * @var array
     */
    static public $nabidkaVydanaPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Relations.
     *
     * @var array
     */
    static public $typNabidkyVydane = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Relations.
     *
     * @var array
     */
    static public $radaNabidkyVydane = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Relations.
     *
     * @var array
     */
    static public $nabidkaPrijata = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'NABIDKA_IN_POLOZKA',
            'name' => 'Položky nabídky přijaté',
        ],
    ];

    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Relations.
     *
     * @var array
     */
    static public $typNabidkyPrijate = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Relations.
     *
     * @var array
     */
    static public $nabidkaPrijataPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Relations.
     *
     * @var array
     */
    static public $radaNabidkyPrijate = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence faktura-prijata (Přijaté faktury) Relations.
     *
     * @var array
     */
    static public $fakturaPrijata = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'FAKTURA_IN_POLOZKA',
            'name' => 'Položky faktur',
        ],
    ];

    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Relations.
     *
     * @var array
     */
    static public $fakturaPrijataPolozka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'vyrobniCislaVydana',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
        2 =>
        [
            'url' => 'vyrobniCislaPrijata',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
    ];

    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Relations.
     *
     * @var array
     */
    static public $typFakturyPrijate = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Relations.
     *
     * @var array
     */
    static public $radaFakturyPrijate = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Relations.
     *
     * @var array
     */
    static public $predpisZauctovani = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada (dokladové řady) Relations.
     *
     * @var array
     */
    static public $rada = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Relations.
     *
     * @var array
     */
    static public $rocniRada = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence misto-urceni (Místa určení) Relations.
     *
     * @var array
     */
    static public $mistoUrceni = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence text (Předdefinované texty) Relations.
     *
     * @var array
     */
    static public $text = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence pokladni-pohyb (Pokladna) Relations.
     *
     * @var array
     */
    static public $pokladniPohyb = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'POKLADNI_POHYB_POLOZKA',
            'name' => 'Položky pokladního dokladu',
        ],
    ];

    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Relations.
     *
     * @var array
     */
    static public $pokladniPohybPolozka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'vyrobniCislaVydana',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
        2 =>
        [
            'url' => 'vyrobniCislaPrijata',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
    ];

    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Relations.
     *
     * @var array
     */
    static public $radaPokladniPohyb = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Relations.
     *
     * @var array
     */
    static public $typPokladniPohyb = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence banka (Banka) Relations.
     *
     * @var array
     */
    static public $banka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'BANKA_POLOZKA',
            'name' => 'Položky bankovního dokladu',
        ],
    ];

    /**
     * Evidence typ-banka (Typy bankovních dokladů) Relations.
     *
     * @var array
     */
    static public $typBanka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Relations.
     *
     * @var array
     */
    static public $radaBanka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence banka-polozka (#banBanZapoctyPol) Relations.
     *
     * @var array
     */
    static public $bankaPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence pohledavka (Ostatní pohledávky) Relations.
     *
     * @var array
     */
    static public $pohledavka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'POHLEDAVKA_POLOZKA',
            'name' => 'Položky faktur',
        ],
    ];

    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Relations.
     *
     * @var array
     */
    static public $pohledavkaPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Relations.
     *
     * @var array
     */
    static public $typPohledavky = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Relations.
     *
     * @var array
     */
    static public $radaPohledavky = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Relations.
     *
     * @var array
     */
    static public $bankovniUcet = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence pokladna (Seznam pokladen) Relations.
     *
     * @var array
     */
    static public $pokladna = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Relations.
     *
     * @var array
     */
    static public $prikazKUhrade = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozky',
            'evidenceType' => 'PRIKAZ_K_UHRADE_POLOZKA',
            'name' => 'Položky',
        ],
    ];

    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Relations.
     *
     * @var array
     */
    static public $prikazKUhradePolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Relations.
     *
     * @var array
     */
    static public $prikazKInkasu = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozky',
            'evidenceType' => 'PRIKAZ_K_UHRADE_POLOZKA',
            'name' => 'Položky',
        ],
    ];

    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Relations.
     *
     * @var array
     */
    static public $prikazKInkasuPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Relations.
     *
     * @var array
     */
    static public $vzajemnyZapocet = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'BANKA_POLOZKA',
            'name' => 'Položky bankovního dokladu',
        ],
    ];

    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Relations.
     *
     * @var array
     */
    static public $typVzajemnychZapoctu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Relations.
     *
     * @var array
     */
    static public $typInternihoDokladu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Relations.
     *
     * @var array
     */
    static public $radaInternihoDokladu = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence interni-doklad (Interní doklady) Relations.
     *
     * @var array
     */
    static public $interniDoklad = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'INTERNI_DOKLAD_POLOZKA',
            'name' => 'Položky interního dokladu',
        ],
    ];

    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Relations.
     *
     * @var array
     */
    static public $interniDokladPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence priloha (Příloha) Relations.
     *
     * @var array
     */
    static public $priloha = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence faktura-vydana (Vydané faktury) Relations.
     *
     * @var array
     */
    static public $fakturaVydana = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'FAKTURA_OUT_POLOZKA',
            'name' => 'Položky faktur',
        ],
    ];

    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Relations.
     *
     * @var array
     */
    static public $fakturaVydanaPolozka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'vyrobniCislaVydana',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
        2 =>
        [
            'url' => 'vyrobniCislaPrijata',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
    ];

    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Relations.
     *
     * @var array
     */
    static public $typFakturyVydane = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Relations.
     *
     * @var array
     */
    static public $radaFakturyVydane = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence prodejka (Prodejní kasa) Relations.
     *
     * @var array
     */
    static public $prodejka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'FAKTURA_OUT_POLOZKA',
            'name' => 'Položky faktur',
        ],
    ];

    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Relations.
     *
     * @var array
     */
    static public $typProdejky = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence kurz (Kurzy) Relations.
     *
     * @var array
     */
    static public $kurz = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence ucet (Účtový rozvrh) Relations.
     *
     * @var array
     */
    static public $ucet = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence mena (Měny) Relations.
     *
     * @var array
     */
    static public $mena = [
        0 =>
        [
            'url' => 'kurzy',
            'evidenceType' => 'KURZ',
            'name' => 'Kurzy',
        ],
        1 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence stat (Státy) Relations.
     *
     * @var array
     */
    static public $stat = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence cinnost (Činnost) Relations.
     *
     * @var array
     */
    static public $cinnost = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence stredisko (Střediska) Relations.
     *
     * @var array
     */
    static public $stredisko = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence sazba-dph (Sazby DPH) Relations.
     *
     * @var array
     */
    static public $sazbaDph = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence zakazka (Zakázky) Relations.
     *
     * @var array
     */
    static public $zakazka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
    ];

    /**
     * Evidence typ-zakazky (Typy zakázek) Relations.
     *
     * @var array
     */
    static public $typZakazky = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence stav-zakazky (Stavy zakázek) Relations.
     *
     * @var array
     */
    static public $stavZakazky = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Relations.
     *
     * @var array
     */
    static public $hodnoceniZakazky = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence konst-symbol (Konstantní symboly) Relations.
     *
     * @var array
     */
    static public $konstSymbol = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence merna-jednotka (Měrné jednotky ) Relations.
     *
     * @var array
     */
    static public $mernaJednotka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence cleneni-dph (Řádky přiznání DPH) Relations.
     *
     * @var array
     */
    static public $cleneniDph = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Relations.
     *
     * @var array
     */
    static public $cleneniKontrolniHlaseni = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence ucetni-osnova (Standardní účetní osnova) Relations.
     *
     * @var array
     */
    static public $ucetniOsnova = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Relations.
     *
     * @var array
     */
    static public $kurzProCenotvorbu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence penezni-ustav (Peněžní ústavy) Relations.
     *
     * @var array
     */
    static public $penezniUstav = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence psc (Poštovní směrovací čísla) Relations.
     *
     * @var array
     */
    static public $psc = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence stitek (Štítky) Relations.
     *
     * @var array
     */
    static public $stitek = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence skupina-stitku (Skupiny štítků) Relations.
     *
     * @var array
     */
    static public $skupinaStitku = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Relations.
     *
     * @var array
     */
    static public $preneseniDph = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence sablona-upominky (Upomínky) Relations.
     *
     * @var array
     */
    static public $sablonaUpominky = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence forma-uhrady (Formy úhrady) Relations.
     *
     * @var array
     */
    static public $formaUhrady = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'zauctovani',
            'evidenceType' => 'FORMA_UHRADY_ZAUCTOVANI',
            'name' => 'Zaúčtování',
        ],
    ];

    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Relations.
     *
     * @var array
     */
    static public $formaUhradyZauctovani = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence certifikacni-autorita (Certifikační autority) Relations.
     *
     * @var array
     */
    static public $certifikacniAutorita = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence forma-dopravy (Formy dopravy) Relations.
     *
     * @var array
     */
    static public $formaDopravy = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence cislo-baliku (Čísla balíků) Relations.
     *
     * @var array
     */
    static public $cisloBaliku = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Relations.
     *
     * @var array
     */
    static public $typUzivatelskeVazby = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Relations.
     *
     * @var array
     */
    static public $intrastatKrajUrceni = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Relations.
     *
     * @var array
     */
    static public $intrastatZvlastniPohyb = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Relations.
     *
     * @var array
     */
    static public $intrastatObchodniTransakce = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Relations.
     *
     * @var array
     */
    static public $intrastatDodaciPodminky = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Relations.
     *
     * @var array
     */
    static public $intrastatDruhDopravy = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Relations.
     *
     * @var array
     */
    static public $intrastatKurz = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Relations.
     *
     * @var array
     */
    static public $intrastatMernaJednotka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Relations.
     *
     * @var array
     */
    static public $intrastatKodNomenklatury = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rezervace (Rezervace) Relations.
     *
     * @var array
     */
    static public $rezervace = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence skladova-karta (Skladové karty) Relations.
     *
     * @var array
     */
    static public $skladovaKarta = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'skladovy-pohyb-polozky',
            'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
            'name' => 'Položky příjemky/výdejky',
        ],
    ];

    /**
     * Evidence cenik (Ceník) Relations.
     *
     * @var array
     */
    static public $cenik = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'poplatky',
            'evidenceType' => 'POPLATKY',
            'name' => 'Poplatky',
        ],
        2 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        3 =>
        [
            'url' => 'rezervace',
            'evidenceType' => 'REZERVACE',
            'name' => 'Rezervace',
        ],
        4 =>
        [
            'url' => 'vyrobni-cisla',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
        5 =>
        [
            'url' => 'sklad-karty',
            'evidenceType' => 'SKLADOVA_KARTA',
            'name' => 'Skladová karta',
        ],
        6 =>
        [
            'url' => 'dodavatele',
            'evidenceType' => 'DODAVATEL',
            'name' => 'Nákupní ceny',
        ],
        7 =>
        [
            'url' => 'sady-a-komplety',
            'evidenceType' => 'SADY_A_KOMPLETY',
            'name' => 'Sady a komplety',
        ],
        8 =>
        [
            'url' => 'cenHladiny',
            'evidenceType' => 'CENOVA_UROVEN',
            'name' => 'Cenové úrovně',
        ],
        9 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        10 =>
        [
            'url' => 'prislustenstvi',
            'evidenceType' => 'PRISLUSENSTVI',
            'name' => 'Příslušenství',
        ],
        11 =>
        [
            'url' => 'atributy',
            'evidenceType' => 'ATRIBUT',
            'name' => 'Atributy',
        ],
        12 =>
        [
            'url' => 'podobne-zbozi',
            'evidenceType' => 'PODOBNE_ZBOZI',
            'name' => 'Podobné zboží',
        ],
        13 =>
        [
            'url' => 'odberatele',
            'evidenceType' => 'ODBERATEL',
            'name' => 'Prodejní ceny',
        ],
    ];

    /**
     * Evidence dodavatel (Dodavatelé) Relations.
     *
     * @var array
     */
    static public $dodavatel = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Relations.
     *
     * @var array
     */
    static public $odberatel = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence cenova-uroven (Cenové úrovně) Relations.
     *
     * @var array
     */
    static public $cenovaUroven = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'skupinyZbozi',
            'evidenceType' => 'SKUPINA_ZBOZI',
            'name' => 'Skupiny zboží',
        ],
        2 =>
        [
            'url' => 'firmy',
            'evidenceType' => 'ADRESAR',
            'name' => 'Adresář',
        ],
        3 =>
        [
            'url' => 'skupinyCen',
            'evidenceType' => 'CENIKOVA_SKUPINA',
            'name' => 'Ceníkové skupiny',
        ],
        4 =>
        [
            'url' => 'ceniky',
            'evidenceType' => 'CENIK',
            'name' => 'Ceníky',
        ],
    ];

    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Relations.
     *
     * @var array
     */
    static public $cenikovaSkupina = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence poplatek (Poplatky) Relations.
     *
     * @var array
     */
    static public $poplatek = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence podobne-zbozi (Podobné) Relations.
     *
     * @var array
     */
    static public $podobneZbozi = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence sady-a-komplety (Sady) Relations.
     *
     * @var array
     */
    static public $sadyAKomplety = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence kusovnik (Kusovník) Relations.
     *
     * @var array
     */
    static public $kusovnik = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Relations.
     *
     * @var array
     */
    static public $skupinaZbozi = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Relations.
     *
     * @var array
     */
    static public $skladovyPohyb = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
            'name' => 'Položky příjemky/výdejky',
        ],
    ];

    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Relations.
     *
     * @var array
     */
    static public $skladovyPohybPolozka = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'vyrobniCislaVydana',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
        2 =>
        [
            'url' => 'vyrobniCislaPrijata',
            'evidenceType' => 'VYROBNI_CISLA',
            'name' => 'Výrobní čísla',
        ],
    ];

    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Relations.
     *
     * @var array
     */
    static public $radaSkladovyPohyb = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Relations.
     *
     * @var array
     */
    static public $typSkladovyPohyb = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence sklad (Seznam skladů) Relations.
     *
     * @var array
     */
    static public $sklad = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence strom (Uzel stromu) Relations.
     *
     * @var array
     */
    static public $strom = [
        0 => 'prilohy',
        1 => 'PRILOHA',
        2 => 'Přílohy',
    ];

    /**
     * Evidence mapovani-skladu (Mapování skladů) Relations.
     *
     * @var array
     */
    static public $mapovaniSkladu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Relations.
     *
     * @var array
     */
    static public $umisteniVeSkladu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Relations.
     *
     * @var array
     */
    static public $umisteniVeSkladuRegal = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Relations.
     *
     * @var array
     */
    static public $umisteniVeSkladuPolice = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Relations.
     *
     * @var array
     */
    static public $umisteniVeSkladuMistnost = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence atribut (Atributy) Relations.
     *
     * @var array
     */
    static public $atribut = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence prislustenstvi (Příslušenství) Relations.
     *
     * @var array
     */
    static public $prislustenstvi = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Relations.
     *
     * @var array
     */
    static public $typStavuCeniku = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Relations.
     *
     * @var array
     */
    static public $stavCeniku = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-atributu (Typy atributů) Relations.
     *
     * @var array
     */
    static public $typAtributu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence skupina-atributu (Skupiny atributů) Relations.
     *
     * @var array
     */
    static public $skupinaAtributu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence inventura (Inventury) Relations.
     *
     * @var array
     */
    static public $inventura = [
        0 =>
        [
            'url' => 'inventura-polozky',
            'evidenceType' => 'INVENTURA_POLOZKA',
            'name' => 'Položka inventury',
        ],
        1 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
    ];

    /**
     * Evidence inventura-polozka (Položky inventur) Relations.
     *
     * @var array
     */
    static public $inventuraPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence majetek (Majetek) Relations.
     *
     * @var array
     */
    static public $majetek = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'majetek-udalosti',
            'evidenceType' => 'MAJETEK_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'zapujcky',
            'evidenceType' => 'ZAPUJCKA',
            'name' => 'Zápůjčky/odpovědná osoba',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
    ];

    /**
     * Evidence leasing (Leasing) Relations.
     *
     * @var array
     */
    static public $leasing = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'zapujcky',
            'evidenceType' => 'ZAPUJCKA',
            'name' => 'Zápůjčky/odpovědná osoba',
        ],
        2 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
    ];

    /**
     * Evidence typ-majetku (Typy majetků) Relations.
     *
     * @var array
     */
    static public $typMajetku = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-leasingu (Typy leasingů) Relations.
     *
     * @var array
     */
    static public $typLeasingu = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence umisteni (Umístění) Relations.
     *
     * @var array
     */
    static public $umisteni = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Relations.
     *
     * @var array
     */
    static public $odpisovaSkupina = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence majetek-udalost (Události) Relations.
     *
     * @var array
     */
    static public $majetekUdalost = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence zapujcka (Zápůjčky) Relations.
     *
     * @var array
     */
    static public $zapujcka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence zavazek (Ostatní závazky) Relations.
     *
     * @var array
     */
    static public $zavazek = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'udalosti',
            'evidenceType' => 'ADR_UDALOST',
            'name' => 'Události',
        ],
        2 =>
        [
            'url' => 'vazby',
            'evidenceType' => 'VAZBA_MEZI_DOKLADY',
            'name' => 'Vazby mezi doklady',
        ],
        3 =>
        [
            'url' => 'prilohy',
            'evidenceType' => 'PRILOHA',
            'name' => 'Přílohy',
        ],
        4 =>
        [
            'url' => 'polozkyDokladu',
            'evidenceType' => 'ZAVAZEK_POLOZKA',
            'name' => 'Položky faktur',
        ],
    ];

    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Relations.
     *
     * @var array
     */
    static public $zavazekPolozka = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Relations.
     *
     * @var array
     */
    static public $typZavazku = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Relations.
     *
     * @var array
     */
    static public $radaZavazku = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'polozkyRady',
            'evidenceType' => 'ROCNI_RADA',
            'name' => 'Roční položky číselné řady',
        ],
    ];

    /**
     * Evidence filtr (Uživatelské filtry) Relations.
     *
     * @var array
     */
    static public $filtr = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Relations.
     *
     * @var array
     */
    static public $parametr = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Relations.
     *
     * @var array
     */
    static public $uzivatelskyDotaz = [
        0 =>
        [
            'url' => 'uzivatelske-vazby',
            'evidenceType' => 'VAZBA',
            'name' => 'Uživatelské vazby',
        ],
        1 =>
        [
            'url' => 'params',
            'evidenceType' => 'UZIVATELSKY_DOTAZ_PARAMETR',
            'name' => 'Parametry',
        ],
        2 =>
        [
            'url' => 'props',
            'evidenceType' => 'UZIVATELSKY_DOTAZ_VLASTNOST',
            'name' => 'Vlastnosti',
        ],
    ];

    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Relations.
     *
     * @var array
     */
    static public $uzivatelskyDotazParametr = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Relations.
     *
     * @var array
     */
    static public $uzivatelskyDotazVlastnost = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence custom-button (Uživatelské tlačítko) Relations.
     *
     * @var array
     */
    static public $customButton = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence dashboard-panel (Správa přehledů) Relations.
     *
     * @var array
     */
    static public $dashboardPanel = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Relations.
     *
     * @var array
     */
    static public $dashboardSharing = [
        0 => 'uzivatelske-vazby',
        1 => 'VAZBA',
        2 => 'Uživatelské vazby',
    ];

}
