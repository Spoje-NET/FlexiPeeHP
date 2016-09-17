<?php
/**
 * FlexiPeeHP - Read Only Access to FlexiBee class.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Základní třída pro čtení z FlexiBee
 *
 * @url https://demo.flexibee.eu/devdoc/
 */
class FlexiBeeRO extends \Ease\Brick
{
    /**
     * Version of FlexiPeeHP library
     *
     * @var string
     */
    public $libVersion = '1.6';

    /**
     * Základní namespace pro komunikaci s FlexiBee.
     * Basic namespace for communication with FlexiBee
     *
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = 'winstrom';

    /**
     * Datový blok v poli odpovědi.
     * Data block in response field.
     *
     * @var string
     */
    public $resultField = 'results';

    /**
     * Verze protokolu použitého pro komunikaci.
     * Communication protocol version used.
     *
     * @var string Verze použitého API
     */
    public $protoVersion = '1.0';

    /**
     * Evidence užitá objektem.
     * Evidence used by object
     *
     * @link https://demo.flexibee.eu/c/demo/evidence-list Přehled evidencí
     * @var string
     */
    public $evidence = null;

    /**
     * Výchozí formát pro komunikaci.
     * Default communication format.
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
    public $company = null;

    /**
     * Server[:port]
     * @var string
     */
    public $url = null;

    /**
     * REST API Username
     * @var string
     */
    public $user = null;

    /**
     * REST API Password
     * @var string
     */
    public $password = null;

    /**
     * @var array Pole HTTP hlaviček odesílaných s každým požadavkem
     */
    public $defaultHttpHeaders = ['User-Agent' => 'FlexiPeeHP'];

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
     * Raw Content of last curl response
     * 
     * @var string
     */
    public $lastCurlResponse;

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
     * Nuber from  @rowCount
     * @var int
     */
    public $rowCount = null;

    /**
     * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
     * @var string
     */
    protected $action;

    /**
     * Pole akcí které podporuje ta která evidence
     * @link https://demo.flexibee.eu/c/demo/faktura-vydana/actions.json Např. Akce faktury
     * @var array
     */
    public $actionsAvailable = null;

    /**
     * Parmetry pro URL
     * @link https://www.flexibee.eu/api/dokumentace/ref/urls/ Všechny podporované parametry
     * @var array
     */
    public $urlParams = [
        'dry-run',
        'fail-on-warning',
        'report-name',
        'report-lang',
        'report-sign',
        'detail',
        'mode',
        'limit',
        'start',
        'order',
        'sort',
        'add-row-count',
        'relations',
        'includes',
        'use-ext-id',
        'use-internal-id',
        'stitky-as-ids',
        'only-ext-ids',
        'no-ext-ids',
        'no-ids',
        'code-as-id',
        'no-http-errors',
        'export-settings',
        'as-gui',
        'code-in-response',
        'add-global-version',
        'encoding',
        'delimeter',
        'format',
        'auth',
        'skupina-stitku',
        'dir',
        'xpath', // See: https://www.flexibee.eu/api/dokumentace/ref/xpath/
        'dry-run', // See: https://www.flexibee.eu/api/dokumentace/ref/dry-run/
        'inDesktopApp' // Note: Undocumented function (html only)
    ];

    /**
     * Class for read only interaction with FlexiBee.
     *
     * @param mixed $init default record id or initial data
     * @param array $options Connection settings override
     */
    public function __construct($init = null, $options = [])
    {
        $this->init = $init;

        parent::__construct();
        $this->setUp($options);
        $this->curlInit();
        if (!is_null($init)) {
            $this->processInit($init);
        }
    }

    /**
     * SetUp Object to be ready for connect
     *
     * @param array $options Object Options
     */
    public function setUp($options = [])
    {
        if (isset($options['company'])) {
            $this->company = $options['company'];
        } else {
            if (is_null($this->company) && defined('FLEXIBEE_COMPANY')) {
                $this->company = constant('FLEXIBEE_COMPANY');
            }
        }
        if (isset($options['url'])) {
            $this->url = $options['url'];
        } else {
            if (is_null($this->url) && defined('FLEXIBEE_URL')) {
                $this->url = constant('FLEXIBEE_URL');
            }
        }
        if (isset($options['user'])) {
            $this->user = $options['user'];
        } else {
            if (is_null($this->user) && defined('FLEXIBEE_LOGIN')) {
                $this->user = constant('FLEXIBEE_LOGIN');
            }
        }
        if (isset($options['password'])) {
            $this->password = $options['password'];
        } else {
            if (is_null($this->password) && defined('FLEXIBEE_PASSWORD')) {
                $this->password = constant('FLEXIBEE_PASSWORD');
            }
        }
        if (isset($options['evidence'])) {
            $this->setEvidence($options['evidence']);
        }
        if (isset($options['prefix'])) {
            $this->setPrefix($options['prefix']);
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
        } elseif (strstr($init, 'code:')) {
            $this->loadFromFlexiBee($init);
        }
    }

