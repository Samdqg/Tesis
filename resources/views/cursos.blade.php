@extends('layouts.master')

@section('content')

	<h1>listado de Cursos</h1>
	{{-- <ul>
		@foreach($datos as $dato)
			<li>
				{{HTML::link("test/detalle/".$dato->id, $dato->titulo)}}
			</li>		
		@endforeach
	</ul> --}}

	<p> hola {{$nombre}}</p>	
	{{--<ul>
		@foreach($datos as $dato)
			<li>
				{{$dato->nombre}}
			</li>		
		@endforeach
	</ul>--}}

	<table border= "1">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Costo</th>
			</tr>
			
		</thead>
		@foreach($datos as $dato)
			<tr>
				<td>{{$dato->nombre}}</td>
				<td>{{$dato->costo}}</td>	
			</tr>
		@endforeach
	</table>


@stop