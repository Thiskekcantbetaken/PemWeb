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
		$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$data['data'] = $this->home_model->getAllBarang();

		$this->load->view('page/loginpage',$data);
	}

	public function index()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/navbar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$data['data'] = $this->home_model->getAllBarang();
		$this->load->view('page/mainpage.php',$data);
	}
	
	public function showLogin()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/navbar.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$this->load->view('page/login', $data);
	}
	public function registerShow()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/navbar.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		
		$this->load->view('page/customer_register.php',$data);
	}
	public function myAccount()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/navbar.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('template/account.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		
		$this->load->view('page/my_account.php',$data);
	}
	public function showShop()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/navbar.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		
		$this->load->view('page/shop.php',$data);
	}
	public function showCart()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/navbar.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		
		$this->load->view('page/cart.php',$data);
	}
	public function showDetails($id){
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['data'] = $this->home_model->getBarang($id);
		$this->load->view('page/details.php',$data);
	}
	public function addToCart($id){
		$size = $this->input->post('size');
		$jumlah = $this->input->post('jumlah');
		if(isset($_SESSION['user_id'])){
			$this->home_model->addToCart($_SESSION['user_id'],$id,$jumlah,$size);
			$this->index();
		}else{
			$this->showLogin();
		}
		
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
		$data['header'] = $this->load->view('template/navbar.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);

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

    $this->form_validation->set_rules('country', 'Country', 'trim|required', array(
       'required' => "You must provide a country!"
    ));

    $this->form_validation->set_rules('city', 'City', 'trim|required', array(
        'required' => "You must provide a city!"
    ));

    $this->form_validation->set_rules('contact', 'Contact', 'trim|required', array(
       'required' => "You must provide a contact"
    ));

    $this->form_validation->set_rules('address', 'Address', 'trim|required', array(
      'required' => "You must provide a address!"
    ));

    $this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required', array(
      'required' => "You must provide a birthdate!"
    ));
    $this->form_validation->set_rules('gender', 'Gender', 'trim|required', array(
      'required' => "You must provide a gender!"
    ));
	}
	public function register()
	{

		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/navbar.php', NULL, TRUE);

		$this->registerValidations();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('page/customer_register', $data);
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
		  'country' =>$this->input->post('country',TRUE), 
		  'city' =>$this->input->post('city',TRUE), 
		  'country' =>$this->input->post('country',TRUE), 
		  'address' => $this->input->post('address', TRUE),
		  'gender' => $this->input->post('gender', TRUE),
		  'image' =>$this->input->post('image',TRUE), 
		  'privilege_level' => 0
		];

		$this->home_model->register($registerData);
		redirect('home');
	}
}
?>
