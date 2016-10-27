<?php
/**
 * FlexiPeeHP - Seznam Evidencí.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
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
     * Source FlexiBee server version.
     *
     * @var string
     */
 static public $version = '2016.4.1';

    /**
     * Evidences Path/Name listing.
     *
     * @var array
     */
 static public $name = array (
  'kontakt' => 'Kontakty',
  'adresar' => 'Adresy firem',
  'udalost' => 'Události, aktivity',
  'typ-aktivity' => 'Typy událostí / aktivit',
  'typ-nakladu' => 'Typy nákladů na události / aktivity',
  'naklad' => 'Náklady na události / aktivity',
  'adresar-bankovni-ucet' => 'Bankovní spojení',
  'skupina-firem' => 'Skupiny firem',
  'smlouva' => 'Odběratelské smlouvy',
  'dodavatelska-smlouva' => 'Dodavatelské smlouvy',
  'typ-smlouvy' => 'Typy odběratelských smluv',
  'dodavatelsky-typ-smlouvy' => 'Typy dodavatelských smluv',
  'stav-smlouvy' => 'Stavy smluv',
  'smlouva-polozka' => 'Položky smluv',
  'objednavka-prijata' => 'Přijaté objednávky',
  'objednavka-prijata-polozka' => 'Položky přijaté objednávky',
  'rada-objednavky-prijate' => 'Dokladové řady - přijaté objednávky',
  'typ-objednavky-prijate' => 'Typy přijatých objednávek',
  'objednavka-vydana' => 'Vydané objednávky',
  'objednavka-vydana-polozka' => 'Položky vydané objednávky',
  'typ-objednavky-vydane' => 'Typy vydaných objednávek',
  'rada-objednavky-vydane' => 'Dokladové řady - vydané objednávky',
  'poptavka-vydana' => 'Vydané poptávky',
  'poptavka-vydana-polozka' => 'Položky vydané poptávky',
  'typ-poptavky-vydane' => 'Typy vydaných poptávek',
  'rada-poptavky-vydane' => 'Dokladové řady - vydané poptávky',
  'poptavka-prijata' => 'Přijaté poptávky',
  'poptavka-prijata-polozka' => 'Položky přijatých poptávek',
  'typ-poptavky-prijate' => 'Typy přijatých poptávek',
  'rada-poptavky-prijate' => 'Dokladové řady - přijaté poptávky',
  'nabidka-vydana' => 'Vydané nabídky',
  'nabidka-vydana-polozka' => 'Položky vydané nabídky',
  'typ-nabidky-vydane' => 'Typy vydaných nabídek',
  'rada-nabidky-vydane' => 'Dokladové řady - vydané nabídky',
  'nabidka-prijata' => 'Přijaté nabídky',
  'typ-nabidky-prijate' => 'Typy přijatých nabídek',
  'nabidka-prijata-polozka' => 'Položky přijaté nabídky',
  'rada-nabidky-prijate' => 'Dokladové řady - přijaté nabídky',
  'faktura-prijata' => 'Přijaté faktury',
  'faktura-prijata-polozka' => 'Položky přijatých faktur',
  'typ-faktury-prijate' => 'Typy přijatých faktur',
  'rada-faktury-prijate' => 'Dokladové řady - přijaté faktury',
  'predpis-zauctovani' => 'Předpisy zaúčtování',
  'rada' => 'dokladové řady',
  'rocni-rada' => 'Roční položky dokladové řady',
  'misto-urceni' => 'Místa určení',
  'text' => 'Předdefinované texty',
  'pokladni-pohyb' => 'Pokladna',
  'pokladni-pohyb-polozka' => 'Položky pokladních dokladů',
  'rada-pokladni-pohyb' => 'Dokladové řady - pokladní doklady',
  'typ-pokladni-pohyb' => 'Typy pokladních dokladů',
  'banka' => 'Banka',
  'typ-banka' => 'Typy bankovních dokladů',
  'rada-banka' => 'Dokladové řady - bankovní doklady',
  'banka-polozka' => '#banBanZapoctyPol',
  'format-elektronickeho-bankovnictvi' => 'Bankovní formáty',
  'pohledavka' => 'Ostatní pohledávky',
  'pohledavka-polozka' => 'Položky ostatních pohledávek',
  'typ-pohledavky' => 'Typy ostatních pohledávek',
  'rada-pohledavky' => 'Dokladové řady - pohledávky',
  'bankovni-ucet' => 'Seznam bankovních účtů',
  'pokladna' => 'Seznam pokladen',
  'prikaz-k-uhrade' => 'Příkaz k úhradě',
  'prikaz-k-uhrade-polozka' => 'Položka příkazu k úhradě',
  'prikaz-k-inkasu' => 'Příkaz k inkasu',
  'prikaz-k-inkasu-polozka' => 'Položka inkasa',
  'vzajemny-zapocet' => 'Vzájemné zápočty',
  'typ-vzajemnych-zapoctu' => 'Typy zápočtů',
  'typ-interniho-dokladu' => 'Typy interních dokladů',
  'rada-interniho-dokladu' => 'Dokladové řady - interní doklady',
  'interni-doklad' => 'Interní doklady',
  'interni-doklad-polozka' => 'Položky interních dokladů',
  'vazba' => 'Vazby dokladu',
  'priloha' => 'Příloha',
  'faktura-vydana' => 'Vydané faktury',
  'faktura-vydana-polozka' => 'Položky vydaných faktur a prodejek',
  'typ-faktury-vydane' => 'Typy vydaných faktur',
  'rada-faktury-vydane' => 'Dokladové řady - vydané faktury',
  'prodejka' => 'Prodejní kasa',
  'typ-prodejky' => 'Seznam prodejních kas',
  'prodejka-platba' => 'Úhrada',
  'pravo-viditelnosti' => '#uzivPristup',
  'eet-komunikace' => 'EET komunikace',
  'kurz' => 'Kurzy',
  'ucet' => 'Účtový rozvrh',
  'mena' => 'Měny',
  'stat' => 'Státy',
  'cinnost' => 'Činnost',
  'stredisko' => 'Střediska',
  'sazba-dph' => 'Sazby DPH',
  'zakazka' => 'Zakázky',
  'typ-zakazky' => 'Typy zakázek',
  'stav-zakazky' => 'Stavy zakázek',
  'hodnoceni-zakazky' => 'Vyhodnocení zakázek',
  'konst-symbol' => 'Konstantní symboly',
  'merna-jednotka' => 'Měrné jednotky ',
  'cleneni-dph' => 'Řádky přiznání DPH',
  'cleneni-kontrolni-hlaseni' => 'Řádky kontrolního hlášení DPH',
  'ucetni-osnova' => 'Standardní účetní osnova',
  'ucetni-obdobi' => 'Účetní období',
  'typ-organizace' => 'Typ organizace',
  'kurz-pro-cenotvorbu' => 'Kurzy pro cenotvorbu',
  'penezni-ustav' => 'Peněžní ústavy',
  'psc' => 'Poštovní směrovací čísla',
  'stitek' => 'Štítky',
  'skupina-stitku' => 'Skupiny štítků',
  'preneseni-dph' => 'Seznam zboží v režimu přenesení DPH',
  'sablona-upominky' => 'Upomínky',
  'forma-uhrady' => 'Formy úhrady',
  'forma-uhrady-zauctovani' => 'Zaúčtování formy úhrady',
  'certifikacni-autorita' => 'Certifikační autority',
  'forma-dopravy' => 'Formy dopravy',
  'cislo-baliku' => 'Čísla balíků',
  'typ-uzivatelske-vazby' => 'Typy uživatelských vazeb',
  'uzivatelska-vazba' => 'Uživatelské vazby',
  'intrastat-kraj-urceni' => 'Kraje určení',
  'intrastat-zvlastni-pohyb' => 'Zvláštní pohyby',
  'intrastat-obchodni-transakce' => 'Obchodní transakce',
  'intrastat-dodaci-podminky' => 'Dodací podmínky',
  'intrastat-druh-dopravy' => 'Druh dopravy',
  'intrastat-kurz' => 'Kurzy pro Intrastat',
  'intrastat-merna-jednotka' => 'Měrné jednotky',
  'intrastat-kod-nomenklatury' => 'Kódy nomenklatury',
  'rezervace' => 'Rezervace',
  'skladova-karta' => 'Skladové karty',
  'cenik' => 'Ceník',
  'individualni-cenik' => 'Individuální ceník',
  'dodavatel' => 'Dodavatelé',
  'odberatel' => 'Ceny pro odběratele/skupiny odběratelů, speciální kódy',
  'vyrobni-cislo' => 'Výrobní čísla',
  'cenova-uroven' => 'Cenové úrovně',
  'cenikova-skupina' => 'Ceníkové skupiny',
  'poplatek' => 'Poplatky',
  'podobne-zbozi' => 'Podobné',
  'sady-a-komplety' => 'Sady',
  'kusovnik' => 'Kusovník',
  'skupina-zbozi' => 'Skupiny zboží a materiálu',
  'skladovy-pohyb' => 'Příjemky/výdejky',
  'skladovy-pohyb-polozka' => 'Položky příjemky/výdejky',
  'rada-skladovy-pohyb' => 'Dokladové řady - sklad',
  'typ-skladovy-pohyb' => 'Typy skladových dokladů',
  'sklad' => 'Seznam skladů',
  'strom' => 'Uzel stromu',
  'strom-koren' => 'Obecný strom',
  'strom-cenik' => 'Vazba uzlu na objekt',
  'mapovani-skladu' => 'Mapování skladů',
  'umisteni-ve-skladu' => 'Umístění ve skladu',
  'umisteni-ve-skladu-regal' => 'Umístění ve skladu',
  'umisteni-ve-skladu-police' => 'Umístění ve skladu',
  'umisteni-ve-skladu-mistnost' => 'Umístění ve skladu',
  'atribut' => 'Atributy',
  'prislustenstvi' => 'Příslušenství',
  'typ-stavu-ceniku' => 'Číselník stavů položek ceníku',
  'stav-ceniku' => 'Číselník stavů položek ceníku',
  'typ-atributu' => 'Typy atributů',
  'skupina-atributu' => 'Skupiny atributů',
  'inventura' => 'Inventury',
  'inventura-polozka' => 'Položky inventur',
  'stav-skladu-k-datu' => 'Stav skladu k datu',
  'majetek' => 'Majetek',
  'leasing' => 'Leasing',
  'typ-majetku' => 'Typy majetků',
  'typ-leasingu' => 'Typy leasingů',
  'umisteni' => 'Umístění',
  'odpisova-skupina' => 'Odpisové skupiny',
  'majetek-udalost' => 'Události',
  'zapujcka' => 'Zápůjčky',
  'zavazek' => 'Ostatní závazky',
  'zavazek-polozka' => 'Položky ostatních závazků',
  'typ-zavazku' => 'Typy ostatních závazků',
  'rada-zavazku' => 'Dokladové řady - závazky',
  'filtr' => 'Uživatelské filtry',
  'parametr' => 'Pokročilá parametrizace pomocí parametrů',
  'uzivatelsky-dotaz' => 'Uživatelské dotazy',
  'uzivatelsky-dotaz-parametr' => 'Parametry',
  'uzivatelsky-dotaz-vlastnost' => 'Vlastnosti',
  'custom-button' => 'Uživatelské tlačítko',
  'setting-store' => 'Úložiště nastavení',
  'dashboard-panel' => 'Správa přehledů',
  'dashboard-sharing' => 'Sdílení přehledů',
  'obrat' => 'Obraty',
  'stav-uctu' => 'Stavy účtů',
  'hlavni-kniha' => 'Hlavní kniha',
  'obratova-predvaha' => 'Obratová předvaha',
  'podklady-dph' => 'Podklady DPH',
  'danova-evidence' => 'Výkaz daňové evidence',
  'analyza-zakazky' => 'Účetní analýza zakázky',
  'pohyb-na-uctech' => 'Pohyby na účtech',
  'ucetni-denik' => 'Účetní deník',
  'saldo' => 'Saldo',
  'rozvaha-po-uctech' => 'Soupis aktiv a pasiv',
  'cenikovy-pohyb-nakup' => 'Nákupní, prodejní a skladové pohyby',
  'cenikovy-pohyb-prodej' => 'Nákupní, prodejní a skladové pohyby',
  'vykaz-hospodareni' => 'Výkaz hospodaření za měsíc',
  'saldo-k-datu' => 'Stav úhrad k datu',
  'zurnal' => 'Žurnál',
);

    /**
     * All Evidence's all properties listing.
     *
     * @var array
     */
 static public $evidences = array (
  'kontakt' => 
  array (
    'evidenceType' => 'ADR_KONTAKT',
    'evidenceName' => 'Kontakty',
    'evidencePath' => 'kontakt',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.Kontakt',
    'formCode' => 'adrKontakty',
  ),
  'adresar' => 
  array (
    'evidenceType' => 'ADRESAR',
    'evidenceName' => 'Adresy firem',
    'evidencePath' => 'adresar',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.Adresar',
    'formCode' => 'adrAdresar',
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
  'typ-aktivity' => 
  array (
    'evidenceType' => 'TYP_AKTIVITY',
    'evidenceName' => 'Typy událostí / aktivit',
    'evidencePath' => 'typ-aktivity',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.TypAkt',
    'formCode' => 'adrTypAkt',
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
  'naklad' => 
  array (
    'evidenceType' => 'NAKLAD',
    'evidenceName' => 'Náklady na události / aktivity',
    'evidencePath' => 'naklad',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.NaklAkt',
    'formCode' => 'adrNaklAkt',
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
  'skupina-firem' => 
  array (
    'evidenceType' => 'SKUPINA_FIREM',
    'evidenceName' => 'Skupiny firem',
    'evidencePath' => 'skupina-firem',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.adr.SkupFir',
    'formCode' => 'adrSkupFir',
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
  'dodavatelska-smlouva' => 
  array (
    'evidenceType' => 'DODAVATELSKA_SMLOUVA',
    'evidenceName' => 'Dodavatelské smlouvy',
    'evidencePath' => 'dodavatelska-smlouva',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.SmlouvaView',
    'formCode' => 'adrSmlDodavAktView',
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
  'dodavatelsky-typ-smlouvy' => 
  array (
    'evidenceType' => 'DODAVATELSKY_TYP_SMLOUVY',
    'evidenceName' => 'Typy dodavatelských smluv',
    'evidencePath' => 'dodavatelsky-typ-smlouvy',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.TypSmlouvy',
    'formCode' => 'adrTypDodavSml',
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
  'smlouva-polozka' => 
  array (
    'evidenceType' => 'SMLOUVA_POLOZKA',
    'evidenceName' => 'Položky smluv',
    'evidencePath' => 'smlouva-polozka',
    'importStatus' => 'NOT_DIRECT',
    'className' => 'cz.winstrom.vo.dok.PolSmlouvy',
    'formCode' => 'adrPolSml',
  ),
  'objednavka-prijata' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_IN',
    'evidenceName' => 'Přijaté objednávky',
    'evidencePath' => 'objednavka-prijata',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodObpDokl',
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
  'rada-objednavky-prijate' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_IN_RADA',
    'evidenceName' => 'Dokladové řady - přijaté objednávky',
    'evidencePath' => 'rada-objednavky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodObpRady',
  ),
  'typ-objednavky-prijate' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_IN_TYP',
    'evidenceName' => 'Typy přijatých objednávek',
    'evidencePath' => 'typ-objednavky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodObpTyp',
  ),
  'objednavka-vydana' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_OUT',
    'evidenceName' => 'Vydané objednávky',
    'evidencePath' => 'objednavka-vydana',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodObvDokl',
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
  'typ-objednavky-vydane' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_OUT_TYP',
    'evidenceName' => 'Typy vydaných objednávek',
    'evidencePath' => 'typ-objednavky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodObvTyp',
  ),
  'rada-objednavky-vydane' => 
  array (
    'evidenceType' => 'OBJEDNAVKA_OUT_RADA',
    'evidenceName' => 'Dokladové řady - vydané objednávky',
    'evidencePath' => 'rada-objednavky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodObvRady',
  ),
  'poptavka-vydana' => 
  array (
    'evidenceType' => 'POPTAVKA_OUT',
    'evidenceName' => 'Vydané poptávky',
    'evidencePath' => 'poptavka-vydana',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodPpvDokl',
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
  'typ-poptavky-vydane' => 
  array (
    'evidenceType' => 'POPTAVKA_OUT_TYP',
    'evidenceName' => 'Typy vydaných poptávek',
    'evidencePath' => 'typ-poptavky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodPpvTyp',
  ),
  'rada-poptavky-vydane' => 
  array (
    'evidenceType' => 'POPTAVKA_OUT_RADA',
    'evidenceName' => 'Dokladové řady - vydané poptávky',
    'evidencePath' => 'rada-poptavky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodPpvRady',
  ),
  'poptavka-prijata' => 
  array (
    'evidenceType' => 'POPTAVKA_IN',
    'evidenceName' => 'Přijaté poptávky',
    'evidencePath' => 'poptavka-prijata',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodPppDokl',
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
  'typ-poptavky-prijate' => 
  array (
    'evidenceType' => 'POPTAVKA_IN_TYP',
    'evidenceName' => 'Typy přijatých poptávek',
    'evidencePath' => 'typ-poptavky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodPppTyp',
  ),
  'rada-poptavky-prijate' => 
  array (
    'evidenceType' => 'POPTAVKA_IN_RADA',
    'evidenceName' => 'Dokladové řady - přijaté poptávky',
    'evidencePath' => 'rada-poptavky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodPppRady',
  ),
  'nabidka-vydana' => 
  array (
    'evidenceType' => 'NABIDKA_OUT',
    'evidenceName' => 'Vydané nabídky',
    'evidencePath' => 'nabidka-vydana',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodNavDokl',
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
  'typ-nabidky-vydane' => 
  array (
    'evidenceType' => 'NABIDKA_OUT_TYP',
    'evidenceName' => 'Typy vydaných nabídek',
    'evidencePath' => 'typ-nabidky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodNavTyp',
  ),
  'rada-nabidky-vydane' => 
  array (
    'evidenceType' => 'NABIDKA_OUT_RADA',
    'evidenceName' => 'Dokladové řady - vydané nabídky',
    'evidencePath' => 'rada-nabidky-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodNavRady',
  ),
  'nabidka-prijata' => 
  array (
    'evidenceType' => 'NABIDKA_IN',
    'evidenceName' => 'Přijaté nabídky',
    'evidencePath' => 'nabidka-prijata',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklObch',
    'formCode' => 'obchodNapDokl',
  ),
  'typ-nabidky-prijate' => 
  array (
    'evidenceType' => 'NABIDKA_IN_TYP',
    'evidenceName' => 'Typy přijatých nabídek',
    'evidencePath' => 'typ-nabidky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'obchodNapTyp',
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
  'rada-nabidky-prijate' => 
  array (
    'evidenceType' => 'NABIDKA_IN_RADA',
    'evidenceName' => 'Dokladové řady - přijaté nabídky',
    'evidencePath' => 'rada-nabidky-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'obchodNapRady',
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
  'typ-faktury-prijate' => 
  array (
    'evidenceType' => 'FAKTURA_IN_TYP',
    'evidenceName' => 'Typy přijatých faktur',
    'evidencePath' => 'typ-faktury-prijate',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'fapTyp',
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
  'predpis-zauctovani' => 
  array (
    'evidenceType' => 'PREDPIS_ZAUCTOVANI',
    'evidenceName' => 'Předpisy zaúčtování',
    'evidencePath' => 'predpis-zauctovani',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.TypUcOp',
    'formCode' => 'cisTypUcOp',
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
  'rocni-rada' => 
  array (
    'evidenceType' => 'ROCNI_RADA',
    'evidenceName' => 'Roční položky dokladové řady',
    'evidencePath' => 'rocni-rada',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.PolozkaRady',
    'formCode' => 'nezRadyRok',
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
  'text' => 
  array (
    'evidenceType' => 'TEXT',
    'evidenceName' => 'Předdefinované texty',
    'evidencePath' => 'text',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Text',
    'formCode' => 'cisTexty',
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
  'banka' => 
  array (
    'evidenceType' => 'BANKA',
    'evidenceName' => 'Banka',
    'evidencePath' => 'banka',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.dok.DoklInt',
    'formCode' => 'banAkt',
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
  'rada-banka' => 
  array (
    'evidenceType' => 'BANKA_RADA',
    'evidenceName' => 'Dokladové řady - bankovní doklady',
    'evidencePath' => 'rada-banka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Rada',
    'formCode' => 'banRady',
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
  'format-elektronickeho-bankovnictvi' => 
  array (
    'evidenceType' => 'FORMAT_ELEKTRONICKEHO_BANKOVNICTVI',
    'evidenceName' => 'Bankovní formáty',
    'evidencePath' => 'format-elektronickeho-bankovnictvi',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.dok.ElBanFormat',
    'formCode' => 'cisElBanFormaty',
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
  'typ-pohledavky' => 
  array (
    'evidenceType' => 'POHLEDAVKA_TYP',
    'evidenceName' => 'Typy ostatních pohledávek',
    'evidencePath' => 'typ-pohledavky',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'phlTyp',
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
  'bankovni-ucet' => 
  array (
    'evidenceType' => 'BANKOVNI_UCET',
    'evidenceName' => 'Seznam bankovních účtů',
    'evidencePath' => 'bankovni-ucet',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Bsp',
    'formCode' => 'banBsp',
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
  'prikaz-k-uhrade' => 
  array (
    'evidenceType' => 'PRIKAZ_K_UHRADE',
    'evidenceName' => 'Příkaz k úhradě',
    'evidencePath' => 'prikaz-k-uhrade',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.eban.Prikaz',
    'formCode' => 'elPrikaz',
  ),
  'prikaz-k-uhrade-polozka' => 
  array (
    'evidenceType' => 'PRIKAZ_K_UHRADE_POLOZKA',
    'evidenceName' => 'Položka příkazu k úhradě',
    'evidencePath' => 'prikaz-k-uhrade-polozka',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.eban.PolozkaPrikazu',
    'formCode' => 'elPrikazPol',
  ),
  'prikaz-k-inkasu' => 
  array (
    'evidenceType' => 'PRIKAZ_K_INKASU',
    'evidenceName' => 'Příkaz k inkasu',
    'evidencePath' => 'prikaz-k-inkasu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.eban.Prikaz',
    'formCode' => 'elInkaso',
  ),
  'prikaz-k-inkasu-polozka' => 
  array (
    'evidenceType' => 'PRIKAZ_K_INKASU_POLOZKA',
    'evidenceName' => 'Položka inkasa',
    'evidencePath' => 'prikaz-k-inkasu-polozka',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.eban.PolozkaPrikazu',
    'formCode' => 'elInkasoPol',
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
  'typ-interniho-dokladu' => 
  array (
    'evidenceType' => 'INTERNI_DOKLAD_TYP',
    'evidenceName' => 'Typy interních dokladů',
    'evidencePath' => 'typ-interniho-dokladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'intTyp',
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
  'vazba' => 
  array (
    'evidenceType' => 'VAZBA_MEZI_DOKLADY',
    'evidenceName' => 'Vazby dokladu',
    'evidencePath' => 'vazba',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.dok.VazbaDokl',
    'formCode' => 'nezVazbyDokl',
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
  'typ-faktury-vydane' => 
  array (
    'evidenceType' => 'FAKTURA_OUT_TYP',
    'evidenceName' => 'Typy vydaných faktur',
    'evidencePath' => 'typ-faktury-vydane',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'favTyp',
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
  'prodejka' => 
  array (
    'evidenceType' => 'PRODEJKA',
    'evidenceName' => 'Prodejní kasa',
    'evidencePath' => 'prodejka',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.DoklFak',
    'formCode' => 'favProdejky',
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
  'prodejka-platba' => 
  array (
    'evidenceType' => 'PRODEJKA_PLATBA',
    'evidenceName' => 'Úhrada',
    'evidencePath' => 'prodejka-platba',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.FormaUhrady',
    'formCode' => 'favProdPlat',
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
  'eet-komunikace' => 
  array (
    'evidenceType' => 'EET_KOMUNIKACE',
    'evidenceName' => 'EET komunikace',
    'evidencePath' => 'eet-komunikace',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.vyk.EetKomView',
    'formCode' => 'eetKomView',
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
  'ucet' => 
  array (
    'evidenceType' => 'UCET',
    'evidenceName' => 'Účtový rozvrh',
    'evidencePath' => 'ucet',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Ucet',
    'formCode' => 'ucDoklUcty',
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
  'stat' => 
  array (
    'evidenceType' => 'STAT',
    'evidenceName' => 'Státy',
    'evidencePath' => 'stat',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.Stat',
    'formCode' => 'cisStaty',
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
  'stredisko' => 
  array (
    'evidenceType' => 'STREDISKO',
    'evidenceName' => 'Střediska',
    'evidencePath' => 'stredisko',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Stredisko',
    'formCode' => 'cisStr',
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
  'zakazka' => 
  array (
    'evidenceType' => 'ZAKAZKA',
    'evidenceName' => 'Zakázky',
    'evidencePath' => 'zakazka',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.Zakazka',
    'formCode' => 'cisZak',
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
  'stav-zakazky' => 
  array (
    'evidenceType' => 'STAV_ZAKAZKY',
    'evidenceName' => 'Stavy zakázek',
    'evidencePath' => 'stav-zakazky',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.ucto.StavZakazky',
    'formCode' => 'cisStavZak',
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
  'konst-symbol' => 
  array (
    'evidenceType' => 'KONST_SYM',
    'evidenceName' => 'Konstantní symboly',
    'evidencePath' => 'konst-symbol',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.KonSym',
    'formCode' => 'cisKonSym',
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
  'ucetni-osnova' => 
  array (
    'evidenceType' => 'UCETNI_OSNOVA',
    'evidenceName' => 'Standardní účetní osnova',
    'evidencePath' => 'ucetni-osnova',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.StdUcet',
    'formCode' => 'cisUceRoz',
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
  'typ-organizace' => 
  array (
    'evidenceType' => 'TYP_ORGANIZACE',
    'evidenceName' => 'Typ organizace',
    'evidencePath' => 'typ-organizace',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.uses.TypOrganizace',
    'formCode' => 'ucTypOrg',
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
  'penezni-ustav' => 
  array (
    'evidenceType' => 'PENEZNI_USTAV',
    'evidenceName' => 'Peněžní ústavy',
    'evidencePath' => 'penezni-ustav',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.adr.SmerKod',
    'formCode' => 'cisSmerKod',
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
  'stitek' => 
  array (
    'evidenceType' => 'STITEK',
    'evidenceName' => 'Štítky',
    'evidencePath' => 'stitek',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.VybKlic',
    'formCode' => 'cisVybKlice',
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
  'preneseni-dph' => 
  array (
    'evidenceType' => 'PRENESENI_DPH',
    'evidenceName' => 'Seznam zboží v režimu přenesení DPH',
    'evidencePath' => 'preneseni-dph',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.DphPren',
    'formCode' => 'cisDphPren',
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
  'certifikacni-autorita' => 
  array (
    'evidenceType' => 'CERTIFIKACNI_AUTORITA',
    'evidenceName' => 'Certifikační autority',
    'evidencePath' => 'certifikacni-autorita',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.AutCert',
    'formCode' => 'autCert',
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
  'cislo-baliku' => 
  array (
    'evidenceType' => 'CISLO_BALIKU',
    'evidenceName' => 'Čísla balíků',
    'evidencePath' => 'cislo-baliku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.CisloBal',
    'formCode' => 'cisloBal',
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
  'uzivatelska-vazba' => 
  array (
    'evidenceType' => 'VAZBA',
    'evidenceName' => 'Uživatelské vazby',
    'evidencePath' => 'uzivatelska-vazba',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.vyk.VazbaView',
    'formCode' => 'vazbaUzivView',
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
  'intrastat-zvlastni-pohyb' => 
  array (
    'evidenceType' => 'INTRASTAT_ZVLASTNI_POHYB',
    'evidenceName' => 'Zvláštní pohyby',
    'evidencePath' => 'intrastat-zvlastni-pohyb',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.ZvlPoh',
    'formCode' => 'intrZvlPoh',
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
  'intrastat-kod-nomenklatury' => 
  array (
    'evidenceType' => 'INTRASTAT_KOD_NOMENKLATURY',
    'evidenceName' => 'Kódy nomenklatury',
    'evidencePath' => 'intrastat-kod-nomenklatury',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.intr.Nomen',
    'formCode' => 'intrNomenkla',
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
  'skladova-karta' => 
  array (
    'evidenceType' => 'SKLADOVA_KARTA',
    'evidenceName' => 'Skladové karty',
    'evidencePath' => 'skladova-karta',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.skl.SkladKarta',
    'formCode' => 'sklKar',
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
  'individualni-cenik' => 
  array (
    'evidenceType' => 'INDIVIDUALNI_CENIK',
    'evidenceName' => 'Individuální ceník',
    'evidencePath' => 'individualni-cenik',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.CenyView',
    'formCode' => 'cenyView',
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
  'odberatel' => 
  array (
    'evidenceType' => 'ODBERATEL',
    'evidenceName' => 'Ceny pro odběratele/skupiny odběratelů, speciální kódy',
    'evidencePath' => 'odberatel',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.Odberatel',
    'formCode' => 'cenOdberateleView',
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
  'cenova-uroven' => 
  array (
    'evidenceType' => 'CENOVA_UROVEN',
    'evidenceName' => 'Cenové úrovně',
    'evidencePath' => 'cenova-uroven',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.CenHlad',
    'formCode' => 'cenHlad',
  ),
  'cenikova-skupina' => 
  array (
    'evidenceType' => 'CENIKOVA_SKUPINA',
    'evidenceName' => 'Ceníkové skupiny',
    'evidencePath' => 'cenikova-skupina',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.SkupCen',
    'formCode' => 'cenSkupCen',
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
  'podobne-zbozi' => 
  array (
    'evidenceType' => 'PODOBNE_ZBOZI',
    'evidenceName' => 'Podobné',
    'evidencePath' => 'podobne-zbozi',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Podobne',
    'formCode' => 'cenPodobne',
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
  'kusovnik' => 
  array (
    'evidenceType' => 'KUSOVNIK',
    'evidenceName' => 'Kusovník',
    'evidencePath' => 'kusovnik',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Kusovnik',
    'formCode' => 'kusovnik',
  ),
  'skupina-zbozi' => 
  array (
    'evidenceType' => 'SKUPINA_ZBOZI',
    'evidenceName' => 'Skupiny zboží a materiálu',
    'evidencePath' => 'skupina-zbozi',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.cen.SkupZboz',
    'formCode' => 'cenSku',
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
  'sklad' => 
  array (
    'evidenceType' => 'SKLAD',
    'evidenceName' => 'Seznam skladů',
    'evidencePath' => 'sklad',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.Bsp',
    'formCode' => 'sklBsp',
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
  'strom-koren' => 
  array (
    'evidenceType' => 'STROM_KOREN',
    'evidenceName' => 'Obecný strom',
    'evidencePath' => 'strom-koren',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.Strom',
    'formCode' => 'strom',
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
  'mapovani-skladu' => 
  array (
    'evidenceType' => 'MAPOVANI_SKLADU',
    'evidenceName' => 'Mapování skladů',
    'evidencePath' => 'mapovani-skladu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.MapSklad',
    'formCode' => 'sklMapSklad',
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
  'umisteni-ve-skladu-regal' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU_REGAL',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu-regal',
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
  'umisteni-ve-skladu-mistnost' => 
  array (
    'evidenceType' => 'UMISTENI_VE_SKLADU_MISTNOST',
    'evidenceName' => 'Umístění ve skladu',
    'evidencePath' => 'umisteni-ve-skladu-mistnost',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.skl.UmisteniSkl',
    'formCode' => 'sklUmisteni',
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
  'prislustenstvi' => 
  array (
    'evidenceType' => 'PRISLUSENSTVI',
    'evidenceName' => 'Příslušenství',
    'evidencePath' => 'prislustenstvi',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.Prislusenstvi',
    'formCode' => 'cenPrislusenstvi',
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
  'stav-ceniku' => 
  array (
    'evidenceType' => 'STAV_CENIKU',
    'evidenceName' => 'Číselník stavů položek ceníku',
    'evidencePath' => 'stav-ceniku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.StavCen',
    'formCode' => 'cenStav',
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
  'skupina-atributu' => 
  array (
    'evidenceType' => 'SKUPINA_ATRIBUTU',
    'evidenceName' => 'Skupiny atributů',
    'evidencePath' => 'skupina-atributu',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.cen.TypZbozi',
    'formCode' => 'cenTypZbozi',
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
  'stav-skladu-k-datu' => 
  array (
    'evidenceType' => 'STAV_SKLADU_K_DATU',
    'evidenceName' => 'Stav skladu k datu',
    'evidencePath' => 'stav-skladu-k-datu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.skl.StavSkladu',
    'formCode' => 'stavSkl',
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
  'leasing' => 
  array (
    'evidenceType' => 'LEASING',
    'evidenceName' => 'Leasing',
    'evidencePath' => 'leasing',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.maj.Leasing',
    'formCode' => 'majLeasing',
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
  'typ-leasingu' => 
  array (
    'evidenceType' => 'LEASING_TYP',
    'evidenceName' => 'Typy leasingů',
    'evidencePath' => 'typ-leasingu',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.maj.TypLeas',
    'formCode' => 'majTypLeas',
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
  'odpisova-skupina' => 
  array (
    'evidenceType' => 'ODPISOVE_SKUPINY',
    'evidenceName' => 'Odpisové skupiny',
    'evidencePath' => 'odpisova-skupina',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.maj.Sazba',
    'formCode' => 'majSazby',
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
  'typ-zavazku' => 
  array (
    'evidenceType' => 'ZAVAZEK_TYP',
    'evidenceName' => 'Typy ostatních závazků',
    'evidencePath' => 'typ-zavazku',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.dok.TypDokl',
    'formCode' => 'zavTyp',
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
  'filtr' => 
  array (
    'evidenceType' => 'FILTR',
    'evidenceName' => 'Uživatelské filtry',
    'evidencePath' => 'filtr',
    'importStatus' => 'SUPPORTED',
    'className' => 'cz.winstrom.vo.w.Filtr',
    'formCode' => 'filtry',
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
  'custom-button' => 
  array (
    'evidenceType' => 'CUSTOM_BUTTON',
    'evidenceName' => 'Uživatelské tlačítko',
    'evidencePath' => 'custom-button',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.w.CustomButton',
    'formCode' => 'customButton',
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
  'obrat' => 
  array (
    'evidenceType' => 'OBRAT',
    'evidenceName' => 'Obraty',
    'evidencePath' => 'obrat',
    'importStatus' => 'NOT_DOCUMENTED',
    'className' => 'cz.winstrom.vo.ucto.Obrat',
    'formCode' => 'ucDoklObrat',
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
  'hlavni-kniha' => 
  array (
    'evidenceType' => 'HLAVNI_KNIHA',
    'evidenceName' => 'Hlavní kniha',
    'evidencePath' => 'hlavni-kniha',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.ObratovaPredvaha',
    'formCode' => 'vykazHlavniKniha',
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
  'podklady-dph' => 
  array (
    'evidenceType' => 'PODKLADY_DPH',
    'evidenceName' => 'Podklady DPH',
    'evidencePath' => 'podklady-dph',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.PodkladyDph',
    'formCode' => 'vykazPodkladyDph',
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
  'analyza-zakazky' => 
  array (
    'evidenceType' => 'ANALYZA_ZAKAZKY',
    'evidenceName' => 'Účetní analýza zakázky',
    'evidencePath' => 'analyza-zakazky',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.AnalyzaZakazky',
    'formCode' => 'vykazAnalyzaZakazky',
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
  'ucetni-denik' => 
  array (
    'evidenceType' => 'UCETNI_DENIK',
    'evidenceName' => 'Účetní deník',
    'evidencePath' => 'ucetni-denik',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.UcetniDenik',
    'formCode' => 'vykazUcetniDenik',
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
  'rozvaha-po-uctech' => 
  array (
    'evidenceType' => 'ROZVAHA_PO_UCTECH',
    'evidenceName' => 'Soupis aktiv a pasiv',
    'evidencePath' => 'rozvaha-po-uctech',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.StavyUctu',
    'formCode' => 'vykazRozvahaPoUctech',
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
  'vykaz-hospodareni' => 
  array (
    'evidenceType' => 'VYKAZ_HOSPODARENI',
    'evidenceName' => 'Výkaz hospodaření za měsíc',
    'evidencePath' => 'vykaz-hospodareni',
    'importStatus' => 'DISALLOWED',
    'className' => 'cz.winstrom.vo.vyk.StavyUctu',
    'formCode' => 'vykazVykazHospodareni',
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

}
