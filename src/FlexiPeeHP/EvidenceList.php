<?php
/**
 * FlexiPeeHP - List of Evidencies.
 *
 * Generated: Wed, 06 Dec 2017 16:52:39 +0100 
 * From:      https://vitexsoftware.flexibee.eu:5434
 *    
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Evidencies listing and its properties
 * Seznam Evidencí a jejich vlastnosti
 *
 * @link https://demo.flexibee.eu/c/demo/evidence-list Přehled evidencí
 */
class EvidenceList extends FlexiBeeRO
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'evidence-list';

    /**
     * Základní namespace pro komunikaci s FlexiBee.
     * Basic namespace for communication with FlexiBee
     *
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = 'evidences';

    /**
     * Column use to identfy record
     *
     * @var string
     */
    public $myKeyColumn = 'evidencePath';

    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
 static public $version = '2017.2.4.2';

    /**
     * Evidences Path/Name listing.
     *
     * @var array
     */
 static public $name = array (
  'analyza-nakupu' => '#analyzaNakupu',
  'banka-polozka' => '#banBanZapoctyPol',
  'pravo-viditelnosti' => '#uzivPristup',
  'adresar' => 'Adresy firem',
  'analyza-prodeje' => 'Analýza prodeje',
  'atribut' => 'Atributy',
  'banka' => 'Banka',
  'format-elektronickeho-bankovnictvi' => 'Bankovní formáty',
  'adresar-bankovni-ucet' => 'Bankovní spojení',
  'odberatel' => 'Ceny pro odběratele/skupiny odběratelů, speciální kódy',
  'cenik' => 'Ceník',
  'certifikacni-autorita' => 'Certifikační autority',
  'intrastat-dodaci-podminky' => 'Dodací podmínky',
  'dodavatelska-smlouva' => 'Dodavatelské smlouvy',
  'dodavatel' => 'Dodavatelé',
  'rada-banka' => 'Dokladové řady - bankovní doklady',
  'rada-interniho-dokladu' => 'Dokladové řady - interní doklady',
  'rada-pohledavky' => 'Dokladové řady - pohledávky',
  'rada-pokladni-pohyb' => 'Dokladové řady - pokladní doklady',
  'rada-faktury-prijate' => 'Dokladové řady - přijaté faktury',
  'rada-skladovy-pohyb' => 'Dokladové řady - sklad',
  'rada-faktury-vydane' => 'Dokladové řady - vydané faktury',
  'rada-zavazku' => 'Dokladové řady - závazky',
  'intrastat-druh-dopravy' => 'Druh dopravy',
  'eet-komunikace' => 'EET komunikace',
  'forma-dopravy' => 'Formy dopravy',
  'forma-uhrady' => 'Formy úhrady',
  'hlavni-kniha' => 'Hlavní kniha',
  'interni-doklad' => 'Interní doklady',
  'inventura' => 'Inventury',
  'konst-symbol' => 'Konstantní symboly',
  'kontakt' => 'Kontakty',
  'intrastat-kraj-urceni' => 'Kraje určení',
  'kurz' => 'Kurzy',
  'intrastat-kurz' => 'Kurzy pro Intrastat',
  'kurz-pro-cenotvorbu' => 'Kurzy pro cenotvorbu',
  'intrastat-kod-nomenklatury' => 'Kódy nomenklatury',
  'leasing' => 'Leasing',
  'majetek' => 'Majetek',
  'misto-urceni' => 'Místa určení',
  'mena' => 'Měny',
  'intrastat-merna-jednotka' => 'Měrné jednotky',
  'merna-jednotka' => 'Měrné jednotky ',
  'nastaveni' => 'Nastavení',
  'naklad' => 'Náklady na události / aktivity',
  'cenikovy-pohyb-nakup' => 'Nákupní, prodejní a skladové pohyby',
  'cenikovy-pohyb-prodej' => 'Nákupní, prodejní a skladové pohyby',
  'intrastat-obchodni-transakce' => 'Obchodní transakce',
  'strom-koren' => 'Obecný strom',
  'obratova-predvaha' => 'Obratová předvaha',
  'obrat' => 'Obraty',
  'smlouva' => 'Odběratelské smlouvy',
  'odpisova-skupina' => 'Odpisové skupiny',
  'uzivatel' => 'Osoby a uživatelé',
  'pohledavka' => 'Ostatní pohledávky',
  'zavazek' => 'Ostatní závazky',
  'uzivatelsky-dotaz-parametr' => 'Parametry',
  'penezni-ustav' => 'Peněžní ústavy',
  'podklady-dph' => 'Podklady DPH',
  'podobne-zbozi' => 'Podobné',
  'pohyb-na-uctech' => 'Pohyby na účtech',
  'pokladni-pohyb' => 'Pokladna',
  'parametr' => 'Pokročilá parametrizace pomocí parametrů',
  'interni-doklad-polozka' => 'Položky interních dokladů',
  'inventura-polozka' => 'Položky inventur',
  'pohledavka-polozka' => 'Položky ostatních pohledávek',
  'zavazek-polozka' => 'Položky ostatních závazků',
  'pokladni-pohyb-polozka' => 'Položky pokladních dokladů',
  'nabidka-prijata-polozka' => 'Položky přijaté nabídky',
  'objednavka-prijata-polozka' => 'Položky přijaté objednávky',
  'faktura-prijata-polozka' => 'Položky přijatých faktur',
  'poptavka-prijata-polozka' => 'Položky přijatých poptávek',
  'skladovy-pohyb-polozka' => 'Položky příjemky/výdejky',
  'smlouva-polozka' => 'Položky smluv',
  'nabidka-vydana-polozka' => 'Položky vydané nabídky',
  'objednavka-vydana-polozka' => 'Položky vydané objednávky',
  'poptavka-vydana-polozka' => 'Položky vydané poptávky',
  'faktura-vydana-polozka' => 'Položky vydaných faktur a prodejek',
  'poplatek' => 'Poplatky',
  'psc' => 'Poštovní směrovací čísla',
  'prodejka' => 'Prodejní kasa',
  'text' => 'Předdefinované texty',
  'predpis-zauctovani' => 'Předpisy zaúčtování',
  'faktura-prijata' => 'Přijaté faktury',
  'skladovy-pohyb' => 'Příjemky/výdejky',
  'priloha' => 'Příloha',
  'prislustenstvi' => 'Příslušenství',
  'rezervace' => 'Rezervace',
  'rocni-rada' => 'Roční položky dokladové řady',
  'sady-a-komplety' => 'Sady',
  'saldo' => 'Saldo',
  'sazba-dph' => 'Sazby DPH',
  'dashboard-sharing' => 'Sdílení přehledů',
  'bankovni-ucet' => 'Seznam bankovních účtů',
  'pokladna' => 'Seznam pokladen',
  'typ-prodejky' => 'Seznam prodejních kas',
  'sklad' => 'Seznam skladů',
  'preneseni-dph' => 'Seznam zboží v režimu přenesení DPH',
  'skladova-karta' => 'Skladové karty',
  'skupina-atributu' => 'Skupiny atributů',
  'skupina-firem' => 'Skupiny firem',
  'skupina-stitku' => 'Skupiny štítků',
  'rozvaha-po-uctech' => 'Soupis aktiv a pasiv',
  'dashboard-panel' => 'Správa přehledů',
  'ucetni-osnova' => 'Standardní účetní osnova',
  'stav-skladu-k-datu' => 'Stav skladu k datu',
  'saldo-k-datu' => 'Stav úhrad k datu',
  'stav-smlouvy' => 'Stavy smluv',
  'stav-zakazky' => 'Stavy zakázek',
  'stav-uctu' => 'Stavy účtů',
  'stat' => 'Státy',
  'stredisko' => 'Střediska',
  'typ-organizace' => 'Typ organizace',
  'typ-atributu' => 'Typy atributů',
  'typ-banka' => 'Typy bankovních dokladů',
  'dodavatelsky-typ-smlouvy' => 'Typy dodavatelských smluv',
  'typ-interniho-dokladu' => 'Typy interních dokladů',
  'typ-leasingu' => 'Typy leasingů',
  'typ-majetku' => 'Typy majetků',
  'typ-nakladu' => 'Typy nákladů na události / aktivity',
  'typ-smlouvy' => 'Typy odběratelských smluv',
  'typ-pohledavky' => 'Typy ostatních pohledávek',
  'typ-zavazku' => 'Typy ostatních závazků',
  'typ-pokladni-pohyb' => 'Typy pokladních dokladů',
  'typ-faktury-prijate' => 'Typy přijatých faktur',
  'typ-skladovy-pohyb' => 'Typy skladových dokladů',
  'typ-aktivity' => 'Typy událostí / aktivit',
  'typ-uzivatelske-vazby' => 'Typy uživatelských vazeb',
  'typ-faktury-vydane' => 'Typy vydaných faktur',
  'typ-zakazky' => 'Typy zakázek',
  'typ-vzajemnych-zapoctu' => 'Typy zápočtů',
  'majetek-udalost' => 'Události',
  'udalost' => 'Události, aktivity',
  'umisteni' => 'Umístění',
  'umisteni-ve-skladu-mistnost' => 'Umístění ve skladu',
  'umisteni-ve-skladu-police' => 'Umístění ve skladu',
  'umisteni-ve-skladu-regal' => 'Umístění ve skladu',
  'umisteni-ve-skladu' => 'Umístění ve skladu',
  'sablona-upominky' => 'Upomínky',
  'strom' => 'Uzel stromu',
  'uzivatelsky-dotaz' => 'Uživatelské dotazy',
  'filtr' => 'Uživatelské filtry',
  'custom-button' => 'Uživatelské tlačítko',
  'xslt' => 'Uživatelské transformace',
  'uzivatelska-vazba' => 'Uživatelské vazby',
  'strom-cenik' => 'Vazba uzlu na objekt',
  'vazba' => 'Vazby dokladu',
  'uzivatelsky-dotaz-vlastnost' => 'Vlastnosti',
  'faktura-vydana' => 'Vydané faktury',
  'hodnoceni-zakazky' => 'Vyhodnocení zakázek',
  'vzajemny-zapocet' => 'Vzájemné zápočty',
  'danova-evidence' => 'Výkaz daňové evidence',
  'vykaz-hospodareni' => 'Výkaz hospodaření za měsíc',
  'vyrobni-cislo' => 'Výrobní čísla',
  'zakazka' => 'Zakázky',
  'forma-uhrady-zauctovani' => 'Zaúčtování formy úhrady',
  'intrastat-zvlastni-pohyb' => 'Zvláštní pohyby',
  'zapujcka' => 'Zápůjčky',
  'rada' => 'dokladové řady',
  'prodejka-platba' => 'Úhrada',
  'setting-store' => 'Úložiště nastavení',
  'analyza-zakazky' => 'Účetní analýza zakázky',
  'ucetni-denik' => 'Účetní deník',
  'ucetni-obdobi' => 'Účetní období',
  'ucet' => 'Účtový rozvrh',
  'cinnost' => 'Činnost',
  'stav-ceniku' => 'Číselník stavů položek ceníku',
  'typ-stavu-ceniku' => 'Číselník stavů položek ceníku',
  'cislo-baliku' => 'Čísla balíků',
  'cleneni-kontrolni-hlaseni' => 'Řádky kontrolního hlášení DPH',
  'cleneni-dph' => 'Řádky přiznání DPH',
  'stitek' => 'Štítky',
  'zurnal' => 'Žurnál',
);

    /**
     * All Evidence's all properties listing.
     *
     * @var array
     */
 static public $evidences = array (
  'adresar' => 
  array (
    'evidenceType' => 'ADRESAR',
    'evidenceName' => 'Adresy firem',
    'evidencePath' => 'adresar',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.Adresar',
    'formCode' => 'adrAdresar',
  ),
  'adresar-bankovni-ucet' => 
  array (
    'evidenceType' => 'ADR_BANKOVNI_UCET',
    'evidenceName' => 'Bankovní spojení',
    'evidencePath' => 'adresar-bankovni-ucet',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.BanSpoj',
    'formCode' => 'adrBanSpoj',
  ),
  'kontakt' => 
  array (
    'evidenceType' => 'ADR_KONTAKT',
    'evidenceName' => 'Kontakty',
    'evidencePath' => 'kontakt',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.Kontakt',
    'formCode' => 'adrKontakty',
  ),
  'udalost' => 
  array (
    'evidenceType' => 'ADR_UDALOST',
    'evidenceName' => 'Události, aktivity',
    'evidencePath' => 'udalost',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.AdrUdalostMaj',
    'formCode' => 'adrUdalosti',
  ),
  'analyza-nakupu' => 
  array (
    'evidenceType' => 'ANALYZA_NAKUPU',
    'evidenceName' => '#analyzaNakupu',
    'evidencePath' => 'analyza-nakupu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PrehledPolozekFaktur',
    'formCode' => 'analyzaNakupu',
  ),
  'analyza-prodeje' => 
  array (
    'evidenceType' => 'ANALYZA_PRODEJE',
    'evidenceName' => 'Analýza prodeje',
    'evidencePath' => 'analyza-prodeje',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PrehledPolozekFaktur',
    'formCode' => 'vykazPolozkyFaktur',
  ),
  'analyza-zakazky' => 
  array (
    'evidenceType' => 'ANALYZA_ZAKAZKY',
    'evidenceName' => 'Účetní analýza zakázky',
    'evidencePath' => 'analyza-zakazky',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.AnalyzaZakazky',
    'formCode' => 'vykazAnalyzaZakazky',
  ),
  'atribut' => 
  array (
    'evidenceType' => 'ATRIBUT',
    'evidenceName' => 'Atributy',
    'evidencePath' => 'atribut',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Atribut',
    'formCode' => 'cenAtribut',
  ),
  'banka' => 
  array (
    'evidenceType' => 'BANKA',
    'evidenceName' => 'Banka',
    'evidencePath' => 'banka',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'banAkt',
  ),
  'banka-polozka' => 
  array (
    'evidenceType' => 'BANKA_POLOZKA',
    'evidenceName' => '#banBanZapoctyPol',
    'evidencePath' => 'banka-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolInt',
    'formCode' => 'banBanZapoctyPol',
  ),
  'rada-banka' => 
  array (
    'evidenceType' => 'BANKA_RADA',
    'evidenceName' => 'Dokladové řady - bankovní doklady',
    'evidencePath' => 'rada-banka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'banRady',
  ),
  'typ-banka' => 
  array (
    'evidenceType' => 'BANKA_TYP',
    'evidenceName' => 'Typy bankovních dokladů',
    'evidencePath' => 'typ-banka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'banTyp',
  ),
  'bankovni-ucet' => 
  array (
    'evidenceType' => 'BANKOVNI_UCET',
    'evidenceName' => 'Seznam bankovních účtů',
    'evidencePath' => 'bankovni-ucet',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Bsp',
    'formCode' => 'banBsp',
  ),
  'cenik' => 
  array (
    'evidenceType' => 'CENIK',
    'evidenceName' => 'Ceník',
    'evidencePath' => 'cenik',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.CenikView',
    'formCode' => 'cenAkt',
  ),
  'cenikovy-pohyb-nakup' => 
  array (
    'evidenceType' => 'CENIKOVE_POHYBY_NAKUP',
    'evidenceName' => 'Nákupní, prodejní a skladové pohyby',
    'evidencePath' => 'cenikovy-pohyb-nakup',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.CenikovePohyby',
    'formCode' => 'vykazCenPohyby',
  ),
  'cenikovy-pohyb-prodej' => 
  array (
    'evidenceType' => 'CENIKOVE_POHYBY_PRODEJ',
    'evidenceName' => 'Nákupní, prodejní a skladové pohyby',
    'evidencePath' => 'cenikovy-pohyb-prodej',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.CenikovePohyby',
    'formCode' => 'vykazCenPohyby',
  ),
  'certifikacni-autorita' => 
  array (
    'evidenceType' => 'CERTIFIKACNI_AUTORITA',
    'evidenceName' => 'Certifikační autority',
    'evidencePath' => 'certifikacni-autorita',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.AutCert',
    'formCode' => 'autCert',
  ),
  'cinnost' => 
  array (
    'evidenceType' => 'CINNOST',
    'evidenceName' => 'Činnost',
    'evidencePath' => 'cinnost',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Cinnost',
    'formCode' => 'cisCinnost',
  ),
  'cislo-baliku' => 
  array (
    'evidenceType' => 'CISLO_BALIKU',
    'evidenceName' => 'Čísla balíků',
    'evidencePath' => 'cislo-baliku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.CisloBal',
    'formCode' => 'cisloBal',
  ),
  'cleneni-dph' => 
  array (
    'evidenceType' => 'CLENENI_DPH',
    'evidenceName' => 'Řádky přiznání DPH',
    'evidencePath' => 'cleneni-dph',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.ucto.ClenDph',
    'formCode' => 'cisClenDph',
  ),
  'cleneni-kontrolni-hlaseni' => 
  array (
    'evidenceType' => 'CLEN_KON_VYK_DPH',
    'evidenceName' => 'Řádky kontrolního hlášení DPH',
    'evidencePath' => 'cleneni-kontrolni-hlaseni',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.ucto.ClenKonVykDph',
    'formCode' => 'cisClenKonVykDph',
  ),
  'custom-button' => 
  array (
    'evidenceType' => 'CUSTOM_BUTTON',
    'evidenceName' => 'Uživatelské tlačítko',
    'evidencePath' => 'custom-button',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.CustomButton',
    'formCode' => 'customButton',
  ),
  'danova-evidence' => 
  array (
    'evidenceType' => 'DAN_EVID',
    'evidenceName' => 'Výkaz daňové evidence',
    'evidencePath' => 'danova-evidence',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.DanovaEvidence',
    'formCode' => 'vykazDanEvid',
  ),
  'dashboard-panel' => 
  array (
    'evidenceType' => 'DASHBOARD_PANEL',
    'evidenceName' => 'Správa přehledů',
    'evidencePath' => 'dashboard-panel',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.DashboardPanel',
    'formCode' => 'dashboardPanel',
  ),
  'dashboard-sharing' => 
  array (
    'evidenceType' => 'DASHBOARD_SHARING',
    'evidenceName' => 'Sdílení přehledů',
    'evidencePath' => 'dashboard-sharing',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.DashboardSharing',
    'formCode' => 'dashboardSharing',
  ),
  'dodavatel' => 
  array (
    'evidenceType' => 'DODAVATEL',
    'evidenceName' => 'Dodavatelé',
    'evidencePath' => 'dodavatel',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Dodavatel',
    'formCode' => 'cenDodavateleView',
  ),
  'dodavatelska-smlouva' => 
  array (
    'evidenceType' => 'DODAVATELSKA_SMLOUVA',
    'evidenceName' => 'Dodavatelské smlouvy',
    'evidencePath' => 'dodavatelska-smlouva',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.SmlouvaView',
    'formCode' => 'adrSmlDodavAktView',
  ),
  'dodavatelsky-typ-smlouvy' => 
  array (
    'evidenceType' => 'DODAVATELSKY_TYP_SMLOUVY',
    'evidenceName' => 'Typy dodavatelských smluv',
    'evidencePath' => 'dodavatelsky-typ-smlouvy',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.TypSmlouvy',
    'formCode' => 'adrTypDodavSml',
  ),
  'eet-komunikace' => 
  array (
    'evidenceType' => 'EET_KOMUNIKACE',
    'evidenceName' => 'EET komunikace',
    'evidencePath' => 'eet-komunikace',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.vyk.EetKomView',
    'formCode' => 'eetKomView',
  ),
  'faktura-prijata' => 
  array (
    'evidenceType' => 'FAKTURA_IN',
    'evidenceName' => 'Přijaté faktury',
    'evidencePath' => 'faktura-prijata',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'fapAkt',
  ),
  'faktura-prijata-polozka' => 
  array (
    'evidenceType' => 'FAKTURA_IN_POLOZKA',
    'evidenceName' => 'Položky přijatých faktur',
    'evidencePath' => 'faktura-prijata-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolFak',
    'formCode' => 'fapPol',
  ),
  'rada-faktury-prijate' => 
  array (
    'evidenceType' => 'FAKTURA_IN_RADA',
    'evidenceName' => 'Dokladové řady - přijaté faktury',
    'evidencePath' => 'rada-faktury-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'fapRady',
  ),
  'typ-faktury-prijate' => 
  array (
    'evidenceType' => 'FAKTURA_IN_TYP',
    'evidenceName' => 'Typy přijatých faktur',
    'evidencePath' => 'typ-faktury-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'fapTyp',
  ),
  'faktura-vydana' => 
  array (
    'evidenceType' => 'FAKTURA_OUT',
    'evidenceName' => 'Vydané faktury',
    'evidencePath' => 'faktura-vydana',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'favAkt',
  ),
  'faktura-vydana-polozka' => 
  array (
    'evidenceType' => 'FAKTURA_OUT_POLOZKA',
    'evidenceName' => 'Položky vydaných faktur a prodejek',
    'evidencePath' => 'faktura-vydana-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolFak',
    'formCode' => 'favPol',
  ),
  'rada-faktury-vydane' => 
  array (
    'evidenceType' => 'FAKTURA_OUT_RADA',
    'evidenceName' => 'Dokladové řady - vydané faktury',
    'evidencePath' => 'rada-faktury-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'favRady',
  ),
  'typ-faktury-vydane' => 
  array (
    'evidenceType' => 'FAKTURA_OUT_TYP',
    'evidenceName' => 'Typy vydaných faktur',
    'evidencePath' => 'typ-faktury-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'favTyp',
  ),
  'filtr' => 
  array (
    'evidenceType' => 'FILTR',
    'evidenceName' => 'Uživatelské filtry',
    'evidencePath' => 'filtr',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.w.Filtr',
    'formCode' => 'filtry',
  ),
  'format-elektronickeho-bankovnictvi' => 
  array (
    'evidenceType' => 'FORMAT_ELEKTRONICKEHO_BANKOVNICTVI',
    'evidenceName' => 'Bankovní formáty',
    'evidencePath' => 'format-elektronickeho-bankovnictvi',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.dok.ElBanFormat',
    'formCode' => 'cisElBanFormaty',
  ),
  'forma-dopravy' => 
  array (
    'evidenceType' => 'FORMA_DOPRAVY',
    'evidenceName' => 'Formy dopravy',
    'evidencePath' => 'forma-dopravy',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaDopravy',
    'formCode' => 'formaDopravy',
  ),
  'forma-uhrady' => 
  array (
    'evidenceType' => 'FORMA_UHRADY',
    'evidenceName' => 'Formy úhrady',
    'evidencePath' => 'forma-uhrady',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaUhradyCis',
    'formCode' => 'formaUhrCis',
  ),
  'forma-uhrady-zauctovani' => 
  array (
    'evidenceType' => 'FORMA_UHRADY_ZAUCTOVANI',
    'evidenceName' => 'Zaúčtování formy úhrady',
    'evidencePath' => 'forma-uhrady-zauctovani',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaUhradyZauc',
    'formCode' => 'formaUhrZauc',
  ),
  'hlavni-kniha' => 
  array (
    'evidenceType' => 'HLAVNI_KNIHA',
    'evidenceName' => 'Hlavní kniha',
    'evidencePath' => 'hlavni-kniha',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.ObratovaPredvaha',
    'formCode' => 'vykazHlavniKniha',
  ),
  'hodnoceni-zakazky' => 
  array (
    'evidenceType' => 'HODNOCENI_ZAKAZKY',
    'evidenceName' => 'Vyhodnocení zakázek',
    'evidencePath' => 'hodnoceni-zakazky',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.VyhZakazky',
    'formCode' => 'cisVyhZak',
  ),
  'interni-doklad' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD',
    'evidenceName' => 'Interní doklady',
    'evidencePath' => 'interni-doklad',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'intDokl',
  ),
  'interni-doklad-polozka' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD_POLOZKA',
    'evidenceName' => 'Položky interních dokladů',
    'evidencePath' => 'interni-doklad-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolInt',
    'formCode' => 'intPol',
  ),
  'rada-interniho-dokladu' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD_RADA',
    'evidenceName' => 'Dokladové řady - interní doklady',
    'evidencePath' => 'rada-interniho-dokladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'intRady',
  ),
  'typ-interniho-dokladu' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD_TYP',
    'evidenceName' => 'Typy interních dokladů',
    'evidencePath' => 'typ-interniho-dokladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'intTyp',
  ),
  'intrastat-dodaci-podminky' => 
  array (
    'evidenceType' => 'INTRASTAT_DODACI_PODMINKY',
    'evidenceName' => 'Dodací podmínky',
    'evidencePath' => 'intrastat-dodaci-podminky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.DodPodm',
    'formCode' => 'intrDodPodm',
  ),
  'intrastat-druh-dopravy' => 
  array (
    'evidenceType' => 'INTRASTAT_DRUH_DOPRAVY',
    'evidenceName' => 'Druh dopravy',
    'evidencePath' => 'intrastat-druh-dopravy',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.DruhDopr',
    'formCode' => 'intrDruhDopr',
  ),
  'intrastat-kod-nomenklatury' => 
  array (
    'evidenceType' => 'INTRASTAT_KOD_NOMENKLATURY',
    'evidenceName' => 'Kódy nomenklatury',
    'evidencePath' => 'intrastat-kod-nomenklatury',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.Nomen',
    'formCode' => 'intrNomenkla',
  ),
  'intrastat-kraj-urceni' => 
  array (
    'evidenceType' => 'INTRASTAT_KRAJ_URCENI',
    'evidenceName' => 'Kraje určení',
    'evidencePath' => 'intrastat-kraj-urceni',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.KrajUrc',
    'formCode' => 'intrKrajUrc',
  ),
  'intrastat-kurz' => 
  array (
    'evidenceType' => 'INTRASTAT_KURZ',
    'evidenceName' => 'Kurzy pro Intrastat',
    'evidencePath' => 'intrastat-kurz',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Kurz',
    'formCode' => 'cisKurzyIntr',
  ),
  'intrastat-merna-jednotka' => 
  array (
    'evidenceType' => 'INTRASTAT_MERNA_JEDNOTKA',
    'evidenceName' => 'Měrné jednotky',
    'evidencePath' => 'intrastat-merna-jednotka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.IntrMerJed',
    'formCode' => 'intrMerJed',
  ),
  'intrastat-obchodni-transakce' => 
  array (
    'evidenceType' => 'INTRASTAT_OBCHODNI_TRANSAKCE',
    'evidenceName' => 'Obchodní transakce',
    'evidencePath' => 'intrastat-obchodni-transakce',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.ObchTrans',
    'formCode' => 'intrObchTrans',
  ),
  'intrastat-zvlastni-pohyb' => 
  array (
    'evidenceType' => 'INTRASTAT_ZVLASTNI_POHYB',
    'evidenceName' => 'Zvláštní pohyby',
    'evidencePath' => 'intrastat-zvlastni-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.ZvlPoh',
    'formCode' => 'intrZvlPoh',
  ),
  'inventura' => 
  array (
    'evidenceType' => 'INVENTURA',
    'evidenceName' => 'Inventury',
    'evidencePath' => 'inventura',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.Inventura',
    'formCode' => 'sklInventura',
  ),
  'inventura-polozka' => 
  array (
    'evidenceType' => 'INVENTURA_POLOZKA',
    'evidenceName' => 'Položky inventur',
    'evidencePath' => 'inventura-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.PolInventura',
    'formCode' => 'sklInventuraPol',
  ),
  'konst-symbol' => 
  array (
    'evidenceType' => 'KONST_SYM',
    'evidenceName' => 'Konstantní symboly',
    'evidencePath' => 'konst-symbol',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.KonSym',
    'formCode' => 'cisKonSym',
  ),
  'kurz' => 
  array (
    'evidenceType' => 'KURZ',
    'evidenceName' => 'Kurzy',
    'evidencePath' => 'kurz',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Kurz',
    'formCode' => 'cisKurzy',
  ),
  'kurz-pro-cenotvorbu' => 
  array (
    'evidenceType' => 'KURZ_PRO_CENOTVORBU',
    'evidenceName' => 'Kurzy pro cenotvorbu',
    'evidencePath' => 'kurz-pro-cenotvorbu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Kurz',
    'formCode' => 'cisKurzyCen',
  ),
  'leasing' => 
  array (
    'evidenceType' => 'LEASING',
    'evidenceName' => 'Leasing',
    'evidencePath' => 'leasing',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.maj.Leasing',
    'formCode' => 'majLeasing',
  ),
  'typ-leasingu' => 
  array (
    'evidenceType' => 'LEASING_TYP',
    'evidenceName' => 'Typy leasingů',
    'evidencePath' => 'typ-leasingu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.maj.TypLeas',
    'formCode' => 'majTypLeas',
  ),
  'majetek' => 
  array (
    'evidenceType' => 'MAJETEK',
    'evidenceName' => 'Majetek',
    'evidencePath' => 'majetek',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.Majetek',
    'formCode' => 'majMajetek',
  ),
  'typ-majetku' => 
  array (
    'evidenceType' => 'MAJETEK_TYP',
    'evidenceName' => 'Typy majetků',
    'evidencePath' => 'typ-majetku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.TypMaj',
    'formCode' => 'majTypMaj',
  ),
  'majetek-udalost' => 
  array (
    'evidenceType' => 'MAJETEK_UDALOST',
    'evidenceName' => 'Události',
    'evidencePath' => 'majetek-udalost',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.maj.Udalost',
    'formCode' => 'majUdalosti',
  ),
  'mena' => 
  array (
    'evidenceType' => 'MENA',
    'evidenceName' => 'Měny',
    'evidencePath' => 'mena',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Mena',
    'formCode' => 'cisMeny',
  ),
  'merna-jednotka' => 
  array (
    'evidenceType' => 'MERNA_JEDNOTKA',
    'evidenceName' => 'Měrné jednotky ',
    'evidencePath' => 'merna-jednotka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.MerJed',
    'formCode' => 'cisMj',
  ),
  'misto-urceni' => 
  array (
    'evidenceType' => 'MISTO_URCENI',
    'evidenceName' => 'Místa určení',
    'evidencePath' => 'misto-urceni',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.MistUrc',
    'formCode' => 'adrMistUrc',
  ),
  'nabidka-prijata-polozka' => 
  array (
    'evidenceType' => 'NABIDKA_IN_POLOZKA',
    'evidenceName' => 'Položky přijaté nabídky',
    'evidencePath' => 'nabidka-prijata-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodNapPol',
  ),
  'nabidka-vydana-polozka' => 
  array (
    'evidenceType' => 'NABIDKA_OUT_POLOZKA',
    'evidenceName' => 'Položky vydané nabídky',
    'evidencePath' => 'nabidka-vydana-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodNavPol',
  ),
  'naklad' => 
  array (
    'evidenceType' => 'NAKLAD',
    'evidenceName' => 'Náklady na události / aktivity',
    'evidencePath' => 'naklad',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.NaklAkt',
    'formCode' => 'adrNaklAkt',
  ),
  'nastaveni' => 
  array (
    'evidenceType' => 'NASTAVENI',
    'evidenceName' => 'Nastavení',
    'evidencePath' => 'nastaveni',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.nast.Nastaveni',
    'formCode' => 'nNastav',
  ),
  'objednavka-prijata-polozka' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_IN_POLOZKA',
    'evidenceName' => 'Položky přijaté objednávky',
    'evidencePath' => 'objednavka-prijata-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodObpPol',
  ),
  'objednavka-vydana-polozka' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_OUT_POLOZKA',
    'evidenceName' => 'Položky vydané objednávky',
    'evidencePath' => 'objednavka-vydana-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodObvPol',
  ),
  'obrat' => 
  array (
    'evidenceType' => 'OBRAT',
    'evidenceName' => 'Obraty',
    'evidencePath' => 'obrat',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Obrat',
    'formCode' => 'ucDoklObrat',
  ),
  'obratova-predvaha' => 
  array (
    'evidenceType' => 'OBRATOVA_PREDVAHA',
    'evidenceName' => 'Obratová předvaha',
    'evidencePath' => 'obratova-predvaha',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.ObratovaPredvaha',
    'formCode' => 'vykazObratovaPredvaha',
  ),
  'odberatel' => 
  array (
    'evidenceType' => 'ODBERATEL',
    'evidenceName' => 'Ceny pro odběratele/skupiny odběratelů, speciální kódy',
    'evidencePath' => 'odberatel',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Odberatel',
    'formCode' => 'cenOdberateleView',
  ),
  'odpisova-skupina' => 
  array (
    'evidenceType' => 'ODPISOVE_SKUPINY',
    'evidenceName' => 'Odpisové skupiny',
    'evidencePath' => 'odpisova-skupina',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.Sazba',
    'formCode' => 'majSazby',
  ),
  'parametr' => 
  array (
    'evidenceType' => 'PARAM',
    'evidenceName' => 'Pokročilá parametrizace pomocí parametrů',
    'evidencePath' => 'parametr',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Parametr',
    'formCode' => 'parametry',
  ),
  'penezni-ustav' => 
  array (
    'evidenceType' => 'PENEZNI_USTAV',
    'evidenceName' => 'Peněžní ústavy',
    'evidencePath' => 'penezni-ustav',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.SmerKod',
    'formCode' => 'cisSmerKod',
  ),
  'podklady-dph' => 
  array (
    'evidenceType' => 'PODKLADY_DPH',
    'evidenceName' => 'Podklady DPH',
    'evidencePath' => 'podklady-dph',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PodkladyDph',
    'formCode' => 'vykazPodkladyDph',
  ),
  'podobne-zbozi' => 
  array (
    'evidenceType' => 'PODOBNE_ZBOZI',
    'evidenceName' => 'Podobné',
    'evidencePath' => 'podobne-zbozi',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Podobne',
    'formCode' => 'cenPodobne',
  ),
  'pohledavka' => 
  array (
    'evidenceType' => 'POHLEDAVKA',
    'evidenceName' => 'Ostatní pohledávky',
    'evidencePath' => 'pohledavka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'phlAkt',
  ),
  'pohledavka-polozka' => 
  array (
    'evidenceType' => 'POHLEDAVKA_POLOZKA',
    'evidenceName' => 'Položky ostatních pohledávek',
    'evidencePath' => 'pohledavka-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolFak',
    'formCode' => 'phlPol',
  ),
  'rada-pohledavky' => 
  array (
    'evidenceType' => 'POHLEDAVKA_RADA',
    'evidenceName' => 'Dokladové řady - pohledávky',
    'evidencePath' => 'rada-pohledavky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'phlRady',
  ),
  'typ-pohledavky' => 
  array (
    'evidenceType' => 'POHLEDAVKA_TYP',
    'evidenceName' => 'Typy ostatních pohledávek',
    'evidencePath' => 'typ-pohledavky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'phlTyp',
  ),
  'pohyb-na-uctech' => 
  array (
    'evidenceType' => 'POHYB_NA_UCTECH',
    'evidenceName' => 'Pohyby na účtech',
    'evidencePath' => 'pohyb-na-uctech',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PohybyNaUctech',
    'formCode' => 'vykazPohybyNaUctech',
  ),
  'pokladna' => 
  array (
    'evidenceType' => 'POKLADNA',
    'evidenceName' => 'Seznam pokladen',
    'evidencePath' => 'pokladna',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Bsp',
    'formCode' => 'pokBsp',
  ),
  'pokladni-pohyb' => 
  array (
    'evidenceType' => 'POKLADNI_POHYB',
    'evidenceName' => 'Pokladna',
    'evidencePath' => 'pokladni-pohyb',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'pokAkt',
  ),
  'pokladni-pohyb-polozka' => 
  array (
    'evidenceType' => 'POKLADNI_POHYB_POLOZKA',
    'evidenceName' => 'Položky pokladních dokladů',
    'evidencePath' => 'pokladni-pohyb-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolInt',
    'formCode' => 'pokPol',
  ),
  'rada-pokladni-pohyb' => 
  array (
    'evidenceType' => 'POKLADNI_POHYB_RADA',
    'evidenceName' => 'Dokladové řady - pokladní doklady',
    'evidencePath' => 'rada-pokladni-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'pokRady',
  ),
  'typ-pokladni-pohyb' => 
  array (
    'evidenceType' => 'POKLADNI_POHYB_TYP',
    'evidenceName' => 'Typy pokladních dokladů',
    'evidencePath' => 'typ-pokladni-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'pokTyp',
  ),
  'poplatek' => 
  array (
    'evidenceType' => 'POPLATKY',
    'evidenceName' => 'Poplatky',
    'evidencePath' => 'poplatek',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Poplatek',
    'formCode' => 'cenPoplatky',
  ),
  'poptavka-prijata-polozka' => 
  array (
    'evidenceType' => 'POPTAVKA_IN_POLOZKA',
    'evidenceName' => 'Položky přijatých poptávek',
    'evidencePath' => 'poptavka-prijata-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodPppPol',
  ),
  'poptavka-vydana-polozka' => 
  array (
    'evidenceType' => 'POPTAVKA_OUT_POLOZKA',
    'evidenceName' => 'Položky vydané poptávky',
    'evidencePath' => 'poptavka-vydana-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodPpvPol',
  ),
  'pravo-viditelnosti' => 
  array (
    'evidenceType' => 'PRAVO_VIDITELNOSTI',
    'evidenceName' => '#uzivPristup',
    'evidencePath' => 'pravo-viditelnosti',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.DataPrava',
    'formCode' => 'uzivPristup',
  ),
  'predpis-zauctovani' => 
  array (
    'evidenceType' => 'PREDPIS_ZAUCTOVANI',
    'evidenceName' => 'Předpisy zaúčtování',
    'evidencePath' => 'predpis-zauctovani',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.TypUcOp',
    'formCode' => 'cisTypUcOp',
  ),
  'preneseni-dph' => 
  array (
    'evidenceType' => 'PRENESENI_DPH',
    'evidenceName' => 'Seznam zboží v režimu přenesení DPH',
    'evidencePath' => 'preneseni-dph',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.DphPren',
    'formCode' => 'cisDphPren',
  ),
  'priloha' => 
  array (
    'evidenceType' => 'PRILOHA',
    'evidenceName' => 'Příloha',
    'evidencePath' => 'priloha',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.PrilohaUcto',
    'formCode' => 'priloha',
  ),
  'prislustenstvi' => 
  array (
    'evidenceType' => 'PRISLUSENSTVI',
    'evidenceName' => 'Příslušenství',
    'evidencePath' => 'prislustenstvi',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Prislusenstvi',
    'formCode' => 'cenPrislusenstvi',
  ),
  'prodejka' => 
  array (
    'evidenceType' => 'PRODEJKA',
    'evidenceName' => 'Prodejní kasa',
    'evidencePath' => 'prodejka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'favProdejky',
  ),
  'prodejka-platba' => 
  array (
    'evidenceType' => 'PRODEJKA_PLATBA',
    'evidenceName' => 'Úhrada',
    'evidencePath' => 'prodejka-platba',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaUhrady',
    'formCode' => 'favProdPlat',
  ),
  'typ-prodejky' => 
  array (
    'evidenceType' => 'PRODEJKA_TYP',
    'evidenceName' => 'Seznam prodejních kas',
    'evidencePath' => 'typ-prodejky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'favTypProdejky',
  ),
  'psc' => 
  array (
    'evidenceType' => 'PSC',
    'evidenceName' => 'Poštovní směrovací čísla',
    'evidencePath' => 'psc',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.adr.Psc',
    'formCode' => 'cisPsc',
  ),
  'rada' => 
  array (
    'evidenceType' => 'RADA',
    'evidenceName' => 'dokladové řady',
    'evidencePath' => 'rada',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'radaBezModulu',
  ),
  'rezervace' => 
  array (
    'evidenceType' => 'REZERVACE',
    'evidenceName' => 'Rezervace',
    'evidencePath' => 'rezervace',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.Rezervace',
    'formCode' => 'sklRezervace',
  ),
  'rocni-rada' => 
  array (
    'evidenceType' => 'ROCNI_RADA',
    'evidenceName' => 'Roční položky dokladové řady',
    'evidencePath' => 'rocni-rada',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolozkaRady',
    'formCode' => 'nezRadyRok',
  ),
  'rozvaha-po-uctech' => 
  array (
    'evidenceType' => 'ROZVAHA_PO_UCTECH',
    'evidenceName' => 'Soupis aktiv a pasiv',
    'evidencePath' => 'rozvaha-po-uctech',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.StavyUctu',
    'formCode' => 'vykazRozvahaPoUctech',
  ),
  'sady-a-komplety' => 
  array (
    'evidenceType' => 'SADY_A_KOMPLETY',
    'evidenceName' => 'Sady',
    'evidencePath' => 'sady-a-komplety',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Sada',
    'formCode' => 'cenSady',
  ),
  'saldo' => 
  array (
    'evidenceType' => 'SALDO',
    'evidenceName' => 'Saldo',
    'evidencePath' => 'saldo',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PohybyNaUctech',
    'formCode' => 'vykazSaldo',
  ),
  'saldo-k-datu' => 
  array (
    'evidenceType' => 'SALDO_K_DATU',
    'evidenceName' => 'Stav úhrad k datu',
    'evidencePath' => 'saldo-k-datu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.SaldoKdatu',
    'formCode' => 'vykazSaldoKdatu',
  ),
  'sazba-dph' => 
  array (
    'evidenceType' => 'SAZBA_DPH',
    'evidenceName' => 'Sazby DPH',
    'evidencePath' => 'sazba-dph',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.nast.SazbaDph',
    'formCode' => 'uSazbyDph',
  ),
  'setting-store' => 
  array (
    'evidenceType' => 'SETTTING',
    'evidenceName' => 'Úložiště nastavení',
    'evidencePath' => 'setting-store',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.WSSetting',
    'formCode' => 'settings',
  ),
  'sklad' => 
  array (
    'evidenceType' => 'SKLAD',
    'evidenceName' => 'Seznam skladů',
    'evidencePath' => 'sklad',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Bsp',
    'formCode' => 'sklBsp',
  ),
  'skladova-karta' => 
  array (
    'evidenceType' => 'SKLADOVA_KARTA',
    'evidenceName' => 'Skladové karty',
    'evidencePath' => 'skladova-karta',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.skl.SkladKarta',
    'formCode' => 'sklKar',
  ),
  'skladovy-pohyb' => 
  array (
    'evidenceType' => 'SKLADOVY_POHYB',
    'evidenceName' => 'Příjemky/výdejky',
    'evidencePath' => 'skladovy-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklSklad',
    'formCode' => 'sklAkt',
  ),
  'skladovy-pohyb-polozka' => 
  array (
    'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
    'evidenceName' => 'Položky příjemky/výdejky',
    'evidencePath' => 'skladovy-pohyb-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolSklad',
    'formCode' => 'sklPol',
  ),
  'rada-skladovy-pohyb' => 
  array (
    'evidenceType' => 'SKLADOVY_POHYB_RADA',
    'evidenceName' => 'Dokladové řady - sklad',
    'evidencePath' => 'rada-skladovy-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'sklRady',
  ),
  'typ-skladovy-pohyb' => 
  array (
    'evidenceType' => 'SKLADOVY_POHYB_TYP',
    'evidenceName' => 'Typy skladových dokladů',
    'evidencePath' => 'typ-skladovy-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'sklTyp',
  ),
  'skupina-atributu' => 
  array (
    'evidenceType' => 'SKUPINA_ATRIBUTU',
    'evidenceName' => 'Skupiny atributů',
    'evidencePath' => 'skupina-atributu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.TypZbozi',
    'formCode' => 'cenTypZbozi',
  ),
  'skupina-firem' => 
  array (
    'evidenceType' => 'SKUPINA_FIREM',
    'evidenceName' => 'Skupiny firem',
    'evidencePath' => 'skupina-firem',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.SkupFir',
    'formCode' => 'adrSkupFir',
  ),
  'skupina-stitku' => 
  array (
    'evidenceType' => 'SKUPINA_STITKU',
    'evidenceName' => 'Skupiny štítků',
    'evidencePath' => 'skupina-stitku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.SkupVybKlic',
    'formCode' => 'cisSkupVybKlic',
  ),
  'smlouva' => 
  array (
    'evidenceType' => 'SMLOUVA',
    'evidenceName' => 'Odběratelské smlouvy',
    'evidencePath' => 'smlouva',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.SmlouvaView',
    'formCode' => 'adrSmlAktView',
  ),
  'smlouva-polozka' => 
  array (
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'evidenceName' => 'Položky smluv',
    'evidencePath' => 'smlouva-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolSmlouvy',
    'formCode' => 'adrPolSml',
  ),
  'stat' => 
  array (
    'evidenceType' => 'STAT',
    'evidenceName' => 'Státy',
    'evidencePath' => 'stat',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.Stat',
    'formCode' => 'cisStaty',
  ),
  'stav-ceniku' => 
  array (
    'evidenceType' => 'STAV_CENIKU',
    'evidenceName' => 'Číselník stavů položek ceníku',
    'evidencePath' => 'stav-ceniku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.StavCen',
    'formCode' => 'cenStav',
  ),
  'stav-skladu-k-datu' => 
  array (
    'evidenceType' => 'STAV_SKLADU_K_DATU',
    'evidenceName' => 'Stav skladu k datu',
    'evidencePath' => 'stav-skladu-k-datu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.skl.StavSkladu',
    'formCode' => 'stavSkl',
  ),
  'stav-smlouvy' => 
  array (
    'evidenceType' => 'STAV_SMLOUVY',
    'evidenceName' => 'Stavy smluv',
    'evidencePath' => 'stav-smlouvy',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.StavSmlouvy',
    'formCode' => 'adrStavSml',
  ),
  'stav-uctu' => 
  array (
    'evidenceType' => 'STAV_UCTU',
    'evidenceName' => 'Stavy účtů',
    'evidencePath' => 'stav-uctu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.StavyUctu',
    'formCode' => 'vykazStavyUctu',
  ),
  'stav-zakazky' => 
  array (
    'evidenceType' => 'STAV_ZAKAZKY',
    'evidenceName' => 'Stavy zakázek',
    'evidencePath' => 'stav-zakazky',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.StavZakazky',
    'formCode' => 'cisStavZak',
  ),
  'stitek' => 
  array (
    'evidenceType' => 'STITEK',
    'evidenceName' => 'Štítky',
    'evidencePath' => 'stitek',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.VybKlic',
    'formCode' => 'cisVybKlice',
  ),
  'stredisko' => 
  array (
    'evidenceType' => 'STREDISKO',
    'evidenceName' => 'Střediska',
    'evidencePath' => 'stredisko',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Stredisko',
    'formCode' => 'cisStr',
  ),
  'strom' => 
  array (
    'evidenceType' => 'STROM',
    'evidenceName' => 'Uzel stromu',
    'evidencePath' => 'strom',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Uzel',
    'formCode' => 'uzel',
  ),
  'strom-cenik' => 
  array (
    'evidenceType' => 'STROM_CENIK',
    'evidenceName' => 'Vazba uzlu na objekt',
    'evidencePath' => 'strom-cenik',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.VazUzel',
    'formCode' => 'vazUzel',
  ),
  'strom-koren' => 
  array (
    'evidenceType' => 'STROM_KOREN',
    'evidenceName' => 'Obecný strom',
    'evidencePath' => 'strom-koren',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Strom',
    'formCode' => 'strom',
  ),
  'text' => 
  array (
    'evidenceType' => 'TEXT',
    'evidenceName' => 'Předdefinované texty',
    'evidencePath' => 'text',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Text',
    'formCode' => 'cisTexty',
  ),
  'typ-aktivity' => 
  array (
    'evidenceType' => 'TYP_AKTIVITY',
    'evidenceName' => 'Typy událostí / aktivit',
    'evidencePath' => 'typ-aktivity',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.TypAkt',
    'formCode' => 'adrTypAkt',
  ),
  'typ-atributu' => 
  array (
    'evidenceType' => 'TYP_ATRIBUTU',
    'evidenceName' => 'Typy atributů',
    'evidencePath' => 'typ-atributu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.TypAtributu',
    'formCode' => 'cenTypAtributu',
  ),
  'typ-nakladu' => 
  array (
    'evidenceType' => 'TYP_NAKLADU',
    'evidenceName' => 'Typy nákladů na události / aktivity',
    'evidencePath' => 'typ-nakladu',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.TypNaklAkt',
    'formCode' => 'adrTypNaklAkt',
  ),
  'typ-organizace' => 
  array (
    'evidenceType' => 'TYP_ORGANIZACE',
    'evidenceName' => 'Typ organizace',
    'evidencePath' => 'typ-organizace',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.uses.TypOrganizace',
    'formCode' => 'ucTypOrg',
  ),
  'typ-smlouvy' => 
  array (
    'evidenceType' => 'TYP_SMLOUVY',
    'evidenceName' => 'Typy odběratelských smluv',
    'evidencePath' => 'typ-smlouvy',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.TypSmlouvy',
    'formCode' => 'adrTypSml',
  ),
  'typ-stavu-ceniku' => 
  array (
    'evidenceType' => 'TYP_STAVU_CENIKU',
    'evidenceName' => 'Číselník stavů položek ceníku',
    'evidencePath' => 'typ-stavu-ceniku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.StavCen',
    'formCode' => 'cenStav',
  ),
  'typ-zakazky' => 
  array (
    'evidenceType' => 'TYP_ZAKAZKY',
    'evidenceName' => 'Typy zakázek',
    'evidencePath' => 'typ-zakazky',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.TypZakazky',
    'formCode' => 'cisTypZak',
  ),
  'ucet' => 
  array (
    'evidenceType' => 'UCET',
    'evidenceName' => 'Účtový rozvrh',
    'evidencePath' => 'ucet',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Ucet',
    'formCode' => 'ucDoklUcty',
  ),
  'ucetni-denik' => 
  array (
    'evidenceType' => 'UCETNI_DENIK',
    'evidenceName' => 'Účetní deník',
    'evidencePath' => 'ucetni-denik',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.UcetniDenik',
    'formCode' => 'vykazUcetniDenik',
  ),
  'ucetni-obdobi' => 
  array (
    'evidenceType' => 'UCETNI_OBDOBI',
    'evidenceName' => 'Účetní období',
    'evidencePath' => 'ucetni-obdobi',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.nast.UcetniObdobi',
    'formCode' => 'nUcetniObdobi',
  ),
  'ucetni-osnova' => 
  array (
    'evidenceType' => 'UCETNI_OSNOVA',
    'evidenceName' => 'Standardní účetní osnova',
    'evidencePath' => 'ucetni-osnova',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.StdUcet',
    'formCode' => 'cisUceRoz',
  ),
  'umisteni' => 
  array (
    'evidenceType' => 'UMISTENI',
    'evidenceName' => 'Umístění',
    'evidencePath' => 'umisteni',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.Umisteni',
    'formCode' => 'majUmisteni',
  ),
  'umisteni-ve-skladu' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
  ),
  'umisteni-ve-skladu-mistnost' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU_MISTNOST',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu-mistnost',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
  ),
  'umisteni-ve-skladu-police' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU_POLICE',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu-police',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
  ),
  'umisteni-ve-skladu-regal' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU_REGAL',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu-regal',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
  ),
  'sablona-upominky' => 
  array (
    'evidenceType' => 'UPOMINKA_SABLONA',
    'evidenceName' => 'Upomínky',
    'evidencePath' => 'sablona-upominky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Sablona',
    'formCode' => 'upominky',
  ),
  'uzivatel' => 
  array (
    'evidenceType' => 'UZIVATELE',
    'evidenceName' => 'Osoby a uživatelé',
    'evidencePath' => 'uzivatel',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Uzivatel',
    'formCode' => 'cisOsoby',
  ),
  'uzivatelsky-dotaz' => 
  array (
    'evidenceType' => 'UZIVATELSKY_DOTAZ',
    'evidenceName' => 'Uživatelské dotazy',
    'evidencePath' => 'uzivatelsky-dotaz',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.w.Dotaz',
    'formCode' => 'dotaz',
  ),
  'uzivatelsky-dotaz-parametr' => 
  array (
    'evidenceType' => 'UZIVATELSKY_DOTAZ_PARAMETR',
    'evidenceName' => 'Parametry',
    'evidencePath' => 'uzivatelsky-dotaz-parametr',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.w.DotazParam',
    'formCode' => 'dotazParam',
  ),
  'uzivatelsky-dotaz-vlastnost' => 
  array (
    'evidenceType' => 'UZIVATELSKY_DOTAZ_VLASTNOST',
    'evidenceName' => 'Vlastnosti',
    'evidencePath' => 'uzivatelsky-dotaz-vlastnost',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.w.DotazProp',
    'formCode' => 'dotazProp',
  ),
  'uzivatelska-vazba' => 
  array (
    'evidenceType' => 'VAZBA',
    'evidenceName' => 'Uživatelské vazby',
    'evidencePath' => 'uzivatelska-vazba',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.vyk.VazbaView',
    'formCode' => 'vazbaUzivView',
  ),
  'vazba' => 
  array (
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'evidenceName' => 'Vazby dokladu',
    'evidencePath' => 'vazba',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.dok.VazbaDokl',
    'formCode' => 'nezVazbyDokl',
  ),
  'typ-uzivatelske-vazby' => 
  array (
    'evidenceType' => 'VAZBA_TYP',
    'evidenceName' => 'Typy uživatelských vazeb',
    'evidencePath' => 'typ-uzivatelske-vazby',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.VazbaTyp',
    'formCode' => 'vazbaTyp',
  ),
  'vykaz-hospodareni' => 
  array (
    'evidenceType' => 'VYKAZ_HOSPODARENI',
    'evidenceName' => 'Výkaz hospodaření za měsíc',
    'evidencePath' => 'vykaz-hospodareni',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.StavyUctu',
    'formCode' => 'vykazVykazHospodareni',
  ),
  'vyrobni-cislo' => 
  array (
    'evidenceType' => 'VYROBNI_CISLA',
    'evidenceName' => 'Výrobní čísla',
    'evidencePath' => 'vyrobni-cislo',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.VyrobniCislo',
    'formCode' => 'sklVyrCis',
  ),
  'vzajemny-zapocet' => 
  array (
    'evidenceType' => 'VZAJEMNY_ZAPOCET',
    'evidenceName' => 'Vzájemné zápočty',
    'evidencePath' => 'vzajemny-zapocet',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'banZapocty',
  ),
  'typ-vzajemnych-zapoctu' => 
  array (
    'evidenceType' => 'VZAJEMNY_ZAPOCET_TYP',
    'evidenceName' => 'Typy zápočtů',
    'evidencePath' => 'typ-vzajemnych-zapoctu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'banTypZapocty',
  ),
  'xslt' => 
  array (
    'evidenceType' => 'XSLT',
    'evidenceName' => 'Uživatelské transformace',
    'evidencePath' => 'xslt',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Xslt',
    'formCode' => 'xslt',
  ),
  'zakazka' => 
  array (
    'evidenceType' => 'ZAKAZKA',
    'evidenceName' => 'Zakázky',
    'evidencePath' => 'zakazka',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Zakazka',
    'formCode' => 'cisZak',
  ),
  'zapujcka' => 
  array (
    'evidenceType' => 'ZAPUJCKA',
    'evidenceName' => 'Zápůjčky',
    'evidencePath' => 'zapujcka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.maj.Zapujcka',
    'formCode' => 'majZapujcky',
  ),
  'zavazek' => 
  array (
    'evidenceType' => 'ZAVAZEK',
    'evidenceName' => 'Ostatní závazky',
    'evidencePath' => 'zavazek',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'zavAkt',
  ),
  'zavazek-polozka' => 
  array (
    'evidenceType' => 'ZAVAZEK_POLOZKA',
    'evidenceName' => 'Položky ostatních závazků',
    'evidencePath' => 'zavazek-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolFak',
    'formCode' => 'zavPol',
  ),
  'rada-zavazku' => 
  array (
    'evidenceType' => 'ZAVAZEK_RADA',
    'evidenceName' => 'Dokladové řady - závazky',
    'evidencePath' => 'rada-zavazku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'zavRady',
  ),
  'typ-zavazku' => 
  array (
    'evidenceType' => 'ZAVAZEK_TYP',
    'evidenceName' => 'Typy ostatních závazků',
    'evidencePath' => 'typ-zavazku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'zavTyp',
  ),
  'zurnal' => 
  array (
    'evidenceType' => 'ZURNAL',
    'evidenceName' => 'Žurnál',
    'evidencePath' => 'zurnal',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.w.Zurnal',
    'formCode' => 'zurnal',
  ),
);


    /**
     * Obtain evidence identifier
     *
     * @return string company database name
     */
    public function getRecordID()
    {
        return $this->getDataValue('evidencePath');
    }
    }
