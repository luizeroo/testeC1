<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // bloquea qualquer acesso direto de pasta. Sempre cai no inde.php direcionando pra rota certa.
	
	// A gente cai na rota principal que cai na index que tá ali.

	// https://php-luizero.c9users.io/index.php/welcome/index

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->model('NomeModel','nome'); // criar uma variavel tanto do view quanto do model no controller, mas a gente n ve.
		// 1. Essa variavel vai ser criada com o nome "nome";
		// 2. Essa variavel vai ser publica! Pq é criada dinamicamente;
		// 3. Não posso colocar construtor. Vazio. 
		// Fazendo isso ela vai criar o atributo "nome" para a classe Welcome2.
		
        $this->nome->init("Testando!");
        // O "Init" é o nosso construtor
        
		$this->nome->mostrar();
		$this->load->view('welcome_message');
	}
	
	// https://php-luizero.c9users.io/index.php/welcome/teste
	public function teste(){
		$this->load->model('NomeModel','nome');
        $this->nome->__init__("Ayrton");
        //ORM - Object-Relational Mapping
        $b = $this->db->insert('Nomes',$this->nome->toArray()); // ve o teste aqui
        echo "ACABOU! $b";
	}
	
	public function spooky(){
		echo "<h1 style='text-align:center; margin-top:100px'>Feliz Halloween <br> Chupa meu doce de abobora</h1> ";
	}
	
	// url/index.php/welcome/ola
	public function ola(){
		$this->load->view('ola');
		$sess = $this->session->userdata("nome");
		if(isset($sess)){
			echo $sess;
		}else{
			echo "Nao ha session";
		}
	}
	
	// url/index.php/welcome/form
	public function form(){
		$this->load->view('form');
	}
	
	// primeira forma
	public function postar(){
		$nome = $_POST['nome'];
		echo "<h1 style='text-align:center'>Nome digitado: <b style='color:red'>$nome</b>, o famoso petista<h1>";
	}
	
	// segunda forma, evita usar variavel global.
	public function postarIgnite(){
		$nome = $this->input->post('nome');
		echo "<h1 style='text-align:center'>Nome digitado: <b style='color:red'>$nome</b>, o famoso petista<h1>";
	}
	
	// Exercício: Crie um formulário para somar dois numeros
	public function soma(){
		$this->load->view('soma');
	}
	
	public function calcSoma(){
		$n = $this->input->post('n1') + $this->input->post('n2');
		echo "A soma é: $n"; 
	}
	
	
	// 2 parte da aula. Postar.
	public function newPostar(){
		$nome = $this->input->post("nome");
		// Hoje não temos MODEL
		
		$dado['nome'] = $nome;
		$b = $this->db->insert('Nomes',$dado);
		echo "Acabou! $b";
	}
	// Exercício:
	// Crie uma tabela CLIENTE em seu database com os campos:
		// ID, Nome, Idade e CPF
	// Faça uma tela de cadastro de clientes encontrado pela rota
	// app.com/cliente/cadastro
	
	// SUA INSERÇÃO AO BANCO DEVE OCORRER EM
	
	// app.com/cliente/inserir
	
	// Após inserção, mostrar uma página de sucesso mostrando o nome inserido.
	
	
	
	// ==========================================================================
		// Crie uma tabela chamada Disciplina contendo os campos: 
		// 	id, nome, descrição
			
		// 	- Crie uma rota para mostrar o formulario
		// 	- Crie o model com os atributos privados
		// 	- Crie uma rota para inserção de disciplinas
	
	
	
	// Pega o exercício pronto do prof.
	
	
	///////// DISCIPLINA
	public function formDisciplina(){
		$this->load->view('formDisciplina');
	}
	
	public function inserirDisciplina(){
		$this->load->model('DisciplinaModel','obj');
		$nome = $this->input->post("nome");
		$desc = $this->input->post("descricao");
		$this->obj->__init__($nome,$desc);
		$b = $this->db->insert('Disciplina',$this->obj->toArray());
		echo "Cadastro realizado. Success: $b";
		$this->load->view('formDisciplinaSucesso');
	}
	
	// Parte de Cookie e Formulario
	public function session(){
		$this->load->view('formSession');
	}
	
	public function outro(){
		$postagem = $this->input->post("nome");
		echo $postagem;
		$this->session->set_userdata("nome",$postagem);
	}
	
	// EXERCICIO PRA CASA
	// Autenticação e Verificação
		// Preparar um esquema. Querry e setar a section.
}
