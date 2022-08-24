<!DOCTYPE html>
<html>
	<!-- <head> -->
		<?php 
			$data['tituloVentana'] = 'Proyectos';
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
      		<div class="content-wrapper" >
				<section id="feather-icons">
				    <div class="row">
				        <div class="col-xs-12">
				            <div class="card">
				                <div class="row">
				            		<div class="col-md-1"></div>
				            		<div class="col-md-10">
				            			<div class="card-body collapse in">
						                    <div class="card-block">
												<div class="info_proyecto" >
													<div class="card-header no-border ">
									                    <h5 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-3">
									                  		<span>Crear Información del Proyecto</span>
									                	</h5>
										            </div>
									                <div class="card-body">
								                		<form action="#" id="agregar_proyecto" autocomplete="off">
								                			<div class="row">
										                		<div class="col-md-6">
										                			<fieldset class="form-group" >
																	<select  id="cod_linea" class="form-control  input-lg" data-toggle="tooltip" data-placement="top" title="Seleccione una linea de conocimiento:" required>
																		
																	</select>
																	</fieldset>
										                		</div>
										                		<div class="col-md-6">
										                			<fieldset class="form-group">
											                			<input type="text" id="titulo_proyecto" class="form-control form-control-lg input-lg" placeholder="Titulo del proyecto" data-toggle="tooltip" data-placement="top" title="Titulo del proyecto:" required>
																	</fieldset>
										                		</div>			
								                			</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="resumen" class="form-control form-control-lg input-lg" placeholder="Resumen del proyecto" data-toggle="tooltip" data-placement="top" title="Resumen del proyecto:" required>
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="objetivo_general" class="form-control form-control-lg input-lg" placeholder="Objetivo general del proyecto" data-toggle="tooltip" data-placement="top" title="Objetivo general del proyecto:" required>
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
																		<select  id="cod_area" class="form-control form-control-lg input-lg" data-toggle="tooltip" data-placement="top" title="Seleccione un area de conocimiento:" required>
																		</select>
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
																	<select  id="cod_sub_area" class="form-control form-control-lg input-lg" data-toggle="tooltip" data-placement="top" title="Seleccione una sub area de conocimiento:" required>
																	</select>
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="sector_economico" class="form-control form-control-lg input-lg" placeholder="Sector economico al cual se dirige" data-toggle="tooltip" data-placement="top" title="Sector economico al cual se dirige:" required>
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="red_de_conocimiento" class="form-control form-control-lg input-lg" placeholder="Red de conocimiento" data-toggle="tooltip" data-placement="top" title="Red de Conocimiento:" required>
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="number" id="ciuu" class="form-control form-control-lg input-lg" placeholder="Clasificación Industrial Internacional Uniforme" data-toggle="tooltip" data-placement="top" title="Clasificación Industrial Internacional Uniforme:" required>
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="tiempo_ejecucion" class="form-control form-control-lg input-lg" placeholder="Tiempo de ejecucion del proyecto" data-toggle="tooltip" data-placement="top" title="Tiempo de ejecucion del proyecto:" required>
									                				</fieldset>
									                			</div>
									                		</div>
															<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="date" id="fecha_inicio" class="form-control form-control-lg input-lg" placeholder="Fecha de inicio" data-toggle="tooltip" data-placement="top" title="Fecha de inicio:" required>
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="date" id="fecha_fin" class="form-control form-control-lg input-lg" placeholder="Fecha de fin" data-toggle="tooltip" data-placement="top" title="Fecha de fin:" required>
									                				</fieldset>
									                			</div>
									                		</div>
									                		<input type="hidden" id="estado_proyecto" class="form-control form-control-lg input-lg" value="Proceso">
															<button type="submit" class="btn btn-primary btn-lg btn-block">
																Guardar 
															</button>
														</form>
									                </div>
										        </div>
    										</div>  
				            			</div>
				        			</div>
				    			</div>
				    		</div>
				    	</div> 
				    </div>
				</section>
			</div>
		</div>
		<!-- Footer -->
		<?php 
			$this->load->view('Plantillas/footer'); 
		?>
	</body>

	<script type="text/javascript">
		$( document ).ready(function() {
			obtener_selects();
			
			$("#agregar_proyecto").submit(agregar_proyecto);
		});

		function obtener_selects() {
			$.ajax({
		        type:'POST',
		        url:"<?php echo base_url('Index.php/Lineas/get_lineas');?>",
		        success:function (data){
					
		            var lista = JSON.parse(data);
					var fila = '';
					fila+='<option  value="" disabled>Seleccione una linea</option>';
					for (var i = 0; i < lista.length; i++) {
						fila+='	<option value="'+lista[i].cod_linea+'" >'+lista[i].nombre_linea+'</option>';
					}
					$('#cod_linea').html(fila);
					$(".form-control").val("");
	        	}
			});
			$.ajax({
				type:'POST',
				url:'<?php echo base_url('Index.php/Areas/getAreas');?>',
				success:function (data){	
					var lista = JSON.parse(data);
					var fila = '';
					fila+='	<option disabled value="">Seleccione un area</option>';
					for (var i = 0; i < lista.length; i++) {
						
						fila+='	<option value="'+lista[i].cod_area+'" >'+lista[i].descripcion_area+'</option>';
					}
					$('#cod_area').html(fila);
					$(".form-control").val("");
				}
			});


			$.ajax({
				type:'POST',
				url:'<?php echo base_url('Index.php/subAreas/getSub_areas');?>',
				success:function (data){	
					var lista = JSON.parse(data);
					var fila = '';
					fila+='	<option disabled value="">Seleccione una sub area</option>';
					for (var i = 0; i < lista.length; i++) {
						
						fila+='	<option value="'+lista[i].cod_sub_area+'" >'+lista[i].descripcion_sub_area+'</option>';
					}
					$('#cod_sub_area').html(fila);
					$(".form-control").val("");
				}
			});
		}
	
		function agregar_proyecto(event) {
			event.preventDefault();

			var cod_linea=$('#cod_linea').val();
			var titulo_proyecto=$('#titulo_proyecto').val();
			var resumen=$('#resumen').val();
			var objetivo_general=$('#objetivo_general').val();
			var cod_area=$('#cod_area').val();
			var cod_sub_area=$('#cod_sub_area').val();
			var sector_economico=$('#sector_economico').val();
			var red_de_conocimiento=$('#red_de_conocimiento').val();
			var ciuu=$('#ciuu').val();
			var tiempo_ejecucion=$('#tiempo_ejecucion').val();
			var fecha_inicio=$('#fecha_inicio').val();
			var fecha_fin=$('#fecha_fin').val();
			/*var link_video=$('#link_video').val();
			var economia_naranja=$('#economia_naranja').val();
			var justificacion_eco_naranja=$('#justificacion_eco_naranja').val();
			var componente_innovador=$('#componente_innovador').val();
			var generar_procesos_innovadores=$('#generar_procesos_innovadores').val();
			var antecedentes=$('#antecedentes').val();
			var proyectos_anteriores=$('#proyectos_anteriores').val();
			var planteamiento_problema_a=$('#planteamiento_problema_a').val();
			var planteamiento_problema_b=$('#planteamiento_problema_b').val();
			var justificacion=$('#justificacion').val();
			var metodologia=$('#metodologia').val();
			var documento_usuario=$('#documento_usuario').val();
			var estado_proyecto=$('#estado_proyecto').val();*/
			if (fecha_inicio<fecha_fin) {
				$.ajax({
				type:"POST",
				data:{
					cod_linea:cod_linea,
					titulo_proyecto:titulo_proyecto,
					resumen:resumen,
					objetivo_general:objetivo_general,
					cod_area:cod_area,
					cod_sub_area:cod_sub_area,
					sector_economico:sector_economico,
					red_de_conocimiento:red_de_conocimiento,
					ciuu:ciuu,
					tiempo_ejecucion:tiempo_ejecucion,
					fecha_inicio:fecha_inicio,
					fecha_fin:fecha_fin/*,
					/*link_video:link_video,
					economia_naranja:economia_naranja,
					justificacion_eco_naranja:justificacion_eco_naranja,
					componente_innovador:componente_innovador,
					generar_procesos_innovadores:generar_procesos_innovadores,
					antecedentes:antecedentes,
					proyectos_anteriores:proyectos_anteriores,
					planteamiento_problema_a:planteamiento_problema_a,
					planteamiento_problema_b:planteamiento_problema_b,
					justificacion:justificacion,
					metodologia:metodologia,
					documento_usuario:documento_usuario,
					estado_proyecto:estado_proyecto*/
					},
					url:"<?php echo base_url('Index.php/Proyectos/agregar_proyecto');?>",
					success:function(data){
						var data = JSON.parse(data);
						if (data){
							swal("¡El proyecto se registro con exito!", {
								icon: "success",
							});
							$("#id_generado").val(data);
							location.href="<?php echo base_url('Proyectos/consultarMiProyecto')?>";
						}else{
							swal("No se agrego el proyecto",{
								icon: "warning",
							});
						};


					}
				});
			}else{
				swal("Por favor diite unas fechas validas de inicio y final",{
					icon: "warning",
				});
			}
			
		}
	</script>
</html>