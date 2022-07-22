<?php    include("ver-cabecera.php"); ?>


    <br><div class="container">

        <div class="">
            <h1>Ahorro Mensual</h1>

            <div class="card-group">
                <div class="card">
                   
                    <div class="card-body">
                    <h5 class="card-title">Acomula de mes en mes</h5>
                    <p class="card-text">Cuando acabe de ahorrar que es el mes 12 entonces el bucle terminara y dara el total del año ahorrado </p>
                    <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                    </div>
                    
                </div>
                
               
            </div><br>

            <h3>Codigo del Ejercicio</h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            package lbm.fabrica;

import java.util.Scanner;

public class LBMFabrica {
    public static void main(String[] args) {
      Scanner sc = new Scanner(System.in);
        double costo_produccion;
        double precio_venta;
        double gastoF=0;
        double mano_obra=0;
        int clave;
        int materia;
        System.out.print("Introduzca  una clave: ");
        clave = sc.nextInt();
        System.out.print("Introduzca  valor de materia prima: ");
        materia = sc.nextInt();
        
        if(clave == 2 || clave == 5){
            gastoF = materia *0.3;
        }else{
            if(clave==3 || clave==6){
                gastoF = materia*0.35;
            }else{
                if(clave==1 || clave==4){
                    gastoF = materia*0.28;
                }else{
                    //mano de obra
                    if(clave == 3 || clave ==4 ){
                        mano_obra = materia*0.75;
                    }else{
                        if(clave==1 || clave ==5){
                            mano_obra = materia*0.8;
                        }else{
                            if(clave==2 || clave ==6){
                                mano_obra = materia*0.85;
                            }
                        }
                    }
                }
            }
        }
        costo_produccion= materia + mano_obra +gastoF;
        precio_venta = costo_produccion + costo_produccion*0.45;
        
        System.out.println("Costo de Producción: " + costo_produccion);
        System.out.println("Gasto de Fabricación: " + gastoF);
        System.out.println("Mano de Obra: " + mano_obra);
        System.out.println("Precio de Venta: " + precio_venta);
    }
    
}
            </code>
        </pre>
        
            
        </div>
 </div>


<?php    include("ver-pie.php"); ?>