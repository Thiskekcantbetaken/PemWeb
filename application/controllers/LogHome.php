<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LogHome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$data['data'] = $this->home_model->getAllBarang();
		$this->load->view('page/loginpage.php',$data);
	}
	
	public function showLogin()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$this->load->view('page/login', $data);
	}
	
	public function showMyOrder(){
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('template/account.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$tmp = $this->home_model->getMyHistory($_SESSION['user_id']);
		if($tmp === FALSE){
			$data['data'] = NULL;
		}else{
			$data['data'] = $tmp;
		}
		$this->load->view('page/my_orders',$data);
	}
	public function myAccount()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);

		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		if(isset($_SESSION['user_id'])){
			$id = $_SESSION['user_id'];
			$data['data'] = $this->home_model->getUserId($id);
			$data['sidebar'] = $this->load->view('template/account.php', $data,TRUE);
			$this->load->view('page/my_account.php',$data);
		}else{
			$this->showLogin();
		}
	}

	public function showShop()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$data['data'] = $this->home_model->getAllBarang();
		$this->load->view('page/ShopLog.php',$data);
	}
	public function showCart()
	{
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		if(isset($_SESSION['user_id'])){
			$tmp = $this->home_model->getCart($_SESSION['user_id']);
			if($tmp == FALSE){
				$data['data'] = NULL;
				$data['count'] = NULL;
				$data['grandTotal'] = NULL;
			}else{
				$data['data'] = $tmp;
				$data['count'] = $tmp->num_rows();$tmp2 = 0;
				foreach($tmp->result() as $loop){
					$tmp2 = $tmp2 + $loop->total;
				}
				$data['grandTotal'] = $tmp2;
			}
			$this->load->view('page/cart.php',$data);
		}else{
			$this->showLogin();
		}
		
	}
	public function showDetails($id){
		$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
		$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
		$data['sidebar'] = $this->load->view('include/sidebar.php', NULL, TRUE);
		$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		$data['data'] = $this->home_model->getBarang($id);
		$this->load->view('page/details.php',$data);
	}
	public function addToCart($id){
		$size = $this->input->post('size');
		$jumlah = $this->input->post('jumlah');
		$data = $this->home_model->getStokBarang($id);
		if($data === FALSE){
			$this->index();
		}else{
			if(isset($_SESSION['user_id'])){
				if($data >= $jumlah){
					$this->home_model->addToCart($_SESSION['user_id'],$id,$jumlah,$size);
					$this->index();
				}else{
					echo "<script>alert('Jumlah pesanan melebih stok!')</script>";
					$this->index();
				}
			}else{
				$this->showLogin();
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
	
	public function search(){
		if(isset($_POST['user_query'])){
			$search = $_POST['user_query'];
			$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
			$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
			$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
			$tmp = $this->home_model->getBarangSearched($search);
			if($tmp == FALSE){
				$data['data'] = NULL;
			}else{
				$data['data'] = $tmp;
			}
			$this->load->view('page/loginpage',$data);

		}else{
			$this->index();
		}
	}
	public function filter(){
		if(isset($_POST['minHarga'])){
			if(isset($_POST['maxHarga'])){
				$minHarga = $_POST['minHarga'];
				$maxHarga = $_POST['maxHarga'];
				$data['style'] = $this->load->view('include/css.php', NULL, TRUE);
				$data['script'] = $this->load->view('include/javascript.php', NULL, TRUE);
				$data['header'] = $this->load->view('template/loginnav.php', NULL, TRUE);
				$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
				$tmp = $this->home_model->getFilterResult($minHarga,$maxHarga);
				if($tmp == FALSE){
					$data['data'] = NULL;
				} else {
					$data['data'] = $tmp;
				}
				$this->load->view('page/mainpage',$data);
			}
		}else{
			$this->index();
		}
	}
	public function updateProfile(){
		$data =[
			'id' => $_SESSION['user_id'],
			'firstName' => $this->input->post('firstName',TRUE),
			'lastName' => $this->input->post('lastName',TRUE),
			'username' => $this->input->post('username',TRUE),
			'email' => $this->input->post('Email',TRUE),
			'birthDate' => $this->input->post('birthDate',TRUE),
		];
		$config['upload_path'] = './assets/gambar';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload',$config);
		if($this->upload->do_upload('profile')){
			$data['profile'] = $this->upload->data("file_name");
		}else{
			$data['profile'] = "logo.jpg";
		}
		$result = $this->home_model->updateMyProfile($data);
		if($result === FALSE){
			echo "<script>alert('Error updating!')</script>";
			$this->myAccount();
		}else{
			echo "<script>alert('Success!')</script>";
			$this->myAccount();
		}
	}
	public function checkout(){
		$result = $this->home_model->checkoutCart($_SESSION['user_id']);
		if($result === FALSE){
			echo "<script>alert('Error checkout!')</script>";
			$this->showCart();
		}else{
			echo "<script>alert('Success!')</script>";
			$this->index();
		}
	} 
	public function confirmPay($id){
		$result = $this->home_model->confirmTransaction($id);
		if($result === FALSE){
			echo "<script>alert('Error paying!')</script>";
			$this->showMyOrder();
		}else{
			echo "<script>alert('Success!')</script>";
			$this->index();
		}
	}
}
?>
