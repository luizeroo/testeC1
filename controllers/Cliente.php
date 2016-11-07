<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cliente extends CI_Controller {
    public function index(){
        echo "Página de SignUp";
    }
    
    public function signup(){
        $this->load->view('signup');
    }
    
    public function cadastro(){
        $nome = $this->input->post('nome');
        $dado['nm_cliente'] = $nome;
        $dado['cd_idade'] = intval($this->input->post('idade'));
        $dado['cd_cpf'] = intval($this->input->post('cpf'));
        $b = $this->db->insert('Cliente',$dado);
        $this->load->view('successSignup',$dado);
        
        echo "Acabou! $b";
    }
}
   