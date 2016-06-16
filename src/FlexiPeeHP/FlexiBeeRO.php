<?php
/**
 * FlexiPeeHP - Třída pro čtení z FlexiBee.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class FlexiBeeRO extends \Ease\Brick
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
     * Evidence užitá objektem.
     *
     * @link https://demo.flexibee.eu/c/demo/evidence-list Přehled evidencí
     * @var string
     */
    public $evidence = null;

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
     * @link https://demo.flexibee.eu/devdoc/company-identifier Identifikátor firmy
     * @var string
     */
    public $company = FLEXIBEE_COMPANY;

    /**
     * Server[:port]
     * @var string
     */
    public $url = FLEXIBEE_URL;

    /**
     * REST API Username
     * @var string
     */
    public $user = FLEXIBEE_LOGIN;

    /**
     * REST API Password
     * @var string
     */
    public $password = FLEXIBEE_PASSWORD;

    /**
     * @var array Pole HTTP hlaviček odesílaných s každým požadavkem
     */
    public $defaultHttpHeaders = ['User-Agent: FlexiPeeHP'];

    /**
     * Default additional request url parameters after question mark
     * 
     * @link https://www.flexibee.eu/api/dokumentace/ref/urls   Common params
     * @link https://www.flexibee.eu/api/dokumentace/ref/paging Paging params
     * @var array
     */
    public $defaultUrlParams = ['limit' => 0];

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
     * @var *
     */
    public $info;

    /**
     * Informace o poslední HTTP chybě.
     *
     * @var string
     */
    public $lastCurlError = null;

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
     * HTTP Response code of last request
     *
     * @var int
     */
    public $lastResponseCode = null;

    /**
     * Array of fields for next curl POST operation
     *
     * @var array
     */
    protected $postFields = [];

    /**
     * Last operation result data or message(s)
     *
     * @var array
     */
    public $lastResult = null;

    /**
     * Třída pro práci s FlexiBee.
     *
     * @param mixed $init výchozí selektor dat
     */
    public function __construct($init = null)
    {
        $this->init = $init;

        parent::__construct();
        $this->curlInit();
        if ($init) {
            $this->processInit($init);
        }
    }

    /**
     * Inicializace CURL
     */
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
     * Zinicializuje objekt dle daných dat
     * 
     * @param mixed $init
     */
    public function processInit($init)
    {
        if (is_integer($init)) {
            $this->loadFromFlexiBee($init);
        } elseif (is_array($init)) {
            $this->takeData($init);
        }
    }

    /**
     * Nastaví Agendu pro Komunikaci.
     *
     * @param string $evidence
     */
    public function setEvidence($evidence)
    {
        $this->evidence = $evidence;
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
     * Převede rekurzivně v poli všechny objekty na jejich identifikátory.
     *
     * @param object|array $object
     *
     * @return array
     */
    public static function objectToID($object)
    {
        $result = null;
        if (is_object($object)) {
            $result = $object->__toString();
        } else {
            if (is_array($object)) {
                foreach ($object as $item => $value) {
                    $result[$item] = self::objectToID($value);
                }
            } else { //String
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
     * @return array|boolean Výsledek operace
     */
    public function performRequest($urlSuffix = null, $method = 'GET',
                                   $format = null)
    {
        if (is_null($format)) {
            $format = $this->format;
        }
        if (is_null($urlSuffix)) {
            $urlSuffix = $this->evidence.'.'.$format;
        }
        $url = $this->url.$this->prefix.$this->company.'/'.$urlSuffix;
        curl_setopt($this->curl, CURLOPT_URL, $url);
// Nastavení samotné operace
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, $method);
//Vždy nastavíme byť i prázná postdata jako ochranu před chybou 411
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->postFields);

        $httpHeaders = $this->defaultHttpHeaders;
        switch ($format) {
            case 'json':
                $httpHeaders[] = 'Accept: application/json';
                break;
            case 'xml':
                $httpHeaders[] = 'Accept: application/xml';
                break;
        }

        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $httpHeaders);

// Proveď samotnou operaci
        $curlResponse = curl_exec($this->curl);

        $this->info = curl_getinfo($this->curl);

        $this->lastResponseCode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);

        if ($this->lastResponseCode != 200 && $this->lastResponseCode != 201) {
            $this->lastCurlError = curl_error($this->curl);
            switch ($format) {
                case 'json':
                    $response = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/',
                        function ($match) {
                        return mb_convert_encoding(pack('H*', $match[1]),
                            'UTF-8', 'UCS-2BE');
                    }, $curlResponse);
                    $response = (json_encode(json_decode($response, true, 10),
                            JSON_PRETTY_PRINT));
                    break;
                case 'xml':
                    if (strlen($curlResponse)) {
                        $response = self::xml2array($curlResponse);
                    }
                    break;
            }

            if (is_array($response)) {
                $result = urldecode(http_build_query($response));
            } elseif (strlen($response) && ($response != 'null')) {
                $result = urldecode(http_build_query(self::object2array(current(json_decode($response)))));
            } else {
                $result = null;
            }

            if ($response == 'null') {
                if ($this->lastResponseCode == 200) {
                    $response = true;
                } else {
                    $response = null;
                }
            } else {
                if (is_string($response)) {
                    $response = self::object2array(current(json_decode($response)));
                }
            }

            if (is_array($response) && ($this->lastResponseCode == 400)) {
                $this->logResult($response);
            } else {
                $this->addStatusMessage(sprintf('Error (HTTP %d): <pre>%s</pre> %s',
                        curl_getinfo($this->curl, CURLINFO_HTTP_CODE), $result,
                        $this->lastCurlError), 'error');
                $this->addStatusMessage($url, 'info');
                if (count($this->postFields)) {
                    $this->addStatusMessage(urldecode(http_build_query($this->postFields)),
                        'debug');
                }
            }
            return $response;
        }
        // Parse response
        $responseDecoded = [];
        switch ($format) {
            case 'json':
                $responseDecoded = json_decode($curlResponse, true, 10);
                if (($method == 'PUT') && isset($responseDecoded[$this->nameSpace][$this->resultField][0]['id'])) {
                    $this->lastInsertedID = $responseDecoded[$this->nameSpace][$this->resultField][0]['id'];
                } else {
                    $this->lastInsertedID = null;
                }
                $decodeError = json_last_error_msg();
                if ($decodeError != 'No error') {
                    $this->addStatusMessage($decodeError, 'error');
                }
                break;
            case 'xml':
                if (strlen($curlResponse)) {
                    $responseDecoded = self::xml2array($curlResponse);
                } else {
                    $responseDecoded = null;
                }
                break;
        }

        // Get response body root automatically
        if (isset($responseDecoded[$this->nameSpace])) {
            $responseDecoded = $responseDecoded[$this->nameSpace];
        }

        $this->lastResult = $responseDecoded;
        return $responseDecoded;
    }

    /**
     * Todo: Sem vyčlenit zpracování výsledku requestu
     */
    public function processRequest()
    {

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
        $response = $this->performRequest($this->evidence.'/'.$recordID.'.json');
        if (isset($response[$this->evidence])) {
            $record = $response[$this->evidence][0];
        }

        return $record;
    }

    /**
     * Načte data z FlexiBee.
     *
     * @param string $suffix     dotaz
     * @param string|array $conditions Volitelný filtrovací výraz
     */
    public function getFlexiData($suffix = null, $conditions = null)
    {
        $urlParams = $this->defaultUrlParams;
        if (!is_null($conditions)) {
            if (is_array($conditions)) {

                if (isset($conditions['sort'])) {
                    \Ease\Sand::divDataArray($conditions, $urlParams, 'sort');
                }
                if (isset($conditions['order'])) {
                    \Ease\Sand::divDataArray($conditions, $urlParams, 'order');
                }
                if (isset($conditions['limit'])) {
                    \Ease\Sand::divDataArray($conditions, $urlParams, 'limit');
                }
                if (isset($conditions['start'])) {
                    \Ease\Sand::divDataArray($conditions, $urlParams, 'start');
                }
                if (isset($conditions['add-row-count'])) {
                    \Ease\Sand::divDataArray($conditions, $urlParams,
                        'add-row-count');
                }

                $conditions = $this->flexiUrl($conditions);
            }

            if (strlen($conditions) && ($conditions[0] != '/')) {
                $conditions = '/'.rawurlencode('('.($conditions).')');
            }
        } else {
            $conditions = '';
        }
        if (strlen($suffix)) {
            $transactions = $this->performRequest($this->evidence.$conditions.'.'.$this->format.'?'.$suffix.'&'.http_build_query($urlParams),
                'GET');
        } else {
            $transactions = $this->performRequest($this->evidence.$conditions.'.'.$this->format.'?'.http_build_query($urlParams),
                'GET');
        }
        if (isset($transactions[$this->evidence])) {
            $result = $transactions[$this->evidence];
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
        $data = [];
        if (is_null($id)) {
            $id = $this->getMyKey();
        }

        $flexidata = $this->getFlexiData(null, '/'.$id);
        if (count($flexidata) == 1) {
            $data = current($flexidata);
        }
        return $this->takeData($data);
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
                $this->evidence => $this->objectToID($data),
            ],
        ];

        return json_encode($jsonize);
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
     * @param string           $indexBy    klice vysledku naplnit hodnotou ze
     *                                     sloupečku
     * @return array
     */
    public function getAllFromFlexibee($conditions = null, $indexBy = null)
    {
        if (is_int($conditions)) {
            $conditions = [$this->getmyKeyColumn() => $conditions];
        }

        $flexiData = $this->getFlexiData('', $conditions);

        if (!is_null($indexBy)) {
            $flexiData = $this->reindexArrayBy($flexiData);
        }

        return $flexiData;
    }

    /**
     * Vrací z FlexiBee sloupečky podle podmínek.
     *
     * @param string[] $columnsList seznam položek
     * @param array    $conditions  pole podmínek nebo ID záznamu
     * @param string   $indexBy     Sloupeček podle kterého indexovat záznamy
     *
     * @return array
     */
    public function getColumnsFromFlexibee($columnsList, $conditions = null,
                                           $indexBy = null)
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

        if (!is_null($indexBy)) {
            $flexiData = $this->reindexArrayBy($flexiData, $indexBy);
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
            $kod = $data['kod'];
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

        if (!strlen($kod)) {
            $kod = 'NOTSET';
        }

        if (strlen($kod) > 18) {
            $kodfinal = strtoupper(substr($kod, 0, 18));
        } else {
            $kodfinal = strtoupper($kod);
        }

        if ($unique) {
            $counter = 0;
            if (count($this->codes)) {
                foreach ($this->codes as $codesearch => $keystring) {
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
     * Write Operation Result.
     *
     * @param array  $resultData
     * @param string $url        URL
     */
    public function logResult($resultData = null, $url = null)
    {
        if (is_null($resultData)) {
            $resultData = $this->lastResult;
        }
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
                        $message = $error['message'];
                        if (isset($error['for'])) {
                            $message .= ' for: '.$error['for'];
                        }
                        if (isset($error['value'])) {
                            $message .= ' value:'.$error['value'];
                        }
                        if (isset($error['code'])) {
                            $message .= ' code:'.$error['code'];
                        }
                        $this->logger->addStatusMessage($rid.': '.$message,
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
     * @param string $operator default and/or
     *
     * @return string
     */
    public static function flexiUrl(array $data, $operator = 'and')
    {
        $flexiUrl = '';
        $parts    = [];

        foreach ($data as $column => $value) {
            if (is_integer($data[$column]) || is_float($data[$column])) {
                $parts[$column] = $column.' eq '.$data[$column];
            } elseif (is_bool($data[$column])) {
                $parts[$column] = $data[$column] ? $column.' eq true' : $column.' eq false';
            } elseif (is_null($data[$column])) {
                $parts[$column] = $column." is null";
            } elseif ($value == '!null') {
                $parts[$column] = $column." is not null";
            } else {
                $parts[$column] = $column." eq '".$data[$column]."'";
            }
        }

        $flexiUrl = implode(' '.$operator.' ', $parts);

        return $flexiUrl;
    }

    /**
     * Vrací identifikátor objektu code: nebo id:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     * @return string indentifikátor záznamu reprezentovaného objektem
     * @throws Exception data objektu neobsahují kód nebo id
     */
    public function __toString()
    {
        $myCode = $this->getDataValue('kod');
        if ($myCode) {
            $id = 'code:'.$myCode;
        } else {
            $id = $this->getDataValue('id');
            if (!$id) {
                throw new \Exception(_('invoice without loaded code: or id: cannot match with statement!'));
            }
        }
        return $id;
    }
}