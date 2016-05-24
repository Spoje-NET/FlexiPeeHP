<?php
/**
 * FlexiPeeHP - Objekt záznamu změn.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2016 Spoje.Net
 */

namespace FlexiPeeHP;

class Changes extends FlexiBee
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
        $this->performRequest('changes/enable.xml', 'POST', 'xml');
        return $this->lastResponseCode == 200;
    }

    /**
     * Zakáže oznamování změn
     * @return type
     */
    public function disable()
    {
        $this->performRequest('changes/disable.xml', 'POST', 'xml');
        return $this->lastResponseCode == 200;
    }

    /**
     * Vrátí stav zapnutí ChangesAPI
     *
     * @return boolan
     */
    public function getStatus()
    {
        $status = $this->performRequest('changes/status.xml', 'GET', 'xml');
        return (($this->lastResponseCode == 200) && ($status['success'] == 'true'));
    }
}