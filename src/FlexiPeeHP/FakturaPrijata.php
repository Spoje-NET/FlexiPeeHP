<?php
/**
 * FlexiPeeHP - Invoice Incomed.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Incoming invoice
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-prijata/properties
 */
class FakturaPrijata extends FlexiBeeRW
{
    /**
     * Evidence použitá třídou.
     *
     * @var string
     */
    public $evidence = 'faktura-prijata';

}
