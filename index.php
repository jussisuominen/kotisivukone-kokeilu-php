<?php

require_once 'apurit/renderoi.php';
require_once 'apurit/lataa_sivut.php';

$sivut = lataa_sivut();
// Lataa sivumalliin liittyvät resurssit.
$sivupohja_html = file_get_contents('data/sivupohja.html');
$navbar_html = file_get_contents('data/navbar.html');
$tyylit_css = file_get_contents('data/html_dokumentit/tyylit.css');


renderoi('etusivu', ['sivut' => $sivut, 'sivupohja_html' => $sivupohja_html, 
  'navbar_html' => $navbar_html,
  'tyylit_css' => $tyylit_css]);