    /**
     * Set URL prefix
     *
     * @param string $prefix
     */
    public function setPrefix($prefix)
    {
        switch ($prefix) {
            case 'a': //Access
            case 'c': //Company
            case 'u': //User
            case 'g': //License Groups
            case 'admin':
            case 'status':
            case 'login-logout':
                $this->prefix = '/'.$prefix.'/';
                break;
            case null:
            case '':
            case '/':
                $this->prefix = '';
                break;
            default:
                throw new \Exception(sprintf('Unknown prefix %s', $prefix));
                break;
        }
    }

    /**
     * Nastaví Evidenci pro Komunikaci.
     * Set evidence for communication
     *
     * @param string $evidence evidence pathName to use
     * @return boolean evidence switching status
     */
    public function setEvidence($evidence)
    {
        $result = null;
        switch ($this->prefix) {
            case '/c/':
                if (array_key_exists($evidence, EvidenceList::$name)) {
                    $this->evidence = $evidence;
                    $result         = true;
                } else {
                    throw new \Exception(sprintf('Try to set unsupported evidence %s',
                        $evidence));
                }
                break;
            default:
                $this->evidence = $evidence;
                $result         = true;
                break;
        }
        return $result;
    }

    /**
     * Vrací právě používanou evidenci pro komunikaci
     * Obtain current used evidence
     *
     * @return string
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Set used company.
     * Nastaví Firmu.
     *
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * Obtain company now used
     * Vrací právě používanou firmu
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Vrací název evidence použité v odpovědích z FlexiBee
     *
     * @return string
     */
    public function getResponseEvidence()
    {
        switch ($this->evidence) {
            case 'c':
                $evidence = 'companies';
                break;
            default:
                $evidence = $this->getEvidence();
                break;
        }
        return $evidence;
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
     * Return basic URL for used Evidence
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/urls/ Sestavování URL
     * @param string $urlSuffix
     */
    public function getEvidenceURL($urlSuffix = null)
    {
        if (is_null($urlSuffix)) {
            $urlSuffix = $this->getEvidence();
        } elseif ($urlSuffix[0] == ';') {
            $urlSuffix = $this->getEvidence().$urlSuffix;
        }
        return $this->url.$this->prefix.$this->company.'/'.$urlSuffix;
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
        $this->rowCount = null;
        $url            = $this->getEvidenceURL($urlSuffix);

        $responseCode = $this->doCurlRequest($url, $method, $format);

        if (is_null($format)) {
            $format = $this->format;
        }

        switch ($responseCode) {
            case 200:
            case 201:
                // Parse response
                $responseDecoded = [];

                switch ($format) {
                    case 'json':
                        $responseDecoded = json_decode($this->lastCurlResponse,
                            true, 10);
                        if (($method == 'PUT') && isset($responseDecoded[$this->nameSpace][$this->resultField][0]['id'])) {
                            $this->lastInsertedID = $responseDecoded[$this->nameSpace][$this->resultField][0]['id'];
                            $this->setMyKey($this->lastInsertedID);
                        } else {
                            $this->lastInsertedID = null;
                            if (isset($responseDecoded[$this->nameSpace]['@rowCount'])) {
                                $this->rowCount = (int) $responseDecoded[$this->nameSpace]['@rowCount'];
                            }
                        }
                        $decodeError = json_last_error_msg();
                        if ($decodeError != 'No error') {
                            $this->addStatusMessage($decodeError, 'error');
                        }
                        break;
                    case 'xml':
                        if (strlen($this->lastCurlResponse)) {
                            $responseDecoded = self::xml2array($this->lastCurlResponse);
                        } else {
                            $responseDecoded = null;
                        }
                        break;
                }


                $response         = $this->lastResult = $this->unifyResponseFormat($responseDecoded);

                break;

            default: //Some goes wrong
                $this->lastCurlError = curl_error($this->curl);
                switch ($format) {
                    case 'json':
                        $response = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/',
                            function ($match) {
                            return mb_convert_encoding(pack('H*', $match[1]),
                                'UTF-8', 'UCS-2BE');
                        }, $this->lastCurlResponse);
                        $response = (json_encode(json_decode($response, true, 10),
                                JSON_PRETTY_PRINT));
                        break;
                    case 'xml':
                        if (strlen($this->lastCurlResponse)) {
                            $response = self::xml2array($this->lastCurlResponse);
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
                    $this->logResult($response, $url);
                } else {
                    $this->addStatusMessage(sprintf('Error (HTTP %d): <pre>%s</pre> %s',
                            curl_getinfo($this->curl, CURLINFO_HTTP_CODE),
                            $result, $this->lastCurlError), 'error');
                    $this->addStatusMessage($url, 'info');
                    if (count($this->postFields)) {
                        if (is_array($result)) {
                            $this->addStatusMessage(urldecode(http_build_query($this->postFields)),
                                'debug');
                        } else {
                            $this->addStatusMessage(urldecode(http_build_query($this->getData())),
                                'debug');
                        }
                    }
                }

                break;
        }
        return $response;
    }

    /**
     * Vykonej HTTP požadavek
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/urls/ Sestavování URL
     * @param string $url    URL požadavku
     * @param strinf $method HTTP Method GET|POST|PUT|OPTIONS|DELETE
     * @param string $format požadovaný formát komunikace
     * @return int HTTP Response CODE
     */
    public function doCurlRequest($url, $method, $format = null)
    {
        if (is_null($format)) {
            $format = $this->format;
        }
        curl_setopt($this->curl, CURLOPT_URL, $url);
// Nastavení samotné operace
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, strtoupper($method));
//Vždy nastavíme byť i prázná postdata jako ochranu před chybou 411
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->postFields);

