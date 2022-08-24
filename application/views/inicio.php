<!DOCTYPE html>
<html lang="en" class="loading">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	    <meta name="description" content="">
	    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
	    <meta name="author" content="PIXINVENT">
	    <title>Proyecto</title>
	    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('app-assets/images/ico/apple-icon-60.png'); ?>">
	    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('app-assets/images/ico/apple-icon-76.png'); ?>">
	    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('app-assets/images/ico/apple-icon-120.png'); ?>">
	    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('app-assets/images/ico/apple-icon-152.png'); ?>">
	    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('app-assets/images/ico/favicon.ico'); ?>">
	    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('app-assets/images/ico/favicon-32.png'); ?>">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="apple-touch-fullscreen" content="yes">
	    <meta name="apple-mobile-web-app-status-bar-style" content="default">
	    <!-- BEGIN VENDOR CSS-->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/bootstrap.css'); ?>">
	    <!-- font icons-->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/fonts/icomoon.css'); ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/fonts/flag-icon-css/css/flag-icon.min.css'); ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/extensions/pace.css'); ?>">
	    <!-- END VENDOR CSS-->
	    <!-- BEGIN ROBUST CSS-->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/bootstrap-extended.css'); ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/app.css'); ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/colors.css'); ?>">
	    <!-- END ROBUST CSS-->
	    <!-- BEGIN Page Level CSS-->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/menu/menu-types/vertical-menu.css'); ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/menu/menu-types/vertical-overlay-menu.css'); ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/colors/palette-gradient.css'); ?>">
	    <!-- END Page Level CSS-->
	    <!-- BEGIN Custom CSS-->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
	    <!-- END Custom CSS-->

	    <style type="text/css">
	    	body {
	    		background-image: url(<?php echo base_url('assets/img/page/fondo_login.jpg'); ?>);
	    		background-repeat: no-repeat;
	    		background-size: cover;
	    	}
	    </style>

	</head>

	<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
	    <div class="app-content content container-fluid">
	        <div class="content-wrapper">
	            <div class="content-header row">
	            </div>
	            <div class="content-body">
	                <section class="flexbox-container">
	                    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
	                        <div class="card border-grey border-lighten-3 m-0 container-login">
	                            <div class="card-header no-border container-login">
	                                <div class="row">
			                        	<div class="col-md-4 col-xs-4">
			                        		<h5 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
	                                		</h5>
			                        	</div>
			                        	<div class="col-md-4 col-xs-4">
			                        		<div class="text-muted text-xs-center font-small-4 pt-2">
	                                    		<span class="titulo_sesion">Inicio Sesión</span>
	                                    	</div>
			                        	</div>
			                        	<div class="col-md-4 col-xs-4">
			                        		<h5 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2">
	                                		</h5>
			                        	</div>
			                        </div>
	                            </div>
	                            <div class="card-body collapse in container-login">
	                                <div class="card-block">
	                                	<form class="form-horizontal form-simple" id="formLoginInicio" method="POST" action="#">
	                                        <fieldset class="form-group position-relative has-icon-left mb-0">
	                                            <input type="email" class="form-control form-control-lg input-lg" id="campo_correo" placeholder="Ingresa tu correo" autocomplete="off" required value="orozco-cami@outlook.com">
	                                            <div class="form-control-position">
	                                                <i class="icon-head"></i>
	                                            </div>
	                                        </fieldset></br>
	                                        <fieldset class="form-group position-relative has-icon-left">
	                                            <input type="password" class="form-control form-control-lg input-lg" id="campo_password" placeholder="Ingresa tu Contraseña" required>
	                                            <div class="form-control-position">
	                                                <i class="icon-key3"></i>
	                                            </div>
	                                        </fieldset>
	                                    	<button type="submit" id="btn_login" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Ingresar</button>
	                                    </form>
	                                </div>
	                            </div>
	                            <div class="card-footer container-login">
	                                <div class="">
	                                    <p class="float-sm-left text-xs-center m-0 "><a href="recover-password.html" class="card-link color_recuperar">¿Recuperar Contraseña?</a></p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </section>
	            </div>
	        </div>
	    </div>
	    <footer class="footer footer-static footer-light navbar-border">
		    <p class="clearfix text-muted text-sm-center mb-0 px-2">
		        <span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 
		            <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. 
		        </span>
		        <span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span>
		    </p>
		</footer>

		<!-- BEGIN VENDOR JS-->
		<script src="<?php echo base_url('app-assets/js/core/sweetalert.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>" type="text/javascript"></script>
		<script type="text/javascript">
			$( document ).ready(function() {

			    $("#formLoginInicio").submit(validarAcceso);

			});

			function validarAcceso(event){
				event.preventDefault(); // Evita que el formulario ejecute el atributo action.
				var correo = $("#campo_correo").val();
				var password = $("#campo_password").val();

				$.ajax({
					url: "<?php echo base_url('index.php/Inicio/validarLogin'); ?>",
					type: 'POST',
					dataType: 'json',
					data: { correo_login:correo, password_login:password },
				})
				.done(function(data) {
					console.log("success");
					console.log(data);

					if (data.status=="OkLoginUsuario"){
						window.location.href = "<?php echo base_url('index.php/Proyectos') ?>";
					}else{
						if(data.estado_usuario=="Inactivo"){
							swal("Error", "Usuario Inactivo", "error");
						}
						
						swal("Error", data.estado_usuario, "error");		
					}
				})
				.fail(function(data) {
					console.log("Error:");
					console.log(data);
				});
				
			}
		</script>

    </body>
</html>
