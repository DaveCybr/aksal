<?php

class Logout extends Controller{
	public function index(){
		session_start();
		session_destroy();
		header('location: '. base_url . '/Login');	
	}
}