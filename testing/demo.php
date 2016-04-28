<?php

namespace FlexiPeeHP;

require_once './bootstrap.php';

$oPage     = new \Ease\TWB\WebPage('FlexiPeeHP');
$container = $oPage->addItem(new \Ease\TWB\Container(new \Ease\Html\H1Tag(_('FlexiBee Connection Test'))));

$nastaveni = new Nastaveni();

$info = $nastaveni->performRequest();

if (isset($info['nastaveni']) && count($info['nastaveni'])) {
    $return = new \Ease\TWB\LinkButton(constant('FLEXIBEE_URL'),
        $info['nastaveni'][0]['nazFirmy'], 'success');
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
