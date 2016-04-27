<?php
/**
 * FlexiPeeHP - nastavení testů.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2015 Spoje.Net
 */
if (file_exists('../vendor/autoload.php')) {
    include_once '../vendor/autoload.php';
} else {
    if (file_exists('vendor/autoload.php')) { //For Test Generator
        include_once 'vendor/autoload.php';
    }
}


/*
 * URL Flexibee API
 */
define('FLEXIBEE_URL', 'https://flexibee-dev.spoje.net:5434');
/*
 * Uživatel FlexiBee API
 */
define('FLEXIBEE_LOGIN', 'test');
/*
 * Heslo FlexiBee API
 */
define('FLEXIBEE_PASSWORD', 'testing');
/*
 * Společnost v FlexiBee
 */
define('FLEXIBEE_COMPANY', 'test');

