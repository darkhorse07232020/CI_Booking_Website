<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
	    if($this->session->userdata('login')) {
		    $this->load->view('admin');
	    } else {
	        redirect(base_url().'login');
	    }
	}
	
	public function getTableData()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('order_info');
        $data = $query->result();
        
        $this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
		return $data;
	}

	public function getCardData()
	{
		$query = $this->db->get('card_info');
        $data = $query->result();
        
        $this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($data));
		return $data;
	}

	public function setCardData()
	{
		$id=$_POST['id'];
		$data = array(
			'age' => $_POST['age'],
			'content'  => $_POST['content'],
			'price'  => $_POST['price'],
			'from_date'  => $_POST['from_date'],
			'to_date'  => $_POST['to_date'],
			'sold_out' => $_POST['sold_out']
		);
		$this->db->where('id', $id);
		$result=$this->db->update('card_info', $data);

		$this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));
		return $result;
	}

	public function accept_order()
	{
		$id=$_POST['id'];
		$this->db->where('id', $id);
		$result=$this->db->update('order_info', array('status' => 1));
		
		$from = $this->config->item('smtp_user');
		$to=$_POST['emailaddress'];
        $subject = 'Dateabus.com';
        $message = 'Tak fordi du valgte at købe en dating rejse hos Dateabus.com. Du har valgt : “'.$_POST['card_id'].'” og du vil modtage en e-mail fra os inden for 3 hverdage med relevant info. Du er altid velkommen til at kontakte os, hvis du har spørgsmål ❤️ Kærlig Hilsen Dateabus.com';

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        $res_mail="";
        if ($this->email->send()) {
            $res_mail= 'Your Email has successfully been sent.';
        } else {
            $res_mail= $this->email->print_debugger();
        }
        
        $data=array('res_data' => $result, 'res_mail' => $res_mail);
        
		$this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($data));
		return $data;
	}
	
	public function reject_order()
	{
		$id=$_POST['id'];
		$this->db->where('id', $id);
		$result=$this->db->update('order_info', array('status' => 2));
		
		$from = $this->config->item('smtp_user');
		$to=$_POST['emailaddress'];
        $subject = 'Dateabus.com';
        $message = 'Med Venlig Hilsen Dateabus.com';

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        $res_mail="";
        if ($this->email->send()) {
            $res_mail= 'Your Email has successfully been sent.';
        } else {
            $res_mail= $this->email->print_debugger();
        }
        
        $data=array('res_data' => $result, 'res_mail' => $res_mail);
        
		$this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($data));
		return $data;
	}
    
    public function change_user()
    {
        $id=$_POST['id'];
        $username=$_POST['username'];
        $email=$_POST['email'];
		$data = array(
			'username' => $username ,
			'email'  => $email
		);
		$this->db->where('id', $id);
		$result=$this->db->update('user_info', $data);
        $this->session->set_userdata(array('username' => $username, 'email' => $email));
        
        $password=$_POST['password'];
        if($password!=""){
            $this->db->where('id', $id);
		    $this->db->update('user_info', array('password'=> md5($password)));
        }
        
		$this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));
		return $result;
    }
    
    public function logout()
    {
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		redirect(base_url());
    }
}