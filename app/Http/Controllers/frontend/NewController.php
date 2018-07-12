<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
	public function index(){
		return view('layouts.content.new');
	}
}
