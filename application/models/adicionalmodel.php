<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adicionalmodel extends CI_Model {

    public function buscaadicional (){
        return $this->db->get("produtoadd")->result_array();

    }


}