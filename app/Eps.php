<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Eps extends Model {

    protected $table      = 'eps';
    protected $primaryKey = 'id';
    protected $fillable   = array('nombre');

}
