<?php
/**
 * FlexiPeeHP - Objekt pokladny.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Pokladna
 *
 * @link https://demo.flexibee.eu/c/demo/pokladna/properties
 */
class Pokladna extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'pokladna';

}
