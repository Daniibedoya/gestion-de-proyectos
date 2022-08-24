<!DOCTYPE html>
<html>
	<!-- <head> -->
		<?php 
			$data['tituloVentana'] = 'Crear Areas';
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
								                  		<span>Crear Area de Conocimiento</span>
								                	</h5>
									             </div>
		              								<div class="card-body collapse in"> 
										                <div class="card-block">
										                  	<form class="form-horizontal form-simple" id="agregarAreas" method="POST" autocomplete="off">
										                    	<fieldset class="form-group  has-icon-left mb-1 col-md-12">
										                      		<input type="text" class="form-control form-control input-lg" id="descripcion_area" placeholder="Descripcion del area de Conocimiento:" data-toggle="tooltip" data-placement="top" title="Descripcion del area de Conocimiento:" required>
										                      		<div class="form-control-position">
											                        <i class="icon-head"></i>
											                      </div>
											                    </fieldset>
											                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn_area"><i class="icon-unlock2"></i>Registrar</button>
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

		<script type="text/javascript">
			$( document ).ready(function() {
				$("#agregarAreas").submit(agregar_area);
			});
			
			function agregar_area(event){
			event.preventDefault(); // Evita que el formulario ejecute el atributo action.

			var descripcion_area=$("#descripcion_area").val();
				$.ajax({
					type:"POST",
					data: {descripcion_area:descripcion_area},
					url:"<?php echo base_url('Index.php/Areas/anadirAreas');?>",
					success:function(data){
						var data = JSON.parse(data);
						

						if (data){
							swal("¡El area ha sido agregado con exito!", {
		      					icon: "success",
							});
							$(".form-control").val("");
						}else{
					    	swal("No se agrego el area",{
					    		icon: "warning",
					    	});
					  	};
		    		}
				});	
			}
		</script>
	</body>
</html>