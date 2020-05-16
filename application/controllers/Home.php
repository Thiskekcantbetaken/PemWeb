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
	
	public function login()
	{
	
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		
		$this->load->view('page/mainpage.php');
	}

	public function register()
	{
	
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);

		$this->load->view('page/register.php',$data);
	}

}

?>
