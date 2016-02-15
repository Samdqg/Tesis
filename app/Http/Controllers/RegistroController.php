<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entidades\Participantes;


class RegistroController extends Controller
{
	public function getIndex (){
		return view('registro');

	}

	public function postRegistrar(Request $request){

		$nombre= $request->input('name');
		$apellido= $request->input('lastName');
		$cedula = $request->input('ci');

		$participante = new Participantes();

		$participante->ci= $request->input('ci');
		$participante->nombre= $request->input('name');
		$participante->apellido= $request->input('lastName');
		$participante->rif= $request->input('rif');
		$participante->edad= $request->input('edad');
		$participante->sexo= $request->input('sexo');
		$participante->correo= $request->input('user');
		$participante->password= $request->input('pass');
		$participante->telf= $request->input('telf');

		$participante->save();

		return "Registro";
	}
}