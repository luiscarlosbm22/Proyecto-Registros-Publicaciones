<?php    include("ver-cabecera.php"); ?>


    <br><div class="container">

        <div class="">
            <h1>Compra de Paquetes </h1>

            <div class="card-group">
                <div class="card">
                    <img class="card-img-top2" src="images/compra-paquete-2.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Puede comprar el paquete A</h5>
                    <p class="card-text">Se cumple la condicion si el paquete es  >= 50000</p>
                    <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                    </div>
                    
                </div>
                <div class="card">
                    <img class="card-img-top2" src="images/compra-paquete-1.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Puede comprar el paquete D</h5>
                    <p class="card-text">Cuando se cumple que el dinero sea menor </p>
                    <p class="card-text"><small class="text-muted">Last updated 1 days ago</small></p>
                    </div>
                </div>
               
            </div><br>

            <h3>Codigo del Ejercicio</h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            public class LBMCompraDePaquetes {

    
public static void main(String[] args) {
  Scanner sc = new Scanner(System.in);
     double total;
    System.out.print("Ingresar cantidad de Dinero: ");
    total = sc.nextInt();
    
    if(total >= 50000){
        System.out.print("Si puede comprar el Paquete A");
    }else{
            if(total >=20000){
                System.out.print("Si puede comprar el Paquete B");

                
            }else{
                if(total >=10000){
                    System.out.print("Si puede comprar el Paquete C");
                  }
                else{
                     System.out.print("Si puede comprar el Paquete D");
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