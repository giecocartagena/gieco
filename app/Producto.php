<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    protected $table      = 'productos';
    protected $primaryKey = 'id';
    protected $fillable   = array('nombre', 'encabezado', 'detalle', 'fotoportada', 'categoria_id');

    public function categorias()
    {
        return $this->belongsTo('giecocartagena\Categoria');
    }

    public function fotos()
    {
        return $this->hasMany('giecocartagena\Foto');
    }

}