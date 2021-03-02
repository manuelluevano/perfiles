const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners(){
    //Cuando el formulario de crear o editar se ejecute

    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(){
    console.log('Precionaste...');
}