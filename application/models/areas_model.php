<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas_model extends CI_Model {

	function addAreas($descripcion_area){
		if($this->db->query("INSERT INTO area_conocimiento (descripcion_area) VALUES ('$descripcion_area')")){
			return true;
		}else {
			return false;
		}	
	}
	
	function getAreas(){
		$consulta= $this->db->query('SELECT cod_area, descripcion_area FROM area_conocimiento');
		if ($consulta->num_rows() > 0) {
			return $consulta-> result();
		}else {
			return false;
		}
	}

	function update_areas($codigo, $descripcion){
		$consulta = $this->db->query("UPDATE area_conocimiento SET descripcion_area='$descripcion' WHERE cod_area = '$codigo'");
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}	
	}

	function deleteAreas($id){
		$consulta = $this->db->query("DELETE FROM area_conocimiento WHERE cod_area = '$id'");
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}	
	}

	
}
