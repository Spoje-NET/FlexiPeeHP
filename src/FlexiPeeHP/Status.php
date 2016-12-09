<?php
/**
 * FlexiPeeHP - FlexiBee Server Status class.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Description of Status
 *
 * @author vitex
 */
class Status extends FlexiBeeRO
{
    /**
     * Evidence užitá objektem.
     * Evidence used by object
     *
     * @link https://demo.flexibee.eu/c/demo/evidence-list Přehled evidencí
     * @var string
     */
    public $evidence = 'status';

    /**
     * @link https://demo.flexibee.eu/devdoc/company-identifier Identifikátor firmy
     * @var string
     */
    public $company = '';

    /**
     * Default Line Prefix.
     *
     * @var string
     */
    public $prefix = '';

    public function __construct($init = null, $options = [])
    {
        parent::__construct($init, $options);
        $this->takeData($this->getFlexiData());
    }

    /**
     * Return the same response format for one and multiplete results
     *
     * @param array $responseRaw
     * @return array
     */
    public function unifyResponseFormat($responseRaw)
    {
        if (array_key_exists('status', $responseRaw)) {
            $response = $responseRaw['status'];
        } else {
            $response = $responseRaw;
        }
        return $response;
    }
}
