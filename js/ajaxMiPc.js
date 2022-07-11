
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
     
        const tr = document.createElement("tr");
        


        const thNombre = document.createElement("td");
      
        const thPlacaMadre = document.createElement("td");
        const thProcesador = document.createElement("td");
        const thTarjetaDeVideo = document.createElement("td");
        const thFuenteDePoder = document.createElement("td");
        const thAlmacenamiento = document.createElement("td");
        const thRam = document.createElement("td");
        const thGabinete = document.createElement("td");
        const thImagen = document.createElement("td");
        const thBtnDescargar = document.createElement("td");
        const thBtnEditar = document.createElement("td");
        const thBtnBorrar = document.createElement("td");
  


        const boton = document.createElement("input");
        boton.type="button";
        boton.classList="btn btn-info";
        boton.value="Descargar imagen";
        boton.href="../fotospc/"+item[0].imagen;
        boton.onclick=function(){
         
           
           const img = document.createElement("img");   // Create in-memory image
    img.addEventListener("load", () => {
        const a = document.createElement("a");   // Create in-memory anchor
        a.href = img.src;                        // href toward your server-image
        a.download = item[0].imagen;               // :)
        a.click();                               // Trigger click (download)
    });
    img.src = '../php/descargar.php?url='+ item[0].imagen;       // Request image from your server

        }

      
        const btnEdit =document.createElement("input");
        btnEdit.type="button";
        btnEdit.classList="btn btn-warning";
        btnEdit.value="Editar";
        btnEdit.onclick=function(){
 

       myJSON =JSON.stringify(item[0].id);
    
      localStorage.setItem("json", myJSON);

      window.open("../php/editar.php");
      
        }

//ELIMINAR



        const btnDelete =document.createElement("input");
        btnDelete.onclick=function(){
            if (document.getElementById("body").hasChildNodes()) {
                var children = document.getElementById("body").childNodes;
            //   console.log( document.getElementById("body").appendChild(this));
               // document.getElementById("body").removeChild();
                eliminar(item[0].id);
               document.getElementById("body").removeChild(tr);
             
              }
        }








        btnDelete.type="button";
        btnDelete.classList="btn btn-danger";
        btnDelete.value="Borrar";
        
        thNombre.textContent=item[0].nombre;
        thProcesador.textContent=item[0].procesador;
        thPlacaMadre.textContent=item[0].placaMadre;
        thTarjetaDeVideo.textContent=item[0].tarjetaDeVideo;
        thFuenteDePoder.textContent=item[0].fuenteDePoder;
        thAlmacenamiento.textContent=item[0].almacenamiento;
        thRam.textContent=item[0].ram;
        thGabinete.textContent= item[0].gabinete;
        thImagen.textContent=item[0].imagen;

        thBtnDescargar.appendChild(boton);
        thBtnEditar.appendChild(btnEdit);
        thBtnBorrar.appendChild(btnDelete);
    
    

      
        tr.appendChild(thNombre);
        tr.appendChild(thProcesador);
        tr.appendChild(thPlacaMadre);
        tr.appendChild(thTarjetaDeVideo);
        tr.appendChild(thFuenteDePoder);
        tr.appendChild(thAlmacenamiento);
        tr.appendChild(thRam);
        tr.appendChild(thGabinete);
        tr.appendChild(thBtnDescargar);
        tr.appendChild(thBtnEditar);
        tr.appendChild(thBtnBorrar);
        prueba.appendChild(tr);

     
    });

   
}

function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

      console.log(this.responseText);
     var hola= JSON.parse(this.responseText); 
        
      
      generar(hola);
      
    //LA MAMALONA
     //   console.log(json[0].nombre);
      }
    };
    var texto = document.getElementById("texto").value;
    //texto=toString(texto);
    xhttp.open("GET", "../php/misComputadoras.php?busca="+texto);
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

    xhttp.send();
  }

  function eliminar(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

   
        
      
     
      
    
      }
    };
    //var texto = document.getElementById("texto").value;
    //texto=toString(texto);
    xhttp.open("GET", "../php/borrar.php?busca="+id);
    
    xhttp.send();
  }


  function editar(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

    // console.log(this.responseText);
     //var hola= JSON.parse(this.responseText); 
     
     
      
    
      }
    };
    
    xhttp.open("GET", "../php/editar.php?busca="+id);
    xhttp.send();
  }



 
