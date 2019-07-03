<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width. user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/estilos.css">
    <title>Mi Galeria</title>
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1 class="titulo">Galeria de Imágenes</h1>
      </div>
    </header>

    <section class="fotos">
      <div class="contenedor">

        <!-- Recordemos q este archivo esta enlazado a index.php y este tiene las consultas preparadas -->
        <?php foreach ($fotos as $foto): ?>
          <div class="thumb">
            <a href="foto.php?id=<?= $foto['id']; ?>">
              <img src="img/<?= $foto['imagen']; ?>" alt="">
            </a>
          </div>
        <?php endforeach; ?>

          <!-- Paginacion -->
          <div class="paginacion">
            <?php if ($pagina_actual > 1): ?>
              <a href="index.php?p=<?= $pagina_actual-1; ?>" class="izquierda"><i class="fa fa-arrow-left" aria-hidden="true"></i> Pagina Anterior</a>
            <?php endif; ?>

            <?php if ($total_paginas != $pagina_actual): ?>
              <a href="index.php?p=<?= $pagina_actual+1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <?php endif; ?>
            <!-- <a href="#" class="izquierda"><i class="fa fa-arrow-left" aria-hidden="true"></i> Pagina Anterior</a>
            <a href="#" class="derecha">Pagina Siguiente <i class="fa fa-arrow-right" aria-hidden="true"></i></a> -->
          </div>
      </div>
    </section>
    <!-- footer -->
    <footer>
      <p class="copyright"> Galeria M. Velásquez (2019)</p>
    </footer>
  </body>
</html>
