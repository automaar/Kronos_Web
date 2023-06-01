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
  private $rol;

	public function usuario_neg() {}

	public function ObtieneXPks_neg($p_rut){
	  $this->parametros=get_defined_vars();

    $this->usuario_sql=new usuario_sql();
		$this->resultado=$this->usuario_sql->ObtieneXPks($this->parametros);
	}

  public function InsertarRegistro_neg($p_rut,$p_rol){
	  $this->parametros=get_defined_vars();

    $this->usuario_sql=new usuario_sql();
		$this->resultado=$this->usuario_sql->InsertarRegistro($this->parametros);
	}

  public function getFilas(){
		$this->filas=count($this->resultado);
		return $this->filas;
	}	

  public function getSet($filas=0){
        
    if($this->getFilas()>0){
        $this->rut				        = $this->resultado[$filas]['rut'];
        $this->rol      		      = $this->resultado[$filas]['rol'];
    }
  }

  public function getRut(){
		return $this->rut;
	}
  
  public function getRol(){
		return $this->rol;
	}
}
?>
