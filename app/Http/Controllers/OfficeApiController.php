<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\County;
use App\Office;

class OfficeApiController extends Controller
{
	/**
	*	Tüm ilçe seçim kurulları için liste ya da yönlendirme olmalı
	*/
	public function main(Request $request)
	{
		return City::all();
	}

	public function cityDetail(Request $request, $cityId)
	{
		$city = City::where('id', $cityId)->with(['counties', 'offices'])->first();
		return $city;
	}

	public function county(Request $request, $cityId, $countyId)
	{
		$county = County::where('id', $countyId)->first();
		return  $county;
	}

	public function office(Request $request, $cityId, $countyId, $officeId)
	{
		$office = Office::where('id', $officeId)->first();
		return $office;
	}

}
