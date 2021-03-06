<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_destinos extends CI_Controller {

    //FUNÇÃO CONSTRUTORA
	public function __construct(){
		parent::__construct();
        //CARREGA JÁ A MODEL DESTINOS E DEFINE O NICK DE MODEL
        $this->load->model("Models_destinos", "model");
	}

	public function index($pesquisa = false){
        $data['pesquisa'] = urldecode($pesquisa);
		$data['destinos'] = $this->model->getDestinos($data['pesquisa']);

		$this->load->view('Views_destinos', $data);
	}

	public function forminserir(){
        $this->load->view('Views_adddestino.php');
    }

    public function adddestino(){
    
            $dados['nome'] = $this->input->post('nome');
            $dados['minidescricao'] = $this->input->post('minidescricao');
            $dados['descricao'] = $this->input->post('descricao');
            $dados['endereco'] = $this->input->post('endereco');

            $this->model->adicionar($dados);
    
            redirect('index.php/Controller_adm');
         
    }

    public function formeditar($id){
        if (!$this->session->userdata('logado')) {
            redirect(base_url());
            exit;
        }

        $dados = [];
        $dados['destinos'] = $this->model->getID($id);

        $this->load->view('Views_editardestinos' ,$dados);
    }

    public function atualizarItem(){
        $ret = new stdClass();
        $ret->status = false;

        try {
            $id = $this->input->post('id');

            if (empty($id)) {
                throw new Exception("Ocorreu um erro inesperado, recarregue a página e tente novamente.");
            }

            $dados = new stdClass();
            $dados->nome = $this->input->post('nome');
            $dados->minidescricao = $this->input->post('minidescricao');
            $dados->descricao = $this->input->post('descricao');
            $dados->endereco = $this->input->post('endereco');

            $exec = $this->model->editar($id, $dados);
            if (!$exec) {
                throw new Exception("Deu ruim na edição");
            }

            $ret->status = true;
            $ret->message = "Destino atualizado com sucesso";
        }catch (Exception $e) {
            $ret->message = $e->getMessage();
        }

        echo json_encode($ret, JSON_NUMERIC_CHECK);
    }

    public function apagarDestino ($id){

        if (!empty($id)) {
            $this->model->apagar($id);
        }
        redirect('index.php/Controller_adm');
    }
}
?>
