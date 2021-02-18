<?php include_once 'includes/templates/header.php' ?>


<h2>Datos de perfiles creados</h2>

<?php
      
      try{
      
        require_once('includes/funciones/bd_conexion.php');

        $sql = " SELECT perfil_id, nombre_perfil, email, contrasena, fecha_creacion, link_perfil, numero, link_perfil_real,  pais, nombre_usuario ";
        $sql .= " FROM crear_perfil ";
        $sql .= " INNER JOIN pais_perfiles ";
        $sql .= " ON crear_perfil.pais_id = pais_perfiles.paises_id ";
        $sql .= " INNER JOIN usuarios ";
        $sql .= " ON crear_perfil.admin_id = usuarios.usuario_id ";
        $sql .= " ORDER BY perfil_id ";

        $resultado = $conn->query($sql);

      }catch(\Exception $e){
        echo $e->getMessage();
      }


    ?>

    <div class="datos">
      <?php
        echo $sql;

        while($crear_perfil = $resultado->fetch_assoc() ) { ?>

          <!-- <pre>
              <?php  //var_dump($crear_perfil);  ?>
          </pre> -->
         
        <?php } ?>

    </div>


    <!--

        USUARIOS

    -->


    <?php
    
    try{
    
      require_once('includes/funciones/bd_conexion.php');

      $sql = " SELECT * FROM usuarios";
      $sql .= " ORDER BY usuario_id ";

      $resultado = $conn->query($sql);

    }catch(\Exception $e){
      echo $e->getMessage();
    }


  ?>

  <div class="usuarios contenedor">
    
    <?php
      echo $sql;

      $users = array();

      while($usuarios = $resultado->fetch_assoc() ) { 

        //OBTENER SOLO LOS NOMBRES DE LOS USUARIOS
        $nombre = $usuarios['nombre_usuario'];

        $usuario = array(

          'usuario' => $usuarios['nombre_usuario'],
          'pass' => $usuarios['contrasena']

        );
        $users[$nombre][] = $usuario;
        ?>


     



       
      <?php } // WHILE DE FETCH_ASSSOC()  ?>  

       ?>


      <?php  //IMPRIME TODOS LOS NOMBRES DE USUARIO ?>
      
        <table>
            <th> <h5>Usuario: </h5> </th>
            <th> <h5>Contraseña:</h5> </th> 
        </table>

        <?php foreach($users as $nombre => $lista_usuarios){ ?>
          <!-- <h3>
           <?php // echo $nombre; ?>
            <br>
          </h3> -->

          <?php foreach($lista_usuarios as $usuario){ ?>
              <h6>

              <div class="datos_usuarios">
                
                <div class="user">
                  <i class="fas fa-user"></i>
                  <p> <?php echo $usuario['usuario']; ?> </p>
                </div>
                <div class="pass">
                  <i class="fas fa-key"></i>
                  <p> <?php echo $usuario['pass']; ?> </p>
                </div>

              </div>

                <!-- <pre>
                   <?php // var_dump($usuario); ?>
                </pre> -->

              </h6>
           
           <?php }; //FIN DE FOREACH DATOS TOTALEES?>


        <?php }; //CIERRE FOREACH NOMBRES ?>



       <pre>
                    <?php // var_dump($users);  ?>
        </pre>
        
        

      
  </div>
   



    <?php
      $conn->close();
      
    ?>


    <?php include_once 'includes/templates/footer.php' ?>



