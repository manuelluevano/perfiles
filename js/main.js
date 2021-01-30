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