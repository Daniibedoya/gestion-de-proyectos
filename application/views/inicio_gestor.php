<!DOCTYPE html>
<html>
	<!-- <head> -->
		<?php 
			$data['tituloVentana'] = 'Inicio Gestor';
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
				                <div class="card-header">
				                    <h4 class="card-title">	TITULO DE LA SECCION DONDE SE ENCUENTREN</h4>
				                </div>
				                <div class="card-body collapse in">
				                    <div class="card-block">
				                        <!-- ACA DEBE IR EL CODIGO -->
				                        
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