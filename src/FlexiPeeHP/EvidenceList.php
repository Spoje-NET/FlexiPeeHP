<?php
/**
 * FlexiPeeHP - List of Evidencies.
 *
 * Generated: Wed, 14 Nov 2018 22:08:58 +0100 
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
    public $keyColumn = 'evidencePath';

    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
 static public $version = '2018.2.6.2';

    /**
     * Evidences Path/Name listing.
     *
     * @var array
     */
 static public $name = array (
  'adresar' => 'Adresy firem',
  'atribut' => 'Atributy',
  'banka' => 'Banka',
  'format-elektronickeho-bankovnictvi' => 'Bankovní formáty',
  'adresar-bankovni-ucet' => 'Bankovní spojení',
  'cenova-uroven' => 'Cenové úrovně',
  'odberatel' => 'Ceny pro odběratele/skupiny odběratelů, speciální kódy',
  'cenik' => 'Ceník',
  'cenikova-skupina' => 'Ceníkové skupiny',
  'certifikacni-autorita' => 'Certifikační autority',
  'intrastat-dodaci-podminky' => 'Dodací podmínky',
  'dodavatelska-smlouva' => 'Dodavatelské smlouvy',
  'dodavatel' => 'Dodavatelé',
  'rada-banka' => 'Dokladové řady - bankovní doklady',
  'rada-interniho-dokladu' => 'Dokladové řady - interní doklady',
  'rada-pohledavky' => 'Dokladové řady - pohledávky',
  'rada-pokladni-pohyb' => 'Dokladové řady - pokladní doklady',
  'rada-faktury-prijate' => 'Dokladové řady - přijaté faktury',
  'rada-nabidky-prijate' => 'Dokladové řady - přijaté nabídky',
  'rada-objednavky-prijate' => 'Dokladové řady - přijaté objednávky',
  'rada-poptavky-prijate' => 'Dokladové řady - přijaté poptávky',
  'rada-skladovy-pohyb' => 'Dokladové řady - sklad',
  'rada-faktury-vydane' => 'Dokladové řady - vydané faktury',
  'rada-nabidky-vydane' => 'Dokladové řady - vydané nabídky',
  'rada-objednavky-vydane' => 'Dokladové řady - vydané objednávky',
  'rada-poptavky-vydane' => 'Dokladové řady - vydané poptávky',
  'rada-zavazku' => 'Dokladové řady - závazky',
  'intrastat-druh-dopravy' => 'Druh dopravy',
  'eet-komunikace' => 'EET komunikace',
  'cenik-obal' => 'Evidence obalů EkoKom',
  'forma-dopravy' => 'Formy dopravy',
  'forma-uhrady' => 'Formy úhrady',
  'hlavni-kniha' => 'Hlavní kniha',
  'individualni-cenik' => 'Individuální ceník',
  'insight' => 'Insight',
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
  'mapovani-skladu' => 'Mapování skladů',
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
  'prikaz-k-inkasu-polozka' => 'Položka inkasa',
  'prikaz-k-uhrade-polozka' => 'Položka příkazu k úhradě',
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
  'banka-polozka' => 'Položky vzájemných zápočtů',
  'poplatek' => 'Poplatky',
  'psc' => 'Poštovní směrovací čísla',
  'prodejka' => 'Prodejní kasa',
  'pravo-viditelnosti' => 'Práva viditelnosti dat',
  'text' => 'Předdefinované texty',
  'predpis-zauctovani' => 'Předpisy zaúčtování',
  'faktura-prijata' => 'Přijaté faktury',
  'nabidka-prijata' => 'Přijaté nabídky',
  'objednavka-prijata' => 'Přijaté objednávky',
  'poptavka-prijata' => 'Přijaté poptávky',
  'skladovy-pohyb' => 'Příjemky/výdejky',
  'prikaz-k-inkasu' => 'Příkaz k inkasu',
  'prikaz-k-uhrade' => 'Příkaz k úhradě',
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
  'skupina-zbozi' => 'Skupiny zboží a materiálu',
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
  'subjekt' => 'Subjekt',
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
  'typ-nabidky-prijate' => 'Typy přijatých nabídek',
  'typ-objednavky-prijate' => 'Typy přijatých objednávek',
  'typ-poptavky-prijate' => 'Typy přijatých poptávek',
  'typ-skladovy-pohyb' => 'Typy skladových dokladů',
  'typ-aktivity' => 'Typy událostí / aktivit',
  'typ-uzivatelske-vazby' => 'Typy uživatelských vazeb',
  'typ-faktury-vydane' => 'Typy vydaných faktur',
  'typ-nabidky-vydane' => 'Typy vydaných nabídek',
  'typ-objednavky-vydane' => 'Typy vydaných objednávek',
  'typ-poptavky-vydane' => 'Typy vydaných poptávek',
  'typ-zakazky' => 'Typy zakázek',
  'typ-vzajemnych-zapoctu' => 'Typy zápočtů',
  'majetek-udalost' => 'Události',
  'udalost' => 'Události, aktivity',
  'umisteni' => 'Umístění',
  'umisteni-ve-skladu-mistnost' => 'Umístění ve skladu',
  'umisteni-ve-skladu-police' => 'Umístění ve skladu',
  'umisteni-ve-skladu' => 'Umístění ve skladu',
  'umisteni-ve-skladu-regal' => 'Umístění ve skladu',
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
  'nabidka-vydana' => 'Vydané nabídky',
  'objednavka-vydana' => 'Vydané objednávky',
  'poptavka-vydana' => 'Vydané poptávky',
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
  'nastaveni' => 
  array (
    'evidenceType' => 'NASTAVENI',
    'evidenceName' => 'Nastavení',
    'evidencePath' => 'nastaveni',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.nast.Nastaveni',
    'formCode' => 'nNastav',
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
  'adresar' => 
  array (
    'evidenceType' => 'ADRESAR',
    'evidenceName' => 'Adresy firem',
    'evidencePath' => 'adresar',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.Adresar',
    'formCode' => 'adrAdresar',
    'extIdSupported' => 'true',
  ),
  'adresar-bankovni-ucet' => 
  array (
    'evidenceType' => 'ADR_BANKOVNI_UCET',
    'evidenceName' => 'Bankovní spojení',
    'evidencePath' => 'adresar-bankovni-ucet',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.BanSpoj',
    'formCode' => 'adrBanSpoj',
    'extIdSupported' => 'true',
  ),
  'kontakt' => 
  array (
    'evidenceType' => 'ADR_KONTAKT',
    'evidenceName' => 'Kontakty',
    'evidencePath' => 'kontakt',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.Kontakt',
    'formCode' => 'adrKontakty',
    'extIdSupported' => 'true',
  ),
  'udalost' => 
  array (
    'evidenceType' => 'ADR_UDALOST',
    'evidenceName' => 'Události, aktivity',
    'evidencePath' => 'udalost',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.AdrUdalostMaj',
    'formCode' => 'adrUdalosti',
    'extIdSupported' => 'true',
  ),
  'analyza-zakazky' => 
  array (
    'evidenceType' => 'ANALYZA_ZAKAZKY',
    'evidenceName' => 'Účetní analýza zakázky',
    'evidencePath' => 'analyza-zakazky',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.AnalyzaZakazky',
    'formCode' => 'vykazAnalyzaZakazky',
    'extIdSupported' => 'false',
  ),
  'atribut' => 
  array (
    'evidenceType' => 'ATRIBUT',
    'evidenceName' => 'Atributy',
    'evidencePath' => 'atribut',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Atribut',
    'formCode' => 'cenAtribut',
    'extIdSupported' => 'false',
  ),
  'banka' => 
  array (
    'evidenceType' => 'BANKA',
    'evidenceName' => 'Banka',
    'evidencePath' => 'banka',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'banAkt',
    'extIdSupported' => 'true',
  ),
  'banka-polozka' => 
  array (
    'evidenceType' => 'BANKA_POLOZKA',
    'evidenceName' => 'Položky vzájemných zápočtů',
    'evidencePath' => 'banka-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolInt',
    'formCode' => 'banBanZapoctyPol',
    'extIdSupported' => 'true',
  ),
  'rada-banka' => 
  array (
    'evidenceType' => 'BANKA_RADA',
    'evidenceName' => 'Dokladové řady - bankovní doklady',
    'evidencePath' => 'rada-banka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'banRady',
    'extIdSupported' => 'false',
  ),
  'typ-banka' => 
  array (
    'evidenceType' => 'BANKA_TYP',
    'evidenceName' => 'Typy bankovních dokladů',
    'evidencePath' => 'typ-banka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'banTyp',
    'extIdSupported' => 'true',
  ),
  'bankovni-ucet' => 
  array (
    'evidenceType' => 'BANKOVNI_UCET',
    'evidenceName' => 'Seznam bankovních účtů',
    'evidencePath' => 'bankovni-ucet',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Bsp',
    'formCode' => 'banBsp',
    'extIdSupported' => 'true',
  ),
  'cenik' => 
  array (
    'evidenceType' => 'CENIK',
    'evidenceName' => 'Ceník',
    'evidencePath' => 'cenik',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.CenikView',
    'formCode' => 'cenAkt',
    'extIdSupported' => 'true',
  ),
  'cenikova-skupina' => 
  array (
    'evidenceType' => 'CENIKOVA_SKUPINA',
    'evidenceName' => 'Ceníkové skupiny',
    'evidencePath' => 'cenikova-skupina',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.SkupCen',
    'formCode' => 'cenSkupCen',
    'extIdSupported' => 'false',
  ),
  'cenikovy-pohyb-nakup' => 
  array (
    'evidenceType' => 'CENIKOVE_POHYBY_NAKUP',
    'evidenceName' => 'Nákupní, prodejní a skladové pohyby',
    'evidencePath' => 'cenikovy-pohyb-nakup',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.CenikovePohyby',
    'formCode' => 'vykazCenPohyby',
    'extIdSupported' => 'false',
  ),
  'cenikovy-pohyb-prodej' => 
  array (
    'evidenceType' => 'CENIKOVE_POHYBY_PRODEJ',
    'evidenceName' => 'Nákupní, prodejní a skladové pohyby',
    'evidencePath' => 'cenikovy-pohyb-prodej',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.CenikovePohyby',
    'formCode' => 'vykazCenPohyby',
    'extIdSupported' => 'false',
  ),
  'cenik-obal' => 
  array (
    'evidenceType' => 'CENIK_OBAL',
    'evidenceName' => 'Evidence obalů EkoKom',
    'evidencePath' => 'cenik-obal',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.EkoKom',
    'formCode' => 'cenEkoKom',
    'extIdSupported' => 'false',
  ),
  'cenova-uroven' => 
  array (
    'evidenceType' => 'CENOVA_UROVEN',
    'evidenceName' => 'Cenové úrovně',
    'evidencePath' => 'cenova-uroven',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.CenHlad',
    'formCode' => 'cenHlad',
    'extIdSupported' => 'true',
  ),
  'certifikacni-autorita' => 
  array (
    'evidenceType' => 'CERTIFIKACNI_AUTORITA',
    'evidenceName' => 'Certifikační autority',
    'evidencePath' => 'certifikacni-autorita',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.AutCert',
    'formCode' => 'autCert',
    'extIdSupported' => 'false',
  ),
  'cinnost' => 
  array (
    'evidenceType' => 'CINNOST',
    'evidenceName' => 'Činnost',
    'evidencePath' => 'cinnost',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Cinnost',
    'formCode' => 'cisCinnost',
    'extIdSupported' => 'true',
  ),
  'cislo-baliku' => 
  array (
    'evidenceType' => 'CISLO_BALIKU',
    'evidenceName' => 'Čísla balíků',
    'evidencePath' => 'cislo-baliku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.CisloBal',
    'formCode' => 'cisloBal',
    'extIdSupported' => 'false',
  ),
  'cleneni-dph' => 
  array (
    'evidenceType' => 'CLENENI_DPH',
    'evidenceName' => 'Řádky přiznání DPH',
    'evidencePath' => 'cleneni-dph',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.ucto.ClenDph',
    'formCode' => 'cisClenDph',
    'extIdSupported' => 'false',
  ),
  'cleneni-kontrolni-hlaseni' => 
  array (
    'evidenceType' => 'CLEN_KON_VYK_DPH',
    'evidenceName' => 'Řádky kontrolního hlášení DPH',
    'evidencePath' => 'cleneni-kontrolni-hlaseni',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.ucto.ClenKonVykDph',
    'formCode' => 'cisClenKonVykDph',
    'extIdSupported' => 'false',
  ),
  'custom-button' => 
  array (
    'evidenceType' => 'CUSTOM_BUTTON',
    'evidenceName' => 'Uživatelské tlačítko',
    'evidencePath' => 'custom-button',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.CustomButton',
    'formCode' => 'customButton',
    'extIdSupported' => 'true',
  ),
  'danova-evidence' => 
  array (
    'evidenceType' => 'DAN_EVID',
    'evidenceName' => 'Výkaz daňové evidence',
    'evidencePath' => 'danova-evidence',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.DanovaEvidence',
    'formCode' => 'vykazDanEvid',
    'extIdSupported' => 'false',
  ),
  'dashboard-panel' => 
  array (
    'evidenceType' => 'DASHBOARD_PANEL',
    'evidenceName' => 'Správa přehledů',
    'evidencePath' => 'dashboard-panel',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.DashboardPanel',
    'formCode' => 'dashboardPanel',
    'extIdSupported' => 'false',
  ),
  'dashboard-sharing' => 
  array (
    'evidenceType' => 'DASHBOARD_SHARING',
    'evidenceName' => 'Sdílení přehledů',
    'evidencePath' => 'dashboard-sharing',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.DashboardSharing',
    'formCode' => 'dashboardSharing',
    'extIdSupported' => 'false',
  ),
  'dodavatel' => 
  array (
    'evidenceType' => 'DODAVATEL',
    'evidenceName' => 'Dodavatelé',
    'evidencePath' => 'dodavatel',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Dodavatel',
    'formCode' => 'cenDodavateleView',
    'extIdSupported' => 'true',
  ),
  'dodavatelska-smlouva' => 
  array (
    'evidenceType' => 'DODAVATELSKA_SMLOUVA',
    'evidenceName' => 'Dodavatelské smlouvy',
    'evidencePath' => 'dodavatelska-smlouva',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.SmlouvaView',
    'formCode' => 'adrSmlDodavAktView',
    'extIdSupported' => 'false',
  ),
  'dodavatelsky-typ-smlouvy' => 
  array (
    'evidenceType' => 'DODAVATELSKY_TYP_SMLOUVY',
    'evidenceName' => 'Typy dodavatelských smluv',
    'evidencePath' => 'dodavatelsky-typ-smlouvy',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.TypSmlouvy',
    'formCode' => 'adrTypDodavSml',
    'extIdSupported' => 'true',
  ),
  'eet-komunikace' => 
  array (
    'evidenceType' => 'EET_KOMUNIKACE',
    'evidenceName' => 'EET komunikace',
    'evidencePath' => 'eet-komunikace',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.vyk.EetKomView',
    'formCode' => 'eetKomView',
    'extIdSupported' => 'false',
  ),
  'faktura-prijata' => 
  array (
    'evidenceType' => 'FAKTURA_IN',
    'evidenceName' => 'Přijaté faktury',
    'evidencePath' => 'faktura-prijata',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'fapAkt',
    'extIdSupported' => 'true',
  ),
  'faktura-prijata-polozka' => 
  array (
    'evidenceType' => 'FAKTURA_IN_POLOZKA',
    'evidenceName' => 'Položky přijatých faktur',
    'evidencePath' => 'faktura-prijata-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolFak',
    'formCode' => 'fapPol',
    'extIdSupported' => 'true',
  ),
  'rada-faktury-prijate' => 
  array (
    'evidenceType' => 'FAKTURA_IN_RADA',
    'evidenceName' => 'Dokladové řady - přijaté faktury',
    'evidencePath' => 'rada-faktury-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'fapRady',
    'extIdSupported' => 'false',
  ),
  'typ-faktury-prijate' => 
  array (
    'evidenceType' => 'FAKTURA_IN_TYP',
    'evidenceName' => 'Typy přijatých faktur',
    'evidencePath' => 'typ-faktury-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'fapTyp',
    'extIdSupported' => 'true',
  ),
  'faktura-vydana' => 
  array (
    'evidenceType' => 'FAKTURA_OUT',
    'evidenceName' => 'Vydané faktury',
    'evidencePath' => 'faktura-vydana',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'favAkt',
    'extIdSupported' => 'true',
  ),
  'faktura-vydana-polozka' => 
  array (
    'evidenceType' => 'FAKTURA_OUT_POLOZKA',
    'evidenceName' => 'Položky vydaných faktur a prodejek',
    'evidencePath' => 'faktura-vydana-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolFak',
    'formCode' => 'favPol',
    'extIdSupported' => 'true',
  ),
  'rada-faktury-vydane' => 
  array (
    'evidenceType' => 'FAKTURA_OUT_RADA',
    'evidenceName' => 'Dokladové řady - vydané faktury',
    'evidencePath' => 'rada-faktury-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'favRady',
    'extIdSupported' => 'false',
  ),
  'typ-faktury-vydane' => 
  array (
    'evidenceType' => 'FAKTURA_OUT_TYP',
    'evidenceName' => 'Typy vydaných faktur',
    'evidencePath' => 'typ-faktury-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'favTyp',
    'extIdSupported' => 'true',
  ),
  'filtr' => 
  array (
    'evidenceType' => 'FILTR',
    'evidenceName' => 'Uživatelské filtry',
    'evidencePath' => 'filtr',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.w.Filtr',
    'formCode' => 'filtry',
    'extIdSupported' => 'false',
  ),
  'format-elektronickeho-bankovnictvi' => 
  array (
    'evidenceType' => 'FORMAT_ELEKTRONICKEHO_BANKOVNICTVI',
    'evidenceName' => 'Bankovní formáty',
    'evidencePath' => 'format-elektronickeho-bankovnictvi',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.dok.ElBanFormat',
    'formCode' => 'cisElBanFormaty',
    'extIdSupported' => 'false',
  ),
  'forma-dopravy' => 
  array (
    'evidenceType' => 'FORMA_DOPRAVY',
    'evidenceName' => 'Formy dopravy',
    'evidencePath' => 'forma-dopravy',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaDopravy',
    'formCode' => 'formaDopravy',
    'extIdSupported' => 'false',
  ),
  'forma-uhrady' => 
  array (
    'evidenceType' => 'FORMA_UHRADY',
    'evidenceName' => 'Formy úhrady',
    'evidencePath' => 'forma-uhrady',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaUhradyCis',
    'formCode' => 'formaUhrCis',
    'extIdSupported' => 'false',
  ),
  'forma-uhrady-zauctovani' => 
  array (
    'evidenceType' => 'FORMA_UHRADY_ZAUCTOVANI',
    'evidenceName' => 'Zaúčtování formy úhrady',
    'evidencePath' => 'forma-uhrady-zauctovani',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaUhradyZauc',
    'formCode' => 'formaUhrZauc',
    'extIdSupported' => 'false',
  ),
  'hlavni-kniha' => 
  array (
    'evidenceType' => 'HLAVNI_KNIHA',
    'evidenceName' => 'Hlavní kniha',
    'evidencePath' => 'hlavni-kniha',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.ObratovaPredvaha',
    'formCode' => 'vykazHlavniKniha',
    'extIdSupported' => 'false',
  ),
  'hodnoceni-zakazky' => 
  array (
    'evidenceType' => 'HODNOCENI_ZAKAZKY',
    'evidenceName' => 'Vyhodnocení zakázek',
    'evidencePath' => 'hodnoceni-zakazky',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.VyhZakazky',
    'formCode' => 'cisVyhZak',
    'extIdSupported' => 'false',
  ),
  'individualni-cenik' => 
  array (
    'evidenceType' => 'INDIVIDUALNI_CENIK',
    'evidenceName' => 'Individuální ceník',
    'evidencePath' => 'individualni-cenik',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.CenyView',
    'formCode' => 'cenyView',
    'extIdSupported' => 'false',
  ),
  'insight' => 
  array (
    'evidenceType' => 'INSIGHT',
    'evidenceName' => 'Insight',
    'evidencePath' => 'insight',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Insight',
    'formCode' => 'insight',
    'extIdSupported' => 'false',
  ),
  'interni-doklad' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD',
    'evidenceName' => 'Interní doklady',
    'evidencePath' => 'interni-doklad',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'intDokl',
    'extIdSupported' => 'true',
  ),
  'interni-doklad-polozka' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD_POLOZKA',
    'evidenceName' => 'Položky interních dokladů',
    'evidencePath' => 'interni-doklad-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolInt',
    'formCode' => 'intPol',
    'extIdSupported' => 'true',
  ),
  'rada-interniho-dokladu' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD_RADA',
    'evidenceName' => 'Dokladové řady - interní doklady',
    'evidencePath' => 'rada-interniho-dokladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'intRady',
    'extIdSupported' => 'false',
  ),
  'typ-interniho-dokladu' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD_TYP',
    'evidenceName' => 'Typy interních dokladů',
    'evidencePath' => 'typ-interniho-dokladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'intTyp',
    'extIdSupported' => 'true',
  ),
  'intrastat-dodaci-podminky' => 
  array (
    'evidenceType' => 'INTRASTAT_DODACI_PODMINKY',
    'evidenceName' => 'Dodací podmínky',
    'evidencePath' => 'intrastat-dodaci-podminky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.DodPodm',
    'formCode' => 'intrDodPodm',
    'extIdSupported' => 'false',
  ),
  'intrastat-druh-dopravy' => 
  array (
    'evidenceType' => 'INTRASTAT_DRUH_DOPRAVY',
    'evidenceName' => 'Druh dopravy',
    'evidencePath' => 'intrastat-druh-dopravy',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.DruhDopr',
    'formCode' => 'intrDruhDopr',
    'extIdSupported' => 'false',
  ),
  'intrastat-kod-nomenklatury' => 
  array (
    'evidenceType' => 'INTRASTAT_KOD_NOMENKLATURY',
    'evidenceName' => 'Kódy nomenklatury',
    'evidencePath' => 'intrastat-kod-nomenklatury',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.Nomen',
    'formCode' => 'intrNomenkla',
    'extIdSupported' => 'false',
  ),
  'intrastat-kraj-urceni' => 
  array (
    'evidenceType' => 'INTRASTAT_KRAJ_URCENI',
    'evidenceName' => 'Kraje určení',
    'evidencePath' => 'intrastat-kraj-urceni',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.KrajUrc',
    'formCode' => 'intrKrajUrc',
    'extIdSupported' => 'false',
  ),
  'intrastat-kurz' => 
  array (
    'evidenceType' => 'INTRASTAT_KURZ',
    'evidenceName' => 'Kurzy pro Intrastat',
    'evidencePath' => 'intrastat-kurz',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Kurz',
    'formCode' => 'cisKurzyIntr',
    'extIdSupported' => 'true',
  ),
  'intrastat-merna-jednotka' => 
  array (
    'evidenceType' => 'INTRASTAT_MERNA_JEDNOTKA',
    'evidenceName' => 'Měrné jednotky',
    'evidencePath' => 'intrastat-merna-jednotka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.IntrMerJed',
    'formCode' => 'intrMerJed',
    'extIdSupported' => 'false',
  ),
  'intrastat-obchodni-transakce' => 
  array (
    'evidenceType' => 'INTRASTAT_OBCHODNI_TRANSAKCE',
    'evidenceName' => 'Obchodní transakce',
    'evidencePath' => 'intrastat-obchodni-transakce',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.ObchTrans',
    'formCode' => 'intrObchTrans',
    'extIdSupported' => 'false',
  ),
  'intrastat-zvlastni-pohyb' => 
  array (
    'evidenceType' => 'INTRASTAT_ZVLASTNI_POHYB',
    'evidenceName' => 'Zvláštní pohyby',
    'evidencePath' => 'intrastat-zvlastni-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.ZvlPoh',
    'formCode' => 'intrZvlPoh',
    'extIdSupported' => 'false',
  ),
  'inventura' => 
  array (
    'evidenceType' => 'INVENTURA',
    'evidenceName' => 'Inventury',
    'evidencePath' => 'inventura',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.Inventura',
    'formCode' => 'sklInventura',
    'extIdSupported' => 'false',
  ),
  'inventura-polozka' => 
  array (
    'evidenceType' => 'INVENTURA_POLOZKA',
    'evidenceName' => 'Položky inventur',
    'evidencePath' => 'inventura-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.PolInventura',
    'formCode' => 'sklInventuraPol',
    'extIdSupported' => 'false',
  ),
  'konst-symbol' => 
  array (
    'evidenceType' => 'KONST_SYM',
    'evidenceName' => 'Konstantní symboly',
    'evidencePath' => 'konst-symbol',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.KonSym',
    'formCode' => 'cisKonSym',
    'extIdSupported' => 'false',
  ),
  'kurz' => 
  array (
    'evidenceType' => 'KURZ',
    'evidenceName' => 'Kurzy',
    'evidencePath' => 'kurz',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Kurz',
    'formCode' => 'cisKurzy',
    'extIdSupported' => 'true',
  ),
  'kurz-pro-cenotvorbu' => 
  array (
    'evidenceType' => 'KURZ_PRO_CENOTVORBU',
    'evidenceName' => 'Kurzy pro cenotvorbu',
    'evidencePath' => 'kurz-pro-cenotvorbu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Kurz',
    'formCode' => 'cisKurzyCen',
    'extIdSupported' => 'true',
  ),
  'leasing' => 
  array (
    'evidenceType' => 'LEASING',
    'evidenceName' => 'Leasing',
    'evidencePath' => 'leasing',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.maj.Leasing',
    'formCode' => 'majLeasing',
    'extIdSupported' => 'true',
  ),
  'typ-leasingu' => 
  array (
    'evidenceType' => 'LEASING_TYP',
    'evidenceName' => 'Typy leasingů',
    'evidencePath' => 'typ-leasingu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.maj.TypLeas',
    'formCode' => 'majTypLeas',
    'extIdSupported' => 'true',
  ),
  'majetek' => 
  array (
    'evidenceType' => 'MAJETEK',
    'evidenceName' => 'Majetek',
    'evidencePath' => 'majetek',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.Majetek',
    'formCode' => 'majMajetek',
    'extIdSupported' => 'true',
  ),
  'typ-majetku' => 
  array (
    'evidenceType' => 'MAJETEK_TYP',
    'evidenceName' => 'Typy majetků',
    'evidencePath' => 'typ-majetku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.TypMaj',
    'formCode' => 'majTypMaj',
    'extIdSupported' => 'true',
  ),
  'majetek-udalost' => 
  array (
    'evidenceType' => 'MAJETEK_UDALOST',
    'evidenceName' => 'Události',
    'evidencePath' => 'majetek-udalost',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.maj.Udalost',
    'formCode' => 'majUdalosti',
    'extIdSupported' => 'false',
  ),
  'mapovani-skladu' => 
  array (
    'evidenceType' => 'MAPOVANI_SKLADU',
    'evidenceName' => 'Mapování skladů',
    'evidencePath' => 'mapovani-skladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.MapSklad',
    'formCode' => 'sklMapSklad',
    'extIdSupported' => 'true',
  ),
  'mena' => 
  array (
    'evidenceType' => 'MENA',
    'evidenceName' => 'Měny',
    'evidencePath' => 'mena',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Mena',
    'formCode' => 'cisMeny',
    'extIdSupported' => 'false',
  ),
  'merna-jednotka' => 
  array (
    'evidenceType' => 'MERNA_JEDNOTKA',
    'evidenceName' => 'Měrné jednotky ',
    'evidencePath' => 'merna-jednotka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.MerJed',
    'formCode' => 'cisMj',
    'extIdSupported' => 'true',
  ),
  'misto-urceni' => 
  array (
    'evidenceType' => 'MISTO_URCENI',
    'evidenceName' => 'Místa určení',
    'evidencePath' => 'misto-urceni',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.MistUrc',
    'formCode' => 'adrMistUrc',
    'extIdSupported' => 'true',
  ),
  'nabidka-prijata' => 
  array (
    'evidenceType' => 'NABIDKA_IN',
    'evidenceName' => 'Přijaté nabídky',
    'evidencePath' => 'nabidka-prijata',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodNapDokl',
    'extIdSupported' => 'true',
  ),
  'nabidka-prijata-polozka' => 
  array (
    'evidenceType' => 'NABIDKA_IN_POLOZKA',
    'evidenceName' => 'Položky přijaté nabídky',
    'evidencePath' => 'nabidka-prijata-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodNapPol',
    'extIdSupported' => 'true',
  ),
  'rada-nabidky-prijate' => 
  array (
    'evidenceType' => 'NABIDKA_IN_RADA',
    'evidenceName' => 'Dokladové řady - přijaté nabídky',
    'evidencePath' => 'rada-nabidky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodNapRady',
    'extIdSupported' => 'false',
  ),
  'typ-nabidky-prijate' => 
  array (
    'evidenceType' => 'NABIDKA_IN_TYP',
    'evidenceName' => 'Typy přijatých nabídek',
    'evidencePath' => 'typ-nabidky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodNapTyp',
    'extIdSupported' => 'true',
  ),
  'nabidka-vydana' => 
  array (
    'evidenceType' => 'NABIDKA_OUT',
    'evidenceName' => 'Vydané nabídky',
    'evidencePath' => 'nabidka-vydana',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodNavDokl',
    'extIdSupported' => 'true',
  ),
  'nabidka-vydana-polozka' => 
  array (
    'evidenceType' => 'NABIDKA_OUT_POLOZKA',
    'evidenceName' => 'Položky vydané nabídky',
    'evidencePath' => 'nabidka-vydana-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodNavPol',
    'extIdSupported' => 'true',
  ),
  'rada-nabidky-vydane' => 
  array (
    'evidenceType' => 'NABIDKA_OUT_RADA',
    'evidenceName' => 'Dokladové řady - vydané nabídky',
    'evidencePath' => 'rada-nabidky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodNavRady',
    'extIdSupported' => 'false',
  ),
  'typ-nabidky-vydane' => 
  array (
    'evidenceType' => 'NABIDKA_OUT_TYP',
    'evidenceName' => 'Typy vydaných nabídek',
    'evidencePath' => 'typ-nabidky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodNavTyp',
    'extIdSupported' => 'true',
  ),
  'naklad' => 
  array (
    'evidenceType' => 'NAKLAD',
    'evidenceName' => 'Náklady na události / aktivity',
    'evidencePath' => 'naklad',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.NaklAkt',
    'formCode' => 'adrNaklAkt',
    'extIdSupported' => 'false',
  ),
  'objednavka-prijata' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_IN',
    'evidenceName' => 'Přijaté objednávky',
    'evidencePath' => 'objednavka-prijata',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodObpDokl',
    'extIdSupported' => 'true',
  ),
  'objednavka-prijata-polozka' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_IN_POLOZKA',
    'evidenceName' => 'Položky přijaté objednávky',
    'evidencePath' => 'objednavka-prijata-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodObpPol',
    'extIdSupported' => 'true',
  ),
  'rada-objednavky-prijate' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_IN_RADA',
    'evidenceName' => 'Dokladové řady - přijaté objednávky',
    'evidencePath' => 'rada-objednavky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodObpRady',
    'extIdSupported' => 'false',
  ),
  'typ-objednavky-prijate' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_IN_TYP',
    'evidenceName' => 'Typy přijatých objednávek',
    'evidencePath' => 'typ-objednavky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodObpTyp',
    'extIdSupported' => 'true',
  ),
  'objednavka-vydana' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_OUT',
    'evidenceName' => 'Vydané objednávky',
    'evidencePath' => 'objednavka-vydana',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodObvDokl',
    'extIdSupported' => 'true',
  ),
  'objednavka-vydana-polozka' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_OUT_POLOZKA',
    'evidenceName' => 'Položky vydané objednávky',
    'evidencePath' => 'objednavka-vydana-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodObvPol',
    'extIdSupported' => 'true',
  ),
  'rada-objednavky-vydane' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_OUT_RADA',
    'evidenceName' => 'Dokladové řady - vydané objednávky',
    'evidencePath' => 'rada-objednavky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodObvRady',
    'extIdSupported' => 'false',
  ),
  'typ-objednavky-vydane' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_OUT_TYP',
    'evidenceName' => 'Typy vydaných objednávek',
    'evidencePath' => 'typ-objednavky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodObvTyp',
    'extIdSupported' => 'true',
  ),
  'obrat' => 
  array (
    'evidenceType' => 'OBRAT',
    'evidenceName' => 'Obraty',
    'evidencePath' => 'obrat',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Obrat',
    'formCode' => 'ucDoklObrat',
    'extIdSupported' => 'false',
  ),
  'obratova-predvaha' => 
  array (
    'evidenceType' => 'OBRATOVA_PREDVAHA',
    'evidenceName' => 'Obratová předvaha',
    'evidencePath' => 'obratova-predvaha',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.ObratovaPredvaha',
    'formCode' => 'vykazObratovaPredvaha',
    'extIdSupported' => 'false',
  ),
  'odberatel' => 
  array (
    'evidenceType' => 'ODBERATEL',
    'evidenceName' => 'Ceny pro odběratele/skupiny odběratelů, speciální kódy',
    'evidencePath' => 'odberatel',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Odberatel',
    'formCode' => 'cenOdberateleView',
    'extIdSupported' => 'true',
  ),
  'odpisova-skupina' => 
  array (
    'evidenceType' => 'ODPISOVE_SKUPINY',
    'evidenceName' => 'Odpisové skupiny',
    'evidencePath' => 'odpisova-skupina',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.Sazba',
    'formCode' => 'majSazby',
    'extIdSupported' => 'false',
  ),
  'parametr' => 
  array (
    'evidenceType' => 'PARAM',
    'evidenceName' => 'Pokročilá parametrizace pomocí parametrů',
    'evidencePath' => 'parametr',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Parametr',
    'formCode' => 'parametry',
    'extIdSupported' => 'false',
  ),
  'penezni-ustav' => 
  array (
    'evidenceType' => 'PENEZNI_USTAV',
    'evidenceName' => 'Peněžní ústavy',
    'evidencePath' => 'penezni-ustav',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.SmerKod',
    'formCode' => 'cisSmerKod',
    'extIdSupported' => 'false',
  ),
  'podklady-dph' => 
  array (
    'evidenceType' => 'PODKLADY_DPH',
    'evidenceName' => 'Podklady DPH',
    'evidencePath' => 'podklady-dph',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PodkladyDph',
    'formCode' => 'vykazPodkladyDph',
    'extIdSupported' => 'false',
  ),
  'podobne-zbozi' => 
  array (
    'evidenceType' => 'PODOBNE_ZBOZI',
    'evidenceName' => 'Podobné',
    'evidencePath' => 'podobne-zbozi',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Podobne',
    'formCode' => 'cenPodobne',
    'extIdSupported' => 'true',
  ),
  'pohledavka' => 
  array (
    'evidenceType' => 'POHLEDAVKA',
    'evidenceName' => 'Ostatní pohledávky',
    'evidencePath' => 'pohledavka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'phlAkt',
    'extIdSupported' => 'true',
  ),
  'pohledavka-polozka' => 
  array (
    'evidenceType' => 'POHLEDAVKA_POLOZKA',
    'evidenceName' => 'Položky ostatních pohledávek',
    'evidencePath' => 'pohledavka-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolFak',
    'formCode' => 'phlPol',
    'extIdSupported' => 'true',
  ),
  'rada-pohledavky' => 
  array (
    'evidenceType' => 'POHLEDAVKA_RADA',
    'evidenceName' => 'Dokladové řady - pohledávky',
    'evidencePath' => 'rada-pohledavky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'phlRady',
    'extIdSupported' => 'false',
  ),
  'typ-pohledavky' => 
  array (
    'evidenceType' => 'POHLEDAVKA_TYP',
    'evidenceName' => 'Typy ostatních pohledávek',
    'evidencePath' => 'typ-pohledavky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'phlTyp',
    'extIdSupported' => 'true',
  ),
  'pohyb-na-uctech' => 
  array (
    'evidenceType' => 'POHYB_NA_UCTECH',
    'evidenceName' => 'Pohyby na účtech',
    'evidencePath' => 'pohyb-na-uctech',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PohybyNaUctech',
    'formCode' => 'vykazPohybyNaUctech',
    'extIdSupported' => 'false',
  ),
  'pokladna' => 
  array (
    'evidenceType' => 'POKLADNA',
    'evidenceName' => 'Seznam pokladen',
    'evidencePath' => 'pokladna',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Bsp',
    'formCode' => 'pokBsp',
    'extIdSupported' => 'true',
  ),
  'pokladni-pohyb' => 
  array (
    'evidenceType' => 'POKLADNI_POHYB',
    'evidenceName' => 'Pokladna',
    'evidencePath' => 'pokladni-pohyb',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'pokAkt',
    'extIdSupported' => 'true',
  ),
  'pokladni-pohyb-polozka' => 
  array (
    'evidenceType' => 'POKLADNI_POHYB_POLOZKA',
    'evidenceName' => 'Položky pokladních dokladů',
    'evidencePath' => 'pokladni-pohyb-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolInt',
    'formCode' => 'pokPol',
    'extIdSupported' => 'true',
  ),
  'rada-pokladni-pohyb' => 
  array (
    'evidenceType' => 'POKLADNI_POHYB_RADA',
    'evidenceName' => 'Dokladové řady - pokladní doklady',
    'evidencePath' => 'rada-pokladni-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'pokRady',
    'extIdSupported' => 'false',
  ),
  'typ-pokladni-pohyb' => 
  array (
    'evidenceType' => 'POKLADNI_POHYB_TYP',
    'evidenceName' => 'Typy pokladních dokladů',
    'evidencePath' => 'typ-pokladni-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'pokTyp',
    'extIdSupported' => 'true',
  ),
  'poplatek' => 
  array (
    'evidenceType' => 'POPLATKY',
    'evidenceName' => 'Poplatky',
    'evidencePath' => 'poplatek',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Poplatek',
    'formCode' => 'cenPoplatky',
    'extIdSupported' => 'true',
  ),
  'poptavka-prijata' => 
  array (
    'evidenceType' => 'POPTAVKA_IN',
    'evidenceName' => 'Přijaté poptávky',
    'evidencePath' => 'poptavka-prijata',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodPppDokl',
    'extIdSupported' => 'true',
  ),
  'poptavka-prijata-polozka' => 
  array (
    'evidenceType' => 'POPTAVKA_IN_POLOZKA',
    'evidenceName' => 'Položky přijatých poptávek',
    'evidencePath' => 'poptavka-prijata-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodPppPol',
    'extIdSupported' => 'true',
  ),
  'rada-poptavky-prijate' => 
  array (
    'evidenceType' => 'POPTAVKA_IN_RADA',
    'evidenceName' => 'Dokladové řady - přijaté poptávky',
    'evidencePath' => 'rada-poptavky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodPppRady',
    'extIdSupported' => 'false',
  ),
  'typ-poptavky-prijate' => 
  array (
    'evidenceType' => 'POPTAVKA_IN_TYP',
    'evidenceName' => 'Typy přijatých poptávek',
    'evidencePath' => 'typ-poptavky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodPppTyp',
    'extIdSupported' => 'true',
  ),
  'poptavka-vydana' => 
  array (
    'evidenceType' => 'POPTAVKA_OUT',
    'evidenceName' => 'Vydané poptávky',
    'evidencePath' => 'poptavka-vydana',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodPpvDokl',
    'extIdSupported' => 'true',
  ),
  'poptavka-vydana-polozka' => 
  array (
    'evidenceType' => 'POPTAVKA_OUT_POLOZKA',
    'evidenceName' => 'Položky vydané poptávky',
    'evidencePath' => 'poptavka-vydana-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolObch',
    'formCode' => 'obchodPpvPol',
    'extIdSupported' => 'true',
  ),
  'rada-poptavky-vydane' => 
  array (
    'evidenceType' => 'POPTAVKA_OUT_RADA',
    'evidenceName' => 'Dokladové řady - vydané poptávky',
    'evidencePath' => 'rada-poptavky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodPpvRady',
    'extIdSupported' => 'false',
  ),
  'typ-poptavky-vydane' => 
  array (
    'evidenceType' => 'POPTAVKA_OUT_TYP',
    'evidenceName' => 'Typy vydaných poptávek',
    'evidencePath' => 'typ-poptavky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodPpvTyp',
    'extIdSupported' => 'true',
  ),
  'pravo-viditelnosti' => 
  array (
    'evidenceType' => 'PRAVO_VIDITELNOSTI',
    'evidenceName' => 'Práva viditelnosti dat',
    'evidencePath' => 'pravo-viditelnosti',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.DataPrava',
    'formCode' => 'uzivPristup',
    'extIdSupported' => 'false',
  ),
  'predpis-zauctovani' => 
  array (
    'evidenceType' => 'PREDPIS_ZAUCTOVANI',
    'evidenceName' => 'Předpisy zaúčtování',
    'evidencePath' => 'predpis-zauctovani',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.TypUcOp',
    'formCode' => 'cisTypUcOp',
    'extIdSupported' => 'true',
  ),
  'preneseni-dph' => 
  array (
    'evidenceType' => 'PRENESENI_DPH',
    'evidenceName' => 'Seznam zboží v režimu přenesení DPH',
    'evidencePath' => 'preneseni-dph',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.DphPren',
    'formCode' => 'cisDphPren',
    'extIdSupported' => 'false',
  ),
  'prikaz-k-inkasu' => 
  array (
    'evidenceType' => 'PRIKAZ_K_INKASU',
    'evidenceName' => 'Příkaz k inkasu',
    'evidencePath' => 'prikaz-k-inkasu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.eban.Prikaz',
    'formCode' => 'elInkaso',
    'extIdSupported' => 'false',
  ),
  'prikaz-k-inkasu-polozka' => 
  array (
    'evidenceType' => 'PRIKAZ_K_INKASU_POLOZKA',
    'evidenceName' => 'Položka inkasa',
    'evidencePath' => 'prikaz-k-inkasu-polozka',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.eban.PolozkaPrikazu',
    'formCode' => 'elInkasoPol',
    'extIdSupported' => 'false',
  ),
  'prikaz-k-uhrade' => 
  array (
    'evidenceType' => 'PRIKAZ_K_UHRADE',
    'evidenceName' => 'Příkaz k úhradě',
    'evidencePath' => 'prikaz-k-uhrade',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.eban.Prikaz',
    'formCode' => 'elPrikaz',
    'extIdSupported' => 'false',
  ),
  'prikaz-k-uhrade-polozka' => 
  array (
    'evidenceType' => 'PRIKAZ_K_UHRADE_POLOZKA',
    'evidenceName' => 'Položka příkazu k úhradě',
    'evidencePath' => 'prikaz-k-uhrade-polozka',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.eban.PolozkaPrikazu',
    'formCode' => 'elPrikazPol',
    'extIdSupported' => 'false',
  ),
  'priloha' => 
  array (
    'evidenceType' => 'PRILOHA',
    'evidenceName' => 'Příloha',
    'evidencePath' => 'priloha',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.PrilohaUcto',
    'formCode' => 'priloha',
    'extIdSupported' => 'true',
  ),
  'prislustenstvi' => 
  array (
    'evidenceType' => 'PRISLUSENSTVI',
    'evidenceName' => 'Příslušenství',
    'evidencePath' => 'prislustenstvi',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Prislusenstvi',
    'formCode' => 'cenPrislusenstvi',
    'extIdSupported' => 'false',
  ),
  'prodejka' => 
  array (
    'evidenceType' => 'PRODEJKA',
    'evidenceName' => 'Prodejní kasa',
    'evidencePath' => 'prodejka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'favProdejky',
    'extIdSupported' => 'true',
  ),
  'prodejka-platba' => 
  array (
    'evidenceType' => 'PRODEJKA_PLATBA',
    'evidenceName' => 'Úhrada',
    'evidencePath' => 'prodejka-platba',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaUhrady',
    'formCode' => 'favProdPlat',
    'extIdSupported' => 'false',
  ),
  'typ-prodejky' => 
  array (
    'evidenceType' => 'PRODEJKA_TYP',
    'evidenceName' => 'Seznam prodejních kas',
    'evidencePath' => 'typ-prodejky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'favTypProdejky',
    'extIdSupported' => 'true',
  ),
  'psc' => 
  array (
    'evidenceType' => 'PSC',
    'evidenceName' => 'Poštovní směrovací čísla',
    'evidencePath' => 'psc',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.adr.Psc',
    'formCode' => 'cisPsc',
    'extIdSupported' => 'false',
  ),
  'rada' => 
  array (
    'evidenceType' => 'RADA',
    'evidenceName' => 'dokladové řady',
    'evidencePath' => 'rada',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'radaBezModulu',
    'extIdSupported' => 'false',
  ),
  'rezervace' => 
  array (
    'evidenceType' => 'REZERVACE',
    'evidenceName' => 'Rezervace',
    'evidencePath' => 'rezervace',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.Rezervace',
    'formCode' => 'sklRezervace',
    'extIdSupported' => 'false',
  ),
  'rocni-rada' => 
  array (
    'evidenceType' => 'ROCNI_RADA',
    'evidenceName' => 'Roční položky dokladové řady',
    'evidencePath' => 'rocni-rada',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolozkaRady',
    'formCode' => 'nezRadyRok',
    'extIdSupported' => 'false',
  ),
  'rozvaha-po-uctech' => 
  array (
    'evidenceType' => 'ROZVAHA_PO_UCTECH',
    'evidenceName' => 'Soupis aktiv a pasiv',
    'evidencePath' => 'rozvaha-po-uctech',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.StavyUctu',
    'formCode' => 'vykazRozvahaPoUctech',
    'extIdSupported' => 'false',
  ),
  'sady-a-komplety' => 
  array (
    'evidenceType' => 'SADY_A_KOMPLETY',
    'evidenceName' => 'Sady',
    'evidencePath' => 'sady-a-komplety',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Sada',
    'formCode' => 'cenSady',
    'extIdSupported' => 'true',
  ),
  'saldo' => 
  array (
    'evidenceType' => 'SALDO',
    'evidenceName' => 'Saldo',
    'evidencePath' => 'saldo',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PohybyNaUctech',
    'formCode' => 'vykazSaldo',
    'extIdSupported' => 'false',
  ),
  'saldo-k-datu' => 
  array (
    'evidenceType' => 'SALDO_K_DATU',
    'evidenceName' => 'Stav úhrad k datu',
    'evidencePath' => 'saldo-k-datu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.SaldoKdatu',
    'formCode' => 'vykazSaldoKdatu',
    'extIdSupported' => 'false',
  ),
  'sazba-dph' => 
  array (
    'evidenceType' => 'SAZBA_DPH',
    'evidenceName' => 'Sazby DPH',
    'evidencePath' => 'sazba-dph',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.nast.SazbaDph',
    'formCode' => 'uSazbyDph',
    'extIdSupported' => 'true',
  ),
  'setting-store' => 
  array (
    'evidenceType' => 'SETTTING',
    'evidenceName' => 'Úložiště nastavení',
    'evidencePath' => 'setting-store',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.WSSetting',
    'formCode' => 'settings',
    'extIdSupported' => 'false',
  ),
  'sklad' => 
  array (
    'evidenceType' => 'SKLAD',
    'evidenceName' => 'Seznam skladů',
    'evidencePath' => 'sklad',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Bsp',
    'formCode' => 'sklBsp',
    'extIdSupported' => 'true',
  ),
  'skladova-karta' => 
  array (
    'evidenceType' => 'SKLADOVA_KARTA',
    'evidenceName' => 'Skladové karty',
    'evidencePath' => 'skladova-karta',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.skl.SkladKarta',
    'formCode' => 'sklKar',
    'extIdSupported' => 'true',
  ),
  'skladovy-pohyb' => 
  array (
    'evidenceType' => 'SKLADOVY_POHYB',
    'evidenceName' => 'Příjemky/výdejky',
    'evidencePath' => 'skladovy-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklSklad',
    'formCode' => 'sklAkt',
    'extIdSupported' => 'true',
  ),
  'skladovy-pohyb-polozka' => 
  array (
    'evidenceType' => 'SKLADOVY_POHYB_POLOZKA',
    'evidenceName' => 'Položky příjemky/výdejky',
    'evidencePath' => 'skladovy-pohyb-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolSklad',
    'formCode' => 'sklPol',
    'extIdSupported' => 'true',
  ),
  'rada-skladovy-pohyb' => 
  array (
    'evidenceType' => 'SKLADOVY_POHYB_RADA',
    'evidenceName' => 'Dokladové řady - sklad',
    'evidencePath' => 'rada-skladovy-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'sklRady',
    'extIdSupported' => 'false',
  ),
  'typ-skladovy-pohyb' => 
  array (
    'evidenceType' => 'SKLADOVY_POHYB_TYP',
    'evidenceName' => 'Typy skladových dokladů',
    'evidencePath' => 'typ-skladovy-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'sklTyp',
    'extIdSupported' => 'true',
  ),
  'skupina-atributu' => 
  array (
    'evidenceType' => 'SKUPINA_ATRIBUTU',
    'evidenceName' => 'Skupiny atributů',
    'evidencePath' => 'skupina-atributu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.TypZbozi',
    'formCode' => 'cenTypZbozi',
    'extIdSupported' => 'false',
  ),
  'skupina-firem' => 
  array (
    'evidenceType' => 'SKUPINA_FIREM',
    'evidenceName' => 'Skupiny firem',
    'evidencePath' => 'skupina-firem',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.SkupFir',
    'formCode' => 'adrSkupFir',
    'extIdSupported' => 'true',
  ),
  'skupina-stitku' => 
  array (
    'evidenceType' => 'SKUPINA_STITKU',
    'evidenceName' => 'Skupiny štítků',
    'evidencePath' => 'skupina-stitku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.SkupVybKlic',
    'formCode' => 'cisSkupVybKlic',
    'extIdSupported' => 'true',
  ),
  'skupina-zbozi' => 
  array (
    'evidenceType' => 'SKUPINA_ZBOZI',
    'evidenceName' => 'Skupiny zboží a materiálu',
    'evidencePath' => 'skupina-zbozi',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.SkupZboz',
    'formCode' => 'cenSku',
    'extIdSupported' => 'true',
  ),
  'smlouva' => 
  array (
    'evidenceType' => 'SMLOUVA',
    'evidenceName' => 'Odběratelské smlouvy',
    'evidencePath' => 'smlouva',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.SmlouvaView',
    'formCode' => 'adrSmlAktView',
    'extIdSupported' => 'false',
  ),
  'smlouva-polozka' => 
  array (
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'evidenceName' => 'Položky smluv',
    'evidencePath' => 'smlouva-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolSmlouvy',
    'formCode' => 'adrPolSml',
    'extIdSupported' => 'true',
  ),
  'stat' => 
  array (
    'evidenceType' => 'STAT',
    'evidenceName' => 'Státy',
    'evidencePath' => 'stat',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.Stat',
    'formCode' => 'cisStaty',
    'extIdSupported' => 'false',
  ),
  'stav-ceniku' => 
  array (
    'evidenceType' => 'STAV_CENIKU',
    'evidenceName' => 'Číselník stavů položek ceníku',
    'evidencePath' => 'stav-ceniku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.StavCen',
    'formCode' => 'cenStav',
    'extIdSupported' => 'false',
  ),
  'stav-skladu-k-datu' => 
  array (
    'evidenceType' => 'STAV_SKLADU_K_DATU',
    'evidenceName' => 'Stav skladu k datu',
    'evidencePath' => 'stav-skladu-k-datu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.skl.StavSkladu',
    'formCode' => 'stavSkl',
    'extIdSupported' => 'false',
  ),
  'stav-smlouvy' => 
  array (
    'evidenceType' => 'STAV_SMLOUVY',
    'evidenceName' => 'Stavy smluv',
    'evidencePath' => 'stav-smlouvy',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.StavSmlouvy',
    'formCode' => 'adrStavSml',
    'extIdSupported' => 'true',
  ),
  'stav-uctu' => 
  array (
    'evidenceType' => 'STAV_UCTU',
    'evidenceName' => 'Stavy účtů',
    'evidencePath' => 'stav-uctu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.StavyUctu',
    'formCode' => 'vykazStavyUctu',
    'extIdSupported' => 'false',
  ),
  'stav-zakazky' => 
  array (
    'evidenceType' => 'STAV_ZAKAZKY',
    'evidenceName' => 'Stavy zakázek',
    'evidencePath' => 'stav-zakazky',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.StavZakazky',
    'formCode' => 'cisStavZak',
    'extIdSupported' => 'false',
  ),
  'stitek' => 
  array (
    'evidenceType' => 'STITEK',
    'evidenceName' => 'Štítky',
    'evidencePath' => 'stitek',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.VybKlic',
    'formCode' => 'cisVybKlice',
    'extIdSupported' => 'true',
  ),
  'stredisko' => 
  array (
    'evidenceType' => 'STREDISKO',
    'evidenceName' => 'Střediska',
    'evidencePath' => 'stredisko',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Stredisko',
    'formCode' => 'cisStr',
    'extIdSupported' => 'true',
  ),
  'strom' => 
  array (
    'evidenceType' => 'STROM',
    'evidenceName' => 'Uzel stromu',
    'evidencePath' => 'strom',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Uzel',
    'formCode' => 'uzel',
    'extIdSupported' => 'true',
  ),
  'strom-cenik' => 
  array (
    'evidenceType' => 'STROM_CENIK',
    'evidenceName' => 'Vazba uzlu na objekt',
    'evidencePath' => 'strom-cenik',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.VazUzel',
    'formCode' => 'vazUzel',
    'extIdSupported' => 'true',
  ),
  'strom-koren' => 
  array (
    'evidenceType' => 'STROM_KOREN',
    'evidenceName' => 'Obecný strom',
    'evidencePath' => 'strom-koren',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Strom',
    'formCode' => 'strom',
    'extIdSupported' => 'false',
  ),
  'subjekt' => 
  array (
    'evidenceType' => 'SUBJEKT',
    'evidenceName' => 'Subjekt',
    'evidencePath' => 'subjekt',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.w.Subjekt',
    'formCode' => 'wSubjekt',
    'extIdSupported' => 'false',
  ),
  'text' => 
  array (
    'evidenceType' => 'TEXT',
    'evidenceName' => 'Předdefinované texty',
    'evidencePath' => 'text',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Text',
    'formCode' => 'cisTexty',
    'extIdSupported' => 'true',
  ),
  'typ-aktivity' => 
  array (
    'evidenceType' => 'TYP_AKTIVITY',
    'evidenceName' => 'Typy událostí / aktivit',
    'evidencePath' => 'typ-aktivity',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.TypAkt',
    'formCode' => 'adrTypAkt',
    'extIdSupported' => 'true',
  ),
  'typ-atributu' => 
  array (
    'evidenceType' => 'TYP_ATRIBUTU',
    'evidenceName' => 'Typy atributů',
    'evidencePath' => 'typ-atributu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.TypAtributu',
    'formCode' => 'cenTypAtributu',
    'extIdSupported' => 'false',
  ),
  'typ-nakladu' => 
  array (
    'evidenceType' => 'TYP_NAKLADU',
    'evidenceName' => 'Typy nákladů na události / aktivity',
    'evidencePath' => 'typ-nakladu',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.TypNaklAkt',
    'formCode' => 'adrTypNaklAkt',
    'extIdSupported' => 'true',
  ),
  'typ-organizace' => 
  array (
    'evidenceType' => 'TYP_ORGANIZACE',
    'evidenceName' => 'Typ organizace',
    'evidencePath' => 'typ-organizace',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.uses.TypOrganizace',
    'formCode' => 'ucTypOrg',
    'extIdSupported' => 'false',
  ),
  'typ-smlouvy' => 
  array (
    'evidenceType' => 'TYP_SMLOUVY',
    'evidenceName' => 'Typy odběratelských smluv',
    'evidencePath' => 'typ-smlouvy',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.TypSmlouvy',
    'formCode' => 'adrTypSml',
    'extIdSupported' => 'true',
  ),
  'typ-stavu-ceniku' => 
  array (
    'evidenceType' => 'TYP_STAVU_CENIKU',
    'evidenceName' => 'Číselník stavů položek ceníku',
    'evidencePath' => 'typ-stavu-ceniku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.StavCen',
    'formCode' => 'cenStav',
    'extIdSupported' => 'false',
  ),
  'typ-zakazky' => 
  array (
    'evidenceType' => 'TYP_ZAKAZKY',
    'evidenceName' => 'Typy zakázek',
    'evidencePath' => 'typ-zakazky',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.TypZakazky',
    'formCode' => 'cisTypZak',
    'extIdSupported' => 'true',
  ),
  'ucet' => 
  array (
    'evidenceType' => 'UCET',
    'evidenceName' => 'Účtový rozvrh',
    'evidencePath' => 'ucet',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Ucet',
    'formCode' => 'ucDoklUcty',
    'extIdSupported' => 'true',
  ),
  'ucetni-denik' => 
  array (
    'evidenceType' => 'UCETNI_DENIK',
    'evidenceName' => 'Účetní deník',
    'evidencePath' => 'ucetni-denik',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.UcetniDenik',
    'formCode' => 'vykazUcetniDenik',
    'extIdSupported' => 'false',
  ),
  'ucetni-obdobi' => 
  array (
    'evidenceType' => 'UCETNI_OBDOBI',
    'evidenceName' => 'Účetní období',
    'evidencePath' => 'ucetni-obdobi',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.nast.UcetniObdobi',
    'formCode' => 'nUcetniObdobi',
    'extIdSupported' => 'false',
  ),
  'ucetni-osnova' => 
  array (
    'evidenceType' => 'UCETNI_OSNOVA',
    'evidenceName' => 'Standardní účetní osnova',
    'evidencePath' => 'ucetni-osnova',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.StdUcet',
    'formCode' => 'cisUceRoz',
    'extIdSupported' => 'false',
  ),
  'umisteni' => 
  array (
    'evidenceType' => 'UMISTENI',
    'evidenceName' => 'Umístění',
    'evidencePath' => 'umisteni',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.Umisteni',
    'formCode' => 'majUmisteni',
    'extIdSupported' => 'true',
  ),
  'umisteni-ve-skladu' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
    'extIdSupported' => 'false',
  ),
  'umisteni-ve-skladu-mistnost' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU_MISTNOST',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu-mistnost',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
    'extIdSupported' => 'false',
  ),
  'umisteni-ve-skladu-police' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU_POLICE',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu-police',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
    'extIdSupported' => 'false',
  ),
  'umisteni-ve-skladu-regal' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU_REGAL',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu-regal',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
    'extIdSupported' => 'false',
  ),
  'sablona-upominky' => 
  array (
    'evidenceType' => 'UPOMINKA_SABLONA',
    'evidenceName' => 'Upomínky',
    'evidencePath' => 'sablona-upominky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Sablona',
    'formCode' => 'upominky',
    'extIdSupported' => 'false',
  ),
  'uzivatelsky-dotaz' => 
  array (
    'evidenceType' => 'UZIVATELSKY_DOTAZ',
    'evidenceName' => 'Uživatelské dotazy',
    'evidencePath' => 'uzivatelsky-dotaz',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.w.Dotaz',
    'formCode' => 'dotaz',
    'extIdSupported' => 'true',
  ),
  'uzivatelsky-dotaz-parametr' => 
  array (
    'evidenceType' => 'UZIVATELSKY_DOTAZ_PARAMETR',
    'evidenceName' => 'Parametry',
    'evidencePath' => 'uzivatelsky-dotaz-parametr',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.w.DotazParam',
    'formCode' => 'dotazParam',
    'extIdSupported' => 'true',
  ),
  'uzivatelsky-dotaz-vlastnost' => 
  array (
    'evidenceType' => 'UZIVATELSKY_DOTAZ_VLASTNOST',
    'evidenceName' => 'Vlastnosti',
    'evidencePath' => 'uzivatelsky-dotaz-vlastnost',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.w.DotazProp',
    'formCode' => 'dotazProp',
    'extIdSupported' => 'true',
  ),
  'uzivatelska-vazba' => 
  array (
    'evidenceType' => 'VAZBA',
    'evidenceName' => 'Uživatelské vazby',
    'evidencePath' => 'uzivatelska-vazba',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.vyk.VazbaView',
    'formCode' => 'vazbaUzivView',
    'extIdSupported' => 'false',
  ),
  'vazba' => 
  array (
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'evidenceName' => 'Vazby dokladu',
    'evidencePath' => 'vazba',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.dok.VazbaDokl',
    'formCode' => 'nezVazbyDokl',
    'extIdSupported' => 'false',
  ),
  'typ-uzivatelske-vazby' => 
  array (
    'evidenceType' => 'VAZBA_TYP',
    'evidenceName' => 'Typy uživatelských vazeb',
    'evidencePath' => 'typ-uzivatelske-vazby',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.VazbaTyp',
    'formCode' => 'vazbaTyp',
    'extIdSupported' => 'true',
  ),
  'vykaz-hospodareni' => 
  array (
    'evidenceType' => 'VYKAZ_HOSPODARENI',
    'evidenceName' => 'Výkaz hospodaření za měsíc',
    'evidencePath' => 'vykaz-hospodareni',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.StavyUctu',
    'formCode' => 'vykazVykazHospodareni',
    'extIdSupported' => 'false',
  ),
  'vyrobni-cislo' => 
  array (
    'evidenceType' => 'VYROBNI_CISLA',
    'evidenceName' => 'Výrobní čísla',
    'evidencePath' => 'vyrobni-cislo',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.VyrobniCislo',
    'formCode' => 'sklVyrCis',
    'extIdSupported' => 'false',
  ),
  'vzajemny-zapocet' => 
  array (
    'evidenceType' => 'VZAJEMNY_ZAPOCET',
    'evidenceName' => 'Vzájemné zápočty',
    'evidencePath' => 'vzajemny-zapocet',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'banZapocty',
    'extIdSupported' => 'true',
  ),
  'typ-vzajemnych-zapoctu' => 
  array (
    'evidenceType' => 'VZAJEMNY_ZAPOCET_TYP',
    'evidenceName' => 'Typy zápočtů',
    'evidencePath' => 'typ-vzajemnych-zapoctu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'banTypZapocty',
    'extIdSupported' => 'true',
  ),
  'xslt' => 
  array (
    'evidenceType' => 'XSLT',
    'evidenceName' => 'Uživatelské transformace',
    'evidencePath' => 'xslt',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Xslt',
    'formCode' => 'xslt',
    'extIdSupported' => 'false',
  ),
  'zakazka' => 
  array (
    'evidenceType' => 'ZAKAZKA',
    'evidenceName' => 'Zakázky',
    'evidencePath' => 'zakazka',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Zakazka',
    'formCode' => 'cisZak',
    'extIdSupported' => 'true',
  ),
  'zapujcka' => 
  array (
    'evidenceType' => 'ZAPUJCKA',
    'evidenceName' => 'Zápůjčky',
    'evidencePath' => 'zapujcka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.maj.Zapujcka',
    'formCode' => 'majZapujcky',
    'extIdSupported' => 'false',
  ),
  'zavazek' => 
  array (
    'evidenceType' => 'ZAVAZEK',
    'evidenceName' => 'Ostatní závazky',
    'evidencePath' => 'zavazek',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'zavAkt',
    'extIdSupported' => 'true',
  ),
  'zavazek-polozka' => 
  array (
    'evidenceType' => 'ZAVAZEK_POLOZKA',
    'evidenceName' => 'Položky ostatních závazků',
    'evidencePath' => 'zavazek-polozka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolFak',
    'formCode' => 'zavPol',
    'extIdSupported' => 'true',
  ),
  'rada-zavazku' => 
  array (
    'evidenceType' => 'ZAVAZEK_RADA',
    'evidenceName' => 'Dokladové řady - závazky',
    'evidencePath' => 'rada-zavazku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'zavRady',
    'extIdSupported' => 'false',
  ),
  'typ-zavazku' => 
  array (
    'evidenceType' => 'ZAVAZEK_TYP',
    'evidenceName' => 'Typy ostatních závazků',
    'evidencePath' => 'typ-zavazku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'zavTyp',
    'extIdSupported' => 'true',
  ),
  'zurnal' => 
  array (
    'evidenceType' => 'ZURNAL',
    'evidenceName' => 'Žurnál',
    'evidencePath' => 'zurnal',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.w.Zurnal',
    'formCode' => 'zurnal',
    'extIdSupported' => 'false',
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
