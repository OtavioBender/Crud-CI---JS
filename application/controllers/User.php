<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function __construct(){
    parent::__construct();

    // Load Model
    $this->load->model('Main_model');

    // Load base_url
    $this->load->helper('url');
  }
  public function index(){
    permission();
    $tb_users = $this->Main_model->getUsernames();
    $title = array( 
    'title' => "Consulta de usuarios"
    ); 

    $data['tb_users'] = $tb_users;

   
    $this->load->view('templates/header',$title);
    $this->load->view('templates/nav-top');
    $this->load->view('user_view',$data);
    $this->load->view('templates/footer');
    
   
  }

  public function userDetails(){
    // POST data
    $postData = $this->input->post();

    // get data
    $data = $this->Main_model->getUserDetails($postData);

    echo json_encode($data);

  }

}