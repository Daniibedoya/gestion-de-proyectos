<!DOCTYPE html>
<html>
<!-- <head> -->
<?php 
	$data['tituloVentana'] = 'Consultar Proyecto';
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

		<div class="app-content content container-fluid">
      		<div class="content-wrapper" >
      			<input id="cod_proyecto" type="hidden" class="form-control" value="<?php echo $cod_proyecto?> ">
				<section>
				    <div class="row">
				    	<input id="documento" style="display: none" value="<?php echo $this->session->userdata('sesionProyectoADSI')['documento_usuario']; ?>" >
				        <div class="col-xs-12">
				            <div class="card">
				                <div class="card-body collapse in">
				                    <div class="card-block">
					                    <div class="row">												
						                    <div class="table-responsive">
										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION BASICA </h4>
										        	<hr>
								                		<form action="#" class="was-validated">
								                			<div class="row">
										                		<div class="col-md-6">
										                			<fieldset class="form-group">
										                				<input type="text" id="nombre_linea" data-toggle="tooltip" data-placement="top" title="Linea del proyecto" class="form-control form-control-lg " readonly="">
																	</fieldset>
										                		</div>
										                		<div class="col-md-6">
										                			<fieldset class="form-group">
											                			<input type="text" id="titulo_proyecto" class="form-control form-control-lg " placeholder="Titulo del proyecto" data-toggle="tooltip" data-placement="top" title="Titulo proyecto" readonly="">
																	</fieldset>
										                		</div>			
								                			</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="resumen" class="form-control form-control-lg " placeholder="Resumen del proyecto" data-toggle="tooltip" data-placement="top" title="Resumen del proyecto" readonly="">
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="objetivo_general" class="form-control form-control-lg " placeholder="Objetivo general del proyecto" data-toggle="tooltip" data-placement="top" title="Objetivo general del proyecto" readonly="">
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="nombre_area" data-toggle="tooltip" data-placement="top" title="Nombre del Area" class="form-control form-control-lg " readonly="">
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="nombre_sub_area" data-toggle="tooltip" data-placement="top" title="Nombre de la Sub Area" class="form-control form-control-lg " readonly="">
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="sector_economico" class="form-control form-control-lg " placeholder="Sector economico"  data-toggle="tooltip" data-placement="top" title="Sector economico" readonly="" >
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="red_de_conocimiento" class="form-control form-control-lg " placeholder="Red de conocimiento"  data-toggle="tooltip" data-placement="top" title="Red de conocimiento" readonly="">
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="number" id="ciuu" class="form-control form-control-lg " placeholder="Clasificación Industrial Internacional Uniforme"  data-toggle="tooltip" data-placement="top" title="Clasificacion Industrial Internacional Uniforme" readonly="">
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="tiempo_ejecucion" class="form-control form-control-lg " placeholder="Tiempo de ejecución del proyecto" data-toggle="tooltip" data-placement="top" title="Tiempo de ejecucion del proyecto" readonly="">
									                				</fieldset>
									                			</div>
									                		</div>
															<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="date" id="fecha_inicio" class="form-control form-control-lg " placeholder="Fecha de inicio" data-toggle="tooltip" data-placement="top" title="Fecha de inicio" readonly="">
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="date" id="fecha_fin" class="form-control form-control-lg " placeholder="Fecha de fin" data-toggle="tooltip" data-placement="top" title="Fecha de fin" readonly="">
									                				</fieldset>
									                			</div>
									                		</div>
									                	</form>
										        </section>

										        <section style="padding: 20px;">
											        <form class="form-horizontal form-simple" method="POST" autocomplete="off">
											        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION DETALLADA </h4>
											        	<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="link_video" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Direccion del video" readonly="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="economia_naranja" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Economia naranja" readonly="">
								                				</fieldset>
								                			</div>
										                </div>
														<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="justificacion_eco_naranja" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Justificacion economia naranja" readonly="" >
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="componente_innovador" class="form-control form-control-lg "data-toggle="tooltip" data-placement="top" title="Componente innovador" readonly="">
								                				</fieldset>
								                			</div>
								                		</div>
														<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="generar_procesos_innovadores" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Procesos innovadores" readonly="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="antecedentes" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Antecedentes del proyecto" readonly="">
								                				</fieldset>
								                			</div>
								                		</div>
								                		<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="proyectos_anteriores" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Titulo proyectos anteriores" readonly="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="planteamiento_problema_a" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Planteamiento del problema A" readonly="">
								                				</fieldset>
								                			</div>
								                		</div>
								                		<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="planteamiento_problema_b" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Planteamiento del problema B" readonly="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="justificacion" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Justificacion del proyecto" readonly="">
								                				</fieldset>
								                			</div>
								                		</div>
										                <div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="metodologia" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Metodologia" readonly="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="number" id="documento_usuario" class="form-control form-control-lg " value="<?php echo $this->session->userdata('sesionProyectoADSI')['documento_usuario']; ?>" readonly data-toggle="tooltip" data-placement="top" title="documento usuario">
								                				</fieldset>
								                			</div>
							                			</div>
													</form>
										    	</section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION OBJETIVOS </h4>
										        	<hr>
										        	<div class="row">
										        		<div class="col-md-1"></div>
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Codigo Objetivo</center></th>
												        			<th><center>Descripción Objetivo</center></th>
												        		</thead>
												        		<tbody class="lista_objetivos_tabla">
										        				</tbody>
										        			</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>
										        </section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION ACTIVIDADES </h4>
										        	<hr>
										        	<div class="row">
										        		<div class="col-md-1"></div>
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Codigo Actividad</center></th>
												        			<th><center>Descripción Actividad</center></th>
												        			<th><center>Tipo Actividad</center></th>
												        			<th><center>Objetivo</center></th>
												        		</thead>
												        		<tbody class="lista_actividades">
												        		</tbody>
												        	</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>								        
										        </section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION RESULTADOS </h4>
										        	<hr>
										        	<div class="row">
										        		<div class="col-md-1"></div>
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Codigo Resultado</center></th>
												        			<th><center>Descripción Resultados</center></th>
												        			<th><center>Descripción Actividad</center></th>
												        		</thead>
												        		<tbody class="lista_resultados">
												        		</tbody>
												        	</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>
										        </section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION PRODUCTOS </h4>
										        	<hr>
										        	<div class="row">
										        		<div class="col-md-1"></div>
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Codigo Producto</center></th>
												        			<th><center>Descripción Producto</center></th>
												        			<th><center>Descripnción Resultado</center></th>
												        			<th><center>Fecha Entrega</center></th>
												        		</thead>
												        		<tbody class="lista_productos">
												        		</tbody>
												        	</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>   
										        </section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION INDICADORES </h4>
										        	<hr>
													<div class="row">
										        		<div class="col-md-1"></div>
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Codigo Indicador</center></th>
												        			<th><center>Descripción Indicador</center></th>
												        			<th><center>Descripción Producto</center></th>
												        		</thead>
												        		<tbody class="lista_indicadores">
												        		</tbody>
												        	</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>
										        </section>
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
   	</body>

