<?php
include_once("head.php");
?>
<main class="container-fluid">
   <div class="row p-2">
      <div class="col-md-3">
         <div class="card border-primary">
            <div class="card-body">
               <h4 class="card-title text-center"><u>Formulario</u></h4>
               <form action="guardar.php" method="post">
                  <div class="form-group mb-2">
                     <label for="nombre">Nombre :</label>
                     <input id="nombre" class="form-control" type="text" name="nombre">
                  </div>
                  <div class="form-group mb-2">
                     <label for="descripcion">descripción :</label>
                     <textarea name="descripcion" cols="30" rows="5" id="descripcion" class="form-control"></textarea>
                  </div>
                  <div class="form-group mb-2">
                     <label for="precio">Precio del producto :</label>
                     <input id="precio" class="form-control" type="text" name="precio">
                  </div>
                  <div class="text-center">
                     <input type="submit" value="Registrar" class="btn btn-primary" name="guardar">
                     <button type="button" class="btn btn-danger">Cancelar</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- ========== Start tabla del crud ========== -->

      <div class="col-md-9">
         <div class="card border-primary">
            <div class="card-body">
               <h4 class="card-title text-center mb-3">LISTA DE PRODUCTOS</h4>
               <table class="table table-hover table-bordered">
                  <thead class="table-dark">
                     <th>ID</th>
                     <th>NOMBRE PRODUCTO</th>
                     <th>DESCRIPCIÓN PRODUCTO</th>
                     <th>PRECIO</th>
                     <th>OPCIONES</th>
                  </thead>
                  <tbody>
                     <?php

                     $query = "SELECT * FROM productos";
                     $result = mysqli_query($con, $query);
                     // print_r($result);
                     while ($row = mysqli_fetch_assoc($result)) {
                     ?>
                        <tr>
                           <td><?php echo $row['id']; ?></td>
                           <td><?php echo $row['nombre']; ?></td>
                           <td><?php echo $row['descripcion']; ?></td>
                           <td><?php echo $row['precio']; ?></td>
                           <td class="text-center">
                              <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                              <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Modificar</a>
                           </td>
                        </tr>
                     <?php
                     }
                     ?>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- ========== End tabla del crud ========== -->
   </div>
</main>
<?php
include_once("footer.php");
?>