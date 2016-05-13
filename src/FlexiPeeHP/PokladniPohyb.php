<?php

/**
 * FlexiPeeHP - Objekt Pokladního pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class PokladniPohyb extends FlexiBee
{
    public $keyword = 'transaction';

    /**
     * Evidence FlexiBee.
     *
     * @var string
     */
    public $evidence = 'pokladni-pohyb';
    public $useKeywords = [
        'lastUpdate' => 'STRING',
        'kod' => 'STRING',
        'datVyst' => 'STRING',
        'sumCelkem' => 'FLOAT',
        'sumCelkemMen' => 'FLOAT',
        'mena' => 'STRING',
        'firma' => 'STRING',
        'pokladna' => 'STRING',
        'popis' => 'STRING',
        'typPohybuK' => 'STRING',
    ];
    public $keywordsInfo = [
        'lastUpdate' => ['title' => ('Změněno')],
        'kod' => ['title' => ('Kód')],
        'datVyst' => ['title' => ('Vystaveno')],
        'sumCelkem' => ['title' => ('Celkem')],
        'sumCelkemMen' => ['title' => ('Celkem Men')],
        'mena' => ['title' => ('Měna')],
        'firma' => ['title' => ('Firma')],
        'popis' => ['title' => ('Popis')],
    ];

    public function insertToFlexiBee($data = null)
    {
        if (is_null($data)) {
            $data = $this->getData();
        }
        $price = $data['sumCelkem'];

        $data['formaUhradyCis'] = 1; //Hotově

        $data['typDokl'] = 'code:STANDARD';
//        $data['pokladna'] = 'code:KASASRO';
//        $data['sumDphSniz2'] = $price; //0%
        $data['sumOsv'] = $price;
//        $data['sumZklCelkem'] = $price;
        $data['bezPolozek'] = 'true';
        //10% $data['sumZklSniz2'] =
        //15% $data['sumZklSniz'] =
        //21%        $data['sumZklZakl'] =

        $jsonizedData = $this->jsonizeData($data);

        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $jsonizedData);

        return $this->performRequest($this->evidence.'.json', 'PUT');
    }

    public function htmlizeRow($row)
    {
        if (isset($row['typPohybuK'])) {
            if ($row['typPohybuK'] == 'typPohybu.vydej') {
                $row['color'] = '#FFB8B8';
            } else {
                $row['color'] = '#A3FF8C';
            }
        }

        return parent::htmlizeRow($row);
    }
}
