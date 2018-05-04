<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
	/**
	*	Tüm ilçe seçim kurulları için liste ya da yönlendirme olmalı
	*/
	public function main(Request $request)
	{
		return view('home');
	}

	public function city(Request $request)
	{

	}

	public function county(Request $request)
	{

	}

	public function office(Request $request)
	{

	}

}
