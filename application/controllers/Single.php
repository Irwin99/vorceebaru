<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single extends CI_Controller {
	function __construct(){
		parent::__construct();

	}
	function index(){
		$data['title_web'] = 'Single | Vorcee';

		$data['path_content'] = 'default/module/product';
		$this->load->view('default/index',$data);
	}


}
