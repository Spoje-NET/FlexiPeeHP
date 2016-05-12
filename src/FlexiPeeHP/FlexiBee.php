<?php
/**
 * System.Spoje.Net - Třída pro práci s FlexiBee.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class FlexiBee extends \Ease\Brick
{
    /**
     * Základní namespace pro komunikaci s FlexiBEE.
     *
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = 'winstrom';

    /**
     * Datový blok v poli odpovědi.
     *
     * @var string
     */
    public $resultField = 'results';

    /**
     * Verze protokolu použitého pro komunikaci.
     *
     * @var string Verze použitého API
     */
    public $protoVersion = '1.0';

    /**
     * Agenda užitá objektem.
     *
     * @var string
     */
    public $agenda = null;

    /**
     * Výchozí formát pro komunikaci.
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/format-types Přehled možných formátů
     *
     * @var string json|xml|...
     */
    public $format = 'json';

    /**
     * Curl Handle.
     *
     * @var resource
     */
    public $curl = null;

    /**
     * @var type
     */
    public $company = FLEXIBEE_COMPANY;

    /**
     * @var string
     */
    public $url = FLEXIBEE_URL;

    /**
     * @var string
     */
    public $user = FLEXIBEE_LOGIN;

    /**
     * @var string
     */
    public $password = FLEXIBEE_PASSWORD;

    /**
     * Identifikační řetězec.
     *
     * @var string
     */
    public $init = null;

    /**
     * Sloupeček s názvem.
     *
     * @var string
     */
    public $nameColumn = 'nazev';

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
     * Klíčový idendifikátor záznamu.
     *
     * @var string
     */
    public $fbKeyColumn = 'id';

    /**
     * Informace o posledním HTTP requestu.
     *
     * @var array
     */
    public $info;

    /**
     * Informace o poslední HTTP chybě.
     *
     * @var array
     */
    public $error;

    /**
     * Used codes storage.
     *
     * @var array
     */
    public $codes = null;

    /**
     * Last Inserted ID.
     *
     * @var int
     */
    public $lastInsertedID = null;

    /**
     * Default Line Prefix.
     *
     * @var string
     */
    public $prefix = '/c/';

    /**
     * Třída pro práci s FlexiBee.
     *
     * @param string $init výchozí selektor dat
     */
    public function __construct($init = null)
    {
        $this->init = $init;

        parent::__construct();
        $this->curlInit();
    }

    public function curlInit()
    {
        $this->curl = \curl_init(); // create curl resource
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true); // return content as a string from curl_exec
        curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, true); // follow redirects (compatibility for future changes in FlexiBee)
        curl_setopt($this->curl, CURLOPT_HTTPAUTH, true);       // HTTP authentication
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false); // FlexiBee by default uses Self-Signed certificates
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($this->curl, CURLOPT_VERBOSE, true); // For debugging
        curl_setopt($this->curl, CURLOPT_USERPWD,
            $this->user.':'.$this->password); // set username and password
    }

    /**
     * Nastaví Agendu pro Komunikaci.
     *
     * @param string $agenda
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
    }

    /**
     * Převede rekurzivně Objekt na pole.
     *
     * @param object|array $object
     *
     * @return array
     */
    public static function object2array($object)
    {
        $result = null;
        if (is_object($object)) {
            $objectData = get_object_vars($object);
            if (is_array($objectData) && count($objectData)) {
                $result = array_map('self::object2array', $objectData);
            }
        } else {
            if (is_array($object)) {
                foreach ($object as $item => $value) {
                    $result[$item] = self::object2array($value);
                }
            } else {
                $result = $object;
            }
        }

        return $result;
    }

    /**
     * Funkce, která provede I/O operaci a vyhodnotí výsledek.
     *
     * @param string $urlSuffix část URL za identifikátorem firmy.
     * @param string $method    HTTP/REST metoda
     * @param string $format    Requested format
     */
    public function performRequest($urlSuffix = null, $method = 'GET',
                                   $format = null)
    {
        if (is_null($format)) {
            $format = $this->format;
        }
        if (is_null($urlSuffix)) {
            $urlSuffix = $this->agenda.'.'.$format;
        }
        $url = $this->url.$this->prefix.$this->company.'/'.$urlSuffix;
        curl_setopt($this->curl, CURLOPT_URL, $url);
// Nastavení samotné operace
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, $method);

