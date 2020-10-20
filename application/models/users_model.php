<?php 
class Users_model extends CI_Model {

	public function new($user)
	{
		$this->db->insert("tb_users", $user);
	}

	public function mostra($id)
	{
		return $this->db->get_where('tb_users', array(
			"id" => $id
		))->row_array();
	}
	public function update($id, $linha)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_users', $linha);
	}

	public function destroy($id)
	{
		$this->db->where("id", $id);
		return $this->db->delete('tb_users');
	}



}
