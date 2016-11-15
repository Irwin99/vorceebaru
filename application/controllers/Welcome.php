<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data['path_content'] = 'default/module/homepage';
		$this->load->view('default/index',$data);
	}
}
