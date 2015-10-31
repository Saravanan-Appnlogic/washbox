<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class WashBox extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->load->model("Wash_Model");
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			$this->load->helper('url');
			$this->load->library('session');
			
		}
		public function index()
		{
			$this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
		}
	
		function howItsWork()
		{
			$this->load->view('header');
			$this->load->view('howItsWork');
			$this->load->view('footer');
		}
		public function washBoxOrderpage()
		{
			// Load facebook library and pass associative array which contains appId and secret key
			$this->load->library('facebook', array('appId' => '805247149588280', 'secret' => '7cd5887bc28fb4c4bcc9a9fa0cada4c7'));
			$this->user = $this->facebook->getUser();
			if ($this->user)
			{
				$result['user_profile'] = $this->facebook->api('/me/');
				$result['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url().'oauth_login/logout'));
				$result["data"]=$this->Wash_Model->gettable();
				$result['session']=$this->session->userdata("user",$result['user_profile']);
				$this->Wash_Model->registerUser($result['user_profile']);
				$this->load->view('header',$result);
				$this->load->view('washBoxOrderpage',$result);
				$this->load->view('footer');
			}
			else
			{
				
				$result['login_url'] = $this->facebook->getLoginUrl();
				$result['session']=$this->session->userdata("user",$result);
				$result["data"]=$this->Wash_Model->gettable();
				
				$this->load->view('header',$result);
				$this->load->view('washBoxOrderpage',$result);
				$this->load->view('footer');
			}
	
		}
		function registerUser()
		{
			$result=$this->Wash_Model->registerUser();
			$session=$this->session->set_userdata("user",$result);
			echo json_encode($result);
		}
		function loginUser()
		{
			$result=$this->Wash_Model->loginUser();
	
			if($result["message"]=="yes"){
				
				
				$session=$this->session->set_userdata("user",$result["data"]);
				$session=$this->session->set_userdata("user_id",$result["address"]);
				$data=array("message"=>"yes", "data" => $result["data"],"address" => $result["address"]);
				echo json_encode($data);
			}
			else
			{
				$data=array("message"=>"no");
				echo json_encode($data);
			}
			
		}
		function userAddress()
		{
			$userId = $this->session->userdata('user');
			$result=$this->Wash_Model->userAddress($userId['id']);
			
			echo json_encode($result);
		}
		function getAddress()
		{
			$userId = $this->session->userdata('user');
			$result=$this->Wash_Model->getAddress($userId['id']);
			echo json_encode($result);
		}
		function placeOrder()
		{
			$userId = $this->session->userdata('user');
			$result=$this->Wash_Model->placeOrder($userId['id']);
			echo json_encode($result);
		}
		function userLogOut()
		{
			$this->session->sess_destroy();
		}
		public function facebook() {
			
			if ($this->user)
			{
				$data['user_profile'] = $this->facebook->api('/me/');
				print_r($data['user_profile']);
				exit;
				$data['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/oauth_login/logout'));
				
				$result['session']=$this->session->userdata("user",$result);
				$result["data"]=$this->Wash_Model->gettable();
				$result["logout_url"]=$data['user_profile'];
				$this->load->view('header');
				$this->load->view('washBoxOrderpage',$result);
				$this->load->view('footer');
				
			} else
			{
				$result['session']=$this->session->userdata("user",$result);
				$result["data"]=$this->Wash_Model->gettable();
				$this->load->view('header');
				$this->load->view('washBoxOrderpage',$result);
				$this->load->view('footer');
			}
		}
		// Logout from facebook
		public function logout() {
			session_destroy();
			redirect(base_url('WashBox'));
		}
		
	
}

