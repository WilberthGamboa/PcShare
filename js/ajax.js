const prueba = document.getElementById("prueba");

prueba.onclick = () =>{
    loadDoc();
}


function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      var hola= JSON.parse(this.responseText);
      console.log(hola)
      
     //   console.log(json[0].nombre);
      }
    };
    xhttp.open("GET", "../html/computadoras.php");
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