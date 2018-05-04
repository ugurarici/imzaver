<?php

use Illuminate\Foundation\Inspiring;
use App\City;
use App\County;
use App\Office;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
	$this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('importjson', function() {
	$json = \File::get(storage_path('data_address_corrected.json'));
	$dataObject = json_decode($json);
	// dd(makeSef($dataObject[2]->ilAdi));
	// dd($dataObject);

	foreach ($dataObject as $dataCity) {
		//	burada il yaratacağız
		$newCity = new City;
		$newCity->name = $dataCity->ilAdi;
		$newCity->slug = makeSef($dataCity->ilAdi);
		$newCity->plate_number = str_pad($dataCity->ilId, 2, "0", STR_PAD_LEFT);
		$newCity->save();
		print_r($newCity->plate_number . " - ". $newCity->name . " - " . $newCity->slug . " il kaydedildi\r\n");
		foreach ($dataCity->ilceler as $dataOffice) {
			//	buradaki ilçe adıyla kayıtlı bir şey var mı diye bakacağız
			$county = County::where('city_id', $newCity->id)->where('name', $dataOffice->ilceAdi)->first();
			//	varsa ilçe id olarak o kullanılacak
			//	yoksa o bilgiyle yeni bir tane yaratılacak
			if(! isset($county->id)){
				$county = new County;
				$county->city_id = $newCity->id;
				$county->name = $dataOffice->ilceAdi;
				$county->slug = makeSef($dataOffice->ilceAdi);
				$county->save();
				print_r($county->name . " - " . $county->slug . " - ilçe kaydedildi\r\n");
			}

			//	şimdi ilçe seçim kurulunu yaratabiliriz
			$office = new Office;
			$office->city_id = $newCity->id;
			$office->county_id = $county->id;
			$office->name = $dataOffice->birimAdi;
			$office->slug = makeSef($dataOffice->birimAdi);
			$office->phone = $dataOffice->birimTel;
			$office->address = $dataOffice->birimAdres;
			$office->save();
			print_r($office->name . " - " . $office->slug . " - ofis kaydedildi\r\n");
		}
	}

})->describe('JSON içindeki ilçe seçim kurulu kayıtlarını veritabanına aktarır');

Artisan::command('getgmapdata', function() {
	$offices = Office::all();
	foreach ($offices as $office) {
		
	}
})->describe('İlçe seçim kurulları adreslerine göre Google Mapsten veri alıp veritabanında günceller');
