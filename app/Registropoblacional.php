<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Registropoblacional extends Model {

    protected $table      = 'registropoblacional';
    protected $primaryKey = 'id';
    protected $fillable   = array('cedula','iniciales','sexo','fechanacimiento','edad','residenciahabitual','lugarnacimiento',
                                    'regimenseguridadsocial','eps','estrato','iniciosintomas','fechadiganostico',
                                    'metododiagnostico','localizacionprimaria','morfologia','localizacionprimaria','estadio',
                                    'lugardiganostico','numerobiopsia','lugartratamiento','datostratamiento','certificadodefuncion');

}
