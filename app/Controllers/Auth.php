<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		if ($this->request->getMethod() == 'post') {

			$rules = [
				'username' => 'required',
				'password' => 'required'
			];

			$validate = $this->validate($rules);
			if ($validate) {
				return view('auth/index');
			} else {
				return redirect()->back()->withInput()->with('validation', $this->validator);
			}
		}
		return view('auth/login');
		
	}


	public function register(){
		return view('auth/register');
	}

	public function index(){
		return view('auth/index');
	}
	public function about(){
		return view('auth/about');
	}
	public function Player_Name(){
		return view('auth/Player_Name');
	}
	public function Photo(){
		return view('auth/Photo');
	}

	//--------------------------------------------------------------------

}
