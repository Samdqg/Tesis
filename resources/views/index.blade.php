<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Log-in</title>
    
    
    
   <!-- <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>-->

    <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="login-card">
      <h1>Iniciar Sesión</h1><br>
      
      {!! Form::open(array('url' => 'login/ingresar', 'method'=>'post')) !!}
        {!! Form::select('rol', array('0' => 'Seleccione su rol' , '1' => 'Estudiante', '2' => 'Profesor', '3' => 'Coordinador'))!!}
        {!!Form::text('user','', array('placeholder'=>'Cédula'))!!}
        {!!Form::password('pass', array('placeholder'=>'Contraseña'))!!}
        {!!Form::submit('Iniciar', array('class'=>'login login-submit'))!!}
      {!! Form::close() !!}
        
      <div class="login-help">
        <a href="#">Register</a> • <a href="#">Forgot Password</a>
      </div>
    </div>


    <!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>-->

    
    
    
    
  </body>
</html>
