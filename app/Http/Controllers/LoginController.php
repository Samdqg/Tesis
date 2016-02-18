<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entidades\Participantes;
use App\Entidades\Coordinacion;
use App\Entidades\Profesores;

class LoginController extends Controller
{
	public function postIngresar(Request $request){

		$user= $request->input('user');
		$pass= $request->input('pass');
		$rol = $request->input('rol');
		$fila= [];
		$hola = "";
		if($rol== "1")
			$fila = Participantes::whereRaw('ci = ? and password = ?', [$user, $pass])->get();
		else if($rol== "2")
			$fila = Profesores::whereRaw('ci = ? and password = ?', [$user, $pass])->get();
		else if($rol== "3")
			$fila = Coordinacion::whereRaw('cedula = ? and password = ?', [$user, $pass])->get();


		$len = sizeof($fila);

		$retorno = "";
		if($len != 0){
			$nombre= $fila[0]->nombre;
			// $nivel= $fila[0]->nivelEstudio;
			$retorno = "Bienvenido ".$nombre;
			
		}else{
			$retorno = "El usuario no existe";	
		}
		//comentario de prueba
		//esta es otra prueba
		return $retorno;
	}
}