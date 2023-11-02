<?php
require_once 'apurit/lataa_sivut.php';
require_once 'toiminnot/paivita_sivu.php';
require_once 'apurit/renderoi.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['sivun_id'];
  $sivut = lataa_sivut();
  $otsikko = $sivut[$id]['otsikko'];
  $sisalto = $sivut[$id]['sisalto'];
  
  if(isset($_POST['sivun_otsikko']) && isset($_POST['sivun_sisalto'])) {
    $uusi_otsikko = $_POST['sivun_otsikko'];
    $uusi_sisalto = $_POST['sivun_sisalto'];
    paivita_sivu($id, $uusi_otsikko, $uusi_sisalto);
    echo '<div class="container-fluid m-4 text-center">Sivun tiedot päivitetty</div>';
  }
}

renderoi('sivulomake', ['toiminto' => 'muokkaa', 'lomakkeen_otsikko' => 'Muokkaa sivua', 'lomaketoiminto' => 'muokkaa_sivua.php', 
'sivun_id' => $id, 'sivun_otsikko' => $otsikko, 'sivun_sisalto' => $sisalto, 'painiketeksti' => "Päivitä sivu"]);