		$(function() {
			load(1);
			load2(1);
			load3(1);
		});

		function load(page){
			var query=$("#q").val();
			var per_page=5;
			var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/listar_productos.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}


		function load2(page){
			var query=$("#s").val();
			var per_page=5;
			var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/listar_descargas.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".outer2_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}


		function load3(page){
			var query=$("#h").val();
			var per_page=5;
			var parametros = {"action":"ajax"};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/listar_tipo.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".outer3_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}



		$('#editProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var fecha = button.data('fecha') 
		  $('#edit_fecha').val(fecha)
		  var factura = button.data('factura') 
		  $('#edit_factura').val(factura)
		  var tipo = button.data('tipo') 
		  $('#edit_tipo').val(tipo)
		  var galones = button.data('galones') 
		  $('#edit_galones').val(galones)
		  var precio = button.data('precio') 
		  $('#edit_precio').val(precio)
		  var total = button.data('total') 
		  $('#edit_total').val(total)
		  var notas = button.data('notas') 
		  $('#edit_notas').val(notas)
		  var idcargas = button.data('idcargas') 
		  $('#edit_id').val(idcargas)
		})
		
		$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('idcargas') 
		  $('#delete_id').val(id)
		})
		
		$('#deleteProductModaldes').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('iddescargas') 
		  $('#delete_id').val(id)
		})
		
		$( "#edit_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#editProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		
		$( "#add_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					load3(1);
					$('#addProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});


		$( "#des_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/descargar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load2(1);
					load3(1);
					$('#desProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});

		
		$( "#delete_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/eliminar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					load3(1);
					$('#deleteProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});

		$( "#delete_des" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/eliminar_descargas.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load2(1);
					load3(1);
					$('#deleteProductModaldes').modal('hide');
				  }
			});
		  event.preventDefault();
		});