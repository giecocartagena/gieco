<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Lugaresdiagnostico extends Model {

    protected $table      = 'lugaresdiagnostico';
    protected $primaryKey = 'codigo';
    protected $fillable   = array('codigo','nombre');

}