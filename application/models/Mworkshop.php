<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mworkshop extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchWorkshop($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);
		$this->db->join('category','workshop.id_category = category.id_category');
    $this->db->order_by('date_insert','DESC');
    $query = $this->db->get('workshop');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllWorkshop() {
    return $this->db->count_all("workshop");
  }

  function saveWorkshop($data,$upload_data){
    $array = array(
				'id_category' => $data['category'],
				'image_workshop' => 'asset/images/workshop/'.$upload_data['orig_name'],
				'workshop_title' => $data['workshop_title'],
				'course_fee' => $data['course_fee'],
        'workshop_description' => $data['workshop_description'],
        'hour_start' => $data['hour_start'],
        'hour_end' => $data['hour_end'],
        'location' => $data['location'],
        'link_form' => $data['link_form'],
        'date_workshop' => date('Y-m-d',strtotime($data['date_workshop'])),
        'date_insert' => date('Y-m-d H:i:s')
      );
    $this->db->insert('workshop',$array);
    return 1;
  }
    function editWorkshop($data,$upload_data,$id){
      $array = array(
				'id_category' => $data['category'],
				'workshop_title' => $data['workshop_title'],
				'course_fee' => $data['course_fee'],
				'workshop_description' => $data['workshop_description'],
				'hour_start' => $data['hour_start'],
				'hour_end' => $data['hour_end'],
				'location' => $data['location'],
        		'link_form' => $data['link_form'],
				'date_workshop' => date('Y-m-d',strtotime($data['date_workshop']))
        );
				if($upload_data!=false){
					$array['image_workshop'] = 'asset/images/workshop/'.$upload_data['orig_name'];
				}
		

      $this->db->where('id_workshop',$id);
      $this->db->update('workshop',$array);
      return 1;
    }
		function fetchWorkshopSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('date_insert','DESC');
	    $query = $this->db->get('workshop');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}
		function getworkshop($id){
			$this->db->join('category','category.id_category = workshop.id_category');
			$this->db->where('id_workshop',$id);
			$query = $this->db->get('workshop');
			if($query->num_rows()>0){
				return $query->row_array();
			}
			else return false;
		}
		function fetchAllCategory(){
			$query = $this->db->get('category');
			if($query->num_rows()>0){
				return $query->result();
			}
			else return FALSE;
		}
}
