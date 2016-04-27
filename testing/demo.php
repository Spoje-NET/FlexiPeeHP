<?php

namespace FlexiPeeHP;

require_once './bootstrap.php';

$oPage = new \Ease\TWB\WebPage('FlexiPeeHP');
$oPage->addItem(new FlexiBeeStatus());
$oPage->draw();
