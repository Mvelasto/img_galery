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
    <title>Mi Galeria  - Subir foto</title>
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1 class="titulo">Subir foto</h1>
      </div>
    </header>
    <div class="contenedor"> <!-- formulario envio de datos -->
      <form class="formulario" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <label for="foto">Seleccione su foto</label>
        <input type="file" name="foto" name="foto">

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" name="titulo">

        <label for="descripcion:">Descripción:</label>
        <textarea name="descripcion" placeholder="Introduzca una Descripción"></textarea>

        <?php if (!empty($error)): ?>
          <p class="error"><?= $error; ?></p>
        <?php endif; ?>

        <input type="submit" class="submit" value="Subir Foto">
      </form>
    </div>
    <!-- footer -->
    <footer>
      <p class="copyright"> Galeria M. Velásquez (2019)</p>
    </footer>
  </body>
</html>
