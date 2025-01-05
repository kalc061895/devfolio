<?php namespace App\Libraries;
 
class FechaHora{
	function __construct(){
        
    }
    function obtenerDiferencia($fechaHora, $tipo ){
        $fechaHoraActual = date_create( date('Y-m-d H:i:s'));
        $fechaHoraRecibida = date_create(date($fechaHora));

        $diferencia = date_diff($fechaHoraRecibida,$fechaHoraActual);
        $tipo = explode(',',$tipo);
        $res ='';
        
        for ($i=0; $i < count($tipo); $i++) { 
            switch ($tipo[$i]) {
                case 'anios':
                    $res.= $diferencia->format('%y años');
                    break;
                case 'meses':
                    $res.= $diferencia->format('%m meses');
                    break;
                case 'dias':
                    $res.= $diferencia->format('%d días');
                    break;
                case 'horas':
                    $res.= $diferencia->format('%h horas');
                    break;
                case 'minutos':
                    $res.= $diferencia->format('%i min');
                    break;
                case 'segundos':
                    $res.= $diferencia->format('%s seg');
                    break;
                default:
                    # code...
                    break;
            } 
        }
        return $res;
    }

    function obtenerDiferenciaCorta($fechaHora ){
        $fechaHoraActual = date_create( date('Y-m-d H:i:s'));
        $fechaHoraRecibida = date_create(date($fechaHora));

        $diferencia = date_diff($fechaHoraRecibida,$fechaHoraActual);
        $res ='';
        
        if ($diferencia->format('%y') > 0 ) {
            $res.= $diferencia->format('%y años');
        }
        elseif ($diferencia->format('%m') > 0 ) {
            $res.= $diferencia->format('%m meses');
        }
        elseif ($diferencia->format('%d') > 0 ) {
            $res.= $diferencia->format('%d dias');
        }
        elseif ($diferencia->format('%h') > 0 ) {
            $res.= $diferencia->format('%h horas');
        }
        elseif ($diferencia->format('%i') > 0 ) {
            $res.= $diferencia->format('%i min');
        }
        elseif ($diferencia->format('%s') > 0 ) {
            $res.= $diferencia->format('%s seg');
        }
        return $res;
    }
}