<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function tallenna_sivut($sivut) {
  $sivut_json = json_encode($sivut, JSON_UNESCAPED_UNICODE);
  
  file_put_contents(__DIR__ . "/../data/sivut.json", $sivut_json);
}