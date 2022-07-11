
//OBJETOS JS

class Computadora {
  constructor(id,nombre,procesador,placaMadre,tarjetaDeVideo,fuenteDePoder,almacenamiento,ram,gabinete,imagen){
     this.id=id;
     this.nombre=nombre;
     this.procesador=procesador;
     this.placaMadre=placaMadre;
     this.tarjetaDeVideo=tarjetaDeVideo;
     this.fuenteDePoder=fuenteDePoder;
     this.almacenamiento=almacenamiento;
     this.ram=ram;
     this.gabinete=gabinete;
     this.imagen=imagen;
  }

  
}




//const prueba = document.getElementById("prueba");
function hola(){
    alert("hola");
}
texto.onkeyup = () =>{
    loadDoc();
}

function generar(hola) {
    if (document.getElementById("body").hasChildNodes()) {
       
        while (document.getElementById("body").firstChild) {
            //The list is LIVE so it will re-index each call
            document.getElementById("body").removeChild(document.getElementById("body").firstChild);
        }
        
    }
    const prueba = document.getElementById("body");
    hola.forEach(item => {
        console.log(item);
       // console.log(item[0].nombre);
        //creamos el tr
        const tr = document.createElement("tr");
        
        //creamos los th

        const thNombre = document.createElement("td");
      
        const thPlacaMadre = document.createElement("td");
        const thProcesador = document.createElement("td");
        const thTarjetaDeVideo = document.createElement("td");
        const thFuenteDePoder = document.createElement("td");
        const thAlmacenamiento = document.createElement("td");
        const thRam = document.createElement("td");
        const thGabinete = document.createElement("td");
        const thImagen = document.createElement("td");
        const thPcUsuario = document.createElement("td");
        
        const boton = document.createElement("input");
        boton.type="button";
        boton.classList="btn btn-info";
        boton.value="descargar imagen";
        boton.href="../fotospc/"+item[0].imagen;
        boton.onclick=function(){
        
           const img = document.createElement("img");   
    img.addEventListener("load", () => {
        const a = document.createElement("a");   // Create in-memory anchor
        a.href = img.src;                        // href toward your server-image
        a.download = item[0].imagen;               // :)
        a.click();                               // Trigger click (download)
    });
    img.src = '../php/descargar.php?url='+ item[0].imagen;       // Request image from your server

        }

        const btnPcUsuario = document.createElement("input");
        btnPcUsuario.type="button";
        btnPcUsuario.classList="btn btn-dark";
        btnPcUsuario.value="Ver PC"

        btnPcUsuario.onclick=function(){

          var computadora = new Computadora(item[0].id,item[0].nombre,item[0].procesador,item[0].placaMadre,item[0].tarjetaDeVideo,item[0].fuenteDePoder,item[0].almacenamiento,item[0].ram,item[0].gabinete,item[0].imagen);
          pcJSON =JSON.stringify(computadora);
    
          localStorage.setItem("miComputadora", pcJSON);
          window.open("info.php");
          
        }

        
        thNombre.textContent=item[0].nombre;
        thProcesador.textContent=item[0].procesador;
        thPlacaMadre.textContent=item[0].placaMadre;
        thTarjetaDeVideo.textContent=item[0].tarjetaDeVideo;
        thFuenteDePoder.textContent=item[0].fuenteDePoder;
        thAlmacenamiento.textContent=item[0].almacenamiento;
        thRam.textContent=item[0].ram;
        thGabinete.textContent= item[0].gabinete;
        
        thImagen.appendChild(boton);
        thPcUsuario.appendChild(btnPcUsuario);
  
        tr.appendChild(thNombre);
        tr.appendChild(thProcesador);
        tr.appendChild(thPlacaMadre);
        tr.appendChild(thTarjetaDeVideo);
        tr.appendChild(thFuenteDePoder);
        tr.appendChild(thAlmacenamiento);
        tr.appendChild(thRam);
        tr.appendChild(thGabinete);
        tr.appendChild(thImagen);
        tr.appendChild(thPcUsuario);
        prueba.appendChild(tr);

    });



    
}

function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

     //   console.log(this.responseText);
      var hola= JSON.parse(this.responseText); 
        
      
      generar(hola);
      
    //LA MAMALONA
     //   console.log(json[0].nombre);
      }
    };
    var texto = document.getElementById("texto").value;
    //texto=toString(texto);
    xhttp.open("GET", "../php/computadoras.php?busca="+texto);
    xhttp.send();
  }


  function descargarImagen(imagen) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        

      }
    };
    console.log(imagen);
   xhttp.open("POST", "../php/descargar.php?perro="+imagen);
 //    xhttp.open("GET", "../php/descargar.php");
    xhttp.send();
  }





