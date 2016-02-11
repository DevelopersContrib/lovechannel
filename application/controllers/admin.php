<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
     function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	    $this->load->library('email');
	    $this->load->model('users');
	    $this->load->model('bookingdata');
	    $this->load->database();
	}
	
	public function index()
	{
	  $data = array();
	  $this->load->view('admin/index',$data);
	}
	
    
}
