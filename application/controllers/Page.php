<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->template->load('template','page/home');
	}

	public function registrasi()
	{
		$this->template->load('template','page/registrasi');
	}

	public function login()
	{
		$this->template->load('template','page/login');
	}

	public function career()
	{
		$this->db->order_by('id' ,'DESC');
		$data['careers'] = $this->db->get('info_loker')->result();
		$this->template->load('template','page/career',$data);
	}

	public function cara_apply()
	{
		$this->template->load('template','page/career/cara_apply');
	}
	
	public function doc_pelamar()
	{
		$this->template->load('template','page/career/doc_pelamar');
	}

	public function klasifikasi()
	{
		$this->template->load('template','page/career/klasifikasi');
	}

	public function visi_misi()
	{
		$this->template->load('template','page/visi_misi');
	}

	public function partner()
	{
		$this->template->load('template','page/partner');
	}
	public function test_online()
	{
		$query = $this->db->get_where('hasil_test',['username' => $this->session->userdata('username')])->row();

		if($query) {
			$data['result'] = $query;
			$this->template->load('template','page/test_complete',$data);
		} else {
			$this->template->load('template','page/test_uncomplete');
		}
	}

	public function test($no)
	{
		$next = $no+1;
		$soal_lanjut = $this->db->get_where('test_online',['nomor' => $next])->row();
		if($soal_lanjut) {
			$lanjut = 'lanjut';
		} else {
			$lanjut = 'selesai';
		}
		$data['soal'] = $this->db->get_where('test_online',['nomor' => $no])->row();
		$data['selanjut'] = $lanjut;
		$data['next'] = $next;
		$this->template->load('template','page/test',$data);
	}

	public function submit_jawaban()
	{
		$soal = $this->db->get_where('test_online',['id' => $this->input->post('id_soal')])->row();
		if($soal->jawaban == $this->input->post('jawaban')) {
			$correct = 1;
		} else {
			$correct = 0;
		}
		$data = [
			'username'			=> $this->session->userdata('username'),
			'id_soal'			=> $this->input->post('id_soal'),
			'jawaban'			=> $this->input->post('jawaban'),
			'correct'			=> $correct,
		];

		$this->db->insert('jawaban',$data);

		if($this->input->post('next') != 'selesai') {
			redirect('page/test/'.$this->input->post('next'));
		}
		else {
			$this->db->where(['username' => $this->session->userdata('username')]);
			$d = $this->db->get('jawaban')->result();
			$benar = 0;
			foreach($d as $correct) {
				if($correct->correct == 1) {
					$benar += 1;
				}
			}
			$result = $benar*40;
			$data = [
				'username'		=> $this->session->userdata('username'),
				'hasil'			=> $result,
				'tanggal'		=> date('Y-m-d'),
			];
			$this->db->insert('hasil_test',$data);

			redirect('page/result_test');
		}
		
	}

	public function result_test()
	{
		$data['profil'] = $this->db->get_where('registrasi',['username' => $this->session->userdata('username')])->row();
		$data['result'] = $this->db->get_where('hasil_test',['username' => $this->session->userdata('username')])->row();
		$this->template->load('template','page/result_test',$data);
	}

	public function cetak_result()
	{
		$data['profil'] = $this->db->get_where('registrasi',['username' => $this->session->userdata('username')])->row();
		$data['result'] = $this->db->get_where('hasil_test',['username' => $this->session->userdata('username')])->row();
		$this->load->view('page/cetak_result',$data);
	}
}
