<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubAreas extends CI_Controller {

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

	public function crearSubAreas(){
		$this->load->view('subAreasCrear');
	}

	public function consultarSubAreas(){
		$this->load->view('subAreasConsultar');
	}

	public function agregar_sub_areas(){
		$this->load->model('sub_areas_model'); // importando el modelo a usar
		$descripcion = $this->input->post("descripcion");
		
		$sub_areas=$this->sub_areas_model->addSub_areas($descripcion);
		echo json_encode($sub_areas);
	}

	public function getSub_areas(){
		$this->load->model('sub_areas_model'); // importando el modelo a usar
		$sub_areas=$this->sub_areas_model->get_sub_areas();
		echo json_encode($sub_areas);
	}

	public function editar_sub_areas(){
		$this->load->model('sub_areas_model'); // importando el modelo a usar
		$codigo=$this->input->post("codigo");
		$descripcion=$this->input->post("descripcion");
		$sub_areas=$this->sub_areas_model->update_sub_areas($codigo, $descripcion);
		echo json_encode($sub_areas);
	}
	
	public function eliminar_sub_areas(){
		$this->load->model('sub_areas_model'); // importando el modelo a usar
		$codigo=$this->input->post("codigo");
		$sub_areas=$this->sub_areas_model->delete_sub_areas($codigo);
		echo json_encode($sub_areas);
	}
	
}