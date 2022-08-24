<!DOCTYPE html>
<html>
<!-- <head> -->
<?php 
	$data['tituloVentana'] = 'Consultar Proyecto';
	$this->load->view('Plantillas/header', $data); 
?>
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
      			<!-- Lista de Mis Proyectos -->
				<section id="contendorListaMisProyectos">
				    <div class="row">
				    <input id="documento" style="display: none" value="<?php echo $this->session->userdata('sesionProyectoADSI')['documento_usuario']; ?>" >
				        <div class="col-xs-12">
				            <div class="card">
				                <div class="card-body collapse in">
				                    <div class="card-block">
					                    <div class="row">												
						                    <div class="table-responsive">
						                    	<h3 style="padding-left: 20px;">LISTA DE MIS PROYECTOS</h3>
						                    	<br>
						                    	<div class="col-md-6">
						                    		<table class="table table-bordered table-hover justify-content-center  ">
											            <thead>
											                <tr>
											                  <th>Codigo Proyecto</th>
											                  <th>Titulo Proyecto</th>
											                  <th>Linea de conocimiento</th>
											                  <th>Area de conocimiento</th>
											                  <th>Sector Economico</th>
											                  <th>CIUU</th>
											                  <th>Fecha inicio</th>
											                  <th>Fecha fin</th>
											                  <th>Opciones</th>
											                </tr>
											            </thead>
											            <tbody id="info_proyecto">
											            </tbody>
											        </table>
						                    	</div>
										    </div>
					                    </div>
					                </div>										
				                </div>
				            </div>
				        </div>
				    </div>
				</section>

				<!-- Lista de Mis Proyectos -->
				<section id="contendorInformacionProyectos" style="display: none;">
				    <div class="row">
				    <input id="documento" style="display: none" value="<?php echo $this->session->userdata('sesionProyectoADSI')['documento_usuario']; ?>" >
				        <div class="col-xs-12">
				            <div class="card">
				                <div class="card-body collapse in">
				                    <div class="card-block">
					                    <div class="row">												
						                    <div>
						                    	<h3 style="padding-left: 20px; display: inline-block;">PROYECTO - <b><span id="cod_proyecto_actual"></span></b></h3>
						                    	<button id="ocultarContenedorInfoProyecto" class="float-sm-right btn-danger" onclick="mostrarListaMisProyectos()"><i class="icon-cross2"></i></button>
						                    	 <input id="codigoProyectoSeleccionado" type="hidden" readonly="">
										        <br><br>
										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION BASICA </h4>
										        	<hr>
										        	<div class="card-body">
								                		<form action="#" class="was-validated" id="editar_proyecto">
								                			<div class="row">
										                		<div class="col-md-6">
										                			<fieldset class="form-group">
																		<select  id="cod_linea" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Seleccione la linea a la cual pertenece su proyecto">
																		</select>
																	</fieldset>
										                		</div>
										                		<div class="col-md-6">
										                			<fieldset class="form-group">
											                			<input type="text" id="titulo_proyecto" class="form-control form-control-lg " placeholder="Titulo del proyecto" data-toggle="tooltip" data-placement="top" title="Titulo proyecto">
																	</fieldset>
										                		</div>			
								                			</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="resumen" class="form-control form-control-lg " placeholder="Resumen del proyecto" data-toggle="tooltip" data-placement="top" title="Resumen del proyecto">
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="objetivo_general" class="form-control form-control-lg " placeholder="Objetivo general del proyecto" data-toggle="tooltip" data-placement="top" title="Objetivo general del proyecto">
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<div id="select_area">

																		</div>
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<div id="select_sub_area">

																		</div>
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="sector_economico" class="form-control form-control-lg " placeholder="Sector economico"  data-toggle="tooltip" data-placement="top" title="Sector economico" >
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="red_de_conocimiento" class="form-control form-control-lg " placeholder="Red de conocimiento"  data-toggle="tooltip" data-placement="top" title="Red de conocimiento">
									                				</fieldset>
									                			</div>
									                		</div>
									                		<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="number" id="ciuu" class="form-control form-control-lg " placeholder="Clasificación Industrial Internacional Uniforme"  data-toggle="tooltip" data-placement="top" title="Clasificacion Industrial Internacoional Uniforme">
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="text" id="tiempo_ejecucion" class="form-control form-control-lg " placeholder="Tiempo de ejecución del proyecto" data-toggle="tooltip" data-placement="top" title="Tiempo de ejecucion del proyecto">
									                				</fieldset>
									                			</div>
									                		</div>
															<div class="row">
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="date" id="fecha_inicio" class="form-control form-control-lg " placeholder="Fecha de inicio" data-toggle="tooltip" data-placement="top" title="Fecha de inicio">
									                				</fieldset>
									                			</div>
									                			<div class="col-md-6">
									                				<fieldset class="form-group">
									                					<input type="date" id="fecha_fin" class="form-control form-control-lg " placeholder="Fecha de fin" data-toggle="tooltip" data-placement="top" title="Fecha de fin">
									                				</fieldset>
									                			</div>
									                		</div>
									                		<button class="btn btn-success float-sm-right">ACTUALIZAR</button>
									                	</form>
										        </section>

										        <section style="padding: 20px;">
											        <form class="form-horizontal form-simple" method="POST" autocomplete="off" id="informacion_detallada">
											        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION DETALLADA </h4>
											        	<hr>
											        	<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="link_video" class="form-control form-control-lg " placeholder="Direccion del video"  data-toggle="tooltip" data-placement="top" title="Direccion del video" required="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<select  id="economia_naranja" class="form-control form-control-lg "  data-toggle="tooltip" data-placement="top" title="Su proyecto tiene economia naranja?" required="">
																		<option  value="" disabled>Su proyecto tiene economia naranja?</option>
																		<option value="Si" >Si</option>
																		<option value="No" >No</option>
																	</select>
								                				</fieldset>
								                			</div>
										                </div>
														<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="justificacion_eco_naranja" class="form-control form-control-lg " placeholder="Justificacion economia naranja" data-toggle="tooltip" data-placement="top" title="Justificacion economia naranja" >
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="componente_innovador" class="form-control form-control-lg " placeholder="Componente innovador" data-toggle="tooltip" data-placement="top" title="Componente innovador" required="">
								                				</fieldset>
								                			</div>
								                		</div>
														<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="generar_procesos_innovadores" class="form-control form-control-lg " placeholder="Procesos innovadores" data-toggle="tooltip" data-placement="top" title="Procesos innovadores" required="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="antecedentes" class="form-control form-control-lg " placeholder="Antecedentes del proyecto" data-toggle="tooltip" data-placement="top" title="Antecedentes del proyecto" required="">
								                				</fieldset>
								                			</div>
								                		</div>
								                		<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="proyectos_anteriores" class="form-control form-control-lg " placeholder="Titulo proyectos anteriores" data-toggle="tooltip" data-placement="top" title="Titulo proyectos anteriores" required="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="planteamiento_problema_a" class="form-control form-control-lg " placeholder="Planteamiento del problema A" data-toggle="tooltip" data-placement="top" title="Planteamiento del problema A" required="">
								                				</fieldset>
								                			</div>
								                		</div>
								                		<div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="planteamiento_problema_b" class="form-control form-control-lg " placeholder="Planteamiento del problema B" data-toggle="tooltip" data-placement="top" title="Planteamiento del problema B" required="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="justificacion" class="form-control form-control-lg " placeholder="Justificacion del proyecto" data-toggle="tooltip" data-placement="top" title="Justificacion del proyecto" required="">
								                				</fieldset>
								                			</div>
								                		</div>
										                <div class="row">
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="text" id="metodologia" class="form-control form-control-lg " placeholder="Metodologia" data-toggle="tooltip" data-placement="top" title="Metodologia" required="">
								                				</fieldset>
								                			</div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
								                					<input type="number" id="documento_usuario" class="form-control form-control-lg " value="<?php echo $this->session->userdata('sesionProyectoADSI')['documento_usuario']; ?>" readonly data-toggle="tooltip" data-placement="top" title="documento usuario">
								                				</fieldset>
								                			</div>
							                			</div>
														<div class="row">
															<div class="col-md-3"></div>
								                			<div class="col-md-6">
								                				<fieldset class="form-group">
																<select  id="estado_proyecto" class="form-control form-control-lg " required="" data-toggle="tooltip" data-placement="top" title="Estado del proyecto">
																	<option  value="" disabled>Estado proyecto</option>
																	<option value="Proceso" >Proceso</option>
																	<option value="Finalizado" >Finalizado</option>
																</select>
								                				</fieldset>
								                			</div>
															<div class="col-md-3"></div>
							                			</div>
														
								                		<input type="hidden" id="estado_proyecto" class="form-control form-control-lg " value="Proceso" >
														<button class="btn btn-success float-sm-right">ACTUALIZAR</button>
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
												        			<th><center>Objetivo</center></th>
												        			<th><center>Opciones</center></th>
												        		</thead>
												        		<tbody class="lista_objetivos_tabla">
										        				</tbody>
										        			</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>
										        	</br>
										        	<form class="form-horizontal form-simple" id="agregarObjetivos" method="POST" autocomplete="off">
											        	<div class="row">
											        		<div class="col-md-2"></div>
											        		<div class="col-md-6">
											        			<input type="text" class="form-control" id="descripcion_objetivo" placeholder="Descripcion Objetivo:" data-toggle="tooltip" data-placement="top" title="Descripcion Objetivo:">
											        		</div>
											        		<div class="col-md-2">
											        			<button id='btn_objetivos' class="btn btn-primary">+</button>
											        		</div>
												        	<div class="col-md-2"></div>
											        	</div> 
										        	</form>
										        </section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION ACTIVIDADES </h4>
										        	<hr>
										        	<div class="row">
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Objetivo</center></th>
												        			<th><center>Actividad</center></th>
												        			<th><center>Tipo Actividad</center></th>
												        			<th><center>fecha Fin</center></th>
												        			<th><center>fecha Inicio</center></th>
												        			<th><center>Opciones</center></th>
												        		</thead>
												        		<tbody class="lista_actividades">
												        		</tbody>
												        	</table>
										        		</div>
										        	</div>
													</br>
										        	<form class="form-horizontal form-simple" id="agregarActividad" method="POST" autocomplete="off">
											        	<div class="row">
											        		<div class="col-md-1"></div>
											        		<div class="col-md-3">
											        			<input type="text" class="form-control" id="descripcion_actividad" placeholder="Descripcion de la actividad:" required data-toggle="tooltip" data-placement="top" title="Descripcion de la actividad:">
											        		</div>
											        		<div class="col-md-3">
														    	<select class="lista_objetivos form-control" id="cod_objetivo" required required data-toggle="tooltip" data-placement="top" title="Seleccione un objetivo:">
																</select>
											        		</div>
											        		<div class="col-md-2">
											        			<select class="form-control" id="tipo_actividad" required data-toggle="tooltip" data-placement="top" title="Seleccione un tipo de actividad:">
																  <option value="Gestion">Gestión</option> 
																  <option value="Operativa">Operativa</option>
																  <option value="Presupuestal">Presupuestal</option>
																</select>
											        		</div>
											        		
											        		<div class="col-md-2">
											        			<button type="submit" id="btn_actividades" class="btn btn-primary">+</button>
											        		</div>
											        		<div class="col-md-1"></div>
											        	</div>
											        	</br>
											        	<div class="row">
											        		<div class="col-md-2"></div>
											        		<div class="col-md-3">
											        			<input type="date" class="form-control" id="start" required data-toggle="tooltip" data-placement="top" title="Fecha de Inicio:">
											        		</div>
											        		<div class="col-md-3">
											        			<input type="date" class="form-control" id="end" required data-toggle="tooltip" data-placement="top" title="Fecha Fin:">
											        		</div>
											        		<div class="col-md-4"></div>
											        	</div>
								                  	</form>
								                  	</br>
								                  	</br>		
								                  	<div id='calendar'></div>									        
										        </section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION RESULTADOS </h4>
										        	<hr>
										        	<div class="row">
										        		<div class="col-md-1"></div>
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Actividad</center></th>
												        			<th><center>Resultados</center></th>
												        			<th><center>Opciones</center></th>
												        		</thead>
												        		<tbody class="lista_resultados">
												        		</tbody>
												        	</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>
										        	</br>
													<form class="form-horizontal form-simple" id="agregarResultado" method="POST" autocomplete="off">
														<div class="row">
											        		<div class="col-md-1"></div>
											        		<div class="col-md-4">
											        			<input type="text" class="form-control" id="descripcion_resultado" placeholder="Descripcion del resultado:" required data-toggle="tooltip" data-placement="top" title="Descripcion del resultado:">
											        		</div>
											        		<div class="col-md-4">
														    	<select class="lista_actividades form-control" id="cod_actividad" required data-toggle="tooltip" data-placement="top" title="Seleccione una actividad:">
																</select>
											        		</div>
											        		<div class="col-md-2">
											        			<button type="submit" id="btn_resultados" class="btn btn-primary">+</button>
											        		</div>
											        		<div class="col-md-1"></div>
											        	</div>
													</form>	
										        </section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION PRODUCTOS </h4>
										        	<hr>
										        	<div class="row">
										        		<div class="col-md-1"></div>
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Resultado</center></th>
												        			<th><center>Producto</center></th>
												        			<th><center>Fecha Entrega</center></th>
												        			<th><center>Opciones</center></th>
												        		</thead>
												        		<tbody class="lista_productos">
												        		</tbody>
												        	</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>
										        	</br>
													<form class="form-horizontal form-simple" id="agregarProducto" method="POST" autocomplete="off">
														<div class="row">
											        		<div class="col-md-4">
											        			<input type="text" class="form-control" id="descripcion_producto" placeholder="Descripcion del Producto:" required data-toggle="tooltip" data-placement="top" title="Descripcion del Producto:">
											        		</div>
											        		<div class="col-md-3">
											        			<input type="date" class="form-control" id="fecha_entrega" required data-toggle="tooltip" data-placement="top" title="Fecha entrega:">	
											        		</div>
											        		<div class="col-md-3">
												        		<select class="lista_resultados form-control" id="cod_resultado" required data-toggle="tooltip" data-placement="top" title="Seleccione un resultado:">
																</select>
											        		</div>
											        		<div class="col-md-2">
											        			<button type="submit" id="btn_productos" class="btn btn-primary">+</button>
											        		</div>
											        	</div>
													</form>	   
										        </section>

										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION INDICADORES </h4>
										        	<hr>
													<div class="row">
										        		<div class="col-md-1"></div>
										        		<div class="col-md-10">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Producto</center></th>
												        			<th><center>Indicador</center></th>
												        			<th><center>Opciones</center></th>
												        		</thead>
												        		<tbody class="lista_indicadores">
												        		</tbody>
												        	</table>
										        		</div>
										        		<div class="col-md-1"></div>
										        	</div>
													</br>
										        	<form class="form-horizontal form-simple" id="agregarIndicador" method="POST" autocomplete="off">
											        	<div class="row">
											        		<div class="col-md-1"></div>
											        		<div class="col-md-4">
											        			<input type="text" class="form-control" id="descripcion_indicador" placeholder="Descripcion del Indicador:" required data-toggle="tooltip" data-placement="top" title="Descripcion del indicador:">
											        		</div>
											        		<div class="col-md-4">
														    	<select class=" form-control" id="cod_producto" required data-toggle="tooltip" data-placement="top" title="Seleccione un producto:">
																</select>
											        		</div>
											        		<div class="col-md-2">
											        			<button type="submit" id="btn_indicadores" class="btn btn-primary">+</button>
											        		</div>
											        		<div class="col-md-1"></div>
											        	</div>
								                  	</form>	
										        </section>

										        <!--ENTIDAD-->
										        <section style="padding: 20px;">
										        	<h4 class="form-section"><i class="icon-clipboard4"></i> INFORMACION ENTIDADES </h4>
										        	<hr>
										        	<div class="row">
										        		<div class="col-md">
										        			<table class="table table-bordered table-hover">
												        		<thead style="background-color: #d5d5d5;">
												        			<th><center>Nombre entidad</center></th>
												        			<th><center>Naturaleza de la entidad</center></th>
												        			<th><center>Clasificacion de la empresa</center></th>
												        			<th><center>NIT</center></th>
												        			<th><center>Opciones</center></th>
												        		<tbody class="lista_entidades">
										        				</tbody>
										        			</table>
										        		</div>
										        	</div>
										        	</br>
										        	<form class="form-horizontal form-simple" id="agregarEntidad" method="POST" autocomplete="off">
														<div class="row">
															<div class="col-md-1"></div>
															<div class="col-md-5">
																<input type="text" class="form-control form-control-lg input-lg" id="nombre_entidad" placeholder="Nombre de la entidad externa aliada:" required data-toggle="tooltip" data-placement="top" title="Nombre de la entidad aliada:">
															</div>
															<div class="col-md-5">
																<select class="form-control form-control-lg input-lg" id="naturaleza_entidad" required data-toggle="tooltip" data-placement="top" title="Naturaleza de la entidad">
														    		<option disabled="">Naturaleza de la entidad:</option> 
																	<option value="Publica">Publica</option> 
																	<option value="Privada" >Privada</option>
																	<option value="Mixta">Mixta</option>
																	<option value="ONG">Ong</option>
																</select>
															</div>
															<div class="col-md-1"></div>
														</div>
														</br>
														<div class="row">
															<div class="col-md-1"></div>
															<div class="col-md-5">
																<select class="form-control form-control-lg input-lg" id="clasificacion_empresa" required data-toggle="tooltip" data-placement="top" title="Clasificación de empresa">
														    		<option disabled="">Clasificación de empresa:</option> 
																	<option value="Microempesa">Microempesa</option> 
																	<option value="Pequeña" >Pequeña</option>
																	<option value="Mediana">Mediana</option>
																	<option value="Grande">Grande</option>
																</select>
															</div>
															<div class="col-md-5">
																<input type="number" class="form-control form-control-lg input-lg" id="nit" placeholder="Nit:" required data-toggle="tooltip" data-placement="top" title="Nit">
															</div>
															<div class="col-md-1"></div>
														</div>
														</br>
														<div class="row">
															<div class="col-md-1"></div>
															<div class="col-md-5">
																<input type="text" class="form-control form-control-lg input-lg" id="nombre_integrantes" placeholder="Nombres de integrantes que participan de la entidad aliada:" required data-toggle="tooltip" data-placement="top" title="Nombres de integrantes que participan de la entidad aliada"> 
															</div>
															<div class="col-md-2"></div>
															<div class="col-md-2">
																<button type="submit" id="btn_entidades" class="btn btn-primary">+</button>
															</div>
															<div class="col-md-2"></div>
														</div>
										        	</form>
										        </section>

										        <!--INNOVACIÓN-->
												<section style="padding: 20px;">
													<h4 class="form-section"><i class="icon-clipboard4"></i> ESPECIFICACIÓN CULTURA DE LA INNOVACIÓN </h4>
													<hr>
													
													<form class="form-horizontal form-simple" method="POST" autocomplete="off" id="agregar_especificacion_innovacion">
														<div class="row">
															<div class="col-md-6">
												        		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
								                      				<input type="text" class="form-control form-control-lg input-lg" id="lugar_evento" placeholder="Lugar donde se va a desarrollar el evento:" required data-toggle="tooltip" data-placement="top" title="Lugar donde se va a desarrollar el evento">
										                      		
													    		</fieldset>
													    	</div>	
													    	<div class="col-md-6">
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="cantidad_personas_externas" placeholder="Cantidad de personas externas al SENA que se espera participen en el evento:" required data-toggle="tooltip" data-placement="top" title="Cantidad de personas externas al SENA que se espera participen en el evento">
										                      		
															    </fieldset>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">	    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<select class="form-control form-control-lg input-lg" id="evento_issn" data-toggle="tooltip" data-placement="top" title="Evento ISSN">
															    		<option disabled="">Evento ISSN</option> 
																		<option value="Si">Si</option> 
																		<option value="No" >No</option>
																	</select>
															    </fieldset>
															</div>
															<div class="col-md-6">    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
															    	<input type="text" class="form-control form-control-lg input-lg" id="relacione_codigos" placeholder=" Si contesto la pregunta anterior de forma afirmativa, relacione los códigos:" data-toggle="tooltip" data-placement="top" title="Si contesto la pregunta anterior de forma afirmativa, relacione los códigos">
										                      		
															    </fieldset>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">	    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="canidad_personas_sena" placeholder="Cantidad de personas SENA que se espera participen en el evento:" required data-toggle="tooltip" data-placement="top" title="Cantidad de personas SENA que se espera participen en el evento">
										                      		
															    </fieldset>
															</div>
															<div class="col-md-6">    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="numero_empresarios" placeholder="Número de empresarios que serán invitados al evento:" required data-toggle="tooltip" data-placement="top" title="Número de empresarios que serán invitados al evento">
										                      		
															    </fieldset>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">	    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="nombre_empresas_invitadas" placeholder="Nombre de las empresas invitadas (nombres separados por punto y coma):" required data-toggle="tooltip" data-placement="top" title="Nombre de las empresas invitadas (nombres separados por piunto y coma)">
										                      		
															    </fieldset>
															</div>
															<div class="col-md-6">    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<select class="form-control form-control-lg input-lg" id="memorias_escritas" required data-toggle="tooltip" data-placement="top" title="Memorias escritas">
															    		<option disabled="">Memorias escritas</option> 
																		<option value="Si">Si</option> 
																		<option value="No" >No</option>
																	</select>
															    </fieldset>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">	    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="integrantes_comite" placeholder="Integrantes del comité editorial de las memorias, ponencias orales y posters:" required data-toggle="tooltip" data-placement="top" title="Integrantes del comité editorial de las memorias, ponencias orales y posters">
										                      		
															    </fieldset>
															</div>
															<div class="col-md-6">    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="lineas_tematicas" placeholder="Líneas temáticas del evento:" required data-toggle="tooltip" data-placement="top" title="Líneas temáticas del evento">
										                      		
															    </fieldset>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">	    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="dias_evento" placeholder="Días de duración del evento:" required data-toggle="tooltip" data-placement="top" title="Días de duración del evento">
										                      		
															    </fieldset>
															</div>
															<div class="col-md-6">    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="centro_aliado" placeholder="CENTRO DE FORMACIÓN SENA ALIADO. Si el evento se va a organizar en asocio con otro centro de formación del SENA indique el nombre del grupo de investigación aliado:" required data-toggle="tooltip" data-placement="top" title="CENTRO DE FORMACIÓN SENA ALIADO. Si el evento se va a organizar en asocio con otro centro de formación del SENA indique el nombre del grupo de investigación aliado">
										                      		
															    </fieldset>
															</div>
														</div>
														<div class="row"> 
															<div class="col-md-6">	    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="persona_contacto" placeholder="Indicar la persona de contacto del centro de formación aliado (Líder SENNOVA o Subdirector) para la realización del evento: Escribir nombre y número de celular de contacto:" required data-toggle="tooltip" data-placement="top" title="Indicar la persona de contacto del centro de formación aliado (Líder SENNOVA o Subdirector) para la realización del evento: Escribir nombre y número de celular de contacto">
										                      		
															    </fieldset>
															</div>
															<div class="col-md-6">    
															    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="justificacion_aliacion" placeholder="Justificación para aliarse con el centro de formación referido:" required data-toggle="tooltip" data-placement="top" title="Justificación para aliarse con el centro de formación referido">
										                      		
															    </fieldset>
															</div>
														</div>
														<div class="row">
															<div class="col-md-3"></div>
																<div class="col-md-6">	    
																    <fieldset class="form-group  has-icon-left mb-1 col-md-12">
											                      		<input type="text" class="form-control form-control-lg input-lg" id="contrapartida_centro_aliado" placeholder="Contrapartida del centro de formación aliado:" required data-toggle="tooltip" data-placement="top" title="Contrapartida del centro de formación aliado">
											                      		
																    </fieldset>
																</div>
															<div class="col-md-3"></div>
														</div>			    
												        <input type="hidden" id="btn_innovacion" class="form-control form-control-lg">
														<button class="btn btn-success float-sm-right">ACTUALIZAR</button>
												    </form>      
												</section>

												<!--MODERNIZACIÓN-->
												<section style="padding: 20px;">
													<h4 class="form-section"><i class="icon-clipboard4"></i> ESPECIFICACIÓN ACTUALIZACIÓN Y MODERNIZACIÓN </h4>
													<hr>
													
													<form class="form-horizontal form-simple" id="agregar_especificacion_actualizacion" method="POST" autocomplete="off">
												        <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="infraestructura" required data-toggle="tooltip" data-placement="top" title="Requiere Infraestructura">
												                      <option disabled selected>Requiere Infraestructura</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="justifique_infraestructura" placeholder="Justifique la respuesta anteior:" required data-toggle="tooltip" data-placement="top" title="Justifique la respuesta anteior">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="requiere_adecuaciones" required data-toggle="tooltip" data-placement="top" title="Requiere Adecuaciones">
												                      <option disabled selected>Requiere Adecuaciones</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="justifique_adecuaciones" placeholder="Justifique la respuesta anteior:" required data-toggle="tooltip" data-placement="top" title="Justifique la respuesta anteior">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="numero_empresas" placeholder="Numero de empresas de la región a impactar:" required data-toggle="tooltip" data-placement="top" title="Numero de empresas de la región a impactar">
										                      		
															    </fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="nombre_empresas" placeholder="Nombre de las empresas de la región a impactar:" required data-toggle="tooltip" data-placement="top" title="Nombre de las empresas de la región a impactar">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="nit_empresas" placeholder="Nit de empresas de la región a impactar:" required data-toggle="tooltip" data-placement="top" title="Nit de empresas de la región a impactar">
										                      		
															    </fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="numero_bienes_baja" placeholder="Número de equipos o bienes a dar de baja en inventario:" data-toggle="tooltip" data-placement="top" title="Número de equipos o bienes a dar de baja en inventario">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="nombre_bienes_baja" placeholder="Nombre de los equipos o bienes a dar de baja en inventario:" data-toggle="tooltip" data-placement="top" title="Nombre de los equipos o bienes a dar de baja en inventario">
										                      		
															    </fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="numero_proyectos_financiados" placeholder="Número de proyectos financiados desde el 2015:" data-toggle="tooltip" data-placement="top" title="Número de proyectos financiados desde el 2015">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="nombre_sgps" placeholder="Nombre SGPS de cada proyecto financiado desde el 2015:" data-toggle="tooltip" data-placement="top" title="Nombre SGPS de cada proyecto financiado desde el 2015">
										                      		
															    </fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="codigo_sgps" placeholder="Codigo SGPS de cada proyecto financiado desde el 2015:" data-toggle="tooltip" data-placement="top" title="Codigo SGPS de cada proyecto financiado desde el 2015">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="number" class="form-control form-control-lg input-lg" id="presupuesto_ejecutado" placeholder="Presupuesto de cada proyecto financiado desde el 2015:" data-toggle="tooltip" data-placement="top" title="Presupuesto de cada proyecto financiado desde el 2015">
										                      		
															    </fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="funcionarios_vinculados" data-toggle="tooltip" data-placement="top" title="Hay funcionarios vinculados">
												                      <option disabled selected>Hay funcionarios vinculados</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="nombres_funcionarios" placeholder="Nombres de los funcionarios:" data-toggle="tooltip" data-placement="top" title="Nombres de los funcionarios">
										                      		
															    </fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="entrega_manuales" data-toggle="tooltip" data-placement="top" title="Manuales del funcionamiento de los quipos">
												                      <option disabled selected>Manuales del funcionamiento de los quipos</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    </div>		    
												        <input type="hidden" id="btn_actualizacion" class="form-control form-control-lg">
														<button class="btn btn-success float-sm-right">ACTUALIZAR</button>
												    </form>      
												</section>

												<!--TECNOLOGICOS-->
												<section style="padding: 20px;">
													<h4 class="form-section"><i class="icon-clipboard4"></i> ESPECIFICACIÓN SERVICIOS TECNOLOGICOS </h4>
													<hr>
													
													<form class="form-horizontal form-simple" id="agregar_especificacion_servicio" method="POST" autocomplete="off">
												        <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="normas_tecnicas" data-toggle="tooltip" data-placement="top" title="El proyecto contempla como base Normas técnicas nacionales y/o internaciones">
												                      <option disabled selected>El proyecto contempla como base Normas técnicas nacionales y/o internaciones</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="relaciona_normas" placeholder="Relacione las normas tecnicas:" data-toggle="tooltip" data-placement="top" title="Relacione las normas tecnicas">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="calidad_productos" data-toggle="tooltip" data-placement="top" title="El proyecto asegura la calidad de los productos implementando normas de acreditación o certificación o requisitos de habilitación u otro requisito normativo, legal o reglamentario">
												                      <option disabled selected>El proyecto asegura la calidad de los productos implementando normas de acreditación o certificación o requisitos de habilitación u otro requisito normativo, legal o reglamentario</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="relaciona_normas_acreditacion" placeholder="Relacione las normas de acreditacion o certificacion" data-toggle="tooltip" data-placement="top" title="Relacione las normas de acreditacion o certificacion">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="acreditar_habilitar" data-toggle="tooltip" data-placement="top" title="Uno de los objetivos del proyecto tiene como finalidad certificar, acreditar o habilitar el servicio tecnológico">
												                      <option disabled selected>Uno de los objetivos del proyecto tiene como finalidad certificar, acreditar o habilitar el servicio tecnológico</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="cuales_debe_cumplir" placeholder="Relacione los criterios de acreditacion que debe cumplir" data-toggle="tooltip" data-placement="top" title="Relacione los criterios de acreditacion que debe cumplir">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="auditorias_internas" required data-toggle="tooltip" data-placement="top" title="El Servicio requiere que se realice auditorias internas, participar en ensayos de aptitud, solicitar la acreditación , habilitar o certificar">
												                      <option disabled selected>El Servicio requiere que se realice auditorias internas, participar en ensayos de aptitud, solicitar la acreditación , habilitar o certificar</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="proveedores_servicios" placeholder=" ha verificado la existencia de proveedores de estos servicios a nivel nacional o internacional" data-toggle="tooltip" data-placement="top" title="ha verificado la existencia de proveedores de estos servicios a nivel nacional o internacional">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="implementar_normas" required data-toggle="tooltip" data-placement="top" title="El proyecto requiere implementar normas técnicas para realizar actividades de ensayos, calibración o muestreo, diseño, fabricación, consultoria , asistencia, asesoría u otro">
												                      <option disabled selected>El proyecto requiere implementar normas técnicas para realizar actividades de ensayos, calibración o muestreo, diseño, fabricación, consultoria , asistencia, asesoría u otro</option> 
												                      <option value="Si">Si</option> 
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="relacione_ensayos" placeholder="relacione los ensayos, calibraciones, tipo de muestreo y describa uno a uno los ensayos y los tipos de sustancias, materiales o productos a ensayar, magnitud e instrumento a calibrar o tipo de muestreo con la norma asociada o con cada uno de los servicios a implementar diferentes a Laboratorio" data-toggle="tooltip" data-placement="top" title="relacione los ensayos, calibraciones, tipo de muestreo y describa uno a uno los ensayos y los tipos de sustancias, materiales o productos a ensayar, magnitud e instrumento a calibrar o tipo de muestreo con la norma asociada o con cada uno de los servicios a implementar diferentes a Laboratorio">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="funcionarios_vinculados_servicios" required data-toggle="tooltip" data-placement="top" title="Hay funcionarios vinculados">
												                      <option disabled selected>Hay funcionarios vinculados</option> 
												                      <option value="Si">Si</option>
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="nombres_funcionarios_servicios" placeholder="Nombre de los funcionarios" data-toggle="tooltip" data-placement="top" title="Nombre de los funcionarios">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="entrega_procedimientos" required data-toggle="tooltip" data-placement="top" title="Registra como producto de este proyecto la entrega de procedimientos, guias e intructivos de cómo se realiza el servicio tecnológico">
												                      <option disabled selected>Registra como producto de este proyecto la entrega de procedimientos, guias e intructivos de cómo se realiza el servicio tecnológico</option> 
												                      <option value="Si">Si</option>
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="requiere_equipos" required data-toggle="tooltip" data-placement="top" title="Requiere equipos para realizar mediciones o equipos auxiliares para apoyar o controlar condiciones ambientales donde se ubicarán los mismo">
												                      <option disabled selected>Requiere equipos para realizar mediciones o equipos auxiliares para apoyar o controlar condiciones ambientales donde se ubicarán los mismo</option> 
												                      <option value="Si">Si</option>
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="relacione_especificaciones" placeholder="relacione las especificaciones y las condiciones ambientales que debe controlar y lo que requiere para controlar las mismas" required data-toggle="tooltip" data-placement="top" title="relacione las especificaciones y las condiciones ambientales que debe controlar y lo que requiere para controlar las mismas">
										                      		
															    </fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="requieren_calibracion" required data-toggle="tooltip" data-placement="top" title="Los equipos presentes en la línea servicios tecnológicos requieren ser calibrados y que se les haga mantenimiento">
												                      <option disabled selected>Los equipos presentes en la línea servicios tecnológicos requieren ser calibrados y que se les haga mantenimiento</option> 
												                      <option value="Si">Si</option>
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
										                    	<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="proveedores_prestar_servicio" required data-toggle="tooltip" data-placement="top" title="existen proveedores a nivel nacional que puedan prestar este servicio">
												                      <option disabled selected>existen proveedores a nivel nacional que puedan prestar este servicio</option> 
												                      <option value="Si">Si</option>
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="hay_funcionarios" required data-toggle="tooltip" data-placement="top" title="Hay funcionarios SENNOVA vinculados que conozcan sobre el manejo de los equipos">
												                      <option disabled selected>Hay funcionarios SENNOVA vinculados que conozcan sobre el manejo de los equipos</option> 
												                      <option value="Si">Si</option>
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="nombre_funcionarios_equipos" placeholder="Nombres de los funcionarios que conocen sobre el funcionamiento de los equipos" data-toggle="tooltip" data-placement="top" title="Nombres de los funcionarios que conocen sobre el funcionamiento de los equipos">
										                      		
															    </fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="manuales_equipos" placeholder="Registra como producto, la entrega de manuales de uso de los equipos que se van a adquirir" data-toggle="tooltip" data-placement="top" title="Registra como producto, la entrega de manuales de uso de los equipos que se van a adquirir">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="adquisicion_materiales" required data-toggle="tooltip" data-placement="top" title="requiere la adquisición de materiales de referencia o patrones para dar trazabilidad a las mediciones que se realizan? Registra como requisito de uso la entrega de certificados de calibración">
												                      <option disabled selected>requiere la adquisición de materiales de referencia o patrones para dar trazabilidad a las mediciones que se realizan? Registra como requisito de uso la entrega de certificados de calibración</option> 
												                      <option value="Si">Si</option>
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="relacione_materiales" placeholder="relacione los materiales de referencia o patrones y las especificaciones requeridas" data-toggle="tooltip" data-placement="top" title="relacione los materiales de referencia o patrones y las especificaciones requeridas">
										                      		
															    </fieldset>
													    	</div>
													    </div>
													    <div class="row">
													    	<div class="col-md-6">
													    		<fieldset class="form-group has-icon-left mb-1 col-md-12">
											                    	<select class="form-control form-control-lg input-lg" id="infraestructura_adecuada" required data-toggle="tooltip" data-placement="top" title="Cuenta con infraestructura adecuada para el funcionamiento de la línea servicios tecnológicos en el centro de formación">
												                      <option disabled selected>Cuenta con infraestructura adecuada para el funcionamiento de la línea servicios tecnológicos en el centro de formación</option> 
												                      <option value="Si">Si</option>
												                      <option value="No">No</option>
											                    	</select>
												                    
										                    	</fieldset>
													    	</div>
													    	<div class="col-md-6">
													    		<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="especificaciones_area" placeholder="relacione las especificaciones del área para la prestación del servicio tecnológico" data-toggle="tooltip" data-placement="top" title="relacione las especificaciones del área para la prestación del servicio tecnológico">
										                      		
															    </fieldset>
													    	</div>
													    </div>
												          
												        <input type="hidden" id="btn_servicios" class="form-control form-control-lg">
														<button class="btn btn-success float-sm-right">ACTUALIZAR</button>
												    </form>      
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
		<!-- editar objetivos modal -->
		<div class="modal fade" id="editar_objetivo" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		          	<div class="modal-header">
		            	<center><h4 class="modal-title">Editar objetivo</h4></center> 
		            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              		<span aria-hidden="true">×</span>
		            	</button>
		          	</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-feedback">
									<label>Codigo objetivo</label>
									<input id="codigo_objetivo_modal" type="number" readonly="readonly" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="codigo objetivo:" >
								</div>
								<div class="form-group has-feedback">
									<label>Descripcion</label>
									<input id="descripcion_objetivo_modal" type="text" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Descripcion del objetivo:">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
							<button id="btn_editar_objetivo" type="submit" class="btn btn-success" data-dismiss="modal"><i class="fa fa-save"></i>Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="editar_actividad" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		          	<div class="modal-header">
		            	<center><h4 class="modal-title">Editar Actividad</h4></center> 
		            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              		<span aria-hidden="true">×</span>
		            	</button>
		          	</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-feedback">
									<input id="codigo_actividad_modal" type="number" readonly="readonly" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="codigo Actividad:" >
								</div>
								<div class="form-group has-feedback">
									<select id="objetivo_modal" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Seleccione un objetivo a la cual pertenece su actividad">
									</select>
								</div>
								<div class="form-group has-feedback">
									<input id="descripcion_actividad_modal" type="text" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Descripcion Actividad:" >
								</div>
								<div class="form-group has-feedback">
									<select class="form-control form-control-lg" id="tipo_actividad_modal" required data-toggle="tooltip" data-placement="top" title="Seleccione un tipo de actividad:">
									</select>
								</div>
								<div class="form-group has-feedback">
									<input id="start_modal" type="date" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Fecha Inicio:" >
								</div>
								<div class="form-group has-feedback">
									<input id="end_modal" type="date" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Fecha Fin:" >
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
							<button id="btn_editar_actividad" type="submit" class="btn btn-success" data-dismiss="modal"><i class="fa fa-save"></i>Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="editar_resultados" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		          	<div class="modal-header">
		            	<center><h4 class="modal-title">Editar Resultados</h4></center> 
		            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              		<span aria-hidden="true">×</span>
		            	</button>
		          	</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-feedback">
									<label>Codigo Resultado</label>
									<input id="codigo_resultado_modal" type="number" readonly="readonly" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="codigo Resultado:" >
								</div>
								<div class="form-group has-feedback">
									<select id="actividad_modal" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Seleccione una actividad a la cual pertenece su resultado">
									</select>
								</div>
								<div class="form-group has-feedback">
									<label>Descripción Resultado</label>
									<input id="descripcion_resultado_modal" type="text" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Descripcion Resultado:" >
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
							<button id="btn_editar_resultado" type="submit" class="btn btn-success" data-dismiss="modal"><i class="fa fa-save"></i>Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="editar_productos" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		          	<div class="modal-header">
		            	<center><h4 class="modal-title">Editar Productos</h4></center> 
		            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              		<span aria-hidden="true">×</span>
		            	</button>
		          	</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-feedback">
									<label>Codigo Producto</label>
									<input id="codigo_producto_modal" type="number" readonly="readonly" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="codigo Producto:" >
								</div>
								<div class="form-group has-feedback">
									<select id="resultado_modal" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Seleccione un resultado a la cual pertenece este producto">
									</select>
								</div>
								<div class="form-group has-feedback">
									<label>Descripción Producto</label>
									<input id="descripcion_producto_modal" type="text" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Descripcion Producto:" >
								</div>
								<div class="form-group has-feedback">
									<label>Fecha Entrega</label>
									<input id="fecha_entrega_modal" type="date" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Fecha de entrega:" >
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
							<button id="btn_editar_producto" type="submit" class="btn btn-success" data-dismiss="modal"><i class="fa fa-save"></i>Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="editar_indicadores" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		          	<div class="modal-header">
		            	<center><h4 class="modal-title">Editar Indicador</h4></center> 
		            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		              		<span aria-hidden="true">×</span>
		            	</button>
		          	</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group has-feedback">
									<label>Codigo Indicador</label>
									<input id="codigo_indicador_modal" type="number" readonly="readonly" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="codigo Indicador:" >
								</div>
								<div class="form-group has-feedback">
									<select id="producto_modal" class="form-control form-control-lg" data-toggle="tooltip" data-placement="top" title="Seleccione el producto a la cual pertenece este indicador">
									</select>
								</div>
								<div class="form-group has-feedback">
									<label>Descripción Indicador</label>
									<input id="descripcion_indicador_modal" type="text" class="form-control form-control-lg " data-toggle="tooltip" data-placement="top" title="Descripcion Indicador:" >
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
							<button id="btn_editar_indicador" type="submit" class="btn btn-success" data-dismiss="modal"><i class="fa fa-save"></i>Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
   	</body>

