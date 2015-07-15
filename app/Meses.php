<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Meses extends Model {

    protected $table      = 'meses';
    protected $primaryKey = 'id';
    protected $fillable   = array('id','nombre');

}