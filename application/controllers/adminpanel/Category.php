<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mcategory','mcr');
    	$this->load->library('pagination');

	}

  function manage_category(){
    $data['title_web'] = 'View All Topic | Adminpanel e-conosmart';
    $data['path_content'] = 'admin/category/manage_category';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/category/manage_category/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('category');// fetch total record in databae using load
    $config['per_page'] = $perpage; // Total data in one page
    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
    $config['num_links'] = round($choice); // Rounding Choice Variable
    $config['use_page_numbers'] = TRUE;
    $this->pagination->initialize($config); // intialize var config
    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
    $data['results'] = $this->mcr->fetchCategory($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('category'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
		}
		else{
			$data['results'] = $this->mcr->fetchCategorySearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/index',$data);
		}
  }

	function add_category(){
		$data['title_web'] = 'Add category | Adminpanel Vorcee';
		$data['path_content'] = 'admin/category/add_category';
		$this->form_validation->set_rules('name_category','Category Name','required');
		if(!$this->form_validation->run()){
			$data['error'] = false;
			$this->load->view('admin/index',$data);
		}
		else{
			$config['upload_path'] = './asset/images/category';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '8000';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){
				$save = $this->mcr->saveCategory($_POST,FALSE);
				redirect(base_url($this->uri->segment(1).'/category/manage_category'));
			}

		else{
			$save = $this->mcr->saveCategory($_POST,$this->upload->data());
			redirect(base_url($this->uri->segment(1).'/category/manage_category'));
		}
	}
}

	function edit_category(){
		$data['title_web'] = 'Edit category | Adminpanel Vorcee';
		$data['path_content'] = 'admin/category/edit_category';
		$id=$this->uri->segment(4);
		$data['result']=$this->mod->getDataWhere('category','id_category',$id);
		if($data['result']==FALSE)
			redirect(base_url('adminpanel/category/manage_category'));

			$this->form_validation->set_rules('name_category','Category Name','required');

			if(!$this->form_validation->run()){
				$data['error'] = false;
				$this->load->view('admin/index',$data);
			}
			else{
				$config['upload_path'] = './asset/images/category';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '5000';



			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){
				$save = $this->mcr->editCategory($_POST,FALSE,$id);
				redirect(base_url($this->uri->segment(1).'/category/manage_category'));
			}

		else{
			$save = $this->mcr->editCategory($_POST,$this->upload->data(),$id);
			redirect(base_url($this->uri->segment(1).'/category/manage_category'));
		}
	}
	}

	function delete_category(){
		$id = $this->uri->segment(4);
		$this->db->where('id_category',$id);
		$this->db->delete('category');
		redirect(base_url($this->uri->segment(1).'/category/manage_category'));
	}
}
?>
