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
    <title>Mi Galeria  - fotos</title>
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])): echo $foto['titulo']; ?>
        <?php else: echo $foto['imagen'] ?>
        <?php endif; ?>
        </h1>
      </div>
    </header>
    <div class="contenedor">
      <div class="foto"> <!-- armazon de fotos -->
        <img src="img/<?= $foto['imagen']; ?>" alt="">
        <p class="texto"><?= $foto['texto']; ?></p>
        <a href="index.php" class="regresar"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
      </div>
    </div>
    <!-- footer -->
    <footer>
      <p class="copyright"> Galeria M. Velásquez (2019)</p>
    </footer>
  </body>
</html>