<?php 
	$this->load->view('Plantillas/footer'); 
?>

	<script type="text/javascript">
		$( document ).ready(function() {
			consultarProyecto();
			consultarObjetivos();
			consultarActividad();
			consultarResultados();
			consultarProductos();
			consultarIndicadores();
		});

		function consultarProyecto(codigo, nombre){
			var codigo = $("#cod_proyecto").val();
			
			$.ajax({
				type:'POST',
				data: {codigo:codigo},
				url:"<?php echo base_url('Index.php/Proyectos/seleccionar_proyecto');?>",
				success:function (data){
					var proyecto = JSON.parse(data);

					for (var i = 0; i < proyecto.length; i++) {
						$("#titulo_proyecto").val(proyecto[i].titulo_proyecto);
						$("#resumen").val(proyecto[i].resumen);
						$("#objetivo_general").val(proyecto[i].objetivo_general);
						$("#nombre_linea").val(proyecto[i].nombre_linea);
						$("#nombre_area").val(proyecto[i].descripcion_area);
						$("#nombre_sub_area").val(proyecto[i].descripcion_sub_area);
						$("#sector_economico").val(proyecto[i].sector_economico);
						$("#red_de_conocimiento").val(proyecto[i].red_de_conocimiento);
						$("#ciuu").val(proyecto[i].ciuu);
						$("#tiempo_ejecucion").val(proyecto[i].tiempo_ejecucion);
						$("#fecha_inicio").val(proyecto[i].fecha_inicio);
						$("#fecha_fin").val(proyecto[i].fecha_fin);
						$("#link_video").val(proyecto[i].link_video);
						$("#economia_naranja").val(proyecto[i].economia_naranja);
						$("#justificacion_eco_naranja").val(proyecto[i].justificacion_eco_naranja);
						$("#componente_innovador").val(proyecto[i].componente_innovador);
						$("#generar_procesos_innovadores").val(proyecto[i].generar_procesos_innovadores);
						$("#antecedentes").val(proyecto[i].antecedentes);
						$("#proyectos_anteriores").val(proyecto[i].proyectos_anteriores);
						$("#planteamiento_problema_a").val(proyecto[i].planteamiento_problema_a);
						$("#planteamiento_problema_b").val(proyecto[i].planteamiento_problema_b);
						$("#justificacion").val(proyecto[i].justificacion);
						$("#metodologia").val(proyecto[i].metodologia);
					}
				},
				error: function(data){
					console.log(data);
				}	
			});
		}

		function consultarObjetivos(){
			var cod_proyecto = $("#cod_proyecto").val();

			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_objetivo');?>",
				success:function(data){
					var objetivos = JSON.parse(data);
					
					var fila = '';

					for (var i = 0; i < objetivos.length; i++) {
						fila += '<tr>';
						fila += '	<td><center>'+objetivos[i].cod_objetivo+'</center></td>';
						fila += '	<td><center>'+objetivos[i].descripcion_objetivo+'</center></td>';
						fila += '</tr>';						
					}
					
					$(".lista_objetivos_tabla").html(fila);
				}

			});	
		}

		function consultarActividad(){
			var cod_proyecto = $("#cod_proyecto").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_actividad');?>",
				success:function(data){
					var actividad = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < actividad.length; i++) {
						fila += '<tr>';
						fila += '	<td><center>'+actividad[i].cod_actividad+'</center</td>';			        				
						fila += '	<td><center>'+actividad[i].descripcion_actividad+'</center</td>';
						fila += '	<td><center>'+actividad[i].tipo_actividad+'</center</td>';
						fila += '	<td><center>'+actividad[i].descripcion_objetivo+'</center</td>';		
						fila += '</tr>';				        						
					}

					$(".lista_actividades").html(fila);
				}
			});
		}

		function consultarResultados(){
			var cod_proyecto = $("#cod_proyecto").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_resultado');?>",
				success:function(data){
					var resultado = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < resultado.length; i++) {
						fila += '<tr>';
						fila += '	<td><center>'+resultado[i].cod_resultado+'</center</td>';			        				
						fila += '	<td><center>'+resultado[i].descripcion_resultado+'</center</td>';
						fila += '	<td><center>'+resultado[i].descripcion_actividad+'</center</td>';		
						fila += '</tr>';				        						
					}

					$(".lista_resultados").html(fila);
				}
			});
		}

		function consultarProductos(){
			var cod_proyecto = $("#cod_proyecto").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_producto');?>",
				success:function(data){
					var productos = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < productos.length; i++) {
						fila += '<tr>';
						fila += '	<td><center>'+productos[i].cod_producto+'</center</td>';			        				
						fila += '	<td><center>'+productos[i].descripcion_producto+'</center</td>';
						fila += '	<td><center>'+productos[i].descripcion_resultado+'</center</td>';
						fila += '	<td><center>'+productos[i].fecha_entrega+'</center</td>';			
						fila += '</tr>';				        						
					}

					$(".lista_productos").html(fila);
				}
			});
		}

		function consultarIndicadores(){
			var cod_proyecto = $("#cod_proyecto").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_indicador');?>",
				success:function(data){
					var indicadores = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < indicadores.length; i++) {
						fila += '<tr>';
						fila += '	<td><center>'+indicadores[i].cod_indicador+'</center</td>';			        				
						fila += '	<td><center>'+indicadores[i].descripcion_indicador+'</center</td>';
						fila += '	<td><center>'+indicadores[i].descripcion_producto+'</center</td>';		
						fila += '</tr>';				        						
					}

					$(".lista_indicadores").html(fila);
				}
			});
		}

	</script>
</html>