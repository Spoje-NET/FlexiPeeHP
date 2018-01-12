#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example 
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

$adresar = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:123', 'nazev' => 'FirmaAB']);
$adresar2 = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:456', 'nazev' => 'FirmaXY']);

$adresarBankovniUcet = new \FlexiPeeHP\Adresar(['iban' => 'CZ9501000000001234567899','bic'=>'KOMBCZPP', 'firma' => 'EXT:APP:123'],
    ['evidence' => 'adresar-bankovni-ucet']);


$adresarBankovniUcet->join($adresar2);

$adresar->join($adresarBankovniUcet);



echo $adresar->getJsonizedData(null,JSON_PRETTY_PRINT);

/* Result:
{
    "winstrom": {
        "@version": "1.0",
        "adresar": {
            "id": "EXT:APP:123",
            "nazev": "FirmaAB"
        },
        "adresar-bankovni-ucet": {
            "iban": "CZ9501000000001234567899",
            "bic": "KOMBCZPP",
            "firma": "EXT:APP:123"
        },
        "adresar": {
            "id": "EXT:APP:456",
            "nazev": "FirmaXY"
        }
    }
}
*/