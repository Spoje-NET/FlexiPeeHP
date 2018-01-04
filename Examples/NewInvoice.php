#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to create Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';


$invoice = new \FlexiPeeHP\FakturaVydana();


//Set due date by DateTime object
$nextMonth = new \DateTime();
$nextMonth->modify('+1 month');
$invoice->setDataValue('datSplat', $nextMonth);

echo json_encode(json_decode($invoice->jsonizeData($invoice->getData())),
    JSON_PRETTY_PRINT);
