<?php

include __DIR__ . "/../bootstrap.php";

$loader = new \Twig\Loader\FilesystemLoader($directory . '/twig/templates');
$twig = new \Twig\Environment($loader, array(
    'cache' => $directory . '/twig/compile',
));

function render($template, array $variables) {
    global $twig;

    $template = $twig->load($template);
    $template->render($variables);
}
