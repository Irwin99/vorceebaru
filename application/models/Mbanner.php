<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbanner extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

		function fetchBanner($limit,$start,$pagenumber) {

	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);

	    $this->db->order_by('title_banner','DESC');
			$this->db->join('user','user.id_user = banner.id_user');
	    $query = $this->db->get('banner');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	  }
	  function countAllbanner() {
	    return $this->db->count_all("banner");
	  }

		function savebanner($data,$upload_data){
	    $array = array(
					'id_user' => $this->session->userdata('idAdmin'),
	        'title_banner' =>$data['title_banner'],
					'link_banner' => $data['link_banner'],
					'caption_banner' => $data['caption_banner'],
	        'image_banner' => 'asset/images/banner/'.$upload_data['orig_name']
	      );
	    $this->db->insert('banner',$array);
	    return 1;
	  }
	    function editbanner($data,$upload_data,$id){
	      $array = array(
					'title_banner' =>$data['title_banner'],
					'link_banner' => $data['link_banner'],
					'caption_banner' => $data['caption_banner'],

				);

	      if($upload_data!=false){
	      	$array['image_banner'] = 'asset/images/banner/'.$upload_data['orig_name'];
	      }
	      $this->db->where('id_banner',$id);
	      $this->db->update('banner',$array);
	      return 1;
	    }

			function fetchBannerSearch($data) {
				$this->db->like($data['by'],$data['search']);
				$this->db->order_by('title_banner','DESC');
				$this->db->join('user','user.id_user = banner.id_user');
		    $query = $this->db->get('banner');
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

}
