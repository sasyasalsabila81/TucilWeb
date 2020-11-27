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
		$data['title'] = "Halaman Depan";

		echo view('index/h_header', $data);
		echo view('index/h_content', $data);
	}

	public function about(){
		return view('auth/about');
	}
	public function Player_Name(){
		$data['title'] = "Halaman Depan";

		echo view('Player_Name/pn_header', $data);
		echo view('Player_Name/pn_content', $data);
	}
	public function Photo(){
		$data['title'] = "Halaman Depan";

		echo view('Photo/p_header', $data);
		echo view('Photo/p_content', $data);
	}
	//--------------------------------------------------------------------

}
