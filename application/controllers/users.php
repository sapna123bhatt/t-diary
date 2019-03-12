<?php
class Users extends CI_Controller{
	public function index()
{
	//$this->load->model('usermodel');
	//$data['users'] = $this->usermodel->getUsers();

	//$this->load->view('users_list',$data);
	$this->load->view('registration');
	//$this->load->view('studentreg');
}

}