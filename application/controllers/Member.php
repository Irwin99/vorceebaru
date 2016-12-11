<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mworkshop');
		$this->load->model('muser');
	}
	function index(){
		$data['path_content'] = 'default/module/member';
		$data['result'] = $this->mod->getDataWhere('user','id_user',$this->session->userdata('idUser'));
		$this->load->view('default/index',$data);

	}
	function profil(){
		$data['title_web'] = 'Profil| Vorcee';
		$data['path_content'] = 'default/module/profil';
		$data['result'] = $this->mod->getDataWhere('user','id_user',$this->session->userdata('idUser'));

		$this->form_validation->set_rules('full_name','name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('phone_number','phone','required|numeric');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('about_user','about_user','required');

		if(!$this->form_validation->run())
			$this->load->view('default/index',$data);
		else{
			$this->muser->saveProfil($_POST,$this->session->userdata('idUser'));
			$this->session->set_flashdata(array('success_form'=>TRUE));
			redirect(base_url('member/profil'));
		}
	}
	public function submit_proposal(){
		$data['path_content'] = 'default/module/submit_proposal';
		$data['category'] = $this->mworkshop->fetchAllCategory();
		$this->form_validation->set_rules('category','category','required');
		$this->form_validation->set_rules('workshop_title','Event Title','required');
    $this->form_validation->set_rules('event_goal','Event Goal','required');
    $this->form_validation->set_rules('workshop_description','Event Description','required');
    $this->form_validation->set_rules('hour_start','Event Start','required');
		$this->form_validation->set_rules('hour_end','Event End','required');
		if(!$this->form_validation->run()){
			$this->load->view('default/index',$data);
		}
		else{
			$config['upload_path'] = './asset/images/workshop';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '8000';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){
				$data['error'] = $this->upload->display_errors();
				$this->load->view('default/index',$data);
			}

		else{
			$save = $this->mworkshop->saveProposal($_POST,$this->upload->data());
			$this->session->set_flashdata(array('success_form'=>TRUE));
			redirect(base_url('member/submit-proposal'));
			}
		}
	}
	function logout(){
		$array = array(
			'loginMember' => FALSE,
			'idUser' => NULL,
			'username' => NULL,
			'permission' => NULL
				);
			$this->session->set_userdata($array);
			$array = array(
					'error_session' => TRUE
				);
			$this->session->set_flashdata($array);
		redirect(base_url('page/login'));
	}

}
