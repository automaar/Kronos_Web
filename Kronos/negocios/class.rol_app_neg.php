<?php

ini_set ( 'error_reporting', E_ALL & ~ E_NOTICE );
ini_set ( 'display_errors', 1 );

include_once '../datos/class.usuario_sql.php';

class usuario_neg {

  private $parametros;
  private $usuario_sql;
  private $resultado;
  private $filas;

  private $rol;
  private $id_app;


	public function usuario_neg() {}

	public function ObtieneXPks_neg($p_rut){
	  $this->parametros=get_defined_vars();

    $this->usuario_sql=new usuario_sql();
		$this->resultado=$this->usuario_sql->ObtieneXPks($this->parametros);
	}

  public function InsertarRegistro_neg($p_rol,$p_id_app){
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
        $this->rol				          = $this->resultado[$filas]['rol'];
        $this->id_app      		      = $this->resultado[$filas]['id_app'];
    }

  }

  public function getRol(){
		return $this->rut;
	}
  
  public function getId_app(){
		return $this->id_app;
	}
}
?>
