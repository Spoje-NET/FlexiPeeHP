<?php
/**
 * FlexiPeeHP - Objekt položky vydané faktury.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Polozka Faktury vydané
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-vydana-polozka/properties položky evidence
 */
class FakturaVydanaPolozka extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'faktura-vydana-polozka';

}
