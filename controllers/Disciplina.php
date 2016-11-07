<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Controller {
    public function formulario(){
        $this->load->view('formDisciplina');
    }
    
    public function cadastro(){
        $this->load->model('DisciplinaModel','disc');
        $nome = $this->input->post("nome");
        $desc = $this->input->post("descricao");
        $this->disc->__init__($nome,$desc);
        var_dump($this->disc->toArray());
        $b = $this->db->insert('disciplina',$this->disc->toArray());
        echo "Acabou $b";
    }
    
    public function perfil($id){
        echo $id;
        // $this->load->model('DisciplinaModel','disc');
        // $query = $this->db->query("SELECT * FROM disciplina where id=$id;");
        // $disciplina = $query->result('disciplina'); // é bom por causa da JOIN. Se eu por exemplo quisesse.
        // $data["nome"] = $disciplina[0]->nome;
        // $data["descr"] = $disciplina[0]->descricao;
        // $this->load->view('perfil',$data);
    }
}

?>