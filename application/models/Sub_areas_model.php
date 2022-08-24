<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_areas_model extends CI_Model {

	function addSub_areas($descripcion){
		if($this->db->query("INSERT INTO sub_area (descripcion_sub_area) VALUES ('$descripcion')")){
			return true;
		}else{
			return false;
		}	
	}

	function get_sub_areas(){
		$consulta= $this->db->query('SELECT * FROM sub_area');
		if ($consulta->num_rows() > 0) {
			return $consulta-> result();
		}else {
			return false;
		}	
	}

	function update_sub_areas($codigo, $descripcion){
		$consulta = $this->db->query("UPDATE sub_area SET descripcion_sub_area='$descripcion' WHERE cod_sub_area = '$codigo'");
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}	
	}

	function delete_sub_areas($codigo){
		$consulta = $this->db->query("DELETE FROM sub_area WHERE cod_sub_area = '$codigo'");
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}	
	}
}