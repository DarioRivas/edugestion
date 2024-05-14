<?php function get_meses($numMes)
{
    switch ($numMes) {
        case('01'):
            $mes = 'Enero';
            break;
        case('02'):
            $mes = 'Febrero';
            break;
        case('03'):
            $mes = 'Marzo';
            break;
        case('04'):
            $mes = 'Abril';
            break;
        case('05'):
            $mes = 'Mayo';
            break;
        case('06'):
            $mes = 'Junio';
            break;
        case('07'):
            $mes = 'Julio';
            break;
        case('08'):
            $mes = 'Agosto';
            break;
        case('09'):
            $mes = 'Septiembre';
            break;
        case('10'):
            $mes = 'Octubre';
            break;
        case('11'):
            $mes = 'Noviembre';
            break;
        case('12'):
            $mes = 'Diciembre';
            break;
        default:
            $mes = 'MES';
    }
    return $mes;
}

function get_Trabajos($nomenclatura)
{
  date_default_timezone_set('America/Argentina/Jujuy');
  $aniolectivo = date('Y');
  $mes = date('m');
  $query = "SELECT * FROM mesas_trabajos WHERE materia = '$nomenclatura' AND activo = 1 AND mes = $mes AND aniolectivo = '$aniolectivo';";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

function get_ProgramasAnio($nomenclatura)
{
  date_default_timezone_set('America/Argentina/Jujuy');
  $aniolectivo = date('Y');
  $mes = date('m');
  $query = "SELECT * FROM programas WHERE materia = '$nomenclatura' AND activo = 1 AND aniolectivo = '$aniolectivo';";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

function get_ultimosTrabajos(){
    $query = "SELECT TP.anio, M.nombre AS materia, TP.mes, TP.tipo, TP.fechadecarga, TP.cargadopornombre
     FROM mesas_trabajos TP
     INNER JOIN data_materias M ON TP.materia = M.nomenclatura
     ORDER BY TP.fechadecarga DESC LIMIT 10;";
    $result = mysqli_query(conectar(), $query);
    return $result;
}
