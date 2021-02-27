<?php include_once 'includes/templates/header.php' ?>



<?php
      
      try{
      
        require_once('includes/funciones/bd_conexion.php');

        $sql = " SELECT id_registrado, nombre_registrado, apellido_registrado, email_registrado, numero ";
        $sql .= " FROM newsletter ";
     
        $resultado = $conn->query($sql);

      }catch(\Exception $e){
        echo $e->getMessage();
      }


    ?>

    <div class="datos_perfiles contenedor">
      <?php
        echo $sql;

        $users = array();?>

      <section class="lista-registrados">

        <h2>Usuarios Registrados</h2>

            <div class="datos">
            
                  <thead>
                    <tr>
                      <th>id_Registrado: </th>
                      <th>Nombre registrado </th>
                      <th>Apellido registrado: </th>
                      <th>Email registrado: </th>
                      <th>Número: </th>
                    </tr>
                    
                  </thead>
              <?php  while($usuarios = $resultado->fetch_assoc() ) { ?>

              <table class="tabla_perfiles">
              
                  <tr class="tr_datos">
                    <td> <?php echo $usuarios['id_registrado'] ?> </td>
                    <td> <?php echo $usuarios['nombre_registrado'] ?> </td>
                    <td> <?php echo $usuarios['apellido_registrado'] ?> </td>
                    <td> <?php echo $usuarios['email_registrado'] ?> </td>
                    <td> <?php echo $usuarios['numero'] ?> </td>
                    
                  </tr>

              </table>
            </div>

              <!-- <pre>
                  <?php  //var_dump($usuarios);  ?>
              </pre> 
             -->
            <?php } ?>

        </section>
    </div>




    <?php
      $conn->close();
    ?>


  <?php include_once 'includes/templates/ubicacion.php' ?>


    <?php include_once 'includes/templates/footer.php' ?>