        $httpHeaders = $this->defaultHttpHeaders;
        switch ($format) {
            case 'json':
                $httpHeaders['Accept']       = 'application/json';
                $httpHeaders['Content-Type'] = 'application/json';

                break;
            case 'xml':
                $httpHeaders['Accept']       = 'application/xml';
                $httpHeaders['Content-Type'] = 'application/xml';
                break;
        }

        $httpHeadersFinal = [];
        foreach ($httpHeaders as $key => $value) {
            if (($key == 'User-Agent') && ($value == 'FlexiPeeHP')) {
                $value.= ' v'.$this->libVersion;
            }
            $httpHeadersFinal[] = $key.': '.$value;
        }

        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $httpHeadersFinal);

// Proveď samotnou operaci
        $this->lastCurlResponse = curl_exec($this->curl);

        $this->info = curl_getinfo($this->curl);

        $this->lastResponseCode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
        return $this->lastResponseCode;
    }

    /**
     * Nastaví druh prováděné akce.
     *
     * @link https://demo.flexibee.eu/devdoc/actions Provádění akcí
     * @param string $action
     * @return boolean
     */
    public function setAction($action)
    {
        $result = false;
        if (is_null($this->actionsAvailable)) {
            $this->action = $action;
            $result       = true;
        } else {
            if (array_search($action, $this->actionsAvailable)) {
                $this->action = $action;
                $result       = true;
            }
        }
        return $result;
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
     * Oddělí z pole podmínek ty jenž patří za ? v URL požadavku
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/urls/ Sestavování URL
     * @param array $conditions pole podmínek   - rendrují se do ()
     * @param array $urlParams  pole parametrů  - rendrují za ?
     */
    public function extractUrlParams(&$conditions, &$urlParams)
    {
        foreach ($this->urlParams as $urlParam) {
            if (isset($conditions[$urlParam])) {
                \Ease\Sand::divDataArray($conditions, $urlParams, $urlParam);
            }
        }
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
                $this->extractUrlParams($conditions, $urlParams);
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

        if (!is_null($this->action)) {
            $jsonize[$this->nameSpace][$this->evidence.'@action'] = $this->action;
            $this->action                                         = null;
        }

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
     * @return boolean Record presence status
     */
    public function recordExists($data = null)
    {
        $found = null;
        if (is_null($data)) {
            $data = $this->getData();
        }

        $res = $this->getColumnsFromFlexibee([$this->myKeyColumn],
            self::flexiUrl($data));

        if (!count($res) || (isset($res['success']) && ($res['success'] == 'false'))
            || !count($res[0])) {
            $found = false;
        } else {
            $found = true;
        }
        return $found;
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
        $detail = 'full';

        if (is_int($conditions)) {
            $conditions = [$this->getmyKeyColumn() => $conditions];
        }

        if ($columnsList != '*') {
            if (is_array($columnsList)) {
                $columns = implode(',', array_unique($columnsList));
            } else {
                $columns = $columnsList;
            }
            $detail = 'custom:'.$columns;
        }

        $flexiData = $this->getFlexiData('detail='.$detail, $conditions);

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
     * @return boolean Log save success
     */
    public function logResult($resultData = null, $url = null)
    {
        $logResult = false;
        if (isset($resultData['success']) && ($resultData['success'] == 'false')) {
            if (isset($resultData['message'])) {
                $this->addStatusMessage($resultData['message'], 'warning');
            }
            $this->addStatusMessage('Error '.$this->lastResponseCode.': '.urldecode($url),
                'warning');
            unset($url);
        }
        if (is_null($resultData)) {
            $resultData = $this->lastResult;
        }
        if (isset($url)) {
            $this->logger->addStatusMessage(urldecode($url));
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
                        $this->addStatusMessage($rid.': '.$message, $status);
                    }
                }
            }
        }

        if (is_object($this->logger)) {
            $logResult = $this->logger->flush(get_class($this));
        }
        return $logResult;
    }

    /**
     * Save RAW Curl Request & Response to files in Temp directory
     */
    public function saveDebugFiles()
    {
        $tmpdir = sys_get_temp_dir();
        file_put_contents($tmpdir.'/request-'.$this->evidence.'-'.microtime().'.'.$this->format,
            $this->postFields);
        file_put_contents($tmpdir.'/response-'.$this->evidence.'-'.microtime().'.'.$this->format,
            $this->lastCurlResponse);
    }

    /**
     * Připraví data pro odeslání do FlexiBee
     * 
     * @param string $data
     */
    public function setPostFields($data)
    {
        $this->postFields = $data;
    }

    /**
     * Generuje fragment url pro filtrování.
     *
     * @see https://www.flexibee.eu/api/dokumentace/ref/filters
     *
     * @param array  $data
     * @param string $joiner default and/or
     * @param string $defop  default operator
     *
     * @return string
     */
    public static function flexiUrl(array $data, $joiner = 'and', $defop = 'eq')
    {
        $flexiUrl = '';
        $parts    = [];

        foreach ($data as $column => $value) {
            if (is_integer($data[$column]) || is_float($data[$column])) {
                $parts[$column] = $column.' eq \''.$data[$column].'\'';
            } elseif (is_bool($data[$column])) {
                $parts[$column] = $data[$column] ? $column.' eq true' : $column.' eq false';
            } elseif (is_null($data[$column])) {
                $parts[$column] = $column." is null";
            } else {
                switch ($value) {
                    case '!null':
                        $parts[$column] = $column." is not null";
                        break;
                    case 'is empty':
                    case 'is not empty':
                        $parts[$column] = $column.' '.$value;
                        break;
                    default:
                        $parts[$column] = $column." $defop '".$data[$column]."'";
                        break;
                }
        }
        }

        $flexiUrl = implode(' '.$joiner.' ', $parts);

        return $flexiUrl;
    }

    /**
     * Vrací identifikátor objektu code: nebo id:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     * @return string indentifikátor záznamu reprezentovaného objektem
     */
    public function __toString()
    {
        $myCode = $this->getDataValue('kod');
        if ($myCode) {
            $id = 'code:'.$myCode;
        } else {
            $id = $this->getDataValue('id');
            if (is_null($id)) {
                $this->addToLog('Object Data does not contain code: or id: cannot match with statement!',
                    'warning');
            }
        }
        return $id;
    }

    /**
     * Gives you FlexiPeeHP class name for Given Evidence
     *
     * @param string $evidence
     * @return string Class name
     */
    static public function evidenceToClassName($evidence)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
    }

    /**
     * Vrací hodnotu daného externího ID
     *
     * @param string $want Which ? If empty,you obtain the first one.
     * @return string
     */
    public function getExternalID($want = null)
    {
        $extid = null;
        $ids   = $this->getDataValue('external-ids');
        if (is_null($want)) {
            if (count($ids)) {
                $extid = current($ids);
            }
        } else {
            if (!is_null($ids)) {
                foreach ($ids as $id) {
                    if (strstr($id, 'ext:'.$want)) {
                        $extid = str_replace('ext:'.$want.':', '', $id);
                    }
                }
            }
        }
        return $extid;
    }

    /**
     * Obtain actual GlobalVersion
     * Vrací aktuální globální verzi změn
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/changes-api#globalVersion Globální Verze
     * @return type
     */
    public function getGlobalVersion()
    {
        $globalVersion = null;
        if (!count($this->lastResult) || !isset($this->lastResult['@globalVersion'])) {
            $this->getFlexiData(null,
                ['add-global-version' => 'true', 'limit' => 1]);
        }

        if (isset($this->lastResult['@globalVersion'])) {
            $globalVersion = intval($this->lastResult['@globalVersion']);
        }

        return $globalVersion;
    }

    /**
     * Return the same response format for one and multiplete results
     * 
     * @param array $responseRaw
     * @return array
     */
    public function unifyResponseFormat($responseRaw)
    {
        $response = null;
        $evidence = $this->getResponseEvidence();
        if (is_array($responseRaw)) {
            // Get response body root automatically
            if (array_key_exists($this->nameSpace, $responseRaw)) { //Unifi response format
                $responseBody = $responseRaw[$this->nameSpace];
                if (array_key_exists($evidence, $responseBody)) {
                    $evidenceContent = $responseBody[$evidence];
                    if (array_key_exists(0, $evidenceContent)) {
                        $response[$evidence] = $evidenceContent; //Multiplete Results
                    } else {
                        $response[$evidence][0] = $evidenceContent; //One result
                    }
                } else {
                    $response = $responseBody;
                }
            } else {
                $response = $responseRaw;
            }
        }
        return $response;
    }

    /**
     * Obtain structure for current (or given) evidence
     *
     * @param string $evidence
     * @return array Evidence structure
     */
    public function getColumnsInfo($evidence = null)
    {
        $columnsInfo = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        $propsName = lcfirst(FlexiBeeRO::evidenceToClassName($evidence));
        if (isset(\FlexiPeeHP\Properties::$$propsName)) {
            $columnsInfo = Properties::$$propsName;
        }
        return $columnsInfo;
    }

    /**
     * Obtain actions for current (or given) evidence
     *
     * @param string $evidence
     * @return array Evidence structure
     */
    public function getActionsInfo($evidence = null)
    {
        $actionsInfo = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        $propsName = lcfirst(FlexiBeeRO::evidenceToClassName($evidence));
        if (isset(\FlexiPeeHP\Actions::$$propsName)) {
            $actionsInfo = Actions::$$propsName;
        }
        return $actionsInfo;
    }

    /**
     * Obtain info for current (or given) evidence
     *
     * @param string $evidence
     * @return array Evidence info
     */
    public function getEvidenceInfo($evidence = null)
    {
        $evidencesInfo = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        if (isset(EvidenceList::$evidences[$evidence])) {
            $evidencesInfo = EvidenceList::$evidences[$evidence];
        }
        return $evidencesInfo;
    }

    /**
     * Obtain name for current (or given) evidence path
     *
     * @param string $evidence Evidence Path
     * @return array Evidence info
     */
    public function getEvidenceName($evidence = null)
    {
        $evidenceName = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        if (isset(EvidenceList::$name[$evidence])) {
            $evidenceName = EvidenceList::$name[$evidence];
        }
        return $evidenceName;
    }

    /**
     * Perform given action (if availble) on current evidence/record
     * @url https://demo.flexibee.eu/devdoc/actions
     * 
     * @param string $action one of evidence actions
     * @param string $method ext|int External method call operation in URL.
     *                               Internal add the @action element to request body
     */
    public function performAction($action, $method = 'ext')
    {
        $result = null;
        if (is_null($this->actionsAvailable)) {
            $this->actionsAvailble = $this->getActionsInfo();
        }

        if (is_array($this->actionsAvailble) && array_key_exists($action,
                $this->actionsAvailble)) {
            switch ($this->actionsAvailble[$action]['actionMakesSense']) {
                case 'ONLY_WITH_INSTANCE_AND_NOT_IN_EDIT':
                case 'ONLY_WITH_INSTANCE': //Add instance
                    $urlSuffix = '/'.$this->__toString().'/'.$action.'.'.$this->format;
                    break;

                default:
                    $urlSuffix = '/'.$action;
                    break;
            }

            switch ($method) {
                case 'int':
                    $this->setAction($action);
                    $result = $this->performRequest(null, 'POST');
                    break;

                default:
                    $result = $this->performRequest($urlSuffix, 'GET');
                    break;
            }
        } else {
            throw new \Exception(sprintf(_('Unsupported action %s for evidence %s'),
                $action, $this->getEvidence()));
        }

        return $result;
    }

}
