<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
    public function index()
    {
        permission();
    	$this->load->model('usuarios_model');
    	$tabela = $this->usuarios_model->seleciona();
         $this->load->model('produtos_model');
        $produtos = $this->produtos_model->seleciona();
    	$data = array(
    		'title' => "Dashboard",
    		'tabela' =>$tabela,
            'produtos' =>$produtos
    	);

       
       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
        
    }


    function show_data() {  
    $this->load->model('usuarios_model'); 
    $tabela = $this->usuarios_model->seleciona();
    echo json_encode($tabela);

    $this->load->view('templates/header');
    $this->load->view('templates/nav-top');
    $this->load->view('dashboard', $tabela);
    $this->load->view('templates/footer');
    
        

}

    

}
