#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to create Invoice
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */

namespace Example\FlexiPeeHP;

use DateTime;
use Ease\Sand;
use FlexiPeeHP\FakturaVydana;
use FlexiPeeHP\FlexiBeeRO;

include_once './config.php';
include_once '../vendor/autoload.php';


$invoice = new FakturaVydana();
$invoice->logBanner('Create New Invoice Example');


//Set due date by DateTime object
$nextMonth = new DateTime();
$nextMonth->modify('+1 month');
$invoice->setDataValue('datSplat', $nextMonth);
$invoice->setDataValue('datVyst',  (new \DateTime())->modify('-1 day') );

$invoice->takeData([
    'varSym' => Sand::randomNumber(1111, 9999),
    'specSym' => Sand::randomNumber(111, 999),
    'popis' => 'FlexiPeeHP Example invoice',
    'typDokl' => FlexiBeeRO::code('FAKTURA')
]);

$invoice->addArrayToBranch(['nazev' => 'Example Item 1', 'cenaMj' => 100]);

/**
 * You nee an existing pricelist item here:
 * (new \FlexiPeeHP\Cenik())->insertToFlexiBee(['kod'=>'EXAMPLE' ,'nazev'=>'New Example Product','cenaMj'=>100]);
 */

$invoice->addArrayToBranch(['nazev' => 'Example Item 2', 'cenik' => 'code:EXAMPLE',
    'mnozMj' => 2]);


if ($invoice->sync()) {
    $invoice->addStatusMessage($invoice->getApiURL().' '.FlexiBeeRO::uncode($invoice->getDataValue('typDokl')).' '.FlexiBeeRO::uncode($invoice->getRecordIdent()).' '.FlexiBeeRO::uncode($invoice->getDataValue('sumCelkem')).' '.FlexiBeeRO::uncode($invoice->getDataValue('mena')),
        'success');
}

echo $invoice->getJsonizedData($invoice->getData(),JSON_PRETTY_PRINT);
