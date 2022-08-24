<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	function validarDatosLogin($correo, $password){
		$consulta = $this->db->query("SELECT * FROM usuarios WHERE email = '$correo' AND password = '$password' AND estado = 'Activo' ");

		if ($consulta->num_rows() != 0) {
			return true;
		}else{
			return false;
		}
	}	

	function getDatosSesion($correo){
		$consulta = $this->db->query("SELECT documento_usuario, nombre_usuarios, email, tipo_usuario, estado FROM usuarios  WHERE usuarios.email = '$correo' ");
		return $consulta->row_array();
	}

	function estadoUsuario($correo, $password){
		$consulta = $this->db->query("SELECT * FROM usuarios WHERE email = '$correo' AND password = '$password' ");

		if ($consulta->num_rows() != 0) {
			return $consulta->row_array()['estado'];
		}else{
			return "Los datos no coinciden con algun usuario registrado.";
		}
	}

	function addUsuarios($documento,$nombre,$passwod,$email,$telefono,$direccion,$tipo_usuario,$estado){
		
		if($this->db->query("INSERT INTO usuarios (documento_usuario, nombre_usuarios, password, email, telefono, direccion, tipo_usuario, estado) VALUES ('$documento', '$nombre', '$passwod', '$email', '$telefono', '$direccion', '$tipo_usuario', '$estado')")){
			return true;
		}else {
			return false;
		}	
	}

	public function editUsuarios($documento,$nombre,$telefono,$direccion,$tipo_usuario,$estado){
		$consulta=$this->db->query("UPDATE usuarios SET  nombre_usuarios='$nombre', telefono='$telefono', direccion='$direccion', tipo_usuario='$tipo_usuario', estado='$estado' WHERE documento_usuario='$documento'");
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}	
	}
	public function seleccionar_usuario($documento){
		$consulta= $this->db->query("SELECT nombre_usuarios , email, telefono, direccion, tipo_usuario, estado FROM usuarios WHERE documento_usuario='$documento'");
		if ($consulta->num_rows() > 0) {
			return $consulta-> result();
		}else {
			return false;
		}
	} 
	function getUsuarios($documento){
		$consulta= $this->db->query("SELECT documento_usuario, nombre_usuarios, email, tipo_usuario,  estado FROM usuarios WHERE documento_usuario !='$documento'");
		if ($consulta->num_rows() > 0) {
			return $consulta-> result();
		}else {
			return false;
		}
	}

	function deleteUsuarios($id){
		$consulta = $this->db->query("DELETE FROM usuarios WHERE documento_usuario = '$id'");
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}	
	}
	function validarUsuarios($documento, $email){
		$consulta=$this->db->query("SELECT nombre_usuarios  FROM usuarios WHERE documento_usuario='$documento' OR email='$email'");
		if ($consulta->num_rows() > 0) {
			return true;
		}else {
			return false;
		}
	}

	function editarUsuario($documento,$nombre,$contrasena_actual,$email,$telefono,$direccion){
		$consulta=$this->db->query("UPDATE usuarios SET  nombre_usuarios='$nombre', email='$email', telefono='$telefono', direccion='$direccion' WHERE documento_usuario='$documento' AND password='$contrasena_actual'");
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}	
	}

	function editarUsuario_contrasena($documento,$nombre,$nueva_contrasena,$contrasena_actual,$email,$telefono,$direccion){
		$consulta=$this->db->query("UPDATE usuarios SET  nombre_usuarios='$nombre', password='$nueva_contrasena', email='$email', telefono='$telefono', direccion='$direccion' WHERE documento_usuario='$documento' AND password='$contrasena_actual'");
		if($this->db->affected_rows() > 0){
			return true;
		}else {
			return false;
		}
	}
}

/* End of file usuarios_model.php */
/* Location: ./application/models/usuarios_model.php */