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
	
	public function save()
	{
		$success = false;
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
		     $notification_message = $customer_name.',<br><br>
					Thank you for booking a serenade with us!
					<br>
					To complete your transaction. Please pay the total amount of '.$add_total_price.' in our payment gateways.  
					
					<br>
					<br>
					Lovechannel.com Team
		    ';
		
	    $emailmessage = wordwrap($notification_message);			  
		$this->email->from('social@lovechannel.com','Lovechannel.com'); //Replace with Domain name
		$this->email->to($customer_email); 
		$this->email->subject("Lovechannel.com Booking Confirmation");
		$this->email->message($emailmessage);
		$this->email->send();
		
		//email admin
		
		 $notification_message = 'A customer named '. $customer_name.' has booked a serenade!<br><br>
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
					Add Ons: '.$add_ons.'<br>
					Accomplice: '.$accomplice_name.'<br>
					Accomplice Number: '.$accomplice_phone.'<br>
					Payment total: '.$add_total_price.'<br>
					
					
		    ';
		
	    $emailmessage = wordwrap($notification_message);			  
		$this->email->from($customer_email,$customer_name); //Replace with Domain name
		$this->email->to(array('kjabellar@gmail.com','kjcastanos@gmail.com')); 
		$this->email->subject("Lovechannel.com Booking Notification");
		$this->email->message($emailmessage);
		$this->email->send();
			
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array('status'=>$success,'booking_id'=>$booking_id,'total'=>$add_total_price)));
	}
}
