#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how download PDF (of Invoice)
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

include_once './common.php';

$invoiceID = askForInvoiceID();

/*
 * FlexiPeeHP Classes accept this form of initial identifier:
 *
 * (int) 2588
 * (string) ext:ESHOP:oi1978
 * (array) ['varSym'=>'20080015']
 */

$invoice = new \FlexiPeeHP\FakturaVydana($invoiceID);
$pdfUrl  = $invoice->getEvidenceURL().'/'.urlencode($invoice).'.pdf';
$pdfSaveTo  = $invoice->getEvidence().'-'.$invoice->getDataValue('id').'.pdf';

file_put_contents($pdfSaveTo, file_get_contents($pdfUrl));
