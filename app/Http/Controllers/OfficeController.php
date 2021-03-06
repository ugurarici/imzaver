<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\County;
use App\Office;

class OfficeController extends Controller
{
	/**
	*	Tüm ilçe seçim kurulları için liste ya da yönlendirme olmalı
	*/
	public function main(Request $request)
	{
		$cities = City::all();
		return view('cities', compact('cities'));
	}

	public function cityDetail(Request $request, City $city)
	{
		$city = City::where('id', $city->id)->with(['counties', 'offices'])->first();
		return view('citydetail', compact('city'));
	}

	public function county(Request $request, City $city, County $county)
	{
		return view('countydetail', compact('city','county'));
	}

	public function office(Request $request, City $city, County $county, Office $office)
	{

	}

}
