<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gasolinera </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css">
</head>
<body>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Administrar Gasolinera <b>Cargas</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">add_circle</i> <span>Cargar</span></a>
                        <a href="/gasolinera/index2.php" class="btn btn-success" data-toggle="modal"><i class="material-icons">remove_circle</i> <span>Descargas</span></a>
					</div>

                </div>
            </div>
			<div class='col-sm-4 pull-right'>
				<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                </div>
			</div>
            <div class='outer3_div'></div>
			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div>        <!-- Carga de datos ajax aqui -->
			<div id="resultados"></div>      <!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div>         <!-- Carga de datos ajax aqui -->


        </div><!-- fIN CARGAS -->

        
    </div><!-- fIN CONTENEDOR -->
	<!-- Add Modal HTML -->
	<?php include("html/modal_add.php");?>
    <!-- Add Modal HTML -->
    <?php include("html/modal_des.php");?>
	<!-- Des Modal HTML -->
	<?php include("html/modal_edit.php");?>
	<!-- Delete Modal HTML -->
	<?php include("html/modal_delete.php");?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script src="js/script.js"></script>
  <script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
  </script>
</body>
</html>
