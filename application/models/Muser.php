<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchUser($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);

    $this->db->order_by('date_register','DESC');
    $query = $this->db->get('user');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllUser() {
    return $this->db->count_all("user");
  }

  function saveUser($data){
    $array = array(
        'username' => $data['username'],
        'password' => md5($data['password']),
        'email' => $data['email'],
        'full_name' => $data['full_name'],
				'gender' => $data['gender'],
        'address' => $data['address'],
        'country' => $data['country'],
        'province' => $data['province'],
        'city' => $data['city'],
        'about_user' => $data['about_user'],
				'status_user' => $data['status_user'],
        'phone_number' => $data['phone_number'],
        'date_register' => date('Y-m-d H:i:s'),
        'permission' => $data['permission']
      );
    $this->db->insert('user',$array);
    return 1;
  }
    function editUser($data,$id){
      $array = array(
          'username' => $data['username'],
          'email' => $data['email'],
          'full_name' => $data['full_name'],
					'gender' => $data['gender'],
          'address' => $data['address'],
          'country' => $data['country'],
          'province' => $data['province'],
          'city' => $data['city'],
          'about_user' => $data['about_user'],
					'status_user' => $data['status_user'],
          'phone_number' => $data['phone_number'],
          'permission' => $data['permission']
        );
			if($data['password']!="")
			$array['password']=md5($data['password']);

      $this->db->where('id_user',$id);
      $this->db->update('user',$array);
      return 1;
    }
		function saveCreator($data){
	    $array = array(
	        'username' => $data['username'],
	        'password' => md5($data['password']),
	        'email' => $data['email'],
	        'full_name' => $data['full_name'],
					'organization_name' => $data['organization_name'],
					'phone_number' =>$data['phone_number'],
					'mobile' => $data['mobile'],
	        'address' => $data['address'],
	        'date_register' => date('Y-m-d H:i:s'),
	        'permission' => 0
	      );
	    $this->db->insert('user',$array);
	    return 1;
	  }
		function saveLearner($data){
	    $array = array(
	        'username' => $data['username'],
	        'password' => md5($data['password']),
	        'email' => $data['email'],
	        'date_register' => date('Y-m-d H:i:s'),
	        'permission' => 2
	      );
	    $this->db->insert('user',$array);
	    return 1;
	  }
		function fetchUserSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('date_register','DESC');
	    $query = $this->db->get('user');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}
		function validLogin($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',md5($password));
    $this->db->where('permission != ',1);;
      $query = $this->db->get('user');
    if($query->num_rows()>0){
      return $query->row_array();
    }
    else return false;
  }
}
