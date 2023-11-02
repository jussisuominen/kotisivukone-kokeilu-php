<?php

require_once __DIR__ . '/apurit/renderoi.php';
require_once __DIR__ . '/apurit/nayta_virheet.php';
require_once __DIR__ . '/apurit/lataa_sivut.php';
require_once __DIR__ . '/vendor/autoload.php';

$sivut = lataa_sivut();

$loader = new \Twig\Loader\FilesystemLoader("data");

$twig = new \Twig\Environment($loader);

foreach ($sivut as $id => $sivu) {
  echo "Generoidaan sivua $id";

  $generoitu_html = $twig->render('sivupohja.html', [
    'nykyisen_sivun_id' => $id,
    'sivut' => $sivut,
    'generoitava_sivu' => $sivu
  ]);
  
  try {
    file_put_contents("data/html_dokumentit/{$id}.html", $generoitu_html);
  } catch(Exception $e) {
    echo 'Virhe' . $e->getMessage();
  }
}

renderoi('html_dokumentti_generoitu', []);