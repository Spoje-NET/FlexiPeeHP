<?php
/**
 * FlexiPeeHP - Objekt Společnosti.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
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
    public $prefix = '/c';

    /**
     * Company.
     *
     * @var string
     */
    public $evidence = '';

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
        if (!empty($urlSuffix)) {
            $url .= (($urlSuffix[0] == '.') ? '' : '/').$urlSuffix;
        }
        return $url;
    }

    /**
     * Vrací název evidence použité v odpovědích z FlexiBee
     *
     * @return string
     */
    public function getResponseEvidence()
    {
        return 'company';
    }

    /**
     * Parse Raw FlexiBee response in several formats
     *
     * @param string $responseRaw raw response body
     * @param string $format      Raw Response format json|xml|etc
     *
     * @return array
     */
    public function rawResponseToArray($responseRaw, $format)
    {
        if (strstr($responseRaw, 'winstrom')) {
            $nsbackup        = $this->nameSpace;
            $this->nameSpace = 'winstrom';
            $response        = parent::rawResponseToArray($responseRaw, $format);
            $this->nameSpace = $nsbackup;
        } else {
            $response = parent::rawResponseToArray($responseRaw, $format);
        }
        return $response;
    }
}
