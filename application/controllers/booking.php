<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
	    $this->load->library('session');
	    $this->load->library('email');
	    $this->load->model('bookingdata');
	    $this->load->model('services');
		$this->load->model('serviceaddons');
	    $this->load->database();
		
	}
	
	public function index()
	{
		$data['aons'] = $this->serviceaddons->getall(); 
		$this->load->view('booking/index',$data);
	}
	
	public function package()
	{
		$data['package'] = $this->uri->segment(3);
		$data['aons'] = $this->serviceaddons->getall(); 
		$this->load->view('booking/index',$data);
	}
	
	public function save()
	{
		$success = false;
		$addon_list = array();
		$booking_id = "";
		if ($this->session->userdata('logged_in')){
			$service_id = $this->db->escape_str($this->input->post('service_id'));
			$online_serenade_type = $this->db->escape_str($this->input->post('online_serenade_type'));
			$add_ons = $this->db->escape_str($this->input->post('add_ons'));

			$add_total_price  = 0;
			if (!empty($add_ons )){
				foreach($add_ons as $addon){
					$query = $this->serviceaddons->getservice_add_onsByAttribute('add_on_id',$addon);
					
					if ($query->num_rows() > 0){
						foreach ($query->result() as $row){
							$add_total_price = $row->price + $add_total_price;
							$addon_list[] = $row->item_name;
						}
					}
				}
				
				$add_ons = implode(',',$add_ons);
			}else {
				$add_ons = "";
			}
			
			$query = $this->services->getservicesByAttribute('service_id',$service_id);
			$total = $query->row()->price;
			$add_total_price = $total + $add_total_price ;
			
			$event_date = $this->db->escape_str($this->input->post('event_date'));
			$event_time = $this->db->escape_str($this->input->post('event_time'));
			$customer_name = $this->db->escape_str($this->input->post('customer_name'));
			$customer_phone = $this->db->escape_str($this->input->post('customer_phone'));
			
			$customer_email = $this->db->escape_str($this->input->post('customer_email'));
			$receiver_name = $this->db->escape_str($this->input->post('receiver_name'));
			$receiver_email = $this->db->escape_str($this->input->post('receiver_email'));
			$receiver_messenger = $this->db->escape_str($this->input->post('receiver_messenger'));
			
			$receiver_messenger_username = $this->db->escape_str($this->input->post('receiver_messenger_username'));
			$country_name = $this->db->escape_str($this->input->post('country_name'));
			$address = $this->db->escape_str($this->input->post('address'));
			$songs = $this->db->escape_str($this->input->post('songs'));
			$accomplice_name = $this->db->escape_str($this->input->post('accomplice_name'));
			$accomplice_phone = $this->db->escape_str($this->input->post('accomplice_phone'));
			$occasion = $this->db->escape_str($this->input->post('occasion'));
			$special_message = $this->db->escape_str($this->input->post('special_message'));
			
			
			$booking_data = array(
				'service_id' => $service_id,
				'online_serenade_type' => $online_serenade_type,
				'add_ons' => $add_ons,
				'event_date' => $event_date,
				'event_time' => $event_time,
				'customer_name' => $customer_name,
				'customer_phone' => $customer_phone,
				
				'customer_email' => $customer_email,
				'receiver_name' => $receiver_name,
				'receiver_email' => $receiver_email,
				'receiver_messenger' => $receiver_messenger,
				
				'receiver_messenger_username' => $receiver_messenger_username,
				'country_name' => $country_name,
				'address' => $address,
				'songs' => $songs,
				'accomplice_name' => $accomplice_name,
				'accomplice_phone' => $accomplice_phone,
				'occasion' => $occasion,
				'special_message' => $special_message,
				'total' => $add_total_price
			);
			
			$booking_id = $this->bookingdata->update(0,$booking_data);
			$success = true;
			
			$config['wordwrap'] = TRUE;
		    $config['mailtype'] = "html";
		    $this->email->initialize($config);
		// email user
		     $notification_message = '
					You have successfully placed a booking with Lovechannels.com on '.$event_date.' for '.$receiver_name.'. !
					<br>
					Please pay a total of PHP'.$add_total_price.' within 10 hours.<br><br>
					HOW TO PAY :<br>
					We will confirm your booking once you submit this form via email or sms. We have three options for you to deposit your payment. <br><br>
					Paypal : bizmaida@gmail.com<br><br>
					Bank Deposit  <br>
					Bank: Banco de Oro - Legazpi Streeet Davao City, Philippines<br>
					Bank Account: jonathan roy/maida barrientos <br>
					Account No.: 194 007669 0 <br>
					Swift code: BNORPHMM (for payment fr abroad)<br>
					E-mail deposit slip to social@lovechannel.com<br><br>
					Coins.ph<br>
					Wallet : 36TCv5TrNtUYGJdzZhAZdkiaqAojErPJcY
					
		    ';
		     
		     $notification_message .= '<br><br>
					Booking Details
					<br>
					Booking Id: '.$booking_id.'<br>
					Customer Number: '.$customer_phone.'<br>
					Customer Email: '.$customer_email.'<br>
					Serenade Type: '.$online_serenade_type.'<br>
					Event Date: '.$event_date.'<br>
					Occassion: '.$occasion.'<br>
					Recepient Name: '.$receiver_name.'<br>
					Recepient Email: '.$receiver_email.'<br>
					Recepient Messenger: '.$receiver_messenger.'<br>
					Recepient Messenger Username: '.$receiver_messenger_username.'<br>
					Country: '.$country_name.'<br>
					Address: '.$address.'<br>
					Songs: '.$songs.'<br>
					Add Ons: '.implode(',',$addon_list).'<br>
					Accomplice: '.$accomplice_name.'<br>
					Accomplice Number: '.$accomplice_phone.'<br>
					Payment total: '.$add_total_price.'<br>
					<br>
					<br>
					Lovechannel.com Team
		    ';
		     
		     
		$data = array('date' => date("M d, Y"),
			'message' => preg_replace('/\s+/', ' ',$notification_message),
			'name' => $customer_name
		);
		
		$msg = $this->load->view('booking/email_booking_template',$data,true);
		$emailmessage = wordwrap($msg);			  
		$this->email->from('social@lovechannel.com','Lovechannel.com'); //Replace with Domain name
		$this->email->to($customer_email); 
		$this->email->subject("Lovechannel.com Booking Confirmation");
		$this->email->message($emailmessage);
		$this->email->send();
		
		//email admin
		
		 $notification_message = 'Someone has successfully placed a booking with Lovechannels.com!<br><br>
					Booking Details
					<br>
					Booking Id: '.$booking_id.'<br>
					Customer Name: '.$customer_name.'<br>
					Customer Number: '.$customer_phone.'<br>
					Customer Email: '.$customer_email.'<br>
					Serenade Type: '.$online_serenade_type.'<br>
					Event Date: '.$event_date.'<br>
					Occassion: '.$occasion.'<br>
					Recepient Name: '.$receiver_name.'<br>
					Recepient Email: '.$receiver_email.'<br>
					Recepient Messenger: '.$receiver_messenger.'<br>
					Recepient Messenger Username: '.$receiver_messenger_username.'<br>
					Country: '.$country_name.'<br>
					Address: '.$address.'<br>
					Songs: '.stripcslashes($songs).'<br>
					Add Ons: '.implode(',',$addon_list).'<br>
					Accomplice: '.$accomplice_name.'<br>
					Accomplice Number: '.$accomplice_phone.'<br>
					Payment total: '.$add_total_price.'<br>
					
					
		    ';
		
	    $emailmessage = wordwrap($notification_message);			  
		$this->email->from($customer_email,$customer_name); //Replace with Domain name
		$this->email->to(array('kjabellar@gmail.com','maidabarrientos@gmail.com','catherinesicuya@gmail.com','lucille2911@gmail.com')); 
		$this->email->subject("Lovechannel.com Booking Notification");
		$this->email->message($emailmessage);
		$this->email->send();
			
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array('status'=>$success,'booking_id'=>$booking_id,'total'=>$add_total_price)));
	}
}
