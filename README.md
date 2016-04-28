# FlexiPeeHP
PHP Based Library for easy interaction with Czech accounting system Flexibee.

To test basic functionality please try to run testing/demo.php

PHP Knihovna pro snadnou práci s českým ekonomickým systémem [FlexiBee](https://www.flexibee.eu/)

#Poděkování
Vznik této knihovny by nebyl možný bez laskavé podpory společnosti [Spoje.Net](http://www.spoje.net), 
která hradila vývoj řešení pro propojení LMS / FlexiBee a importu skladu.

U společnosti Spoje.Net, je možné si objednat komerční podporu pro integraci
knihovny do vašich projektů. 

![Spoje.Net](https://github.com/Spoje-NET/FlexiPeeHP/raw/master/spoje-net_logo.gif "Spoje.Net")



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

