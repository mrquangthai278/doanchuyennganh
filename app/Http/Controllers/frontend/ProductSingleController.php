<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductSingleController extends Controller
{
	public function index(){
		return view('layouts.content.product-single');
	}
}
