
<?php  include("cabecera.php"); ?>
<?php  include("cod_publicar.php"); ?>

<?php date_default_timezone_set('America/Lima');
$fecha_actual=date("Y-m-d H:i:s"); ?>
<div class="container">
<div class="col-md-11">

<br><br><h1 class="display-3">Publica algo nuevo</h1>
<hr class="my-2">
    <div class="row"><br>
        
        <div class="col-sm-6">

        

        <div class="">
        <form id="formulario" method="POST" enctype="multipart/form-data">
            <div class = "form-group">
            <!-- <label for="txtID_Proyects">ID</label> -->
            <input  require readonly class="form-control" type="hidden" value="<?php echo $txtID_Proyects; ?>" name="txtID_Proyects" id="txtID_Proyects" aria-describedby="emailHelp" placeholder="ID">
            
            </div>
            <div class = "form-group">
            <!-- <label for="txtID_Proyects">ID Usuario</label> -->
            <input required class="form-control" type="hidden"  name="txtID_Usuario" id="txtID_Usuario" readonly="readonly" value="<?php echo utf8_decode($row['id']); ?>">
            
            </div>
            <div class = "form-group">
            <!-- <label for="txtNombre">Nombre</label> -->
            <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" maxlength="40" name="txtNombre" id="txtNombre" aria-describedby="emailHelp" placeholder="Nombre"><br>
            
            </div>
            <div class = "form-group">
            <!-- <label for="txtLink_Descarga_Proyect">Link Descarga</label> -->
            <input type="text" required class="form-control" value="<?php echo $txtLink_Descarga_Proyect; ?>" name="txtLink_Descarga_Proyect" id="txtLink_Descarga_Proyect" aria-describedby="emailHelp" placeholder="Link Descarga"><br>
            
            </div>
            <div class = "form-group">
            <!-- <label for="txtDescripcion">Descripcion</label> -->
            <textarea  required class="form-control" maxlength="130" name="txtDescripcion" id="txtDescripcion" aria-describedby="emailHelp" placeholder="Descripcion"><?php echo $txtDescripcion; ?></textarea><br>
            
            </div>
            <div class = "form-group">
            <!-- <label for="txtDescripcion">Descripcion</label> -->
            <input type="hidden" class="form-control" value="<?= $fecha_actual ?>" name="txtfecha" id="txtfecha" aria-describedby="emailHelp" >
            
            </div>
            <div class = "form-group">
            <label for="txtNombre">Imagen</label>


            <br>

            

            <input type="file"   class="form-control" name="txtImagen" id="txtImagen" aria-describedby="emailHelp" placeholder="Imagen" >
            
            </div><br>
            
            <p class="font-weight-light" id="parr" ></p><br>
           
            
            <!-- <script type="text/javascript">

  window.onload = function countProgresBar(){
 
 var v = 10;
 document.getElementById("bar").setAttribute("max", v);


   
}
            </script> -->

            
            <script src="countProgresBarFunction.js"></script>
            <script src="alertSucces.js"></script>
                
               <span class="porcentaje">0%</span> <progress id="bar" role="progressbar" value="<?php echo ($fila['total']);?>"  max="bar" ></progress><span class="porcentaje" >100%</span>

               <input  class="form-control" readonly="readonly" type="hidden" id="tot_proyects" name="tot_proyects" style=" width: 100px;" value=" <?php echo ($fila['total']);?>">
            
            <br><br>
            <div class="btn-group" role="group" aria-label="">
                <button onclick="mostrar()"   type="submit" name="accion"  <?php echo($accion=="Seleccionar")?"disabled":""; ?> value="Agregar"  class="btn btn-outline-primary">Agregar</button>
                <button  type="submit" name="accion"  <?php echo($accion!="Seleccionar")?"disabled":""; ?> value="Modificar" class="btn btn-outline-secondary">Modificar</button>
                <button  type="submit" name="accion"  <?php echo($accion!="Seleccionar")?"disabled":""; ?> value="Cancelar" class="btn btn-outline-danger">Cancelar</button>
            </div><br><br>
            <h2 class="font-weight-bold">Lista de tus Proyectos Publicados</h2>
            <p class="text-justify">Eliminalos y editalos cuando quieras, puedes compartirla y descargarla.</p>
    
        </form>
        </div>
        
    </div>
    <div class="col-sm-6">
    <div class="card" style="width: 25rem;">
    <?php 
            if($txtImagen!=""){ ?>

                <img class="card-img-top-select"  src="imagenes/<?php echo $txtImagen; ?>" width="50" alt="">
            <?php 
                }
            ?>
  
  <div class="card-body">
    <p class="card-text">Recuerda utilizar imagenes cuadradas y no largar para asi poder tener una mejor estructura y vista para los visitantes  de tu proyecto.</p>
  </div>
</div>
    </div>

    </div>
    
   
    

</div>



<div class="col-md-11">
    
<table class="table" id="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Link</th>
            <th>Descripcion</th>
            <th>Fecha de Publicación</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach($listaLibros as $libro) {  ?>
        <tr>
            <td><?php echo $libro['id_proyectos'];  ?></td>
            <td><?php echo $libro['nombre'];  ?></td>
            <td> <span class="badge badge-info"><a href="<?php echo $libro['link_descarga_proyect'];  ?>" target="_blank" class="badge badge-info" >Ver info</a></span></td>
            <td><?php echo $libro['descripcion'];  ?></td>
            <td><?php echo $libro['fecha_public'];  ?></td>

            <td>
                
                <img class="img-thumbnail rounded" src="imagenes/<?php echo $libro['imagen'];  ?>" width="50" alt="">

                
        
            </td>

            <td>
              

            <form  name="elformulario" method="POST" id="elformulario">
                <input type="hidden" name="txtID_Proyects" id="txtID_Proyects" value="<?php echo $libro['id_proyectos'];  ?>"/>
               
                <button class="icon-accion" type="submit" name="accion" value="Seleccionar" ><i class="fa-solid fa-pen-to-square"></i></button>

                <button type="submit"  id="accion" name="accion" value="Borrar" class="icon-accion" onclick=" return confirm('Estas seguro de eliminar el Proyecto: <?php echo $libro['nombre'];  ?>'); "><i class="fa-solid fa-delete-left"></i></button>
            </form>
            
            
            </td>
            <td>
            <!-- <button class="icon-accion" type="button"  data-toggle="modal" data-target="#exampleModal" ><i class="fa-solid fa-delete-left"></i></button>

            <div class="modal fade" id="exampleModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <form method="POST">
                                    <input type="hidden" name="txtID_Proyects" id="txtID_Proyects" value=""/>
                                <button class="icon-accion" type="submit" name="accion" value="Seleccionar" ><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="accion" value="Borrar" class="btn btn-primary">Si borrar</button>
                                        
                                    </form>
                                </div>
                            </div>
                    </div>
            </td> -->

           
        </tr>
        <?php }?>
    </tbody>
</table>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



</div>
</div>

<script src="alertDeleteConfirm.js"></script>

<script>

            var tabla = document.querySelector("#tabla");
            var dataTable = new DataTable(tabla);

</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php  include("pie.php"); ?>