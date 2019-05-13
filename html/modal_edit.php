<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Producto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>ID</label>
							<input type="text" name="edit_id" id="edit_id" class="form-control" disabled >
						</div>
						<div class="form-group">
							<label>Fecha</label>
							<input type="date" name="edit_fecha"  id="edit_fecha" class="form-control" >

						</div>
						<div class="form-group">
							<label>Factura</label>
							<input type="text" name="edit_factura" id="edit_factura" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Tipo</label>
							<select class="js-example-basic-single" name="edit_tipo" id="edit_tipo" class="form-control" required>
				             <option value="Diesel">Diesel</option>
				             <option value="Regular">Regular</option>
				             <option value="Super">Super</option>
				            </select>
						</div>
						<div class="form-group">
							<label>Galones</label>
							<input type="number" name="edit_galones" id="edit_galones" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="number" name="edit_precio" id="edit_precio" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Total</label>
							<input type="number" name="edit_total" id="edit_total" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Notas</label>
							<input type="text" name="edit_notas" id="edit_notas" class="form-control">
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>