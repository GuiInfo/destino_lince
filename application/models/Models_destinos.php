<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Models_destinos extends CI_Model{

    //FUNÇÃO DE BUSCAR DESTINOS
    //INICIA COM A VARIAVEL PESQUISA FALSA
    public function getDestinos($pesquisa = false){
        //VERIFICA SE RETORNOU UMA PESQUISA
        if ($pesquisa) {
            //EMTREGA A BUSCA DA PESQUISA
            $this->db->like("nome", $pesquisa);
        }

        //CASO PESQUISA SEJA FALSA COLOCA TODOS OS DESTINOS NA QUERY
        $query = $this->db->get('destinos');
        return $query->result();
    }
    
    //FUNÇÃO DE BUSCAR ID
    public function getID($id){


        $this->db->where('id', $id);

        $query = $this->db->get("destinos");

        return $query->row();
    }

        //FUNÇÃO DE INSERIR DESTINOS
    public function adicionar($dados=NULL){
        if($dados != NULL):
            $this->db->insert('destinos', $dados);
        endif;
    } 

    //FUNÇÃO DE EDITAR DESTINOS
    public function editar($id, $dados) {
        $ret = false;

        if (!empty($id)) {
            $this->db->where('id', $id);
            $this->db->update('destinos', $dados);
            $erro = $this->db->error();
            
            if ($erro['code'] == 0) {
                $ret = true;
            }
        }
        return $ret;
    }

    //FUNÇÃO DE APAGAR DESTINOS
    public function apagar($id = NULL){
        if($id != NULL):
            $this->db->delete('destinos', array('id'=>$id));
        endif;
        }
    
}