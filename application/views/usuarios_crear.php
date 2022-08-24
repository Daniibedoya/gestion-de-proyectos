<!DOCTYPE html>
<html>
	<!-- <head> -->
		<?php 
			$data['tituloVentana'] = 'Crear Usuarios';
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
						                        <!-- ACA DEBE IR EL CODIGO -->
									            <div class="card-header no-border ">
								                    <h5 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-3">
								                  		<span>Crear Usuario</span>
								                	</h5>
									             </div>
		              								<div class="card-body collapse in"> 
										                <div class="card-block">
										                  	<form class="form-horizontal form-simple" id="agregarUsuarios" method="POST" autocomplete="off">
										                    	<div class="row">
												                  	<fieldset class="form-group  has-icon-left mb-1 col-md-6">
												                    	<input type="number" class="form-control form-control" id="documento" min="1" placeholder="Documento:" required data-toggle="tooltip" data-placement="top" title="Digite documento:" >
												                    	<div class="form-control-position">
												                      		<i class="icon-head"></i>
												                    	</div>
												                  	</fieldset>
													                <fieldset class="form-group  has-icon-left mb-1 col-md-6">
													                    <input type="text" class="form-control form-control " id="nombre" placeholder="Nombre:" required data-toggle="tooltip" data-placement="top" title="Digite nombre" >
													                    <div class="form-control-position">
													                        <i class="icon-align-center2"></i>
													                    </div>
	                  												</fieldset>
	                											</div>
												                <div class="row">
												                  	<fieldset class="form-group  has-icon-left mb-1 col-md-6">
												                    	<input type="password" class="form-control form-control " id="password" placeholder="Contraseña:" required data-toggle="tooltip" data-placement="top" title="Contraseña">
												                    	<div class="form-control-position">
												                      		<i class="icon-lock4"></i>
												                    	</div>
												                    </fieldset>
												                  	<fieldset class="form-group  has-icon-left mb-1 col-md-6">
												                    	<input type="password" class="form-control form-control" id="password1" placeholder="Confirme la Contraseña:" required  data-toggle="tooltip" data-placement="top" title="Confirme su contraseña">
													                    <div class="form-control-position">
													                        <i class="icon-lock4"></i>
													                    </div>
												                  	</fieldset>
												                </div>
												                <div class="row">
												                  	<fieldset class="form-group  has-icon-left mb-1 col-md-6">
												                    	<input type="email" class="form-control form-control" id="correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Correo:" required data-toggle="tooltip" data-placement="top" title="Digite su correo: ">
												                    	<div class="form-control-position">
												                      		<i class="icon-mail6"></i>
												                    	</div>
												                  	</fieldset>
												                  	<fieldset class="form-group  has-icon-left mb-1 col-md-6">
												                    	<input type="number" class="form-control form-control" id="telefono" min="1" max="999999999999" placeholder="Telefono:" required data-toggle="tooltip" data-placement="top" title="Digite su numero de telefono:">
												                    	<div class="form-control-position">
												                      		<i class="icon-ios-telephone"></i>
												                    	</div>
												                  	</fieldset>
												                </div>
												                <div class="row">
												                  	<fieldset class="form-group  has-icon-left mb-1 col-md-6">
												                    	<input type="text" class="form-control form-control" id="direccion" placeholder="Dirreccion:" required data-toggle="tooltip" data-placement="top" title="Digite su direccion:">
												                    	<div class="form-control-position">
												                      		<i class="icon-mail6"></i>
												                    	</div>
												                  	</fieldset>
													                <fieldset class="form-group  has-icon-left mb-1 col-md-6">
													                    <select class="form-control form-control" id="tipo_usuario" required data-toggle="tooltip" data-placement="top" title="Tipo usuario:">
													                      <option disabled value="">Tipo usuario</option> 
													                      <option value="Administrador">Administrador</option> 
													                      <option value="Gestor">Gestor</option>
													                    </select>
													                    <div class="form-control-position">
													                      <i class="icon-mail6"></i>
													                    </div>
													                </fieldset>
												                </div>
												                <div class="row">
												                	<div class="col-md-3"></div>
												                	<div class="col-md-6">
												                		<fieldset class="form-group has-icon-left mb-1 col-md-12">
													                    	<select class="form-control form-control" id="estado" required data-toggle="tooltip" data-placement="top" title="Estado usuario:">
														                      <option disabled value="">Estado usuario</option> 
														                      <option value="Activo">Activo</option> 
														                      <option value="Inactivo">Inactivo</option>
													                    	</select>
														                    <div class="form-control-position">
														                      <i class="icon-mail6"></i>
														                    </div>
												                    	</fieldset>
												                	</div>
												                	<div class="col-md-3"></div>	
												                  	
												                </div>
												                <button type="submit" class="btn btn-primary btn-block" id="btn_usuarios"><i class="icon-unlock2"></i>Registrar</button>
										                  	</form>	
										                </div>
		              								</div>
		            							</div>
		          							</div>
						            	</div>
						            	<div class="col-md-1"></div>
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
			$("#agregarUsuarios").submit(agregar_usuario);
			$(".form-control").val("");
		});
	function agregar_usuario(event){
		event.preventDefault(); // Evita que el formulario ejecute el atributo action.

		var documento=$("#documento").val();
		var nombre =$("#nombre").val();
		var password = $("#password").val();
		var password1 = $("#password1").val();
		var email =$("#correo").val();
		var telefono=$("#telefono").val();
		var direccion =$("#direccion").val();
		var tipo_usuario =$("#tipo_usuario").val();
		var estado =$("#estado").val();

		if( password == password1  ) {
			$.ajax({
				type:"POST",
				data: {documento:documento,
					email:email
				},
				url:"<?php echo base_url('Index.php/Usuarios/validarExistencia');?>",
				success:function(data){
					var data = JSON.parse(data);
					if (data){
						swal("¡Ya existe un usuario registrado con este documento o correo!", {
	      					icon: "info",
						});
					}else{
				    	$.ajax({
							type:"POST",
							data: {documento:documento,
								nombre:nombre,
								password:password,
								email:email,
								telefono:telefono,
								direccion:direccion,
								tipo_usuario:tipo_usuario,
								estado:estado},
							url:"<?php echo base_url('Index.php/Usuarios/agregarUsuarios');?>",
							success:function(data){
								var data = JSON.parse(data);
								

								if (data){
									swal("¡El usuario ha sido agregado con exito!", {
										icon: "success",
									});
									$(".form-control").val("");
								}else{
									swal("No se agrego el usuario",{
										icon: "info",
									});
									$(".form-control").val("");
								};

								
							}
						});	 

				  	};
	    		}
			});
			
		}else{
			swal("Las contraseñas no coinciden",{
				icon: "error",
			});
		}
		
	}
	</script>
</html>