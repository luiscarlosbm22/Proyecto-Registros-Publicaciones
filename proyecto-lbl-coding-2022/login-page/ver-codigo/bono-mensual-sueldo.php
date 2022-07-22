<?php    include("ver-cabecera.php"); ?>


    <br><div class="container">

        <div class="">
            <h1>Bono por Antiguedad Mensual, Sueldo</h1>

            <div class="card-group">
                <div class="card">
                    <!-- <img class="card-img-top2" src="images/fabrica-1.png" alt="Card image cap"> -->
                    <div class="card-body">
                    <h5 class="card-title">Bono por antiguedad Mensual</h5>
                    <p class="card-text">En este ejercicio calcula el bono por antiguedad con clases el reto tuyo sera completarlo</p>
                    <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                    </div>
                    
                </div>
                
               
            </div><br>

            <h3>Codigo del Ejercicio</h3>
            
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            public class BonoMensual {
    
    Scanner sc = new Scanner(System.in);
    
    //double antiguedad = 200;
    
    
     private double bonoMensual = 0;
     private double bono_antiguedad =0;
     private double bono_sueldo =0;
     
     
     
     public void PrimerSuelo (double sueldo, double antiguedad){
        
         if(antiguedad > 2 && antiguedad < 5){
         bono_antiguedad = sueldo * 0.2;
         }
     }
     public void SegundoSuelo (double sueldo, double antiguedad){
         if(antiguedad >= 5){
         bono_antiguedad = sueldo * 0.3;
         }
     }
     public void TercerSuelo (double sueldo, double antiguedad){
         if(sueldo <= 1000){
         bono_sueldo = sueldo * 0.25;
         }
     }
     public void CuartoSuelo (double sueldo){
         if(sueldo < 1000 && sueldo <=3500){
         bono_sueldo = sueldo * 0.15;
         }
     }
     public void QuintoSuelo (double sueldo){
         if(sueldo >3500){
         bono_sueldo = sueldo * 0.1;
         }
     }
     public void Ultimo (){
         if(bono_antiguedad > bono_sueldo){
         bonoMensual = bono_antiguedad;
         }else{
             bonoMensual = bono_sueldo;
         }
     }
     public double obtenerBonoMensual(){
         return bonoMensual;
         
     }
     public double obtenerBonoporSueldo(){
         return bono_sueldo;
     }
     public double obtenerBonoporAntiguedad(){
         return bono_antiguedad;
     }
     public static void main(String[] args) {
         BonoMensual mi = new BonoMensual();
         
     System.out.print("Bono Mensual: " + (mi.obtenerBonoMensual()));
     System.out.print("Bono por Antiguedad: " + (mi.obtenerBonoporAntiguedad()));
     System.out.print("Bono Sueldo: " + (mi.obtenerBonoporSueldo()));
     }
 
     
 }
            </code>
        </pre>
        
            
        </div>
 </div>


<?php    include("ver-pie.php"); ?>