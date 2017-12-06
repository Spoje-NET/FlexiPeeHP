<?php
/**
 * FlexiPeeHP - Objekt vydané faktury.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Faktura vydaná
 *
 * @link https://demo.flexibee.eu/c/demo/faktura-vydana/properties položky evidence
 */
class FakturaVydana extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'faktura-vydana';

    /**
     * Add Data to evidence Branch
     * Přidá položky do dokladu a nastaví jim správně flag "ucetni"
     *
     * @see Relations
     *
     * @param array  $data pole dat
     * @param string $relationPath path evidence (relation) pro vkládaná data
     *
     * @return boolean Description
     */
    public function addArrayToBranch($data, $relationPath)
    {
        if (($relationPath == 'polozky-dokladu') || ($relationPath == 'polozky-faktury')) {
            switch ($this->getDataValue('typDokl')) {
                case 'code:DOBR':
                case 'code:DOBROPIS':
                case 'code:FAKTURA':
                    $data['ucetni'] = true;
                    break;
                case 'code:ZÁLOHA':
                case 'code:ZALOHA':
                default:
                    $data['ucetni'] = false;
                    break;
            }
        }
        return parent::addArrayToBranch($data, $relationPath);
    }

    /**
     * Provede spárování platby s dokladem
     *
     * @link https://demo.flexibee.eu/devdoc/parovani-plateb Párování plateb
     * 
     * @param $doklad Banka|PokladniPohyb|InterniDoklad S jakým dokladem spárovat ?
     * @param $zbytek string ne|zauctovat|ignorovat|castecnaUhrada|castecnaUhradaNeboZauctovat|castecnaUhradaNeboIgnorovat
     * 
     * @return Banka|PokladniPohyb|InterniDoklad Matched document
     */
    public function sparujPlatbu($doklad, $zbytek = 'ignorovat')
    {
        $sparovani                       = ['uhrazovanaFak' => $this];
        $sparovani['uhrazovanaFak@type'] = $this->evidence;
        $sparovani['zbytek']             = $zbytek;
        $doklad->setDataValue('sparovani', $sparovani);
        return $doklad->insertToFlexiBee();
    }

    /**
     *  Hotovostní platba faktury.
     *
     * @link https://demo.flexibee.eu/devdoc/hotovostni-uhrada/ Hotovostní úhrada
     * @link https://demo.flexibee.eu/c/demo/pokladna Pokladny
     * @link https://demo.flexibee.eu/c/demo/typ-pokladni-pohyb Typy dokladů
     * @param float $value částka k úhradě
     * @param array $uhrada pole nepoviných vlastností úhrady s těmito možnými položkami:
     *        string|Pokladna  'pokladna' identifikátor pokladny
     *        string  'typDokl' kod typu pokladniho dokladu
     *        boolean 'kurzKDatuUhrady'
     *        string  'uhrazujiciDokl' Pokud uvedeno není, vždy se vytvoří nový
     *                                pokladní doklad.
     *        string  'rada' dokladová řada pro vytvářený pokladní doklad.
     *                      Např.:code:POKLADNA+
     *        string  'datumUhrady' sql formát. Výchozí: dnes
     * @return array výsledek pokusu o provedení úhrady
     */
    public function hotovostniUhrada($value, $uhrada = [])
    {
        if (!isset($uhrada['pokladna'])) {
            $uhrada['pokladna'] = 'code:POKLADNA KČ';
        }

        if (!isset($uhrada['typDokl'])) {
            $uhrada['typDokl'] = 'code:STANDARD';
        }

        if (!isset($uhrada['kurzKDatuUhrady'])) {
            $uhrada['kurzKDatuUhrady'] = false;
        }

        if (!isset($uhrada['datumUhrady'])) {
            $uhrada['datumUhrady'] = date('Y-m-d');
        }

        $uhrada['castka'] = $value;

        $this->setDataValue('hotovostni-uhrada', $uhrada);
        return $this->insertToFlexiBee();
    }

    /**
     * Odpočet zálohy (vystavení daňového dokladu k platbě)
     * 
     * @link https://demo.flexibee.eu/devdoc/odpocet-zaloh Odpočet záloh a ZDD
     * @param FakturaVydana $invoice zálohová faktura
     * @param array $odpocet Vlastnosti odpočtu
     * @return array
     */
    public function odpocetZalohy($invoice, $odpocet = [])
    {
        if (!isset($odpocet['castkaMen'])) {
            $odpocet['castkaMen'] = $invoice->getDataValue('sumCelkem');
        }
        $odpocet['doklad'] = $invoice;

        $this->setDataValue('odpocty-zaloh', ['odpocet' => $odpocet]);
        return $this->insertToFlexiBee();
    }

    /**
     * Odpočet ZDD
     *
     * @link https://demo.flexibee.eu/devdoc/odpocet-zaloh Odpočet záloh a ZDD
     * @param FakturaVydana $invoice zálohová faktura
     * @param array $odpocet Vlastnosti odpočtu
     * @return array
     */
    public function odpocetZDD($invoice, $odpocet = [])
    {
        if (!isset($odpocet['castkaZaklMen'])) {
            $odpocet['castkaZaklMen'] = $invoice->getDataValue('sumZklZakl');
        }
        if (!isset($odpocet['castkaSnizMen'])) {
            $odpocet['castkaSnizMen'] = $invoice->getDataValue('sumZklSniz');
        }
        if (!isset($odpocet['castkaSniz2Men'])) {
            $odpocet['castkaSniz2Men'] = $invoice->getDataValue('sumZklSniz2');
        }
        if (!isset($odpocet['castkaOsvMen'])) {
            $odpocet['castkaOsvMen'] = $invoice->getDataValue('sumOsv');
        }
        if (!isset($odpocet['id'])) {
            $odpocet['id'] = 'ext:odpocet1';
        }
        $odpocet['doklad'] = $invoice;

        $this->setDataValue('odpocty-zaloh', ['odpocet' => $odpocet]);
        return $this->insertToFlexiBee();
    }

    public function vytvorVazbuZDD($modul = 'banka' /* pokladna */)
    {
        $headersBackup                            = $this->defaultHttpHeaders;
        $this->defaultHttpHeaders['Accept']       = 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
        $this->defaultHttpHeaders['Content-Type'] = 'application/x-www-form-urlencoded';
        $this->setPostFields(['module' => $modul, 'submit' => 'OK']);
        $this->performRequest($this->myKey().'/vytvor-vazbu-zdd/'.$idBanky,
            'POST', 'html');
        $this->defaultHttpHeaders                 = $headersBackup;

        return $this->lastResponseCode == 201;
    }
}