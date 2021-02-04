<?php include_once 'includes/templates/header.php' ?>


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


  <?php include_once 'includes/templates/footer.php' ?>