// Proveď samotnou operaci
        $response = curl_exec($this->curl);

        $this->info = curl_getinfo($this->curl);

        $responseCode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);

        if ($responseCode != 200 && $responseCode != 201) {
            $this->error = curl_error($this->curl);
            $response    = (json_encode(json_decode($response, true, 10),
                    JSON_PRETTY_PRINT));

            $response = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/',
                function ($match) {
                return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8',
                    'UCS-2BE');
            }, $response);

            if ($responseCode == 400) {
                $this->logResult(self::object2array(current(json_decode($response))));
            } else {
                $this->addStatusMessage(sprintf('Error (HTTP %d): <pre>%s</pre> %s',
                        curl_getinfo($this->curl, CURLINFO_HTTP_CODE),
                        stripslashes($response), $this->error), 'error');
                $this->addStatusMessage($url);
            }
            if ($response == 'null') {
                return;
            }

            return self::object2array(current(json_decode($response)));
        }

        // Parse response
        switch ($format) {
            case 'json':
                $decoded = json_decode($response, true, 10);
                if (($method == 'PUT') && isset($decoded[$this->nameSpace][$this->resultField][0]['id'])) {
                    $this->lastInsertedID = $decoded[$this->nameSpace][$this->resultField][0]['id'];
                } else {
                    $this->lastInsertedID = null;
                }
//                $decodeError = json_last_error_msg();
//                $this->addStatusMessage($decodeError);

                break;
            case 'xml':
                $decoded = self::xml2array($response);
                break;
        }

        // Get response body root automatically
        if (isset($decoded[$this->nameSpace])) {
            $decoded = $decoded[$this->nameSpace];
        }

        return $decoded;
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
     * Convert XML to array.
     * 
     * @param string $xml
     *
     * @return array
     */
    public static function xml2array($xml)
    {
        $arr = [];

        if (is_string($xml)) {
            $xml = simplexml_load_string($xml);
        }

        foreach ($xml->children() as $r) {
            $t = [];
            if (count($r->children()) == 0) {
                $arr[$r->getName()] = strval($r);
            } else {
                $arr[$r->getName()][] = self::xml2array($r);
            }
        }

        return $arr;
    }

    /**
     * Odpojení od FlexiBee.
     */
    public function disconnect()
    {
        if (is_resource($this->curl)) {
            curl_close($this->curl);
        }
        $this->curl = null;
    }

    public function __destruct()
    {
        $this->disconnect();
    }

    /**
     * Načte data z FlexiBee.
     *
     * @param string $suffix dotaz
     */
    public function loadFlexiData($suffix = null)
    {
        return $this->takeData($this->getFlexiData($suffix));
    }

    /**
     * Načte řádek dat z FlexiBee.
     *
     * @param int $recordID id požadovaného záznamu
     *
     * @return array
     */
    public function getFlexiRow($recordID)
    {
        $record   = null;
        $response = $this->performRequest($this->agenda.'/'.$recordID.'.json');
        if (isset($response[$this->agenda])) {
            $record = $response[$this->agenda][0];
        }

        return $record;
    }

    /**
     * Načte data z FlexiBee.
     *
     * @param string $suffix     dotaz
     * @param string $conditions Volitelný filtrovací výraz
     */
    public function getFlexiData($suffix = null, $conditions = null)
    {
        if (!is_null($conditions)) {
            if ($conditions[0] != '/') {
                $conditions = '/'.rawurlencode('('.($conditions).')');
            }
        } else {
            $conditions = '';
        }
        if ($suffix) {
            $transactions = $this->performRequest($this->agenda.$conditions.'.'.$this->format.'?'.$suffix,
                'GET');
        } else {
            $transactions = $this->performRequest($this->agenda.$conditions.'.'.$this->format,
                'GET');
        }
        if (isset($transactions[$this->agenda])) {
            $result = $transactions[$this->agenda];
        } else {
            $result = $transactions;
        }

        return $result;
    }

    /**
     * Načte záznam z FlexiBee.
     *
     * @param int $id ID záznamu
     *
     * @return int počet načtených položek
     */
    public function loadFromFlexiBee($id = null)
    {
        if (is_null($id)) {
            $id = $this->getMyKey();
        }

        return $this->takeData($this->getFlexiData('/'.$id));
    }

    /**
     * Uloží data do FlexiBee.
     *
     * @param array $data
     *
     * @return array výsledek
     */
    public function saveToFlexiBee($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }

        $jsonizedData = $this->jsonizeData($data);

        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $jsonizedData);

        return $this->performRequest($this->agenda.'.'.$this->format, 'PUT');
    }

    /**
     * Převede data do Json formátu pro FlexiBee.
     *
     * @param array $data
     *
     * @return string
     */
    public function jsonizeData($data)
    {
        $jsonize = [
            $this->nameSpace => [
                '@version' => $this->protoVersion,
                $this->agenda => $data,
            ],
        ];

        return json_encode($jsonize);
    }

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
        $jsonizedData = $this->jsonizeData($data);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $jsonizedData);

        return $this->performRequest($this->agenda.'.'.$this->format, 'PUT');
    }

    /**
     * Test if given record ID exists in FlexiBee.
     *
     * @param string|int $identifer
     */
    public function idExists($identifer = null)
    {
        if (is_null($identifer)) {
            $identifer = $this->getMyKey();
        }
        $flexiData = $this->getFlexiData(
            'detail=custom:'.$this->getmyKeyColumn(), $identifer);

        return $flexiData;
    }

    /**
     * Test if given record exists in FlexiBee.
     *
     * @param array $data
     */
    public function recordExists($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }

        $res = $this->getColumnsFromFlexibee([$this->myKeyColumn],
            self::flexiUrl($data));

        return $res;
    }

    /**
     * Vrací z FlexiBee sloupečky podle podmínek.
     *
     * @param array|int|string $conditions pole podmínek nebo ID záznamu
     * @param array|string     $orderBy    třídit dle
     * @param string           $indexBy    klice vysledku naplnit hodnotou ze
     *                                     sloupečku
     * @param int              $limit      maximální počet vrácených záznamů
     *
     * @return array
     */
    public function getAllFromFlexibee($conditions = null, $orderBy = null,
                                       $indexBy = null, $limit = null)
    {
        if (is_int($conditions)) {
            $conditions = [$this->getmyKeyColumn() => $conditions];
        }

        $flexiData = $this->getFlexiData('', $conditions);

        if ($indexBy) {
            $flexiData2 = [];
            foreach ($flexiData as $dataID => $data) {
                $flexiData2[$data[$indexBy]] = $data;
            }
            $flexiData = $flexiData2;
        }

        return $flexiData;
    }

    /**
     * Vrací z FlexiBee sloupečky podle podmínek.
     *
     * @param string[]         $columnsList seznam položek
     * @param array|int|string $conditions  pole podmínek nebo ID záznamu
     * @param array|string     $orderBy     třídit dle
     * @param string           $indexBy     klice vysledku naplnit hodnotou ze
     *                                      sloupečku
     * @param int              $limit       maximální počet vrácených záznamů
     *
     * @return array
     */
    public function getColumnsFromFlexibee($columnsList, $conditions = null,
                                           $orderBy = null, $indexBy = null,
                                           $limit = null)
    {
        if (($columnsList != '*') && !count($columnsList)) {
            $this->error('getColumnsFromFlexiBee: Missing ColumnList');

            return;
        }

        if (is_int($conditions)) {
            $conditions = [$this->getmyKeyColumn() => $conditions];
        }

        if (is_array($columnsList)) {
            $columns = implode(',', array_unique($columnsList));
        } else {
            $columns = $columnsList;
        }

        $flexiData = $this->getFlexiData('detail=custom:'.$columns, $conditions);

        if ($indexBy) {
            $flexiData2 = [];
            foreach ($flexiData as $dataID => $data) {
                $flexiData2[$data[$indexBy]] = $data;
            }
            $flexiData = $flexiData2;
        }

        return $flexiData;
    }

    /**
     * Vrací kód záznamu.
     *
     * @param mixed $data
     *
     * @todo papat i string
     *
     * @return string
     */
    public function getKod($data = null, $unique = true)
    {
        $kod = null;

        if (is_null($data)) {
            $data = $this->getData();
        }

        if (is_string($data)) {
            $data = [$this->nameColumn => $data];
        }

        if (isset($data['kod'])) {
            return $data['kod'];
        } else {
            if (isset($data[$this->nameColumn])) {
                $kod = preg_replace('/[^a-zA-Z0-9]/', '',
                    \Ease\Sand::rip($data[$this->nameColumn]));
            } else {
                if (isset($data[$this->myKeyColumn])) {
                    $kod = \Ease\Sand::rip($data[$this->myKeyColumn]);
                }
            }
        }

        if (strlen($kod) > 18) {
            $kodfinal = strtoupper(substr($kod, 0, 18));
        } else {
            $kodfinal = strtoupper($kod);
        }

        if ($unique) {
            $counter = 0;
            if ($this->codes) {
                foreach ($this->codes as $codesearch => $keystring) {
                    if (!strlen($codesearch)) {
                        echo 'Error';
                    }
                    if (strstr($codesearch, $kodfinal)) {
                        ++$counter;
                    }
                }
            }
            if ($counter) {
                $kodfinal = $kodfinal.$counter;
            }

            $this->codes[$kodfinal] = $kod;
        }

        return $kodfinal;
    }

    /**
     * Vyhledavani v záznamech objektu FlexiBee.
     *
     * @param string $what hledaný výraz
     *
     * @return array pole výsledků
     */
    public function searchString($what)
    {
        $results   = [];
        $conds     = [];
        $columns[] = $this->myKeyColumn;
        foreach ($this->useKeywords as $keyword => $keywordInfo) {
            if (isset($this->keywordsInfo[$keyword]['virtual']) && ($this->keywordsInfo[$keyword]['virtual']
                == true)) {
                if ($keyword == $this->nameColumn) {
                    $this->nameColumn = $this->myKeyColumn;
                }
                continue;
            }
            switch ($keywordInfo) {
                case 'INT':
                case 'FLOAT':
                    if (is_numeric($what)) {
                        $conds[]   = "($keyword = ".$what.')';
                        $columns[] = "$keyword";
                    }
                    break;
                case 'TEXT':
                case 'STRING':
                    if (is_string($what)) {
                        $conds[]   = "( $keyword like '".$what."')";
                        $columns[] = "$keyword";
                    }
                    break;
                default:
                    break;
            }
        }

//        $res = \Ease\Shared::db()->queryToArray('SELECT ' . implode(',', $columns) . ',' . $this->nameColumn . ' FROM ' . $this->myTable . ' WHERE ' . implode(' OR ', $conds) . ' ORDER BY ' . $this->nameColumn, $this->myKeyColumn);

        $res = $this->getColumnsFromFlexibee($columns, implode(' or ', $conds));

        foreach ($res as $result) {
            $occurences = '';
            foreach ($result as $key => $value) {
                if (is_array($value)) {
                    continue;
                }
                if (mb_stristr($value, $what)) {
                    $occurences .= '('.$key.': '.$value.')';
                }
            }
            $results[$result[$this->myKeyColumn]] = [$this->nameColumn => $result[$this->nameColumn],
                'what' => $occurences,];
        }

        return $results;
    }

    /**
     * Write Operation Result.
     * 
     * @param array  $resultData
     * @param string $url        URL
     */
    public function logResult($resultData, $url = null)
    {
        if ($url) {
            $this->logger->addStatusMessage($url);
        }

        if (isset($resultData['results'])) {
            $status = null;
            if ($resultData['success'] == 'false') {
                $status = 'error';
            } else {
                $status = 'success';
            }
            foreach ($resultData['results'] as $result) {
                if (isset($result['request-id'])) {
                    $rid = $result['request-id'];
                } else {
                    $rid = '';
                }
                if (isset($result['errors'])) {
                    foreach ($result['errors'] as $error) {
                        $this->logger->addStatusMessage($rid.': '.$error['message'],
                            $status);
                    }
                }
            }
        }
        if (is_object($this->logger)) {
            $this->logger->flush(get_class($this));
        }
    }

    /**
     * Generuje fragment url pro filtrování.
     *
     * @see https://www.flexibee.eu/api/dokumentace/ref/filters
     *
     * @param array  $data
     * @param string $operator and/or
     *
     * @return string
     */
    public static function flexiUrl(array $data, $operator = 'and')
    {
        $flexiUrl = '';
        $parts    = [];

        foreach ($data as $column => $value) {
            if (is_numeric($data[$column])) {
                $parts[$column] = $column.' = '.$data[$column];
            } else {
                $parts[$column] = $column." = '".$data[$column]."'";
            }
        }

        $flexiUrl = implode(' '.$operator.' ', $parts);

        return $flexiUrl;
    }
}