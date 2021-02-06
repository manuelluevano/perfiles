<?php include_once 'includes/templates/header.php' ?>

  <main class="contenedor">

    <h3>Datos perfil nuevo</h3>

    <form action="respuesta.php" method="post">

      
      <label for="nombre">Ingresa el nombre del perfil</label>
        <input type="text" id="nombre" placeholder="Nombre de perfil" name="nombre">
  
      <label for="email">Ingresa el email</label>
        <input type="email" placeholder="Correo electronico" id="email" name="email">

      <label for="pass">Ingresa la contraseña</label>
        <input type="password" name="" id="pass" placeholder="Contraseña" name="pass">
      
      <label for="date">Ingresa la fecha de creación</label>
        <input type="date" id="date" name="trip-start" value="01-01-2020" 
        min="01-01-2020" max="2022-12-30" id="fecha" name="date">

      <label for="link">Link del perfil nuevo</label>
        <input type="text" placeholder="Link del perfil" id="link-perfil" name="link">

      <label for="numero">Número teléfonico</label>
        <input type="tel" placeholder="Número" id="telefono" name="numero">
        
         <h3>Datos perfil real</h3>
        
        <label for="link">Link perfil real</label>
        <input type="text" placeholder="Link del perfil" id="link-perfil-real" name="link_real">
        
        <label for="pais">Selecciona el país:</label>
        <select id="pais" name="pais">
          <option value="1">Argentina</option>
          <option value="2">Bolivia</option>
          <option value="3">Brasil</option>
          <option value="4">Chile</option>
          <option value="5">Colombia</option>
          <option value="6">Costa Rica</option>
          <option value="7">Cuba</option>
          <option value="8">Ecuador</option>
          <option value="9">El Salvador</option>
          <option value="10">Guatemala</option>
          <option value="11">Honduras</option>
          <option value="12">México</option>
          <option value="13">Panamá</option>
          <option value="14">Perú</option>
          <option value="15">Uruguay</option>
          <option value="16">Venezuela</option>
        </select>
        
        
        <!-- Crear array para almacenar los valor de los inputs  -->
        
        
        <input type="submit" class="btn btn-success" >
        
      </form>
      
        <div id="error" class="error">
          
          </div>
          
        </main>


      <?php
      
        try{
        
          require_once('includes/funciones/bd_conexion.php');

          $sql = "SELECT * FROM input_crear_perfil";
          $resultado = $conn->query($sql);

        }catch(\Exception $e){
          echo $e->getMessage();
        }


      ?>

      <div class="datos">
        <?php
          echo $sql;

          while($input_crear_perfil = $resultado->fetch_assoc() ) { ?>

            <pre>
                <?php  //var_dump($input_crear_perfil);  ?>
                <?php  echo $input_crear_perfil['nombre_perfil'];  ?>
            </pre>
           
          <?php } ?>

      </div>

     

      <?php
        $conn->close();
        
      ?>


      <?php include_once 'includes/templates/footer.php' ?>
