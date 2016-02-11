<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	    $this->load->library('email');
	    $this->load->database();
	    $this->load->library('facebook/fb','fb');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function facebook(){
		 $this->load->library('facebook/fb','fb');
		 
	 
		   //facebook login
		   $user = $this->facebook->getUser();
		   $data['fbuser'] = $user;
		   if ($user){
		   	$data['login_url'] = $this->fb->createLoginLink();
		   }else {
		     $data['login_url'] = $this->fb->createLoginLink();
		   }
		   
		   var_dump($data);
		   exit;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */