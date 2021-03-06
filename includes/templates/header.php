<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Pefiles</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- COLORBOX  -->
  <link rel="stylesheet" href="css/colorbox.css">

  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


  <!--  FUNCION CONDICIONAL PARA CARGAGR ARCHIVOS DE ESTILO CUANDO ES NECESARIO Y MEJORAR EL PERFORMANCE DEL SITIO  -->  

  <?php

      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);

      if($pagina == 'index'){
        echo '  <link rel="stylesheet" href="css/agecheck.css"> ';
      }else if($pagina == ''){
        echo '';
      }

  ?>

  <meta name="theme-color" content="#fafafa">

</head>

<body>

  <header class="contenedor">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <h2>Perfiles Local</h2>
    <div class="reloj" id="print">

    </div>
  </header>