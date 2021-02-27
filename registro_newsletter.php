
    <?php if(isset($_POST['submit'])):  
        //CREANDO LAS VARIABLES 
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $num = $_POST['numero'];
        //Mandamos llamar el archivo donde tenemso la funcion creada
        // include_once 'includes/funciones/funciones.php';
        // Conexión a funciones.php - funcion que convierte en json
        // $funcion_datos = datos_registros_json($nom);
        //  
        try{
            require_once('includes/funciones/bd_conexion.php');
            $stmt = $conn->prepare("INSERT INTO newsletter (nombre_registrado, apellido_registrado, email_registrado, numero)
            VALUES (?,?,?,?) ");
            $stmt->bind_param("sssi", $nombre, $apellido, $email, $num);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('Location: registro_newsletter.php?exitoso=1');
          }catch(\Exception $e){
            echo $e->getMessage();
          }
    ?>
         <pre>    
            <?php var_dump($_POST); ?>
        </pre> 
    <?php endif; ?>


<pre>

          <?php if(isset($_GET['exitoso'])):

                    if($_GET['exitoso'] == "1"):
                        echo "Registro exitoso";
                    endif;
                    
                endif;

          ?>

<?php include_once 'includes/templates/ubicacion.php' ?>


<?php include_once 'includes/templates/footer.php' ?>

           
</pre>