<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Cmsnoticia extends Model {

    protected $table      = 'cms_noticias';
    protected $primaryKey = 'id';
    protected $fillable   = array('titulo', 'encabezado', 'detalle', 'seccion_id');

    public function cms_secciones()
    {
        return $this->belongsTo('giecocartagena\Cmsseccion');
    }

}