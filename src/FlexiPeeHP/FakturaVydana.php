<?php
/**
 * System.Spoje.Net - Objekt adresáře.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class FakturaVydana extends FlexiBee
{
    public $keyword = 'faktura';
    public $agenda = 'faktura-vydana';
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
//                'mena@showAs'=> 'CZK=> Česká koruna',
//                'mena@ref'=> '/c/spoje_net_s_r_o_/mena/31.json',
        'firma' => 'REF',
//                'firma@showAs'=> '1092=>  1T S. R. O.',
//                'firma@ref'=> '/c/spoje_net_s_r_o_/adresar/1662.json',
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

        return $this->performRequest($this->agenda.'.json', 'PUT');
    }

    public function getValue()
    {
    }
}
