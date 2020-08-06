<?php
class Estados_model extends CI_Model {

  public function buscarTodos() {

    return $this->db->get("tbl_estados")->result_array();

  }

}