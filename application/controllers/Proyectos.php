<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

	public function __construct(){
		parent:: __construct();

		if ( !empty($this->session->userdata('sesionProyectoADSI')) ) {
			switch($this->session->userdata('sesionProyectoADSI')['tipo_usuario']){
				case 'Administrador':
					return false;
					break;
				case 'Gestor':
					return false;
					break;
				default:
					redirect('Inicio');
					break;
			}
		}else{
			redirect('Inicio');
		}

	}

	public function index(){
		$this->load->view('Proyectos_inicio');
	}

		// rojo = #DA4453 - Presupuestal.
		// verde = #37BC9B - Gestion.
		// amarillo = #F6BB42 - Operativa.

	public function evento(){
		$this->load->model('proyectos_model');
		$events = $this->proyectos_model->all();
		echo json_encode($events);
	}

	//AGREGAR.

		public function agregar_objetivo(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$descripcion = $this->input->post("descripcion");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$objetivo=$this->proyectos_model->agregarObjetivo($descripcion, $cod_proyecto);
			echo json_encode($objetivo);
		}

		public function agregar_actividad(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$descripcion_actividad = $this->input->post("descripcion_actividad");
			$cod_objetivo = $this->input->post("cod_objetivo");
			$tipo_actividad = $this->input->post("tipo_actividad");
			$color = $this->input->post("color");
			$start = $this->input->post("start");
			$end = $this->input->post("end");
			
			$actividad=$this->proyectos_model->agregarActividad($descripcion_actividad, $color, $start, $end, $tipo_actividad, $cod_objetivo);
			echo json_encode($actividad);
		}

		public function agregar_resultado(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$descripcion_resultado = $this->input->post("descripcion_resultado");
			$cod_actividad = $this->input->post("cod_actividad");
			
			$resultado=$this->proyectos_model->agregarResultado($descripcion_resultado, $cod_actividad);
			echo json_encode($resultado);
		}

		public function agregar_producto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$descripcion_producto = $this->input->post("descripcion_producto");
			$fecha_entrega = $this->input->post("fecha_entrega");
			$cod_resultado = $this->input->post("cod_resultado");
			
			$producto=$this->proyectos_model->agregarProducto($descripcion_producto, $fecha_entrega, $cod_resultado);
			echo json_encode($producto);
		}

		public function agregar_indicadores(){
			$this->load->model('proyectos_model'); 
			$descripcion = $this->input->post("descripcion_indicador");
			$cod_producto = $this->input->post("cod_producto");
			
			$indicador=$this->proyectos_model->agregarIndicador($descripcion, $cod_producto);
			echo json_encode($indicador);
		}

		public function agregar_impacto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$impacto_sector_productivo = $this->input->post("impacto_sector_productivo");
			$impacto_ambiental = $this->input->post("impacto_ambiental");
			$impacto_social = $this->input->post("impacto_social");
			$impacto_tecnologico = $this->input->post("impacto_tecnologico");
			$impacto_centro_formacion = $this->input->post("impacto_centro_formacion");
			$numero_semilleros = $this->input->post("numero_semilleros");
			$nombres_semilleros = $this->input->post("nombres_semilleros");
			$numero_programas = $this->input->post("numero_programas");
			$nombres_programas = $this->input->post("nombres_programas");
			$numero_aprendices_ejecucion = $this->input->post("numero_aprendices_ejecucion");
			$nombres_aprendices_ejecucion = $this->input->post("nombres_aprendices_ejecucion");
			$numero_municipios_beneficiados = $this->input->post("numero_municipios_beneficiados");
			$nombre_municipios_beneficiados = $this->input->post("nombre_municipios_beneficiados");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$impacto=$this->proyectos_model->agregarImpacto($impacto_sector_productivo, $impacto_ambiental, $impacto_social, $impacto_tecnologico, $impacto_centro_formacion, $numero_semilleros, $nombres_semilleros, $numero_programas, $nombres_programas, $numero_aprendices_ejecucion, $nombres_aprendices_ejecucion, $numero_municipios_beneficiados, $nombre_municipios_beneficiados, $cod_proyecto);
			echo json_encode($impacto);
		}

		public function agregar_entidad(){
			$this->load->model('proyectos_model'); // importando el modelo a usar

			$nombre_entidad = $this->input->post("nombre_entidad");
			$distribucion_responsabilidades = $this->input->post("distribucion_responsabilidades");
			$naturaleza_entidad = $this->input->post("naturaleza_entidad");
			$clasificacion_empresa = $this->input->post("clasificacion_empresa");
			$nit = $this->input->post("nit");
			$convenio = $this->input->post("convenio");
			$tipo_codigo_convenio = $this->input->post("tipo_codigo_convenio");
			$nombre_integrantes = $this->input->post("nombre_integrantes");
			$documento_integrantes = $this->input->post("documento_integrantes");
			$correo_integrantes = $this->input->post("correo_integrantes");
			$celular_integrantes = $this->input->post("celular_integrantes");
			$recursos_especie = $this->input->post("recursos_especie");
			$descripcion_recursos_especie = $this->input->post("descripcion_recursos_especie");
			$recursos_dinero = $this->input->post("recursos_dinero");
			$descripcion_destinacion = $this->input->post("descripcion_destinacion");
			$nombre_grupo_investigacion = $this->input->post("nombre_grupo_investigacion");
			$codigo_gruplac = $this->input->post("codigo_gruplac");
			$link_gruplac = $this->input->post("link_gruplac");
			$metodologias_actividades = $this->input->post("metodologias_actividades");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$entidad=$this->proyectos_model->agregarEntidad($nombre_entidad, $distribucion_responsabilidades, $naturaleza_entidad, $clasificacion_empresa, $nit, $convenio, $tipo_codigo_convenio, $nombre_integrantes, $documento_integrantes, $correo_integrantes, $celular_integrantes, $recursos_especie, $descripcion_recursos_especie, $recursos_dinero, $descripcion_destinacion, $nombre_grupo_investigacion, $codigo_gruplac, $link_gruplac, $metodologias_actividades, $cod_proyecto);
			echo json_encode($entidad);
		}

		public function agregar_especificacion_actualizacion(){
			$this->load->model('proyectos_model');
			$infraestructura = $this->input->post("infraestructura");
			$justifique_infraestructura = $this->input->post("justifique_infraestructura");
			$requiere_adecuaciones = $this->input->post("requiere_adecuaciones");
			$justifique_adecuaciones = $this->input->post("justifique_adecuaciones");
			$numero_empresas = $this->input->post("numero_empresas");
			$nombre_empresas = $this->input->post("nombre_empresas");
			$nit_empresas = $this->input->post("nit_empresas");
			$numero_bienes_baja = $this->input->post("numero_bienes_baja");
			$nombre_bienes_baja = $this->input->post("nombre_bienes_baja");
			$numero_proyectos_financiados = $this->input->post("numero_proyectos_financiados");
			$nombre_sgps = $this->input->post("nombre_sgps");
			$codigo_sgps = $this->input->post("codigo_sgps");
			$presupuesto_ejecutado = $this->input->post("presupuesto_ejecutado");
			$funcionarios_vinculados = $this->input->post("funcionarios_vinculados");
			$nombres_funcionarios = $this->input->post("nombres_funcionarios");
			$entrega_manuales = $this->input->post("entrega_manuales");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$actualizacion=$this->proyectos_model->agregarActualizacion($infraestructura, $justifique_infraestructura, $requiere_adecuaciones, $justifique_adecuaciones, $numero_empresas, $nombre_empresas, $nit_empresas, $numero_bienes_baja, $nombre_bienes_baja, $numero_proyectos_financiados, $nombre_sgps, $codigo_sgps, $presupuesto_ejecutado, $funcionarios_vinculados, $nombres_funcionarios, $entrega_manuales, $cod_proyecto);
			echo json_encode($actualizacion);
		}

		public function agregar_info_centro(){
			$this->load->model('proyectos_model'); 
			$regional = $this->input->post("regional");
			$codigo_centro = $this->input->post("codigo_centro");
			$nombre_centro = $this->input->post("nombre_centro");
			$nombre_subdirector = $this->input->post("nombre_subdirector");
			$correo_subdirector = $this->input->post("correo_subdirector");
			$celular_subdirector = $this->input->post("celular_subdirector");
			$nombre_autores = $this->input->post("nombre_autores");
			$documento_autores = $this->input->post("documento_autores");
			$correo_autores = $this->input->post("correo_autores");
			$num_tel_autores = $this->input->post("num_tel_autores");
			$codigo_gruplac = $this->input->post("codigo_gruplac");
			$nombre_grupo = $this->input->post("nombre_grupo");
			$link_gruplac = $this->input->post("link_gruplac");
			$linea_grupo = $this->input->post("linea_grupo");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$infocentro=$this->proyectos_model->agregarInfoCentro($regional, $codigo_centro, $nombre_centro, $nombre_subdirector, $correo_subdirector, $celular_subdirector, $nombre_autores, $documento_autores, $correo_autores, $num_tel_autores, $codigo_gruplac, $nombre_grupo, $link_gruplac, $linea_grupo, $cod_proyecto);
			echo json_encode($infocentro);
		}

		public function agregar_bibliografia(){
			$this->load->model('proyectos_model'); 
			$nombre_link = $this->input->post("nombre_link");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$bibliografia=$this->proyectos_model->agregarBibliografia($nombre_link, $cod_proyecto);
			echo json_encode($bibliografia);
		}

		public function agregar_especificacion_innovacion(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$lugar_evento = $this->input->post("lugar_evento");
			$cantidad_personas_externas = $this->input->post("cantidad_personas_externas");
			$evento_issn = $this->input->post("evento_issn");
			$relacione_codigos = $this->input->post("relacione_codigos");
			$canidad_personas_sena = $this->input->post("canidad_personas_sena");
			$numero_empresarios = $this->input->post("numero_empresarios");
			$nombre_empresas_invitadas = $this->input->post("nombre_empresas_invitadas");
			$memorias_escritas = $this->input->post("memorias_escritas");
			$integrantes_comite = $this->input->post("integrantes_comite");
			$lineas_tematicas = $this->input->post("lineas_tematicas");
			$dias_evento = $this->input->post("dias_evento");
			$centro_aliado = $this->input->post("centro_aliado");
			$persona_contacto = $this->input->post("persona_contacto");
			$justificacion_aliacion = $this->input->post("justificacion_aliacion");
			$contrapartida_centro_aliado = $this->input->post("contrapartida_centro_aliado");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$innovacion=$this->proyectos_model->agregarEspecificacion_innovacion($lugar_evento, $cantidad_personas_externas, $evento_issn, $relacione_codigos, $canidad_personas_sena, $numero_empresarios, $nombre_empresas_invitadas, $memorias_escritas, $integrantes_comite, $lineas_tematicas, $dias_evento, $centro_aliado, $persona_contacto, $justificacion_aliacion, $contrapartida_centro_aliado, $cod_proyecto);
			echo json_encode($innovacion);
		}

		public function agregar_especificacion_servicio(){
			$this->load->model('proyectos_model');
			$normas_tecnicas = $this->input->post("normas_tecnicas");
			$relaciona_normas = $this->input->post("relaciona_normas");
			$calidad_productos = $this->input->post("calidad_productos");
			$relaciona_normas_acreditacion = $this->input->post("relaciona_normas_acreditacion");
			$acreditar_habilitar = $this->input->post("acreditar_habilitar");
			$cuales_debe_cumplir = $this->input->post("cuales_debe_cumplir");
			$auditorias_internas = $this->input->post("auditorias_internas");
			$proveedores_servicios = $this->input->post("proveedores_servicios");
			$implementar_normas = $this->input->post("implementar_normas");
			$relacione_ensayos = $this->input->post("relacione_ensayos");
			$funcionarios_vinculados = $this->input->post("funcionarios_vinculados");
			$nombres_funcionarios = $this->input->post("nombres_funcionarios");
			$entrega_procedimientos = $this->input->post("entrega_procedimientos");
			$requiere_equipos = $this->input->post("requiere_equipos");
			$relacione_especificaciones = $this->input->post("relacione_especificaciones");
			$requieren_calibracion = $this->input->post("requieren_calibracion");
			$proveedores_prestar_servicio = $this->input->post("proveedores_prestar_servicio");
			$hay_funcionarios = $this->input->post("hay_funcionarios");
			$manuales_equipos = $this->input->post("manuales_equipos");
			$adquisicion_materiales = $this->input->post("adquisicion_materiales");
			$relacione_materiales = $this->input->post("relacione_materiales");
			$infraestructura_adecuada = $this->input->post("infraestructura_adecuada");
			$especificaciones_area = $this->input->post("especificaciones_area");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$servivcios=$this->proyectos_model->agregarServicios($normas_tecnicas, $relaciona_normas, $calidad_productos, $relaciona_normas_acreditacion, $acreditar_habilitar, $cuales_debe_cumplir, $auditorias_internas, $proveedores_servicios, $implementar_normas, $relacione_ensayos, $funcionarios_vinculados, $nombres_funcionarios, $entrega_procedimientos, $requiere_equipos, $relacione_especificaciones, $requieren_calibracion, $proveedores_prestar_servicio, $hay_funcionarios, $manuales_equipos, $adquisicion_materiales, $relacione_materiales, $infraestructura_adecuada, $especificaciones_area, $cod_proyecto);
			echo json_encode($servivcios);
		}

		
		public function agregar_proyecto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_linea = $this->input->post("cod_linea");
			$titulo_proyecto = $this->input->post("titulo_proyecto");
			$resumen = $this->input->post("resumen");
			$objetivo_general = $this->input->post("objetivo_general");
			$cod_area = $this->input->post("cod_area");
			$cod_sub_area = $this->input->post("cod_sub_area");
			$sector_economico = $this->input->post("sector_economico");
			$red_de_conocimiento = $this->input->post("red_de_conocimiento");
			$ciuu = $this->input->post("ciuu");
			$tiempo_ejecucion = $this->input->post("tiempo_ejecucion");
			$fecha_inicio = $this->input->post("fecha_inicio");
			$fecha_fin = $this->input->post("fecha_fin");
			/*$link_video = $this->input->post("link_video");
			$economia_naranja = $this->input->post("economia_naranja");
			$justificacion_eco_naranja = $this->input->post("justificacion_eco_naranja");
			$componente_innovador = $this->input->post("componente_innovador");
			$generar_procesos_innovadores = $this->input->post("generar_procesos_innovadores");
			$antecedentes = $this->input->post("antecedentes");
			$proyectos_anteriores = $this->input->post("proyectos_anteriores");
			$planteamiento_problema_a = $this->input->post("planteamiento_problema_a");
			$planteamiento_problema_b = $this->input->post("planteamiento_problema_b");
			$justificacion = $this->input->post("justificacion");
			$metodologia = $this->input->post("metodologia");
			$documento_usuario = $this->input->post("documento_usuario");
			$estado_proyecto = $this->input->post("estado_proyecto");*/

			$proyecto=$this->proyectos_model->crearProyecto($cod_linea, $titulo_proyecto, $resumen, $objetivo_general, $cod_area, $cod_sub_area, $sector_economico, $red_de_conocimiento, $ciuu, $tiempo_ejecucion, $fecha_inicio, $fecha_fin);
			echo json_encode($proyecto);
		}

	//CONSULTAR.
		public function consultar_proyectos(){
			$this->load->view('consultar_proyectos');
		}

		public function getProyectos(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$proyectos=$this->proyectos_model->consultarProyectos();
			echo json_encode($proyectos);
		}

		public function seleccionar_proyecto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_proyecto = $this->input->post("codigo");
			$proyecto=$this->proyectos_model->buscar_el_proyecto($cod_proyecto);
			echo json_encode($proyecto);
		}

		public function consultar_un_proyecto($cod_proyecto){
			$this->load->view('proyecto', compact("cod_proyecto"));
		}

		public function consultarMiProyecto(){

			$this->load->view('consultarMiProyecto');
		}

		public function consultar_objetivo(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$cod_proyecto = $this->input->post("cod_proyecto");

			$objetivo=$this->proyectos_model->consultarObjetivo($cod_proyecto);
			echo json_encode($objetivo);
		}

		public function buscarMiProyecto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$documento = $this->input->post("documento");

			$proyecto=$this->proyectos_model->buscar_proyecto($documento);
			echo json_encode($proyecto);	
		}

		public function buscarProyecto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$cod_proyecto = $this->input->post("cod_proyecto");

			$proyecto=$this->proyectos_model->buscar_el_proyecto($cod_proyecto);
			echo json_encode($proyecto);
		}

		public function consultar_actividad(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$cod_proyecto = $this->input->post("cod_proyecto");

			$actividad=$this->proyectos_model->consultarActividad($cod_proyecto);
			echo json_encode($actividad);
		}

		public function consultar_resultado(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$cod_proyecto = $this->input->post("cod_proyecto");

			$actividad=$this->proyectos_model->consultarResultado($cod_proyecto);
			echo json_encode($actividad);
		}

		public function consultar_producto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$cod_proyecto = $this->input->post("cod_proyecto");

			$producto=$this->proyectos_model->consultarProducto($cod_proyecto);
			echo json_encode($producto);
		}

		public function consultar_indicador(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$cod_proyecto = $this->input->post("cod_proyecto");

			$indicador=$this->proyectos_model->consultarIndicador($cod_proyecto);
			echo json_encode($indicador);
		}

		public function consultar_entidad(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$cod_proyecto = $this->input->post("cod_proyecto");

			$entidad=$this->proyectos_model->consultarEntidades($cod_proyecto);
			echo json_encode($entidad);
		}

		public function consultar_innovacion(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$cod_proyecto = $this->input->post("cod_proyecto");

			$innovacion=$this->proyectos_model->consultarInnovacion($cod_proyecto);
			echo json_encode($innovacion);
		}

	//ELIMINAR.

		public function eliminar_objetivo(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$codigo = $this->input->post("codigo");
			$objetivo=$this->proyectos_model->eliminarObjetivo($codigo);
			echo json_encode($objetivo);	
		}

		public function eliminar_actividad(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$codigo = $this->input->post("codigo");
			$actividad=$this->proyectos_model->eliminarActividad($codigo);
			echo json_encode($actividad);	
		}

		public function eliminar_resultado(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$codigo = $this->input->post("codigo");
			$resultado=$this->proyectos_model->eliminarResultado($codigo);
			echo json_encode($resultado);	
		}

		public function eliminar_producto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$codigo = $this->input->post("codigo");
			$producto=$this->proyectos_model->eliminarProducto($codigo);
			echo json_encode($producto);	
		}

		public function eliminar_indicador(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$codigo = $this->input->post("codigo");
			$indicador=$this->proyectos_model->eliminarIndicador($codigo);
			echo json_encode($indicador);	
		}

		public function eliminar_entidad(){
		$this->load->model('proyectos_model'); // importando el modelo a usar
		$codigo = $this->input->post("codigo");
		$entidad=$this->proyectos_model->eliminarEntidad($codigo);
		echo json_encode($entidad);	
		}

	//EDITAR
		public function editar_proyecto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_proyecto = $this->input->post("cod_proyecto");
			$cod_linea = $this->input->post("cod_linea");
			$titulo_proyecto = $this->input->post("titulo_proyecto");
			$resumen = $this->input->post("resumen");
			$objetivo_general = $this->input->post("objetivo_general");
			$cod_area = $this->input->post("cod_area");
			$cod_sub_area = $this->input->post("cod_sub_area");
			$sector_economico = $this->input->post("sector_economico");
			$red_de_conocimiento = $this->input->post("red_de_conocimiento");
			$ciuu = $this->input->post("ciuu");
			$tiempo_ejecucion = $this->input->post("tiempo_ejecucion");
			$fecha_inicio = $this->input->post("fecha_inicio");
			$fecha_fin = $this->input->post("fecha_fin");
			$proyecto=$this->proyectos_model->editaProyecto($cod_proyecto,$cod_linea, $titulo_proyecto, $resumen, $objetivo_general, $cod_area, $cod_sub_area, $sector_economico, $red_de_conocimiento, $ciuu, $tiempo_ejecucion, $fecha_inicio, $fecha_fin);
			echo json_encode($proyecto);
		}

		public function editar_objetivo(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_objetivo = $this->input->post("codigo");
			$descripcion = $this->input->post("descripcion");
			$objetivo=$this->proyectos_model->editarObjetivo($cod_objetivo,$descripcion);
			echo json_encode($objetivo);
		}

		public function editar_actividad(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_actividad = $this->input->post("codigo");
			$cod_objetivo = $this->input->post("cod_objetivo");
			$descripcion = $this->input->post("descripcion");
			$tipo_actividad = $this->input->post("tipo_actividad");
			$color = $this->input->post("color");
			$start = $this->input->post("start");
			$end = $this->input->post("end");

			$actividad=$this->proyectos_model->editarActividad($cod_actividad,$cod_objetivo,$descripcion, $color, $start, $end, $tipo_actividad);
			echo json_encode($actividad);
		}

		public function editar_resultado(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_resultado = $this->input->post("codigo");
			$cod_actividad = $this->input->post("cod_actividad");
			$descripcion = $this->input->post("descripcion");


			$resultado=$this->proyectos_model->editarResultado($cod_resultado,$cod_actividad,$descripcion);
			echo json_encode($resultado);
		}

		public function editar_producto(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_producto = $this->input->post("codigo");
			$cod_resultado = $this->input->post("cod_resultado");
			$descripcion = $this->input->post("descripcion");
			$fecha = $this->input->post("fecha");

			$producto=$this->proyectos_model->editarProducto($cod_producto,$cod_resultado,$descripcion, $fecha);
			echo json_encode($producto);
		}

		public function editar_indicador(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_indicador = $this->input->post("codigo");
			$cod_producto = $this->input->post("cod_producto");
			$descripcion = $this->input->post("descripcion");

			$indicador=$this->proyectos_model->editarIndicador($cod_indicador,$cod_producto,$descripcion);
			echo json_encode($indicador);
		}

		public function informacion_detallada(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_proyecto = $this->input->post("cod_proyecto");
			$link_video = $this->input->post("link_video");
			$economia_naranja = $this->input->post("economia_naranja");
			$justificacion_eco_naranja = $this->input->post("justificacion_eco_naranja");
			$componente_innovador = $this->input->post("componente_innovador");
			$generar_procesos_innovadores = $this->input->post("generar_procesos_innovadores");
			$antecedentes = $this->input->post("antecedentes");
			$proyectos_anteriores = $this->input->post("proyectos_anteriores");
			$planteamiento_problema_a = $this->input->post("planteamiento_problema_a");
			$planteamiento_problema_b = $this->input->post("planteamiento_problema_b");
			$justificacion = $this->input->post("justificacion");
			$metodologia = $this->input->post("metodologia");
			$estado_proyecto = $this->input->post("estado_proyecto");
			$proyecto=$this->proyectos_model->informacion_detallada($cod_proyecto, $link_video, $economia_naranja, $justificacion_eco_naranja, $componente_innovador, $generar_procesos_innovadores, $antecedentes, $proyectos_anteriores, $planteamiento_problema_a, $planteamiento_problema_b, $justificacion, $metodologia, $estado_proyecto);
			echo json_encode($proyecto);	
		}

		public function editar_especificacion_innovacion(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			
			$lugar_evento = $this->input->post("lugar_evento");
			$cantidad_personas_externas = $this->input->post("cantidad_personas_externas");
			$evento_issn = $this->input->post("evento_issn");
			$relacione_codigos = $this->input->post("relacione_codigos");
			$canidad_personas_sena = $this->input->post("canidad_personas_sena");
			$numero_empresarios = $this->input->post("numero_empresarios");
			$nombre_empresas_invitadas = $this->input->post("nombre_empresas_invitadas");
			$memorias_escritas = $this->input->post("memorias_escritas");
			$integrantes_comite = $this->input->post("integrantes_comite");
			$lineas_tematicas = $this->input->post("lineas_tematicas");
			$dias_evento = $this->input->post("dias_evento");
			$centro_aliado = $this->input->post("centro_aliado");
			$persona_contacto = $this->input->post("persona_contacto");
			$justificacion_aliacion = $this->input->post("justificacion_aliacion");
			$contrapartida_centro_aliado = $this->input->post("contrapartida_centro_aliado");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$innovacion=$this->proyectos_model->editar_especificacion_innovacion($lugar_evento, $cantidad_personas_externas, $evento_issn, $relacione_codigos, $canidad_personas_sena, $numero_empresarios, $nombre_empresas_invitadas, $memorias_escritas, $integrantes_comite, $lineas_tematicas, $dias_evento, $centro_aliado, $persona_contacto, $justificacion_aliacion, $contrapartida_centro_aliado, $cod_proyecto);
			echo json_encode($innovacion);
		}

		public function editar_especificacion_actualizacion(){
			$this->load->model('proyectos_model');

			$infraestructura = $this->input->post("infraestructura");
			$justifique_infraestructura = $this->input->post("justifique_infraestructura");
			$requiere_adecuaciones = $this->input->post("requiere_adecuaciones");
			$justifique_adecuaciones = $this->input->post("justifique_adecuaciones");
			$numero_empresas = $this->input->post("numero_empresas");
			$nombre_empresas = $this->input->post("nombre_empresas");
			$nit_empresas = $this->input->post("nit_empresas");
			$numero_bienes_baja = $this->input->post("numero_bienes_baja");
			$nombre_bienes_baja = $this->input->post("nombre_bienes_baja");
			$numero_proyectos_financiados = $this->input->post("numero_proyectos_financiados");
			$nombre_sgps = $this->input->post("nombre_sgps");
			$codigo_sgps = $this->input->post("codigo_sgps");
			$presupuesto_ejecutado = $this->input->post("presupuesto_ejecutado");
			$funcionarios_vinculados = $this->input->post("funcionarios_vinculados");
			$nombres_funcionarios = $this->input->post("nombres_funcionarios");
			$entrega_manuales = $this->input->post("entrega_manuales");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$actualizacion=$this->proyectos_model->editar_especificacion_actualizacion($infraestructura, $justifique_infraestructura, $requiere_adecuaciones, $justifique_adecuaciones, $numero_empresas, $nombre_empresas, $nit_empresas, $numero_bienes_baja, $nombre_bienes_baja, $numero_proyectos_financiados, $nombre_sgps, $codigo_sgps, $presupuesto_ejecutado, $funcionarios_vinculados, $nombres_funcionarios, $entrega_manuales, $cod_proyecto);
			echo json_encode($actualizacion);
		}
		
		public function editar_especificacion_servicio(){
			$this->load->model('proyectos_model');
			$normas_tecnicas = $this->input->post("normas_tecnicas");
			$relaciona_normas = $this->input->post("relaciona_normas");
			$calidad_productos = $this->input->post("calidad_productos");
			$relaciona_normas_acreditacion = $this->input->post("relaciona_normas_acreditacion");
			$acreditar_habilitar = $this->input->post("acreditar_habilitar");
			$cuales_debe_cumplir = $this->input->post("cuales_debe_cumplir");
			$auditorias_internas = $this->input->post("auditorias_internas");
			$proveedores_servicios = $this->input->post("proveedores_servicios");
			$implementar_normas = $this->input->post("implementar_normas");
			$relacione_ensayos = $this->input->post("relacione_ensayos");
			$funcionarios_vinculados = $this->input->post("funcionarios_vinculados");
			$nombres_funcionarios = $this->input->post("nombres_funcionarios");
			$entrega_procedimientos = $this->input->post("entrega_procedimientos");
			$requiere_equipos = $this->input->post("requiere_equipos");
			$relacione_especificaciones = $this->input->post("relacione_especificaciones");
			$requieren_calibracion = $this->input->post("requieren_calibracion");
			$proveedores_prestar_servicio = $this->input->post("proveedores_prestar_servicio");
			$hay_funcionarios = $this->input->post("hay_funcionarios");
			$manuales_equipos = $this->input->post("manuales_equipos");
			$adquisicion_materiales = $this->input->post("adquisicion_materiales");
			$relacione_materiales = $this->input->post("relacione_materiales");
			$infraestructura_adecuada = $this->input->post("infraestructura_adecuada");
			$especificaciones_area = $this->input->post("especificaciones_area");
			$cod_proyecto = $this->input->post("cod_proyecto");
			
			$servivcios=$this->proyectos_model->editar_especificacion_servicio($normas_tecnicas, $relaciona_normas, $calidad_productos, $relaciona_normas_acreditacion, $acreditar_habilitar, $cuales_debe_cumplir, $auditorias_internas, $proveedores_servicios, $implementar_normas, $relacione_ensayos, $funcionarios_vinculados, $nombres_funcionarios, $entrega_procedimientos, $requiere_equipos, $relacione_especificaciones, $requieren_calibracion, $proveedores_prestar_servicio, $hay_funcionarios, $manuales_equipos, $adquisicion_materiales, $relacione_materiales, $infraestructura_adecuada, $especificaciones_area, $cod_proyecto);
			echo json_encode($servivcios);
		}

	//VALIDACION
		public function validar_existencia_innovacion(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_proyecto = $this->input->post("cod_proyecto");
			$Proyecto=$this->proyectos_model->validar_existencia_innovacion($cod_proyecto);
			echo json_encode($Proyecto);	
		}

		public function validar_existencia_actualizacion(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_proyecto = $this->input->post("cod_proyecto");
			$Proyecto=$this->proyectos_model->validar_existencia_actualizacion($cod_proyecto);
			echo json_encode($Proyecto);	
		}

		public function validar_existencia_servicio(){
			$this->load->model('proyectos_model'); // importando el modelo a usar
			$cod_proyecto = $this->input->post("cod_proyecto");
			$Proyecto=$this->proyectos_model->validar_existencia_servicio($cod_proyecto);
			echo json_encode($Proyecto);	
		}

}

/* End of file Proyectos.php */
/* Location: ./application/controllers/Proyectos.php */