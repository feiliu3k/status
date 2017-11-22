<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'Sample App') - Laravel 入门教程</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('layouts._header')
	<div class="container">
		<div class="col-md-offset-1 col-md-10">
			@include('shared._messages')
			@yield('content')
			@include('layouts._footer')
		</div>
	</div>
</body>
</html>