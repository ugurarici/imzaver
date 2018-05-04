@extends('layout')

@section('title', $city->name . ' İlçe Seçim Kurulları')

@section('content')
<div class="jumbotron p-3 text-center">
	<div class="container">
		<h1><small>{{$city->name}} İlçe Seçim Kurulları</small></h1>
		<p class="lead mb-0">Bulunduğunuz ilçeyi seçin</p>
	</div>
</div>
<div class="container my-3">
	<div class="row">
		@foreach($city->counties as $county)
		<div class="col-12 col-sm-12 col-md-4 col-lg-2 mb-1">
			<div class="btn-group btn-block" role="group" aria-label="{{ $city->name }}">
				<a class="btn btn-secondary btn-block text-left fs1vw" href="{{ route('countyOffices', ["city" => $city, "county" => $county]) }}" title="{{ $city->name }} {{ $county->name }} İlçe Seçim Kurulları"><small>{{ $county->name }}</small></a>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection