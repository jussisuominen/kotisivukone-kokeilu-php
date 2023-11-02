<?php

require_once 'apurit/renderoi.php';
require_once 'apurit/lataa_sivut.php';

$sivut = lataa_sivut();
$sivu = 'index';

if(isset($_GET['sivu'])) {
  $sivu = $_GET['sivu'];
}

$sisalto = $sivut[$sivu]['sisalto'];

renderoi('esikatselu', []);