<?php

require_once __DIR__ . '/../vendor/autoload.php';

function renderoi(string $nakyma, array $parametrit) {
  $loader = new \Twig\Loader\FilesystemLoader("sivumallit-frontend");

  $twig = new \Twig\Environment($loader);

  echo $twig->render($nakyma . '.html', $parametrit);
}