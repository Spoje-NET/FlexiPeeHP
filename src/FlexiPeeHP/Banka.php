<?php
/**
 * FlexiPeeHP - Objekt štítku.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
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
        $this->performRequest('banka/nacteni-vypisu-online', 'PUT');
        //Dodělat: Wait PlainText response, not JSON ($this->lastCurlResponse)
        return $this->lastResponseCode == 200;
    }

    /**
     * Spustí proces automatického pářování plateb. ( trvá delší dobu )
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
