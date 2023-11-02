<?php
require_once 'apurit/nayta_virheet.php';
require_once 'toiminnot/generoi_html_dokumentit.php';

if(isset($_POST['sivupohja_html'])) 
  file_put_contents('data/sivupohja.html', $_POST['sivupohja_html']);

if(isset($_POST['navbar_html']))
  file_put_contents('data/navbar.html', $_POST['navbar_html']);

if(isset($_POST['tyylit_css']))
  file_put_contents('data/html_dokumentit/tyylit.css', $_POST['tyylit_css']);

generoi_html_dokumentit();
?>

Sivupohja päivitetty onnistuneesti! <a href="index.php">Palaa etusivulle</a>.