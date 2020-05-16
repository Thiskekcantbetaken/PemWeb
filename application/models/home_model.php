<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class home_model extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			//$this->load->database();
		}
		
		public function get_member_by_username($username){
			return $this->db->get_where('member', array('username' => $username))->row();
		}

	}

?>
