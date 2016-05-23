<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

$oPage     = new \Ease\TWB\WebPage('FlexiPeeHP');
$container = $oPage->addItem(new \Ease\TWB\Container(new \Ease\Html\H1Tag(_('FlexiBee Connection Test'))));

$company = new Company();
$info    = $company->getAllFromFlexibee();

if (isset($info) && count($info)) {
    if (isset($info['company']) && count($info['company']) && array_key_exists(0,
            $info['company'])) {
        foreach ($info['company'] as $companyInfo) {
            $return[] = new \Ease\TWB\LinkButton(constant('FLEXIBEE_URL').'/c/'.$companyInfo['dbNazev'],
                $companyInfo['nazev'], 'success');
        }
    } else { //Vrácena pouze jedna firma
        $return = new \Ease\TWB\LinkButton(constant('FLEXIBEE_URL').'/c/'.$info['company']['dbNazev'],
            $info['company']['nazev'], 'success');
    }
} else {
    $return = new \Ease\TWB\LinkButton(constant('FLEXIBEE_URL'),
        _('Chyba komunikace'), 'danger');
}

$button = $container->addItem($return);


if (isset($info['message'])) {
    if ($info['success'] == 'true') {
        $button->addItem(new \Ease\TWB\Label('success', $info['message']));
    } else {
        $button->addItem(new \Ease\TWB\Label('warning', $info['message']));
    }
}

$hooker    = new Hooks();
$chEnabled = $hooker->enableChanges();

if ($hooker->getChangesStatus()) {
    $hooker->addStatusMessage(_('ChangesApi Povoleno'));
    $oPage->container->addItem(new \Ease\TWB\Label('success',
        _('ChangesAPI povoleno')));
} else {
    $oPage->container->addItem(new \Ease\TWB\Label('warning',
        _('ChangesAPI zakázáno')));
}


$oPage->draw();
