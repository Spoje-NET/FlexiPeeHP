<?php
/**
 * FlexiPeeHP - Objekt vydané faktury.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
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
     * Provede spárování platby
     *
     * @link https://demo.flexibee.eu/devdoc/parovani-plateb Párování plateb
     * @param $doklad Banka|PokladniPohyb|InterniDoklad $doklad
     * @param string $zbytek ne|zauctovat|ignorovat|castecnaUhrada|castecnaUhradaNeboZauctovat|castecnaUhradaNeboIgnorovat
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
     * @param array $uhrada Vlastnosti úhrady je pole nepoviných vlastností
     *                      úhrady s těmito možnými položkami:
     *        string  'pokladna' identifikátor pokladny
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
}