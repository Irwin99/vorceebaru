<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mbanner','mbn');
    	$this->load->library('pagination');

	}

  function manage_banner(){
    $data['title_web'] = 'View All banner | Adminpanel Vorcee';
    $data['path_content'] = 'admin/banner/manage_banner';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/banner/manage_banner/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('banner');// fetch total record in databae using load
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
    $data['results'] = $this->mbn->fetchBanner($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('banner'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
		}
		else{
			$data['results'] = $this->mbn->fetchBannerSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/index',$data);
		}
  }

		function add_banner(){
			$data['title_web'] = 'Add banner | Adminpanel Vorcee';
			$data['path_content'] = 'admin/banner/add_banner';
			$data['user'] = $this->mbn->fetchAllUser();

			$this->form_validation->set_rules('title_banner','Banner Title','required');
			$this->form_validation->set_rules('link_banner','Link','required');
			$this->form_validation->set_rules('caption_banner','caption','required');
					if(!$this->form_validation->run()){
				$data['error'] = false;
				$this->load->view('admin/index',$data);
			}
			else{
				$config['upload_path'] = './asset/images/banner';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '5000';



				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload()){
					$data['error'] = $this->upload->display_errors();
					$this->load->view('admin/index',$data);
				}

			else{
				$save = $this->mbn->saveBanner($_POST,$this->upload->data());
				redirect(base_url($this->uri->segment(1).'/banner/manage_banner'));
			}
		}
	}

	function edit_banner(){
			$data['title_web'] = 'Edit banner | Adminpanel Vorcee';
			$data['path_content'] = 'admin/banner/edit_banner';
			$data['user'] = $this->mbn->fetchAllUser();
			$id=$this->uri->segment(4);
			$data['result']=$this->mod->getDataWhere('banner','id_banner',$id);
			if($data['result']==FALSE)
				redirect(base_url('adminpanel/banner/manage_banner'));

				$this->form_validation->set_rules('title_banner','Banner Title','required');
				$this->form_validation->set_rules('link_banner','Link','required');
				$this->form_validation->set_rules('caption_banner','caption','required');


				if(!$this->form_validation->run()){
					$data['error'] = false;
					$this->load->view('admin/index',$data);
				}
				else{
					$config['upload_path'] = './asset/images/banner';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '5000';



				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload()){
					$save = $this->mbn->editBanner($_POST,FALSE,$id);
					redirect(base_url($this->uri->segment(1).'/banner/manage_banner'));
				}

			else{
				$save = $this->mbn->editBanner($_POST,$this->upload->data(),$id);
				redirect(base_url($this->uri->segment(1).'/banner/manage_banner'));
			}
		}
	}

    function delete_banner(){
			$id = $this->uri->segment(4);
			$this->db->where('id_banner',$id);
			$this->db->delete('banner');
			redirect(base_url($this->uri->segment(1).'/banner/manage_banner'));
	}
}

?>
