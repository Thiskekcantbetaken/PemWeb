<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class home_model extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
		}	

		public function isLoggedIn() 
 		 {
   		 return $this->session->userdata('user_id');
		 }

		 public function isAdmin() 
		 {
		   return $this->session->userdata('privilege_level');
		 }

		 public function checkUser($username, $password) 
 		 {
			$this->db->select("*");
			$this->db->from("users");
			$this->db->where("username", $username);
			$this->db->limit(1);
			$query = $this->db->get();
			$result = $query->row_array();

			if($query->num_rows() === 0 || !password_verify($password, $result['password'])) {
			return FALSE;
			}
			else {
			return $query->result();
			}
		}
<<<<<<< HEAD

		public function register($registerData) 
		{
		  $this->db->insert('users', $registerData);
	  
		  if($this->db->affected_rows() != 1) {
				$this->session->set_flashdata('message', 'You failed to register!');
		  }
		  else {
				$this->session->set_flashdata('message', 'Successfully registered!');
		  }
	  
		  redirect('home');
		}

		public function getUserData($username) 
		{
		  $this->db->select('*');
		  $this->db->from('users');
		  $this->db->where('username', $username);
		  $this->db->limit(1);
		  $query = $this->db->get();
	  
		  if($query->num_rows() === 0) {
			return FALSE;
		  }
		  else {
			return $query->row_array();
		  }
		}
	  
=======
		
		public function get_member_by_username($username){
			return $this->db->get_where('member', array('username' => $username))->row();
		}

>>>>>>> 701971ae7a04e7e46bd165cdbb5d97a80fdf4455
	}

	
?>
