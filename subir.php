<?php
require 'funciones.php';

// ---- nos conectamos a la bd
$conexion = conectarse('galeria', 'root', '');
if ($conexion == false) {
  die();
}

// ---- vemos q este seteado el tipo de metodo y tenga valores
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
  // --- usamos el metodo getimagesize para verificar q tenga propiedades de img
  // --- si no es una imagen el archivo, marcaria error.
  $check = @getimagesize($_FILES['foto']['tmp_name']);
  if ($check !== false) {//         <--si todo esta bien
    $carpeta_destino = 'img/';//    <--creamos una ruta donde se guardaran y
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];//<--concatenamos.
    // --- luego con esta funcion copiamos el archivo en la ruta correspondiente
    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

    // --- ahora guardamos los datos en la bd
    $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');
    $statement->execute(array(':titulo'=>$_POST['titulo'], ':imagen'=>$_FILES['foto']['name'], ':texto'=>$_POST['descripcion']));

    // --- redirigimos al index si todo esta bien
    header('Location: index.php');    
  }else {
    $error = 'La imagen es muy pesada o tiene formato invalido.';
  }
}

require 'views/subir.view.php';
