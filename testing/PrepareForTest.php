<?php
/**
 * php-flexibee-matecher - Prepare Testing Data
 * 
 * @copyright (c) 2018, Vítězslav Dvořák
 */
define('EASE_LOGGER', 'syslog|console');
if (file_exists('../vendor/autoload.php')) {
    require_once '../vendor/autoload.php';
    $shared = new Ease\Shared();
    $shared->loadConfig('../client.json');
    $shared->loadConfig('../matcher.json');
} else {
    require_once './vendor/autoload.php';
    $shared = new Ease\Shared();
    $shared->loadConfig('./client.json');
    $shared->loadConfig('./matcher.json');
}

$product = new \FlexiPeeHP\Cenik();
$product->insertToFlexiBee( ['kod'=>'BATERKA','nazev'=>'Baterie']);
