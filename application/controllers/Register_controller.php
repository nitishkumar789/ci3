<?php
class Register_controller extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Register_model'); ///load model
	}

	public function index()
	{

		if($this->input->post('register'))
		{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');

		$this->Register_model->insert_data($name,$email,$phone,$password);

	}else{
	$this->load->view('registration_view');
	}
	}
}
?>