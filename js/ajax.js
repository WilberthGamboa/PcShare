const prueba = document.getElementById("prueba");

prueba.onclick = () =>{
    loadDoc();
}

function generar(hola) {
    if (document.getElementById("contenido").hasChildNodes()) {
       
        while (document.getElementById("contenido").firstChild) {
            //The list is LIVE so it will re-index each call
            document.getElementById("contenido").removeChild(document.getElementById("contenido").firstChild);
        }
        
    }
   // hola=JSON.stringify(hola);
    hola.forEach(item => {
       // console.log(item);
       const div = document.createElement("p"); // <div></div>
       div.textContent = item[0].id+item[0].nombre+item[0].procesador;
div.id = "page";          // <div id="page"></div>
div.className = "data";   // <div id="page" class="data"></div>
div.style = "color: red"; // <div id="page" class="data" style="color: red"></div>
       document.getElementById("contenido").appendChild(div);
        
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
      var hola= JSON.parse(this.responseText); 
  
      
      generar(hola);
      
    //LA MAMALONA
     //   console.log(json[0].nombre);
      }
    };
    var texto = document.getElementById("texto").value;
    //texto=toString(texto);
    xhttp.open("GET", "../html/computadoras.php?busca="+texto);
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