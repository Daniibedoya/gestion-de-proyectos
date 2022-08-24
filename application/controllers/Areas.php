<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas extends CI_Controller {

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

	public function crearAreas(){
		$this->load->view('areasCrear');
	}
	public function anadirAreas(){
		$this->load->model('Areas_model'); // importando el modelo a usar
		$descripcion_area=$this->input->post("descripcion_area");

		$areas=$this->Areas_model->addAreas($descripcion_area);
		echo json_encode($areas);
	}
	public function getAreas(){
		$this->load->model('Areas_model'); // importando el modelo a usar
		$areas=$this->Areas_model->getAreas();
		echo json_encode($areas);
	}

	public function consultarAreas(){
		$this->load->view('areasConsultar');
	}

	public function editar_areas(){
		$this->load->model('Areas_model'); // importando el modelo a usar
		$codigo=$this->input->post("codigo");
		$descripcion=$this->input->post("descripcion");
		$areas=$this->Areas_model->update_areas($codigo, $descripcion);
		echo json_encode($areas);
	}

	public function eliminarAreas(){
		$this->load->model('Areas_model'); // importando el modelo a usar
		$id=$this->input->post("cod_area");
		$areas=$this->Areas_model->deleteAreas($id);
		echo json_encode($areas);
	}
}