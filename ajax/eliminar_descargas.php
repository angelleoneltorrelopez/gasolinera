<?php
	if (empty($_POST['delete_id'])){
		$errors[] = "Id vacío.";
	} elseif (!empty($_POST['delete_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $iddescargas=intval($_POST['delete_id']);
	
$descargas = mysqli_query($con,"SELECT tipo,galones FROM  descargas where iddescargas='$iddescargas'");
$raw= mysqli_fetch_array($descargas);
$tipo = $raw['tipo'];
$galones = $raw['galones'];

$select = mysqli_query($con,"SELECT cantidad FROM  tipo where idtipo='$tipo'");
   $row1 = mysqli_fetch_array($select);
   	$cantidad=$row1['cantidad'];
   
   $suma = $cantidad + $galones;
	// DELETE FROM  database
    $sql = "DELETE FROM  descargas WHERE iddescargas='$iddescargas'";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
    	$select = mysqli_query($con,"UPDATE `gasolinera`.`tipo` SET `cantidad`='$suma' WHERE `idtipo`='$tipo';");
        $messages[] = "El producto ha sido eliminado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
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