const button = document.getElementById('add');
console.log(button); // 👉️ button#btn

const agregar = ()=>{
    Swal.fire({
        title: 'Guardado',
        text: 'Tu pc ha sido agregada',
        imageUrl: 'https://unsplash.it/400/200',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
      })
}

button.onclick=agregar;
































