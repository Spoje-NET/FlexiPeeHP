<?php

/**
 * FlexiPeeHP - Objekt Pokladního pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Pokladní pohyb
 *
 * @link https://demo.flexibee.eu/c/demo/pokladni-pohyb/properties položky evidence
 */
class PokladniPohyb extends FlexiBeeRW
{
    /**
     * Evidence FlexiBee.
     *
     * @var string
     */
    public $evidence = 'pokladni-pohyb';
}