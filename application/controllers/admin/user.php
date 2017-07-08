<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class User extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->data['dependencies'] = $this->load->view('general/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/admin/header', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/admin/head', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/admin/footer_includes', '', TRUE);

		$this->load->model('users_model', 'users');
	}

	public function index()
	{
		
	}

	public function login()
	{
			

			$username=$_GET['username'];
		
			$password=$_GET['password'];

		$data = $this->users->check_admin($username,$password);
		
		if ($data){

			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('name', $this->data['name']);
			
			redirect('admin/dashboard');
		} else {
			echo '0';
			// $this->load->view('welcome',$this->data);
			$this->session->set_flashdata('successmsg', "Invald Username Password");
			redirect('admin');

			// redirect('welcome');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('admin');
	}
	
}