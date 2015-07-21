<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Barrios extends Model {

    protected $table      = 'barrios';
    protected $primaryKey = 'id';
    protected $fillable   = array('id','nombre','localidad','estrato');

}