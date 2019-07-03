<?php

function conectarse($dbname, $user, $pass){
  try {
    $conexion = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
    return $conexion;
  } catch (PDOException $e) {
    $var = $e->getMessage();
    return $var;
  }
}
// print_r(conectarse('galeria', 'root', ''));
