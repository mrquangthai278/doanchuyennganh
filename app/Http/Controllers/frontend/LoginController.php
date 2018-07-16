<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
	public function getLogin(){
		return view('layouts.content.login');
	}

	public function postLogin(Request $request){
		$rules = [
			'email' => 'required|email',
			'password' => 'required|min:3'
		];

		$messages=[
			'email.required' => 'Email Trường này không được để trống',
			'email.email' => 'Email Không đúng định dạng',
			'password.required' => 'Password Trường này không được để trống',
			'password.min' => 'Password Phải nhập ít nhất 3 kí tự'
		];
		$validator = Validator::make($request->all(), $rules, $messages);

		if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}else{
			$username = $request->input('email');
			$password = $request->input('password');

			if(Auth::attempt(['email' => $username, 'password' => $password, 'status' => 1], $request->has('remmember'))){
				return redirect()->intended('/');
			}else{
				$errors = new MessageBag(['errorlogin' => "Email hoặc mật khẩu không đúng"]);
				return redirect()->back()->withInput()->withErrors($errors);
			}
		}
	}

	public function getLogout(){
		Auth::logout();
		return redirect(\URL::previous());
	}
}
