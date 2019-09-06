<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas_Models extends CI_Model {
	/*Para que aparezca visualizar o ver*/
	public function getMarcas(){
		$this->db->where("estado_marca","1");
		$resultados = $this->db->get("marcas");
		return $resultados->result();
	}
	/*Para insertar o guardar*/
	public function save($data){
		return $this->db->insert("marcas",$data);
	}
	/*Funcion para editar */
	public function getMarca($id_marca){
		$this->db->where("id_marca",$id_marca);
		$resultado = $this->db->get("marcas");
		return $resultado->row();

	}
	/*Para actualizar*/
	public function update($id_marca,$data){
		$this->db->where("id_marca",$id_marca);
		return $this->db->update("marcas",$data);
	}

	
}