<?php namespace giecocartagena;

use Illuminate\Database\Eloquent\Model;

class Registropoblacional extends Model {

    protected $table      = 'registropoblacional';
    protected $primaryKey = 'id';
    protected $fillable   = array('cedula','iniciales','sexo','fechanacimiento','edad','residenciahabitual','lugarnacimiento',
                                    'regimenseguridadsocial','eps','estrato','iniciosintomasanio','iniciosintomasmes','fechadiagnostico',
                                    'metododiagnostico','otrotipomuestra','localizacionprimaria','morfologia','localizacionprimaria','estadio',
                                    'lugardiganostico','numerobiopsia','lugartratamiento','datostratamiento','fechaultcontrolmed','certificadodefuncion');

    public function getFechaNacimientoLargaAttribute()
    {
        $parts = explode('-', $this->fechanacimiento);
        if(isset($parts[2])):
            return "$parts[2] DE " . $this->getNombreMes($parts[1]) . " DE $parts[0]";
        else:
            return "";
        endif;
    }

    public function getFechaDiagnosticoLargaAttribute()
    {
        $parts = explode('-', $this->fechadiagnostico);
        if(isset($parts[2])):
            return "$parts[2] DE " . $this->getNombreMes($parts[1]) . " DE $parts[0]";
        else:
            return "";
        endif;
    }

    public function getFechaUltControlMedLargaAttribute()
    {
        $parts = explode('-', $this->fechaultcontrolmed);
        if(isset($parts[2])):
            return "$parts[2] DE " . $this->getNombreMes($parts[1]) . " DE $parts[0]";
        else:
            return "";
        endif;
    }

    public function getNombreMes($NumeroMes)
    {
        if($NumeroMes == "01"):
            $NombreMes = 'ENERO';
        elseif($NumeroMes == "02"):
            $NombreMes = 'FEBRERO';
        elseif($NumeroMes == "03"):
            $NombreMes = 'MARZO';
        elseif($NumeroMes == "04"):
            $NombreMes = 'ABRIL';
        elseif($NumeroMes == "05"):
            $NombreMes = 'MAYO';
        elseif($NumeroMes == "06"):
            $NombreMes = 'JUNIO';
        elseif($NumeroMes == "07"):
            $NombreMes = 'JULIO';
        elseif($NumeroMes == "08"):
            $NombreMes = 'AGOSTO';
        elseif($NumeroMes == "09"):
            $NombreMes = 'SEPTIEMBRE';
        elseif($NumeroMes == "10"):
            $NombreMes = 'OCTUBRE';
        elseif($NumeroMes == "11"):
            $NombreMes = 'NOVIEMBRE';
        else:
            $NombreMes = 'DICIEMBRE';
        endif;

        return $NombreMes;
    }
}
