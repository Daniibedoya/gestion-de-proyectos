<!DOCTYPE html>
<html>
	<!-- <head> -->
		<?php 
			$data['tituloVentana'] = 'Crear Sub Areas';
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
				            		<div class="col-md-2"></div>
				            		<div class="col-md-8">
				            			 <div class="card-body collapse in">
						                    <div class="card-block">
						                        <!-- ACA DEBE IR EL CODIGO -->
									            <div class="card-header no-border ">
								                    <h5 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-3">
								                  		<span>Crear Sub area de Conocimiento</span>
								                	</h5>
									             </div>
		              								<div class="card-body collapse in"> 
										                <div class="card-block">
										                  	<form class="form-horizontal form-simple" id="agregarSub_areas" method="POST" autocomplete="off">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control-lg input-lg" id="descripcion" placeholder="Descripcion del sub area conocimiento:" data-toggle="tooltip" data-placement="top" title="Descripcion del subarea de Conocimiento:" required>
										                      		<div class="form-control-position">
											                        <i class="icon-head"></i>
											                      </div>
											                    </fieldset>
											                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn_sub_area"><i class="icon-unlock2"></i>Registrar</button>
										                  	</form>	
										                </div>
		              								</div>
		            							</div>
		          							</div>
						            	</div>
						            	<div class="col-md-3"></div>
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
</html>

		<script type="text/javascript">
			$( document ).ready(function() {
				$("#agregarSub_areas").submit(agregar_sub_area);
			});

			function agregar_sub_area(event){
				event.preventDefault();
				var descripcion = $("#descripcion").val();

				$.ajax({
					type:"POST",
					data: {descripcion:descripcion},

					url:"<?php echo base_url('Index.php/subAreas/agregar_sub_areas');?>",
					success:function(data){
						var data = JSON.parse(data);
						
						if (data){
							swal("¡La sub area se registro con exito!", {
		      					icon: "success",
							});
						}else{
					    	swal("No se agrego la sub area",{
					    		icon: "warning",
					    	});
					  	};

					  	$(".form-control").val("");
		    		}
				});	
			}
		</script>

