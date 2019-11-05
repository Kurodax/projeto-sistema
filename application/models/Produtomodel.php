<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtomodel extends CI_Model {

    public function buscalanches (){
        return $this->db->get('lanche')->result_array();

    }

    public function buscaadicional (){
        return $this->db->get('produtoadd')->result_array();
    }
 
}