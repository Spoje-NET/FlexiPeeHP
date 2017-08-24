<?php
/**
 * FlexiPeeHP - Evidence Actions.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * EvidenceActions
 *
 * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
 */

class Actions
{
    /**
     * Source FlexiBee server version.
     *
     * @var string
     */
 public static  $version = '2017.1.17';

    /**
     * Evidence banka-polozka (#banBanZapoctyPol) Actions.
     *
     * @var array
     */
 public static  $bankaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pravo-viditelnosti (#uzivPristup) Actions.
     *
     * @var array
     */
 public static  $pravoViditelnosti = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence adresar (Adresy firem) Actions.
     *
     * @var array
     */
 public static  $adresar = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence atribut (Atributy) Actions.
     *
     * @var array
     */
 public static  $atribut = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence banka (Banka) Actions.
     *
     * @var array
     */
 public static  $banka = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
  'automaticke-parovani' => 
  array (
    'actionId' => 'automaticke-parovani',
    'actionName' => 'Automatické párování',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence format-elektronickeho-bankovnictvi (Bankovní formáty) Actions.
     *
     * @var array
     */
 public static  $formatElektronickehoBankovnictvi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence adresar-bankovni-ucet (Bankovní spojení) Actions.
     *
     * @var array
     */
 public static  $adresarBankovniUcet = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenova-uroven (Cenové úrovně) Actions.
     *
     * @var array
     */
 public static  $cenovaUroven = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence odberatel (Ceny pro odběratele/skupiny odběratelů, speciální kódy) Actions.
     *
     * @var array
     */
 public static  $odberatel = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenik (Ceník) Actions.
     *
     * @var array
     */
 public static  $cenik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenikova-skupina (Ceníkové skupiny) Actions.
     *
     * @var array
     */
 public static  $cenikovaSkupina = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence certifikacni-autorita (Certifikační autority) Actions.
     *
     * @var array
     */
 public static  $certifikacniAutorita = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-dodaci-podminky (Dodací podmínky) Actions.
     *
     * @var array
     */
 public static  $intrastatDodaciPodminky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dodavatelska-smlouva (Dodavatelské smlouvy) Actions.
     *
     * @var array
     */
 public static  $dodavatelskaSmlouva = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'generovani-faktur' => 
  array (
    'actionId' => 'generovani-faktur',
    'actionName' => 'Vygenerovat faktury',
    'needInstance' => 'false',
    'actionMakesSense' => 'WITH_OR_WITHOUT_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dodavatel (Dodavatelé) Actions.
     *
     * @var array
     */
 public static  $dodavatel = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-banka (Dokladové řady - bankovní doklady) Actions.
     *
     * @var array
     */
 public static  $radaBanka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-interniho-dokladu (Dokladové řady - interní doklady) Actions.
     *
     * @var array
     */
 public static  $radaInternihoDokladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-pohledavky (Dokladové řady - pohledávky) Actions.
     *
     * @var array
     */
 public static  $radaPohledavky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-pokladni-pohyb (Dokladové řady - pokladní doklady) Actions.
     *
     * @var array
     */
 public static  $radaPokladniPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-faktury-prijate (Dokladové řady - přijaté faktury) Actions.
     *
     * @var array
     */
 public static  $radaFakturyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-nabidky-prijate (Dokladové řady - přijaté nabídky) Actions.
     *
     * @var array
     */
 public static  $radaNabidkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-objednavky-prijate (Dokladové řady - přijaté objednávky) Actions.
     *
     * @var array
     */
 public static  $radaObjednavkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-poptavky-prijate (Dokladové řady - přijaté poptávky) Actions.
     *
     * @var array
     */
 public static  $radaPoptavkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-skladovy-pohyb (Dokladové řady - sklad) Actions.
     *
     * @var array
     */
 public static  $radaSkladovyPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-faktury-vydane (Dokladové řady - vydané faktury) Actions.
     *
     * @var array
     */
 public static  $radaFakturyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-nabidky-vydane (Dokladové řady - vydané nabídky) Actions.
     *
     * @var array
     */
 public static  $radaNabidkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-objednavky-vydane (Dokladové řady - vydané objednávky) Actions.
     *
     * @var array
     */
 public static  $radaObjednavkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-poptavky-vydane (Dokladové řady - vydané poptávky) Actions.
     *
     * @var array
     */
 public static  $radaPoptavkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada-zavazku (Dokladové řady - závazky) Actions.
     *
     * @var array
     */
 public static  $radaZavazku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-druh-dopravy (Druh dopravy) Actions.
     *
     * @var array
     */
 public static  $intrastatDruhDopravy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence eet-komunikace (EET komunikace) Actions.
     *
     * @var array
     */
 public static  $eetKomunikace = array (
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence forma-dopravy (Formy dopravy) Actions.
     *
     * @var array
     */
 public static  $formaDopravy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence forma-uhrady (Formy úhrady) Actions.
     *
     * @var array
     */
 public static  $formaUhrady = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence hlavni-kniha (Hlavní kniha) Actions.
     *
     * @var array
     */
 public static  $hlavniKniha = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence individualni-cenik (Individuální ceník) Actions.
     *
     * @var array
     */
 public static  $individualniCenik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence interni-doklad (Interní doklady) Actions.
     *
     * @var array
     */
 public static  $interniDoklad = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence inventura (Inventury) Actions.
     *
     * @var array
     */
 public static  $inventura = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence konst-symbol (Konstantní symboly) Actions.
     *
     * @var array
     */
 public static  $konstSymbol = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence kontakt (Kontakty) Actions.
     *
     * @var array
     */
 public static  $kontakt = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-kraj-urceni (Kraje určení) Actions.
     *
     * @var array
     */
 public static  $intrastatKrajUrceni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence kurz (Kurzy) Actions.
     *
     * @var array
     */
 public static  $kurz = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-kurz (Kurzy pro Intrastat) Actions.
     *
     * @var array
     */
 public static  $intrastatKurz = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence kurz-pro-cenotvorbu (Kurzy pro cenotvorbu) Actions.
     *
     * @var array
     */
 public static  $kurzProCenotvorbu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence kusovnik (Kusovník) Actions.
     *
     * @var array
     */
 public static  $kusovnik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-kod-nomenklatury (Kódy nomenklatury) Actions.
     *
     * @var array
     */
 public static  $intrastatKodNomenklatury = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence leasing (Leasing) Actions.
     *
     * @var array
     */
 public static  $leasing = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence majetek (Majetek) Actions.
     *
     * @var array
     */
 public static  $majetek = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence mapovani-skladu (Mapování skladů) Actions.
     *
     * @var array
     */
 public static  $mapovaniSkladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence misto-urceni (Místa určení) Actions.
     *
     * @var array
     */
 public static  $mistoUrceni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence mena (Měny) Actions.
     *
     * @var array
     */
 public static  $mena = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-merna-jednotka (Měrné jednotky) Actions.
     *
     * @var array
     */
 public static  $intrastatMernaJednotka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence merna-jednotka (Měrné jednotky ) Actions.
     *
     * @var array
     */
 public static  $mernaJednotka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence naklad (Náklady na události / aktivity) Actions.
     *
     * @var array
     */
 public static  $naklad = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenikovy-pohyb-nakup (Nákupní, prodejní a skladové pohyby) Actions.
     *
     * @var array
     */
 public static  $cenikovyPohybNakup = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cenikovy-pohyb-prodej (Nákupní, prodejní a skladové pohyby) Actions.
     *
     * @var array
     */
 public static  $cenikovyPohybProdej = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-obchodni-transakce (Obchodní transakce) Actions.
     *
     * @var array
     */
 public static  $intrastatObchodniTransakce = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence strom-koren (Obecný strom) Actions.
     *
     * @var array
     */
 public static  $stromKoren = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence obratova-predvaha (Obratová předvaha) Actions.
     *
     * @var array
     */
 public static  $obratovaPredvaha = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence obrat (Obraty) Actions.
     *
     * @var array
     */
 public static  $obrat = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence smlouva (Odběratelské smlouvy) Actions.
     *
     * @var array
     */
 public static  $smlouva = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'generovani-faktur' => 
  array (
    'actionId' => 'generovani-faktur',
    'actionName' => 'Vygenerovat faktury',
    'needInstance' => 'false',
    'actionMakesSense' => 'WITH_OR_WITHOUT_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence odpisova-skupina (Odpisové skupiny) Actions.
     *
     * @var array
     */
 public static  $odpisovaSkupina = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pohledavka (Ostatní pohledávky) Actions.
     *
     * @var array
     */
 public static  $pohledavka = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence zavazek (Ostatní závazky) Actions.
     *
     * @var array
     */
 public static  $zavazek = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence uzivatelsky-dotaz-parametr (Parametry) Actions.
     *
     * @var array
     */
 public static  $uzivatelskyDotazParametr = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence penezni-ustav (Peněžní ústavy) Actions.
     *
     * @var array
     */
 public static  $penezniUstav = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence podklady-dph (Podklady DPH) Actions.
     *
     * @var array
     */
 public static  $podkladyDph = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence podobne-zbozi (Podobné) Actions.
     *
     * @var array
     */
 public static  $podobneZbozi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pohyb-na-uctech (Pohyby na účtech) Actions.
     *
     * @var array
     */
 public static  $pohybNaUctech = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pokladni-pohyb (Pokladna) Actions.
     *
     * @var array
     */
 public static  $pokladniPohyb = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslat-eet' => 
  array (
    'actionId' => 'odeslat-eet',
    'actionName' => 'Odeslat doklad do EET',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
  'automaticke-parovani' => 
  array (
    'actionId' => 'automaticke-parovani',
    'actionName' => 'Automatické párování',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence parametr (Pokročilá parametrizace pomocí parametrů) Actions.
     *
     * @var array
     */
 public static  $parametr = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prikaz-k-inkasu-polozka (Položka inkasa) Actions.
     *
     * @var array
     */
 public static  $prikazKInkasuPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prikaz-k-uhrade-polozka (Položka příkazu k úhradě) Actions.
     *
     * @var array
     */
 public static  $prikazKUhradePolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence interni-doklad-polozka (Položky interních dokladů) Actions.
     *
     * @var array
     */
 public static  $interniDokladPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence inventura-polozka (Položky inventur) Actions.
     *
     * @var array
     */
 public static  $inventuraPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pohledavka-polozka (Položky ostatních pohledávek) Actions.
     *
     * @var array
     */
 public static  $pohledavkaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence zavazek-polozka (Položky ostatních závazků) Actions.
     *
     * @var array
     */
 public static  $zavazekPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pokladni-pohyb-polozka (Položky pokladních dokladů) Actions.
     *
     * @var array
     */
 public static  $pokladniPohybPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence nabidka-prijata-polozka (Položky přijaté nabídky) Actions.
     *
     * @var array
     */
 public static  $nabidkaPrijataPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence objednavka-prijata-polozka (Položky přijaté objednávky) Actions.
     *
     * @var array
     */
 public static  $objednavkaPrijataPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence faktura-prijata-polozka (Položky přijatých faktur) Actions.
     *
     * @var array
     */
 public static  $fakturaPrijataPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence poptavka-prijata-polozka (Položky přijatých poptávek) Actions.
     *
     * @var array
     */
 public static  $poptavkaPrijataPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skladovy-pohyb-polozka (Položky příjemky/výdejky) Actions.
     *
     * @var array
     */
 public static  $skladovyPohybPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence smlouva-polozka (Položky smluv) Actions.
     *
     * @var array
     */
 public static  $smlouvaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence nabidka-vydana-polozka (Položky vydané nabídky) Actions.
     *
     * @var array
     */
 public static  $nabidkaVydanaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence objednavka-vydana-polozka (Položky vydané objednávky) Actions.
     *
     * @var array
     */
 public static  $objednavkaVydanaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence poptavka-vydana-polozka (Položky vydané poptávky) Actions.
     *
     * @var array
     */
 public static  $poptavkaVydanaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence faktura-vydana-polozka (Položky vydaných faktur a prodejek) Actions.
     *
     * @var array
     */
 public static  $fakturaVydanaPolozka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno položky',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence poplatek (Poplatky) Actions.
     *
     * @var array
     */
 public static  $poplatek = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prodejka (Prodejní kasa) Actions.
     *
     * @var array
     */
 public static  $prodejka = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslat-eet' => 
  array (
    'actionId' => 'odeslat-eet',
    'actionName' => 'Odeslat doklad do EET',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'uhrad-preplatky' => 
  array (
    'actionId' => 'uhrad-preplatky',
    'actionName' => 'Uhradit z přeplatků v bance a pokladně',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence text (Předdefinované texty) Actions.
     *
     * @var array
     */
 public static  $text = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence predpis-zauctovani (Předpisy zaúčtování) Actions.
     *
     * @var array
     */
 public static  $predpisZauctovani = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence faktura-prijata (Přijaté faktury) Actions.
     *
     * @var array
     */
 public static  $fakturaPrijata = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence nabidka-prijata (Přijaté nabídky) Actions.
     *
     * @var array
     */
 public static  $nabidkaPrijata = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence objednavka-prijata (Přijaté objednávky) Actions.
     *
     * @var array
     */
 public static  $objednavkaPrijata = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence poptavka-prijata (Přijaté poptávky) Actions.
     *
     * @var array
     */
 public static  $poptavkaPrijata = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence skladovy-pohyb (Příjemky/výdejky) Actions.
     *
     * @var array
     */
 public static  $skladovyPohyb = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'dokoncit-prevodku' => 
  array (
    'actionId' => 'dokoncit-prevodku',
    'actionName' => 'Vytvořit převodku',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence prikaz-k-inkasu (Příkaz k inkasu) Actions.
     *
     * @var array
     */
 public static  $prikazKInkasu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prikaz-k-uhrade (Příkaz k úhradě) Actions.
     *
     * @var array
     */
 public static  $prikazKUhrade = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence priloha (Příloha) Actions.
     *
     * @var array
     */
 public static  $priloha = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prislustenstvi (Příslušenství) Actions.
     *
     * @var array
     */
 public static  $prislustenstvi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rezervace (Rezervace) Actions.
     *
     * @var array
     */
 public static  $rezervace = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rocni-rada (Roční položky dokladové řady) Actions.
     *
     * @var array
     */
 public static  $rocniRada = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence sady-a-komplety (Sady) Actions.
     *
     * @var array
     */
 public static  $sadyAKomplety = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence saldo (Saldo) Actions.
     *
     * @var array
     */
 public static  $saldo = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence sazba-dph (Sazby DPH) Actions.
     *
     * @var array
     */
 public static  $sazbaDph = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dashboard-sharing (Sdílení přehledů) Actions.
     *
     * @var array
     */
 public static  $dashboardSharing = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence bankovni-ucet (Seznam bankovních účtů) Actions.
     *
     * @var array
     */
 public static  $bankovniUcet = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence pokladna (Seznam pokladen) Actions.
     *
     * @var array
     */
 public static  $pokladna = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-prodejky (Seznam prodejních kas) Actions.
     *
     * @var array
     */
 public static  $typProdejky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence sklad (Seznam skladů) Actions.
     *
     * @var array
     */
 public static  $sklad = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence preneseni-dph (Seznam zboží v režimu přenesení DPH) Actions.
     *
     * @var array
     */
 public static  $preneseniDph = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skladova-karta (Skladové karty) Actions.
     *
     * @var array
     */
 public static  $skladovaKarta = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-atributu (Skupiny atributů) Actions.
     *
     * @var array
     */
 public static  $skupinaAtributu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-firem (Skupiny firem) Actions.
     *
     * @var array
     */
 public static  $skupinaFirem = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-zbozi (Skupiny zboží a materiálu) Actions.
     *
     * @var array
     */
 public static  $skupinaZbozi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence skupina-stitku (Skupiny štítků) Actions.
     *
     * @var array
     */
 public static  $skupinaStitku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rozvaha-po-uctech (Soupis aktiv a pasiv) Actions.
     *
     * @var array
     */
 public static  $rozvahaPoUctech = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dashboard-panel (Správa přehledů) Actions.
     *
     * @var array
     */
 public static  $dashboardPanel = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-skladu-k-datu (Stav skladu k datu) Actions.
     *
     * @var array
     */
 public static  $stavSkladuKDatu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence saldo-k-datu (Stav úhrad k datu) Actions.
     *
     * @var array
     */
 public static  $saldoKDatu = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-smlouvy (Stavy smluv) Actions.
     *
     * @var array
     */
 public static  $stavSmlouvy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-zakazky (Stavy zakázek) Actions.
     *
     * @var array
     */
 public static  $stavZakazky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-uctu (Stavy účtů) Actions.
     *
     * @var array
     */
 public static  $stavUctu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stat (Státy) Actions.
     *
     * @var array
     */
 public static  $stat = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stredisko (Střediska) Actions.
     *
     * @var array
     */
 public static  $stredisko = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-organizace (Typ organizace) Actions.
     *
     * @var array
     */
 public static  $typOrganizace = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-atributu (Typy atributů) Actions.
     *
     * @var array
     */
 public static  $typAtributu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-banka (Typy bankovních dokladů) Actions.
     *
     * @var array
     */
 public static  $typBanka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence dodavatelsky-typ-smlouvy (Typy dodavatelských smluv) Actions.
     *
     * @var array
     */
 public static  $dodavatelskyTypSmlouvy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-interniho-dokladu (Typy interních dokladů) Actions.
     *
     * @var array
     */
 public static  $typInternihoDokladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-leasingu (Typy leasingů) Actions.
     *
     * @var array
     */
 public static  $typLeasingu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-majetku (Typy majetků) Actions.
     *
     * @var array
     */
 public static  $typMajetku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-nakladu (Typy nákladů na události / aktivity) Actions.
     *
     * @var array
     */
 public static  $typNakladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-smlouvy (Typy odběratelských smluv) Actions.
     *
     * @var array
     */
 public static  $typSmlouvy = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-pohledavky (Typy ostatních pohledávek) Actions.
     *
     * @var array
     */
 public static  $typPohledavky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-zavazku (Typy ostatních závazků) Actions.
     *
     * @var array
     */
 public static  $typZavazku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-pokladni-pohyb (Typy pokladních dokladů) Actions.
     *
     * @var array
     */
 public static  $typPokladniPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-faktury-prijate (Typy přijatých faktur) Actions.
     *
     * @var array
     */
 public static  $typFakturyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-nabidky-prijate (Typy přijatých nabídek) Actions.
     *
     * @var array
     */
 public static  $typNabidkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-objednavky-prijate (Typy přijatých objednávek) Actions.
     *
     * @var array
     */
 public static  $typObjednavkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-poptavky-prijate (Typy přijatých poptávek) Actions.
     *
     * @var array
     */
 public static  $typPoptavkyPrijate = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-skladovy-pohyb (Typy skladových dokladů) Actions.
     *
     * @var array
     */
 public static  $typSkladovyPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-aktivity (Typy událostí / aktivit) Actions.
     *
     * @var array
     */
 public static  $typAktivity = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-uzivatelske-vazby (Typy uživatelských vazeb) Actions.
     *
     * @var array
     */
 public static  $typUzivatelskeVazby = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-faktury-vydane (Typy vydaných faktur) Actions.
     *
     * @var array
     */
 public static  $typFakturyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-nabidky-vydane (Typy vydaných nabídek) Actions.
     *
     * @var array
     */
 public static  $typNabidkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-objednavky-vydane (Typy vydaných objednávek) Actions.
     *
     * @var array
     */
 public static  $typObjednavkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-poptavky-vydane (Typy vydaných poptávek) Actions.
     *
     * @var array
     */
 public static  $typPoptavkyVydane = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-zakazky (Typy zakázek) Actions.
     *
     * @var array
     */
 public static  $typZakazky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-vzajemnych-zapoctu (Typy zápočtů) Actions.
     *
     * @var array
     */
 public static  $typVzajemnychZapoctu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence majetek-udalost (Události) Actions.
     *
     * @var array
     */
 public static  $majetekUdalost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence udalost (Události, aktivity) Actions.
     *
     * @var array
     */
 public static  $udalost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni (Umístění) Actions.
     *
     * @var array
     */
 public static  $umisteni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni-ve-skladu-mistnost (Umístění ve skladu) Actions.
     *
     * @var array
     */
 public static  $umisteniVeSkladuMistnost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni-ve-skladu-police (Umístění ve skladu) Actions.
     *
     * @var array
     */
 public static  $umisteniVeSkladuPolice = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni-ve-skladu-regal (Umístění ve skladu) Actions.
     *
     * @var array
     */
 public static  $umisteniVeSkladuRegal = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence umisteni-ve-skladu (Umístění ve skladu) Actions.
     *
     * @var array
     */
 public static  $umisteniVeSkladu = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence sablona-upominky (Upomínky) Actions.
     *
     * @var array
     */
 public static  $sablonaUpominky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence strom (Uzel stromu) Actions.
     *
     * @var array
     */
 public static  $strom = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence uzivatelsky-dotaz (Uživatelské dotazy) Actions.
     *
     * @var array
     */
 public static  $uzivatelskyDotaz = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence filtr (Uživatelské filtry) Actions.
     *
     * @var array
     */
 public static  $filtr = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence custom-button (Uživatelské tlačítko) Actions.
     *
     * @var array
     */
 public static  $customButton = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence uzivatelska-vazba (Uživatelské vazby) Actions.
     *
     * @var array
     */
 public static  $uzivatelskaVazba = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence strom-cenik (Vazba uzlu na objekt) Actions.
     *
     * @var array
     */
 public static  $stromCenik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence vazba (Vazby dokladu) Actions.
     *
     * @var array
     */
 public static  $vazba = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence uzivatelsky-dotaz-vlastnost (Vlastnosti) Actions.
     *
     * @var array
     */
 public static  $uzivatelskyDotazVlastnost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence faktura-vydana (Vydané faktury) Actions.
     *
     * @var array
     */
 public static  $fakturaVydana = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslat-eet' => 
  array (
    'actionId' => 'odeslat-eet',
    'actionName' => 'Odeslat doklad do EET',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'uhrad-preplatky' => 
  array (
    'actionId' => 'uhrad-preplatky',
    'actionName' => 'Uhradit z přeplatků v bance a pokladně',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'uhrad-zapoctem' => 
  array (
    'actionId' => 'uhrad-zapoctem',
    'actionName' => 'Uhradit vzájemným zápočtem',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence nabidka-vydana (Vydané nabídky) Actions.
     *
     * @var array
     */
 public static  $nabidkaVydana = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence objednavka-vydana (Vydané objednávky) Actions.
     *
     * @var array
     */
 public static  $objednavkaVydana = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence poptavka-vydana (Vydané poptávky) Actions.
     *
     * @var array
     */
 public static  $poptavkaVydana = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence hodnoceni-zakazky (Vyhodnocení zakázek) Actions.
     *
     * @var array
     */
 public static  $hodnoceniZakazky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence vzajemny-zapocet (Vzájemné zápočty) Actions.
     *
     * @var array
     */
 public static  $vzajemnyZapocet = array (
  'lock' => 
  array (
    'actionId' => 'lock',
    'actionName' => 'Zamknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'lock-for-ucetni' => 
  array (
    'actionId' => 'lock-for-ucetni',
    'actionName' => 'Zamknout pro učetní',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'unlock' => 
  array (
    'actionId' => 'unlock',
    'actionName' => 'Odemknout',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'true',
    'isService' => 'YES',
  ),
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'storno' => 
  array (
    'actionId' => 'storno',
    'actionName' => 'Storno',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'NO',
  ),
  'odeslani-mailem' => 
  array (
    'actionId' => 'odeslani-mailem',
    'actionName' => 'Odeslání dokladu',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'true',
    'isService' => 'ON_MOBILE',
  ),
);
    /**
     * Evidence danova-evidence (Výkaz daňové evidence) Actions.
     *
     * @var array
     */
 public static  $danovaEvidence = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence vykaz-hospodareni (Výkaz hospodaření za měsíc) Actions.
     *
     * @var array
     */
 public static  $vykazHospodareni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence vyrobni-cislo (Výrobní čísla) Actions.
     *
     * @var array
     */
 public static  $vyrobniCislo = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence zakazka (Zakázky) Actions.
     *
     * @var array
     */
 public static  $zakazka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence forma-uhrady-zauctovani (Zaúčtování formy úhrady) Actions.
     *
     * @var array
     */
 public static  $formaUhradyZauctovani = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence intrastat-zvlastni-pohyb (Zvláštní pohyby) Actions.
     *
     * @var array
     */
 public static  $intrastatZvlastniPohyb = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence zapujcka (Zápůjčky) Actions.
     *
     * @var array
     */
 public static  $zapujcka = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence rada (dokladové řady) Actions.
     *
     * @var array
     */
 public static  $rada = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence prodejka-platba (Úhrada) Actions.
     *
     * @var array
     */
 public static  $prodejkaPlatba = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence setting-store (Úložiště nastavení) Actions.
     *
     * @var array
     */
 public static  $settingStore = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence analyza-zakazky (Účetní analýza zakázky) Actions.
     *
     * @var array
     */
 public static  $analyzaZakazky = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence ucetni-denik (Účetní deník) Actions.
     *
     * @var array
     */
 public static  $ucetniDenik = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence ucetni-obdobi (Účetní období) Actions.
     *
     * @var array
     */
 public static  $ucetniObdobi = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence ucet (Účtový rozvrh) Actions.
     *
     * @var array
     */
 public static  $ucet = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cinnost (Činnost) Actions.
     *
     * @var array
     */
 public static  $cinnost = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stav-ceniku (Číselník stavů položek ceníku) Actions.
     *
     * @var array
     */
 public static  $stavCeniku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence typ-stavu-ceniku (Číselník stavů položek ceníku) Actions.
     *
     * @var array
     */
 public static  $typStavuCeniku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cislo-baliku (Čísla balíků) Actions.
     *
     * @var array
     */
 public static  $cisloBaliku = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence cleneni-kontrolni-hlaseni (Řádky kontrolního hlášení DPH) Actions.
     *
     * @var array
     */
 public static  $cleneniKontrolniHlaseni = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence stitek (Štítky) Actions.
     *
     * @var array
     */
 public static  $stitek = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
    /**
     * Evidence zurnal (Žurnál) Actions.
     *
     * @var array
     */
 public static  $zurnal = array (
  'new' => 
  array (
    'actionId' => 'new',
    'actionName' => 'Přidat',
    'needInstance' => 'false',
    'actionMakesSense' => 'ONLY_WITHOUT_INSTANCE_AND_NOT_IN_CREATE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'copy' => 
  array (
    'actionId' => 'copy',
    'actionName' => 'Vytvořit kopii',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'ON_MOBILE',
  ),
  'edit' => 
  array (
    'actionId' => 'edit',
    'actionName' => 'Změnit',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
  'delete' => 
  array (
    'actionId' => 'delete',
    'actionName' => 'Smazat',
    'needInstance' => 'true',
    'actionMakesSense' => 'ONLY_WITH_INSTANCE',
    'isRealAction' => 'false',
    'isService' => 'NO',
  ),
);
}
