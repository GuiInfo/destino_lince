<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_adm extends CI_Controller {

    public function __construct(){
		parent::__construct();

        $this->load->model("Models_destinos");
        $this->load->model("Models_adm", "model");
	}
    
    public  function telaloginadm(){
        $this->load->view('Views_telaloginadm');
        
    }

    public function login()
    {
        $ret = new stdClass();
        $ret->status = false;

        try{
            $usuario = $this->input->post('usuario');
            $senha = $this->input->post('senha');

            $exec = $this->model->getLogin($usuario, $senha);
            if (empty($exec)) {
                throw new Exception("Usuário ou senha incorretos");
            }

            $this->session->set_userdata("logado", true);

            $ret->status = true;
            $ret->message = "Login efetuado com sucesso";
        }catch (Exception $e) {
            $ret->message = $e->getMessage();
        }

        echo json_encode($ret);
    }

    public function index($pesquisa = false){
        if (!$this->session->userdata('logado')) {
            redirect(base_url());
            exit;
        }

            $data['pesquisa'] = urldecode($pesquisa);
		    $data['destinos'] = $this->Models_destinos->getDestinos($data['pesquisa']);

            $this->load->view('Views_adm', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('logado');
        redirect(base_url());
    }

}
