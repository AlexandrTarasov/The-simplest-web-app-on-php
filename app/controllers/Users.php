<?php

class Users extends Controller{
	public function __construct()
	{
		$this->userModel = $this->model('User');

	}
	public function register()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$data = [
				'name' => trim($_POST['name']),
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'confirm_password' => trim($_POST['confirm_password']),
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => '',
			];
			if(empty($data['email'])){
				$data['email_err'] = 'Введите мэйл';
			} else {
				if( $this->userModel->findUserByEmail($data['email']) ){
					$data['email_err'] = 'Мэйл уже зарегистрирован';
				}
			}

			if(empty($data['name'])){
				$data['name_err'] = 'Введите имя';
			}

			if(empty($data['password'])){
				$data['password_err'] = 'Введите пароль';
			}elseif(strlen($data['password']) < 6 ){
				$data['password_err'] = 'Пароль не меньше 6 символов';
			}

			if(empty($data['confirm_password'])){
				$data['confirm_password_err'] = 'Подтвердите пароль';
			}else{
				if( $data['password'] != $data['confirm_password'] ){
					$data['confirm_password_err'] = 'Пароль не совпадает';
				}
			}

			if( empty($data['email_err']) &&  empty($data['name_err']) 
				&&  empty($data['password_err'])  
				&&  empty($data['confirm_password_err'])){
				$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
				if( $this->userModel->register($data) ){
					// flash('register_success',-'You-are-registered-and-can-log-in');
					redirect('users/login');
				}else{
					die('problem with user registration view');
				}

			} else {
				$this->view('users/register', $data);
			}

		}else{
			$data = [
				'name' => '',
				'email' => '',
				'password' => '',
				'confirm_password' => '',
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => '',
			];
			$this->view('users/register', $data);
		}
	}
	public function login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$data = [
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'email_err' => '',
				'password_err' => '',
			];
			if(empty($data['email'])){
				$data['email_err'] = 'Введите мэйл';
			}
			if(empty($data['password'])){
				$data['password_err'] = 'Введите пароль';
			}
			if( empty($data['email_err'])  
				&&  empty($data['password_err']) ) {
				die('SECCESS');
			} else {
				$this->view('users/login', $data);
			}
		}else{
			$data = [
				'email' => '',
				'password' => '',
				'email_err' => '',
				'password_err' => ''
			];
			$this->view('users/login', $data);
		}
	}
}
