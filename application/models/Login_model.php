<?php
class Login_model extends CI_Model{
	//cek id dan password user
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM user WHERE id='$username' AND pass='$password' LIMIT 1");
		return $query;
	}
}
