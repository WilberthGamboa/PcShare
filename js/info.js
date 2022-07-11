window.onload = function() {
    var json =localStorage.getItem("miComputadora");
    text =JSON.parse(json);

    const txtNombre=document.getElementById("nombre");
    const txtprocesador=document.getElementById("procesador");
    const txtPlacaMadre=document.getElementById("placaMadre");
    const txtTarjetaDeVideo=document.getElementById("tarjetaDeVideo");
    const txtFuenteDePoder=document.getElementById("fuenteDePoder");
    const txtAlmacenamiento=document.getElementById("almacenamiento");
    const txtRam=document.getElementById("ram");
    const txtGabinete=document.getElementById("gabinete");
    const imagen=document.getElementById("imagen");

    txtNombre.textContent=text.nombre;
    txtprocesador.textContent=text.procesador;
    txtPlacaMadre.textContent=text.placaMadre;
    txtTarjetaDeVideo.textContent=text.tarjetaDeVideo;
    txtFuenteDePoder.textContent=text.fuenteDePoder;
    txtAlmacenamiento.textContent=text.almacenamiento;
    txtRam.textContent=text.ram;
    txtGabinete.textContent=text.gabinete;
    imagen.src="../fotospc/"+text.imagen;
   
    imagen.style.height = '500px';
    imagenyourImg.style.width = '500px';

  };

