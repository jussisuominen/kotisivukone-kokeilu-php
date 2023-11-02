<?php
require_once __DIR__ . '/../apurit/lataa_sivut.php';
require_once __DIR__ . '/../apurit/tallenna_sivut.php';
require_once __DIR__ . '/../toiminnot/generoi_html_dokumentit.php';
require_once __DIR__ . '/../apurit/slugify.php';

function lisaa_sivu(string $otsikko, string $sisalto) {
  $id = slugify($otsikko);
  // Lataa sivujen data.
  $sivut = lataa_sivut();

  $laskuri = 1;

  while(isset($sivut[$id])) {
    $id = $id . $laskuri;
    $laskuri++;
  }

  // Luo uusi sivu käyttäjän syöttämän datan perusteella.
  $sivut[$id] = ["otsikko" => $otsikko, "sisalto" => $sisalto];
  // Tallenna sivujen data.
  tallenna_sivut($sivut);
  generoi_html_dokumentit();
}