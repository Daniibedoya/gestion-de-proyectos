<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lineas extends CI_Controller {

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
	public function get_lineas(){
		$this->load->model('Lineas_model'); // importando el modelo a usar
		$lineas=$this->Lineas_model->get_lineas();
		echo json_encode($lineas);
	}
}