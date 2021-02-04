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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


  <meta name="theme-color" content="#fafafa">

</head>

<body>

  <header class="contenedor">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <h2>Perfiles Local</h2>
    <div class="reloj" id="print">

    </div>
  </header>

  <main class="contenedor">
    <br>
    <h3>Datos perfil creado</h3>
    <br>
    <br>
    <!-- Crear Variables   -->
    <?php $resultado = $_POST; ?>
    <?php $nombre = $resultado['nombre']; ?>
    <?php $email = $resultado['email']; ?>
    <?php $fecha = $resultado['trip-start']; ?>
    <?php $link = $resultado['link']; ?>
    <?php $numero = $resultado['numero']; ?>
 


    <!-- Validar que los campos no lleguen vacios  -->

    <?php 
      if(! (filter_has_var(INPUT_POST, 'nombre')  && (strlen(filter_input(INPUT_POST, 'nombre')) > 0 ))){
        echo "El nombre es obligatorio";
      }else{ ?>
        <?php $nuevo_nombre = filter_var($nombre, FILTER_SANITIZE_STRING); ?>
        <p> Nombre: <?php echo $nuevo_nombre; ?> </p>
      
<?php }    ?>
<hr>
<?php 
      if(! (filter_has_var(INPUT_POST, 'email')  && (strlen(filter_input(INPUT_POST, 'email')) > 0 ))){
        echo "El email es obligatorio";
      }else{ ?>
        <?php $nuevo_email = filter_var($email, FILTER_SANITIZE_STRING); ?>
        <p> Correo electronico: <?php echo $nuevo_email; ?> </p>
      
<?php }    ?>
<hr>
<?php 
      if(! (filter_has_var(INPUT_POST, 'link')  && (strlen(filter_input(INPUT_POST, 'link')) > 0 ))){
        echo "El link es obligatorio";
      }else{ ?>
        <?php $nuevo_link = filter_var($link, FILTER_SANITIZE_STRING); ?>
        <p> Link: <?php echo $nuevo_link; ?> </p>
      
<?php }    ?>
<hr>
<?php 
      if(! (filter_has_var(INPUT_POST, 'numero')  && (strlen(filter_input(INPUT_POST, 'numero')) > 0 ))){
        echo "El numero es obligatorio";
      }else{ ?>
        <?php $nuevo_numero = filter_var($numero, FILTER_SANITIZE_STRING); ?>
        <p> Número: <?php echo $nuevo_numero; ?> </p>
      
<?php }    ?>
<hr>

<?php if(($fecha) > 0) { ?>
      <p> Fecha de creación del perfil: <?php echo $fecha; ?> </p>
    <?php } else{
      echo "La fecha es obligatoria";
    } ?>



  </main>


  <footer>

  </footer>


  <!-- Add your site or application content here -->
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>   
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
