<?php

class usuario_sql {
	public function usuario_sql() {} 

	public function conexion_bd(){

		$this->host='localhost';
		$this->user='root';
		$this->pass='';
		$this->BD='kronos-web';
		$this->error=null;

		try {
			$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->BD, $this->user, $this->pass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			$this->error='Conexión Fallida: '.$e->getMessage().' Linea: '.__LINE__;
		}
	}

	public function ejecuta_query($p_query,$p_parametros){

		try {
			$this->ejec_query=$this->conn->prepare($p_query);

			foreach($p_parametros as $key => $val) {
	
				$key='$'.$key;
	
				if(is_bool($val)){
					$val_type = PDO::PARAM_BOOL;
				}elseif(is_int($val)){
					$val_type = PDO::PARAM_INT;
				}else{
					$val_type = PDO::PARAM_STR;
				}
	
				$this->ejec_query->bindParam(str_replace('$p',':v',$key), $val, $val_type);
			}
			
			$this->ejec_query->execute();
			$this->resultado = $this->ejec_query->fetchAll(PDO::FETCH_ASSOC);

		} catch(PDOException $e) {
			$this->error='Error Query: '.$e->getMessage().' Linea: '.__LINE__;
		}
	}

	public function ObtieneXPks($p_parametros) {

		$query='select rut,id_app
				from rol_app
				where rut = :v_rut;';
		
		$this->conexion_bd();
		$this->ejecuta_query($query,$p_parametros);
		return $this->resultado;
	}

	public function InsertarRegistro($p_parametros) {

		$query='insert into rol_app
					(rut,id_app)
				values
					(:v_rut,:v_id_app)
				';
			
		$this->conexion_bd();
		$this->ejecuta_query($query,$p_parametros);
		return $this->resultado;
	}
}
?>