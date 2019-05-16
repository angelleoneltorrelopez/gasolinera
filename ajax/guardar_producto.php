<?php
	if (empty($_POST['fecha'])){
		$errors[] = "Ingresa el nombre del producto.";
	} elseif (!empty($_POST['fecha'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $fecha = $_POST["fecha"];
	$factura = $_POST["factura"];
	$tipo = $_POST["tipo"];
	$galones = floatval($_POST["galones"]);
	$precio = floatval($_POST["precio"]);
	$total = floatval($_POST["total"]);
	$notas = $_POST["notas"];
	
   $select = mysqli_query($con,"SELECT cantidad FROM  tipo where idtipo='$tipo'");
   $row1 = mysqli_fetch_array($select);
   	$cantidad=$row1['cantidad'];
   

   $suma = $cantidad + $galones;
	// REGISTER data into database
    $sql = "INSERT INTO cargas(fecha, factura, tipo, galones, precio, total, notas) VALUES ('$fecha','$factura','$tipo','$galones','$precio','$total','$notas')";
    $query = mysqli_query($con,$sql);

    $select = mysqli_query($con,"UPDATE `gasolinera`.`tipo` SET `cantidad`='$suma' WHERE `idtipo`='$tipo';");
    // if product has been added successfully
    if ($query) {
        $messages[] = "Se a guardado con éxito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
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