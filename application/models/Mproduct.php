<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproduct extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchproduct($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $limit = ($pagenumber*$limit)-$limit.",".$limit;
    else
      $limit = $start.",".$limit;
				$sql = "select vc_product.*,vc_user.username,table_user.username as username_campaigner,vc_category.*
				FROM
				vc_product
				JOIN vc_user ON vc_product.id_admin = vc_user.id_user
				JOIN vc_category ON vc_category.id_category = vc_product.id_category
				JOIN (select * from vc_user) as table_user ON vc_product.id_campaigner = table_user.id_user
				limit ".$limit."
				";
				$query = $this->db->query($sql);

			if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllproduct() {
    return $this->db->count_all("product");
    }

		function getproduct($id){
			$sql = "select vc_product.*,vc_user.username,table_user.username as username_campaigner,vc_category.*
			FROM
			vc_product
			JOIN vc_user ON vc_product.id_admin = vc_user.id_user
			JOIN vc_category ON vc_category.id_category = vc_product.id_category
			JOIN (select * from vc_user) as table_user ON vc_product.id_campaigner = table_user.id_campaigner
			where id_product = ".$id."
			";
			$query = $this->db->query($sql);
		if($query->num_rows()>0){
			return $query->row_array();
		}
		else return FALSE;

		}

		function saveProduct($data,$upload_data){
			$array = array(
					'id_admin' => $this->session->userdata('idAdmin'),
					'id_campaigner' => 2,
					'id_category' => $data['category'],
					'name_product' =>$data['name_product'],
					'start_price' =>$data['start_price'],
					'current_price' => $data['current_price'],
					'about_product' =>$data['about_product'],
					'date_product' => date('Y-m-d H:i:s'),
					'date_end_campaign' => $data['date_end_campaign'],
					'status_product' => $data['status_product'],
					'image_product' => 'asset/images/product/'.$upload_data['orig_name']
				);
			$this->db->insert('product',$array);
			return 1;
		}
			function editProduct($data,$upload_data,$id){
				$array = array(
					'id_category' =>$data['category'],
					'name_product' =>$data['name_product'],
					'start_price' =>$data['start_price'],
					'current_price' => $data['current_price'],
					'about_product' =>$data['about_product'],
					'date_product' => date('Y-m-d H:i:s'),
					'date_end_campaign' => $data['date_end_campaign'],
					'status_product' => $data['status_product'],


				);

				if($upload_data!=false){
					$array['image_product'] = 'asset/images/product/'.$upload_data['orig_name'];
				}
				$this->db->where('id_product',$id);
				$this->db->update('product',$array);
				return 1;
			}


		function fetchproductSearch($data){
			if($data['by'] == "username") $data['by'] = "vc_user.username";
			if($data['by'] == "username_campaigner") $data['by'] = "table_user.username";

			if($data['status'] != "")

			$sql = "select vc_product.*,vc_user.username,table_user.username as username_campaigner,vc_category.*
			FROM
			vc_product
			JOIN vc_user ON vc_product.id_admin = vc_user.id_user
			JOIN vc_category ON vc_category.id_category = vc_product.id_category
			JOIN (select * from vc_user) as table_user ON vc_product.id_campaigner = table_user.id_campaigner
			where status = ".$data['status']." and ".$data['by']." like '%".$data['search']."%'
			";
			else if($data['status'] == "")
			$sql = "select vc_product.*,vc_user.username,table_user.username as username_campaigner,vc_category.*
			FROM
			vc_product
			JOIN vc_user ON vc_product.id_admin = vc_user.id_user
			JOIN vc_category ON vc_category.id_category = vc_product.id_category
			JOIN (select * from vc_user) as table_user ON vc_product.id_campaigner = table_user.id_campaigner
			where ".$data['by']." like '%".$data['search']."%'
			";

			$query = $this->db->query($sql);

		if($query->num_rows()>0){
		return $query->result();
	}
	else return FALSE;
		}

		function fetchAllUser(){
			$query = $this->db->get('user');
			if($query->num_rows()>0){
				return $query->result();
			}
			else return FALSE;
		}


		function fetchAllCategory(){
			$query = $this->db->get('category');
			if($query->num_rows()>0){
				return $query->result();
			}
			else return FALSE;
		}


  }
?>
