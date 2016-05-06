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

/**
 * Write logs as:
 */
define('LOG_NAME', 'FlexiPeeHP');

$testServer = 'official';
switch ($testServer) {
    case 'official':
////
//// Config for official test server
////

        /*
         * URL Flexibee API
         */
        define('FLEXIBEE_URL', 'https://demo.flexibee.eu');
        /*
         * Uživatel FlexiBee API
         */
        define('FLEXIBEE_LOGIN', 'winstrom');
        /*
         * Heslo FlexiBee API
         */
        define('FLEXIBEE_PASSWORD', 'winstrom');
        /*
         * Společnost v FlexiBee
         */
        define('FLEXIBEE_COMPANY', 'demo');


        break;
    case 'spoje.net':
//
// Config for Spoje.Net
//

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


        break;

    default:
//
// Config for localhost
//

        /*
         * URL Flexibee API
         */
        define('FLEXIBEE_URL', 'https://localhost:5434');
        /*
         * Uživatel FlexiBee API
         */
        define('FLEXIBEE_LOGIN', 'admin');
        /*
         * Heslo FlexiBee API
         */
        define('FLEXIBEE_PASSWORD', 'admin123');
        /*
         * Společnost v FlexiBee
         */
        define('FLEXIBEE_COMPANY', 'spoje_net_s_r_o_1');

        break;
}


