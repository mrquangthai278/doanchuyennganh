<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewSingleController extends Controller
{
	public function index(){
		return view('layouts.content.new-single');
	}
}
