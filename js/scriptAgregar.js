// FORM
//variables inputs guardados
const inputPlacaMadre = document.getElementById("placaMadre");
const inputProcesador = document.getElementById("procesador");
const inputTarjetaDeVideo = document.getElementById("tarjetaDeVideo");
const inputFuenteDePoder = document.getElementById("fuenteDePoder");
const inputAlmacenamiento = document.getElementById("almacenamiento");
const inputRam= document.getElementById("ram");
const inputGabinete= document.getElementById("gabinete");
const inputimg = document.getElementById("file");









const button = document.getElementById('add');
console.log(button); // 👉️ button#btn

const agregar = ()=>{
    var valorPlacaMadre= inputPlacaMadre.value;
    var valorInputProcesador = inputProcesador.value;
    var valorTarjetaDeVideo = inputTarjetaDeVideo.value;
    var valorFuenteDePoder = inputFuenteDePoder.value;
    var valorAlmacenamiento = inputAlmacenamiento.value;
    var valorRam = inputRam.value;
    var valorGabinete = inputGabinete.value;
    var valorFile = inputimg.value;
    

    if (valorPlacaMadre=="") {
        inputPlacaMadre.focus();
        alerta();
       
    

    } 
    if (valorInputProcesador=="") {
        inputProcesador.focus();
        alerta();
        
    } 

    if (valorTarjetaDeVideo=="") {
        inputTarjetaDeVideo.focus();
        alerta();
        
    }
    if (valorFuenteDePoder=="") {
        inputFuenteDePoder.focus();
        alerta();
        
    }
    if (valorAlmacenamiento=="") {
        inputAlmacenamiento.focus();
        alerta();
        
    }
    if (valorRam=="") {
        inputRam.focus();
        alerta();
        
    }
    if (valorGabinete=="") {
        inputGabinete.focus();
        alerta();
        
    }
    if (valorFile=="") {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'No se ha agregado una imagen',
           
          })
        
        
    }
    if (valorPlacaMadre!=""&& valorInputProcesador!=""&&valorTarjetaDeVideo!=""&&valorFuenteDePoder!=""&&valorAlmacenamiento!=""&&valorRam!=""&&valorGabinete!=""&&valorFile!="") {
        Swal.fire({
            title: 'Guardado',
            text: 'Tu pc ha sido agregada',
            imageUrl: 'https://unsplash.it/400/200',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
          }).then(okay => {
            if (okay) {
                document.getElementById("form").submit();
            
           }
         });
alert("hola");
         document.getElementById("form").submit();
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


































