<?php

ini_set ( 'error_reporting', E_ALL & ~ E_NOTICE );
ini_set ( 'display_errors', 1 );

include_once '../datos/class.usuario_sql.php';

class usuario_neg {

  private $parametros;
  private $usuario_sql;
  private $resultado;
  private $filas;

  private $id_app;
  private $ruta;
  private $tipo_app;
  private $nombre_app;

	public function usuario_neg() {}

	public function ObtieneXPks_neg($p_rut){
	  $this->parametros=get_defined_vars();

    $this->usuario_sql=new usuario_sql();
		$this->resultado=$this->usuario_sql->ObtieneXPks($this->parametros);
	}

  public function InsertarRegistro_neg($p_id_app, $ruta, $tipo_app, $nombre_app){
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
        $this->id_app				        = $this->resultado[$filas]['id_app'];
        $this->ruta      		        = $this->resultado[$filas]['ruta'];
        $this->tipo_app      		    = $this->resultado[$filas]['tipo_app'];
        $this->nombre_app           = $this->resultado[$filas]['nombre_app'];
    }

  }

  public function getId_app(){
		return $this->rut;
	}
  
  public function getRuta(){
		return $this->pass;
	}

  public function detTipo_app(){
		return $this->nombre;
	}
  public function getNombra_app(){
		return $this->fecha_creacion;
	}
}
?>
