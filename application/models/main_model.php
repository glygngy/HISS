<?php

class Main_model extends CI_Model{


	public function login_check($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$res=$this->db->get('users');
		return $res->row_array();
	}

	public function check_login($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',md5($pass));
		$res=$this->db->get('users');
		if($res->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_password($pass,$uid){
		$this->db->where('user_id',$uid);
		$this->db->where('password',md5($pass));
		$res=$this->db->get('users');
		if($res->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function update_password($data,$id){
		$this->db->where('user_id',$id);
		$this->db->update('users',$data);
	}

	public function get_accounts($id){
		$res = $this->db->query("SELECT * FROM (`users`) WHERE `user_id` != $id");
		return $res->result();
	}


	public function check_username($username){
		$this->db->where('username',$username);
		$res=$this->db->get('users');
		if($res->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function add_user($data){
		$this->db->insert('users',$data);
	}

	

}
?>




