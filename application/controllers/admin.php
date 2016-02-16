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
	    $this->load->model('musiciandata');
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
		$data['query'] = $this->musiciandata->getAll();
		$data['m_id'] = $this->bookingdata->GetBookingInfoById('musician_id',$booking_id);
		$html = $this->load->view('admin/booking_musician',$data,true);
		$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('html'=>$html)));
	}
	
	public function assignmusician(){
		$m_id =  $this->db->escape_str($this->input->post('m_id'));
		$booking_id =  $this->db->escape_str($this->input->post('booking_id'));
		$b_array = array('musician_id'=>$m_id);
		$this->bookingdata->update($booking_id,$b_array);
	}
	
	public function changestatus(){
		$booking_id =  $this->db->escape_str($this->input->post('booking_id'));
		$status =  $this->db->escape_str($this->input->post('status'));
		$b_array = array('status'=>$status);
		$this->bookingdata->update($booking_id,$b_array);
		
	}
	
	public function musician()
	{
		if ($this->session->userdata('logged_in')){	
		  $data['active'] = "musician";
		  $this->load->view('admin/musician',$data);
		}else {
		  redirect(base_url().'admin/login');
		}
	}
	
	public function musiciantable(){
		$this->datatables
				->select('m_id, m_name, m_alias, email, facebook_profile, is_vocalist')
				->from('musicians');
				
	   echo $this->datatables->generate();
	}
	
	public function showmusicianform(){
		$m_id =  $this->db->escape_str($this->input->post('m_id'));
		$query = $this->musiciandata->getByAttribute('m_id',$m_id);
		
		if ($query->num_rows() > 0){
		  $data['m_id'] = $m_id;
		  $data['m_name'] = $query->row()->m_name;
		  $data['m_alias'] = $query->row()->m_alias;
		  $data['instrument'] = $query->row()->instrument;
		  $data['is_vocalist'] = $query->row()->is_vocalist;
		  $data['city'] = $query->row()->city;
		  $data['phone_number'] = $query->row()->phone_number;
		  $data['email'] = $query->row()->email;
		  $data['facebook_profile'] = $query->row()->facebook_profile;
		  $data['video_url'] = $query->row()->video_url; 
		  $data['photo'] = $query->row()->image; 	
		}else {
		  $data['m_id'] = $m_id;
		  $data['m_name'] = "";
		  $data['m_alias'] = "";
		  $data['instrument'] = "";
		  $data['is_vocalist'] = "";
		  $data['city'] = "";
		  $data['phone_number'] = "";
		  $data['email'] = "";
		  $data['facebook_profile'] = "";
		  $data['video_url'] = "";  	
		  $data['photo'] = "";
		}
		
		$html = $this->load->view('admin/musician_form',$data,true);
		$this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('html'=>$html)));
	}
	
	
	public function savemusician(){
		 $m_id = $this->db->escape_str($this->input->post('m_id'));
		 $m_name = $this->db->escape_str($this->input->post('m_name'));
		 $m_alias = $this->db->escape_str($this->input->post('m_alias'));
		 $m_instrument = $this->db->escape_str($this->input->post('m_instrument'));
		 $is_vocalist = $this->db->escape_str($this->input->post('is_vocalist'));
		 $m_city = $this->db->escape_str($this->input->post('m_city'));
		 $m_phone = $this->db->escape_str($this->input->post('m_phone'));
		 $m_email = $this->db->escape_str($this->input->post('m_email'));
		 $m_facebook = $this->db->escape_str($this->input->post('m_facebook'));
		 $m_video = $this->db->escape_str($this->input->post('m_video'));
		 $m_photo = $this->db->escape_str($this->input->post('m_photo'));
		 
		 $m_array = array('m_name'=>$m_name,'m_alias'=>$m_alias,'instrument'=>$m_instrument,'is_vocalist'=>$is_vocalist,'city'=>$m_city,
		 'phone_number'=>$m_phone,'email'=>$m_email,'facebook_profile'=>$m_facebook,'video_url'=>$m_video,'image'=>$m_photo);
		 $this->musiciandata->update($m_id,$m_array);
		 $this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('status'=>true)));
	}
	
	
	public function showdeletem(){
		 $m_id = $this->db->escape_str($this->input->post('m_id'));
		 $data['m_id'] = $m_id;
		 $html = $this->load->view('admin/musician_delete_confirm',$data,true);
		 $this->output
				->set_content_type('application/json')
				->set_output(json_encode(array('html'=>$html)));
	}
	public function uploadpic(){
		header('Access-Control-Allow-Origin: *');
		$options = array( 'upload_dir' => './uploads/profile/',
         'upload_url' =>base_url().'/uploads/profile/',
         'accept_file_types'=>'/\.(gif|jpeg|jpg|png)$/i');
         $this->load->library('uploadhandler',$options);
	}
	
	public function deletemusician(){
		 $m_id = $this->db->escape_str($this->input->post('m_id'));
		 $this->musiciandata->delete($m_id);
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
