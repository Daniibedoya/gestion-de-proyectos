<!DOCTYPE html>
<html>
	<!-- <head> -->
		<?php 
			$data['tituloVentana'] = 'Consultar Areas';
			$this->load->view('Plantillas/header', $data); 
		?>
	<!-- </head> -->
	<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">
		<!-- Barra de Navegacion Superior -->
		<?php 
			$this->load->view('Plantillas/nav');
		?>
		<!-- Menu Lateral Izquierdo -->
		<?php 
			$this->load->view('Plantillas/menu');
		?>

		<!-- CONTENIDO DE LA VISTA -->
		<div class="app-content content container-fluid">
      		<div class="content-wrapper">
				<section id="feather-icons">
				    <div class="row">
				        <div class="col-xs-12">
				            <div class="card">
				                <div class="card-body collapse in">
				                    <div class="card-block">
					                    <div class="row">
					                    	<div class="col-md-2"></div>
					                    	<div class="col-md-8">													
							                    <div class="table-responsive">
											        <table class="table table-hover table-bordered mb-0">
											            <thead style="background-color: #d5d5d5;">
											                <tr>
											                  <th scope="col"><center>Codigo area</center></th>
											                  <th scope="col"><center>Descripcion area</center></th>
															  <th scope="col"><center>Acciones</center></th>
											                </tr>
											            </thead>
											            <tbody id="lista_areas">
											            </tbody>
											        </table>
											    </div>
										    </div>
										    <div class="col-md-2"></div> 
					                    </div>
					                </div>																			
				                </div>
				            </div>
				        </div>
				    </div>
				</section>
			</div>
		</div>

		<div class="modal fade" id="editar_area" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		          	<div class="modal-header">
		            	<center><h4 class="modal-title">Editar area</h4></center> 
		            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              		<span aria-hidden="true">×</span>
		            	</button>
		          	</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-feedback">
									<label>Codigo Area</label>
									<input id="codigo" type="number" readonly="readonly" class="form-control form-control-lg input-lg">
								</div>
								<div class="form-group has-feedback">
									<label>Descripcion</label>
									<input id="descripcion" type="text" class="form-control form-control-lg input-lg">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
							<button id="btn_editar_area" type="submit" class="btn btn-success" data-dismiss="modal"><i class="fa fa-save"></i>Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php 
			$this->load->view('Plantillas/footer'); 
		?>
		<script type="text/javascript">
			$( document ).ready(function() {
				consultarAreas();
			});

			function consultarAreas() {
				$.ajax({
			        type:'POST',
			        url:'<?php echo base_url('Index.php/Areas/getAreas');?>',
			        success:function (data){
						var data=JSON.parse(data);
						var fila = '';
						fila += '<tr scope="row">';
						if (data) {
							var lista_areas = data;	
							for (var i = 0; i < lista_areas.length; i++) {
								
								fila += '<tr scope="row">';
								fila +=		'<td class="cod_area"><center>'+lista_areas[i].cod_area+'</center></td>';
								fila +=		'<td class="descripcion_area"><center>'+lista_areas[i].descripcion_area+'</center></td>';
								fila +=		'<td class="td_botones">';
								fila +=			'<center>';
								fila +=				'<button class="editar btn btn-success mover" data-id="'+lista_areas[i].cod_area+'" data-toggle="modal" data-target="#editar_area"><i class="icon-android-create"></i></button>';
								fila +=				'<button class="eliminar btn btn-danger" data-id="'+lista_areas[i].cod_area+'"><i class="icon-android-delete"></i></button>';
								fila +=			'</center>';          
								fila +=		'</td>';
								fila += '</tr>';
							}
						} else {
							fila +='<td colspan="3"><div class="alert alert-warning" role="alert">No se encontro ningun area registrada</div></td>';
						}
						
						fila += '</tr>';

						$("#lista_areas").html(fila);
						$(".editar").off("click").on("click", obtener_datos);
						$(".eliminar").off("click").on("click", eliminar);
			        }
		    	});
			}

			function obtener_datos() {
				var codigo=$(this).data("id");
				var descripcion=$(this).parents("tr").find(".descripcion_area").text();
				
				$("#codigo").val(codigo);
				$("#descripcion").val(descripcion);
				$("#btn_editar_area").off("click").on("click", editar_area);
			}

			function editar_area() {
				var codigo=$("#codigo").val();
				var descripcion=$("#descripcion").val();
				$.ajax({
					type:"POST",
					data: {codigo:codigo,
					descripcion,descripcion},
					url:"<?php echo base_url('Index.php/Areas/editar_areas')?>",
					success:function(data){
						var data = JSON.parse(data);
						if (data){
							consultarAreas();
							swal("¡El area ha sido editada!", {
								icon: "success",
							});
						}else{
							swal("No se edito",{
								icon: "warning",
							});
						};
					}
				});
			}

			function eliminar() {
				var cod_area = $(this).data('id');
				$(this).parents('tr').attr('id', 'fila_eliminar');
				swal({
					title: "¿Estás seguro?",
					text: "¡Una vez eliminado, no podrás recuperarlo!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
			  		if (willDelete) {
				  		$.ajax({
							type:"POST",
							data: {cod_area:cod_area},
							url:"<?php echo base_url('Index.php/Areas/eliminarAreas')?>",
							success:function(data){
								var data = JSON.parse(data);
								if (data){
									consultarAreas();
									swal("¡El area ha sido eliminado!", {
				      					icon: "success",
									});
								}else{
							    	swal("No se Elimino el area",{
							    		icon: "warning",
							    	});
							  	};
				    		}
						});
				  	}else{
				    	swal("No se Elimino el area",{
				    		icon: "warning",
				    	});
				  	}
				});
			}
		</script>
	</body>
</html>