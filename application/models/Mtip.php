<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtip extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

		function fetchtip($limit,$start,$pagenumber) {

	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);

	    $this->db->order_by('date_tip','DESC');
			$this->db->join('user','user.id_user = tip.id_user');
			$this->db->join('product','product.id_product = tip.id_product');
	    $query = $this->db->get('tip');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	  }
	  function countAlltip() {
	    return $this->db->count_all("tip");
	  }

		function savetip($data){
	    $array = array(
					'id_user' => $this->session->userdata('idAdmin'),
					'id_product' => $data['product'],
	        'tip' =>$data['tip'],
					'status_tip' => $data['status_tip'],
					'date_tip' => date('Y-m-d H:i:s')
	      );
	    $this->db->insert('tip',$array);
	    return 1;
	  }
	    function edittip($data,$id){
	      $array = array(
					'id_product' => $data['product'],
	        'tip' =>$data['tip'],
					'status_tip' => $data['status_tip']
				);

	      $this->db->where('id_tip',$id);
	      $this->db->update('tip',$array);
	      return 1;
	    }

			function fetchtipSearch($data) {
				$this->db->like($data['by'],$data['search']);
				$this->db->order_by('date_tip','DESC');
				$this->db->join('user','user.id_user = tip.id_user');
				$this->db->join('product','product.id_product = tip.id_product');
		    $query = $this->db->get('tip');
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

			function fetchAllProduct(){
				$query = $this->db->get('product');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}




}
