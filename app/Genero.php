<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

    protected $table      = 'genero';
    protected $primaryKey = 'codigo';
    protected $fillable   = array('codigo','nombre');

}
