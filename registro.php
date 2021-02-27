<?php include_once 'includes/templates/header.php' ?>

<a href="lista_registrados_newsletter.php" class="btn btn-secondary">Lista de Registrados</a>


<body class="">
  <h2>Registrate a nuestro Newsletter</h2>  

  
  <form action="registro_newsletter.php" method="post">

      
<label for="nombre">Nombre:</label>
  <input type="text" id="nombre_cliente" placeholder="Ingresa tu nombre" name="nombre">

<label for="apellido">apellido:</label>
  <input type="text" id="apellido_cliente" placeholder="Ingresa tu apellido" name="apellido">

<label for="email">Ingresa el email</label>
  <input type="email" placeholder="Correo electronico" id="email_cliente" name="email">

<label for="numero">Número teléfonico</label>
  <input type="tel" placeholder="Número" id="telefono_cliente" name="numero">
  
  
  
  <!-- Crear array para almacenar los valor de los inputs  -->
  
  
  <input type="submit" class="btn btn-success" id="btn_newsletter" name="submit" >


  
</form>

  
</body>



<?php include_once 'includes/templates/ubicacion.php' ?>


<?php include_once 'includes/templates/footer.php' ?>
