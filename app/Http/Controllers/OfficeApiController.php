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
		return response()->json(City::all(), 200);
	}

	public function counties(Request $request, $cityId)
	{
		$counties = County::where('city_id', $cityId)->get();
		return response()->json($counties, 200);
	}

	public function offices(Request $request, $countyId)
	{
		$offices = Office::where('county_id', $countyId)->get();
		return response()->json($offices, 200);
	}

}
