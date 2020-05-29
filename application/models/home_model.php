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
		public function getUserId($id){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id',$id);
			$query = $this->db->get();
			return $query;
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
		  $query = "INSERT INTO cart values($id_user,$id_barang,$jumlah,'$size')";
		  $this->db->query($query);
	  }
	  public function getCart($id){
		  $query = "SELECT a.nama_barang , a.harga_barang , b.jumlah,b.size,b.jumlah * a.harga_barang as total
		  FROM barang a, cart b
		  WHERE a.id_barang = b.id_barang
		  AND b.id_user = $id";
		  $result = $this->db->query($query);
		  if($result->num_rows() == 0){
			  return FALSE;
		  }else{
			  return $result;
		  }
	  }
	  public function getBarangSearched($search){
		  $this->db->select('*');
		  $this->db->from('barang');
		  $this->db->like('nama_barang',$search);
		  $query = $this->db->get();
		  if($query->num_rows() == 0){
				return FALSE;
		  }else{
			  return $query;
		  }
	  }
	  public function getFilterResult($minHarga,$maxHarga){
		  $query ="SELECT * FROM barang WHERE harga_barang >= $minHarga AND harga_barang <= $maxHarga";
		  $result = $this->db->query($query);
		  if($result->num_rows() == 0){
			  return FALSE;
		  }else{
			return $result;
		  }
	  }
	  public function updateMyProfile($data){
		$date=date("Y-m-d",strtotime($data['birthDate']));
		$this->db->set('first_name',$data['firstName']);
		$this->db->set('last_name',$data['lastName']);
		$this->db->set('username',$data['username']);
		$this->db->set('email',$data['email']);
		$this->db->set('birthdate',$date);
		$this->db->set('image',$data['profile']);
		$this->db->where('id',$data['id']);
		$this->db->update('users');
		if($this->db->affected_rows() != 1){
			return FALSE;
		}
	  }
	  public function checkoutCart($id){
		$query = "SELECT COUNT(*) as ID FROM transaksi";
		$stmt = $this->db->query($query);
		$row = $stmt->row();
		$idTransaksi;
		if(isset($row)){
			$idTransaksi = $row->ID;
		}
		$query = "SELECT id_barang,jumlah,size FROM cart WHERE id_user = $id";
		$stmt = $this->db->query($query);
		$this->db->trans_start();
		$this->db->query("INSERT INTO transaksi(waktu,id_transaksi,id_user,status) values(NOW(),$idTransaksi,$id,0)");
		foreach($stmt->result() as $loop){
			$this->db->query("INSERT INTO transaksi_detail VALUES($loop->id_barang,$idTransaksi,$loop->jumlah,'$loop->size')");
		}
		$this->db->query("DELETE FROM cart WHERE id_user = $id");
		$this->db->trans_complete();
		if($this->db->trans_status() === FALSE){
			return FALSE;
		}
	  }
	  public function getMyHistory($id){
		  $query ="SELECT a.id_transaksi as id , a.waktu as waktu,SUM(c.harga_barang) as total , SUM(b.jumlah) as jumlah , a.status as status
		  FROM transaksi a, transaksi_detail b, barang c
		  WHERE a.id_transaksi = b.id_transaksi
		  AND b.id_barang = c.id_barang
		  AND a.id_user = '$id';";
		  $result = $this->db->query($query);
		  if($result->num_rows() == 0){
			  return FALSE;
		  }else{
			  return $result;
		  }
	  }
	  public function confirmTransaction($id){
		  $this->db->trans_start();
		  $query = "UPDATE transaksi SET status = 1 WHERE id_transaksi = $id";
		  $this->db->query($query);
		  $this->db->trans_complete();
		  if($this->db->trans_status() === FALSE){
			  return FALSE;
		  }
	  }
	}

		
	
?>
