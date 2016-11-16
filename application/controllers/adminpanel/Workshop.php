<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class workshop extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mworkshop','mwk');
    $this->load->library('pagination');
	}

  function manage_workshop(){
    $data['title_web'] = 'View All workshop | Adminpanel Vorcee';
    $data['path_content'] = 'admin/workshop/manage_workshop';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/workshop/manage_workshop/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('workshop');// fetch total record in databae using load
    $config['per_page'] = $perpage; // Total data in one page
    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
    $config['num_links'] = round($choice); // Rounding Choice Variable
    $config['use_page_numbers'] = TRUE;
    $this->pagination->initialize($config); // intialize var config
    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
    $data['results'] = $this->mwk->fetchWorkshop($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('workshop'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
		}
		else{
			$data['results'] = $this->mwk->fetchWorkshopSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/index',$data);
		}
  }

		function add_workshop(){
			$data['title_web'] = 'Add workshop | Adminpanel Vorcee';
			$data['path_content'] = 'admin/workshop/add_workshop';
        $data['category'] = $this->mwk->fetchAllCategory();
      $this->form_validation->set_rules('category','Category Name','required');
      $this->form_validation->set_rules('course_fee','Fee','required');
			$this->form_validation->set_rules('workshop_title','title','required');
			$this->form_validation->set_rules('workshop_description','description','required');
			$this->form_validation->set_rules('hour_start','Hour Start','required');
			$this->form_validation->set_rules('hour_end','Hour End','required');
			$this->form_validation->set_rules('date_workshop','Date','required');
			if(!$this->form_validation->run()){
				$data['error'] = false;
				$this->load->view('admin/index',$data);
			}
			else{
				$config['upload_path'] = './asset/images/workshop';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '8000';

				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload()){
					$data['error'] = $this->upload->display_errors();
					$this->load->view('admin/index',$data);
				}

			else{
				$save = $this->mwk->saveWorkshop($_POST,$this->upload->data());
				redirect(base_url($this->uri->segment(1).'/workshop/manage_workshop'));
			}
		}
	}

		function edit_workshop(){
			$data['title_web'] = 'Edit workshop | Adminpanel Vorcee';
			$data['path_content'] = 'admin/workshop/edit_workshop';
      $data['category'] = $this->mwk->fetchAllCategory();
			$id=$this->uri->segment(4);
			$data['result']=$this->mod->getDataWhere('workshop','id_workshop',$id);
			if($data['result']==FALSE)
				redirect(base_url('adminpanel/workshop/manage_workshop'));
        $this->form_validation->set_rules('category','Category Name','required');
        $this->form_validation->set_rules('course_fee','Fee','required');
				$this->form_validation->set_rules('workshop_title','title','required');
				$this->form_validation->set_rules('workshop_description','description','required');
				$this->form_validation->set_rules('hour_start','Hour Start','required');
				$this->form_validation->set_rules('hour_end','Hour End','required');
				$this->form_validation->set_rules('date_workshop','Date','required');
			if(!$this->form_validation->run()){
				$data['error'] = false;
				$this->load->view('admin/index',$data);
			}
			else{
				$config['upload_path'] = './asset/images/workshop';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '8000';



			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){
				$save = $this->mwk->editworkshop($_POST,FALSE,$id);
				redirect(base_url($this->uri->segment(1).'/workshop/manage_workshop'));
			}

		else{
			$save = $this->mwk->editworkshop($_POST,$this->upload->data(),$id);
			redirect(base_url($this->uri->segment(1).'/workshop/manage_workshop'));
		}
	}
	}
		function delete_workshop(){
			$id = $this->uri->segment(4);
			$this->db->where('id_workshop',$id);
			$this->db->delete('workshop');
			redirect(base_url($this->uri->segment(1).'/workshop/manage_workshop'));
		}

}

?>
