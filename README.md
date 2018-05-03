# FlexiPeeHP
![FlexiPeeHP Logo](https://github.com/Spoje-NET/FlexiPeeHP/raw/master/project_logo.png "Project Logo")

PHP Based Library for easy interaction with Czech accounting system FlexiBee.

CZ: PHP Knihovna pro snadnou práci s českým ekonomickým systémem [FlexiBee](https://www.flexibee.eu/)

[![Source Code](http://img.shields.io/badge/source/Spoje-NET/FlexiPeeHP-blue.svg?style=flat-square)](https://github.com/Spoje-NET/FlexiPeeHP)
[![Latest Version](https://img.shields.io/github/release/Spoje-NET/FlexiPeeHP.svg?style=flat-square)](https://github.com/Spoje-NET/FlexiPeeHP/releases)
[![Software License](https://img.shields.io/badge/license-GNU-brightgreen.svg?style=flat-square)](https://github.com/Spoje-NET/FlexiPeeHP/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/Spoje-NET/FlexiPeeHP/master.svg?style=flat-square)](https://travis-ci.org/Spoje-NET/FlexiPeeHP)
[![Code Coverage](https://scrutinizer-ci.com/g/Spoje-NET/FlexiPeeHP/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Spoje-NET/FlexiPeeHP/?branch=master)
[![Docker pulls](https://img.shields.io/docker/pulls/vitexsoftware/flexipeehp.svg)](https://hub.docker.com/r/vitexsoftware/flexipeehp/)
[![Total Downloads](https://img.shields.io/packagist/dt/spoje.net/flexipeehp.svg?style=flat-square)](https://packagist.org/packages/spoje.net/flexipeehp)
[![Latest stable](https://img.shields.io/packagist/v/spoje.net/flexipeehp.svg?style=flat-square)](https://packagist.org/packages/spoje.net/flexipeehp)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5ba2e106-1590-4d0b-bbb2-953484ca36d4/big.png)](https://insight.sensiolabs.com/projects/5ba2e106-1590-4d0b-bbb2-953484ca36d4)

# Poděkování 
Vznik této knihovny by nebyl možný bez laskavé podpory společnosti [Spoje.Net](http://www.spoje.net), 
která hradila vývoj řešení pro propojení LMS / FlexiBee a importu skladu. :+1:

![Spoje.Net](https://github.com/Spoje-NET/FlexiPeeHP/raw/master/spoje-net_logo.gif "Spoje.Net")

U společnosti Spoje.Net, je možné si objednat komerční podporu pro integraci
knihovny do vašich projektů. K dispozici jsou tyto neveřejné funkce:

  * Příjmání a zpracování WebHooks
  * Konverze a import dat z SQL databáze
  * Obousměrná synchronizace s externím systém
  * Párování dokladů dle specifického symbolu

**Dále chci poděkovat technické podpoře společnosti [ABRA Flexi s.r.o.](https://www.flexibee.eu/podpora/) za jejich svatou trpělivost
při reakcích na mé ne vždy bystré otázky a bugreporty.**

Instalace
---------

    composer require spoje.net/flexipeehp

Konfigurace
-----------

Konfigurace se provádí nastavením následujících konstant:

```php
   /*
    * URL Flexibee API
    */
    define('FLEXIBEE_URL', 'https://flexibee-dev.spoje.net:5434');
   /*
    * Uživatel FlexiBee API
    */
    define('FLEXIBEE_LOGIN', 'apiuser');
   /*
    * Heslo FlexiBee API
    */
    define('FLEXIBEE_PASSWORD', 'apipass');
   /*
    * Společnost v FlexiBee
    */
    define('FLEXIBEE_COMPANY', 'test_s_r_o_');
   /*
    * Nebo pokud nechceme používat jméno a heslo 
    */
    define('FLEXIBEE_AUTHSESSID', '6QuifebMits'); //Volitelné
   /*
    * Pomalý server, velká databáze a přes modem k tomu
    */
    define('FLEXIBEE_TIMEOUT', 60); //Volitelné
```

nebo je možné přihlašovací údaje zadávat při vytváření instance třídy.

```php
    $invoicer = new \FlexiPeeHP\FakturaVydana(null,[
                'company' => 'Firma_s_r_o_',
                'url' => 'https://flexibee.firma.cz/',
                'user' => 'rest',
                'password' => '-dj3x21xaA_'
            ]);
```

Tento způsob nastavení má vyšší prioritu než výše uvedené definovaní konstant.

Jak to celé funguje ?
---------------------

Ústřední komponentou celé knihovny je Třída FlexiBeeRO, která je schopna pomocí 
PHP rozšíření curl komunikovat s REST Api FlexiBee.

Z ní jsou pak odvozeny třídy pro jednotlivé evidence, obsahující metody pro 
často používané operace, například "Zaplať" v případě přijatých faktur.

Nová odvozená třída vzniká tak, že jméno třídy je název evidence avšak bez 
pomlček. Ty jsou ve jméně nahrazeny velkým písmenem. 

```php
    function evidenceToClass($evidence)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $evidence)));
    }
```

Tzn. Pokud chceme odvodit 
novou třídu pro evidenci "Měrné jednotky" bude vypadat takto:

```php
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
```

A poté je již snadné si vypsat měrné jednotky na 2 řádky:
    
```php
    $jednotky = new MernaJednotka();
    print_r( $jednotky->getAllFromFlexiBee() );
```

Pokud chceme aby nově vytvořená třída uměla do flexibee i zapisovat, je třeba jí 
odvodit od předka FlexiBeeRW.


Více příkladů použití je možné najít [v samostatném projektu](https://github.com/VitexSoftware/FlexiPeeHP-Examples/tree/master/Examples)

Struktura Evidencí, Akcí a vztahů
---------------------------------

V některých případech je dobré znát jaké můžeme provádět akce, či jáká je 
struktura evidence. Tyto informace je možno získat voláním 
https://demo.flexibee.eu/c/demo/*/properties.json 
respektive https://demo.flexibee.eu/c/demo/*/actions.json 
avšak jedná se o relativně časově náročné operace. Jelikož se struktura 
evidencí a Akce či vztahy mezi evidencemi FlexiBee často nemění FlexiPeeHP 
disponuje mechanizmem který umožní pracovat s těmito údaji bez nutnosti 
dotazovat se na ně serveru. 

Struktura je uložena ve třídě Structure (Actions,Relations) která obsahuje 
staticky definované pole obsahující informace které by jinak bylo nutné získat
z FlexiBee.

Položku v seznamu evidencí https://demo.flexibee.eu/c/demo/evidence-list je pak 
možné kdykoliv snadno ukázat:

```php
    echo \FlexiPeeHP\Structure::$evidence['faktura-vydana'];
```

Sturktury jednotlivých evidencí jsou pak uloženy ve statických proměnných.
Jejich jméno se řídí stejnými pravidly jako jsou pro vytváření jména nové třídy
jen s tím rozdílem, že první písmeno je malé. Tzn.:

```php
    lcfirst(\FlexiPeeHP\FlexiBeeRO::evidenceToClassName($evidence))
```

V případě potřeby je možné tyto třídy pak možné vygenerovat s aktuálním obsahem 
následujícím příkazem:

  ```
  cd tools/ 
  ./update_all.sh
  ```

Operace trvá několik minut. Zobrazit průběh můžeme takto:

  ```
  tail -f /var/log/syslog | grep  FlexiPeeHPtest
  ```
Ladicí režim
------------

Pokud v objektech FlexiPeeHP nastavíte $this->debug na true, budou se před odesláním
dat do FlexiBee provedeny dodatečné testy. Kontrolují se tyto možné chyby:

 * Existuje vkládané políčko definované pro evidenci ?
 * Je vkládané políčko Pouze pro čtení ?
 * Pokud je vkládané políčko vazbou, je i polem ?

V ladícím režimu se také ukládají do složky /tmp všechny požadavky na flexibee a jejich odpovědi

Knihovna obsahuje mechanizmus pro odesílání zaznamenaných chyb při běhu FlexiBee vývojářům:

Pokud FlexiBee vrátí Internal Server Error 500, je odeslán vývojářům email obsahující chybovou zprávu.

V případě že je použito FlexiBee běžící na stejném serveru a je možné číst chybové logy je z nich vypreparován patřičný fragment a i ten je přidán do těla mailu.

Email obsahuje také dodatečné informace o licenci a povolených modulech.

Jako přílohy jsou také připojeny soubory obsahující tělo dotazu na server, tělo jeho odpovědi a soubor obsahující informace o curl.

Během života objektu se chyby evidují a odesílá se pouze první každého druhu. 


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

Pokud se ve vašem projektu rozhodnete podědit FlexiPeeHP a k těmto třídám napíšete 
testy také  poděděné z FlexiPeeHP např:

class HookRecieverTest extends \Test\FlexiPeeHP\ChangesTest

Přidejte do vašeho composer.json i cesty k původním testům:

    "autoload-dev": {
        "psr-4": {
            "Test\\": "vendor/spoje.net/flexipeehp/testing/src/FlexiPeeHP/testing/",
            "Test\\Ease\\": "vendor/vitexsoftware/ease-framework/tests/src/Ease",
            "Test\\FlexiPeeHP\\": "vendor/spoje.net/flexipeehp/testing/src/FlexiPeeHP/",
         }
    }



Ukázka
------

Ve složce Examples jsou tyto ukázky použití:

| Soubor                                                        | Popis                                 |
| ------------------------------------------------------------- | --------------------------------------|
| [AttachmentSaveToFile.php](Examples/AttachmentSaveToFile.php) | uložení přílohy do souboru
| [AttachmentUpload.php](Examples/AttachmentUpload.php)         | nahrání přílohy
| [AuthSessionIdUsage.php](Examples/AuthSessionIdUsage.php)     | Ukázka autentizace AuthSessionId
| [AuthentizeContact.php](Examples/AuthentizeContact.php)       | autentizace kontaktu
| [BatchOperation.php](Examples/BatchOperation.php)             | Použití filtru při dávkových operacích
| [CreateLabel.php](Examples/CreateLabel.php)                   | práce se štítky
| [DryRun.php](Examples/DryRun.php)                             | Testovací uložení (dry-run)
| [DownloadInvoicePDF.php](Examples/DownloadInvoicePDF.php)     | stažení PDF faktury
| [Error404.php](Examples/Error404.php)                         | práce s neexistujícími záznamy
| [FindOverdueInvoices.php](Examples/FindOverdueInvoices.php)   | najdi faktury po splatnosti
| [GetRecordWithRelation.php](Examples/GetRecordWithRelation.php) | Získání záznamu včetně dat z podevidence
| [InvoiceLockUnlock.php](Examples/InvoiceLockUnlock.php)       | Zamykání a odemykání záznamu
| [InvoiceCopy.php](Examples/InvoiceCopy.php)                   | vytvoření daňového dokladu ze zálohy
| [NajdiDanovyDokladKzalohovemu.php](Examples/NajdiDanovyDokladKzalohovemu.php) | dohledání dokladu
| [Naskladnění.php](Examples/Naskladnění.php)                   | Naskladní produkt se sériovými čísly
| [NewInvoice.php](Examples/NewInvoice.php)                     | Nová faktura se splatností vypsaná jako json
| [ObjectChaining.php](Examples/ObjectChaining.php)             | Řetězení objektů pro více operací v jenom pořadavku
| [ObjectCooperation.php](Examples/ObjectsCooperation.php)      | Sdílení data a parametrů připojení mezi objekty
| [PerformingActions.php](Examples/PerformingActions.php)       | Jak vykonávat akce nad dokladem akce. např. storno
| [ReadAddressColumns.php](Examples/ReadAddressColumns.php)     | vrať konkrétní sloupečky
| [sendInvoiceByMail.php](Examples/sendInvoiceByMail.php)       | odeslání faktury mailem
| [SendReminders.php](Examples/SendReminders.php)               | odeslání upomínek
| [SetContactAuth.php](Examples/SetContactAuth.php)             | nastavení autentizace
| [TestConnection.php](Examples/TestConnection.php)             | kontrola spojení 


Příklady použití:
-----------------

  * [Flexplorer](https://github.com/VitexSoftware/Flexplorer) Vývojářský nástoj a editor záznamů
  * [FlexiProXY](https://github.com/VitexSoftware/FlexiProxy) Modifikátor webového rozhraní FlexiBee
  * [Upomínač](https://github.com/VitexSoftware/php-flexibee-reminder) Odesílač upomínek
  * [Redmine2FlexiBee](https://github.com/VitexSoftware/Redmine2FlexiBee) Generuje faktury z odpracovaného času v Redmine
  * [FlexiPeeHP-Bricks](https://github.com/VitexSoftware/FlexiPeeHP-Bricks) Příklady a často požívaní třídy při práci s FlexiBee
  * [Shop4FlexiBee](https://github.com/VitexSoftware/Shop4FlexiBee) 

Reference:
----------

  * [Import dat z FAPI do FlexiBee](https://flexibee.info/fapi2flexibee/)  - blahasoft.cz
  * [Import dat z iDokladu do FlexiBee](https://flexibee.info/idoklad2flexibee/) - blahasoft.cz

Docker
------

    docker pull vitexsoftware/flexipeehp

Debian/Ubuntu
-------------

Pro Linux jsou k dispozici .deb balíčky. Prosím použijte repo:

    wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
    echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/ease.list
    aptitude update
    aptitude install flexipeehp

V tomto případě je potřeba do souboru composer.json vaší aplikace přidat:

```json
    "require": {
        "flexipeehp": "*",
        "ease-framework": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "/usr/share/php/FlexiPeeHP",
            "options": {
                "symlink": true
            }
        },
        {
            "type": "path",
            "url": "/usr/share/php/Ease",
            "options": {
                "symlink": true
            }
        }
    ]
```

Takže při instalaci závislostí bude vypadat nějak takto:

    Loading composer repositories with package information
    Installing dependencies from lock file
      - Installing ease-framework (1.1.3.3)
        Symlinked from /usr/share/php/Ease

      - Installing flexipeehp (0.2.1)
        Symlinked from /usr/share/php/FlexiPeeHP

A aktualizaci bude možné dělat globálně pro celý systém prostřednictvím apt-get.

Generujeme také balíček **flexipeehp-doc**, obsahující vývojářskou dokumentaci
generovanou pomcí programu ApiGen. Dokumnentace je online k nahlédnutí na adrese
http://flexibee-dev.spoje.net/flexipeehp/

Testování:

     cd /usr/share/doc/FlexiPeeHP/
     composer install
     php -f flexibeeping.php


![Debian Test](https://github.com/Spoje-NET/FlexiPeeHP/raw/master/Examples/flexipeehp-debian-test.png "Test")
    

Sestavení
---------

Debianí balíček vytvoříme spuštěním debian/deb-package.sh

Obraz pro Docker:

    docker build -t vitexsoftware/flexipeehp


FlexiBee knihovny pro další jazky:
----------------------------------

 * [Flexipy](https://github.com/JakubJecminek/flexipy)  (Python) [Dokumentace](http://pythonhosted.org/flexipy/index.html)
 * [Flexibee.rb](https://github.com/danpecher/flexibee.rb) (Ruby)
 * [UniMapper Flexibee extension](https://github.com/unimapper/flexibee) (PHP)
 * [Flexibee](https://github.com/adleritech/flexibee) (Java)
 
[Statistiky práce na projektu WakaTime](https://wakatime.com/@5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/projects/ypdqvdcmsg)
