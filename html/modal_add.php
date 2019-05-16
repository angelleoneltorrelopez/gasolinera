<div id="addProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_product" id="add_product">
					<div class="modal-header">
						<h4 class="modal-title">Cargas</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Fecha</label>
							<input type="date" name="fecha"  id="fecha" class="form-control" values="" >

						</div>
						<div class="form-group">
							<label>Factura</label>
							<input type="text" name="factura" id="factura" class="form-control" values="" required>
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
							<label>Precio</label>
							<input type="number" name="precio" id="precio" class="form-control" value="" required>
						</div>
						<div class="form-group">
							<label>Total</label>
							<input type="number" name="total" id="total" class="form-control" value="" required>
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
