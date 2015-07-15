<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Tratamientos extends Model {

    protected $table      = 'tratamientos';
    protected $primaryKey = 'codigo';
    protected $fillable   = array('codigo','nombre');

}