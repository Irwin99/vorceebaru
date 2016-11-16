<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpayment extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchPayment($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);
	  $this->db->order_by('name_payment','DESC');
    $query = $this->db->get('payment');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllpayment() {
    return $this->db->count_all("payment");
  }

  function savePayment($data){
    $array = array(
        'name_payment' => $data['name_payment'],
        'account_name' => $data['account_name'],
				'account_number' => $data['account_number']



      );
    $this->db->insert('payment',$array);
    return 1;
  }
    function editPayment($data,$id){
      $array = array(
				'name_payment' => $data['name_payment'],
        'account_name' => $data['account_name'],
				'account_number' => $data['account_number']
			);


      $this->db->where('id_payment',$id);
      $this->db->update('payment',$array);
      return 1;
    }

		function fetchPaymentSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('name_payment','DESC');
	    $query = $this->db->get('payment');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}

		function fetchAllPayment(){
			$query = $this->db->get('payment');
			if($query->num_rows()>0){
				return $query->result();
			}
			else return FALSE;
		}






}
