<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author David Adamo Jr.
*/
class Welcome extends CI_Controller {
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->data['dependencies'] = $this->load->view('bargain/merchant/merchant-common/dependencies', '', TRUE);
		$this->data['header'] = $this->load->view('bargain/merchant/merchant-common/header', '', TRUE);
		$this->data['footer'] = $this->load->view('bargain/merchant/merchant-common/footer_includes', '', TRUE);
		$this->data['head'] = $this->load->view('bargain/merchant/merchant-common/head', '', TRUE);
		$this->load->model('abstract_userlogin_model', 'users');
	}

	public function index()
	{
		$this->load->view('bargain/merchant/login', $this->data);
	}

	public function logout()
	{
		$this->users->logout();
		redirect('manager');
	}
}