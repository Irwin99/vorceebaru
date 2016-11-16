<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Class extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mclass','mcl');
    	$this->load->library('pagination');
  	}

  function manage_class(){
    $data['title_web'] = 'View All class | Adminpanel Vorcee';
    $data['path_content'] = 'admin/class/manage_class';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/class/manage_class/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('class');// fetch total record in databae using load
    $config['per_page'] = $perpage; // Total data in one page
    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
    $config['num_links'] = round($choice); // Rounding Choice Variable
    $config['use_page_numbers'] = TRUE;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="disabled"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $this->pagination->initialize($config); // intialize var config
    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
    $data['results'] = $this->mcl->fetchClass($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('class'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
		}
		else{
			$data['results'] = $this->mcl->fetchClassSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/index',$data);
		}
  }

	function add_class(){
		$data['title_web'] = 'Add Class | Adminpanel Vorcee';
		$data['path_content'] = 'admin/class/add_class';

		$this->form_validation->set_rules('title_class','Title','required');
		$this->form_validation->set_rules('description_class','Description','required');
		$this->form_validation->set_rules('place_class','Place','required');
		$this->form_validation->set_rules('time_class','Time','required');
		$this->form_validation->set_rules('date_class','Date','required');

		if(!$this->form_validation->run()){

			$this->load->view('admin/index',$data);
		}

		else{
			$save = $this->mcl->saveclass($_POST);
			redirect(base_url($this->uri->segment(1).'/class/manage_class'));
		}
	}


function edit_class(){
		$data['title_web'] = 'Edit class | Adminpanel Vorcee';
		$data['path_content'] = 'admin/class/edit_class';
		$id=$this->uri->segment(4);
		$data['result']=$this->mod->getDataWhere('class','id_class',$id);
		if($data['result']==FALSE)
			redirect(base_url('adminpanel/class/manage_class'));

			$this->form_validation->set_rules('title_class','Title','required');
			$this->form_validation->set_rules('description_class','Description','required');
			$this->form_validation->set_rules('place_class','Place','required');
			$this->form_validation->set_rules('time_class','Time','required');
			$this->form_validation->set_rules('date_class','Date','required');

			if(!$this->form_validation->run()){

				$this->load->view('admin/index',$data);
			}

		else{
			$save = $this->mcl->editclass($_POST,$id);
			redirect(base_url($this->uri->segment(1).'/class/manage_class'));
		}
}

	function delete_class(){
		$id = $this->uri->segment(4);
		$this->db->where('id_class',$id);
		$this->db->delete('class');
		redirect(base_url($this->uri->segment(1).'/class/manage_class'));
	}
}

?>
