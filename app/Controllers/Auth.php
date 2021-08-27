<?php namespace App\Controllers;

use \App\Models\User;

class Auth extends BaseController
{
	public function Login()
	{
		return view('auth/login');
    }

    public function prosesLogin()
	{
		$session = session();
		$user= new User();
		$Email =$this->request->getPost('email');
		$Password=$this->request->getPost('password');
		$redirect = "";

		$ceklogin = $user->GetUserLogin($Email, $Password);
		if(count($ceklogin) > 0) {
			$userData = $ceklogin[0];
			$session->set('userData', $userData);
			// $session->set('userID', $datauser->ID);
			// $session->set('Email', $datauser->Email);
			// $session->set('Nama', $datauser->Nama);
			// $session->set('Role', $datauser->Role);
			$redirect = site_url('Mail/inbox');
		} else {
			$redirect = site_url('Auth/Login');
		}

		return redirect()->to($redirect);
	}

	public function Logout()
	{
		session()->destroy();
		return redirect()->to(site_url('Auth/Login'));
    }
}