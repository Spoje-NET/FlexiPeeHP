<?php
/**
 * FlexiPeeHP - Objekt adresáře.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2017 Spoje.Net
 */

namespace FlexiPeeHP;

/**
 * Adresář
 *
 * @link https://demo.flexibee.eu/c/demo/adresar/properties položky evidence
 */
class Adresar extends FlexiBeeRW
{
    /**
     * Evidence užitá objektem.
     *
     * @var string
     */
    public $evidence = 'adresar';

    /**
     * get Email address for Customer with primary contact prefered
     * 
     * @return string email of primary contact or address email or null
     */
    public function getNotificationEmailAddress()
    {
        $email     = null;
        $emailsRaw = $this->getFlexiData($this->getApiURL(),
            ['detail' => 'custom:id,email,kontakty(primarni,email)', 'relations' => 'kontakty']);
        if (is_array($emailsRaw)) {
            $emails = $emailsRaw[0];
            if (array_key_exists('email', $emails) && strlen(trim($emails['email']))) {
                $email = $emails['email'];
            }
            if (array_key_exists('kontakty', $emails) && !empty($emails['kontakty'])) {
                foreach ($emails['kontakty'] as $kontakt) {
                    if (($kontakt['primarni'] == 'true') && strlen(trim($kontakt['email']))) {
                        $email = $kontakt['email'];
                        break;
                    }
                }
            }
        }
        return $email;
    }
}
