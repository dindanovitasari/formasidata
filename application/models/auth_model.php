<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Auth_model extends CI_Model {
		public function cek($u,$p)
	{
		$data=array('username'=>$u,'password'=>$p);
		$q=$this->db->get_where('users',$data);
		$r=$q->row();
		$us=$r->username;
		$pas=$r->password;
		$uid=$r->id;
		if ( $u == $us  && $p == $pas) 
		{
			$ud=array('username'=>$us,'id'=>$uid,'login_state'=>TRUE);
			session_start();
			$this->session->set_userdata($ud);
			redirect ('admin/');
		}
		  
		else 
		{
			redirect ('auth/');
		}	
	}  
		
	public function check_session(){
		if ($this->session->userdata('id') AND $this->session->userdata('login_state')==TRUE) 
		{
			return TRUE;
		} 
		else 
		{
			return FALSE;
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('login_state');
		session_destroy();
		}
}