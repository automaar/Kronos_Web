<?php



ini_set ( 'error_reporting', E_ALL & ~ E_NOTICE );
ini_set ( 'display_errors', 1 );

include_once '../negocios/class.usuario_neg.php';

$v_rut = $_POST["p_rut"];
$v_nombre = $_POST["p_nom"];
$v_correo = $_POST["p_correo"];
$v_pass = $_POST["p_pass"];
$v_fecha = date('d-m-Y');


$obj_usuario=new usuario_neg();
$obj_usuario->ObtieneXPks_neg($v_rut);


$obj_usuario=new usuario_neg();
$obj_usuario->InsertarRegistro_neg($v_rut, $v_pass, $v_nombre, $v_fecha, $v_correo)



/*
      echo '<tbody>';
        for($i=0;$i<$obj_usuario->getFilas();$i++){
            $obj_usuario->getSet($i);

            echo '<tr>';
              echo '<td>'.$obj_usuario->getRut().'</td>';
              echo '<td>'.$obj_usuario->getNombre().'</td>';
              echo '<td>'.$obj_usuario->getFecha_Creacion().'</td>';
              echo '<td>'.$obj_usuario->getCorreo().'</td>';
              echo '<td>'.$obj_usuario->getContraseña().'</td>';
            echo '</tr>';
        }

    echo "<!--EXITO-->";
    
*/
?>