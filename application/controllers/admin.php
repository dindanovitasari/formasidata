<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if($this->Auth_model->check_session()== FALSE){
			redirect('auth/');
			}
	}
	
	function index()
	{
		$this->load->view('admin/dashboard');
	}
	
	function logout()
	{
		$this->Auth_model->logout();
		redirect('auth/');
	}

//================================== MANAGEMENT MAJOR ===============================
	function major()
	{	
		$data['major']=$this->Admin_model->get_all_major();
		$this->load->view('admin/major',$data);
	}
	
	function add_major()
	{
		$data['faculty']=$this->Admin_model->get_faculty();
		$this->load->view('admin/major_add',$data);
	}
	
	function update_major()
	{
		$id = $this->uri->segment(3);
		$data['faculty']=$this->Admin_model->get_faculty();
		$data['major']=$this->Admin_model->get_detail_major($id);
		$this->load->view('admin/major_update', $data);
	}
	
	function save_major()
	{
		$id_major	=	$this->input->post('id_major');
		$id_faculty	=	$this->input->post('id_faculty');
		$major		=	$this->input->post('major');
		$status		=	$this->input->post('status');
		
		$data	=	array(
					'id_faculty'=> $id_faculty,
					'major'	=> $major
				);
		
		if ($status	==	'new'){
			$this->Admin_model->insert('majors',$data);
			redirect('admin/major');
		}
		else{
			$this->Admin_model->update('majors',$data,array('id_major'=>$id_major));
			redirect('admin/major');
		}
	}
	
//================================== MANAGEMENT FACULTIES ===================================	
	
	function faculty()
	{
		$data['faculty']=$this->Admin_model->get_faculty();
		$this->load->view('admin/faculty',$data);
	}
	
	function add_faculty()
	{
		$this->load->view('admin/faculty_add');
	}
	
	function update_faculty()
	{
		$id = $this->uri->segment(3);
		$data['faculty']=$this->Admin_model->get_detail_faculty($id);
		$this->load->view('admin/faculty_update', $data);
	}
	
	function save_faculty()
	{
		$id_faculty	=	$this->input->post('id_faculty');
		$faculty	=	$this->input->post('faculty');
		$status		=	$this->input->post('status');
		
		$data	=	array(
						'faculty'=>$faculty
					);
		
		if ($status=='new'){
			$this->Admin_model->insert('faculties',$data);
			redirect('admin/faculty');
			}
		else {
			$this->Admin_model->update('faculties',$data,array('id_faculty' => $id_faculty));
			redirect('admin/faculty');
			}
	}
//================================== MANAGEMENT MEMBERS ===================================
	function member()
	{	
		$data['member']=$this->Admin_model->get_member();
		$this->load->view('admin/member',$data);
	}
	
	function add_member()
	{
		$data['faculty']=$this->Admin_model->get_faculty();
		$data['major']=$this->Admin_model->get_major();
		$data['stat']=$this->Admin_model->get_status();
		$this->load->view('admin/member_add',$data);
	}
	
	function update_member()
	{
		$id = $this->uri->segment(3);
		$data['faculty']=$this->Admin_model->get_faculty();
		$data['major']=$this->Admin_model->get_major();
		$data['stat']=$this->Admin_model->get_status();
		$data['member']=$this->Admin_model->get_detail_member($id);
		$this->load->view('admin/member_update', $data);
	}
	
	function save_member()
	{
		$id_member	=	$this->input->post('id_member');
		$name		=	$this->input->post('name');
		$nim		=	$this->input->post('nim');
		$id_major	=	$this->input->post('id_major');
		$id_faculty	=	$this->input->post('id_faculty');
		$phone		=	$this->input->post('phone');
		$birthdate	=	strtotime($this->input->post('birthdate'));
		$birthdate 	= 	date('Y-m-d', $birthdate);
		$address	=	$this->input->post('address');
		$stat		=	$this->input->post('id_stat');
		$status		=	$this->input->post('status');
		
		
		
		if ($status=='new'){
			$tahun 		= date("Y");
			$query	 	= mysql_query("select * from members where
						substr(id_formasi,1,4) = '$tahun' order by id_formasi desc");
			$data 		= mysql_fetch_assoc($query);
			$id_old 	= $data['id_formasi'];
			if(mysql_num_rows($query) == 0){
				$id_member = $tahun."0001";
			}
			else{
				$id_member = $this->getId($id_old);
			}
			//echo $id_old.$id_member;
			$data	=	array(
					'id_formasi'=>$id_member,
					'name'=>$name,
					'nim'=>$nim,
					'id_major'=>$id_major,
					'id_faculty'=>$id_faculty,
					'phone'=>$phone,
					'birthdate'=>$birthdate,
					'address'=>$address,
					'id_stat'=>$stat
					);
			$this->Admin_model->insert('members',$data);
			redirect('admin/member');
			}
		else {
			$data	=	array(
					'id_formasi'=>$id_member,
					'name'=>$name,
					'nim'=>$nim,
					'id_major'=>$id_major,
					'id_faculty'=>$id_faculty,
					'phone'=>$phone,
					'birthdate'=>$birthdate,
					'address'=>$address,
					'id_stat'=>$stat
					);
			$this->Admin_model->update('members',$data,array('id_formasi' => $id_member));
			redirect('admin/member');
			}
	}
	function getId($id_old)
	{
		$tahun 		= date("Y");
		$jumlah_mhs 	= substr($id_old,4,4);
		$hasil 		= $jumlah_mhs + 1;
		$pk_n 		= strlen($hasil);
		if($pk_n == 1){
			$jumlah_mhs = "000".$hasil;
			}
		else if($pk_n == 2){
			$jumlah_mhs = "00".$hasil;
			}
		else if($pk_n == 3){
			$jumlah_mhs = "0".$hasil;
		}
		else if($pk_n == 4){
			$jumlah_mhs = $hasil;
		}
		else{
			$jumlah_mhs = "Data Error";
		}
		return $id_member = $tahun.$jumlah_mhs;
	}

}