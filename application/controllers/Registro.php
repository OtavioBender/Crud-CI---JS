<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    public function index()
    {	
        
        $this->load->view('templates/cabecalho_form');
    	$this->load->view('registro');    
    }

    public function new()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|min_length[10]|max_length[100]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('telefone', 'telefone', 'required|min_length[8]|max_length[20]');
        if ($this->form_validation->run() == FALSE) 
            
        {
            $this->load->view('templates/cabecalho_form');
            $this->load->view("registro");
         
        } else {
               $this->load->model('users_model');
        $user = array(
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "password" => md5($_POST["password"]),
            "telefone" => $_POST["telefone"]
        );

    $this->users_model->new($user);
    redirect('login');


        }
        
    }



    public function edit($id)
    {
    
      $this->load->model('users_model');  
      $linha = $this->users_model->mostra($id);
        $data = array(
            'title' => "Editar usuario",
            'linha' =>$linha
        );
        

            $this->load->view('templates/cabecalho_form', $data);
            $this->load->view('registro', $data);
       
    }

    public function update($id)
    {

        $this->load->model('users_model');
        $linha = array(
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "password" => md5($_POST["password"]),
            "telefone" => $_POST["telefone"]
        );
        $this->users_model->update($id, $linha);
        redirect('principal');  
    }

    public function delete($id)
    {
    permission();
      $this->load->model('users_model');
      $this->users_model->destroy($id);
      redirect("principal");
        
    }

    
}