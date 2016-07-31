<?php
/**
 * FlexiPeeHP - Objekt účetního období.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Class for Accounting period handling.
 *
 * @link https://demo.flexibee.eu/c/demo/ucetni-obdobi/properties Položky evidence
 * @author vitex
 */
class UcetniObdobi extends FlexiBeeRW
{
    /**
     * Evidence FlexiBee
     * @var string
     */
    public $evidence = 'ucetni-obdobi';

    /**
     * Create requested Accounting period
     *
     * @param int $startYear first year to create
     * @param int $endYear   last yar to create - default is current year
     *
     * @return array Results
     */
    public function createYearsFrom($startYear, $endYear = null)
    {
        $result = [];
        if (is_null($endYear)) {
            $endYear = date('Y');
        }

        for ($year = $startYear; $year <= $endYear; ++$year) {
            $obdobi   = ['kod' => $year,
                'platiOdData' => $year.'-01-01T00:00:00',
                'platiDoData' => $year.'-12-31T23:59:59',
            ];
            $this->setData($obdobi);
            $result[] = $this->insertToFlexibee();
            $this->dataReset();
        }
        return $result;
    }

}
