<!DOCTYPE html>
<html>
<!-- <head> -->
<?php 
	$data['tituloVentana'] = 'Editar usuarios';
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
				<section id="feather-icons">
				    <div class="row">
				        <div class="col-xs-12">
				        	<input required id="documento" type="hidden" class="form-control" value="<?php echo $id?>">
				            <div class="card">
				            	<div class="row">
				            		<div class="col-md-2"></div>
				            		<div class="col-md-8">
				            			 <div class="card-body collapse in">
						                    <div class="card-block">
						                        <!-- ACA DEBE IR EL CODIGO -->
									            <div class="card-header no-border ">
								                    <h5 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-3">
								                  		<span>Editar Usuario</span>
								                	</h5>
									             </div>
		              								<div class="card-body collapse in"> 
										                <div class="card-block">
										                  	<div id="datos_usuario">
																<form action="#" id="actualizar_usuario" method="POST">
																 <fieldset class="form-group col-md-12">
																		<label for="documento">Documento</label>
																		<input required id="documento" type="text" class="form-control" value="<?php echo $id?> " disabled>
																</fieldset>
																	<fieldset class="form-group col-md-12">
																		<label for="nombre_usuarios">Nombre</label>
																		<input required id="nombre_usuarios" type="text" class="form-control"  >
																	</fieldset>
																	<fieldset class="form-group col-md-12">
																		<label for="email">Correo</label>
																		<input required id="email" type="text" class="form-control"  disabled >
																	</fieldset>
																	<fieldset class="form-group col-md-12">
																		<label for="telefono">Telefono</label>
																		<input required id="telefono" type="text" class="form-control"  >
																	</fieldset>
																	<fieldset class="form-group col-md-12">
																			<label for="direccion">Direccion</label>
																		<input required id="direccion" type="text" class="form-control"  >
																	</fieldset>
																	<fieldset class="form-group col-md-12">
																		<label for="tipo_usuario">Tipo usuario</label>
																		<select  id="tipo_usuario" class="form-control">
																			<option value="Administrador" >Administrador</option>
																			<option value="Gestor">Gestor</option>
																		</select>
																	</fieldset>
																	<fieldset class="form-group col-md-12">
																		<label for="estado">Tipo usuario</label>
																		<select  id="estado" class="form-control">
																			<option value="Activo" >Activo</option>
																			<option value="Inactivo">Inactivo</option>
																		</select>
																	</fieldset>
																	<center>
																			<button type="submit" class="btn btn-success actualizar mover">Actualizar</button>
																			<button type="button" class="btn btn-danger eliminar" >Eliminar</button>
																	</center>
																</form>
															</div>	
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
   	</body>

<?php 
	$this->load->view('Plantillas/footer'); 
?>
<script>
	$( document ).ready(function() {
		consultarUsuario();
	});
	function consultarUsuario() {

		var documento=$("#documento").val();
		$.ajax({
			type:'POST',
			data: {documento:documento},
			url:"<?php echo base_url('Index.php/Usuarios/seleccionar_usuario');?>",
			success:function (data){
				var data = JSON.parse(data);
				if(data){
					var lista_usuarios = data;
					for (var i = 0; i < lista_usuarios.length; i++) {
						$('#nombre_usuarios').val(lista_usuarios[i].nombre_usuarios);
						$('#email').val(lista_usuarios[i].email);
						$('#telefono').val(lista_usuarios[i].telefono);
						$('#direccion').val(lista_usuarios[i].direccion);
						$('#tipo_usuario').val(lista_usuarios[i].tipo_usuario);
						$('#estado').val(lista_usuarios[i].estado);
					}
				}else{
					swal("No se encontro ningun usuario con este id",{
						icon: "warning",
					})
					.then((willDelete) => {
						window.location.href = "<?php echo base_url('index.php/Usuarios/consultarUsuarios') ?>";
					});
				}
				
				$(".eliminar").off("click").on("click", eliminar);
				$("#actualizar_usuario").submit(actualizar);
			}
		});
	}


	function actualizar(event){
		event.preventDefault(); // Evita que el formulario ejecute el atributo action.
		var documento = $("#documento").val();
		var nombre_usuarios= $("#nombre_usuarios").val();
		var telefono= $("#telefono").val();
		var direccion= $("#direccion").val();
		var tipo_usuario= $("#tipo_usuario").val();
		var estado= $("#estado").val();

		$.ajax({
			type:"POST",
			data: {documento:documento,
					nombre_usuarios:nombre_usuarios,
					telefono:telefono,
					direccion:direccion,
					tipo_usuario:tipo_usuario,
					estado:estado},
			url:"<?php echo base_url('Index.php/Usuarios/editar_usuarios');?>",
			success:function(data){
				var data = JSON.parse(data);
				alert(data)
				if (data){
					swal("¡El usuario ha sido editado con exito!!!", {
						icon: "success",
					})
					.then((willDelete) => {
						window.location.href = "<?php echo base_url('index.php/Usuarios/consultarUsuarios') ?>";
					});
					
				}else{
					swal("No se pudo editar el usuario",{
						icon: "warning",
					});
				};
			}
		});
	}

	function eliminar() {
		var documento = $("#documento").val();
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
							swal("¡El usuario ha sido eliminado!", {
								icon: "success",
							})
							.then((willDelete) => {
								window.location.href = "<?php echo base_url('index.php/Usuarios/consultarUsuarios') ?>";
							});
						}else{
							swal("No se Elimino el usuario",{
								icon: "warning",
							})
							.then((willDelete) => {
								window.location.href = "<?php echo base_url('index.php/Usuarios/consultarUsuarios') ?>";
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
</html>