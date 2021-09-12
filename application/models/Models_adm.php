<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_adm extends CI_Model{

    //FUNÇÃO QUE MANTEM O LOGIN
    public function getLogin($usuario, $senha) 
    {
        $this->db->where("usuario", $usuario);
        $this->db->where("senha", $senha);

        $query = $this->db->get("usuarios");
        return $query->row();
    }
}