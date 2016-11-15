<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msetting extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchsetting($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
    $this->db->limit($limit,$start);
	  $this->db->order_by('partner','DESC');
    $query = $this->db->get('setting');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }

    function editSetting($data,$id=1){
      $array = array(
				'title_website' => $data['title_website'],
				'about' => $data['about'],
				'address' => $data['address'],
				'campaign_report' => $data['campaign_report'],
				'phone_number' => $data['phone_number'],
				'partner' => $data['partner'],
				'achievement' =>$data['achievement']

			);


      $this->db->where('id_setting',$id);
      $this->db->update('setting',$array);
      return 1;
    }

		function fetchAllUser(){
			$query = $this->db->get('user');
			if($query->num_rows()>0){
				return $query->result();
			}
			else return FALSE;
		}





}
