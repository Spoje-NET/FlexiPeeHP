#!/usr/bin/php -f
<?php
/**
 * FlexiPeeHP - Example how to create FlexiBee label
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2017 Vitex Software
 */

namespace Example\FlexiPeeHP;

include_once './config.php';
include_once '../vendor/autoload.php';
/**
 * @var \FlexiPeeHP\Stitek Label Object
 */
$stitek     = new \FlexiPeeHP\Stitek();
/**
 * @var string Name / Code of new Label
 */
$label      = 'FlexiPeeHP';
/**
 * @see https://demo.flexibee.eu/c/demo/stitek/properties
 * @var array initial Label contexts
 */
$stitekData = [
    "kod" => strtoupper($label),
    "nazev" => $label,
    "vsbAdr" => true,
    "vsbKatalog" => true,
    "vsbSkl" => true
];

$stitekID = $stitek->getColumnsFromFlexibee('id', $stitekData);

if (!isset($stitekID[0]['id'])) {
    $stitek->insertToFlexiBee($stitekData);
    if ($stitek->lastResponseCode == 201) {
        $stitek->addStatusMessage('label '.$label.' created', 'success');
    }
} else {
    $stitek->addStatusMessage('label '.$label.' already exits');
}
