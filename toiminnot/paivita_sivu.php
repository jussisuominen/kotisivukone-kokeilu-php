<?php
require_once __DIR__ . '/../apurit/lataa_sivut.php';
require_once __DIR__ . '/../apurit/tallenna_sivut.php';
require_once __DIR__ . '/../toiminnot/generoi_html_dokumentit.php';
require_once __DIR__ . '/../apurit/slugify.php';

function paivita_sivu(string $id, string $otsikko, string $sisalto) {
  // Lataa sivujen data.
  $sivut = lataa_sivut();

  // Päivitä sivu käyttäjän syöttämän datan perusteella.
  $sivut[$id] = ["otsikko" => $otsikko, "sisalto" => $sisalto];
  // Tallenna sivujen data.
  tallenna_sivut($sivut);
  generoi_html_dokumentit();
}