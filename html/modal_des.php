<div id="desProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="des_product" id="des_product">
					<div class="modal-header">
						<h4 class="modal-title">Descargas</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Fecha</label>
							<input type="date" name="fecha"  id="fecha" class="form-control" values="" >

						</div>
						<div class="form-group">
							<label>Vale</label>
							<input type="text" name="vale" id="vale" class="form-control" values="" required>
						</div>
						<div class="form-group">
							<label>Placa</label>
							<input type="text" name="placa" id="placa" class="form-control" value="" required>
						</div>
						<div class="form-group">
							<label>Piloto</label>
							<input type="text" name="piloto" id="piloto" class="form-control" value="" required>
						</div>
						<div class="form-group">
							<label>Tipo</label>
							<select class="js-example-basic-single" name="tipo" id="tipo" class="form-control" required>
				             <option value="Diesel">Diesel</option>
				             <option value="Regular">Regular</option>
				             <option value="Super">Super</option>
				            </select>
						</div>
						<div class="form-group">
							<label>Galones</label>
							<input type="number" name="galones" id="galones" class="form-control" value="" required>
						</div>
						<div class="form-group">
							<label>Notas</label>
							<input type="text" name="notas" id="notas" class="form-control" value="" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>
