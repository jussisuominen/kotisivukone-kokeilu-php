<?php
require_once 'apurit/lataa_sivut.php';
require_once 'apurit/renderoi.php';

renderoi('muokkaa_sivupohjaa', [
    'sivupohja_html' => file_get_contents('data/sivupohja.html'),
    'navbar_html' => file_get_contents('data/navbar.html'),
    'tyylit_css' => file_get_contents('data/html_dokumentit/tyylit.css'),
  ]
);