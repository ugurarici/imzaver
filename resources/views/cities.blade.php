@extends('layout')

@section('title', 'İlçe Seçim Kurulları')

@section('content')
<div class="jumbotron p-3 text-center">
	<div class="container">
		<h1><small>İlçe Seçim Kurulları</small></h1>
		<p class="lead mb-0">Bağlı bulunduğunuz ilçe seçim kurulunu arayın</p>
		<div class="row justify-content-center">
			<div class="col-md-5 col-sm-12">
				<form>
					{{ csrf_field() }}
					<select id="allCountiesSelect" class="selectpicker form-control form-control-lg" data-live-search="true" title="İlçenizi arayın">
						@foreach($cities as $city)
						<optgroup label="{{$city->name}}">
							@foreach($city->counties as $county)
								<option data-tokens="{{$county->slug}} {{strtolower($county->name)}} {{ str_replace('İ', 'i', $county->name) }}" value="{{ route('countyOffices', ["city" => $city, "county" => $county]) }}">{{ $county->name }}</option>
							@endforeach
						</optgroup>
						@endforeach
					</select>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container my-3">
	<div class="row">
		@foreach($cities as $city)
		<div class="col-12 col-sm-12 col-md-4 col-lg-2 mb-1">
			<div class="btn-group btn-block" role="group" aria-label="{{ $city->name }}">
				<a class="btn btn-danger" href="{{ route('cityOffices', $city) }}" title="{{ $city->name }} İlçe Seçim Kurulları" style="font-family: monospace;">{{ $city->plate_number }}</a>
				<a class="btn btn-secondary btn-block text-left fs1vw" href="{{ route('cityOffices', $city) }}" title="{{ $city->name }} İlçe Seçim Kurulları"><small>{{ $city->name }}</small></a>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection