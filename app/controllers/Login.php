<?php

class Login extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Login';

		$this->view('auth/login', $data);
	}

	public function prosessLogin() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data['cekuser'] = $this->model('UserModel')->cekUsername($username);
		if($data['cekuser']['username'] != $username){
			Flasher::setMessage('Gagal', 'Username tidak terdaftar!', 'danger');
			header('location: '. base_url . '/Login');
		}else{
			$pw = $data['cekuser']['password'];
			if($pw == $password){
				$_SESSION = $data['cekuser'];
				$_SESSION['session_login'] = 'sudah_login'; 

				header('location: '. base_url . '/Home');
			} else {
				Flasher::setMessage('Gagal', 'Password salah!', 'danger');
				header('location: '. base_url . '/Login');	
			}
		}
	
	}
}
