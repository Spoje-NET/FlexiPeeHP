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

$adresar = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:100', 'nazev' => 'FirmaAB',
    ], ['atomic' => 'false']); //Atomic Transaction: https://www.flexibee.eu/api/dokumentace/ref/tx/

$adresar2 = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:200', 'nazev' => 'FirmaCD'],
    ['offline' => true]);
$adresar3 = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:300', 'nazev' => 'FirmaEF'],
    ['offline' => true]);
$adresar4 = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:400', 'nazev' => 'FirmaGH'],
    ['offline' => true]);

$adresarBankovniUcet = new \FlexiPeeHP\Adresar(['iban' => 'CZ9501000000001234567899',
    'bic' => 'KOMBCZPP', 'firma' => 'EXT:APP:300'],
    ['evidence' => 'adresar-bankovni-ucet'], ['offline' => true]);


$adresarBankovniUcet->join($adresar2);

$adresar3->join($adresar4);

$adresarBankovniUcet->join($adresar3);



$adresar->join($adresarBankovniUcet);



echo $adresar->getJsonizedData(null, JSON_PRETTY_PRINT);

/*
  {
  "winstrom": {
  "@version": "1.0",
  "adresar": [
  {
  "id": "EXT:APP:100",
  "nazev": "FirmaAB"
  },
  {
  "id": "EXT:APP:200",
  "nazev": "FirmaCD"
  },
  {
  "id": "EXT:APP:300",
  "nazev": "FirmaEF"
  },
  {
  "id": "EXT:APP:400",
  "nazev": "FirmaGH"
  }
  ],
  "adresar-bankovni-ucet": {
  "iban": "CZ9501000000001234567899",
  "bic": "KOMBCZPP",
  "firma": "EXT:APP:123"
  }
  }
  }
 */

print_r($adresar->insertToFlexiBee());

