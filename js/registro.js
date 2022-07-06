const btnRegistro = document.getElementById("registro");
const textUsuario = document.getElementById("usuario");
const textContrasena = document.getElementById("contrasena");
//const formulario = document.getElementByName("form");


btnRegistro.onclick = () =>{
    if (textUsuario.value==""||textUsuario.value==" ") {
        textUsuario.focus();
        alerta();

    }if(textContrasena.value==""||textContrasena.value==" "){
        textContrasena.focus();
        alerta();
    }
    else {
        document.form.submit();
    }
    
 
}


const alerta = ()=>{
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'El campo no puede estar vacio',
       
      })
}