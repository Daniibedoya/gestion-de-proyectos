<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lineas_model extends CI_Model {

	function get_lineas(){
		$consulta= $this->db->query('SELECT * FROM lineas');
		return $consulta-> result();	
	}
	
}