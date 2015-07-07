<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Cmsseccion extends Model {

    protected $table      = 'cms_secciones';
    protected $primaryKey = 'id';
    protected $fillable   = array('nombre');

    public function cms_noticias()
    {
        return $this->hasMany('giecocartagena\CmsNoticia');
    }

}
