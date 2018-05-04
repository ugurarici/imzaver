@extends('layout')

@section('content')
<div class="jumbotron alert-danger" style="margin-bottom: 0;">
	<div class="container">
		<h1 class="display-4">Demokrasi için imza ver!</h1>
		<p class="lead">
			24 Haziran cumhurbaşkanı seçimleri için 4 isim "seçmenler tarafından aday gösterilebilir" durumda
			<br>
			Listedeki adayların seçime girebilmesi için 100 bin imza toplamaları gerekiyor
			<br>
			4-9 Mayıs arası <strong>haftasonu dahil her gün</strong> 08:00 - 20:00 saatleri arasında imza verebilirsin
		</p>
		<hr class="my-4">
		<p>Daha demokratik bir seçim için bağlı bulunduğun ilçe seçim kuruluna git ve <strong>imza ver!</strong></p>
		<p class="lead">
			<a class="btn btn-danger btn-lg d-block d-md-inline-block" href="{{route('allOffices')}}" title="İlçe Seçim Kurulları Tam Liste" role="button"><span class="oi oi-map"></span> İlçe Seçim Kurulları</a> <em>4-9 Mayıs, haftasonu dahil, 08:00-20:00</em>
		</p>
	</div>
</div>
<div class="jumbotron" style="margin-bottom: 0;">
	<a id="neden"></a>
	<div class="container">
		<h1 class="display-4">Neden imza vermeliyim?</h1>
		<p class="lead">
			Seçimde daha fazla seçenek ve daha demokratik bir ortam sağlansın diye imza vermelisin
			<br>
			Ne kadar fazla adayımız olursa o kadar demokratik bir seçimimiz olur. O yüzden; oy vereceğin kişi belliyse bile seni bu listeden biri için de imza vermeye çağırıyoruz
		</p>
		<hr class="my-4">
		<p>Daha demokratik bir seçim için bağlı bulunduğun ilçe seçim kuruluna git ve <strong>imza ver!</strong></p>
		<p class="lead">
			<a class="btn btn-danger btn-lg d-block d-md-inline-block" href="{{route('allOffices')}}" title="İlçe Seçim Kurulları Tam Liste" role="button"><span class="oi oi-map"></span> İlçe Seçim Kurulları</a> <em>4-9 Mayıs, haftasonu dahil, 08:00-20:00</em>
		</p>
	</div>
</div>
<div class="jumbotron alert-danger" style="margin-bottom: 0;">
	<a id="nasil"></a>
	<div class="container">
		<h1 class="display-4">Nasıl imza verebilirim?</h1>
		<p class="lead">
			Birkaç basit adımla imza verebilir ve demokrasimizi güçlendirebilirsin
		</p>
		<ol class="lead">
			<li>Fotoğraflı kimlik belgeni hazırla</li>
			<li>Bağlı bulunduğun ilçe seçim kuruluna git</li>
			<li>Tercih ettiğin aday için imza ver</li>
		</ol>
		<hr class="my-4">
		<p>Daha demokratik bir seçim için bağlı bulunduğun ilçe seçim kuruluna git ve <strong>imza ver!</strong></p>
		<p class="lead">
			<a class="btn btn-primary btn-lg d-block d-md-inline-block" href="{{route('allOffices')}}" title="İlçe Seçim Kurulları Tam Liste" role="button"><span class="oi oi-map"></span> İlçe Seçim Kurulları</a> <em>4-9 Mayıs, haftasonu dahil, 08:00-20:00</em>
		</p>
	</div>
</div>
<div class="jumbotron" style="margin-bottom: 0;">
	<a id="adaylar"></a>
	<div class="container">
		<h1 class="display-4">Adaylar</h1>
		<p class="lead">
			<a href="http://www.ysk.gov.tr/tr/haber/secmenler-tarafindan-aday-gosterilebilecek-cumhurbaskani-adaylari/77612" target="_blank" style="color:#dd3645;">YSK'nın resmi açıklamasına</a> göre imza verilebilecek 4 aday bulunuyor
		</p>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<div class="card my-2">
					<img class="card-img-top" src="{{ asset('img/dogu-perincek.jpg') }}" alt="Doğu PERİNÇEK">
					<div class="card-body">
						<h5 class="card-title">Doğu PERİNÇEK</h5>
						<p class="card-text">Vatan Partisi Genel Başkanı</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<div class="card my-2">
					<img class="card-img-top" src="{{ asset('img/meral-aksener.jpg') }}" alt="Meral AKŞENER">
					<div class="card-body">
						<h5 class="card-title">Meral AKŞENER</h5>
						<p class="card-text">İYİ Parti Genel Başkanı</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<div class="card my-2">
					<img class="card-img-top" src="{{ asset('img/temel-karamollaoglu.jpg') }}" alt="Temel KARAMOLLAOĞLU">
					<div class="card-body">
						<h5 class="card-title"><small><strong>Temel KARAMOLLAOĞLU</strong></small></h5>
						<p class="card-text">Saadet Partisi Genel Başkanı</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<div class="card my-2">
					<img class="card-img-top" src="{{ asset('img/vecdet-oz.jpg') }}" alt="Vecdet ÖZ">
					<div class="card-body">
						<h5 class="card-title">Vecdet ÖZ</h5>
						<p class="card-text">Adalet Partisi Genel Başkanı</p>
					</div>
				</div>
			</div>
		</div>
		<hr class="my-4">
		<p>Daha demokratik bir seçim için bağlı bulunduğun ilçe seçim kuruluna git ve <strong>imza ver!</strong></p>
		<p class="lead">
			<a class="btn btn-danger btn-lg d-block d-md-inline-block" href="{{route('allOffices')}}" title="İlçe Seçim Kurulları Tam Liste" role="button"><span class="oi oi-map"></span> İlçe Seçim Kurulları</a> <em>4-9 Mayıs, haftasonu dahil, 08:00-20:00</em>
		</p>
	</div>
</div>
@endsection