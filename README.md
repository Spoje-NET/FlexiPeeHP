# FlexiPeeHP
![FlexiPeeHP Logo](https://github.com/Spoje-NET/FlexiPeeHP/raw/master/project_logo.png "Project Logo")

PHP Based Library for easy interaction with Czech accounting system FlexiBee.

CZ: PHP Knihovna pro snadnou práci s českým ekonomickým systémem [FlexiBee](https://www.flexibee.eu/)

[![Source Code](http://img.shields.io/badge/source/Spoje-NET/FlexiPeeHP-blue.svg?style=flat-square)](https://github.com/Spoje-NET/FlexiPeeHP)
[![Latest Version](https://img.shields.io/github/release/Spoje-NET/FlexiPeeHP.svg?style=flat-square)](https://github.com/Spoje-NET/FlexiPeeHP/releases)
[![Software License](https://img.shields.io/badge/license-GNU-brightgreen.svg?style=flat-square)](https://github.com/Spoje-NET/FlexiPeeHP/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/Spoje-NET/FlexiPeeHP/master.svg?style=flat-square)](https://travis-ci.org/Spoje-NET/FlexiPeeHP)
[![Coverage Status](https://img.shields.io/coveralls/Spoje-NET/FlexiPeeHP/master.svg?style=flat-square)](https://coveralls.io/r/Spoje-NET/FlexiPeeHP?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/spoje.net/flexipeehp.svg?style=flat-square)](https://packagist.org/packages/spoje.net/flexipeehp)


#Poděkování
Vznik této knihovny by nebyl možný bez laskavé podpory společnosti [Spoje.Net](http://www.spoje.net), 
která hradila vývoj řešení pro propojení LMS / FlexiBee a importu skladu.

U společnosti Spoje.Net, je možné si objednat komerční podporu pro integraci
knihovny do vašich projektů. 

![Spoje.Net](https://github.com/Spoje-NET/FlexiPeeHP/raw/master/spoje-net_logo.gif "Spoje.Net")

Instalace
---------

    composer require spoje.net/flexipeehp

For Debian please use repo:

    wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
    echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/ease.list
    aptitude update
    aptitude install flexipeehp

In this case please add this to your app composer.json:

    "require": {
        "spoje.net/flexipeehp": "1.0",
    },
    "repositories": [
        {
            "type": "path",
            "url": "/usr/share/php/FlexiPeeHP",
            "options": {
                "symlink": true
            }
        }
    ]

Konfigurace
-----------

Konfigurace se provádí nastavením následujících konstant:

    /*
    * URL Flexibee API
    */
    define('FLEXIBEE_URL', 'https://flexibee-dev.spoje.net:5434');
    /*
    * Uživatel FlexiBee API
    */
    define('FLEXIBEE_LOGIN', 'test');
    /*
    * Heslo FlexiBee API
    */
    define('FLEXIBEE_PASSWORD', 'testing');
    /*
     * Společnost v FlexiBee
    */
    define('FLEXIBEE_COMPANY', 'test');

Jak to celé funguje ?
---------------------

Ústřední komponentou celé knihovny je Třída FlexiBeeRO, která je schopna pomocí 
PHP rozšíření curl komunikovat s REST Api FlexiBee.

Z ní jsou pak odvozeny třídy pro jednotlivé evidence, obsahující metody pro 
často používané operace, například "Zaplať" v případě přijatých faktur.

Nová odvozená třída vzniká tak že jméno třídy je název evidence avšak bez 
pomlček. Ty jsou ve jméně nahrazeny velkým písmenem. 

    function evidenceToClass($evidence)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
    }

Tzn. Pokud chceme odvodit 
novou třídu pro evidenci "Měrné jednotky" bude vypadat takto:

    <?php
    /**
     * @link https://demo.flexibee.eu/c/demo/merna-jednotka/properties Vlastnosti evidence
     */
    class MernaJednotka extends /FlexiPeeHP/FlexiBee
    {
        /**
         * Evidence užitá objektem.
         *
         * @var string
         */
        public $evidence = 'merna-jednotka';
    }

A poté je již snadné si vypsat měrné jednotky na 2 řádky:
    
    $jednotky = new MernaJednotka();
    print_r( $jednotky->getAllFromFlexiBee() );

Pokud chceme aby nově vytvořená třída uměla do flexibee i zapisovat, je třeba jí 
ovodit od předka FlexiBeeRW.

Testování
---------

PHPUnit testy se nachází ve složce **testing**. Pokud chcete testovat proti jinému
serveru než je oficální http://demo.flexibee.eu/ , je třeba změnit nastavení v 
souboru **bootstrap.php**. 

Obsah proměnné $testServer určuje která z předvolených nastavení budou použita.
A samozřejmě si můžete nadefinovat i vlastní. Jako příklad je zde uveden testovací
server spoje.net.

Pro testování vytvořte prosím nejprve testovací firmu TESTING s.r.o. a nastavte
přístupové údaje uživatele s oprávněním používat REST API. (Což je uživatel 
administrátora zadaný při instalaci FlexiBee.)

Upozornění: testování proti firmě s množstvím faktur a připojenou bankou může 
trvat nějakou dobu, jelikož se testuje i zavolání automatického párování dokladů.

Ukázka
------

Příkladem využití knihovny je nástroj [Flexplorer](https://github.com/Spoje-NET/Flexplorer)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5ba2e106-1590-4d0b-bbb2-953484ca36d4/big.png)](https://insight.sensiolabs.com/projects/5ba2e106-1590-4d0b-bbb2-953484ca36d4)
