<?php
include_once('includes/templates/header.php');
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Listado de Departamentos</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Tabla -->
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Titulo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="titulo" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="precio">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">descripcion</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcion">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Habitaciones</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="habitaciones">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">estacionamiento</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="estacionamiento">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="button" id="btnAgregar" class="btn btn-info">agregar</button>
                </div>
                
                <!-- /.card-footer -->
              </form>
            </div>
</div>
<script src="assets/js/departamentos.js"></script>
<?php
include_once('includes/templates/footer.php');
?>