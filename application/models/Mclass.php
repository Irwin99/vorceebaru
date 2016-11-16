<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mclass extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchClass($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);
	  $this->db->order_by('date_class','ASC');
    $query = $this->db->get('class');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllclass() {
    return $this->db->count_all("class");
  }

  function saveClass($data){
    $array = array(
        'title_class' => $data['title_class'],
        'description_class' => $data['description_class'],
				'date_class' => $data['date_class'],
				'time_class' => $data['time_class'],
				'place_class' => $data['place_class']
      );
    $this->db->insert('class',$array);
    return 1;
  }
    function editClass($data,$id){
      $array = array(
				'title_class' => $data['title_class'],
        'description_class' => $data['description_class'],
				'date_class' => $data['date_class'],
				'time_class' => $data['time_class'],
				'place_class' => $data['place_class']
			);


      $this->db->where('id_class',$id);
      $this->db->update('class',$array);
      return 1;
    }

		function fetchClassSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('name_class','DESC');
	    $query = $this->db->get('class');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}

		function fetchAllClass(){
			$query = $this->db->get('class');
			if($query->num_rows()>0){
				return $query->result();
			}
			else return FALSE;
		}

		function getClass($id){
			$query = $this->db->get('class');
		if($query->num_rows()>0){
			return $query->row_array();
		}
		else return FALSE;

		}





}
