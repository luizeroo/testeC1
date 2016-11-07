<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // bloquea qualquer acesso direto de pasta. Sempre cai no inde.php direcionando pra rota certa.
	
	// A gente cai na rota principal que cai na index que tá ali.

	// https://php-luizero.c9users.io/index.php/welcome/index

class Math extends CI_Controller {
   
   public function index()
	{
		echo "Caiu em Math.";
	}
   
    // Exercício: Crie um formulário para somar dois numeros
	
	public function soma(){
		$this->load->view('soma');
	}
	
	public function calcSoma(){ // evite usar Controller no "Echo", assumindo papel de view. N faz isso n.
	    //echo "A soma é: " . intval($n); // Forma 1.
		
	    // Forma 2.
		$n1 = intval($this->input->post('n1'));
		$n2 = intval($this->input->post('n2'));
		$soma = $n1 + $n2;
		$data['n1'] = $n1;
		$data['n2'] = $n2;
		$data['res'] = $soma;
		$this->load->view('sucesso',$data);
	}
}