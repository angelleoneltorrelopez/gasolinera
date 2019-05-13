<?php
	
	/* Connect To Database*/
	require_once ("../conexion.php");

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	$tables="descargas";
	$campos="*";
	$sWhere=" descargas.vale LIKE '%".$query."%'";
	$sWhere.=" order by descargas.vale";
	
	
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //¿Cuántos discos quieres mostrar?
	$adjacents  = 4; //Brecha entre páginas después del número de adyacentes
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	//loop through fetched data
	
	if ($numrows>0){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class='text-center'>ID</th>
						<th>Fecha </th>
						<th>Vale </th>
						<th>Placa </th>
						<th>Piloto </th>
						<th>Tipo</th>
						<th class='text-right'>Galones</th>
						<th>Notas </th>
						<th></th>
					</tr>
				</thead>
				<tbody>	
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){	
							$iddescargas=$row['iddescargas'];
							$fecha=$row['fecha'];
							$vale=$row['vale'];
							$placa=$row['placa'];
							$piloto=$row['piloto'];
							$tipo=$row['tipo'];
							$galones=$row['galones'];
							$notas=$row['notas'];						
							$finales++;
						?>	
						<tr class="<?php echo $text_class;?>">
							<td class='text-center'><?php echo $iddescargas;?></td>
							<td ><?php echo $fecha;?></td>
							<td ><?php echo $vale;?></td>
							<td ><?php echo $placa;?></td>
							<td ><?php echo $piloto;?></td>
							<td ><?php echo $tipo;?></td>
							<td class='text-right'><?php echo number_format($galones,2);?></td>
							<td ><?php echo $notas;?></td>
							<td>
								<a href="#"  data-target="#editProductModal" class="edit" data-toggle="modal" data-fecha="<?php echo $fecha?>" data-vale="<?php echo $vale?>" data-placa="<?php echo $placa?>" data-piloto="<?php echo $piloto;?>" data-tipo="<?php echo $tipo; ?>" data-galones="<?php echo $galones; ?>" data-notas="<?php echo $notas; ?>" data-iddescargas='<?php echo $iddescargas;?>'><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
								<a href="#deleteProductModaldes" class="delete" data-toggle="modal" data-iddescargas="<?php echo $iddescargas;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                    		</td>
						</tr>
						<?php }?>
						<tr>
							<td colspan='8'> 
								<?php 
									$inicios=$offset+1;
									$finales+=$inicios -1;
									echo "Mostrando $inicios al $finales de $numrows registros";
									echo paginate( $page, $total_pages, $adjacents);
								?>
							</td>
						</tr>
				</tbody>			
			</table>
		</div>	

	
	
	<?php	
	}	
}
?>          
		  
