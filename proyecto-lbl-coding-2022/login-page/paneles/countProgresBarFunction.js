window.onload = function countProgresBar(){

    var textacum= "Publica tus 10 primeros proyectos, ¡Sigue Creciendo!";
    var textba= "¡Vas muy bien!, completa tus 20 proyectos publicados";
    var textbe= "¡Eres Genial!, completa tus 30 proyectos publicados";
    var textbc= "¡El mejor eres tu!, completa tus 40 proyectos publicados";
    var textoro= "¡Felicidades! Completa la barra para ganar";
 
    var v = 0;
    var acum = 0;
    
    var ba = 20;
    var be = 30;
    var bc = 40;
    var oro = 50;
    
   v= document.getElementById('tot_proyects').value;


   


    if  (v >=11 ){


        //    acum = parseInt(v) +10;
             document.getElementById("bar").setAttribute("max", ba);
             document.getElementById("parr").innerHTML = textba;

          if(v >=21){
            //  acum = parseInt(v) +10;
             document.getElementById("bar").setAttribute("max", be);
             document.getElementById("parr").innerHTML = textbe;

                 if(v >=31 ){
                    //  acum = parseInt(v) +10;
                     document.getElementById("bar").setAttribute("max", bc);
                     document.getElementById("parr").innerHTML = textbc;

                     if(v >=41 ){
                        //  acum = parseInt(v) +10;
                         document.getElementById("bar").setAttribute("max", oro);
                         document.getElementById("parr").innerHTML = textoro;
    
                         
                     }else
                     {
                     acum = 40;
                     document.getElementById("bar").setAttribute("max", acum);
                     }
                 }else
                 {
                 acum = 30;
                 document.getElementById("bar").setAttribute("max", acum);
                 }
            }else
                {
                acum = 20;
                document.getElementById("bar").setAttribute("max", acum);
                }


       
          }else
            {
            acum = 10;
            document.getElementById("bar").setAttribute("max", acum);
            document.getElementById("parr").innerHTML = textacum;
            // swal({
            //     title: 'Felicidades',
            //     text: 'Felicidades sigue asi',
            //     icon: 'success'
            // });
            }
   
      
   }