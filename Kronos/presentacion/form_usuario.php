<?php

ini_set ( 'error_reporting', E_ALL & ~ E_NOTICE );
ini_set ( 'display_errors', 1 );


echo '<html>';
echo '<head>';
  echo '<title>Registrar Usuario</title>';
  echo '<meta charset="utf-8">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
  echo '<link rel="stylesheet" href="../PAGINA/Style/estilo.css">';
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>';
  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
echo '</head>';
echo '<body>';
  echo '<br>';
  echo '<div class="container">';
    echo '<ul class="nav nav-tabs">';
    echo '<li class="active"><a data-toggle="tab" href="#menu0">Registrar Usuario</a></li>';
    //echo '<li><a data-toggle="tab" href="#menu1">Listar Usuarios</a></li>';
    echo '</ul>';
    echo '<div class="tab-content">';
      echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
      echo '<html xmlns="http://www.w3.org/1999/xhtml">';
      echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>formulario</title>';
        echo '<link rel="stylesheet" href="../css/estilo.css">';
        echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">';
        echo '<script type="text/javascript" language="javascript">';
          echo 'function validar_form(){';
            echo 'var v_respuesta;';
            echo 'var varurl;';
            echo 'varurl="postregis.php";';
            echo 'varparam="&p_rut="+document.getElementById("p_rut").value;';
            echo 'varparam+="&p_pass="+document.getElementById("p_nom").value;';
            echo 'varparam+="&p_pass="+document.getElementById("p_correo").value;';
            echo 'varparam+="&p_pass="+document.getElementById("p_pass").value;';
            echo 'v_respuesta=confirm("¿Confirma que desea Registrar al Estudiante?");';
            echo 'if(v_respuesta){';
              echo 'var ajax=fgo_Ajax();';
              echo 'var contenedor  =document.getElementById(vartarget);';
              echo 'ajax.open("POST",varurl,true);';
              echo 'ajax.onreadystatechange=function()';
              echo '{ ';
                echo 'if(ajax.readyState==1){';
                  echo '$("[id="+vartarget+"]").html("Cargando!!");';
                echo '}';
                echo 'if(ajax.readyState==4){';
                  echo 'if (ajax.responseText.indexOf("<!--EXITO-->") != -1) {';
                    echo '$("[id="+vartarget+"]").html(ajax.responseText);';
                  echo '}else if(ajax.responseText.indexOf("<!--ERROR-->") != -1) {';
                    echo 'alert("Ocurrio un Error, Por favor informar!!");';
                  echo '}';
                echo '} ';
              echo '}';
              echo 'ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");	';
              echo 'ajax.send(varparam);';
            echo '}';
          echo '}';
        echo '</script>';
      echo '</head>';
      echo '<body>';
        echo '<form class="form" method="post" action="post.php">';
          echo '<h1 class="nom">Intranet</h1>';
          echo '<div class="contenedor">';
            echo '<div class="input-contenedor">';
              echo '<i class="fa-solid fa-user icon"></i>';
              echo '<input type="text" placeholder="Rut" class="field" name="p_rut" id="p_rut">';
            echo '</div>';
            echo '<div class="input-contenedor">';
              echo '<i class="fa-solid fa-star icon"></i>';
              echo '<input type="text" placeholder="Nombre" class="field" name="p_nom" id="p_nom">';
            echo '</div>';
            echo '<div class="input-contenedor">';
              echo '<i class="fa-solid fa-envelope icon"></i>';
              echo '<input type="text" placeholder="Correo Electronico" class="field" name="p_correo" id="p_correo">';
            echo '</div>';
            echo '<div class="input-contenedor">';
              echo '<i class="fa-solid fa-lock icon"></i>';
              echo '<input type="password" placeholder="Contraseña" class="field" name="p_pass" id="p_pass">';
            echo '</div>';
            echo '<a href="javascript:void(0,0)" onClick="validar_form()"><input type="submit" value="Registrate" class="button"></a>';
            echo '<h1 style="font-size: 20px;"><a href="#" class="link" style="text-align: center;">¿Ya tienes cuenta?</a></h1>';
          echo '</div>';
        echo '</form>';
      echo '</body>';
      echo '</html>';

    echo '</div>';
  echo '</div>';
echo '</body>';
echo '</html>';
?>
