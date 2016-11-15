<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mads extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

		function fetchAds($limit,$start,$pagenumber) {

	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);

	    $this->db->order_by('date_ads','DESC');
			$this->db->join('user','user.id_user = ads.id_user');
	    $query = $this->db->get('ads');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	  }
	  function countAllads() {
	    return $this->db->count_all("ads");
	  }

		function saveAds($data,$upload_data){
	    $array = array(
					'id_user' => $this->session->userdata('idAdmin'),
	        'name_ads' =>$data['name_ads'],
					'link_ads' => $data['link_ads'],
					'description_ads' => $data['description_ads'],
					'fee_ads' => $data['fee_ads'],
					'price_ads' =>$data['price_ads'],
					'current_price'=>$data['current_price'],
	        'image_ads' => 'asset/images/ads/'.$upload_data['orig_name'],
					'date_ads' => date('Y-m-d H:i:s')
	      );
	    $this->db->insert('ads',$array);
	    return 1;
	  }
	    function editAds($data,$upload_data,$id){
	      $array = array(
					'name_ads' =>$data['name_ads'],
					'link_ads' => $data['link_ads'],
					'description_ads' => $data['description_ads'],
					'fee_ads' => $data['fee_ads'],
					'price_ads' =>$data['price_ads'],
					'current_price'=>$data['current_price'],
				);

	      if($upload_data!=false){
	      	$array['image_ads'] = 'asset/images/ads/'.$upload_data['orig_name'];
	      }
	      $this->db->where('id_ads',$id);
	      $this->db->update('ads',$array);
	      return 1;
	    }

			function fetchAdsSearch($data) {
				$this->db->like($data['by'],$data['search']);
				$this->db->order_by('date_ads','DESC');
				$this->db->join('user','user.id_user = ads.id_user');
		    $query = $this->db->get('ads');
		    if($query->num_rows()>0){
		      return $query->result();
		    }
		    else return FALSE;
			}

			function fetchHitAds($limit,$start,$pagenumber) {

				if($pagenumber!="")
					$this->db->limit($limit,($pagenumber*$limit)-$limit);
				else
					$this->db->limit($limit,$start);

				$this->db->order_by('date_hit','DESC');
				$this->db->join('user','user.id_user = hit_ads.id_user');
				$this->db->join('ads','ads.id_ads = hit_ads.id_ads');
				$query = $this->db->get('hit_ads');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}
			function countAllhitads() {
				return $this->db->count_all("hit_ads");
			}

			function saveHitAds($data,$upload_data){
				$array = array(
						'id_user' => $this->session->userdata('idAdmin'),
						'id_ads' =>$data['ads'],
						'ip_address' => $data['ip_address'],
						'date_hit' => date('Y-m-d H:i:s')
					);
				$this->db->insert('hit_ads',$array);
				return 1;
			}
				function editHitAds($data,$id){
					$array = array(
						'id_ads' =>$data['ads'],
						'ip_address' => $data['ip_address']
					);

					$this->db->where('id_ads',$id);
					$this->db->update('hit_ads',$array);
					return 1;
				}

				function fetchHitAdsSearch($data) {
					$this->db->like($data['by'],$data['search']);
					$this->db->order_by('date_hit','DESC');
					$this->db->join('user','user.id_user = hit_ads.id_user');
					$this->db->join('ads','ads.id_ads = hit_ads.id_ads');
					$query = $this->db->get('hit_ads');
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

			function fetchAllAds(){
				$query = $this->db->get('ads');
				if($query->num_rows()>0){
					return $query->result();
				}
				else return FALSE;
			}


}
