<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	
	function get_major()
	{
		$sql = "SELECT * FROM majors";
		return $this->db->query($sql);
	}
	
	function get_faculty()
	{
		$sql = "SELECT * FROM faculties";
		return $this->db->query($sql);
	}
	
	function get_status()
	{
		$sql = "SELECT * FROM statuses";
		return $this->db->query($sql);
	}
	
	function get_member()
	{
		$sql = "SELECT 
		members.id_formasi,
		members.name,
		members.nim,
		majors.major,
		faculties.faculty,
		members.phone,
		members.birthdate,
		members.address,
		statuses.stat
		FROM members
		INNER JOIN majors ON majors.id_major = members.id_major
		INNER JOIN faculties ON faculties.id_faculty = members.id_faculty
		INNER JOIN statuses ON statuses.id_stat = members.id_stat
		";
		return $this->db->query($sql);
	}
	
	function get_all_major()
	{
		$sql = "SELECT 
		majors.id_major,
		majors.major,
		faculties.faculty
		FROM majors
		INNER JOIN faculties ON faculties.id_faculty = majors.id_faculty
		";
		return $this->db->query($sql);
	}
	
	function get_detail_major($id)
	{
		$sql="SELECT * FROM majors
		WHERE id_major='$id'";
		return $this->db->query($sql);
	}	
		 
	function get_detail_faculty($id)
	{
		$sql="SELECT * FROM faculties
		WHERE id_faculty='$id'";
		return $this->db->query($sql);
	}
	
	function get_detail_member($id)
	{
		$sql = "SELECT * FROM members
		WHERE id_formasi='$id'
		";
		return $this->db->query($sql);
	}

	function insert($tabel,$data)
	{
		return $this->db->insert($tabel,$data);
	}
		
	function update($tabel,$data,$where)
	{
		return $this->db->update($tabel,$data,$where);
	}
	
	function delete($tabel,$where)
	{
		return $this->db->delete($tabel,$where);
	}
	
}	