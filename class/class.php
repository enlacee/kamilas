<?php
if (!isset($_SESSION)) {
  session_start();
}

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . DS);
error_reporting(1);
include APP_PATH."/config.php";

abstract class Config
{

	//Attribute is defined as Array, returns system settings
	protected $dbh; //DB System
	/**
	* Connect to the database
	* Returns valid data Connection
	* 
	* @access protected
	*/
	protected function connectDataBase()
	{
		$IncArray = $this->configArray = ConfigSQL::configDB();
				
        try {
        	$dbConnect =  $this->dbh = new PDO('mysql:host='.$IncArray["servidor"].';
											dbname='.$IncArray["basedato"].'', 
											$IncArray["usuario"], 
											$IncArray["clave"]);
			$dbConnect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbConnect;
        } 
		catch (PDOException $e){	
           die ("Error");
        }
	}
	
	
	
	/**
	* Get IP
	* Return IP Browser
	* 
	* @access protected
	*/
	protected function getIP()
	{
		
		if (isset($_SERVER)) {
			if (isset($_SERVER["HTTP_CLIENT_IP"])) {
					
				return $_SERVER["HTTP_CLIENT_IP"];	
			} 
			elseif(isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {			
				return $_SERVER["HTTP_X_FORWARDED_FOR"];		
			} 
			elseif(isset($_SERVER["HTTP_X_FORWARDED"])) {		
				return $_SERVER["HTTP_X_FORWARDED"];		
			} 
			elseif(isset($_SERVER["HTTP_FORWARDED_FOR"])) {		
				return $_SERVER["HTTP_FORWARDED_FOR"];	
			} 
			elseif(isset($_SERVER["HTTP_FORWARDED"])) {						
				return $_SERVER["HTTP_FORWARDED"];	
			} else {		
				return $_SERVER["REMOTE_ADDR"];
			}
		} else {	
			return $_SERVER["REMOTE_ADDR"];	
		}
	}

}


class Apps extends Config
{
	private $_db;
	private $_getFertilidad;
	private $_getAdn;
	private $_getPreconcepcion;
	private $_getPlanificacion;
	private $_getEmbarazo;
	private $_getCadaSemana;
	private $_getCuidadosMama;
	private $_getCuidadosBebe;
	private $_getBabyShower;
	private $_getParto;
	private $_getPostParto;

	
	/**
	* Initializes all attributes
	* 
	* @access public
	*/
	public function __construct()
	{
		$this->_db					= parent::connectDataBase();
		$this->_getFertilidad 		= array();
		$this->_getAdn 				= array();
		$this->_getPreconcepcion 	= array();
		$this->_getPlanificacion 	= array();
		$this->_getEmbarazo 		= array();
		$this->_getCadaSemana 		= array();
		$this->_getCuidadosMama 	= array();
		$this->_getCuidadosBebe 	= array();
		$this->_getBabyShower 		= array();
		$this->_getParto 			= array();
		$this->_getPostParto 		= array();
	}

	
	
	/**
	* Corrige errores de los acentos
	* 
	* @access private
	*/
	static public function acentos($str)
	{
		$procesa = array(
						'�' => '&aacute;',
						'�' => '&eacute;',
						'�' => '&iacute;',
						'�' => '&oacute;',
						'�' => '&uacute;',
						'�' => '&ntilde;',
						'�' => '&Ntilde;',
						'�' => '&auml;',
						'�' => '&euml;',
						'�' => '&iuml;',
						'�' => '&ouml;',
						'�' => '&uuml;',
						'á' => '&aacute;', 
						'é' => '&eacute;', 
						'í' => '&iacute;', 
						'ó' => '&oacute;', 
						'ú' => '&uacute;',
						'Á' => '&aacute;', 
						'É' => '&eacute;', 
						'Í' => '&iacute;', 
						'Ó' => '&oacute;', 
						'Ú' => '&uacute;', 
						'ñ' => '&ntilde;',
						'Ñ' => '&Ntilde;', 
						'ä' => '&auml;', 
						'ë' => '&euml;',
						'ï' => '&iuml;', 
						'ö' => '&ouml;', 
						'ü' => '&uuml;'); 
		return strtr( $str , $procesa );
		 
		 
	}
	
	
	/**
	* Modo de ocnsulta
	* 
	* @access public 
	*/
	private function acentosQuery()
    {
        return $this->dbh->query("SET NAMES 'utf8'");    
    }
	
	


	

	
	/**
	* Fertilidad
	*/
	public function getFertilidad($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM fertilidad WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getFertilidad[] = $row;
			}
		}
		return $this->_getFertilidad;
	}
	
	
	/**
	* Adn y Genetica
	*/
	public function getAdn($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM adn WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getAdn[] = $row;
			}
		}
		return $this->_getAdn;
	}
	
	
	
	
	/**
	* Muestra informacion preconcepcion.
	*/
	public function getPreconcepcion($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM preconcepcion WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getPreconcepcion[] = $row;
			}
		}
		return $this->_getPreconcepcion;
	}
	
	
	
	
	/**
	* Planificacion
	*/
	public function getPlanificacion($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM planificacion WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getPlanificacion[] = $row;
			}
		}
		return $this->_getPlanificacion;
	}





		
	
	
	/**
	* Muestra informacion embarazo.
	*/
	public function getEmbarazo($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM embarazo WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getEmbarazo[] = $row;
			}
		}
		return $this->_getEmbarazo;
	}
	
	
	
	
	/**
	* Cada Semana
	*/
	public function getCadaSemana($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM cada_semana WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getCadaSemana[] = $row;
			}
		}
		return $this->_getCadaSemana;
	}




	/**
	*  Cuidados de mama
	*/
	public function getCuidadosMama($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM cuidados_de_mama WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getCuidadosMama[] = $row;
			}
		}
		return $this->_getCuidadosMama;
	}



	/**
	*  Cuidados del bebe
	*/
	public function getCuidadosBebe($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM cuidados_del_bebe WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getCuidadosBebe[] = $row;
			}
		}
		return $this->_getCuidadosBebe;
	}




	/**
	* Baby Shower
	*/
	public function getBabyShower($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM baby_shower WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getBabyShower[] = $row;
			}
		}
		return $this->_getBabyShower;
	}
	
	
	
	/**
	* Parto
	*/
	public function getParto($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM parto WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getParto[] = $row;
			}
		}
		return $this->_getParto;
	}
	
	
	
	
	/**
	* Post Parto
	*/
	public function getPostParto($id)
	{
		Apps::acentosQuery();
		$sql = "SELECT * FROM post_parto WHERE id =? ;";
		$sqlQuery = $this->_db->prepare($sql);
		$sqlQuery->setFetchMode(PDO::FETCH_ASSOC);
	
		if($sqlQuery->execute( array( $id ) )){
	
			while($row = $sqlQuery->fetch()){
	
				$this->_getPostParto[] = $row;
			}
		}
		return $this->_getPostParto;
	}



}












$instancia = new Apps();






















?>