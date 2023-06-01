<?php

ini_set ( 'error_reporting', E_ALL & ~ E_NOTICE );
ini_set ( 'display_errors', 1 );

include_once '../datos/class.usuario_sql.php';

class usuario_neg {

  private $parametros;
  private $usuario_sql;
  private $resultado;
  private $filas;

  private $rut;
  private $pass;
  private $nombre;
  private $fecha_creacion;
  private $correo;


	public function usuario_neg(){}

	public function ObtieneXPks_neg($p_rut){
	  $this->parametros=get_defined_vars();

    $this->usuario_sql=new usuario_sql();
		$this->resultado=$this->usuario_sql->ObtieneXPks($this->parametros);
	}
/*
  public function InsertarRegistro_neg($p_rut, $p_pass, $p_nombre, $p_fecha, $p_correo){
	  $this->parametros=get_defined_vars();

    $this->usuario_sql=new usuario_sql();
		$this->resultado=$this->usuario_sql->InsertarRegistro($this->parametros);
	}*/

  public function getFilas(){
		$this->filas=count($this->resultado);
		return $this->filas;
	}	

  public function getSet($filas=0){
    if($this->getFilas()>0){
        $this->rut				        = $this->resultado[$filas]['rut'];
        $this->pass      		      = $this->resultado[$filas]['pass'];
        $this->nombre      		    = $this->resultado[$filas]['nombre'];
        $this->fecha_creacion     = $this->resultado[$filas]['fecha_creacion'];
        $this->correo      		    = $this->resultado[$filas]['correo'];
    }
  }

  public function getRut(){
		return $this->rut;
	}
  
  public function getContraseña(){
		return $this->pass;
	}

  public function getNombre(){
		return $this->nombre;
	}

  public function getFecha_Creacion(){
		return $this->fecha_creacion;
	}

  public function getCorreo(){
		return $this->correo;
	}
}
?>
