<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function product(){
		$data['path_content'] = 'default/module/product';
		$this->load->view('default/index',$data);
	}
	public function view_category(){
		$data['path_content'] = 'default/module/subproduct';
		$this->load->view('default/index',$data);
	}
	public function view_product(){
		$data['path_content'] = 'default/module/view_product';
		$this->load->view('default/index',$data);
	}
	public function view_gallery(){
		$data['path_content'] = 'default/module/view_gallery';
		$this->load->view('default/index',$data);		
	}
	public function vashion_class(){
		$data['path_content'] = 'default/module/vashion_class';
		$this->load->view('default/index',$data);	
	}
	public function vashion_link(){
		$data['path_content'] = 'default/module/vashion_link';
		$this->load->view('default/index',$data);	
	}
}
