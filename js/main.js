(function(){
    "use strict";

    document.addEventListener('DOMContentLoaded', function(){

    console.log("Página cargada!")


    /*   Variables de los inputs  */ 
     var nombre = document.getElementById('nombre');
     var email = document.getElementById('email');
     var pass = document.getElementById('pass');
     var fecha = document.getElementById('fecha');
     var link_perfil = document.getElementById('link-perfil');
     var numero = document.getElementById('numero');
     var link_perfil_real = document.getElementById('link-perfil-real');
     var pais = document.getElementById('pais');


     var error = document.getElementById('error');

    /*   Valida inputs */
    
    
    nombre.addEventListener('blur', function(){
        
        if(this.value == ''){
            error.innerHTML = 'Completa todos los campos';
            this.style.border = "1px solid red";
            error.style.borderBottom = "2px solid red";
        }
    });


    });  //DOM Content Loaded
})();