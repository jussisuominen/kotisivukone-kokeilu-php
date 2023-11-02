<?php
require_once __DIR__ . '/../apurit/lataa_sivut.php';
require_once __DIR__ . '/../vendor/autoload.php';
function generoi_html_dokumentit()
{
  // Lataa sivujen data.
  $sivut = lataa_sivut();

  // Alusta twig.
  $loader = new \Twig\Loader\FilesystemLoader("data");

  $twig = new \Twig\Environment($loader);

  // Generoi sivut sivudatan perusteella.
  foreach ($sivut as $id => $sivu) {
    $generoitu_html = $twig->render('sivupohja.html', [
      'nykyisen_sivun_id' => $id,
      'sivut' => $sivut,
      'generoitava_sivu' => $sivu
    ]);

    try {
      file_put_contents("data/html_dokumentit/{$id}.html", $generoitu_html);
    } catch (Exception $e) {
      echo 'Virhe' . $e->getMessage();
    }
  }
}