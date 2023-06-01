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
  private $registro_inicio;

	public function usuario_neg() {}

	public function ObtieneXPks_neg($p_rut){
	  $this->parametros=get_defined_vars();

    $this->usuario_sql=new usuario_sql();
		$this->resultado=$this->usuario_sql->ObtieneXPks($this->parametros);
	}

  public function InsertarRegistro_neg($p_rut, $registro_inicio){
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
        $this->registro_inicio    = $this->resultado[$filas]['registro_inicio'];
    }

  }

  public function getRut(){
		return $this->rut;
	}
  
  public function getRegistro_usuario(){
		return $this->pass;
	}
}
?>
