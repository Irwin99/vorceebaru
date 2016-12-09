<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mworkshop','mws');
		$this->load->model('muser');
	}
	function index(){
		$data['path_content'] = 'default/module/member';
		$id=$this->uri->segment(3);
		$data['result']=$this->mod->getDataWhere('user','id_user',$id);
		if($data['result']==FALSE)
			redirect(base_url('member'));

			$this->form_validation->set_rules('full_name','Name','required');
	    $this->form_validation->set_rules('email','Email','required|valid_email');
	    $this->form_validation->set_rules('phone_number','Phone Number','required|numeric');
	    
	    $this->form_validation->set_rules('address','Address','required');
	    $this->form_validation->set_rules('about_user','about us','required');

			if(!$this->form_validation->run()){

				$this->load->view('default/index',$data);
			}

		else{
			$save = $this->muser->editUserfront($_POST,$id);
			$this->session->set_flashdata(array('success_form'=>TRUE));
			redirect(base_url('member'));
		}

	}
	public function submit_proposal(){
		$data['path_content'] = 'default/module/submit_proposal';
		$this->load->view('default/index',$data);
	}
}
