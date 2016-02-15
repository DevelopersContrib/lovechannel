<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
     function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	    $this->load->library('email');
	    $this->load->library('datatables');
	    $this->load->model('users');
	    $this->load->model('bookingdata');
	    $this->load->database();
	}
	
	public function index()
	{
		if ($this->session->userdata('logged_in')){	
		  $data['active'] = "bookings";
		  $this->load->view('admin/index',$data);
		}else {
		  redirect(base_url().'admin/login');
		}
	}
	
	public function bookingtable(){
			$this->datatables
				->select('booking_id, customer_name, customer_email, event_date, services.service_name, musicians.m_name,total,`status`, booking_id as id2')
				->from('booking')
				->join('services','services.service_id = booking.service_id','left')
				->join('musicians','musicians.m_id = booking.musician_id','left');
				
	   echo $this->datatables->generate();
	}
	
	public function showbookingdetails(){
		$booking_id =  $this->db->escape_str($this->input->post('booking_id'));
		$sql ="SELECT booking.*, customer_name, customer_email, event_date, services.service_name, musicians.m_name
FROM booking LEFT JOIN services ON (services.service_id = booking.service_id)
LEFT JOIN musicians ON (musicians.m_id = booking.musician_id) WHERE booking_id = '$booking_id'";
		$data['query'] = $this->db->query($sql);
		$data['sql'] = $sql;
		$html = $this->load->view('admin/booking_details',$data,true);
		$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('html'=>$html)));
	}
	
	public function logincheck(){
		$username =  $this->db->escape_str($this->input->post('username'));
		$password =  $this->db->escape_str($this->input->post('password'));
		$query = $this->db->query("SELECT * FROM admin WHERE username = '$username' AND `password` = MD5('$password')");
		$status = false;
		$message = "";
		$url = "/admin";
		if ($query->num_rows() > 0){
		  	$status = true;
		    $newdata = array(
                   'username'  => $query->row()->username,
                   'userid'     =>$query->row()->admin_id,
                   'logged_in' => TRUE
                  );

             $this->session->set_userdata($newdata);
		}else {
			$message = "Invalid admin login";
		}
		
		$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('status'=>$status,'message'=>$message,'url'=>$url)));
	}
	
	public function showdelete(){
		$booking_id =  $this->db->escape_str($this->input->post('booking_id'));
		$data['booking_id'] = $booking_id;
		$html = $this->load->view('admin/booking_delete_confirm',$data,true);
		$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('html'=>$html)));
	}
	
	public function deletebooking(){
		$booking_id =  $this->db->escape_str($this->input->post('booking_id'));
		$this->bookingdata->delete($booking_id);
	}
	
	public function showassign(){
		$booking_id =  $this->db->escape_str($this->input->post('booking_id'));
		$data['booking_id'] = $booking_id;
		$html = $this->load->view('admin/booking_musician',$data,true);
		$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('html'=>$html)));
	}
	
	
	public function logout(){
		$array_items = array('username' => '', 'email' => '', 'userid' => '', 'logged_in' => false,'googleauth_token'=>'','googleauth_accesstoken'=>'','gauth_afterauth'=>'');
	    $this->session->unset_userdata($array_items);
	    $this->session->sess_destroy();
	    redirect(base_url().'admin/login');
        exit; 	
	}
	
	public function login()
	{
	  $data = array();
	  $this->load->view('admin/login',$data);
	}
	
	
	
	
    
}
