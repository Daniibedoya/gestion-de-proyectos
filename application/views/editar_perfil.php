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
							<input required id="documento" type="hidden" class="form-control" value="<?php echo $this->session->userdata('sesionProyectoADSI')['documento_usuario']; ?>">
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
																<form action="#" id="actualizar_usuario" method="POST" autocomplete="off">
																 <fieldset class="form-group col-md-6">
																		<label for="documento">Documento</label>
																		<input required id="documento" type="text" class="form-control" value="<?php echo $this->session->userdata('sesionProyectoADSI')['documento_usuario'];?> " disabled>
																</fieldset>
																	<fieldset class="form-group col-md-6">
																		<label for="nombre_usuarios">Nombre</label>
																		<input required id="nombre_usuarios" type="text" class="form-control"  >
																	</fieldset>
																	<fieldset class="form-group col-md-6">
																		<label for="email">Correo</label>
																		<input required id="email" type="text" class="form-control"   >
																	</fieldset>
																	<fieldset class="form-group col-md-6">
																		<label for="telefono">Telefono</label>
																		<input required id="telefono" type="text" class="form-control"  >
																	</fieldset>
																	<fieldset class="form-group col-md-6">
																			<label for="direccion">Direccion</label>
																		<input required id="direccion" type="text" class="form-control"  >
																	</fieldset>
																	<fieldset class="form-group col-md-6">
																			<label for="direccion">Nueva contraseña</label>
																		<input  id="nueva_contrasena" type="password" class="form-control"  >
																	</fieldset>
																	<fieldset class="form-group col-md-6">
																			<label for="direccion">Confirmar nueva contraseña</label>
																		<input  id="confirmar_nueva_contrasena" type="password" class="form-control"  >
																	</fieldset>
																	<fieldset class="form-group col-md-6">
																			<label for="contrasena_actual">Contraseña actual</label>
																		<input required id="contrasena_actual" type="password" class="form-control"  >
																	</fieldset>
																	<center>
																			<button type="submit" class="btn btn-success actualizar mover">Actualizar</button>
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
				alert(data)
				var data = JSON.parse(data);
				if(data){
					var lista_usuarios = data;
					for (var i = 0; i < lista_usuarios.length; i++) {
						$('#nombre_usuarios').val(lista_usuarios[i].nombre_usuarios);
						$('#email').val(lista_usuarios[i].email);
						$('#telefono').val(lista_usuarios[i].telefono);
						$('#direccion').val(lista_usuarios[i].direccion);
						$('#tipo_usuario').val(lista_usuarios[i].tipo_usuario);
					}
				}else{
					swal("No se encontro ningun usuario con este id",{
						icon: "warning",
					})
					.then((willDelete) => {
						window.location.href = "<?php echo base_url('index.php/Usuarios/consultarUsuarios') ?>";
					});
				}
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
		var email=$("#email").val();
		var nueva_contrasena=$('#nueva_contrasena').val();
		var confirmar_nueva_contrasena=$('#confirmar_nueva_contrasena').val();
		var contrasena_actual=$('#contrasena_actual').val();

		if (confirmar_nueva_contrasena.length == 0 || /^\s+$/.test(confirmar_nueva_contrasena) || nueva_contrasena.length == 0 || /^\s+$/.test(nueva_contrasena)) {
			$.ajax({
				type:"POST",
				data: {documento:documento,
						nombre_usuarios:nombre_usuarios,
						contrasena_actual:contrasena_actual,
						email:email,
						telefono:telefono,
						direccion:direccion},
				url:"<?php echo base_url('Index.php/Usuarios/editar_perfil');?>",
				success:function(data){
					var data = JSON.parse(data);
					if (data){
						swal("¡Los datos basicos del usuario se han editado con exito!!!", {
							icon: "success",
						})
						.then((willDelete) => {
							window.location.href = "<?php echo base_url('index.php/Inicio/cerrarSesion') ?>";
						});
						
					}else{
						swal("No se pudo editar el usuario(documento o contraseñas icorrectas)",{
							icon: "info",
						});
					};
				}
			});
		}else{
			if (nueva_contrasena===confirmar_nueva_contrasena) {
				$.ajax({
					type:"POST",
					data: {documento:documento,
							nombre_usuarios:nombre_usuarios,
							nueva_contrasena:nueva_contrasena,
							contrasena_actual:contrasena_actual,
							email:email,
							telefono:telefono,
							direccion:direccion},
					url:"<?php echo base_url('Index.php/Usuarios/editar_perfil_contrasena');?>",
					success:function(data){
						var data = JSON.parse(data);
						if (data){
							swal("Cambio Exitoso!", "Todos los datos han sido actualizados", {
								icon: "success", 
							})
							.then((willDelete) => {
								window.location.href = "<?php echo base_url('index.php/Inicio/cerrarSesion') ?>";
							});
							
						}else{
							swal("Error", "Contraseña actual incorrecta", {
								icon: "error",
							});
						};
					}
				});
			}else{
				swal("Error", "Las contraseñas no coinciden", {
					icon: "error",
				});
			}
		}
	}
</script>
</html>