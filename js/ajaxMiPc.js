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
        const thBtnDescargar = document.createElement("td");
        const thBtnEditar = document.createElement("td");
        const thBtnBorrar = document.createElement("td");
        //BOTONES


        const boton = document.createElement("input");
        boton.type="button";
        boton.classList="btn btn-info";
        boton.value="Descargar imagen";
        boton.href="../fotospc/"+item[0].imagen;
        boton.onclick=function(){
         
            //descargarImagen(item[0].imagen);
           // document.location("../fotospc/"+item[0].imagen);
           // console.log(item[0].imagen);
           //window.location.href = "../php/descarga.php?perro=" + item[0].imagen;
           const img = document.createElement("img");   // Create in-memory image
    img.addEventListener("load", () => {
        const a = document.createElement("a");   // Create in-memory anchor
        a.href = img.src;                        // href toward your server-image
        a.download = item[0].imagen;               // :)
        a.click();                               // Trigger click (download)
    });
    img.src = '../php/descargar.php?url='+ item[0].imagen;       // Request image from your server

        }

       // <button type="button" class="btn btn-danger">Danger</button>
        //<button type="button" class="btn btn-warning">Warning</button>
        const btnEdit =document.createElement("input");
        btnEdit.type="button";
        btnEdit.classList="btn btn-warning";
        btnEdit.value="Editar";
        btnEdit.onclick=function(){
 /*

          var w = window.open();

  // Creamos y cargamos dinámicamente la hoja de estilo
  var link  = document.createElement('link');
  link.rel  = 'stylesheet';
  link.type = 'text/css';
  link.href = 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css';
  w.document.head.appendChild(link);

  // Cargamos el contenido
  //var contenido = document.getElementById("verVentana").innerHTML;
  //w.document.body.innerHTML=contenido;
  /*
          const container = document.createElement("div");
          container.className="container";

          w.document.body.appendChild(container);

          const formularionuevo = document.createElement("form");
          formularionuevo.method="POST";

          container.appendChild(formularionuevo);

          const inputid = document.createElement("input");
          inputid.type="hidden";
          inputid.value=item[0].id;
         // inputid.className="form-control";
          inputid.name="nombre";
          formularionuevo.appendChild(inputid);

          const inputNombre = document.createElement("input");
          inputNombre.value=item[0].nombre;
          inputNombre.className="form-control";
          inputNombre.name="nombre";
          formularionuevo.appendChild(inputNombre);

          const inputNombre = document.createElement("input");
          inputNombre.value=item[0].nombre;
          inputNombre.className="form-control";
          inputNombre.name="nombre";
          formularionuevo.appendChild(inputNombre);


*/

          //inputNombre.value=item[0].nombre;
        //  w.document.body.appendChild(inputNombre);
          


       myJSON =JSON.stringify(item[0].id);
    
      localStorage.setItem("json", myJSON);

      window.open("../php/editar.php");
          //btnEdit.href="../html/prueba.html";
          //btnEdit.setAttribute('href', "../php/editar.php");
        //  editar(item[0].id);
          //console.log(item[0].id);

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
             //  console.log()
              // this.appendChild(div);
               // console.log(item[0].id);
              /*
                for (var i = 0; i < children.length; i++) {
                  // do something with each child as children[i]
                  // NOTE: List is live, adding or removing children will change the list
                }
                */
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
    
      //  console.log(item[0].imagen);
        //Tarjeta de Video	Fuente de Poder	Almacenamiento	Ram	Gabinete	Imagen

       // console.log(thNombre);
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

        /*
       const div = document.createElement("p"); // <div></div>
       div.textContent = item[0].id+" "+item[0].nombre+" "+item[0].procesador+" "+item[0].tarjetaDeVideo;
div.id = "page";          // <div id="page"></div>
div.className = "data";   // <div id="page" class="data"></div>
div.style = "color: red"; // <div id="page" class="data" style="color: red"></div>
       document.getElementById("contenido").appendChild(div);
        */
    });

   // var xd=Object.entries(hola);
  //  console.log(hola);

    /*
//  console.log(hola);
  //const keys = Object.keys(hola);
  //  console.log(hola[0].nombre);
  //console.log(hola[0].nombre);
    for (let index = 0; index <hola.length; index++) {

        console.log(hola[0]);
        
    //    console.log(hola[keys[index.nombre]]);
       // console.log(Object.values(hola)[index].nombre);
      //  console.log(hola[index].nombre);
      //  document.getElementById('contenido').innerHTML=''+hola[index]['nombre'];
        
    }
    */
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
 //    xhttp.open("GET", "../php/descargar.php");
    xhttp.send();
  }

  function eliminar(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

    // console.log(this.responseText);
     //var hola= JSON.parse(this.responseText); 
        
      
     
      
    
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
    //var texto = document.getElementById("texto").value;
    //texto=toString(texto);
    xhttp.open("GET", "../php/editar.php?busca="+id);
    xhttp.send();
  }



  //FUNCION ORIGINAL JSON 
/*
  function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();
  }

  */
