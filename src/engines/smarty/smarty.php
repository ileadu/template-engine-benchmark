<?php

include __DIR__ . "/../bootstrap.php";

$smarty = new Smarty();
$smarty->setEscapeHtml(true);
$smarty->setTemplateDir($directory . '/smarty/templates');
$smarty->setCompileDir($directory . '/smarty/compile');

function render($template, array $variables) {
    global $smarty;

    $smarty->assign($variables);
    $smarty->display($template);
}
