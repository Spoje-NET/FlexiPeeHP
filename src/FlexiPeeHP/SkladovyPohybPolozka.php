<?php
/**
 * FlexiPeeHP - Objekt pokladny.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Položka skladového pohybu
 *
 * @link https://demo.flexibee.eu/c/demo/skladovy-pohyb-polozka/properties
 */
class SkladovyPohybPolozka extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'skladovy-pohyb-polozka';

}