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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="col-1">
                            <button type="button" id="btnAgregar" class="btn btn-primary btn-block">Agregar</button>
                        </div>
                            
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Precio</th>
                                        <th>Descripcion</th>
                                        <th>Habitaciones</th>
                                        <th>Estacionamiento</th>
                                    </tr>
                                </thead>
                                <tbody id="tblData">
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<script src="assets/js/departamentos.js"></script>
<?php
include_once('includes/templates/footer.php');
?>