<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
     function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	    $this->load->library('email');
	    $this->load->model('users');
	    
	    $this->load->database();
	    $this->load->library('facebook/fb','fb');
	    
	}
	public function index()
	{
	 //facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
	 $this->load->view('home/index',$data);
	}
	
     public function fblogin(){
	    
		$user = $this->facebook->getUser();
		if ($user){
			$user_profile = $this->facebook->api('/me');
			$fb_id = $user_profile['id'];
			
			if ($this->users->CheckFieldExists('fb_userid',$fb_id)===false){
				$userdata = array('name'=>$user_profile['name'],'fb_userid'=>$fb_id);
			 	$this->users->update(0,$userdata); 
			 }
			 
			 $newdata = array(
                   'username'  => $this->users->GetUserInfo('name','fb_userid',$fb_id),
                   'userid'     => $this->users->GetUserInfo('userid','fb_userid',$fb_id),
                   'logged_in' => TRUE
                  );

                 $this->session->set_userdata($newdata);
			
			$callbackurl = $this->uri->segment(3);			
			
			if(empty($callbackurl))
				redirect(base_url().'home');
			else{
				$callbackurl = $callbackurl."/".$this->uri->segment(4);
				$callbackurl = $callbackurl."/".$this->uri->segment(5);
				redirect(base_url().$callbackurl);
			}
		}
	}
	
	public function logout(){
		$array_items = array( 'userid' => '', 'logged_in' => FALSE);
	    $this->session->unset_userdata($array_items);
	    $this->session->sess_destroy(); 
	    redirect(base_url().'home');
	}
		
	public function musicians()
	{
		$user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/musicians',$data);
	}
	
	public function pricing()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/pricing',$data);
	}
	
	public function team()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/team',$data);
	}
	
	public function partner()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/partner',$data);
	}
	
	public function terms()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/terms',$data);
	}
	
	public function fund()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/fund',$data);
	}
	
	public function referral()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/referral',$data);
	}
	
	public function privacy()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/privacy',$data);
	}
	
		public function contactus()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/contactus',$data);
	}
	
	public function about()
	{
		//facebook login
		$user = $this->facebook->getUser();
		$data['fbuser'] = $user;
		if ($user){
		$data['login_url'] = $this->fb->createLoginLink();
		}else {
		$data['login_url'] = $this->fb->createLoginLink();
		}
		$this->load->view('home/about',$data);
	}
	
	public function contact()
	{
		//facebook login
	 $user = $this->facebook->getUser();
	 $data['fbuser'] = $user;
	 if ($user){
	   	 $data['login_url'] = $this->fb->createLoginLink();
	   }else {
		 $data['login_url'] = $this->fb->createLoginLink();
	   }
		$this->load->view('home/about',$data);
	}
	
    public function signout(){
		$array_items = array('username' => '', 'email' => '', 'userid' => '', 'logged_in' => false,'googleauth_token'=>'','googleauth_accesstoken'=>'','gauth_afterauth'=>'');
	    $this->session->unset_userdata($array_items);
	    $this->session->sess_destroy();
	    header ("Location: ".base_url());
        exit; 	
	}
}
