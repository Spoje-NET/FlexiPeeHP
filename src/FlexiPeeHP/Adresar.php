<?php

/**
 * System.Spoje.Net - Objekt adresáře.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */
namespace FlexiPeeHP;

class Adresar extends FlexiBee
{
    public $keyword = 'klient';
    public $agenda = 'adresar';
    public $useKeywords = [
        'id' => 'STRING',
        'lastUpdate' => 'DATETIME',
        'kod' => 'STRING',
        'nazev' => 'STRING',
//      "nazevA" => 'STRING',
//      "nazevB" => 'STRING',
//      "nazevC" => 'STRING',
        'poznam' => 'STRING',
//      "popis" => 'STRING',
//      "platiOd" => "INT",
//      "platiDo" => "INT",
//      "ulice" => "STRING",
//      "mesto" => "STRING",
//      "psc" => 'STRING',
//      "tel" => 'STRING',
//      "mobil" => 'STRING',
//      "fax" => 'STRING',
        'email' => 'STRING',
//      "www" => 'STRING',
//      "stat" => "STRING",
////      "stat@showAs" => "Česká republika",
////      "stat@ref" => "/c/spoje_net_s_r_o_/stat/39.json",
//      "eanKod" => 'STRING',
        'ic' => 'STRING',
        'dic' => 'STRING',
//      "postovniShodna" => "true",
//      "faEanKod" => 'STRING',
//      "faJmenoFirmy" => 'STRING',
        'faUlice' => 'STRING',
        'faMesto' => 'STRING',
        'faPsc' => 'STRING',
//      "splatDny" => 'STRING',
//      "limitFak" => "STRING",
//      "limitPoSplatDny" => 'STRING',
//      "limitPoSplatZakaz" => 'BOOLEAN',
//      "platceDph" => 'BOOLEAN',
//      "typVztahuK" => "IDKEY",
////      "typVztahuK@showAs" => "STRING",
//      "kodPojistovny" => 'STRING',
//      "nazevPojistovny" => 'STRING',
//      "osloveni" => 'STRING',
//      "slevaDokl" => "FLOAT",
//      "obpAutomHotovo" => "BOOLEAN",
//      "nazev2" => "NazevII2",
//      "nazev2A" => 'STRING',
//      "nazev2B" => 'STRING',
//      "nazev2C" => 'STRING',
//      "nespolehlivyPlatce" => 'BOOLEAN',
//      "revize" => 'INT',
//      "stitky" => 'STRING',
//      "katastrUzemi" => 'STRING',
//      "parcela" => 'STRING',
//      "datNaroz" => 'STRING',
//      "rodCis" => 'STRING',
//      "datZaloz" => 'STRING',
//      "canceled" => 'BOOLEAN',
        'skupFir' => 'STRING',
//      "stredisko" => 'STRING',
//      "faStat" => 'STRING',
//      "zodpOsoba" => 'STRING',
//      "skupCen" => 'STRING',
//      "formaUhradyCis" => 'INT',
//      "kontakty" => 'ARRAY',
//      "mistaUrceni" => 'ARRAY'
    ];

}