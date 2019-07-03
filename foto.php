<?php
require 'funciones.php';
// ---- nos conectamos a la bd
$conexion = conectarse('galeria', 'root', '');
if (!$conexion) {
  die();
}
// ---- preparamos la id
$id = isset($_GET['id'])? (int)$_GET['id'] : false;
if(!$id){
  header('Location: index.php');
}

// ---- preparamos la consulta
$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$statement->execute(array(':id'=>$id));
$foto = $statement->fetch();

if (!$foto) {
    header('Location: index.php');
}

require 'views/fotos.view.php';
