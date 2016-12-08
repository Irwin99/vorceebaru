<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mworkshop','mws');
	}
	public function product(){
		$data['path_content'] = 'default/module/product';
		$this->load->view('default/index',$data);
	}
	public function view_category(){
		$data['path_content'] = 'default/module/subproduct';
		$this->load->view('default/index',$data);
	}
	public function view_workshop(){
		$data['path_content'] = 'default/module/view_workshop';
		$id = $this->uri->segment(3);
		$data['result'] = $this->mws->getWorkshop($id);
		if($data['result'] == false)
			show_404();
		
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
	public function book_now(){
		$id = $this->uri->segment(3);
		$result = $this->mws->getWorkshop($id);
		if($result == false || $result['link_form'] == "")
			show_404();
		else
			redirect($result['link_form']);
	}
	public function login(){
		$data['path_content'] = 'default/module/login';
		$this->load->view('default/index',$data);	
	}
	public function member(){
		$data['path_content'] = 'default/module/member';
		$this->load->view('default/index',$data);	
	}
}
