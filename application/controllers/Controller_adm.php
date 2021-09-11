<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_adm extends CI_Controller {

    public function __construct(){
		parent::__construct();

        $this->load->model("Models_destinos");

	}
    
    public  function telaloginadm(){
        $this->load->view('Views_telaloginadm');
        
    }

    public function index($pesquisa = false){

            $data['pesquisa'] = $pesquisa;
		    $data['destinos'] = $this->Models_destinos->getDestinos($pesquisa);

            $this->load->view('Views_adm', $data);
    }

}  
?>