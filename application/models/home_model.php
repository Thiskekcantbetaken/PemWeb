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
	  public function getAllBarang(){
			$query = "SELECT * FROM barang";
			$result = $this->db->query($query);
			return $result;
	  }
	  public function getBarang($id){
		  $this->db->select('*');
		  $this->db->from('barang');
		  $this->db->where('id_barang',$id);
		  $query = $this->db->get();
		  if($query->num_rows() == 0){
			  return FALSE;
		  }else{
			  return $query->row_array();
		  }
	  }
	  public function addToCart($id_user,$id_barang,$jumlah,$size){
		  $query = "INSERT INTO cart values($id_user,$id_barang,$jumlah,'$size'";
		  $this->db->query($query);
	  }

	  public function view(){
		return $this->db->get('users')->result();
	  }
	  public function upload(){
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '2048';
		$config['remove_space'] = TRUE;
	  
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
		  // Jika berhasil :
		  $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		  return $return;
		}else{
		  // Jika gagal :
		  $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		  return $return;
		}
	  }
	  
	  // Fungsi untuk menyimpan data ke database
	  public function save($upload){
		$data = array(
		  'imagename' => $upload['file']['imagename'],
		  'ukuran_file' => $upload['file']['file_size'],
		  'tipe_file' => $upload['file']['file_type']
		);
		
		$this->db->insert('users', $data);
	  }
	
	}

		
	
?>
