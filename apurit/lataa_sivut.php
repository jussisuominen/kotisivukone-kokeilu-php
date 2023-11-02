<?php

function lataa_sivut() {
  $sivut_json = file_get_contents(__DIR__ . "/../data/sivut.json");
  $sivut = json_decode($sivut_json, true);

  return $sivut;
}