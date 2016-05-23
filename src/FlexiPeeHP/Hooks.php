<?php
/**
 * FlexiPeeHP - WebHooks.
 *
 * @link https://www.flexibee.eu/api/dokumentace/ref/web-hooks WebHooks Reference
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class Hooks extends FlexiBee
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'hoks';

    /**
     * Zaregistruje WebHook
     *
     * @param string $url URL skript přímající WebHook
     * @param string $format json|xml formát přenášených dat
     * @return string výsledek požadavku
     */
    public function register($url, $format = 'json')
    {
        $this->setDataValue('url', $url);
        $this->setDataValue('format', $format);
        return $this->insertToFlexiBee();
    }

    /**
     * Odregistruje webhook
     *
     * @param int $id číslo záznamu
     */
    public function unregister($id)
    {
        return $this->deleteFromFlexiBee($id);
    }
}