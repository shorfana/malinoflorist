<?php
/**
 *
 */
class Dbs extends CI_Model
{
	//fungsi untuk mengecek apakah didalam tabel ada data atau tidak
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function getUserId($username){
    $query = $this->db->get_where('user', array('username' => $username));
		return $query->row();
	}

}
 ?>
