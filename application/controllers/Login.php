<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
	    if($this->session->userdata('login')) {
	        redirect(base_url().'admin');
	    } else {
	        $this->load->view('login');
	    }
	}
	
	public function logincheck()
	{
		
		$email = $_POST['emailaddress'];
		$password = $_POST['password'];

		$result = $this->db->get_where('user_info', array('email'=>$email, 'password'=>md5($password)));

		$user_id=false;
		if ($result->num_rows() == 1) {
			$user_id = $result->row(0);
		}

		if($user_id) {
			$user_data = array(
				'id' => $user_id->id,
                'username' => $user_id->username,
                'email' => $user_id->email,
                'login' => true
			);

			$this->session->set_userdata($user_data);

			//Set Message
			$this->session->set_flashdata('user_loggedin', 'You are now logged in.');
			redirect(base_url().'admin');
		}
		else{
			$this->session->set_flashdata('login_failed', 'Login is invalid. Try again.');
			redirect(base_url().'login');
		}
	}
}