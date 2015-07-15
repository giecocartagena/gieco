<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Regimenss extends Model {

    protected $table      = 'regimenss';
    protected $primaryKey = 'codigo';
    protected $fillable   = array('codigo','nombre');

}