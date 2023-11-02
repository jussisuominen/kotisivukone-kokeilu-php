<?php
require_once 'toiminnot/lisaa_sivu.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $otsikko = $_POST['sivun_otsikko'];
  $sisalto = $_POST['sivun_sisalto'];
  lisaa_sivu($otsikko, $sisalto);
}

require_once 'apurit/renderoi.php';

renderoi('sivulomake', ['lomakkeen_otsikko' => 'Lisää sivu', 'lomaketoiminto' => 'lisaa_sivu.php', 'painiketeksti' => 'Lisää sivu']);