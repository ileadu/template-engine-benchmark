<?php
use \eftec\bladeone\BladeOne;

include __DIR__ . "/../bootstrap.php";

$bladeone = new BladeOne(__DIR__ . '/templates', __DIR__ . '/compile');//, BladeOne::MODE_AUTO

function render($template, array $variables) {
    global $bladeone;

    $bladeone->run(str_replace('.tpl', '', $template), $variables);
}
