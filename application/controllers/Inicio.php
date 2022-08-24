<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index(){
		$this->load->view('inicio');
	}

	public function validarLogin(){
		$correo = $this->input->post('correo_login');
		$password = md5($this->input->post('password_login'));

		$this->load->model('usuarios_model'); // importando el modelo a usar
		$correcto = $this->usuarios_model->validarDatosLogin($correo, $password);

		if ($correcto) {
			$datos_sesion = $this->usuarios_model->getDatosSesion($correo);

			$this->session->unset_userdata('sesionProyectoADSI');
			$this->session->set_userdata('sesionProyectoADSI', $datos_sesion);

			$data['status'] = "OkLoginUsuario";
			echo json_encode($data);
		}else{
			$data['status'] = "ErrorLoginUsuario";
			$data['estado_usuario'] = $this->usuarios_model->estadoUsuario($correo, $password);
			echo json_encode($data);
		}
	}

	public function cerrarSesion(){
		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}
	
	public function cargarInicioUsuario(){
		if ($this->session->userdata('sesionProyectoADSI')) {
			if($this->session->userdata('sesionProyectoADSI')['tipo_usuario']){
				if ( $this->session->userdata('sesionProyectoADSI')['tipo_usuario'] == 'Administrador' ) {
					$this->load->view('inicio_admin');
				}
				if ( $this->session->userdata('sesionProyectoADSI')['tipo_usuario'] == 'Gestor' ) {
					$this->load->view('inicio_gestor');
				}	
			}
		}else{
			redirect('Inicio');
		}
		
	}

}

/* End of file Inicio.php */
/* Location: ./application/controllers/Inicio.php */