<?php 
	$this->load->view('Plantillas/footer'); 
?>

<script type="text/javascript">
	$( document ).ready(function() {
		consultarProyecto();
		obtener_selects();
	});

	function consultarProyecto() {
		var documento=$("#documento").val();
		$.ajax({
			type:'POST',
			data: {documento:documento},
			url:"<?php echo base_url('Index.php/Proyectos/buscarMiProyecto');?>",
			success:function (data){
				var proyecto = JSON.parse(data);
				var fila = '';

				for (var i = 0; i < proyecto.length; i++) {
					fila += '<tr scope="row">';
					fila +=		'<td class="cod_proyecto"><center>'+proyecto[i].cod_proyecto+'</center></td>';
					fila +=		'<td class="titulo_proyecto"><center>'+proyecto[i].titulo_proyecto+'</center></td>';
					fila +=		'<td class="cod_linea"><center>'+proyecto[i].nombre_linea+'</center></td>';
					fila +=		'<td class="cod_area"><center>'+proyecto[i].descripcion_area+'</center></td>';
					fila +=		'<td class="sector_economico"><center>'+proyecto[i].sector_economico+'</center></td>';
					fila +=		'<td class="ciuu"><center>'+proyecto[i].ciuu+'</center></td>';
					fila +=		'<td class="fecha_inicio"><center>'+proyecto[i].fecha_inicio+'</center></td>';
					fila +=		'<td class="fecha_fin"><center>'+proyecto[i].fecha_fin+'</center></td>';
					fila +=		'<td class=""><center><button class="editar btn btn-success" style="font-size:1.4em; padding:5px;" onclick="verInformacionProyecto('+proyecto[i].cod_proyecto+', \''+proyecto[i].titulo_proyecto+'\')" ><i class="icon-paper"></i></button></center></td>';
					fila += '</tr>';
				}

				$("#info_proyecto").html(fila);
			},
			error: function(data){
				console.log(data);
			}
		});
	}

	function mostrarListaMisProyectos(){
		$("#contendorListaMisProyectos").show();
		$("#contendorInformacionProyectos").hide();
	}

	function obtener_selects() {
		$.ajax({
	        type:'POST',
	        url:"<?php echo base_url('Index.php/Lineas/get_lineas');?>",
	        success:function (data){
				
	            var lista = JSON.parse(data);
				var fila = '';
				fila+='';
				fila+='	<option disabled value="">Seleccione una linea</option>';
					for (var i = 0; i < lista.length; i++) {
						
						fila+='	<option value="'+lista[i].cod_linea+'" >'+lista[i].nombre_linea+'</option>';
					}
				$('#cod_linea').html(fila);
        	}
		});

		$.ajax({
			type:'POST',
			url:'<?php echo base_url('Index.php/Areas/getAreas');?>',
			success:function (data){	
				var lista = JSON.parse(data);
				var fila = '';
				fila+='<select  id="cod_area" class="form-control form-control-lg input-lg" data-toggle="tooltip" data-placement="top" title="Seleccione un area:" required>';
				fila+='	<option disabled value="">Seleccione un area</option>';
				for (var i = 0; i < lista.length; i++) {
					
					fila+='	<option value="'+lista[i].cod_area+'" >'+lista[i].descripcion_area+'</option>';
				}

				fila+='</select>';
				$('#select_area').html(fila);
			}
		});

		$.ajax({
			type:'POST',
			url:'<?php echo base_url('Index.php/subAreas/getSub_areas');?>',
			success:function (data){	
				var lista = JSON.parse(data);
				var fila = '';
				fila+='<select  id="cod_sub_area" class="form-control form-control-lg " required="" data-toggle="tooltip" data-placement="top" title="Seleccione una sub area:">';
				fila+='	<option disabled selected>Seleccione una sub area</option>';
				for (var i = 0; i < lista.length; i++) {
					
					fila+='	<option value="'+lista[i].cod_sub_area+'" >'+lista[i].descripcion_sub_area+'</option>';
				}
				fila+='</select>';
				$('#select_sub_area').html(fila);
			}
		});
	}

	function verInformacionProyecto(codigo, nombre){
		$("#contendorListaMisProyectos").hide();
		$("#contendorInformacionProyectos").show();
		$("#editar_proyecto").submit(editar_proyecto);
		$("#cod_proyecto_actual").html(nombre);
		$("#codigoProyectoSeleccionado").val(codigo);
		
		$("#agregarObjetivos").submit(agregar_objetivo);
		$("#informacion_detallada").submit(informacion_detallada);

		grafica();

		$.ajax({
			type:'POST',
			data: {codigo:codigo},
			url:"<?php echo base_url('Index.php/Proyectos/seleccionar_proyecto');?>",
			success:function (data){
				var proyecto = JSON.parse(data);
				var fila = '';

				for (var i = 0; i < proyecto.length; i++) {
					$("#titulo_proyecto").val(proyecto[i].titulo_proyecto);
					$("#resumen").val(proyecto[i].resumen);
					$("#objetivo_general").val(proyecto[i].objetivo_general);
					$("#cod_linea").val(proyecto[i].cod_linea);
					$("#cod_area").val(proyecto[i].cod_area);
					$("#cod_sub_area").val(proyecto[i].cod_sub_area);
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
		consultarObjetivos();
		consultar_actividad();
		consultarResultados();
		consultarProductos();
		consultarIndicador();
		consultarEntidades();
		consultarInnovacion();

		select_objetivos();
		select_actividades();
		select_resultado();
		select_productos();
		
		$("#agregarActividad").submit(agregar_actividad);
		$("#agregarResultado").submit(agregarResultado);
		$("#agregarProducto").submit(agregarProducto);
		$("#agregarIndicador").submit(agregarIndicador);
		$("#agregar_especificacion_innovacion").submit(agregar_especificacion_innovacion);
		$("#agregar_especificacion_servicio").submit(agregar_especificacion_servicio);
		$("#agregar_especificacion_actualizacion").submit(agregar_especificacion_actualizacion);
	}

	function grafica(){
		$('#calendar').fullCalendar({
			option: {
				locale: 'es'
			},
			events: '<?php echo site_url("Proyectos/evento"); ?>',
		});
	}

	function editar_proyecto(event) {
		event.preventDefault();
		var cod_proyecto=$('#codigoProyectoSeleccionado').val();
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
		if (fecha_inicio<fecha_fin) {
			$.ajax({
			type:"POST",
			data:{
				cod_proyecto:cod_proyecto,
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
				fecha_fin:fecha_fin
				},
				url:"<?php echo base_url('Index.php/Proyectos/editar_proyecto');?>",
				success:function(data){
					var data = JSON.parse(data);
					if (data){
						swal("¡El proyecto se ha editado con exito!", {
							icon: "success",
						});
					}else{
						swal("No se edito el proyecto",{
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

	function informacion_detallada(event) {
		event.preventDefault();
		var cod_proyecto=$('#codigoProyectoSeleccionado').val();
		var link_video=$('#link_video').val();
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
		var estado_proyecto=$('#estado_proyecto').val();
		$.ajax({
		type:"POST",
		data:{
			cod_proyecto:cod_proyecto,
			link_video:link_video,
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
			estado_proyecto:estado_proyecto
			},
			url:"<?php echo base_url('Index.php/Proyectos/informacion_detallada');?>",
			success:function(data){
				var data = JSON.parse(data);
				if (data){
					swal("¡El proyecto se ha editado con exito!", {
						icon: "success",
					});
				}else{
					swal("No se edito el proyecto",{
						icon: "warning",
					});
				};


			}
		});
	}

	//OBJETIVOS.
		function consultarObjetivos(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();

			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_objetivo');?>",
				success:function(data){
					var objetivos = JSON.parse(data);
					
					var fila = '';

					for (var i = 0; i < objetivos.length; i++) {
						fila += '<tr>';
						fila += '	<td class="descripcion_objetivo"><center>'+objetivos[i].descripcion_objetivo+'</center></td>';
						fila += '	<td>';
						fila += 		'<center>';
						fila += 			'<button class="editar_objetivo btn btn-success mover" data-id="'+objetivos[i].cod_objetivo+'" data-toggle="modal" data-target="#editar_objetivo"><i class="icon-android-create"></i></button>';					        				
						fila +=				'<button class="eliminar_objetivo btn btn-danger" data-id="'+objetivos[i].cod_objetivo+'"><i class="icon-android-delete"></i></button></center></td>';
						fila += 		'</center>';
						fila += 	'</td>';
						fila += '</tr>';					        									        						
					}
					
					$(".lista_objetivos_tabla").html(fila);
					$(".eliminar_objetivo").off("click").on("click", eliminar_objetivo);
					$(".editar_objetivo").off("click").on("click", datos_objetivo);
				}

			});	
		}

		function datos_objetivo() {
			var codigo=$(this).data("id");
			var descripcion=$(this).parents("tr").find(".descripcion_objetivo").text();
			$("#codigo_objetivo_modal").val(codigo);
			$("#descripcion_objetivo_modal").val(descripcion);
			
			$("#btn_editar_objetivo").off("click").on("click", editar_objetivo);
		}

		function editar_objetivo() {
			var codigo=$("#codigo_objetivo_modal").val();
			var descripcion=$("#descripcion_objetivo_modal").val();

			$.ajax({
				type:"POST",
				data: {	codigo:codigo,
						descripcion,descripcion},
				url:"<?php echo base_url('Index.php/Proyectos/editar_objetivo')?>",
				success:function(data){

					var data = JSON.parse(data);
					if (data){
						consultarObjetivos();
						select_objetivos();
						swal("¡El area ha sido editada!", {
							icon: "success",
						});
					}else{
						swal("No se pudo editar el area",{
							icon: "warning",
						});
					};
				}
			});
		}

		function select_objetivos(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_objetivo');?>",
				success:function(data){
					var objetivos = JSON.parse(data);
					var select = '';

					select += '<option value="" disabled>Seleccione el Objetivo al cual pertenece está actividad</option>';

					for (var i = 0; i < objetivos.length; i++) {
						select += '<option value="'+objetivos[i].cod_objetivo+'">'+objetivos[i].descripcion_objetivo+'</option>';				
					}

					$("#cod_objetivo").html(select);

				}
			});
		}

		function agregar_objetivo(event){
		
			event.preventDefault();
			var descripcion = $("#descripcion_objetivo").val();
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();

			$.ajax({
				type:"POST",
				data:{descripcion:descripcion,
						cod_proyecto:cod_proyecto
					},
				url:"<?php echo base_url('Index.php/Proyectos/agregar_objetivo');?>",
				success:function(data){

					var data = JSON.parse(data);
					
					if (data){
						swal("¡El objetivo se registro con exito!", {
		  					icon: "success",
						});
						consultarObjetivos();
						select_objetivos();

						$("#descripcion_objetivo").val("");
					}else{
				    	swal("No se agrego el objetivo",{
				    		icon: "warning",
				    	});
				  	};

				}
			});
		}

		function eliminar_objetivo(){
			var codigo=$(this).data("id");
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
						data: {codigo:codigo},
						url:"<?php echo base_url('Index.php/Proyectos/eliminar_objetivo')?>",
						success:function(data){
							var data = JSON.parse(data);
							if (data){
								swal("¡El objetivo ha sido eliminado!", {
			      					icon: "success",
								});
								consultarObjetivos()
							}else{
						    	swal("No se Elimino el objetivo",{
						    		icon: "warning",
						    	});
						  	};
			    		}
					});
			  	}else{
			    	swal("No se Elimino la objetivo",{
			    		icon: "warning",
			    	});
			  	}
			});
		}

	//ACTIVIDADES.
		function consultar_actividad(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_actividad');?>",
				success:function(data){
					var actividad = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < actividad.length; i++) {
						fila += '<tr>';
						fila += '	<td class="descripcion_objetivo" ><center>'+actividad[i].descripcion_objetivo+'</center</td>';			        				
						fila += '	<td class="descripcion_actividad" ><center>'+actividad[i].title+'</center</td>';
						fila += '	<td class="tipo_actividad" ><center>'+actividad[i].tipo_actividad+'</center</td>';
						fila += '	<td class="start" ><center>'+actividad[i].start+'</center</td>';
						fila += '	<td class="end" ><center>'+actividad[i].end+'</center</td>';			        				
						fila += '	<td>';
						fila +=			'<center>';
						fila += 			'<button class="editar_actividad btn btn-success mover" data-id="'+actividad[i].cod_actividad+'" data-toggle="modal" data-target="#editar_actividad"><i class="icon-android-create"></i></button>';					        				
						fila +=				'<button class="eliminar_actividad btn btn-danger" data-id="'+actividad[i].cod_actividad+'"><i class="icon-android-delete"></i></button></center>';
						fila +=			'</center>';
						fila += 	'</td>';		        				
						fila += '</tr>';				        						
					}

					$(".lista_actividades").html(fila);
					$(".editar_actividad").off("click").on("click", datos_actividad);
					$(".eliminar_actividad").off("click").on("click", eliminar_actividad);

				}
			});
		}

		function datos_actividad() {
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			var codigo=$(this).data("id");
			var descripcion_objetivo =$(this).parents("tr").find(".descripcion_objetivo").text();
			var descripcion_actividad =$(this).parents("tr").find(".descripcion_actividad").text();
			var tipo_actividad =$(this).parents("tr").find(".tipo_actividad").text();
			var start =$(this).parents("tr").find(".start").text();
			var end =$(this).parents("tr").find(".end").text();

			$("#codigo_actividad_modal").val(codigo);
			$("#descripcion_actividad_modal").val(descripcion_actividad);
			$("#start_modal").val(start);
			$("#end_modal").val(end);

			var select = '';

			if (tipo_actividad = 'Gestion'){
				select += '<option value="Gestion" selected>Gestión</option>';
				select += '<option value="Operativa">Operativa</option>';
				select += '<option value="Presupuestal">Presupuestal</option>';
			}else if(tipo_actividad = 'Operativa'){
				select += '<option value="Gestion">Gestión</option>';
				select += '<option value="Operativa" selected>Operativa</option>';
				select += '<option value="Presupuestal">Presupuestal</option>';
			}else if(tipo_actividad = 'Presupuestal'){
				select += '<option value="Gestion">Gestión</option>';
				select += '<option value="Operativa">Operativa</option>';
				select += '<option value="Presupuestal" selected>Presupuestal</option>';
			}
			
			$("#tipo_actividad_modal").html(select);

			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_objetivo');?>",
				success:function(data){
					var objetivos = JSON.parse(data);
					var select = '';

					for (var i = 0; i < objetivos.length; i++) {
						if(descripcion_objetivo == objetivos[i].descripcion_objetivo){
							select += '<option value="'+objetivos[i].cod_objetivo+'" selected>'+objetivos[i].descripcion_objetivo+'</option>';				
						}else{
							select += '<option value="'+objetivos[i].cod_objetivo+'">'+objetivos[i].descripcion_objetivo+'</option>';				
						}	
					}

					$("#objetivo_modal").html(select);

				}
			});
			
			$("#btn_editar_actividad").off("click").on("click", editar_actividad);
		}

		function editar_actividad() {
			var codigo=$("#codigo_actividad_modal").val();
			var cod_objetivo=$("#objetivo_modal").val();
			var descripcion=$("#descripcion_actividad_modal").val();
			var tipo_actividad=$("#tipo_actividad_modal").val();
			var start=$("#start_modal").val();
			var end=$("#end_modal").val();

			var color = '#';

			if(tipo_actividad == 'Gestion'){
				color += '37BC9B';
			}else if(tipo_actividad == 'Presupuestal'){
			 	color += 'DA4453';
			}else if(tipo_actividad == 'Operativa'){
				color += 'F6BB42';
			}

			$.ajax({
				type:"POST",
				data: {	codigo:codigo,
						cod_objetivo:cod_objetivo,
						descripcion: descripcion,
						tipo_actividad: tipo_actividad,
						color:color,
						start : start,
						end:end
					},
				url:"<?php echo base_url('Index.php/Proyectos/editar_actividad')?>",
				success:function(data){

					var data = JSON.parse(data);
					if (data){
						consultar_actividad();
						select_actividades();
						swal("¡La actividad ha sido editada!", {
							icon: "success",
						});
					}else{
						swal("No se pudo editar la actividad",{
							icon: "warning",
						});
					};
				}
			});
		}
		
		function select_actividades(){

			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_actividad');?>",
				success:function(data){

					var actividades = JSON.parse(data);
					var select = '';

					select += '<option  disabled value="">Seleccione la actividad al cual pertenece este resultado</option>';

					for (var i = 0; i < actividades.length; i++) {
						select += '<option value="'+actividades[i].cod_actividad+'">'+actividades[i].descripcion_actividad+'</option>';				
					}

					$("#cod_actividad").html(select);
				}
			});
		}

		function agregar_actividad(){
			event.preventDefault();

			var descripcion_actividad = $("#descripcion_actividad").val();
			var cod_objetivo = $("#cod_objetivo").val();
			var start = $("#start").val();
			var end = $("#end").val();
			var tipo_actividad = $("#tipo_actividad").val();

			var color = '#';

			if(tipo_actividad == 'Gestion'){
				color += '37BC9B';
			}else if(tipo_actividad == 'Presupuestal'){
			 	color += 'DA4453';
			}else if(tipo_actividad == 'Operativa'){
				color += 'F6BB42';
			}

			$.ajax({
				type:"POST",
				data:{descripcion_actividad:descripcion_actividad,
					  cod_objetivo:cod_objetivo,
					  tipo_actividad:tipo_actividad,
					  color:color,
					  start:start,
					  end:end
					},

				url:"<?php echo base_url('Index.php/Proyectos/agregar_actividad');?>",
				success:function(data){
					var data = JSON.parse(data);
					
					if (data){
						consultar_actividad();
						select_actividades();
						grafica();
						swal("¡La actividad se registro con exito!", {
	      					icon: "success",
						});
						$("#descripcion_actividad").val("");
						
					}else{
				    	swal("No se agrego la actividad",{
				    		icon: "warning",
				    	});
				  	};
	    		}
			});
		}

		function eliminar_actividad(){
			var codigo=$(this).data("id");
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
						data: {codigo:codigo},
						url:"<?php echo base_url('Index.php/Proyectos/eliminar_actividad')?>",
						success:function(data){
							var data = JSON.parse(data);
							if (data){
								consultar_actividad();
								select_actividades();
								grafica();
								swal("¡la actividad ha sido eliminada!", {
			      					icon: "success",
								});
							}else{
						    	swal("No se Elimino la actividad",{
						    		icon: "warning",
						    	});
						  	};
			    		}
					});
			  	}else{
			    	swal("No se Elimino la sub area",{
			    		icon: "warning",
			    	});
			  	}
			});	
		}

	//RESULTADOS.

		function consultarResultados(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_resultado');?>",
				success:function(data){
					var resultados = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < resultados.length; i++) {
						fila += '<tr>';
						fila += '	<td class="descripcion_actividad"><center>'+resultados[i].title+'</center</td>';			        				
						fila += '	<td class="descripcion_resultado"><center>'+resultados[i].descripcion_resultado+'</center</td>';			        				
						fila += '	<td>';
						fila += 		'<center>';
						fila += 			'<button class="editar_resultados btn btn-success mover" data-id="'+resultados[i].cod_resultado+'" data-toggle="modal" data-target="#editar_resultados"><i class="icon-android-create"></i></button>';					        				
						fila +=				'<button class="eliminar_resultados btn btn-danger" data-id="'+resultados[i].cod_resultado+'"><i class="icon-android-delete"></i></button></center>';
						fila += 		'</center>';
						fila += 	'</td>';		        				
						fila += '</tr>';				        						
					}

					$(".lista_resultados").html(fila);
					$(".editar_resultados").off("click").on("click", datos_resultado);
					$(".eliminar_resultados").off("click").on("click", eliminar_resultado);
				}
			});
		}

		function select_resultado(){

			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_resultado');?>",
				success:function(data){

					var resultado = JSON.parse(data);
					var select = '';

					select += '<option value="" disabled>Seleccione el resultado al cual pertenece este producto</option>';

					for (var i = 0; i < resultado.length; i++) {
						select += '<option value="'+resultado[i].cod_resultado+'">'+resultado[i].descripcion_resultado+'</option>';				
					}

					$("#cod_resultado").html(select);
				}
			});
		}

		function datos_resultado() {
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			var codigo=$(this).data("id");
			var descripcion_actividad =$(this).parents("tr").find(".descripcion_actividad").text();
			var descripcion_resultado =$(this).parents("tr").find(".descripcion_resultado").text();

			$("#codigo_resultado_modal").val(codigo);
			$("#descripcion_resultado_modal").val(descripcion_resultado);

			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_actividad');?>",
				success:function(data){
					var actividad = JSON.parse(data);
					var select = '';

					for (var i = 0; i < actividad.length; i++) {
						if(descripcion_actividad == actividad[i].descripcion_actividad){
							select += '<option value="'+actividad[i].cod_actividad+'" selected>'+actividad[i].descripcion_actividad+'</option>';				
						}else{
							select += '<option value="'+actividad[i].cod_actividad+'">'+actividad[i].descripcion_actividad+'</option>';				
						}	
					}

					$("#actividad_modal").html(select);

				}
			});
			
			$("#btn_editar_resultado").off("click").on("click", editar_resultado);
		}

		function editar_resultado() {
			var codigo=$("#codigo_resultado_modal").val();
			var cod_actividad=$("#actividad_modal").val();
			var descripcion=$("#descripcion_resultado_modal").val();

			$.ajax({
				type:"POST",
				data: {	codigo:codigo,
						cod_actividad,cod_actividad,
						descripcion, descripcion
					},
				url:"<?php echo base_url('Index.php/Proyectos/editar_resultado')?>",
				success:function(data){

					var data = JSON.parse(data);

					if (data){
						consultarResultados();
						select_resultado();
						swal("¡El resultado ha sido editado!", {
							icon: "success",
						});
					}else{
						swal("No se pudo editar el resultado",{
							icon: "warning",
						});
					};
				}
			});
		}

		function agregarResultado(){
			event.preventDefault();

			var descripcion_resultado = $("#descripcion_resultado").val();
			var cod_actividad = $("#cod_actividad").val();

			$.ajax({
				type:"POST",
				data:{descripcion_resultado:descripcion_resultado,
					  cod_actividad:cod_actividad
					},

				url:"<?php echo base_url('Index.php/Proyectos/agregar_resultado');?>",
				success:function(data){
					var data = JSON.parse(data);
					
					if (data){
						swal("¡La actividad se registro con exito!", {
	      					icon: "success",
						});
						$("#descripcion_resultado").val("");
						consultarResultados();
						select_resultado();
					}else{
				    	swal("No se agrego la actividad",{
				    		icon: "warning",
				    	});
				  	};
	    		}
			});
		}

		function eliminar_resultado(){
			var codigo=$(this).data("id");
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
						data: {codigo:codigo},
						url:"<?php echo base_url('Index.php/Proyectos/eliminar_resultado')?>",
						success:function(data){
							var data = JSON.parse(data);
							if (data){
								swal("¡El resultado ha sido eliminado!", {
			      					icon: "success",
								});
								consultarResultados()
							}else{
						    	swal("No se Elimino el resultado",{
						    		icon: "warning",
						    	});
						  	};
			    		}
					});
			  	}else{
			    	swal("No se Elimino la resultado",{
			    		icon: "warning",
			    	});
			  	}
			});
		}

	//PRODUCTOS.

		function consultarProductos(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_producto');?>",
				success:function(data){
					var productos = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < productos.length; i++) {
						fila += '<tr>';
						fila += '	<td class="descripcion_resultado"><center>'+productos[i].descripcion_resultado+'</center</td>';			        				
						fila += '	<td class="descripcion_producto"><center>'+productos[i].descripcion_producto+'</center</td>';
						fila += '	<td class="fecha_entrega"><center>'+productos[i].fecha_entrega+'</center</td>';			        				
						fila += '	<td>';
						fila += 		'<center>';
						fila += 			'<button class="editar_productos btn btn-success mover" data-id="'+productos[i].cod_producto+'" data-toggle="modal" data-target="#editar_productos"><i class="icon-android-create"></i></button>';					        				
						fila +=				'<button class="eliminar_productos btn btn-danger" data-id="'+productos[i].cod_producto+'"><i class="icon-android-delete"></i></button></center>';
						fila +=			'</center>';
						fila += 	'</td>';		        				
						fila += '</tr>';				        						
					}

					$(".lista_productos").html(fila);
					$(".editar_productos").off("click").on("click", datos_producto);
					$(".eliminar_productos").off("click").on("click", eliminar_producto);
				}
			});
		}

		function select_productos(){

			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_producto');?>",
				success:function(data){
					var productos = JSON.parse(data);
					var select = '';

					select += '<option value="" disabled>Seleccione el producto al cual pertenece este indicador</option>';

					for (var i = 0; i < productos.length; i++) {
						select += '<option value="'+productos[i].cod_producto+'">'+productos[i].descripcion_producto+'</option>';				
					}

					$("#cod_producto").html(select);
				}
			});
		}

		function datos_producto() {
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			var codigo=$(this).data("id");
			var descripcion_resultado =$(this).parents("tr").find(".descripcion_resultado").text();
			var descripcion_producto =$(this).parents("tr").find(".descripcion_producto").text();
			var fecha_entrega =$(this).parents("tr").find(".fecha_entrega").text();

			$("#codigo_producto_modal").val(codigo);
			$("#descripcion_producto_modal").val(descripcion_producto);
			$("#fecha_entrega_modal").val(fecha_entrega);

			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_resultado');?>",
				success:function(data){
					var resultado = JSON.parse(data);
					var select = '';

					for (var i = 0; i < resultado.length; i++) {
						if(descripcion_resultado == resultado[i].descripcion_resultado){
							select += '<option value="'+resultado[i].cod_resultado+'" selected>'+resultado[i].descripcion_resultado+'</option>';				
						}else{
							select += '<option value="'+resultado[i].cod_resultado+'">'+resultado[i].descripcion_resultado+'</option>';				
						}	
					}

					$("#resultado_modal").html(select);

				}
			});
			
			$("#btn_editar_producto").off("click").on("click", editar_producto);
		}

		function editar_producto() {
			var codigo=$("#codigo_producto_modal").val();
			var cod_resultado=$("#resultado_modal").val();
			var descripcion=$("#descripcion_producto_modal").val();
			var fecha=$("#fecha_entrega_modal").val();

			$.ajax({
				type:"POST",
				data: {	codigo:codigo,
						cod_resultado,cod_resultado,
						descripcion, descripcion,
						fecha, fecha
					},
				url:"<?php echo base_url('Index.php/Proyectos/editar_producto')?>",
				success:function(data){


					var data = JSON.parse(data);

					if (data){
						consultarProductos();
						select_productos();
						swal("¡El producto ha sido editado!", {
							icon: "success",
						});
					}else{
						swal("No se pudo editar el producto",{
							icon: "warning",
						});
					};
				}
			});
		}

		function agregarProducto(){
			event.preventDefault();

			var descripcion_producto = $("#descripcion_producto").val();
			var fecha_entrega = $("#fecha_entrega").val();
			var cod_resultado = $("#cod_resultado").val();

			$.ajax({
				type:"POST",
				data:{descripcion_producto:descripcion_producto,
					  fecha_entrega:fecha_entrega,
					  cod_resultado:cod_resultado
					},

				url:"<?php echo base_url('Index.php/Proyectos/agregar_producto');?>",
				success:function(data){
					var data = JSON.parse(data);
					
					if (data){
						swal("¡La actividad se registro con exito!", {
	      					icon: "success",
						});
						$("#descripcion_producto").val("");
						consultarProductos();
						select_productos();
					}else{
				    	swal("No se agrego la actividad",{
				    		icon: "warning",
				    	});
				  	};
	    		}
			});
		}

		function eliminar_producto(){
			var codigo=$(this).data("id");
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
						data: {codigo:codigo},
						url:"<?php echo base_url('Index.php/Proyectos/eliminar_producto')?>",
						success:function(data){
							var data = JSON.parse(data);
							if (data){
								swal("¡El producto ha sido eliminado!", {
			      					icon: "success",
								});
								consultarProductos()
							}else{
						    	swal("No se Elimino el producto",{
						    		icon: "warning",
						    	});
						  	};
			    		}
					});
			  	}else{
			    	swal("No se Elimino la resultado",{
			    		icon: "warning",
			    	});
			  	}
			});
		}

	//INDICADORES.

		function consultarIndicador(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_indicador');?>",
				success:function(data){
					var indicador = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < indicador.length; i++) {
						fila += '<tr>';
						fila += '	<td class="descripcion_producto"><center>'+indicador[i].descripcion_producto+'</center</td>';			        				
						fila += '	<td class="descripcion_indicador"><center>'+indicador[i].descripcion_indicador+'</center</td>';			        				
						fila += '	<td>';
						fila += 		'<center>';
						fila += 			'<button class="editar_indicadores btn btn-success mover" data-id="'+indicador[i].cod_indicador+'" data-toggle="modal" data-target="#editar_indicadores"><i class="icon-android-create"></i></button>';					        				
						fila +=				'<button class="eliminar_indicadores btn btn-danger" data-id="'+indicador[i].cod_indicador+'"><i class="icon-android-delete"></i></button></center>';
						fila += 		'</center>';
						fila += 	'</td>';		        				
						fila += '</tr>';				        						
					}

					$(".lista_indicadores").html(fila);
					$(".editar_indicadores").off("click").on("click", datos_indicador);
					$(".eliminar_indicadores").off("click").on("click", eliminar_indicador);
				}
			});
		}

		function datos_indicador() {
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			var codigo=$(this).data("id");
			var descripcion_producto =$(this).parents("tr").find(".descripcion_producto").text();
			var descripcion_indicador =$(this).parents("tr").find(".descripcion_indicador").text();
		
			$("#codigo_indicador_modal").val(codigo);
			$("#descripcion_indicador_modal").val(descripcion_indicador);

			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_producto');?>",
				success:function(data){
					var producto = JSON.parse(data);
					var select = '';

					for (var i = 0; i < producto.length; i++) {
						if(descripcion_producto == producto[i].descripcion_producto){
							select += '<option value="'+producto[i].cod_producto+'" selected>'+producto[i].descripcion_producto+'</option>';				
						}else{
							select += '<option value="'+producto[i].cod_producto+'">'+producto[i].descripcion_producto+'</option>';				
						}	
					}

					$("#producto_modal").html(select);

				}
			});
			
			$("#btn_editar_indicador").off("click").on("click", editar_indicadores);
		}

		function editar_indicadores() {
			var codigo=$("#codigo_indicador_modal").val();
			var cod_producto=$("#producto_modal").val();
			var descripcion=$("#descripcion_indicador_modal").val();

			$.ajax({
				type:"POST",
				data: {	codigo:codigo,
						cod_producto,cod_producto,
						descripcion, descripcion
					},
				url:"<?php echo base_url('Index.php/Proyectos/editar_indicador')?>",
				success:function(data){
					var data = JSON.parse(data);

					if (data){
						swal("¡El indicador ha sido editado!", {
							icon: "success",
						});
						consultarIndicador();
					}else{
						swal("No se pudo editar el indicador",{
							icon: "warning",
						});
					};
				}
			});
		}

		function agregarIndicador(){
			event.preventDefault();

			var descripcion_indicador = $("#descripcion_indicador").val();
			var cod_producto = $("#cod_producto").val();

			$.ajax({
				type:"POST",
				data:{descripcion_indicador:descripcion_indicador,
					  cod_producto:cod_producto
					},

				url:"<?php echo base_url('Index.php/Proyectos/agregar_indicadores');?>",
				success:function(data){
					var data = JSON.parse(data);
					
					if (data){
						swal("¡El indicador se registro con exito!", {
	      					icon: "success",
						});
						$("#descripcion_indicador").val("");
						consultarIndicador();
					}else{
				    	swal("No se agrego el Indicador",{
				    		icon: "warning",
				    	});
				  	};
	    		}
			});
		}

		function eliminar_indicador(){
			var codigo=$(this).data("id");
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
						data: {codigo:codigo},
						url:"<?php echo base_url('Index.php/Proyectos/eliminar_indicador')?>",
						success:function(data){
							var data = JSON.parse(data);
							if (data){
								consultarIndicador();
								swal("¡El indicador ha sido eliminado!", {
			      					icon: "success",
								});
								
							}else{
						    	swal("No se Elimino el indicador",{
						    		icon: "warning",
						    	});
						  	};
			    		}
					});
			  	}else{
			    	swal("No se Elimino la resultado",{
			    		icon: "warning",
			    	});
			  	}
			});
		}

	//ENTIDADES

		function consultarEntidades(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();

	   		$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_entidad');?>",
				success:function(data){
					var resultados = JSON.parse(data);
					var fila = '';
					

					for (var i = 0; i < resultados.length; i++) {
								fila += '<tr>';
						fila += '<td><center>'+resultados[i].nombre_entidad+'</center</td>';			        					        				
						fila += '<td><center>'+resultados[i].naturaleza_entidad+'</center</td>';
						fila += '<td><center>'+resultados[i].clasificacion_empresa+'</center</td>';
						fila += '<td><center>'+resultados[i].nit+'</center</td>';
						fila += '<td><center><button class="btn btn-danger eliminar_entidad"  data-id="'+resultados[i].cod_entidad+'">X</button></center></td>';			        				
						fila += '</tr>';				        		
									
					}
					$(".lista_entidades").html(fila);
					$(".eliminar_entidad").off("click").on("click", eliminar_entidad);
				}
			});
		}

		function agregarEntidad(){
			event.preventDefault();

			var nombre_entidad = $("#nombre_entidad").val();
			var naturaleza_entidad = $("#naturaleza_entidad").val();
			var clasificacion_empresa = $("#clasificacion_empresa").val();
			var nit = $("#nit").val();
			var nombre_integrantes = $("#nombre_integrantes").val();
			

			$.ajax({
				type:"POST",
				data:{nombre_entidad:nombre_entidad,
					  naturaleza_entidad:naturaleza_entidad,
					  clasificacion_empresa:clasificacion_empresa,
					  nit:nit,
					  nombre_integrantes:nombre_integrantes
					  
					},

				url:"<?php echo base_url('Index.php/Proyectos/agregar_entidad');?>",
				success:function(data){
					var data = JSON.parse(data);
					
					if (data){
						swal("¡La entidad se registro con exito!", {
	      					icon: "success",
						});
						$("#nombre_entidad").val("");
						consultarEntidades();
					}else{
				    	swal("No se agrego la entidad",{
				    		icon: "warning",
				    	});
				  	};
	    		}
			});
		}

		function eliminar_entidad(){
			var codigo=$(this).data("id");
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
						data: {codigo:codigo},
						url:"<?php echo base_url('Index.php/Proyectos/eliminar_entidad')?>",
						success:function(data){
							var data = JSON.parse(data);
							if (data){
								swal("¡La entidad ha sido eliminada!", {
			      					icon: "success",
								});
								consultarEntidades()
							}else{
						    	swal("No se Elimino la entidad",{
						    		icon: "warning",
						    	});
						  	};
			    		}
					});
			  	}else{
			    	swal("No se Elimino la entidad",{
			    		icon: "warning",
			    	});
			  	}
			});
		}

	//INNOVACION

		function consultarInnovacion(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();

	   		$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_innovacion');?>",
				success:function(data){
					var resultados = JSON.parse(data);
					var fila = '';
					
					if (data) {
						for (var i = 0; i < resultados.length; i++) {
							$("#lugar_evento").val(resultados[i].lugar_evento);
							$("#cantidad_personas_externas").val(resultados[i].cantidad_personas_externas);
							$("#evento_issn").val(resultados[i].evento_issn);
							$("#relacione_codigos").val(resultados[i].relacione_codigos);
							$("#canidad_personas_sena").val(resultados[i].canidad_personas_sena);
							$("#numero_empresarios").val(resultados[i].numero_empresarios);
							$("#nombre_empresas_invitadas").val(resultados[i].nombre_empresas_invitadas);
							$("#memorias_escritas").val(resultados[i].memorias_escritas);
							$("#integrantes_comite").val(resultados[i].integrantes_comite);
							$("#lineas_tematicas").val(resultados[i].lineas_tematicas);
							$("#dias_evento").val(resultados[i].dias_evento);
							$("#centro_aliado").val(resultados[i].centro_aliado);
							$("#persona_contacto").val(resultados[i].persona_contacto);
							$("#justificacion_aliacion").val(resultados[i].justificacion_aliacion);
							$("#contrapartida_centro_aliado").val(resultados[i].contrapartida_centro_aliado);				        					
						}
					}
				},
				error: function(data){
					console.log(data);
				}	
			});
		}

		function agregar_especificacion_innovacion(event){
			event.preventDefault();

			var lugar_evento = $("#lugar_evento").val();
			var cantidad_personas_externas = $("#cantidad_personas_externas").val();
			var evento_issn = $("#evento_issn").val();
			var relacione_codigos = $("#relacione_codigos").val();
			var canidad_personas_sena = $("#canidad_personas_sena").val();
			var numero_empresarios = $("#numero_empresarios").val();
			var nombre_empresas_invitadas = $("#nombre_empresas_invitadas").val();
			var memorias_escritas = $("#memorias_escritas").val();
			var integrantes_comite = $("#integrantes_comite").val();
			var lineas_tematicas = $("#lineas_tematicas").val();
			var dias_evento = $("#dias_evento").val();
			var centro_aliado = $("#centro_aliado").val();
			var persona_contacto = $("#persona_contacto").val();
			var justificacion_aliacion = $("#justificacion_aliacion").val();
			var contrapartida_centro_aliado = $("#contrapartida_centro_aliado").val();
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
			
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/validar_existencia_innovacion');?>",
				success:function(data){
					var data = JSON.parse(data);
					
					if (data){
						$.ajax({
							type:"POST",
							data:{  lugar_evento:lugar_evento,
								cantidad_personas_externas:cantidad_personas_externas,
								evento_issn:evento_issn,
								relacione_codigos:relacione_codigos,
								canidad_personas_sena:canidad_personas_sena,
								numero_empresarios:numero_empresarios,
								nombre_empresas_invitadas:nombre_empresas_invitadas,
								memorias_escritas:memorias_escritas,
								integrantes_comite:integrantes_comite,
								lineas_tematicas:lineas_tematicas,
								dias_evento:dias_evento,
								centro_aliado:centro_aliado,
								persona_contacto:persona_contacto,
								justificacion_aliacion:justificacion_aliacion,
								contrapartida_centro_aliado:contrapartida_centro_aliado,
								cod_proyecto:cod_proyecto
							},
							url:"<?php echo base_url('Index.php/Proyectos/editar_especificacion_innovacion');?>",
							success:function(data){
								var data = JSON.parse(data);
								
								if (data){
									swal("¡la especificación Innovacion se edito con exito!", {
				      					icon: "success",
									});
									$(".esconder_cultura").show();
								}else{
							    	swal("No se edito la especificación Innovacion",{
							    		icon: "warning",
							    	});
							  	};
			    			}
			    		});
					}else{
				    	$.ajax({
							type:"POST",
							data:{  lugar_evento:lugar_evento,
									cantidad_personas_externas:cantidad_personas_externas,
									evento_issn:evento_issn,
									relacione_codigos:relacione_codigos,
									canidad_personas_sena:canidad_personas_sena,
									numero_empresarios:numero_empresarios,
									nombre_empresas_invitadas:nombre_empresas_invitadas,
									memorias_escritas:memorias_escritas,
									integrantes_comite:integrantes_comite,
									lineas_tematicas:lineas_tematicas,
									dias_evento:dias_evento,
									centro_aliado:centro_aliado,
									persona_contacto:persona_contacto,
									justificacion_aliacion:justificacion_aliacion,
									contrapartida_centro_aliado:contrapartida_centro_aliado,
									cod_proyecto:cod_proyecto
								},
							url:"<?php echo base_url('Index.php/Proyectos/agregar_especificacion_innovacion');?>",
							success:function(data){
								var data = JSON.parse(data);
								
								if (data){
									swal("¡la especificación Innovacion se registro con exito!", {
				      					icon: "success",
									});
									$(".esconder_cultura").show();
								}else{
							    	swal("No se agrego la especificación Innovacion",{
							    		icon: "warning",
							    	});
							  	};
				    		}
						});
					};
	    		}
			});
		}

	//ACTUALIZACION

		function consultarActualizacion(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();

	   		$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_actualizacion');?>",
				success:function(data){

					var resultados = JSON.parse(data);
					var fila = '';
					

					for (var i = 0; i < resultados.length; i++) {
						$("#infraestructura").val(resultados[i].infraestructura);
						$("#justifique_infraestructura").val(resultados[i].justifique_infraestructura);
						$("#requiere_adecuaciones").val(resultados[i].requiere_adecuaciones);
						$("#justifique_adecuaciones").val(resultados[i].justifique_adecuaciones);
						$("#numero_empresas").val(resultados[i].numero_empresas);
						$("#nombre_empresas").val(resultados[i].nombre_empresas);
						$("#nit_empresas").val(resultados[i].nit_empresas);
						$("#numero_bienes_baja").val(resultados[i].numero_bienes_baja);
						$("#nombre_bienes_baja").val(resultados[i].nombre_bienes_baja);
						$("#numero_proyectos_financiados").val(resultados[i].numero_proyectos_financiados);
						$("#nombre_sgps").val(resultados[i].nombre_sgps);
						$("#codigo_sgps").val(resultados[i].codigo_sgps);
						$("#presupuesto_ejecutado").val(resultados[i].presupuesto_ejecutado);
						$("#funcionarios_vinculados").val(resultados[i].funcionarios_vinculados);
						$("#nombres_funcionarios").val(resultados[i].nombres_funcionarios);
						$("#entrega_manuales").val(resultados[i].entrega_manuales);						        		
											
					}

				},
					error: function(data){
						console.log(data);
					}	
			});
		}	

		function agregar_especificacion_actualizacion(event){
				
			event.preventDefault();

			var infraestructura = $("#infraestructura").val();
			var justifique_infraestructura = $("#justifique_infraestructura").val();
			var requiere_adecuaciones = $("#requiere_adecuaciones").val();
			var justifique_adecuaciones = $("#justifique_adecuaciones").val();
			var numero_empresas = $("#numero_empresas").val();
			var nombre_empresas = $("#nombre_empresas").val();
			var nit_empresas = $("#nit_empresas").val();
			var numero_bienes_baja = $("#numero_bienes_baja").val();
			var nombre_bienes_baja = $("#nombre_bienes_baja").val();
			var numero_proyectos_financiados = $("#numero_proyectos_financiados").val();
			var nombre_sgps = $("#nombre_sgps").val();
			var codigo_sgps = $("#codigo_sgps").val();
			var presupuesto_ejecutado = $("#presupuesto_ejecutado").val();
			var funcionarios_vinculados = $("#funcionarios_vinculados").val();
			var nombres_funcionarios = $("#nombres_funcionarios").val();
			var entrega_manuales = $("#entrega_manuales").val();
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
				
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/validar_existencia_actualizacion');?>",
				success:function(data){
					var data = JSON.parse(data);
					
					if (data){
						$.ajax({
							type:"POST",
							data:{  infraestructura:infraestructura,
									justifique_infraestructura:justifique_infraestructura,
									requiere_adecuaciones:requiere_adecuaciones,
									justifique_adecuaciones:justifique_adecuaciones,
									numero_empresas:numero_empresas,
									nombre_empresas:nombre_empresas,
									nit_empresas:nit_empresas,
									numero_bienes_baja:numero_bienes_baja,
									nombre_bienes_baja:nombre_bienes_baja,
									numero_proyectos_financiados:numero_proyectos_financiados,
									nombre_sgps:nombre_sgps,
									codigo_sgps:codigo_sgps,
									presupuesto_ejecutado:presupuesto_ejecutado,
									funcionarios_vinculados:funcionarios_vinculados,
									nombres_funcionarios:nombres_funcionarios,
									entrega_manuales:entrega_manuales,
									cod_proyecto:cod_proyecto
								},
							url:"<?php echo base_url('Index.php/Proyectos/editar_especificacion_actualizacion');?>",
							success:function(data){
								var data = JSON.parse(data);
								
								if (data){
									swal("¡la especificación Actualizacion se edito con exito!", {
				      					icon: "success",
									});
									$(".esconder_cultura").show();
								}else{
							    	swal("No se edito la especificación Actualizacion",{
							    		icon: "warning",
							    	});
							  	};
				    		}
						});
					}else{
				    	$.ajax({
							type:"POST",
							data:{  infraestructura:infraestructura,
									justifique_infraestructura:justifique_infraestructura,
									requiere_adecuaciones:requiere_adecuaciones,
									justifique_adecuaciones:justifique_adecuaciones,
									numero_empresas:numero_empresas,
									nombre_empresas:nombre_empresas,
									nit_empresas:nit_empresas,
									numero_bienes_baja:numero_bienes_baja,
									nombre_bienes_baja:nombre_bienes_baja,
									numero_proyectos_financiados:numero_proyectos_financiados,
									nombre_sgps:nombre_sgps,
									codigo_sgps:codigo_sgps,
									presupuesto_ejecutado:presupuesto_ejecutado,
									funcionarios_vinculados:funcionarios_vinculados,
									nombres_funcionarios:nombres_funcionarios,
									entrega_manuales:entrega_manuales,
									cod_proyecto:cod_proyecto
								},
							url:"<?php echo base_url('Index.php/Proyectos/agregar_especificacion_actualizacion');?>",
							success:function(data){
								var data = JSON.parse(data);
								
								if (data){
									swal("¡la especificación Actualizacion se registro con exito!", {
				      					icon: "success",
									});
									$(".esconder_cultura").show();
								}else{
							    	swal("No se agrego la especificación Actualizacion",{
							    		icon: "warning",
							    	});
							  	};
				    		}
						});
				  	};
	    		}
			});
		}

	//SERVICIOS

		function consultarServicio(){
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();

	   		$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/consultar_servicio');?>",
				success:function(data){

					var resultados = JSON.parse(data);
					var fila = '';

					for (var i = 0; i < resultados.length; i++) {
						$("#normas_tecnicas").val(resultados[i].normas_tecnicas);
						$("#relaciona_normas").val(resultados[i].relaciona_normas);
						$("#calidad_productos").val(resultados[i].calidad_productos);
						$("#relaciona_normas_acreditacion").val(resultados[i].relaciona_normas_acreditacion);
						$("#acreditar_habilitar").val(resultados[i].acreditar_habilitar);
						$("#cuales_debe_cumplir").val(resultados[i].cuales_debe_cumplir);
						$("#auditorias_internas").val(resultados[i].auditorias_internas);
						$("#proveedores_servicios").val(resultados[i].proveedores_servicios);
						$("#implementar_normas").val(resultados[i].implementar_normas);
						$("#relacione_ensayos").val(resultados[i].relacione_ensayos);
						$("#funcionarios_vinculados").val(resultados[i].funcionarios_vinculados);
						$("#nombres_funcionarios").val(resultados[i].nombres_funcionarios);
						$("#entrega_procedimientos").val(resultados[i].entrega_procedimientos);
						$("#requiere_equipos").val(resultados[i].requiere_equipos);
						$("#relacione_especificaciones").val(resultados[i].relacione_especificaciones);
						$("#requieren_calibracion").val(resultados[i].requieren_calibracion);
						$("#proveedores_prestar_servicio").val(resultados[i].proveedores_prestar_servicio);
						$("#hay_funcionarios").val(resultados[i].hay_funcionarios);
						$("#nombre_funcionarios_equipos").val(resultados[i].nombre_funcionarios_equipos);
						$("#manuales_equipos").val(resultados[i].manuales_equipos);
						$("#adquisicion_materiales").val(resultados[i].adquisicion_materiales);
						$("#relacione_materiales").val(resultados[i].relacione_materiales);
						$("#infraestructura_adecuada").val(resultados[i].infraestructura_adecuada);
						$("#especificaciones_area").val(resultados[i].especificaciones_area);				        					
					}
				},
				error: function(data){
					console.log(data);
				}	
			});
		}

		function agregar_especificacion_servicio(event){
				
			event.preventDefault();

			var normas_tecnicas = $("#normas_tecnicas").val();
			var relaciona_normas = $("#relaciona_normas").val();
			var calidad_productos = $("#calidad_productos").val();
			var relaciona_normas_acreditacion = $("#relaciona_normas_acreditacion").val();
			var acreditar_habilitar = $("#acreditar_habilitar").val();
			var cuales_debe_cumplir = $("#cuales_debe_cumplir").val();
			var auditorias_internas = $("#auditorias_internas").val();
			var proveedores_servicios = $("#proveedores_servicios").val();
			var implementar_normas = $("#implementar_normas").val();
			var relacione_ensayos = $("#relacione_ensayos").val();
			var funcionarios_vinculados = $("#funcionarios_vinculados").val();
			var nombres_funcionarios = $("#nombres_funcionarios").val();
			var entrega_procedimientos = $("#entrega_procedimientos").val();
			var requiere_equipos = $("#requiere_equipos").val();
			var relacione_especificaciones = $("#relacione_especificaciones").val();
			var requieren_calibracion = $("#requieren_calibracion").val();
			var proveedores_prestar_servicio = $("#proveedores_prestar_servicio").val();
			var hay_funcionarios = $("#hay_funcionarios").val();
			var nombre_funcionarios_equipos = $("#nombre_funcionarios_equipos").val();
			var manuales_equipos = $("#manuales_equipos").val();
			var adquisicion_materiales = $("#adquisicion_materiales").val();
			var relacione_materiales = $("#relacione_materiales").val();
			var infraestructura_adecuada = $("#infraestructura_adecuada").val();
			var especificaciones_area = $("#especificaciones_area").val();
			var cod_proyecto = $("#codigoProyectoSeleccionado").val();
				
			$.ajax({
				type:"POST",
				data:{cod_proyecto:cod_proyecto},
				url:"<?php echo base_url('Index.php/Proyectos/validar_existencia_servicio');?>",
				success:function(data){
					var data = JSON.parse(data);
					
					if (data){
						$.ajax({
							type:"POST",
							data:{ 	normas_tecnicas:normas_tecnicas,
									relaciona_normas:relaciona_normas,
									calidad_productos:calidad_productos,
									relaciona_normas_acreditacion:relaciona_normas_acreditacion,
									acreditar_habilitar:acreditar_habilitar,
									cuales_debe_cumplir:cuales_debe_cumplir,
									auditorias_internas:auditorias_internas,
									proveedores_servicios:proveedores_servicios,
									implementar_normas:implementar_normas,
									relacione_ensayos:relacione_ensayos,
									funcionarios_vinculados:funcionarios_vinculados,
									nombres_funcionarios:nombres_funcionarios,
									entrega_procedimientos:entrega_procedimientos,
									requiere_equipos:requiere_equipos,
									relacione_especificaciones:relacione_especificaciones,
									requieren_calibracion:requieren_calibracion,
									proveedores_prestar_servicio:proveedores_prestar_servicio,
									hay_funcionarios:hay_funcionarios,
									nombre_funcionarios_equipos:nombre_funcionarios_equipos,
									manuales_equipos:manuales_equipos,
									adquisicion_materiales:adquisicion_materiales,
									relacione_materiales:relacione_materiales,
									infraestructura_adecuada:infraestructura_adecuada,
									especificaciones_area:especificaciones_area,
									cod_proyecto:cod_proyecto
								},
							url:"<?php echo base_url('Index.php/Proyectos/editar_especificacion_servicio');?>",
							success:function(data){
								var data = JSON.parse(data);
								
								if (data){
									swal("¡la especificación Servicio se edito con exito!", {
				      					icon: "success",
									});
									$(".esconder_cultura").show();
								}else{
							    	swal("No se edito la especificación Servicio",{
							    		icon: "warning",
							    	});
							  	};
				    		}
						});
					}else{
				    	$.ajax({
							type:"POST",
							data:{  normas_tecnicas:normas_tecnicas,
									relaciona_normas:relaciona_normas,
									calidad_productos:calidad_productos,
									relaciona_normas_acreditacion:relaciona_normas_acreditacion,
									acreditar_habilitar:acreditar_habilitar,
									cuales_debe_cumplir:cuales_debe_cumplir,
									auditorias_internas:auditorias_internas,
									proveedores_servicios:proveedores_servicios,
									implementar_normas:implementar_normas,
									relacione_ensayos:relacione_ensayos,
									funcionarios_vinculados:funcionarios_vinculados,
									nombres_funcionarios:nombres_funcionarios,
									entrega_procedimientos:entrega_procedimientos,
									requiere_equipos:requiere_equipos,
									relacione_especificaciones:relacione_especificaciones,
									requieren_calibracion:requieren_calibracion,
									proveedores_prestar_servicio:proveedores_prestar_servicio,
									hay_funcionarios:hay_funcionarios,
									nombre_funcionarios_equipos:nombre_funcionarios_equipos,
									manuales_equipos:manuales_equipos,
									adquisicion_materiales:adquisicion_materiales,
									relacione_materiales:relacione_materiales,
									infraestructura_adecuada:infraestructura_adecuada,
									especificaciones_area:especificaciones_area,
									cod_proyecto:cod_proyecto
								},
							url:"<?php echo base_url('Index.php/Proyectos/agregar_especificacion_servicio');?>",
							success:function(data){
								var data = JSON.parse(data);
								
								if (data){
									swal("¡la especificación Servicio se registro con exito!", {
				      					icon: "success",
									});
									$(".esconder_cultura").show();
								}else{
							    	swal("No se agrego la especificación Servicio",{
							    		icon: "warning",
							    	});
							  	};
				    		}
						});
				  	};
	    		}
			});
		}

</script>
	<script src="<?php echo base_url(); ?>/assets/plugins/fullcalendar-3.9.0/lib/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/fullcalendar-3.9.0/lib/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plugins/fullcalendar-3.9.0/lib/moment.min.js"></script>

    <!-- fullcalendar -->
    
    <script src="<?php echo base_url(); ?>/assets/plugins/fullcalendar-3.9.0/fullcalendar.min.js"></script>

    <!-- traducción al español -->

    <script src="<?php echo base_url(); ?>/assets/plugins/fullcalendar-3.9.0/locale/es.js"></script>
<style>
	#calendar{
		width: 45em;
		margin: 0px auto;
	}
</style>
</html>