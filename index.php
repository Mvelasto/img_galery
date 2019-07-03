<?php
require 'funciones.php';

$fotos_por_pagina = 8;
//          (si esta setedo p), $pagina_actual= al num. SINO, $pagina_actual=1
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
//      (si $pagina_actual mayor 1), se saca la cuenta, sino. es 0
$inicio = ($pagina_actual > 1)? $pagina_actual*$fotos_por_pagina-$fotos_por_pagina : 0;

// ---- luego conecto la bd para traer las imagenes
$conexion = conectarse('galeria', 'root', '');
if (!$conexion) {
  die();
}

// ---- luego preparo la consulta       (CONTAMOS NUMERO DE ELEMENTOS EN BD)
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll(); // con print_r se ve q ya hace bien el procedimiento
/** esta variable fotos contiene el array q mostramos en las visras **/

// ---- si no hay fotos, redirigimos a otro lado
if (!$fotos) {
  header('Location: index.php');
}

// ---- ahora vamos a calcular cuantos elementos hay, para dividirlos por pagina
$statement = $conexion->prepare('SELECT FOUND_ROWS() as total_filas');
$statement->execute();
$total_post = $statement->fetch()['total_filas'];
$total_paginas = ceil($total_post/$fotos_por_pagina);
//echo $total_paginas;

require 'views/index.views.php';
