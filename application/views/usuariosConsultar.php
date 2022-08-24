<!DOCTYPE html>
<html>
	<!-- <head> -->
		<?php 
			$data['tituloVentana'] = 'Consultar Usuarios';
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
				                <div class="card-body collapse in">
				                    <div class="card-block">
				                   		<div class="row">
				                   			<div class="col-md-1"></div>
				                   			<div class="col-md-10">
				                   				<div class="table-responsive">
										        <table class="table table-hover table-bordered mb-0">
										            <thead style="background-color: #d5d5d5;">
										                <tr>
										                  <th scope="col"><center>Documento</center></th>
										                  <th scope="col"><center>Nombre</center></th>
										                  <th scope="col"><center>Correo</center></th>
														  <th scope="col"><center>Acciones</center></th>
										                </tr>
										            </thead>
										            <tbody id="lista_usuarios">
										            </tbody>
										        </table>
										    </div>
				                   			</div>
				                   			<div class="col-md-1"></div>
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
		<script type="text/javascript">

			$( document ).ready(function() {
				consultar_usuarios();
			});

			function consultar_usuarios() {
				$.ajax({
			        type:'POST',
			        url:"<?php echo base_url('Index.php/Usuarios/getUsuarios');?>",
			        success:function (data){
						var data = JSON.parse(data);
						var fila = '';
						fila += '<tr scope="row">';
						if(data){
							var lista_usuarios = data;

							for (var i = 0; i < lista_usuarios.length; i++) {
							
								fila += '<tr scope="row">';
								fila +=		'<td class="documento_usuario"><center>'+lista_usuarios[i].documento_usuario+'</center></td>';
								fila +=		'<td class="nombre_usuarios"><center>'+lista_usuarios[i].nombre_usuarios+'</center></td>';
								fila +=		'<td class="email"><center>'+lista_usuarios[i].email+'</center></td>';
								fila +=		'<td class="td_botones">';
								fila += 		'<center>';
								fila +=         	'<a class="btn btn-success" href="<?php echo base_url('Index.php/usuarios/infoUsuarios/')?>'+lista_usuarios[i].documento_usuario+'"><i class="icon-android-search"></i></a>';
								fila += 		'</center>';
								fila +=		'</td>';
								fila += '</tr>';
								
							}
						}else{
							fila +='<td colspan="4"><div class="alert alert-warning" role="alert">No se encoontro ningun usuario</div></td>';
						}
						fila += '</tr>';
						$("#lista_usuarios").html(fila);
			        }
    			});

			
			}



			function eliminar() {
				var documento = $(this).data('id');
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
							data: {documento:documento},
							url:"<?php echo base_url('Index.php/Usuarios/eliminarUsuario');?>",
							success:function(data){
								var data = JSON.parse(data);
								
								if (data){
									consultar_usuarios();
									swal("¡El usuario ha sido eliminado!", {
				      					icon: "success",
									});
								}else{
							    	swal("No se Elimino el usuario",{
							    		icon: "warning",
							    	});
							  	};
				    		}
						});
	  				}else{
				    	swal("No se Elimino el usuario",{
				    		icon: "warning",
				    	});
	  				}
				});
			}

		</script>
	</body>
</html>