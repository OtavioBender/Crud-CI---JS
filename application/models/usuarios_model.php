<?php 
class usuarios_model extends CI_Model {

	public function seleciona(){

		$retorno = $this->db->get('tb_users');

		return $retorno->result_array();

	}


}

?>
