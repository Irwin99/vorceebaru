<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tip extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mtip','mtp');
    	$this->load->library('pagination');

	}

  function manage_tip(){
    $data['title_web'] = 'View All tip | Adminpanel Vorcee';
    $data['path_content'] = 'admin/tip/manage_tip';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/tip/manage_tip/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('tip');// fetch total record in databae using load
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
    $data['results'] = $this->mtp->fetchtip($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('tip'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
		}
		else{
			$data['results'] = $this->mtp->fetchtipSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/index',$data);
		}
  }

		function add_tip(){
			$data['title_web'] = 'Add tip | Adminpanel Vorcee';
			$data['path_content'] = 'admin/tip/add_tip';
			$data['user'] = $this->mtp->fetchAllUser();
			$data['product'] = $this->mtp->fetchAllProduct();
			$this->form_validation->set_rules('product','Product Name','required');
			$this->form_validation->set_rules('tip','Tip','required|numeric');
			$this->form_validation->set_rules('status_tip','Status','required');
			if(!$this->form_validation->run()){

				$this->load->view('admin/index',$data);
			}

			else{
				$save = $this->mtp->savetip($_POST);
				redirect(base_url($this->uri->segment(1).'/tip/manage_tip'));
			}
		}


	function edit_tip(){
			$data['title_web'] = 'Edit tip | Adminpanel Vorcee';
			$data['path_content'] = 'admin/tip/edit_tip';
			$data['user'] = $this->mtp->fetchAllUser();
			$data['product'] = $this->mtp->fetchAllProduct();
			$id=$this->uri->segment(4);
			$data['result']=$this->mod->getDataWhere('tip','id_tip',$id);
			if($data['result']==FALSE)
				redirect(base_url('adminpanel/tip/manage_tip'));

				$this->form_validation->set_rules('product','Product Name','required');
				$this->form_validation->set_rules('tip','Tip','required|numeric');
				$this->form_validation->set_rules('status_tip','Status','required');

				if(!$this->form_validation->run()){

					$this->load->view('admin/index',$data);
				}

			else{
				$save = $this->mtp->edittip($_POST,$id);
				redirect(base_url($this->uri->segment(1).'/tip/manage_tip'));
			}
	}

    function delete_tip(){
			$id = $this->uri->segment(4);
			$this->db->where('id_tip',$id);
			$this->db->delete('tip');
			redirect(base_url($this->uri->segment(1).'/tip/manage_tip'));
	}
}

?>
