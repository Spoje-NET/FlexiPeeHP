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
    public $postFields = null;

    /**
     * Save record (if evidence allow to).
     * Uloží záznam (pokud to evidence dovoluje)
     *
     * @param array $data Data to save
     * @throws Exception Evidence does not support Import
     *
     * @return array odpověď
     */
    public function insertToFlexiBee($data = null)
    {
        $info = $this->getEvidenceInfo();
        switch ($info['importStatus']) {
            case 'NOT_DOCUMENTED':
                $this->addStatusMessage(sprintf('Inserting data to undocumneted evidence %s',
                        $this->getEvidence()));

                break;
            case 'DISALLOWED':
                throw new Exception(sprintf('Inserting data to r/o evidence %s',
                    $this->getEvidence()));
            case 'SUPPORTED':
            default:
                break;
        }

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
    public function deleteFromFlexiBee($id = null)
    {
        if (is_null($id)) {
            $id = $this->getMyKey();
        }
        $this->performRequest($this->evidence.'/'.$id.'.'.$this->format,
            'DELETE');
        return $this->lastResponseCode == 200;
    }

    /**
     * Control for existing column names in evidence and take data
     *
     * @param array $data Data to keep
     * @return int number of records taken
     * @throws \Exception try to load data to unexistent column
     */
    public function takeData($data)
    {
        $fbColumns = $this->getColumnsInfo();
        foreach ($data as $key => $value) {
            if (!array_key_exists($key, $fbColumns)) {
                throw new \Exception(sprintf('unknown column %s for evidence %s',
                    $key, $this->getEvidence()));
            }
        }

        return parent::takeData($data);
    }

}
