<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

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
		$this->load->view('');
	}
	public function crearUsuarios(){
		$this->load->view('usuarios_crear');
	}

	public function consultarUsuarios(){
		$this->load->view('usuariosConsultar');
	}

	public function infoUsuarios($id){
		$this->load->view('info_usuarios', compact("id"));
	}

	public function ver_perfil(){
		$this->load->view('editar_perfil');
	}

	public function seleccionar_usuario(){
		$this->load->model('usuarios_model'); // importando el modelo a usar
		$documento=$this->input->post("documento");
		$usuario=$this->usuarios_model->seleccionar_usuario($documento);
		echo json_encode($usuario);
	} 

	public function agregarUsuarios(){
		$this->load->model('usuarios_model'); // importando el modelo a usar
		$documento=$this->input->post("documento");
		$nombre=$this->input->post("nombre");
		$passwod= md5($this->input->post("password"));
		$email=$this->input->post("email");
		$telefono=$this->input->post("telefono");
		$direccion=$this->input->post("direccion");
		$tipo_usuario=$this->input->post("tipo_usuario");
		$estado=$this->input->post("estado");

		$usuarios=$this->usuarios_model->addUsuarios($documento,$nombre,$passwod,$email,$telefono,$direccion,$tipo_usuario,$estado);
		echo json_encode($usuarios);
	}

	public function getUsuarios(){
		$documento=$this->session->userdata('sesionProyectoADSI')['documento_usuario'];
		$this->load->model('usuarios_model'); // importando el modelo a usar
		$usuarios=$this->usuarios_model->getUsuarios($documento);
		echo json_encode($usuarios);
	}

	public function eliminarUsuario(){
		$this->load->model('usuarios_model'); // importando el modelo a usar
		$id=$this->input->post("documento");
		$usuarios=$this->usuarios_model->deleteUsuarios($id);
		echo json_encode($usuarios);
	}

	public function editar_usuarios(){
		$this->load->model('usuarios_model'); // importando el modelo a usar
		$documento=$this->input->post("documento");
		$nombre=$this->input->post("nombre_usuarios");
		$telefono=$this->input->post("telefono");
		$direccion=$this->input->post("direccion");
		$tipo_usuario=$this->input->post("tipo_usuario");
		$estado=$this->input->post("estado");
		$usuarios=$this->usuarios_model->editUsuarios($documento,$nombre,$telefono,$direccion,$tipo_usuario,$estado);
		echo json_encode($usuarios);
	}
	public function validarExistencia(){
		$this->load->model('usuarios_model'); // importando el modelo a usar
		$documento=$this->input->post("documento");
		$email=$this->input->post("email");
		$validacion=$this->usuarios_model->validarUsuarios($documento, $email);
		echo json_encode($validacion);
	}

	public function editar_perfil(){
		$this->load->model('usuarios_model'); // importando el modelo a usar
		$documento=$this->input->post("documento");
		$nombre=$this->input->post("nombre_usuarios");
		$contrasena_actual=md5($this->input->post("contrasena_actual"));
		$email=$this->input->post("email");
		$telefono=$this->input->post("telefono");
		$direccion=$this->input->post("direccion");
		
		$usuarios=$this->usuarios_model->editarUsuario($documento,$nombre,$contrasena_actual,$email,$telefono,$direccion);
		echo json_encode($usuarios);
	}

	public function editar_perfil_contrasena(){
		$this->load->model('usuarios_model'); // importando el modelo a usar
		$documento=$this->input->post("documento");
		$nombre=$this->input->post("nombre_usuarios");
		$nueva_contrasena=md5($this->input->post("nueva_contrasena"));
		$contrasena_actual=md5($this->input->post("contrasena_actual"));
		$email=$this->input->post("email");
		$telefono=$this->input->post("telefono");
		$direccion=$this->input->post("direccion");
		
		$usuarios=$this->usuarios_model->editarUsuario_contrasena($documento,$nombre,$nueva_contrasena,$contrasena_actual,$email,$telefono,$direccion);
		echo json_encode($usuarios);
	}

}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */