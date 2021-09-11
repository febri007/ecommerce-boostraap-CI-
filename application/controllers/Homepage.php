<?php
class Homepage extends CI_Controller{
	function __construct(){
		parent::__construct();
		// $this->load->model('m_login');
		// $this->load->library('session');
	}
    public function index(){
      $this->load->view('homepage');
	}
	
}