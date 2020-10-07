<?php

include __DIR__ . "/../bootstrap.php";

$engine = new \League\Plates\Engine();
$plates = $engine::create($directory . '/plates/templates');

function render($template, array $variables) {
    global $plates;

    $plates->render($template, $variables);
}
