<?php
/**
 * FlexiPeeHP - Objekt Společnosti.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Firmy/účetní jednotky
 *
 * @note Tato položka nemá dostupné položky evidence
 */
class Company extends FlexiBeeRO
{
    /**
     * Základní namespace pro komunikaci s FlexiBEE.
     *
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = 'companies';

    /**
     * Default Line Prefix.
     *
     * @var string
     */
    public $prefix = '';

    /**
     * Company.
     *
     * @var string
     */
    public $evidence = 'c';

    /**
     * Tato třída nepracuje sezvolenou firmou.
     *
     * @var string
     */
    public $company = '';

    /**
     * Vrací základní URL pro užitou evidenci
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/urls/ Sestavování URL
     * @param string $urlSuffix
     */
    public function getEvidenceURL($urlSuffix = null)
    {
        if (is_null($urlSuffix)) {
            $urlSuffix = $this->evidence;
        }

        $url = $this->url.$this->prefix;
        if (!is_null($urlSuffix)) {
            $url .= '/'.$urlSuffix;
        }
        return $url;
    }
}