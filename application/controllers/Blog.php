<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index(){

		$this->load->model('Produtomodel');
		$dados['busca'] = $this->Produtomodel->buscalanches();

		$this->load->view('blog/index', $dados);
	}


	public function resultado(){

		$this->load->model('pesquisamodel');
		$dados['listagem'] = $this->pesquisamodel->buscar($_POST);
		$this->load->view('blog/resultado', $dados);
	}

	public function adicional(){

		$this->load->model('adicionalmodel');
		$add = $this->adicionalmodel->buscaadicional();
		$dados = array("adicional" =>$add);

		$this->load->view('blog/index', $dados);

	}

	public function salvapedido(){
		$dados = [
			'nomelanche' => '',
			'igredientes' => '',
			'preco' => '',
			'adicionalpro' => ''
		];
	
		$this->load->model('gravamodel');

		if ($this->gravamodel->inserir($dados)) {
			echo 'Dados Inserido com sucesso';
		}else {
			echo 'Erro ao inserir dados';
		}
		$this->load->view('blog/salvapedido');
	}
	
}

