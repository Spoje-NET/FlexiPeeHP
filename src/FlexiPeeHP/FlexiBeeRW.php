<?php
/**
 * FlexiPeeHP - Třída pro zápis do FlexiBee.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class FlexiBeeRW extends FlexiBeeRO
{
    /**
     * Sloupeček obsahující datum vložení záznamu do shopu.
     *
     * @var string
     */
    public $myCreateColumn = 'false';

    /**
     * Slopecek obsahujici datum poslení modifikace záznamu do shopu.
     *
     * @var string
     */
    public $myLastModifiedColumn = 'lastUpdate';

    /**
     * Last Inserted ID.
     *
     * @var int
     */
    public $lastInsertedID = null;

    /**
     * Array of fields for next curl POST operation
     * 
     * @var string
     */
    protected $postFields = null;

    /**
     * Uloží záznam.
     *
     * @param array $data
     *
     * @return array odpověď
     */
    public function insertToFlexiBee($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }
        $this->postFields = $this->jsonizeData($data);
        return $this->performRequest($this->evidence.'.'.$this->format, 'PUT');
    }

    /**
     * Give you last inserted record ID.
     * 
     * @return int
     */
    public function getLastInsertedId()
    {
        return $this->lastInsertedID;
    }

    /**
     * Smaže záznam
     *
     * @param int|string $id identifikátor záznamu
     * @return boolean Response code is 200 ?
     */
    public function deleteFromFlexiBee($id)
    {
        $this->performRequest($this->evidence.'/'.$id.'.'.$this->format,
            'DELETE');
        return $this->lastResponseCode == 200;
    }
}