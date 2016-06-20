<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Latihan - @yield('title')</title>
		{!! Html::style('assets/bootstrap-3.3.6-dist/css/bootstrap.min.css') !!}
		{!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
	<body>
	<!-- @yield('namakonten') adalah perintah untuk mengambil nilai dari @section('namakonten') di file home -->
		@yield('content')
		
		{!! Html::script('assets/jquery/jquery-2.2.4.min.js') !!}
		{!! Html::script('assets/bootstrap-3.3.6-dist/js/bootstrap.min.js') !!}
	</body>
	</html> 