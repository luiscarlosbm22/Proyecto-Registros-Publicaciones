<?php    include("ver-cabecera.php"); ?>


    <br><div class="container">

        <div class="">
            <h1>Consultorio, Totales y Descuentos</h1>

            <div class="card-group">
                <div class="card">
                    <img class="card-img-top2" src="images/cons-des-tot-2.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Si el precio es mayor e Igual a 200</h5>
                    <p class="card-text">Si n, el numero o precio ingresado es mayor que 200 se le otorgara un descuento de 15%</p>
                    <p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
                    </div>
                    
                </div>
                <div class="card">
                    <img class="card-img-top2" src="images/cons-des-tot-3.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Si el precio es mayor que 100 y menor que 200 </h5>
                    <p class="card-text">Si el precio ingresado se mantiene entre 100 y 200 se le otorgara un descuento de 12% </p>
                    <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top2" src="images/cons-des-tot-1.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Si el precio es menor que 100</h5>
                    <p class="card-text">Cuando el precio sea menor que 100 se le otorgara un descuento de 10%</p>
                    <p class="card-text"><small class="text-muted">Last updated 8 mins ago</small></p>
                    </div>
                </div>
            </div><br>

            <h3>Codigo del Ejercicio</h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            import java.util.Scanner;

public class ConsultorioDrLozanoT {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n;
        double pago, totaldesc, desc, pagototal;
        System.out.print("Introduzca  el precio: ");
        n = sc.nextInt();
        if(n>=200 ){
            desc=0.15;
            totaldesc = n*desc;
            pagototal=n-totaldesc;
            System.out.println("Total a pagar: "+pagototal+ " Descuento: " + totaldesc);
        }else{
            if(n>=100 && n<=200){
                desc=0.12;
                totaldesc = n*desc;
                pagototal=n-totaldesc;
            System.out.println("Total a pagar: "+pagototal+ " Descuento: " + totaldesc);
            }else{
                if(n < 100){
                    desc=0.10;
                totaldesc = n*desc;
                pagototal=n-totaldesc;
            System.out.println("Total a pagar: "+pagototal+ " Descuento: " + totaldesc);                  
                }
            }
        } 
        
    }
}
            </code>
        </pre>
        
            
        </div>
 </div>


<?php    include("ver-pie.php"); ?>