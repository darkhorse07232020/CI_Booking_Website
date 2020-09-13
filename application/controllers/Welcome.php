<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome');
	}

	public function cus_order()
	{
		$data = array(
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'emailaddress' => $_POST['email'],
			'payamount' => $_POST['amount'],
			'card_id' => $_POST['card_id'],
			'invoice' => $_POST['invoice']
		);
		$result=$this->db->insert('order_info', $data);
		
		$from = $this->config->item('smtp_user');
		$to =$_POST['email'];
        $subject = 'Ordered travel';
        $message = 'Tak fordi du valgte Dateabus.com som genvejen til kærligheden. Nu er det endeligt slut med at swipe sig igennem tusinder, og uden held. Hos os får du professionel sparring, dating, hygge, sjov og ballade. Vi mødes d. Date Kl. Time. Ved hovedbanegården udfor DGI byen i KBH. Rejsen forventes af varer i 3-6 timer, og du/i har altid mulighed for at tage hjem tidligere, hvis det passer jer. Kærlighedsrejsen vil slutte samme sted ved DGI byen, men afsætning undervejs, kan være en mulighed efter aftale.” Vi glæder os til at se jer alle sammen! Kærlig Hilsen Dateabus.com';

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
        
		$this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($result));
		return $result;
		
	}

	public function trans_data()
	{
		$org_str=$_GET['org_str'];
		$lang=$_GET['lang'];
		$source = 'auto';
		$target = $lang;

		$trans = new GoogleTranslate();
		$result = $trans->translate($source, $target, $org_str);

		echo $result;
	}
}
