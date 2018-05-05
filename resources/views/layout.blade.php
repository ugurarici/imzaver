<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'Cumhurbaşkanlığı Adayları için İmza Ver')</title>
	<meta name="description" content="@yield('meta_description', '24 Haziran cumhurbaşkanlığı seçimlerinde daha demokratik bir ortam için ilçe seçim kuruluna git ve imza ver! Tüm bilgiler burada: imzaver.com')">
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}" />
	<meta property="og:title" content="@yield('title', 'Cumhurbaşkanlığı Adayları için İmza Ver')" />
	<meta property="og:description" content="@yield('meta_description', '24 Haziran cumhurbaşkanlığı seçimlerinde daha demokratik bir ortam için ilçe seçim kuruluna git ve imza ver! Tüm bilgiler burada: imzaver.com')" />
	<meta property="og:url" content="{{url()->current()}}" />
	<meta property="og:image" content="{{asset('img/social-share.jpg')}}" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="@yield('title', 'Cumhurbaşkanlığı Adayları için İmza Ver')">
	<meta name="twitter:description" content="@yield('meta_description', '24 Haziran cumhurbaşkanlığı seçimlerinde daha demokratik bir ortam için ilçe seçim kuruluna git ve imza ver! Tüm bilgiler burada: imzaver.com')">
	<meta name="twitter:image" content="{{asset('img/social-share.jpg')}}">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{url('/')}}"><span id="navbar-brand" class="oi oi-pencil"></span> <strong>İmza Ver</strong></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="{{url('/')}}#neden">Neden?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/')}}#nasil">Nasıl?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/')}}#adaylar">Adaylar</a>
						</li>
					</ul>
					<div class="my-2 my-lg-0">
						<a class="btn btn-danger my-2 my-sm-0" href="{{ route('allOffices') }}"><span class="oi oi-map"></span> İlçe Seçim Kurulları</a>
					</form>
				</div>
			</div>
		</nav>
	</header>
	@yield('content')
	<div class="container">
		<blockquote class="blockquote my-4 text-center">
			<p class="mb-0">Politika ile uğraşmayacak kadar akıllı olanlar, daha aptallar tarafından yönetilerek cezalandırılırlar.</p>
			<footer class="blockquote-footer">Eflatun</footer>
		</blockquote>
	</div>
	<script type="text/javascript" charset="utf-8" src="{{ mix('js/app.js') }}"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33209245-8"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-33209245-8');
	</script>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aece78ddd79fec2"></script>
</body>
</html>