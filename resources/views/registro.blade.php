@extends('layouts.master')

@section('css')
	{!! HTML::style('css/bootstrap.min.css') !!}
	
@stop
@section('content')


	<div id= 'registerForm' class= 'ancho'>

		<p class='titulo'>Registro de Usuarios</p>
		{!! Form::open(array('url' => 'registro/registrar', 'method'=>'post', 'role'=>'form')) !!}
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				{!!Form::text('name','', array('placeholder'=>'Nombre', 'class'=>"form-control"))!!}	
			</div>
			<div class="form-group">
				<label for="ape">Apellido:</label>
				{!!Form::text('lastName','', array('placeholder'=>'Apellido', 'class'=>"form-control"))!!}	
			</div>
			<div class="form-group">
				<label for="cedula">Cedula:</label>
				{!!Form::text('ci','', array('placeholder'=>'Cédula', 'class'=>"form-control"))!!}	
			</div>

			<div class="form-group">
				<label for="rif">Rif:</label>
				{!!Form::text('rif','', array('placeholder'=>'Rif', 'class'=>"form-control"))!!}	
			</div>

			<div class="form-group">
				<label for="edad">Edad:</label>
				{!!Form::text('edad','', array('placeholder'=>'Edad', 'class'=>"form-control"))!!}	
			</div>
<!-- 			<div class="form-group">
	<label for="sexo">Sexo:</label>
	{!! Form::select('sex', ['default' =>'Seleccione']+['0' => 'Femenino', '1' => 'Masculino'], 'default',array('class'=>"form-control"))!!}	
</div> -->

			<div class="form-group">
				<label for="sexo">Sexo:</label><br>
				<label for="sexo">M</label>
				 {!! Form::radio('sexo', '1', true) !!}
				 <label for="sexo">F</label>
           		 {!! Form::radio('sexo', '0', '') !!}
			</div>
	
		
			<div class="form-group">
				<label for="email">Email:</label>
				{!!Form::email('user','', array('placeholder'=>'Email', 'class'=>"form-control"))!!}	
			</div>

			<div class="form-group">
				<label for="telf">Teléfono:</label>
				{!!Form::text('telf','', array('placeholder'=>'Teléfono', 'class'=>"form-control"))!!}	
			</div>			
		    
		    <div class="form-group">
		    	<label for="pwd">Password:</label>
		    	{!!Form::password('pass',array('placeholder'=>'Contraseña', 'class'=>"form-control"))!!}
		    </div>	
		    
		    {!!Form::submit('Registrar', array('class'=>'btn btn-default'))!!}
	    {!! Form::close() !!}	

    </div>
	


@stop