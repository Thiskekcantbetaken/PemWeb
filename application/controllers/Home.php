<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->helper(array('form','url'));
	}

	public function index()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);

		$this->load->view('page/login.php',$data);
	}
	
	public function loginshow()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);

		$this->load->view('page/login.php',$data);
	}
	
	public function login()
	{
	
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer.php', NULL, TRUE);
		
		$this->load->view('page/mainpage.php', $data);
	}

	public function registershow()
	{
	
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);

		$this->load->view('page/register.php',$data);
	}

}

?>
