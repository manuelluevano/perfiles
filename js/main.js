
(function(){
    "use strict";

     $(document).ready(function(){
         $.ageCheck({
           "redirectTo" : "http:localhost:8888/perfiles/index.php",
           "title" : "Verificador de edad"
         });
      });


    document.addEventListener('DOMContentLoaded', function(){

    console.log("Página cargada!");


    console.log("");



    
     
    // // AJAX archivo .txt
    
    //  // Variable para seleccionar boton
    //  var btnCargar = document.getElementById('cargar');
    
    //  function cargarContenidoAjax(){

    //     //  CREAR NUESTRO XMLHTTPREQUEST
    //     var xhr = new XMLHttpRequest();


    //     //  Abrimos la conexion para archivo .txt
    //     xhr.open("GET", "texto_prueba.txt", true);
    //     xhr.onreadystatechange = function(){
    //         console.log(xhr.readyState);
    //         if(xhr.readyState == 4 && xhr.status == 200){
    //             var contenido = document.getElementById('contenido');
    //             contenido.innerHTML = xhr.responseText;
    //             console.log("Se cargo correctamente");
    //         }
    //     }

    //     // Enviar 
    //     xhr.send();

    //     //  alert("Funciona");
    //  };
    
    //  btnCargar.addEventListener('click', cargarContenidoAjax );
    
    

     // AJAX servidor.php
    
     // Variable para seleccionar boton
     var btnCargar = document.getElementById('cargar');
    
     function cargarContenidoAjax(){

        //  CREAR NUESTRO XMLHTTPREQUEST
        var xhr = new XMLHttpRequest();


        //  Abrimos la conexion para archivo .txt
        xhr.open("GET", "servidor.php", true);
        xhr.onreadystatechange = function(){
            console.log(xhr.readyState);
            if(xhr.readyState == 4 && xhr.status == 200){
                var json = JSON.parse(xhr.responseText);
                var contenido = document.getElementById('contenido');
                contenido.innerHTML = json.fullstack;
                console.log(json);
            }
        }

        // Enviar 
        xhr.send();

        //  alert("Funciona");
     };
    
     btnCargar.addEventListener('click', cargarContenidoAjax );



    
    
    
    /*   Variables de los inputs  */ 
    var nombre = document.getElementById('nombre');
    var email = document.getElementById('email');
    var pass = document.getElementById('pass');
    var fecha = document.getElementById('fecha');
    var link_perfil = document.getElementById('link-perfil');
    var numero = document.getElementById('telefono');
    var link_perfil_real = document.getElementById('link-perfil-real');
    var pais = document.getElementById('pais');
    
    
    var error = document.getElementById('error');
    
    
    
    /*   Valida inputs */
    
    nombre.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampoEmail);
    pass.addEventListener('blur', validarCampos);
    link_perfil.addEventListener('blur', validarCampos);
    numero.addEventListener('blur', validarCampos);
    link_perfil_real.addEventListener('blur', validarCampos);
    
    /*  Function validar inputs */
    function validarCampos(){
        if(this.value == ''){
            error.innerHTML = 'Completa todos los campos';
            this.style.border = "1px solid red";
            error.style.borderBottom = "2px solid red";
        }
        else{
            error.innerHTML = "";
            this.style.border = "1px solid #e1e1e1";
        }
    }
    
    /** Validar campo email  **/
    function validarCampoEmail(){
        if(email.value.indexOf("@") > -1){
            error.style.display = 'none';
            error.style.borderBottom = 'none';
        }else{
            error.style.display = 'block';
            error.innerHTML = 'Debe contener un @';
            error.style.borderBottom = '2px solid red';
            
            
        }
    }
    
   
    
    
});  //DOM Content Loaded
})();

$( document ).ready(function() {
    console.log( "Página cargada correctamente - con jQuery" );

    // Reloj actulización automática 

    function relooj(){
        var reloj = new Date();

        var hora = reloj.getHours();
        var minutos = reloj.getMinutes();
        var segundos = reloj.getSeconds();

        var recarga = setInterval(relooj, 500);

        document.getElementById('print').innerHTML =  hora + ' : ' + minutos + ' : ' +  segundos;

    };
    
    relooj();



     /*   REGISTRO NEWSLETTER  */ 

     var registro_newsletter = document.getElementById('btn_newsletter');
     var nombre_cliente = document.getElementById('nombre_cliente');

     /*  Function validar inputs del newsletter */
     function validarBoton(){
         if(nombre_cliente.value == ''){
             registro_newsletter.disabled = true;
         }
         else{
             registro_newsletter.disabled = false;
         }
     }
 
     
     validarBoton();
     
     /*  Resiclamos una funcion ya utilizada*/
     nombre_cliente.addEventListener('blur', validarBoton);

     
     
     


     // COLORBOX

     $('.boton_newsletter').colorbox({inline:true, width:"50%"});




});