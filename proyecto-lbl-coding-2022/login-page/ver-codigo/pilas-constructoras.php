<?php    include("ver-cabecera.php"); ?>


    <br><div class="container">

        <div class="">
            <h1>Pila Constructura PUSH y POP</h1>

            <div class="card-group">
                <div class="card">
                    <img class="card-img-top2" src="images/pila-img-1.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Button Push</h5>
                    <p class="card-text">Esta agregara el dato a la pila en forma ordenada segun sean los datos ingresados, mientras no ordenada segun los datos de los números.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    
                </div>
                <div class="card">
                    <img class="card-img-top2" src="images/pila-img-2.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Button Pop</h5>
                    <p class="card-text">Este quitara el elemente que ya fue atentido de la cola y pasara a atenderse al siguiente.</p>
                    <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top2" src="images/pila-img-3.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Invertir (Reto)</h5>
                    <p class="card-text">Ahora te toca a ti hacer el voton inertir cola, para ello te dejamos el codigo y continues el ejercicio, recuerda que al publicarlo en nuestra página obtendras puntos para ganar premios.</p>
                    <p class="card-text"><small class="text-muted">Last updated 50 mins ago</small></p>
                    </div>
                </div>
            </div><br>

            <h3>Formulario </h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            import java.util.ArrayList;
import javax.swing.DefaultListModel;
import javax.swing.JOptionPane;
import javax.swing.SwingUtilities;
import luiscarlosbautistamachuca2.Nodo;


public class FormPila extends javax.swing.JFrame {

    DefaultListModel modelPila, modelMemoria;
    Pila miPila;
    
    public FormPila() {
        initComponents();
        miPila = new Pila();
        miPila.crear();
        
        this.modelPila = new DefaultListModel();
        this.modelMemoria = new DefaultListModel();
        
        this.listaMemoria.setModel(modelMemoria);
        this.listaFinal.setModel(modelPila);
    }

    private void recorrerPila(){
        ArrayList<String> listaAux = this.miPila.recorrer();
        this.modelPila.clear();
        for(String aux  : listaAux){
            this.modelPila.addElement(aux);
        }
    }
            </code>
        </pre>
        <h3>Button Push</h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            private void btnPushActionPerformed(java.awt.event.ActionEvent evt) {                                        
        
        if(txtDato.getText().isEmpty())
       {
           JOptionPane.showMessageDialog(this, "No se permiten campos vacios");
       }else{
            String dato = this.txtDato.getText();
       this.modelMemoria.addElement(dato);
       this.miPila.push(dato);
       recorrerPila();
       JOptionPane.showMessageDialog(this,"Se agrego elemento a la PILA","PILA",JOptionPane.INFORMATION_MESSAGE);
       this.txtDato.setText("");
       SwingUtilities.invokeLater(new Runnable() {
           public void run() {
               txtDato.requestFocus();
           }
       });
        }
   }
            </code>
        </pre>
        <h3>Button Pop</h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            private void btnPopActionPerformed(java.awt.event.ActionEvent evt) {                                       
        
        Nodo nodo = this.miPila.pop();

        if(nodo != null){
            recorrerPila();
            JOptionPane.showMessageDialog(this,"Se atendio al elemento - "+nodo.dato,"COLA",JOptionPane.INFORMATION_MESSAGE);
        }else{
            JOptionPane.showMessageDialog(this,"No se pudo realizar la operación","COLA",JOptionPane.ERROR_MESSAGE);
        }

    }
            </code>
        </pre>
            <h3>Clase Nodo</h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            public class Nodo {
    public String dato;
    public Nodo siguiente;
}
            </code>
        </pre>
        
            
        
        <h3>Clase Pila</h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">
            import luiscarlosbautistamachuca2.ListaEnlazadaSimple;
import luiscarlosbautistamachuca2.Nodo;

public class Pila extends ListaEnlazadaSimple {
    Nodo tope;
    Nodo base;

    public Pila() {
        super();
        this.tope = null;
        this.base = null;
    }
    
    @Override
    public void crear(){
        this.tope = null;
        this.base = null;
    }
    
    public void push(String dato){
        this.base = this.inicio;
        this.tope = this.insertarAlFinalUpdate(dato);        
    }
    
