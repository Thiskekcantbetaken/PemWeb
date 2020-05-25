<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}

	public function loggedIn() {
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		
		$this->load->view('page/mainpage',$data);
	}

	public function index()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		
		$this->load->view('page/login.php',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
	
	public function login()
	{
	
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);

		if($this->home_model->isLoggedIn()) {
			redirect('home/loggedIn');
			}
			
		  else {
			$username = strtolower($this->input->post("login_username", TRUE));
			$password = $this->input->post("login_password", TRUE);
			$flag = $this->home_model->checkUser($username, $password);
			
			if($flag != FALSE) {
			  foreach($flag as $i) {
				$session_data = [
				  'user_id' => $i->id,
				  'username' => $i->username,
				  'privilege_level' => $i->privilege_level
				];
	  
				$this->session->set_userdata($session_data);
	  
				if($this->session->userdata('privilege_level') == 1) {
				  redirect('admin');
				}
				else {
				  redirect('home/loggedIn');
				}
			  }
			}
			else {
			  $this->session->set_flashdata('message', 'Your email or password is incorrect!');
			  $this->load->view('page/login.php',$data);
			}
		  }
	} 

	public function registerValidations()
  {
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required', array(
      'required' => "You must provide a first name!"
    ));

    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required', array(
      'required' => "You must provide a last name!"
    ));

    $this->form_validation->set_rules('username', 'Username', 'trim|required', array(
      'required' => "You must provide a username!"
    ));

    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', array(
      'required' => "You must provide an email!",
      'valid_email' => "Your email is not a valid email!"
    ));

    $this->form_validation->set_rules('password', 'Password', 'trim|required', array(
      'required' => "You must provide a password!"
    ));

    $this->form_validation->set_rules('passwordconf', 'Password Confirm', 'trim|required|matches[password]', array(
      'required' => "You must fill this column!",
      'matches' => "Your passwords do not match!"
    ));

    $this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required', array(
      'required' => "You must provide a birthdate!"
    ));

    $this->form_validation->set_rules('gender', 'Gender', 'trim|required', array(
      'required' => "You must provide a gender!"
    ));
	}
	
	public function showRegister()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$this->load->view('page/register', $data);
	}

	public function register()
	{
	
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);

		$this->registerValidations();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('page/register', $data);
		  return;
		}
	
		$registerData = [
		  'id' => '',
		  'first_name' => $this->input->post('first_name', TRUE),
		  'last_name' => $this->input->post('last_name', TRUE),
		  'username' => $this->input->post('username', TRUE),
		  'email' => $this->input->post('email', TRUE),
		  'password' => password_hash($this->input->post('password', TRUE), PASSWORD_BCRYPT),
		  'birthdate' => $this->input->post('birthdate', TRUE),
		  'gender' => $this->input->post('gender', TRUE),
		  'privilege_level' => 0
		];
	
		$this->home_model->register($registerData);
		redirect('home');
	}



}

?>
