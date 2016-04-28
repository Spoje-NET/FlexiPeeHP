<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

$oPage     = new \Ease\TWB\WebPage('FlexiPeeHP');
$container = $oPage->addItem(new \Ease\TWB\Container(new \Ease\Html\H1Tag(_('FlexiBee Connection Test'))));

$nastaveni = new Nastaveni();

$info = $nastaveni->getFlexiRow(1);

if (isset($info) && count($info)) {
    $return = new \Ease\TWB\LinkButton(constant('FLEXIBEE_URL'),
        $info['nazFirmy'], 'success');
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


$oPage->draw();
