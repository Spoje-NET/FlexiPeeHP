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

Installation
------------

    composer require spoje.net/flexipeehp


Mandatory configuration Directives
----------------------------------


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
        return str_replace(' ', '', ucfirst(str_replace('-', ' ', $evidence)));
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
    print_r( $jednotky->getAllFromFlexiBee );

Pokud chceme aby nově vytvořená třída uměla do flexibee i zapisovat, je třeba jí 
ovodit od předka FlexiBeeRW.

Testování
---------

Unit testy se nachází ve složce **testing**.

Zde je ukázkový skript pro zobrazení výsledků testů na webové stránce a odeslání 
mailem:

    cd $PROJECTDIR
    AUTHOR=`git log | head -n 2 | tail -n 1 | awk -F':' '{print $2}'`
    SUBJECT=`git log -1 --pretty=%B | head -n 1`
    RESULTS='/var/www/html/flexipeehp-testing.html'
    cd testing
    RESULT=`phpunit --colors --bootstrap $SITEDIR/testing/bootstrap.php /usr/share/php/PHPUnit/Extensions/NetBeansSuite.php --run=$SITEDIR/testing |  awk '{ sub(/$/,"\r"); print }' | aha`
    echo $RESULT >  $RESULTS
    cat $RESULTS | awk '{ sub(/$/,"\n"); print }' | mail "$AUTHOR" -s "$SUBJECT"  -a 'Content-Type: text/html'

Ukázka
------

Příkldem využití knihovny je nástroj [Flexplorer](https://github.com/Spoje-NET/Flexplorer)
