<?php

namespace FlexiPeeHP;

require_once '../testing/bootstrap.php';

$oPage     = new \Ease\TWB\WebPage('FlexiPeeHP');
$container = $oPage->addItem(new \Ease\TWB\Container(new \Ease\Html\H1Tag(_('FlexiBee Connection Test'))));

$statuser = new Status();

$infoTable = new \Ease\Html\TableTag(null, ['class' => 'table']);

foreach ($statuser->getData() as $property => $value) {
    $infoTable->addRowColumns([$property, $value]);
}

$container->addItem(new \Ease\TWB\Panel(_('FlexiBee server info'), 'info',
    $infoTable));


$company = new Company();
$info    = $company->getAllFromFlexibee();

if (isset($info) && count($info)) {
    foreach ($info as $companyInfo) {
        $return[] = new \Ease\TWB\LinkButton(constant('FLEXIBEE_URL').'/c/'.$companyInfo['dbNazev'],
            $companyInfo['nazev'], 'success');
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

$changer = new Changes();
$changer->enable();

if ($changer->getStatus()) {
    $changer->addStatusMessage(_('ChangesApi Povoleno'));
    $container->addItem(new \Ease\TWB\Label('success', _('ChangesAPI povoleno')));
} else {
    $container->addItem(new \Ease\TWB\Label('warning', _('ChangesAPI zakázáno')));
}


$oPage->draw();
