<?php
/**
 * FlexiPeeHP - Třída pro zápis do FlexiBee.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Základní třída pro zápis do FlexiBee
 *
 * @url https://demo.flexibee.eu/devdoc/http-operations
 */
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
            case 'DISALLOWED':
                throw new \Exception(sprintf('Inserting data to r/o evidence %s',
                    $this->getEvidence()));
            case 'NOT_DIRECT':
                throw new \Exception(sprintf('Inserting data to slave only evidence %s',
                    $this->getEvidence()));
            case 'NOT_DOCUMENTED':
                if ($this->debug === true) {
                    $this->addStatusMessage(sprintf('Inserting data to undocumneted evidence %s',
                            $this->getEvidence()));
                }

                break;
            case 'SUPPORTED':
            default:
                break;
        }

        if (is_null($data)) {
            $data = $this->getData();
        }
        if ($this->debug === true) {
            $missingColumns = $this->controlMandatoryColumns();
            if (count($missingColumns)) {
                $this->addStatusMessage(sprintf('Given data does not contain requied Columns: %s',
                        implode(',', $missingColumns))
                    , 'warning');
            }
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
     * Delete record in FlexiBee
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
     */
    public function takeData($data)
    {
        if ($this->debug === true) {
            $fbColumns   = $this->getColumnsInfo();
            foreach ($this->getRelationsInfo() as $relation) {
                if (is_array($relation) && isset($relation['url'])) {
                    $fbRelations[$relation['url']] = $relation['url'];
                }
            }

            if (count($fbColumns)) {
                foreach ($data as $key => $value) {
                    if (!array_key_exists($key, $fbColumns)) {

                        if (!array_key_exists($key, $fbRelations)) {
                            $this->addStatusMessage(sprintf('unknown column %s for evidence %s',
                                    $key, $this->getEvidence()), 'warning');
                        } else {
                            if (!is_array($value)) {
                                $this->addStatusMessage(sprintf('subevidence %s in evidence %s must bee an array',
                                        $key, $this->getEvidence()), 'warning');
                            }
                        }
                    }
                }
            }
        }
        return parent::takeData($data);
    }

    /**
     * Control data for mandatory columns presence.
     *
     * @param array $data
     * @return array List of missing columns. Empty if all is ok
     */
    public function controlMandatoryColumns($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }

        $missingMandatoryColumns = [];

        $fbColumns   = $this->getColumnsInfo();
        foreach ($fbColumns as $columnName => $columnInfo) {
            $mandatory = ($columnInfo['mandatory'] == 'true');
            if ($mandatory && !array_key_exists($columnName, $data)) {
                $missingMandatoryColumns[$columnName] = $columnInfo['name'];
            }
        }

        return $missingMandatoryColumns;
    }

    /**
     * Control data for readonly columns presence.
     *
     * @param array $data
     * @return array List of ReadOnly columns. Empty if all is ok
     */
    public function controlReadOnlyColumns($data = null)
    {
        if (is_null($data)) {
            $data->getData();
        }

        $readonlyColumns = [];

        $fbColumns = $this->getColumnsInfo();
        foreach ($fbColumns as $columnName => $columnInfo) {
            $writable = ($columnInfo['isWritable'] == 'true');
            if (!$writable && !array_key_exists($columnName, $data)) {
                $readonlyColumns[$columnName] = $columnInfo['name'];
            }
        }

        return $readonlyColumns;
    }

    /**
     * Convert Timestamp to FlexiBee Date format.
     *
     * @param int $timpestamp
     *
     * @return string FlexiBee Date or NULL
     */
    public static function timestampToFlexiDate($timpestamp = null)
    {
        $flexiDate = null;
        if (!is_null($timpestamp)) {
            $date      = new \DateTime();
            $date->setTimestamp($timpestamp);
            $flexiDate = $date->format('Y-m-d');
        }
        return $flexiDate;
    }

    /**
     * Convert Timestamp to Flexi DateTime format.
     *
     * @param int $timpestamp
     *
     * @return string FlexiBee DateTime or NULL
     */
    public static function timestampToFlexiDateTime($timpestamp = null)
    {
        $flexiDateTime = null;
        if (!is_null($timpestamp)) {
            $date          = new \DateTime();
            $date->setTimestamp($timpestamp);
            $flexiDateTime = $date->format('Y-m-dTH:i:s');
        }
        return $flexiDateTime;
    }

}
