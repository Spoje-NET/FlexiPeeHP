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
        'poznam' => 'STRING',
        'email' => 'STRING',
        'ic' => 'STRING',
        'dic' => 'STRING',
        'faUlice' => 'STRING',
        'faMesto' => 'STRING',
        'faPsc' => 'STRING',
    ];

}