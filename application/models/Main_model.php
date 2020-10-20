<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {
  function getUsernames(){

    $this->db->select('name');
    $records = $this->db->get('tb_users');
    $tb_users = $records->result_array();
    return $tb_users;
  }
  function getUserDetails($postData=array()){
 
    $response = array();
 
    if(isset($postData['name']) ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('name', $postData['name']);
      $records = $this->db->get('tb_users');
      $response = $records->result_array();
 
    }
 
    return $response;
  }

}