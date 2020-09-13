<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index()
	{
		$url = 'https://checkout-api.reepay.com/v1/session/charge';
		$date = date('YmdHis');
		//create a new cURL resource
		$ch = curl_init($url);
		//setup request to send json via POST
		$data = '{
			"order": {
				"handle":"order-'.$date.'",
				"amount":'.($_POST['amount']*100).',
				"currency":"USD",
				"customer": {
					"email":"'.$_POST['email'].'",
					"handle":"order-'.$date.'",
					"first_name":"'.$_POST['firstname'].'",
					"last_name":"'.$_POST['lastname'].'"
				}
			},
			"accept_url":"'.base_url().'",
			"cancel_url":"'.base_url().'"
		}';
		$payload = $data;

		//attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

		//set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_USERPWD, "priv_426b043a1703da764fd9430ce3c98371");

		//return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//execute the POST request
		$result = curl_exec($ch);
		//close cURL resource
        $id=json_decode($result, true)['id'];
		curl_close($ch);
		
		echo $id;
	}
	
	public function refund_order()
	{
// 		$url = 'https://api.reepay.com/v1/refund';
// 		//create a new cURL resource
// 		$ch = curl_init($url);
// 		//setup request to send json via POST
// 		$data = '{
// 			"order": {
// 				"handle":"'.$order.'",
// 				"amount":'.($_POST['amount']*100).',
// 				"currency":"USD",
// 				"customer": {
// 					"email":"'.$_POST['email'].'",
// 					"handle":"order-'.$date.'",
// 					"first_name":"'.$_POST['firstname'].'",
// 					"last_name":"'.$_POST['lastname'].'"
// 				}
// 			},
// 			"accept_url":"'.base_url().'",
// 			"cancel_url":"'.base_url().'"
// 		}';
// 		$payload = $data;

// 		//attach encoded JSON string to the POST fields
// 		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// 		//set the content type to application/json
// 		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
// 		curl_setopt($ch, CURLOPT_USERPWD, "priv_426b043a1703da764fd9430ce3c98371");

// 		//return response instead of outputting
// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// 		//execute the POST request
// 		$result = curl_exec($ch);
// 		//close cURL resource
//         $id=json_decode($result, true)['id'];
// 		curl_close($ch);
		
// 		echo $id;
	}
}
