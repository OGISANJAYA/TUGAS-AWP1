<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_model extends CI_Model {

	/*
	Contoh CRUD Aplikasi Buku Tamu
	Oleh OgiSanjaya
	*/
	public function GetData($where = '')
	{
		return $this->db->query("select * from guestbook $where;");
	}
	
	public function InsertData($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	
	public function UpdateData($table,$data,$where)
	{
		return $this->db->update($table,$data,$where);
	}
	
	public function DeleteData($table,$where)
	{
		return $this->db->delete($table,$where);
	}
}
?>