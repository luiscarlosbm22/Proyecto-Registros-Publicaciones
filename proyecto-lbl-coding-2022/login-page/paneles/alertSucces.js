function mostrar(){
    var nombre = document.getElementById("txtNombre").value;
    var linkdescarga = document.getElementById("txtLink_Descarga_Proyect").value;
    var descripcion = document.getElementById("txtDescripcion").value;
    var imagen = document.getElementById("txtImagen").value;

    if(nombre == "" || linkdescarga == "" || descripcion == "" || imagen == ""){
        swal.fire({
            title: 'Hubo un error',
            text: 'Debes compeltos todos los campos',
            icon: 'error'
        });

    
    }else{
        swal.fire({
            title: 'Correcto',
            text: 'Felicidades sigue asi',
            icon: 'success'
        });
    }
    
}

// function eliminar(){
//     swal({
//         title: "Are you sure?",
//         text: "Once deleted, you will not be able to recover this imaginary file!",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
//       })
//       .then((willDelete) => {
//         if (willDelete) {
//           swal("Poof! Your imaginary file has been deleted!", {
//             icon: "success",
//           });
//         } else {
//           swal("Your imaginary file is safe!");
//         }
//       });
// }


// function hizoClick() {
//     var nombre = document.getElementById("nombre").value;
//     var correo = document.getElementById("correo").value;
//     if (nombre == "" || correo == "") {
//         alert("Debes compeltar ambos campos"); 
//     } else {
//     alert("Enviado");
//     }
//   }