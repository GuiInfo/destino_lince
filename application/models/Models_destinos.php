<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_destinos extends CI_Model{

    public function getDestinos($pesquisa = false){
        if ($pesquisa) {
            $this->db->like("nome", $pesquisa);
        }

        $query = $this->db->get('destinos');
        return $query->result();
    }
    
    public function getID($id){

        $this->db->where('id', $id);

        $query = $this->db->get("destinos");

        return $query->row();
    }

    public function adicionar($dados=NULL){
        if($dados != NULL):
            $this->db->insert('destinos', $dados);
        endif;
    } 

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

    public function apagar($id = NULL){
        if($id != NULL):
            $this->db->delete('destinos', array('id'=>$id));
        endif;
        }
    
}