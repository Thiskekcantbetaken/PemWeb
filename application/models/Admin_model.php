<?php 
defined('BASEPATH') OR exit('No direct script access allowed !');

class Admin_model extends CI_Model {

  public function getAllBarang() {
    return $this->db->get('barang')->result_array();
  }

}
