<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Tiposmuestras extends Model {

    protected $table      = 'tiposmuestras';
    protected $primaryKey = 'codigo';
    protected $fillable   = array('codigo','nombre');

}