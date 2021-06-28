<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller  
{
	public function index()
	{

	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('registrasi',['username' => $username])->row();

		if($user) {
			if(password_verify($password, $user->password)) {
				$data = [
					'username' 	=> $user->username,
				];
				$this->session->set_userdata($data);

				redirect('page/cara_apply');
			} else {
				alerterror('message','Password salah');
				redirect('page/login');
			}
		} else {
			alerterror('message','Username tidak ditemukan');
			redirect('page/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		alertsuccess('message','Logout berhasil');
		redirect('page/login');
	}
	public function registrasi()
	{
		if(! empty($_FILES['foto_pelamar']['name'])) {
			$foto_pelamar = $this->_uploadImage('foto_pelamar');
		} else {
			$foto_pelamar = 'default.png';
		}
		$data = [
			'username'			=> $this->input->post('username',true),
			'password'			=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'nama_lengkap'		=> $this->input->post('nama',true),
			'tgl_lahir'			=> $this->input->post('tgl_lahir',true),
			'agama'				=> $this->input->post('agama',true),
			'kewarganegaraan'	=> $this->input->post('kewarganegaraan',true),
			'jenjang_pendidikan'=> $this->input->post('jenjang_pendidikan',true),
			'pas_foto_ijazah'	=> $foto_ijazah,
			'umur'				=> $this->input->post('umur',true),
			'status'			=> $this->input->post('status',true),
			'jenis_kelamin'		=> $this->input->post('jk',true),
			'alamat_lengkap'	=> $this->input->post('alamat',true),
			'no_hp'				=> $this->input->post('no_hp',true),
			'pas_foto'			=> $foto_pelamar,
			'tanggal'			=> date('Y-m-d'),
		];

		$this->db->insert('registrasi',$data);

		alertsuccess('message','Berhasil registrasi, silahkan login dengan akun yang baru anda buat');
		redirect('page/login');

	}
 
	private function _uploadImage($name)
	 {
	    $config['upload_path']          = './assets/img/pelamar/';
	    $config['allowed_types']        = 'gif|jpg|png|pdf';
	    $config['file_name']            = time().uniqid();
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload($name)) { 
	      $filename =  $this->upload->data("file_name");
	    } else {
	      $filename = 'default.png';
	    }
	    $data = [
	      'image' => $filename,
	    ];

	    return $filename;
  	}

  	public function profil()
  	{
  		$data['profile'] = $this->db->get_where('registrasi',['username' => $this->session->userdata('username')])->row();
  		$this->template->load('template','page/profile',$data);
  	}

  	public function update_profile()
  	{
  		
		$data = [
			'nama_lengkap'		=> $this->input->post('nama',true),
			'tgl_lahir'			=> $this->input->post('tgl_lahir',true),
			'agama'				=> $this->input->post('agama',true),
			'kewarganegaraan'	=> $this->input->post('kewarganegaraan',true),
			'jenjang_pendidikan'=> $this->input->post('jenjang_pendidikan',true),
			'umur'				=> $this->input->post('umur',true),
			'status'			=> $this->input->post('status',true),
			'jenis_kelamin'		=> $this->input->post('jk',true),
			'alamat_lengkap'	=> $this->input->post('alamat',true),
			'no_hp'				=> $this->input->post('no_hp',true),
			'tanggal'			=> date('Y-m-d'),
		];

		if(! empty($_FILES['foto_ijazah']['name'])) {
			$data['pas_foto_ijazah'] = $this->_uploadImage('foto_ijazah');
		} 
		if(! empty($_FILES['foto_pelamar']['name'])) {
			$data['pas_foto'] = $this->_uploadImage('foto_pelamar');
		}

		$this->db->update('registrasi',$data,['username' => $this->session->userdata('username')]);

		alertsuccess('message','Berhasil mengupdate profile');
		redirect('pelamar/profil');
  	}

  	public function apply($id)
  	{
  		$data['id_loker'] = $id;
  		$this->template->load('template','page/career/doc_pelamar',$data);
  	}

  	public function upl_cv()
  	{
  		if(! empty($_FILES['cv']['name'])) {
			$cv = $this->_uploadImage('cv');
		} else {
			$cv = 'default.png';
		}

		$data = [
			'id_loker'		=> $this->input->post('id_loker',true),
			'username'		=> $this->session->userdata('username'),
			'name'			=> $this->input->post('name',true),
			'cv'			=> $cv,
		];

		$this->db->insert('curiculum_vitae',$data);
		alertsuccess('message','Data terkirim lengkap silahkan mengikuti test online');
		redirect('page/cara_apply');
  	}

}