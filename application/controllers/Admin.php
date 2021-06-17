<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');

	}
	/*
	 * Show Login page
	 * 
	 */
	public function login()
	{
		$this->template->load('template','page/admin/login');
	}

	/*
	 * Process Login request method post
	 *
	 */
	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		# get user by username
		$user = $this->db->get_where('admin_login',['username' => $username])->row();

		# if user exists
		if($user) {

			#verify hash password
			if(password_verify($password, $user->password)) {
				
				# set session data
				$data = [
					'username' 	=> $user->username,
					'role'	=> 'admin'
				];
				$this->session->set_userdata($data);

				redirect('admin/test');
			} else {
				alerterror('message','Password salah');
				redirect('admin/login');
			}
		} 
		# user not found redirect to login page
		else {
			alerterror('message','Username tidak ditemukan');
			redirect('admin/login');
		}
	}

	public function test()
	{
		is_admin();
		$this->db->order_by('nomor');
		$data['soals'] = $this->db->get('test_online')->result();
		$this->template->load('template','page/admin/test',$data);
	}

	public function soal_add()
	{
		is_admin();
		if($this->form_validation->run('soal') == false) {
	      $this->template->load('template','page/admin/create_soal');
	    } else {
	      $data = [
	        'nomor'  		=> $this->input->post('nomor'),
	        'soal'      	=> $this->input->post('soal'),
	        'a'       		=> $this->input->post('a'),
	        'b' 			=> $this->input->post('b'),
	        'c' 			=> $this->input->post('c'),
	        'jawaban' 		=> $this->input->post('jawaban'),
	        'tanggal'   	=> date('Y-m-d'),
	      ];
	      $this->db->insert('test_online',$data);
	      alertsuccess('message','Data berhasil ditambahkan');
	      redirect('admin/test');
	    }
	}
	public function soal_edit($id)
	{
		is_admin();
		if($this->form_validation->run('soal') == false) {
		  $data['soal'] = $this->db->get_where('test_online',['id' => $id])->row();
	      $this->template->load('template','page/admin/edit_soal',$data);
	    } else {
	      $data = [
	        'nomor'  		=> $this->input->post('nomor'),
	        'soal'      	=> $this->input->post('soal'),
	        'a'       		=> $this->input->post('a'),
	        'b' 			=> $this->input->post('b'),
	        'c' 			=> $this->input->post('c'),
	        'jawaban' 		=> $this->input->post('jawaban'),
	        'tanggal'   	=> date('Y-m-d'),
	      ];
	      $this->db->update('test_online',$data,['id' => $id]);
	      alertsuccess('message','Data berhasil diubah');
	      redirect('admin/test');
	    }
	}

	public function soal_del($id)
	{
		is_admin();
		$this->db->delete('test_online',['id' => $id]);

		alertsuccess('message','Data berhasil dihapus');
		redirect('admin/test');
	}

	public function hasil_test()
	{
		is_admin();
		$this->db->order_by('id','DESC');
		$data['hasils'] = $this->db->get('hasil_test')->result();
		$this->template->load('template','page/admin/hasil_test',$data);
	}

	public function cetak_hasil()
	{
		is_admin();
		$data['hasils'] = $this->db->get('hasil_test')->result();
		$this->load->view('page/admin/cetak_hasil',$data);
	}

	public function career()
	{
		is_admin();
		$this->db->order_by('id','DESC');
		$data['careers'] = $this->db->get('info_loker')->result();
		$this->template->load('template','page/admin/career',$data);
	}

	public function career_add()
	{
		is_admin();
	    if($this->form_validation->run('career') == false) {
	      $this->template->load('template','page/admin/create_career');
	    } else {
	      $data = [
	        'info'  		=> $this->input->post('info'),
	        'jabatan'      	=> $this->input->post('jabatan'),
	        'bagian'       	=> $this->input->post('bagian'),
	        'tanggal_akhir' => $this->input->post('tgl_akhir'),
	        'tanggal'   	=> date('Y-m-d'),
	      ];
	      $this->db->insert('info_loker',$data);
	      alertsuccess('message','Data berhasil ditambahkan');
	      redirect('admin/career');
	    }
	}
	public function career_edit($id)
	{
		is_admin();
	    if($this->form_validation->run('career') == false) {

	      $data['career'] = $this->db->get_where('info_loker',['id' => $id])->row();
	      $this->template->load('template','page/admin/edit_career',$data);
	    
	    } else {
	      $data = [
	        'info'  		=> $this->input->post('info'),
	        'jabatan'      	=> $this->input->post('jabatan'),
	        'bagian'       	=> $this->input->post('bagian'),
	        'tanggal_akhir' => $this->input->post('tgl_akhir'),
	        'tanggal'   	=> date('Y-m-d'),
	      ];
	      $this->db->update('info_loker',$data,['id' => $id]);
	      alertsuccess('message','Data berhasil diubah');
	      redirect('admin/career');
	    }
	}

	public function career_del($id)
	{
		is_admin();
		$this->db->delete('info_loker',['id' => $id]);

		alertsuccess('message','Data berhasil dihapus');
		redirect('admin/career');
	}




	

}