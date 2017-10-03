<?php
/**
 * FlexiPeeHP - Objekt záznamu změn.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Log změn v evidencích
 *
 * @link https://www.flexibee.eu/api/dokumentace/ref/changes-api/ Dokumentace
 */
class Changes extends FlexiBeeRO
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'changes';

    /**
     * Povolí oznamování změn
     * @return type
     */
    public function enable()
    {
        $this->performRequest('enable.xml', 'POST', 'xml');
        return $this->lastResponseCode == 200;
    }

    /**
     * Zakáže oznamování změn
     * @return type
     */
    public function disable()
    {
        $this->performRequest('disable.xml', 'POST', 'xml');
        return $this->lastResponseCode == 200;
    }

    /**
     * Vrátí stav zapnutí ChangesAPI
     *
     * @return boolan
     */
    public function getStatus()
    {
        $status = $this->performRequest('status.xml', 'GET', 'xml');
        return (($this->lastResponseCode == 200) && ($status['changes'][0]['success']
            === 'true'));
    }

    /**
     * Test if given record exists in FlexiBee .
     *
     * @param array $data
     * @return null Method is disabled for Changes
     */
    public function recordExists($data = null)
    {
        return null;
    }

    /**
     * Obtain actual GlobalVersion
     * Vrací aktuální globální verzi změn
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/changes-api#globalVersion Globální Verze
     * @return int
     */
    public function getGlobalVersion()
    {
        $this->getColumnsFromFlexibee('*', ['start' => 0, 'limit' => 0]);
        $globalVersionRaw = json_decode($this->lastCurlResponse, TRUE);
        return isset($globalVersionRaw[$this->nameSpace]['@globalVersion']) ? intval($globalVersionRaw[$this->nameSpace]['@globalVersion'])
                : null;
    }

    /**
     * Convert FlexiBee Response XML to Array
     *
     * @param string $rawXML
     *
     * @return array
     */
    public function rawXmlToArray($rawXML)
    {
        return [$this->getEvidence() => parent::rawXmlToArray($rawXML)];
    }
}
