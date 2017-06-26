#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Odeslat Upomínky ?
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';

function getOverdueInvoices()
{
    $invoicer = new \FlexiPeeHP\FakturaVydana();

    $result                                  = null;
    $invoicer->defaultUrlParams['order']     = 'datVyst@A';
    $invoicer->defaultUrlParams['relations'] = 'adresar,kontakt';
    $invoices                                = $invoicer->getColumnsFromFlexibee([
        'id',
        'kod',
        'stavUhrK',
        'firma',
        'buc',
        'varSym',
        'specSym',
        'sumCelkem',
        'duzpPuv',
        'datVyst'],
        "(stavUhrK is null OR stavUhrK eq 'stavUhr.castUhr') AND storno eq false",
        'id');

    if ($invoicer->lastResponseCode == 200) {
        $result = $invoices;
    }
    return $result;
}
$firmer = new \FlexiPeeHP\Adresar();

foreach (getOverdueInvoices() as $invoice) {
    $kontakt = $firmer->getColumnsFromFlexibee(['nazev', 'email'],
        ['id' => $invoice['firma']]);
    $firmer->addStatusMessage(implode(',', $kontakt[0]), 'success');
    if (isset($kontakt[0]['email'])) {
        $mail = new \Ease\Mailer($kontakt[0]['email'],
            sprintf(_('Overdue invoice: %s'), $invoice['kod']),
            sprintf(_('Please pay %s,-'), $invoice['sumCelkem']));


        $pdfUrl    = 'faktura-vydana/'.urlencode($invoice['id']).'.pdf';
        $pdfSaveTo = '/tmp/faktura-vydana-'.$invoice['id'].'.pdf';
        file_put_contents($pdfSaveTo, file_get_contents($pdfUrl));
        $mail->addFile($pdfSaveTo);

        $isdocxUrl    = 'faktura-vydana/'.$invoice['id'].'.isdocx';
        $isdocxSaveTo = '/tmp/faktura-vydana-'.$invoice['id'].'.isdocx';
        file_put_contents($isdocxSaveTo, file_get_contents($isdocxUrl));

        $mail->addFile($isdocxSaveTo);
        $mail->send();
    }
}
