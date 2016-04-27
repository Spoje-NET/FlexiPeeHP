<?php
/**
 * System.Spoje.Net - Objekt adresáře.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015,2016 Spoje.Net
 */

namespace FlexiPeeHP;

class FlexiBeeStatus extends FlexiBee
{
    /**
     * @var type
     */
    public $agenda = 'nastaveni';

    public function draw()
    {
        $info = $this->performRequest($this->agenda.'.json');

        if (isset($info['nastaveni']) && count($info['nastaveni'])) {
            $return = new \Ease\TWB\LinkButton(constant('FLEXIBEE_URL'), $info['nastaveni'][0]['nazFirmy'], 'success');
        } else {
            $return = new \Ease\TWB\LinkButton(constant('FLEXIBEE_URL'), _('Chyba komunikace'), 'danger');
        }

        $return->draw();
    }
}
