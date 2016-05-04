<?php
/**
 * System.Spoje.Net - Objekt Společnosti.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class Company extends FlexiBee
{
    /**
     * Základní namespace pro komunikaci s FlexiBEE.
     * @var string Jmený prostor datového bloku odpovědi
     */
    public $nameSpace = 'companies';

    /**
     * Default Line Prefix
     * @var string
     */
    public $prefix = '';

    /**
     * Company
     * @var string
     */
    public $agenda  = 'c';

    /**
     * Tato třída nepracuje sezvolenou firmou
     * @var string 
     */
    public $company = '';

}