<?php
/**
 * FlexiPeeHP - Shared functions
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

/**
 * Ask For Invoice ID
 *
 * @return int|string id or code
 */
function askForInvoiceID()
{
    $invoiceID = null;
    echo "Please enter invoice ID ( one of https://demo.flexibee.eu/c/demo/faktura-vydana.json?detail=custom;id&limit=0 ):";
    $input     = fopen("php://stdin", "r");
    $invoiceID = trim(fgets($input));
    fclose($input);
    if (is_numeric($invoiceID)) {
        $invoiceID = intval($invoiceID);
    }
    return $invoiceID;
}
