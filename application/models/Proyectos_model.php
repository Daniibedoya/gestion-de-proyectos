<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos_model extends CI_Model {

	function all(){
		$consulta= $this->db->query("SELECT * FROM actividades");
		return $consulta->result_array();
	}

	//AGREGAR.
		function agregarObjetivo($descripcion,$cod_proyecto){
			
			if($this->db->query("INSERT INTO objetivos (descripcion_objetivo, cod_proyecto) VALUES ('$descripcion', '$cod_proyecto')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarActividad($descripcion_actividad, $color, $start, $end, $tipo_actividad, $cod_objetivo){

			if($this->db->query("INSERT INTO actividades (title, color, start, end, tipo_actividad, cod_objetivo) VALUES ('$descripcion_actividad', '$color', '$start', '$end', '$tipo_actividad', '$cod_objetivo')")){
				return true;
			}else{
				return false;
			}
		}

		function agregarResultado($descripcion_resultado, $cod_actividad){

			if($this->db->query("INSERT INTO resultados(descripcion_resultado, cod_actividad) VALUES ('$descripcion_resultado', '$cod_actividad')")){
				return true;
			}else{
				return false;
			}
		}

		function agregarProducto($descripcion_producto, $fecha_entrega, $cod_resultado){

			if($this->db->query("INSERT INTO productos(descripcion_producto, fecha_entrega, cod_resultado) VALUES ('$descripcion_producto', '$fecha_entrega', '$cod_resultado')")){
				return true;
			}else{
				return false;
			}
		}

		function agregarIndicador($descripcion,$cod_producto){
			
			if($this->db->query("INSERT INTO indicadores (descripcion_indicador, cod_producto) VALUES ('$descripcion', '$cod_producto')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarImpacto($impacto_sector_productivo, $impacto_ambiental, $impacto_social, $impacto_tecnologico, $impacto_centro_formacion, $numero_semilleros, $nombres_semilleros, $numero_programas, $nombres_programas, $numero_aprendices_ejecucion, $nombres_aprendices_ejecucion, $numero_municipios_beneficiados, $nombre_municipios_beneficiados, $cod_proyecto){
			
			if($this->db->query("INSERT INTO impacto (impacto_sector_productivo, impacto_ambiental, impacto_social, impacto_tecnologico, impacto_centro_formacion, numero_semilleros, nombres_semilleros, numero_programas, nombres_programas, numero_aprendices_ejecucion, nombres_aprendices_ejecucion, numero_municipios_beneficiados, nombre_municipios_beneficiados, cod_proyecto ) VALUES ('$impacto_sector_productivo', '$impacto_ambiental', '$impacto_social', '$impacto_tecnologico', '$impacto_centro_formacion', '$numero_semilleros', '$nombres_semilleros', '$numero_programas', '$nombres_programas', '$numero_aprendices_ejecucion', '$nombres_aprendices_ejecucion', '$numero_municipios_beneficiados', '$nombre_municipios_beneficiados', '$cod_proyecto')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarEntidad($nombre_entidad, $distribucion_responsabilidades, $naturaleza_entidad, $clasificacion_empresa, $nit, $convenio, $tipo_codigo_convenio, $nombre_integrantes, $documento_integrantes, $correo_integrantes, $celular_integrantes, $recursos_especie, $descripcion_recursos_especie, $recursos_dinero, $descripcion_destinacion, $nombre_grupo_investigacion, $codigo_gruplac, $link_gruplac, $metodologias_actividades, $cod_proyecto){
			
			if($this->db->query("INSERT INTO entidades (nombre_entidad, distribucion_responsabilidades, naturaleza_entidad, clasificacion_empresa, nit, convenio, tipo_codigo_convenio, nombre_integrantes, documento_integrantes, correo_integrantes, celular_integrantes, recursos_especie, descripcion_recursos_especie, recursos_dinero, descripcion_destinacion, nombre_grupo_investigacion, codigo_gruplac, link_gruplac, metodologias_actividades, cod_proyecto ) VALUES ('$nombre_entidad', '$distribucion_responsabilidades', '$naturaleza_entidad', '$clasificacion_empresa', '$nit', '$convenio', '$tipo_codigo_convenio', '$nombre_integrantes', '$documento_integrantes', '$correo_integrantes', '$celular_integrantes', '$recursos_especie', '$descripcion_recursos_especie', '$recursos_dinero', '$descripcion_destinacion', '$nombre_grupo_investigacion', '$codigo_gruplac', '$link_gruplac', '$metodologias_actividades', '$cod_proyecto')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarActualizacion($infraestructura, $justifique_infraestructura, $requiere_adecuaciones, $justifique_adecuaciones, $numero_empresas, $nombre_empresas, $nit_empresas, $numero_bienes_baja, $nombre_bienes_baja, $numero_proyectos_financiados, $nombre_sgps, $codigo_sgps, $presupuesto_ejecutado, $funcionarios_vinculados, $nombres_funcionarios,$entrega_manuales, $cod_proyecto){
			
			if($this->db->query("INSERT INTO especificacion_actualizaciones (infraestructura, justifique_infraestructura, requiere_adecuaciones, justifique_adecuaciones, numero_empresas, nombre_empresas, nit_empresas, numero_bienes_baja, nombre_bienes_baja, numero_proyectos_financiados, nombre_sgps, codigo_sgps, presupuesto_ejecutado, funcionarios_vinculados,nombres_funcionarios,entrega_manuales, cod_proyecto ) VALUES ('$infraestructura', '$justifique_infraestructura', '$requiere_adecuaciones', '$justifique_adecuaciones', '$numero_empresas', '$nombre_empresas', '$nit_empresas', '$numero_bienes_baja', '$nombre_bienes_baja', '$numero_proyectos_financiados', '$nombre_sgps', '$codigo_sgps', '$presupuesto_ejecutado','$funcionarios_vinculados', '$nombres_funcionarios','$entrega_manuales', '$cod_proyecto')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarInfoCentro($regional, $codigo_centro, $nombre_centro, $nombre_subdirector, $correo_subdirector, $celular_subdirector, $nombre_autores, $documento_autores, $correo_autores, $num_tel_autores, $codigo_gruplac, $nombre_grupo, $link_gruplac, $linea_grupo, $cod_proyecto){
			
			if($this->db->query("INSERT INTO informacion_centro (regional, codigo_centro, nombre_centro, nombre_subdirector, correo_subdirector, celular_subdirector, nombre_autores, documento_autores, correo_autores, num_tel_autores, codigo_gruplac, nombre_grupo, link_gruplac, linea_grupo, cod_proyecto ) VALUES ('$regional', '$codigo_centro', '$nombre_centro', '$nombre_subdirector', '$correo_subdirector', '$celular_subdirector', '$nombre_autores', '$documento_autores', '$correo_autores', '$num_tel_autores', '$codigo_gruplac', '$nombre_grupo', '$link_gruplac','$linea_grupo', '$cod_proyecto')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarBibliografia($nombre_link,$cod_proyecto){
			
			if($this->db->query("INSERT INTO bibliografias (nombre_link, cod_proyecto) VALUES ('$nombre_link', '2')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarEspecificacion_innovacion($lugar_evento, $cantidad_personas_externas, $evento_issn, $relacione_codigos, $canidad_personas_sena, $numero_empresarios, $nombre_empresas_invitadas, $memorias_escritas, $integrantes_comite, $lineas_tematicas, $dias_evento, $centro_aliado, $persona_contacto,$justificacion_aliacion, $contrapartida_centro_aliado, $cod_proyecto){
			
			if($this->db->query("INSERT INTO especificaciones_innovacion (lugar_evento, cantidad_personas_externas, evento_issn, relacione_codigos, canidad_personas_sena, numero_empresarios, nombre_empresas_invitadas, memorias_escritas, integrantes_comite, lineas_tematicas, dias_evento, centro_aliado, persona_contacto, justificacion_aliacion, contrapartida_centro_aliado, cod_proyecto ) VALUES ('$lugar_evento', '$cantidad_personas_externas', '$evento_issn', '$relacione_codigos', '$canidad_personas_sena', '$numero_empresarios', '$nombre_empresas_invitadas', '$memorias_escritas', '$integrantes_comite', '$lineas_tematicas', '$dias_evento', '$centro_aliado', '$persona_contacto', '$justificacion_aliacion', '$contrapartida_centro_aliado', '$cod_proyecto')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarServicios($normas_tecnicas, $relaciona_normas, $calidad_productos, $relaciona_normas_acreditacion, $acreditar_habilitar, $cuales_debe_cumplir, $auditorias_internas, $proveedores_servicios, $implementar_normas, $relacione_ensayos, $funcionarios_vinculados, $nombres_funcionarios, $entrega_procedimientos, $requiere_equipos, $relacione_especificaciones,$requieren_calibracion,$proveedores_prestar_servicio, $hay_funcionarios,  $manuales_equipos, $adquisicion_materiales,$relacione_materiales,$infraestructura_adecuada,$especificaciones_area,$cod_proyecto){
			
			if($this->db->query("INSERT INTO especificacion_servicios (normas_tecnicas, relaciona_normas, calidad_productos, relaciona_normas_acreditacion, acreditar_habilitar, cuales_debe_cumplir, auditorias_internas, proveedores_servicios, implementar_normas, relacione_ensayos, funcionarios_vinculados, nombres_funcionarios, entrega_procedimientos, requiere_equipos, relacione_especificaciones, requieren_calibracion, proveedores_prestar_servicio, hay_funcionarios,  manuales_equipos, adquisicion_materiales, relacione_materiales, infraestructura_adecuada, especificaciones_area, cod_proyecto ) VALUES ('$normas_tecnicas', '$relaciona_normas', '$calidad_productos', '$relaciona_normas_acreditacion', '$acreditar_habilitar', '$cuales_debe_cumplir', '$auditorias_internas', '$proveedores_servicios', '$implementar_normas', '$relacione_ensayos', '$funcionarios_vinculados', '$nombres_funcionarios', '$entrega_procedimientos','$requiere_equipos', '$relacione_especificaciones','$requieren_calibracion','$proveedores_prestar_servicio','$hay_funcionarios','$manuales_equipos','$adquisicion_materiales','$relacione_materiales','$infraestructura_adecuada','$especificaciones_area', '$cod_proyecto')")){
				return true;
			}else {
				return false;
			}	
		}

		function agregarproyecto($cod_linea, $titulo_proyecto, $resumen, $objetivo_general, $cod_area, $cod_sub_area, $sector_economico, $red_de_conocimiento, $ciuu, $tiempo_ejecucion, $fecha_inicio, $fecha_fin, $link_video, $economia_naranja, $justificacion_eco_naranja, $componente_innovador, $generar_procesos_innovadores, $antecedentes, $proyectos_anteriores, $planteamiento_problema_a, $planteamiento_problema_b, $justificacion, $metodologia, $documento_usuario, $estado_proyecto){
			if($this->db->query("INSERT INTO proyectos (cod_linea, titulo_proyecto, resumen, objetivo_general, cod_area, cod_sub_area, sector_economico, red_de_conocimiento, ciuu, tiempo_ejecucion, fecha_inicio, fecha_fin, link_video, economia_naranja, justificacion_eco_naranja, componente_innovador, generar_procesos_innovadores, antecedentes, proyectos_anteriores, planteamiento_problema_a, planteamiento_problema_b, justificacion, metodologia, documento_usuario, estado_proyecto) VALUES ('$cod_linea', '$titulo_proyecto', '$resumen', '$objetivo_general', '$cod_area', '$cod_sub_area', '$sector_economico', '$red_de_conocimiento', '$ciuu', '$tiempo_ejecucion', '$fecha_inicio', '$fecha_fin', '$link_video', '$economia_naranja', '$justificacion_eco_naranja', '$componente_innovador', '$generar_procesos_innovadores', '$antecedentes', '$proyectos_anteriores', '$planteamiento_problema_a', '$planteamiento_problema_b', '$justificacion', '$metodologia', '$documento_usuario', '$estado_proyecto')")){
				return $this->db->insert_id();
			}else {
				return false;
			}	
		}

		function crearProyecto($cod_linea, $titulo_proyecto, $resumen, $objetivo_general, $cod_area, $cod_sub_area, $sector_economico, $red_de_conocimiento, $ciuu, $tiempo_ejecucion, $fecha_inicio, $fecha_fin){
			$documento_usuario = $this->session->userdata('sesionProyectoADSI')['documento_usuario'];
			if($this->db->query("INSERT INTO proyectos (cod_linea, titulo_proyecto, resumen, objetivo_general, cod_area, cod_sub_area, sector_economico, red_de_conocimiento, ciuu, tiempo_ejecucion, fecha_inicio, fecha_fin, documento_usuario) VALUES ('$cod_linea', '$titulo_proyecto', '$resumen', '$objetivo_general', '$cod_area', '$cod_sub_area', '$sector_economico', '$red_de_conocimiento', '$ciuu', '$tiempo_ejecucion', '$fecha_inicio', '$fecha_fin', '$documento_usuario')")){
				return $this->db->insert_id();
			}else {
				return false;
			}	
		}

	//CONSULTAR.

		function consultarProyectos(){
			$consulta= $this->db->query("SELECT cod_proyecto, titulo_proyecto, resumen FROM proyectos WHERE estado_proyecto = 'Finalizado'");
			if ($consulta->num_rows() > 0) {
				return $consulta-> result();
			}else {
				return false;
			}
		}

		function buscar_proyecto($documento){
			$consulta= $this->db->query("SELECT proyectos.cod_proyecto, lineas.nombre_linea, proyectos.titulo_proyecto, proyectos.resumen, area_conocimiento.descripcion_area, proyectos.sector_economico, proyectos.ciuu, proyectos.fecha_inicio, proyectos.fecha_fin
											FROM proyectos INNER JOIN usuarios ON proyectos.documento_usuario = usuarios.documento_usuario INNER JOIN lineas ON proyectos.cod_linea = lineas.cod_linea INNER JOIN area_conocimiento ON proyectos.cod_area = area_conocimiento.cod_area
											WHERE usuarios.documento_usuario = '1004767457' ORDER BY proyectos.fecha_inicio DESC ");
			return $consulta->result();
		}

		function buscar_el_proyecto($cod_proyecto){
			$consulta= $this->db->query("SELECT * FROM proyectos INNER JOIN lineas ON proyectos.cod_linea = lineas.cod_linea INNER JOIN area_conocimiento ON proyectos.cod_area = area_conocimiento.cod_area INNER JOIN sub_area ON proyectos.cod_sub_area = sub_area.cod_sub_area WHERE proyectos.cod_proyecto = '$cod_proyecto'");
			return $consulta-> result();
		}
		
		function consultarObjetivo($cod_proyecto){	
			$consulta = $this->db->query("SELECT * FROM objetivos WHERE cod_proyecto = '$cod_proyecto'");
			return $consulta->result();
		}

		function consultarActividad($cod_proyecto){	
			$consulta = $this->db->query("SELECT * FROM actividades INNER JOIN objetivos ON actividades.cod_objetivo = objetivos.cod_objetivo  WHERE objetivos.cod_proyecto = '$cod_proyecto'");
			return $consulta->result();
		}

		function consultarResultado($cod_proyecto){	
			$consulta = $this->db->query("SELECT * FROM resultados INNER JOIN actividades ON resultados.cod_actividad = actividades.cod_actividad INNER JOIN objetivos ON actividades.cod_objetivo = objetivos.cod_objetivo WHERE objetivos.cod_proyecto = '$cod_proyecto'");
			return $consulta->result();
		}

		function consultarProducto($cod_proyecto){	
			$consulta = $this->db->query("SELECT * FROM productos INNER JOIN resultados ON productos.cod_resultado = resultados.cod_resultado INNER JOIN actividades ON resultados.cod_actividad = actividades.cod_actividad INNER JOIN objetivos ON actividades.cod_objetivo = objetivos.cod_objetivo WHERE objetivos.cod_proyecto = '$cod_proyecto'");
			return $consulta->result();
		}

		function consultarIndicador($cod_proyecto){	
			$consulta = $this->db->query("SELECT * FROM indicadores INNER JOIN productos ON indicadores.cod_producto = productos.cod_producto INNER JOIN resultados ON productos.cod_resultado = resultados.cod_resultado INNER JOIN actividades ON resultados.cod_actividad = actividades.cod_actividad INNER JOIN objetivos ON actividades.cod_objetivo = objetivos.cod_objetivo WHERE objetivos.cod_proyecto = '$cod_proyecto'");
			return $consulta->result();
		}

		function consultarEntidades($cod_proyecto){	
			$consulta = $this->db->query("SELECT * FROM entidades INNER JOIN proyectos ON entidades.cod_proyecto = proyectos.cod_proyecto WHERE proyectos.cod_proyecto = '$cod_proyecto'");
			return $consulta->result();
		}

		function consultarInnovacion($cod_proyecto){	
			$consulta = $this->db->query("SELECT * FROM especificaciones_innovacion INNER JOIN proyectos ON especificaciones_innovacion.cod_proyecto = proyectos.cod_proyecto WHERE proyectos.cod_proyecto = '$cod_proyecto'");
			return $consulta->result();
		}

	//ELIMINAR.

		function eliminarObjetivo($codigo){
			$consulta = $this->db->query("DELETE FROM objetivos WHERE cod_objetivo = '$codigo'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function eliminarActividad($codigo){
			$consulta = $this->db->query("DELETE FROM actividades WHERE cod_actividad = '$codigo'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function eliminarResultado($codigo){
			$consulta = $this->db->query("DELETE FROM resultados WHERE cod_resultado = '$codigo'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function eliminarProducto($codigo){
			$consulta = $this->db->query("DELETE FROM productos WHERE cod_producto = '$codigo'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function eliminarIndicador($codigo){
			$consulta = $this->db->query("DELETE FROM indicadores WHERE cod_indicador = '$codigo'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function eliminarEntidad($codigo){
			$consulta = $this->db->query("DELETE FROM entidades WHERE cod_entidad  = '$codigo'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

	//VALIDACION
		function validar_existencia_innovacion($cod_proyecto){
			$consulta=$this->db->query("SELECT * FROM especificaciones_innovacion WHERE cod_proyecto = '$cod_proyecto'");
			if ($consulta->num_rows()>0) {
				return true;
			}else{
				return false;
			}
		}

		function validar_existencia_actualizacion($cod_proyecto){
			$consulta=$this->db->query("SELECT * FROM especificacion_actualizaciones WHERE cod_proyecto = '$cod_proyecto'");
			if ($consulta->num_rows()>0) {
				return true;
			}else{
				return false;
			}
		}

		function validar_existencia_servicio($cod_proyecto){
			$consulta=$this->db->query("SELECT * FROM especificacion_servicios WHERE cod_proyecto = '$cod_proyecto'");
			if ($consulta->num_rows()>0) {
				return true;
			}else{
				return false;
			}
		}

	//EDITAR.

		function editaProyecto($cod_proyecto,$cod_linea, $titulo_proyecto, $resumen, $objetivo_general, $cod_area, $cod_sub_area, $sector_economico, $red_de_conocimiento, $ciuu, $tiempo_ejecucion, $fecha_inicio, $fecha_fin){
			$consulta=$this->db->query("UPDATE proyectos SET cod_linea='$cod_linea', titulo_proyecto='$titulo_proyecto', resumen='$resumen', objetivo_general='$objetivo_general', cod_area='$cod_area', cod_sub_area='$cod_sub_area', sector_economico='$sector_economico', red_de_conocimiento='$red_de_conocimiento', ciuu='$ciuu', tiempo_ejecucion='$tiempo_ejecucion', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin'  WHERE cod_proyecto='$cod_proyecto'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function informacion_detallada($cod_proyecto, $link_video, $economia_naranja, $justificacion_eco_naranja, $componente_innovador, $generar_procesos_innovadores, $antecedentes, $proyectos_anteriores, $planteamiento_problema_a, $planteamiento_problema_b, $justificacion, $metodologia, $estado_proyecto){
			$consulta=$this->db->query("UPDATE proyectos SET link_video='$link_video', economia_naranja='$economia_naranja', justificacion_eco_naranja='$justificacion_eco_naranja', componente_innovador='$componente_innovador', generar_procesos_innovadores='$generar_procesos_innovadores', antecedentes='$antecedentes', proyectos_anteriores='$proyectos_anteriores', planteamiento_problema_a='$planteamiento_problema_a', planteamiento_problema_b='$planteamiento_problema_b', justificacion='$justificacion', metodologia='$metodologia', estado_proyecto='$estado_proyecto'  WHERE cod_proyecto='$cod_proyecto'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function editarObjetivo($cod_objetivo,$descripcion){
			$consulta = $this->db->query("UPDATE objetivos SET descripcion_objetivo='$descripcion' WHERE cod_objetivo = '$cod_objetivo'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function editarActividad($cod_actividad,$cod_objetivo,$descripcion, $color, $start, $end, $tipo_actividad){
			$consulta = $this->db->query("UPDATE actividades SET title='$descripcion', color = '$color', start = '$start', end = '$end', tipo_actividad = '$tipo_actividad', cod_objetivo = '$cod_objetivo' WHERE cod_actividad = '$cod_actividad'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function editarResultado($cod_resultado,$cod_actividad,$descripcion){
			$consulta = $this->db->query("UPDATE resultados SET descripcion_resultado='$descripcion', cod_actividad = '$cod_actividad' WHERE cod_resultado = '$cod_resultado'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function editarProducto($cod_producto,$cod_resultado,$descripcion, $fecha){
			$consulta = $this->db->query("UPDATE productos SET descripcion_producto='$descripcion', fecha_entrega = '$fecha', cod_resultado = '$cod_resultado' WHERE cod_producto = '$cod_producto'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function editarIndicador($cod_indicador,$cod_producto,$descripcion){
			$consulta = $this->db->query("UPDATE indicadores SET descripcion_indicador ='$descripcion', cod_producto = '$cod_producto' WHERE cod_indicador = '$cod_indicador'");
			if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function editar_especificacion_innovacion($lugar_evento, $cantidad_personas_externas, $evento_issn, $relacione_codigos, $canidad_personas_sena, $numero_empresarios, $nombre_empresas_invitadas, $memorias_escritas, $integrantes_comite, $lineas_tematicas, $dias_evento, $centro_aliado, $persona_contacto,$justificacion_aliacion, $contrapartida_centro_aliado, $cod_proyecto){
			
			$consulta=$this->db->query("UPDATE especificaciones_innovacion SET lugar_evento = '$lugar_evento', cantidad_personas_externas = '$cantidad_personas_externas', evento_issn = '$evento_issn', relacione_codigos = '$relacione_codigos', canidad_personas_sena = '$canidad_personas_sena', numero_empresarios = '$numero_empresarios', nombre_empresas_invitadas = '$nombre_empresas_invitadas', memorias_escritas = '$memorias_escritas', integrantes_comite = '$integrantes_comite', lineas_tematicas = '$lineas_tematicas', dias_evento = '$dias_evento', centro_aliado = '$centro_aliado', persona_contacto = '$persona_contacto', justificacion_aliacion = '$justificacion_aliacion', contrapartida_centro_aliado = '$contrapartida_centro_aliado' WHERE cod_proyecto='$cod_proyecto'");
				if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function editar_especificacion_actualizacion($infraestructura, $justifique_infraestructura, $requiere_adecuaciones, $justifique_adecuaciones, $numero_empresas, $nombre_empresas, $nit_empresas, $numero_bienes_baja, $nombre_bienes_baja, $numero_proyectos_financiados, $nombre_sgps, $codigo_sgps, $presupuesto_ejecutado, $funcionarios_vinculados, $nombres_funcionarios,$entrega_manuales, $cod_proyecto){
			
			$consulta=$this->db->query("UPDATE especificacion_actualizaciones SET infraestructura = '$infraestructura', justifique_infraestructura = '$justifique_infraestructura', requiere_adecuaciones = '$requiere_adecuaciones', justifique_adecuaciones = '$justifique_adecuaciones', numero_empresas = '$numero_empresas', nombre_empresas = '$nombre_empresas', nit_empresas = '$nit_empresas', numero_bienes_baja = '$numero_bienes_baja', nombre_bienes_baja = '$nombre_bienes_baja', numero_proyectos_financiados = '$numero_proyectos_financiados', nombre_sgps = '$nombre_sgps', codigo_sgps = '$codigo_sgps', presupuesto_ejecutado = '$presupuesto_ejecutado', funcionarios_vinculados = '$funcionarios_vinculados', nombres_funcionarios = '$nombres_funcionarios', entrega_manuales = '$entrega_manuales' WHERE cod_proyecto='$cod_proyecto'");
				if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		}

		function editar_especificacion_servicio($normas_tecnicas, $relaciona_normas, $calidad_productos, $relaciona_normas_acreditacion, $acreditar_habilitar, $cuales_debe_cumplir, $auditorias_internas, $proveedores_servicios, $implementar_normas, $relacione_ensayos, $funcionarios_vinculados, $nombres_funcionarios, $entrega_procedimientos, $requiere_equipos, $relacione_especificaciones,$requieren_calibracion,$proveedores_prestar_servicio, $hay_funcionarios,  $manuales_equipos, $adquisicion_materiales,$relacione_materiales,$infraestructura_adecuada,$especificaciones_area,$cod_proyecto){
			
			$consulta=$this->db->query("UPDATE especificacion_servicios SET normas_tecnicas = '$normas_tecnicas', relaciona_normas = '$relaciona_normas', calidad_productos = '$calidad_productos', relaciona_normas_acreditacion = '$relaciona_normas_acreditacion', acreditar_habilitar = '$acreditar_habilitar', cuales_debe_cumplir = '$cuales_debe_cumplir', auditorias_internas = '$auditorias_internas', proveedores_servicios = '$proveedores_servicios', implementar_normas = '$implementar_normas', relacione_ensayos = '$relacione_ensayos', funcionarios_vinculados = '$funcionarios_vinculados', nombres_funcionarios = '$nombres_funcionarios', entrega_procedimientos = '$entrega_procedimientos', requiere_equipos = '$requiere_equipos', relacione_especificaciones = '$relacione_especificaciones', requieren_calibracion = '$requieren_calibracion', proveedores_prestar_servicio = '$proveedores_prestar_servicio', hay_funcionarios = '$hay_funcionarios', manuales_equipos = '$manuales_equipos', adquisicion_materiales = '$adquisicion_materiales', relacione_materiales = '$relacione_materiales', infraestructura_adecuada = '$infraestructura_adecuada', especificaciones_area = '$especificaciones_area' WHERE cod_proyecto='$cod_proyecto'");
			
				if($this->db->affected_rows() > 0){
				return true;
			}else {
				return false;
			}
		
		}

}