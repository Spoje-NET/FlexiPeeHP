<?php
/**
 * System.Spoje.Net - Objekt řady pokladního pohybu.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class RadaPokladniPohyb extends FlexiBee
{
    public $agenda = 'rada-pokladni-pohyb';

    public function getNextRecordCode($code = null)
    {
        if (is_null($code)) {
            $code = $this->getId();
        }
        $crID = null;
        if (is_string($code)) {
            $sro = $this->performRequest($this->agenda.'/(kod=\''.$code.'\').json');
            if (count($sro[$this->agenda])) {
                $crID = current(current($sro[$this->agenda]));
            }
        } else {
            $crID = $code;
        }

        $cr                = $this->performRequest($this->agenda.'/'.$crID.'.json');
        $radaPokladniPohyb = current($cr[$this->agenda]);
        $crInfo            = end($radaPokladniPohyb['polozkyRady']);

        $cislo = $crInfo['cisAkt'] + 1;
        if ($crInfo['zobrazNuly'] == 'true') {
            return $crInfo['prefix'].sprintf('%\'.0'.$crInfo['cisDelka'].'d',
                    $cislo).'/'.date('y');
        } else {
            return $crInfo['prefix'].$cislo.'/'.date('y');
        }
    }

    public function incrementNextRecordCode($code = null)
    {
        if (is_null($code)) {
            $code = $this->getId();
        }

        if (is_string($code)) {
            $sro  = $this->performRequest($this->agenda.'/(kod=\''.$code.'\').json');
            $crID = current(current($sro[$this->agenda]));
        } else {
            $crID = $code;
        }

        $cr                = $this->performRequest($this->agenda.'/'.$crID.'.json');
        $radaPokladniPohyb = current($cr[$this->agenda]);
        $crInfo            = end($radaPokladniPohyb['polozkyRady']);

        $cislo = $crInfo['cisAkt'] + 1;
    }
}