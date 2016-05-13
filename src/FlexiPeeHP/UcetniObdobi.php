<?php
/**
 * System.Spoje.Net - Objekt účetního období.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Description of UsetniObdobi.
 *
 * @link https://demo.flexibee.eu/c/demo/ucetni-obdobi/properties Dokumentace
 * @author vitex
 */
class UcetniObdobi extends FlexiBee
{
    /**
     * Evidence FlexiBee
     * @var string
     */
    public $evidence = 'ucetni-obdobi';

    /**
     *
     * @param type $startYear
     * @param type $endYear
     */
    public function createYearsFrom($startYear, $endYear = null)
    {
        if (is_null($endYear)) {
            $endYear = date('Y');
        }

        for ($year = $startYear; $year <= $endYear; ++$year) {
            $obdobi = ['kod' => $year,
                'platiOdData' => $year.'-01-01T00:00:00',
                'platiDoData' => $year.'-12-31T23:59:59',
            ];
            $this->setData($obdobi);
            $result = $this->insertToFlexibee();
            $this->addStatusMessage(print_r($result, 1));
        }
    }
}
