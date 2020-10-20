<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct() {
            parent::__construct();        
                $this->load->model('Login_model','login');         
              }
    public function index()
    {	
    	$this->load->view('templates/cabecalho_form');   
        $this->load->view('login');
       

      
        
    }

    public function autentica() 
    {
    	$email = $_POST["email"];
    	$password = md5($_POST["password"]);
    	$user = $this->login->store($email, $password);


    	if($user){
    		$this->session->set_userdata("usuario_logado", $user);
    		redirect("principal");
    	} else {
    		redirect("login"); 
    	}


    }
    public function logout()
    {
        $this->session->unset_userdata("usuario_logado");
        redirect("login");
    }
}
