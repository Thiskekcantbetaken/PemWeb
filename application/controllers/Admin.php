<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
    $this->load->model('home_model');
    $this->load->model('Admin_model');
		$this->load->helper(array('form','url'));
    $this->load->library('form_validation');
    $this->load->library('grocery_CRUD');
	}

  public function index() {
    redirect('admin/grocery');
  }

  public function grocery() {
    $crud = new grocery_CRUD();

    $crud->set_table('barang');
    $crud->set_subject('Barang');
    $crud->fields('nama_barang', 'harga_barang', 'stok', 'jumlah_terjual', 'foto', 'deskripsi');
    $crud->set_field_upload('foto','assets/uploads/files');
    $crud->display_as('id_barang', 'ID');
    $crud->display_as('nama_barang', 'Nama');
    $crud->display_as('harga_barang', 'Harga');
    $crud->display_as('jumlah_terjual', 'Terjual');
    $crud->set_primary_key('id_barang');
    $output = $crud->render(); 
    $this->load->view('page/admin', $output);
  }

  public function users() {
    $crud = new grocery_CRUD();
    $crud->set_table('users')
		->columns('first_name', 'last_name', 'username', 'country', 'city', 'contact', 'address', 'birthdate', 'gender');
    $crud->fields('first_name', 'last_name', 'country', 'city', 'contact', 'address', 'birthdate', 'gender');
    $crud->display_as('first_name', 'First Name');
    $crud->display_as('last_name', 'Last Name');
	//$crud->set_theme('datatables');
    $output = $crud->render(); 
    $this->load->view('page/admin', $output);
  }

}
