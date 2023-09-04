<?php

class User extends Controller {
	// public function __construct()
	// {	
	// 	if($_SESSION['session_login'] != 'sudah_login') {
	// 		Flasher::setMessage('Login','Tidak ditemukan.','danger');
	// 		header('location: '. base_url . '/login');
	// 		exit;
	// 	}
	// } 
	public function index()
	{
		$data['title'] = 'Data User';
		$data['user'] = $this->model('UserModel')->getAllUser();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/topbar', $data);
		$this->view('user/index', $data);
		$this->view('templates/footer');
	}
	// public function cari()
	// {
	// 	$data['title'] = 'Data User';
	// 	$data['user'] = $this->model('UserModel')->cariUser();
	// 	$data['key'] = $_POST['key'];
	// 	$this->view('templates/header', $data);
	// 	$this->view('templates/sidebar', $data);
	// 	$this->view('user/index', $data);
	// 	$this->view('templates/footer');
	// }

	public function edit($id){

		$data['title'] = 'Edit User';
		$data['user'] = $this->model('UserModel')->getUserById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/edit', $data);
		$this->view('templates/footer');
	}

	public function create(){
		$data['title'] = 'Tambah User';		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/create', $data);
		$this->view('templates/footer');
	}

	public function save(){		
		if($this->model('UserModel')->tambah($_POST)>0){
			Flasher::setMessage('Berhasil','ditambah','success');
			header('location'.base_url. '/User');
		}
	}

	public function update(){	
			if( $this->model('UserModel')->updateDataUser($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/User');
			exit;			
			}else{
				Flasher::setMessage('Gagal','diupdate','danger');
				header('location: '. base_url . '/User');
				exit;	
			}

	}

	public function hapus($id){
		if( $this->model('UserModel')->deleteUser($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/User');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/User');
			exit;	
		}
	}
}