    public Nodo pop(){
        this.base = this.inicio;
        Nodo nodo = this.eliminarAlFinalUpdate();
        return nodo;
    }
}

}
            </code>
        </pre>
        

        <h3 >Clase ListaEnlazadaSimple</h3>
        <pre>
            <code class="language-java line-numbers" style="white-space:pre-wrap;">

            import java.util.ArrayList;

public class ListaEnlazadaSimple {
    public Nodo inicio;
    
    public ListaEnlazadaSimple(){
        this.inicio = null;
    }
    public void crear(){
        this.inicio = null;
    }
    public void insertarAlInicio( String dato){
        Nodo auxiliar = new Nodo();
        auxiliar.dato = dato;
        auxiliar.siguiente = null;

        if (this.inicio == null)
        {
            this.inicio = auxiliar;
        }
        else
        {
            Nodo puntero;
            puntero = this.inicio;
            this.inicio = auxiliar;
            auxiliar.siguiente = puntero;
        }
    }
    public void insertarAlFinal(String dato){
        Nodo auxiliar = new Nodo();
        auxiliar.dato = dato;
        auxiliar.siguiente = null;

        if (this.inicio == null)
        {
            this.inicio = auxiliar;
        }
        else
        {
            Nodo puntero;
            puntero = this.inicio;

            while (puntero.siguiente != null)
            {
                puntero = puntero.siguiente;
            }

            puntero.siguiente = auxiliar;

        }
    }
    public Nodo insertarAlFinalUpdate(String dato){
        Nodo auxiliar = new Nodo();
        auxiliar.dato = dato;
        auxiliar.siguiente = null;

        if (this.inicio == null)
        {
            this.inicio = auxiliar;
        }
        else
        {
            Nodo puntero;
            puntero = this.inicio;

            while (puntero.siguiente != null)
            {
                puntero = puntero.siguiente;
            }

            puntero.siguiente = auxiliar;

        }
        return auxiliar;
    }
    public ArrayList<String> recorrer(){
        ArrayList<String> listaElementos;
        listaElementos = new ArrayList<String>();

        if (this.inicio == null)
        {
            //la lista esta vacia
        }
        else
        {
            //hay por lo menos un nodo, lo recorremos
            Nodo puntero;
            puntero = this.inicio;

            while (puntero != null)
            {
                listaElementos.add(puntero.dato);
                puntero = puntero.siguiente;
            }

        }
        return listaElementos;
    }
    
    public boolean eliminarAlInicio(){
        boolean bandera = false;

        if (this.inicio == null)
        {
            bandera = false;
        }
        else
        {
            this.inicio = this.inicio.siguiente;
            bandera = true;
        }
        return bandera;
    }
    
    public Nodo eliminarAlInicioUpdate(){
        Nodo nodo = null;

        if (this.inicio == null)
        {
            nodo = null;
        }
        else
        {
            nodo = this.inicio;
            this.inicio = this.inicio.siguiente;
        }
        return nodo;
    }
    public boolean eliminarAlFinal(){
        boolean bandera = false;

        if (this.inicio == null)
        {
            bandera = false;
        }
        else
        {
            Nodo punteroAnt, punteroPost;
            punteroAnt = this.inicio;
            punteroPost = this.inicio;
            while (punteroPost.siguiente != null)
            {
                punteroAnt = punteroPost;
                punteroPost = punteroPost.siguiente;
            }

            punteroAnt.siguiente = null;
            bandera = true;
        }
        return bandera;
    }
    
    public Nodo eliminarAlFinalUpdate(){
        Nodo nodo = null;

        if (this.inicio == null)
        {
            nodo = null;
        }
        else
        {
            Nodo punteroAnt, punteroPost;
            punteroAnt = this.inicio;
            punteroPost = this.inicio;
            while (punteroPost.siguiente != null)
            {
                punteroAnt = punteroPost;
                punteroPost = punteroPost.siguiente;
            }
            if(punteroAnt == punteroPost){
                //solo hay un elemento
                nodo = punteroAnt;
                this.inicio = null;
            }else{
                //hay mas de un nodo
                nodo = punteroAnt.siguiente;
                punteroAnt.siguiente = null;
            }
        }
        return nodo;
    }
}
            </code>
        </pre> 
            
        </div>
 </div>


<?php    include("ver-pie.php"); ?>