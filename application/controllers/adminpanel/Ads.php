<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mads','mds');
    	$this->load->library('pagination');

	}

  function manage_ads(){
    $data['title_web'] = 'View All ads | Adminpanel Vorcee';
    $data['path_content'] = 'admin/ads/manage_ads';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/ads/manage_ads/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('ads');// fetch total record in databae using load
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
    $data['results'] = $this->mds->fetchAds($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('ads'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
		}
		else{
			$data['results'] = $this->mds->fetchAdsSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/index',$data);
		}
  }

		function add_ads(){
			$data['title_web'] = 'Add ads | Adminpanel Vorcee';
			$data['path_content'] = 'admin/ads/add_ads';
			$data['user'] = $this->mds->fetchAllUser();

			$this->form_validation->set_rules('name_ads','Ads Name','required');
			$this->form_validation->set_rules('link_ads','Link','required');
			$this->form_validation->set_rules('fee_ads','Fee','required|numeric');
			$this->form_validation->set_rules('description_ads','Description','required');
			$this->form_validation->set_rules('current_price','Current','required|numeric');
			$this->form_validation->set_rules('price_ads','Price','required|numeric');
					if(!$this->form_validation->run()){
				$data['error'] = false;
				$this->load->view('admin/index',$data);
			}
			else{
				$config['upload_path'] = './asset/images/ads';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '5000';



				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload()){
					$data['error'] = $this->upload->display_errors();
					$this->load->view('admin/index',$data);
				}

			else{
				$save = $this->mds->saveAds($_POST,$this->upload->data());
				redirect(base_url($this->uri->segment(1).'/ads/manage_ads'));
			}
		}
	}

	function edit_ads(){
			$data['title_web'] = 'Edit ads | Adminpanel Vorcee';
			$data['path_content'] = 'admin/ads/edit_ads';
			$data['user'] = $this->mds->fetchAllUser();
			$id=$this->uri->segment(4);
			$data['result']=$this->mod->getDataWhere('ads','id_ads',$id);
			if($data['result']==FALSE)
				redirect(base_url('adminpanel/ads/manage_ads'));

				$this->form_validation->set_rules('name_ads','Ads Name','required');
				$this->form_validation->set_rules('link_ads','Link','required');
				$this->form_validation->set_rules('fee_ads','Fee','required|numeric');
				$this->form_validation->set_rules('description_ads','Description','required');
				$this->form_validation->set_rules('current_price','Current','required|numeric');
				$this->form_validation->set_rules('price_ads','Price','required|numeric');


				if(!$this->form_validation->run()){
					$data['error'] = false;
					$this->load->view('admin/index',$data);
				}
				else{
					$config['upload_path'] = './asset/images/ads';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '5000';



				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload()){
					$save = $this->mds->editAds($_POST,FALSE,$id);
					redirect(base_url($this->uri->segment(1).'/ads/manage_ads'));
				}

			else{
				$save = $this->mds->editAds($_POST,$this->upload->data(),$id);
				redirect(base_url($this->uri->segment(1).'/ads/manage_ads'));
			}
		}
	}

    function delete_ads(){
			$id = $this->uri->segment(4);
			$this->db->where('id_ads',$id);
			$this->db->delete('ads');
			redirect(base_url($this->uri->segment(1).'/ads/manage_ads'));
	}

  function manage_hit_ads(){
    $data['title_web'] = 'View All hit_ads | Adminpanel Vorcee';
    $data['path_content'] = 'admin/ads/manage_hit_ads';

    $this->form_validation->set_rules('search','Search','required');

    if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/ads/manage_ads/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('hit_ads');// fetch total record in databae using load
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
    $data['results'] = $this->mds->fetchHitAds($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('hit_ads'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
    }
    else{
      $data['results'] = $this->mds->fetchHitAdsSearch($_POST); // fetch data using limit and pagination
      $data['links'] = false;
      $this->load->view('admin/index',$data);
    }
  }

    function add_hit_ads(){
      $data['title_web'] = 'Add ads | Adminpanel Vorcee';
      $data['path_content'] = 'admin/ads/add_hit_ads';
      $data['user'] = $this->mds->fetchAllUser();
			$data['ads']  = $this->mds->fetchAllAds();

      $this->form_validation->set_rules('ads','ads','required');
      $this->form_validation->set_rules('ip_address','Ip Address','required');
        if(!$this->form_validation->run()){
        $this->load->view('admin/index',$data);
      }

      else{
        $save = $this->mds->saveHitAds($_POST);
        redirect(base_url($this->uri->segment(1).'/ads/manage_hit_ads'));
      }
    }


  function edit_hit_ads(){
      $data['title_web'] = 'Edit ads | Adminpanel Vorcee';
      $data['path_content'] = 'admin/ads/edit_hit_ads';
      $data['user'] = $this->mds->fetchAllUser();
      $data['ads']  = $this->mds->fetchAllAds();
      $id=$this->uri->segment(4);
      $data['result']=$this->mod->getDataWhere('hit_ads','id_hit_ads',$id);
      if($data['result']==FALSE)
        redirect(base_url('adminpanel/ads/manage_hit_ads'));

        $this->form_validation->set_rules('ads','ads','required');
        $this->form_validation->set_rules('ip_address','Ip Address','required');

        if(!$this->form_validation->run()){

          $this->load->view('admin/index',$data);
        }

      else{
        $save = $this->mds->editHitAds($_POST,$id);
        redirect(base_url($this->uri->segment(1).'/ads/manage_hit_ads'));
      }
    }


    function delete_hit_ads(){
      $id = $this->uri->segment(4);
      $this->db->where('id_hit_ads',$id);
      $this->db->delete('hit_ads');
      redirect(base_url($this->uri->segment(1).'/ads/manage_hit_ads'));
  }

}


?>
