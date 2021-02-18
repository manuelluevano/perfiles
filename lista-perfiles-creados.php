<?php include_once 'includes/templates/header.php' ?>


<h2>Datos de perfiles creados</h2>

<?php
      
      try{
      
        require_once('includes/funciones/bd_conexion.php');

        $sql = " SELECT perfil_id, nombre_perfil, email, contrasena_perfil, fecha_creacion,
        link_perfil, numero, link_perfil_real, pais, nombre_usuario ";
        $sql .= " FROM crear_perfil ";
        $sql .= " INNER JOIN pais_perfiles ";
        $sql .= " ON crear_perfil.pais_id = pais_perfiles.paises_id ";
        $sql .= " INNER JOIN usuarios ";
        $sql .= " ON crear_perfil.admin_id = usuarios.usuario_id ";

        $resultado = $conn->query($sql);

      }catch(\Exception $e){
        echo $e->getMessage();
      }


    ?>

    <div class="datos">
      <?php
        echo $sql;

        $users = array();

        while($usuarios = $resultado->fetch_assoc() ) { 
  
          //OBTENER SOLO LOS NOMBRES DE LOS USUARIOS
          $nombre = $usuarios['nombre_usuario'];
  
          $usuario = array(
  
            'usuario' => $usuarios['nombre_perfil'],
            'imei' => $usuarios['email'],
            'pass' => $usuarios['contrasena_perfil'],
            'fecha' => $usuarios['fecha_creacion'],
            'link_perfil' => $usuarios['link_perfil'],
            'numero' => $usuarios['numero'],
            'link_perfil_real' => $usuarios['link_perfil_real'],
            'pais' => $usuarios['pais'],
            'nombre_usuario' => $usuarios['nombre_usuario']
  
          );

          
          ?>
  
           <pre>
              <?php  var_dump($usuario);  ?>
          </pre> 
         
        <?php } ?>

    </div>


 



    <?php
      $conn->close();
      
    ?>


    <?php include_once 'includes/templates/footer.php' ?>



