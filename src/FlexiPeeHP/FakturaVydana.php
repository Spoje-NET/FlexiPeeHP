<?php
/**
 * FlexiPeeHP - Objekt vydané faktury.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class FakturaVydana extends FlexiBee
{
    public $keyword = 'faktura';

    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'faktura-vydana';
    public $useKeywords = [
        'id' => 'INT',
        'lastUpdate' => 'FLEXIDATETIME',
        'kod' => 'STRING',
        'stavUhrK' => '',
        'datVyst' => 'FLEXIDATE',
        'datSplat' => 'FLEXIDATE',
        'sumCelkem' => 'FLOAT',
        'sumZalohy' => 'FLOAT',
        'sumZalohyMen' => 'FLOAT',
        'sumCelkemMen' => 'FLOAT',
        'zbyvaUhraditMen' => 'FLOAT',
        'zbyvaUhradit' => 'FLOAT',
        'mena' => 'REF',
        'firma' => 'REF',
        'popis' => 'STRING',
    ];

    /**
     * Zaplatí fakturu.
     *
     * @param float $value
     */
    public function settle($value, $pokladna)
    {
        $data = ['id' => $this->getId(),
            'hotovostni-uhrada' => ['pokladna' => $pokladna,
                'kurzKDatuUhrady' => 'false',
                'typDokl' => 'code:STANDARD',
                'castka' => $value,
                'datumUhrady' => date('Y-m-d'),
            ],
        ];

        $jsonizedData = $this->jsonizeData($data);

        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $jsonizedData);

        return $this->performRequest($this->evidence.'.json', 'PUT');
    }

    public function getValue()
    {
    }
}
