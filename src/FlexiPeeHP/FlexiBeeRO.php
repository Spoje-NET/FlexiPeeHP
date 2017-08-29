<?php
/**
 * FlexiPeeHP - Read Only Access to FlexiBee class.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
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
    public static $libVersion = '1.6.4.2';

    /**
     * Základní namespace pro komunikaci s FlexiBee.
     * Basic namespace for communication with FlexiBee
     *
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = 'winstrom';

    /**
     * URL of object data in FlexiBee
     * @var string url
     */
    public $apiURL = null;

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
     * formát příchozí odpovědi
     * response format
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/format-types Přehled možných formátů
     *
     * @var string json|xml|...
     */
    public $responseFormat = 'json';

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
    public $curlInfo;

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
     * Body data  for next curl POST operation
     *
     * @var string
     */
    protected $postFields = null;

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
     * @link https://www.flexibee.eu/api/dokumentace/ref/zamykani-odemykani/
     * @var string filter query
     */
    public $filter;

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
        'idUcetniObdobi',
        'dry-run',
        'fail-on-warning',
        'report-name',
        'report-lang',
        'report-sign',
        'detail', //See: https://www.flexibee.eu/api/dokumentace/ref/detail-levels
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
        'relations',
        'relations',
        'xpath', // See: https://www.flexibee.eu/api/dokumentace/ref/xpath/
        'dry-run', // See: https://www.flexibee.eu/api/dokumentace/ref/dry-run/
        'inDesktopApp' // Note: Undocumented function (html only)
    ];

    /**
     * Save 404 results to log ?
     * @var boolean
     */
    protected $ignoreNotFound = false;

    /**
     * Array of errors caused by last request
     * @var array
     */
    private $errors = [];

    /**
     * List of Error500 reports sent
     * @var array
     */
    private $reports = [];

    /**
     * Send Error500 Report to
     * @var string email address
     */
    public $reportRecipient = 'kbel@flexibee.eu';

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
        if (!empty($init)) {
            $this->processInit($init);
        }
    }

    /**
     * SetUp Object to be ready for connect
     *
     * @param array $options Object Options (company,url,user,password,evidence,
     *                                       prefix,defaultUrlParams,debug)
     */
    public function setUp($options = [])
    {
        $this->setupProperty($options, 'company', 'FLEXIBEE_COMPANY');
        $this->setupProperty($options, 'url', 'FLEXIBEE_URL');
        $this->setupProperty($options, 'user', 'FLEXIBEE_LOGIN');
        $this->setupProperty($options, 'password', 'FLEXIBEE_PASSWORD');
        if (isset($options['evidence'])) {
            $this->setEvidence($options['evidence']);
        }
        $this->setupProperty($options, 'defaultUrlParams');
        if (isset($options['prefix'])) {
            $this->setPrefix($options['prefix']);
        }
        $this->setupProperty($options, 'debug');
        $this->updateApiURL();
    }

    /**
     * Set up one of properties
     *
     * @param array  $options  array of given properties
     * @param string $name     name of property to process
     * @param string $constant load default property value from constant
     */
    public function setupProperty($options, $name, $constant = null)
    {
        if (isset($options[$name])) {
            $this->$name = $options[$name];
        } else {
            if (is_null($this->$name) && !empty($constant) && defined($constant)) {
                $this->$name = constant($constant);
            }
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
        curl_setopt($this->curl, CURLOPT_VERBOSE, ($this->debug === true)); // For debugging
        curl_setopt($this->curl, CURLOPT_USERPWD,
            $this->user.':'.$this->password); // set username and password
    }

    /**
     * Zinicializuje objekt dle daných dat. Možné hodnoty:
     *
     *  * 234                              - interní číslo záznamu k načtení
     *  * code:LOPATA                      - kód záznamu
     *  * BAGR                             - kód záznamu ka načtení
     *  * ['id'=>24,'nazev'=>'hoblík']     - pole hodnot k předvyplnění
     *  * 743.json?relations=adresa,vazby  - část url s parametry k načtení
     *
     * @param mixed $init číslo/"(code:)kód"/(část)URI záznamu k načtení | pole hodnot k předvyplnění
     */
    public function processInit($init)
    {
        if (is_integer($init)) {
            $this->loadFromFlexiBee($init);
        } elseif (is_array($init)) {
            $this->takeData($init);
        } elseif (preg_match('/\.(json|xml|csv)/', $init)) {
            $this->takeData($this->getFlexiData((($init[0] != '/') ? $this->getEvidenceURL().'/'
                            : '').$init));
        } else {
            $this->loadFromFlexiBee('code:'.str_replace('code:', '', $init));
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
        }
    }

    /**
     * Set communication format.
     * One of html|xml|json|csv|dbf|xls|isdoc|isdocx|edi|pdf|pdf|vcf|ical
     *
     * @param string $format
     * @return boolen format is availble
     */
    public function setFormat($format)
    {
        $result = true;
        if (($this->debug === true) && !empty($this->evidence) && isset(Formats::$$this->evidence)) {
            if (array_key_exists($format, array_flip(Formats::$$this->evidence))
                === false) {
                $result = false;
            }
        }
        if ($result === true) {
            $this->format = $format;
            $this->updateApiURL();
        }
        return $result;
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
        $this->updateApiURL();
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
                $evidence = 'company';
                break;
            case 'evidence-list':
                $evidence = 'evidence';
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
     * Update $this->apiURL
     */
    public function updateApiURL()
    {
        $this->apiURL = $this->getEvidenceURL();
        $id           = $this->__toString();
        if (!empty($id)) {
            $this->apiURL .= '/'.urlencode($id);
        }
        $this->apiURL .= '.'.$this->format;
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

        if (preg_match('/^http/', $urlSuffix)) {
            $url = $urlSuffix;
        } else {
            $url = $this->getEvidenceURL($urlSuffix);
        }

        $responseCode = $this->doCurlRequest($url, $method, $format);

        return strlen($this->lastCurlResponse) ? $this->parseResponse($this->rawResponseToArray($this->lastCurlResponse,
                    $this->responseFormat), $responseCode) : null;
    }

    /**
     * Parse Raw FlexiBee response in several formats
     *
     * @param string $responseRaw raw response body
     * @param string $format      Raw Response format json|xml|etc
     *
     * @return array
     */
    public function rawResponseToArray($responseRaw, $format)
    {
        switch ($format) {
            case 'json':
                $responseDecoded = json_decode($responseRaw, true, 10);
                $decodeError     = json_last_error_msg();
                if ($decodeError == 'No error') {
                    if (array_key_exists($this->nameSpace, $responseDecoded)) {
                        $responseDecoded = $responseDecoded[$this->nameSpace];
                    }
                } else {
                    $this->addStatusMessage('JSON Decoder: '.$decodeError,
                        'error');
                    $this->addStatusMessage($responseRaw, 'debug');
                }
                break;
            case 'xml':
                $responseDecoded = self::xml2array($this->lastCurlResponse);
                break;
            case 'txt':
            default:
                $responseDecoded = $this->lastCurlResponse;
                break;
        }
        return $responseDecoded;
    }

    /**
     * Parse Response array
     *
     * @param array $responseDecoded
     * @param int $responseCode Request Response Code
     *
     * @return array main data part of response
     */
    public function parseResponse($responseDecoded, $responseCode)
    {
        $response = null;
        switch ($responseCode) {
            case 201:
                if (isset($responseDecoded[$this->resultField][0]['id'])) {
                    $this->lastInsertedID = $responseDecoded[$this->resultField][0]['id'];
                    $this->setMyKey($this->lastInsertedID);
                    $this->apiURL         = $this->getEvidenceURL().'/'.$this->lastInsertedID;
                } else {
                    $this->lastInsertedID = null;
                    if (isset($responseDecoded['@rowCount'])) {
                        $this->rowCount = (int) $responseDecoded['@rowCount'];
                    }
                }
            case 200:
                $response         = $this->lastResult = $this->unifyResponseFormat($responseDecoded);
                break;

            case 500:
                if ($this->debug === true) {
                    $this->error500Reporter($responseDecoded);
                }
            case 404:
                if ($this->ignoreNotFound === true) {
                    break;
                }
            case 400:
            default: //Something goes wrong
                $this->addStatusMessage($this->curlInfo['url'], 'warning');
                if (is_array($responseDecoded)) {
                    $this->parseError($responseDecoded);
                }
                $this->logResult($responseDecoded, $this->curlInfo['url']);
                break;
        }
        return $response;
    }

    /**
     * Parse error message response
     *
     * @param array $responseDecoded
     * @return int number of errors processed
     */
    public function parseError(array $responseDecoded)
    {
        if (array_key_exists('results', $responseDecoded)) {
            $this->errors = $responseDecoded['results'][0]['errors'];
        } else {
            $this->errors = [['message' => $responseDecoded['message']]];
        }
        return count($this->errors);
    }

    /**
     * Vykonej HTTP požadavek
     *
     * @link https://www.flexibee.eu/api/dokumentace/ref/urls/ Sestavování URL
     * @param string $url    URL požadavku
     * @param string $method HTTP Method GET|POST|PUT|OPTIONS|DELETE
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

        $formats = Formats::bySuffix();

        if (!isset($httpHeaders['Accept'])) {
            $httpHeaders['Accept'] = $formats[$format]['content-type'];
        }
        if (!isset($httpHeaders['Content-Type'])) {
            $httpHeaders['Content-Type'] = $formats[$format]['content-type'];
        }
        $httpHeadersFinal = [];
        foreach ($httpHeaders as $key => $value) {
            if (($key == 'User-Agent') && ($value == 'FlexiPeeHP')) {
                $value .= ' v'.self::$libVersion;
            }
            $httpHeadersFinal[] = $key.': '.$value;
        }

        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $httpHeadersFinal);

// Proveď samotnou operaci
        $this->lastCurlResponse            = curl_exec($this->curl);
        $this->curlInfo                    = curl_getinfo($this->curl);
        $this->curlInfo['when']            = microtime();
        $this->curlInfo['request_headers'] = $httpHeadersFinal;
        $this->responseFormat              = Formats::contentTypeToSuffix($this->curlInfo['content_type']);
        $this->lastResponseCode            = $this->curlInfo['http_code'];
        $this->lastCurlError               = curl_error($this->curl);
        if (strlen($this->lastCurlError)) {
            $this->addStatusMessage(sprintf('Curl Error (HTTP %d): %s',
                    $this->lastResponseCode, $this->lastCurlError), 'error');
        }

        if ($this->debug === true) {
            $this->saveDebugFiles();
        }

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
        $result           = false;
        $actionsAvailable = $this->getActionsInfo();
        if (array_key_exists($action, $actionsAvailable)) {
            $this->action = $action;
            $result       = true;
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

    /**
     * Disconnect CURL befere pass away
     */
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

        if (preg_match('/^http/', $suffix)) {
            $transactions = $this->performRequest($suffix, 'GET');
        } else {
            if (strlen($suffix)) {
                $transactions = $this->performRequest($this->evidence.$conditions.'.'.$this->format.'?'.$suffix.'&'.http_build_query($urlParams),
                    'GET');
            } else {
                $transactions = $this->performRequest($this->evidence.$conditions.'.'.$this->format.'?'.http_build_query($urlParams),
                    'GET');
            }
        }
        $responseEvidence = $this->getResponseEvidence();
        if (is_array($transactions) && array_key_exists($responseEvidence,
                $transactions)) {
            $result = $transactions[$responseEvidence];
            if ((count($result) == 1) && (count(current($result)) == 0 )) {
                $result = null; // Response is empty Array
            }
        } else {
            $result = $transactions;
        }

        return $result;
    }

    /**
     * Načte záznam z FlexiBee a uloží v sobě jeho data
     * Read FlexiBee record and store it inside od object
     *
     * @param int|array $id ID or conditions
     *
     * @return int počet načtených položek
     */
    public function loadFromFlexiBee($id = null)
    {
        $data = [];
        if (is_null($id)) {
            $id = $this->getMyKey();
        }

        $flexidata = $this->getFlexiData(null, is_array($id) ? $id : '/'.$id);

        $this->apiURL = $this->curlInfo['url'];
        if (is_array($flexidata) && (count($flexidata) == 1)) {
            $data = current($flexidata);
        }
        return $this->takeData($data);
    }

    /**
     * Převede data do Json formátu pro FlexiBee.
     * Convert data to FlexiBee like Json format
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

        if (!is_null($this->filter)) {
            $jsonize[$this->nameSpace][$this->evidence.'@filter'] = $this->filter;
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
        switch (gettype($columnsList)) {
            case 'integer':
                $conditions = [$this->getmyKeyColumn() => $conditions];
            case 'array':
                if (!is_null($indexBy) && !array_key_exists($indexBy,
                        $columnsList)) {
                    $columnsList[] = $indexBy;
                }
                $columns = implode(',', array_unique($columnsList));
                $detail  = 'custom:'.$columns;
            default:
                switch ($columnsList) {
                    case 'id':
                        $detail = 'id';
                        break;
                    case 'summary':
                        $detail = 'summary';
                        break;
                    default:
                        break;
                }
                break;
        }

        $flexiData = $this->getFlexiData('detail='.$detail, $conditions);

        if (!is_null($indexBy) && count($flexiData) && count(current($flexiData))) {
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
        return $logResult;
    }

    /**
     * Save RAW Curl Request & Response to files in Temp directory
     */
    public function saveDebugFiles()
    {
        $tmpdir   = sys_get_temp_dir();
        $fname    = $this->evidence.'-'.$this->curlInfo['when'].'.'.$this->format;
        $reqname  = $tmpdir.'/request-'.$fname;
        $respname = $tmpdir.'/response-'.$fname;
        file_put_contents($reqname, $this->postFields);
        file_put_contents($respname, $this->lastCurlResponse);
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
        $parts = [];

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
                        if ($column == 'stitky') {
                            $parts[$column] = $column."='code:".$data[$column]."'";
                        } else {
                            $parts[$column] = $column." $defop '".$data[$column]."'";
                        }
                        break;
                }
            }
        }
        return implode(' '.$joiner.' ', $parts);
    }

    /**
     * Obtain record/object identificator code: or id:
     * Vrací identifikátor objektu code: nebo id:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     * @return string|int indentifikátor záznamu reprezentovaného objektem
     */
    public function getRecordID()
    {
        $myCode = $this->getDataValue('kod');
        if ($myCode) {
            $id = 'code:'.$myCode;
        } else {
            $id = $this->getDataValue('id');
            if (($this->debug === true) && is_null($id)) {
                $this->addToLog('Object Data does not contain code: or id: cannot match with statement!',
                    'warning');
            }
        }
        return is_numeric($id) ? intval($id) : strval($id);
    }

    /**
     * Obtain record/object identificator code: or id:
     * Vrací identifikátor objektu code: nebo id:
     *
     * @link https://demo.flexibee.eu/devdoc/identifiers Identifikátory záznamů
     * @return string indentifikátor záznamu reprezentovaného objektem
     */
    public function __toString()
    {
        return strval($this->getRecordID());
    }

    /**
     * Gives you FlexiPeeHP class name for Given Evidence
     *
     * @param string $evidence
     * @return string Class name
     */
    public static function evidenceToClassName($evidence)
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
            if (!is_null($ids) && is_array($ids)) {
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
     * Obtain content type of last response
     *
     * @return string
     */
    public function getResponseFormat()
    {
        if (isset($this->curlInfo['content_type'])) {
            $responseFormat = $this->curlInfo['content_type'];
        } else {
            $responseFormat = null;
        }
        return $responseFormat;
    }

    /**
     * Return the same response format for one and multiplete results
     *
     * @param array $responseBody
     * @return array
     */
    public function unifyResponseFormat($responseBody)
    {
        if (!is_array($responseBody) || array_key_exists('message',
                $responseBody)) { //Unifi response format
            $response = $responseBody;
        } else {
            $evidence = $this->getResponseEvidence();
            if (array_key_exists($evidence, $responseBody)) {
                $response        = [];
                $evidenceContent = $responseBody[$evidence];
                if (array_key_exists(0, $evidenceContent)) {
                    $response[$evidence] = $evidenceContent; //Multiplete Results
                } else {
                    $response[$evidence][0] = $evidenceContent; //One result
                }
            } else {
                if (isset($responseBody['priloha'])) {
                    $response = $responseBody['priloha'];
                } else {
                    $response = $responseBody;
                }
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
     * Obtain relations for current (or given) evidence
     *
     * @param string $evidence
     * @return array Evidence structure
     */
    public function getRelationsInfo($evidence = null)
    {
        $relationsInfo = null;
        if (is_null($evidence)) {
            $evidence = $this->getEvidence();
        }
        $propsName = lcfirst(FlexiBeeRO::evidenceToClassName($evidence));
        if (isset(\FlexiPeeHP\Relations::$$propsName)) {
            $relationsInfo = Relations::$$propsName;
        }
        return $relationsInfo;
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
        $actionsAvailble = $this->getActionsInfo();

        if (is_array($actionsAvailble) && array_key_exists($action,
                $actionsAvailble)) {
            switch ($actionsAvailble[$action]['actionMakesSense']) {
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
                    $this->setPostFields($this->jsonizeData($this->getData()));
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

    /**
     * Save current object to file
     *
     * @param string $destfile path to file
     */
    public function saveResponseToFile($destfile)
    {
        if (strlen($this->lastCurlResponse)) {
            $this->doCurlRequest($this->apiURL, 'GET', $this->format);
        }
        file_put_contents($destfile, $this->lastCurlResponse);
    }

    /**
     * Obtain established relations listing
     *
     * @return array Null or Relations
     */
    public function getVazby()
    {
        $vazby = $this->getDataValue('vazby');
        if (is_null($vazby)) {
            $vazby = $this->getColumnsFromFlexibee('*',
                ['relations' => 'vazby', 'id' => $this->getRecordID()]);
            $vazby = $vazby[0]['vazby'];
        }
        return $vazby;
    }

    /**
     * Gives You URL for Current Record in FlexiBee web interface
     *
     * @return string url
     */
    public function getFlexiBeeURL()
    {
        $parsed_url = parse_url(str_replace('.'.$this->format, '', $this->apiURL));
        $scheme     = isset($parsed_url['scheme']) ? $parsed_url['scheme'].'://'
                : '';
        $host       = isset($parsed_url['host']) ? $parsed_url['host'] : '';
        $port       = isset($parsed_url['port']) ? ':'.$parsed_url['port'] : '';
        $user       = isset($parsed_url['user']) ? $parsed_url['user'] : '';
        $pass       = isset($parsed_url['pass']) ? ':'.$parsed_url['pass'] : '';
        $pass       = ($user || $pass) ? "$pass@" : '';
        $path       = isset($parsed_url['path']) ? $parsed_url['path'] : '';
        return $scheme.$user.$pass.$host.$port.$path;
    }

    /**
     * Set Record Key
     *
     * @param int|string $myKeyValue
     * @return boolean
     */
    public function setMyKey($myKeyValue)
    {
        $res = parent::setMyKey($myKeyValue);
        $this->updateApiURL();
        return $res;
    }

    /**
     * Set or get ignore not found pages flag
     *
     * @param boolean $ignore set flag to
     *
     * @return boolean get flag state
     */
    public function ignore404($ignore = null)
    {
        if (!is_null($ignore)) {
            $this->ignoreNotFound = $ignore;
        }
        return $this->ignoreNotFound;
    }

    /**
     * Send Document by mail
     *
     * @url https://www.flexibee.eu/api/dokumentace/ref/odesilani-mailem/
     *
     * @param string $to
     * @param string $subject
     * @param string $body Email Text
     *
     * @return int http response code
     */
    public function sendByMail($to, $subject, $body, $cc = null)
    {
        $this->setPostFields($body);
        $result = $this->doCurlRequest($this->getEvidenceURL().'/'.
            urlencode($this->getRecordID()).'/odeslani-dokladu?to='.$to.'&subject='.urlencode($subject).'&cc='.$cc
            , 'PUT', 'xml');
        return $result == 200;
    }

    /**
     * Send all unsent Invoices by mail
     *
     * @url https://www.flexibee.eu/api/dokumentace/ref/odesilani-mailem/
     * @return int http response code
     */
    public function sendUnsent()
    {
        return $this->doCurlRequest($this->getEvidenceURL().'/automaticky-odeslat-neodeslane',
                'PUT', 'xml');
    }

    /**
     * FlexiBee date to PHP DateTime
     *
     * @param string $flexidate
     * @return \DateTime
     */
    public static function flexiDateToDateTime($flexidate)
    {
        return \DateTime::createFromFormat('Y-m-jO', $flexidate);
    }

    /**
     * Získá dokument v daném formátu
     * Obtain document in given format
     *
     * @param string $format  pdf/csv/xml/json/ ...
     *
     * @return string|null filename downloaded or none
     */
    public function getInFormat($format)
    {
        $response = null;
        if ($this->setFormat($format)) {
            if (($this->doCurlRequest(($format == 'html') ? $this->apiURL.'?inDesktopApp=true'
                            : $this->apiURL, 'GET') == 200)) {
                $response = $this->lastCurlResponse;
            }
        }
        return $response;
    }

    /**
     * Uloží dokument v daném formátu do složky v systému souborů
     * Save document in given format to directory in filesystem
     *
     * @param string $format  pdf/csv/xml/json/ ...
     * @param string $destDir where to put file (prefix)
     *
     * @return string|null filename downloaded or none
     */
    public function downloadInFormat($format, $destDir = './')
    {
        $fileOnDisk = null;
        if ($this->setFormat($format)) {
            $downloadTo = $destDir.$this->getEvidence().'_'.$this->getMyKey().'.'.$format;
            if (($this->doCurlRequest($this->apiURL, 'GET') == 200) && (file_put_contents($downloadTo,
                    $this->lastCurlResponse) !== false)) {
                $fileOnDisk = $downloadTo;
            }
        }
        return $fileOnDisk;
    }

    /**
     * Compile and send Report about Error500 to FlexiBee developers
     * If FlexiBee is running on localost try also include java backtrace
     *
     * @param array $errorResponse result of parseError();
     */
    public function error500Reporter($errorResponse)
    {
        $ur = str_replace('/c/'.$this->company, '',
            str_replace($this->url, '', $this->curlInfo['url']));
        if (!array_key_exists($ur, $this->reports)) {
            $tmpdir   = sys_get_temp_dir();
            $myTime   = $this->curlInfo['when'];
            $curlname = $tmpdir.'/curl-'.$this->evidence.'-'.$myTime.'.json';
            file_put_contents($curlname,
                json_encode($this->curlInfo, JSON_PRETTY_PRINT));

            $report = new \Ease\Mailer($this->reportRecipient,
                'Error report 500 - '.$ur);

            $d     = dir($tmpdir);
            while (false !== ($entry = $d->read())) {
                if (strstr($entry, $myTime)) {
                    $ext  = pathinfo($tmpdir.'/'.$entry, PATHINFO_EXTENSION);
                    $mime = Formats::suffixToContentType($ext);
                    $report->addFile($tmpdir.'/'.$entry,
                        empty($mime) ? 'text/plain' : $mime);
                }
            }
            $d->close();

            if ((strstr($this->url, '://localhost') || strstr($this->url,
                    '://127.')) && file_exists('/var/log/flexibee.log')) {

                $fl = fopen("/var/log/flexibee.log", "r");
                if ($fl) {
                    $tracelog = [];
                    for ($x_pos = 0, $ln = 0, $output = array(); fseek($fl,
                            $x_pos, SEEK_END) !== -1; $x_pos--) {
                        $char = fgetc($fl);
                        if ($char === "\n") {
                            $tracelog[] = $output[$ln];
                            if (strstr($output[$ln], $errorResponse['message'])) {
                                break;
                            }
                            $ln++;
                            continue;
                        }
                        $output[$ln] = $char.((array_key_exists($ln, $output)) ? $output[$ln]
                                : '');
                    }

                    $trace     = implode("\n", array_reverse($tracelog));
                    $tracefile = $tmpdir.'/trace-'.$this->evidence.'-'.$myTime.'.log';
                    file_put_contents($tracefile, $trace);
                    $report->addItem("\n\n".$trace);
                    fclose($fl);
                }
            } else {
                $report->addItem($errorResponse['message']);
            }

            $licenseInfo = $this->performRequest($this->url.'/default-license.json');

            $report->addItem("\n\n".json_encode($licenseInfo['license'],
                    JSON_PRETTY_PRINT));

            if ($report->send()) {
                $this->reports[$ur] = $myTime;
            }
        }
    }
}
