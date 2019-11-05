<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gravamodel extends CI_Model{

    public function inserir($dados){

        return $this->db->insert('gravapedido', $dados);
    }


}