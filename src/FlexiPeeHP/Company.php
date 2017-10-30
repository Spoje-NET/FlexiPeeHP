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
class Company extends FlexiBeeRW
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

    public $myKeyColumn = 'dbNazev';

    /**
     * Zinicializuje objekt dle daných dat. Možné hodnoty:
     *
     *  * ['dbNazev'=>'company']           - load company form FlexiBee
     *  * 234                              - interní číslo záznamu k načtení
     *  * code:LOPATA                      - kód záznamu
     *  * BAGR                             - kód záznamu k načtení
     *  * ['id'=>24,'nazev'=>'hoblík']     - pole hodnot k předvyplnění
     *  * 743.json?relations=adresa,vazby  - část url s parametry k načtení
     *
     * @param mixed $init číslo/"(code:)kód"/(část)URI záznamu k načtení | pole hodnot k předvyplnění
     */
    public function processInit($init)
    {
        parent::processInit($init);
        if (is_array($init) && array_key_exists('dbNazev', $init)) {
            $companyInfo = $this->getFlexiData('/c/'.$init['dbNazev']);
            if (count($companyInfo)) {
                $this->takeData(current($companyInfo));
            }
        }
    }

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

    /**
     * Save company backup to file
     *
     * @param string $filename
     *
     * @return boolean was backup saved to file ?
     */
    public function saveBackupTo($filename)
    {
        $result                                   = false;
        $headersBackup                            = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Accept']       = '*/*';
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-winstrom-backup';
        $this->performRequest($this->getDataValue('dbNazev').'/backup', 'GET');
        $this->defaultHttpHeaders                 = $headersBackup;

        if ($this->lastResponseCode == 200) {
            if (file_put_contents($filename, $this->lastCurlResponse)) {
                $result = true;
            }
        }
        return $result;
    }

    /**
     * Restore company from given file
     *
     * @param string $filename
     *
     * @return boolean result
     */
    public function restoreBackupFrom($filename)
    {
        $result                                   = false;
        $headersBackup                            = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Accept']       = '*/*';
        $this->defaultHttpHeaders['Content-Type'] = 'application/octet-stream';
        $this->setPostFields(file_get_contents($filename));
        $this->performRequest($this->getDataValue('dbNazev').'/restore', 'PUT');
        return $this->lastResponseCode == 200;
    }

    /**
     * Create new company
     *
     * @param string $name
     *
     * @return boolean
     */
    public function createNew($name)
    {
        $this->performRequest('/admin/zalozeni-firmy?name='.$name, 'PUT');
        return $this->lastResponseCode == 201;
    }
}