<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data['path_content'] = 'default/module/homepage';
		$this->load->model('mworkshop','mws');

		$data['results'] = $this->mws->fetchWorkshop(6,0,'');
		$data['total_rows'] = $this->mod->countData('workshop');
		$this->load->view('default/index',$data);
	}
}
