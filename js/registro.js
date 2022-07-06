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
        Swal.fire({
            title: 'Registro correcto',
            text: 'Tu usuario ha sido registrado con éxito',
            imageUrl: '../img/pcfeliz.jpg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
            type: "success"}).then(okay => {
                if (okay) {
                    document.form.submit();
               }
          })
     

        
    }
    
 
}


const alerta = ()=>{
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'El campo no puede estar vacio',
       
      })
}