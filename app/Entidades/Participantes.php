<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    protected $table = 'participantes';
    protected $primaryKey ='ci';
	public $timestamps= false; 
}