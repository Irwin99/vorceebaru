<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('msetting','mse');
    	$this->load->library('pagination');
	}


	function edit_setting(){
			$data['title_web'] = 'Edit setting | Adminpanel SoberKicks';
			$data['path_content'] = 'admin/setting/edit_setting';
			$data['result']=$this->mod->getDataWhere('setting','id_setting',1);
			if($data['result']==FALSE)
				redirect(base_url('adminpanel/setting/manage_setting'));

				$this->form_validation->set_rules('title_website','title','required');
				$this->form_validation->set_rules('about','About','required');
				$this->form_validation->set_rules('address','address','required');
				$this->form_validation->set_rules('campaign_report','Campaign','required');
				$this->form_validation->set_rules('achievement','Achievement','required');
				$this->form_validation->set_rules('partner','Partner','required');
				$this->form_validation->set_rules('phone_number','Phone','required|numeric');

        if(!$this->form_validation->run()){
          $this->load->view('admin/index',$data);
        }
        else{
          $save = $this->mse->editSetting($_POST,$id);
          redirect(base_url($this->uri->segment(1).'/setting/manage_setting'));
        }
	}


}

?>
