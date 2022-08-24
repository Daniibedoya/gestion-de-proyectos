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

		<!-- CONTENIDO DE LA VISTA -->
		<div class="app-content content container-fluid">
      		<div class="content-wrapper" >
			  	<h3>Proyectos</h3>
      			<div class="proyectos">
      				
      			</div>
			</div>
		</div>

		<!-- Footer -->
		<?php 
			$this->load->view('Plantillas/footer'); 
		?>
	</body>

	<script type="text/javascript">
		$( document ).ready(function() {
				consultarProyectos();
			});

			function consultarProyectos() {
				$.ajax({
			        type:'POST',
			        url:'<?php echo base_url('Index.php/Proyectos/getProyectos');?>',
			        success:function (data){
						var data=JSON.parse(data);;
						var fila = '';

						if(data){
							var proyectos = data;
							
							for (var i = 0; i < proyectos.length; i++) {

								fila += '<div class="col-xl-6 col-lg-6 col-xs-12">';	
								fila += '	<div class="card">';        
								fila += '		<div class="card-body">';            
								fila += '			<div class="card-block">';                
								fila += '				<div class="media">';                    
								fila += ' 					<div class="media-body text-xs-left">';  
								fila += '						<div class="overflow-auto" style="max-height: 100px;">';                      
								fila += '							<h3 class="cyan">'+proyectos[i].titulo_proyecto+'</h3>';                     
								fila += '							<span>'+ proyectos[i].resumen+'</span>';                            
								fila += '						</div>';
								fila += '						</br>';
								fila += '						<a class="btn btn-success" href="<?php echo base_url('Index.php/proyectos/consultar_un_proyecto/')?>'+proyectos[i].cod_proyecto+'">Ver Más</a>';								                        
								fila += '					</div>';                    
								fila += '				</div>';                
								fila += '			</div>';            
								fila += '		</div>';        
								fila += '	</div>';
								fila += '</div>';
							}
						}else{
							fila+='<div class="alert alert-warning" role="alert">No se han encontrado proyectos finalizados</div>';
						}
			            

						$(".proyectos").html(fila);
			        }
		    	});
			}
	</script>
</html>