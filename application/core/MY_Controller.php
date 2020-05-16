<?php 
	class MY_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library(array('form_validation','session'));
			$this->load->helper(array('url','text','form'));
			$this->load->model(array('home_model'));
		}

		public function login(){
			if($_POST){
				// tapung data dari form
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				//mendapatkan data member berdasarkan username
				$member = $this->member_m->get_member_by_username($username);

				//pengecekan passwod dari form dan database
				if(password_verify($password, $member->password)){ 
					$this->session->set_userdata(array(
						'member_id' 		=> $member->id,
						'member_name'		=> $member->member_name,
						'member_logged_in'	=> TRUE // untuk mengecek statusnya login atau tidak

					));
				} else {
					die('LOGIN FAILED'); // Jika login Gagal
				}
			}
		}
	}

	// if ($this->input->post('password') != "" ){
	// 	$data['password'] = $this->input->post('password')
	// }
