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

$adresar = new \FlexiPeeHP\Adresar(['id' => 'EXT:APP:123', 'nazev' => 'FirmaXY']);

$adresarBankovniUcet = new \FlexiPeeHP\Adresar(['iban' => 'CZ9501000000001234567899','bic'=>'KOMBCZPP', 'firma' => 'EXT:APP:123'],
    ['evidence' => 'adresar-bankovni-ucet']);

$adresar->join($adresarBankovniUcet);

echo $adresar->getJsonizedData(null,JSON_PRETTY_PRINT);
