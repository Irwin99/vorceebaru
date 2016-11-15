<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mproduct','mp');
    	$this->load->library('pagination');

	}

  function manage_product(){
    $data['title_web'] = 'View All Topic | Adminpanel e-conosmart';
    $data['path_content'] = 'admin/product/manage_product';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/product/manage_product/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('product');// fetch total record in databae using load
    $config['per_page'] = $perpage; // Total data in one page
    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
    $config['num_links'] = round($choice); // Rounding Choice Variable
    $config['use_page_numbers'] = TRUE;
    $this->pagination->initialize($config); // intialize var config
    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
    $data['results'] = $this->mp->fetchproduct($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('product'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/index',$data);
		}
		else{
			$data['results'] = $this->mp->fetchproductSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/index',$data);
		}
  }

	function add_product(){
		$data['title_web'] = 'Add product | Adminpanel Vorcee';
		$data['path_content'] = 'admin/product/add_product';
		$data['category'] = $this->mp->fetchAllCategory();
		$data['user'] = $this->mp->fetchAllUser();
		$this->form_validation->set_rules('category','Category Name','required');
		$this->form_validation->set_rules('name_product','Product Name','required');
		$this->form_validation->set_rules('start_price',' Start Price','required|numeric');
		$this->form_validation->set_rules('current_price','Current Price','required|numeric');
		$this->form_validation->set_rules('about_product','About','required');
		$this->form_validation->set_rules('date_end_campaign','Date End','required');
		$this->form_validation->set_rules('status_product','status','required');
		if(!$this->form_validation->run()){
			$data['error'] = false;
			$this->load->view('admin/index',$data);
		}
		else{
			$config['upload_path'] = './asset/images/product';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '8000';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){
				$data['error'] = $this->upload->display_errors();
				$this->load->view('admin/index',$data);
			}

		else{
			$save = $this->mp->saveProduct($_POST,$this->upload->data());
			redirect(base_url($this->uri->segment(1).'/product/manage_product'));
		}
	}
}

	function edit_product(){
		$data['title_web'] = 'Edit product | Adminpanel Vorcee';
		$data['path_content'] = 'admin/product/edit_product';
		$data['category'] = $this->mp->fetchAllCategory();
		$data['user'] = $this->mp->fetchAllUser();
		$id=$this->uri->segment(4);
		$data['result']=$this->mod->getDataWhere('product','id_product',$id);
		if($data['result']==FALSE)
			redirect(base_url('adminpanel/product/manage_product'));
			$this->form_validation->set_rules('category','Category Name','required');
			$this->form_validation->set_rules('name_product','Product Name','required');
			$this->form_validation->set_rules('start_price',' Start Price','required|numeric');
			$this->form_validation->set_rules('current_price','Current Price','required|numeric');
			$this->form_validation->set_rules('about_product','About','required');
			$this->form_validation->set_rules('date_end_campaign','Date End','required');
			$this->form_validation->set_rules('status_product','status','required');

			if(!$this->form_validation->run()){
				$data['error'] = false;
				$this->load->view('admin/index',$data);
			}
			else{
				$config['upload_path'] = './asset/images/product';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '5000';



			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload()){
				$save = $this->mp->editProduct($_POST,FALSE,$id);
				redirect(base_url($this->uri->segment(1).'/product/manage_product'));
			}

		else{
			$save = $this->mp->editProduct($_POST,$this->upload->data(),$id);
			redirect(base_url($this->uri->segment(1).'/product/manage_product'));
		}
	}
	}

	function delete_product(){
		$id = $this->uri->segment(4);
		$this->db->where('id_product',$id);
		$this->db->delete('product');
		redirect(base_url($this->uri->segment(1).'/product/manage_product'));
	}
}
?>
