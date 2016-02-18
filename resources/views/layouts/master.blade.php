<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		@section('titulo')
			titulo desde template
		@show
	</title>
	@yield('css')
	{!! HTML::style('css/style.css') !!}
	{{-- {{HTML::script ('js/jquery-1.11.3.js')}} --}}
	@yield('javascript')
	

</head>
<body>

	<div id="header"> este es el header</div>
	<div id="contenido">
		@yield('content')
	</div>

	<div id="footer">este es el footer</div>
</body>
</html>
