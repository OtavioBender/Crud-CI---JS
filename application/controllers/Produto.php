<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {
  public function index()
  {
  	$this->load->view('templates/cabecalho_form');
  	$this->load->view('produtos');
  }

  public function new()
  {
  	$this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('descricao', 'descricao', 'required|min_length[10]|max_length[255]');
        $this->form_validation->set_rules('valor', 'valor', 'required|min_length[1]|max_length[15]');
        if ($this->form_validation->run() == FALSE) 
            
        {
            $this->load->view('templates/cabecalho_form');
            $this->load->view("produtos");
         
        } else {
              $this->load->model('Produtos_model');
        $produto = array(
            "name" => $_POST["name"],
            "descricao" => $_POST["descricao"],
            "valor" => $_POST["valor"]
           
        );

    $this->Produtos_model->new($produto);
    redirect('principal');


        }
  }
}