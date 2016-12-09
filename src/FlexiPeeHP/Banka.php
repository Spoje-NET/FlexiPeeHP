<?php
/**
 * FlexiPeeHP - Bank Class.
 *              Objekt Banky.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Banka
 * 
 * @link https://demo.flexibee.eu/c/demo/banka/properties Vlastnosti evidence
 */
class Banka extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'banka';

    /**
     * Stáhne bankovní výpisy  ( trvá delší dobu )
     *
     * @return boolean
     */
    public function stahnoutVypisyOnline()
    {
        $this->performRequest('banka/nacteni-vypisu-online.json', 'PUT', 'txt');
        return $this->lastResponseCode == 200;
    }

    /**
     * Start invoice authomatic matching process ( it take longer time )
     * Spustí proces automatického párování plateb. ( trvá delší dobu )
     *
     * @link https://demo.flexibee.eu/devdoc/parovani-plateb Interní dokumentace
     * @return boolean
     */
    public function automatickeParovani()
    {
        $this->performRequest('banka/automaticke-parovani', 'PUT');
        return $this->lastResponseCode == 200;
    }
}
