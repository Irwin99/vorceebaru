<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mworkshop','mws');
    $this->load->model('muser');
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
  public function register_creator(){
    $data['path_content'] = 'default/module/register_creator';

    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('confirm','confirmpass','required|matches[password]');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('contact_person','Contact person','required');
    $this->form_validation->set_rules('phone_number','Phone Number','required|numeric');
    $this->form_validation->set_rules('mobile','mobile','required|numeric');
    $this->form_validation->set_rules('address','Address','required');
    $this->form_validation->set_rules('organization_name','organization','required');

		if(!$this->form_validation->run()){

			$this->load->view('default/index',$data);
		}

		else{
			$save = $this->muser->saveCreator($_POST);
      $this->session->set_flashdata(array('success_form'=>TRUE));
			redirect(base_url('page/register-creator'));
		}

  }
  public function register_learner(){
    $data['path_content'] = 'default/module/register_learner';

    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('confirm','confirmpass','required|matches[password]');
    $this->form_validation->set_rules('email','Email','required|valid_email');

		if(!$this->form_validation->run()){

			$this->load->view('default/index',$data);
		}

		else{
			$save = $this->muser->saveLearner($_POST);
      $this->session->set_flashdata(array('success_form'=>TRUE));
			redirect(base_url('page/register-learner'));
		}

  }
	public function login(){
		$data['path_content'] = 'default/module/login';

    $this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|callback_validLoginMember');

		if(!$this->form_validation->run())
			$this->load->view('default/index',$data);
		else{
				redirect(base_url('member'));
		}
	}
  function validLoginMember(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->muser->validLogin($username,$password);
		if($result != FALSE){
			$array = array(
					'loginMember' => TRUE,
					'idUser' => $result['id_user'],
					'username' => $result['username'],
					'permission' => $result['permission']
				);
			$this->session->set_userdata($array);
			return TRUE;
		}
		else{
			$this->form_validation->set_message('validLoginMember','Username or Password not found');
			return FALSE;
		}
	}

}
