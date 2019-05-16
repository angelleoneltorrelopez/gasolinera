<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $fecha = $_POST["edit_fecha"];
	$factura = $_POST["edit_factura"];
	$tipo = $_POST["edit_tipo"];
	$galones = floatval($_POST["edit_galones"]);
	$precio = floatval($_POST["edit_precio"]);
	$total = floatval($_POST["edit_total"]);
	$notas = $_POST["edit_notas"];
	
	$idcargas=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE cargas SET fecha='".$fecha."', factura='".$factura."', tipo='".$tipo."', galones='".$galones."',  precio='".$precio."',  total='".$total."',  notas='".$notas."' WHERE idcargas='".$idcargas."' ";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El producto ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
?>			