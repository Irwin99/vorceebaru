<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mworkshop','mws');
	}
	function index(){
		$data['path_content'] = 'default/module/member';
		$this->load->view('default/index',$data);	
	}
	public function submit_proposal(){
		$data['path_content'] = 'default/module/submit_proposal';
		$this->load->view('default/index',$data);	
	}
}