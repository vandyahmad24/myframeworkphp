<?php

/**
 * 
 */
class Mahasiswa extends Controller
{
	
	public function index()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data["mhs"] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('template/header',$data);
		$this->view('mahasiswa/index',$data);
		$this->view('template/footer');
	}
	public function detail($id)
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data["mhs"] = $this->model('Mahasiswa_model')->getMahasiswaId($id);

		$this->view('template/header',$data);
		$this->view('mahasiswa/detail',$data);
		$this->view('template/footer');
	}
	public function tambah()
	{
		if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)>0){
			Notifikasi::setFlash('Berhasil','di Tambahkan', 'success');
			header('Location:'.BASE_URL.'/mahasiswa');
			exit;
		}else{
			Notifikasi::setFlash('Gagal','di Tambahkan', 'danger');
			header('Location:'.BASE_URL.'/mahasiswa');
		}
	}
	public function delete($id)
	{
		if($this->model('Mahasiswa_model')->deleteDataMahasiswa($id)>0){
			Notifikasi::setFlash('Berhasil','di Hapus', 'danger');
			header('Location:'.BASE_URL.'/mahasiswa');
			exit;
		}else{
			Notifikasi::setFlash('Gagal','di Hapus', 'warning');
			header('Location:'.BASE_URL.'/mahasiswa');
		}
	}
}

