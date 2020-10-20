<?php 
class Produtos_model extends CI_Model {

	public function new($produto)
	{
		$this->db->insert("tb_produtos", $produto);
	}


	public function seleciona(){

		$retorno = $this->db->get('tb_produtos');

		return $retorno->result_array();

	}


}