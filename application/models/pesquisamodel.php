<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesquisamodel extends CI_Model {

public function pesquisar(){
                   
    $busca = $this->input->post('pesquisarmodel'); 

    $query_busca = $this->db->query("SELECT * FROM lanche WHERE coluna LIKE '%".$busca."%' ")->result();
  
  
    $data=[
          "resultados" => $query_busca,

            ];
       $data_content = array(
          'content' => $this->load->view('Blog/resultado', $data)
      );
  

    }
}