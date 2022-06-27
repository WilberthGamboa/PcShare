// FORM
//variables inputs guardados
const inputPlacaMadre = document.getElementById("placaMadre");











const button = document.getElementById('add');
console.log(button); // 👉️ button#btn

const agregar = ()=>{
    let valorPlacaMadre= inputPlacaMadre.value;

    if (valorPlacaMadre=="") {
        inputPlacaMadre.focus();
       alerta();
       
        
    } else {

        Swal.fire({
            title: 'Guardado',
            text: 'Tu pc ha sido agregada',
            imageUrl: 'https://unsplash.it/400/200',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
          })
        
    }
    

    
}

button.onclick=agregar;

const alerta = ()=>{
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'El campo no puede estar vacio',
       
      })
}


































