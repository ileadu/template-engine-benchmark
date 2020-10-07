<?php

include __DIR__ . "/../bootstrap.php";

$mustache = new \Mustache_Engine(
    [
	'entity_flags' => ENT_QUOTES,
        'cache' => $directory . '/mustache/compile',
	'loader' => new \Mustache_Loader_FilesystemLoader($directory . '/mustache/templates'),
    ]
);

function render($template, array $variables) {
    global $mustache;

    $mustache->render($template, $variables);//loads templates/foo.mustache
}
