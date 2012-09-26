<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');


/**
* util
* utils from chaos for chaos
* @author Pello Xabier Altadill Izura - http://pello.info
* 
* https://github.com/pxai/chaos
*/
	
class LibUtil {
	var $config;
	var $db;
	
	/**
	* __construct
	*
	*/
	public function __construct ($config,$db)
	{	
		$this->config = $config;
		$this->db = $db;
	}
	

	/**
	* genclearurl
	* del tí­tulo crea un url fijo.
	*/
	public function genclearurl ($url)
	{
		$resultado = "";
		// aportado por thyng

		$resultado = $this->delaccents($url);
		$resultado = preg_replace("/[^a-zA-Z0-9\s]/"," ",strtolower($resultado));
		$resultado = preg_replace("/[\s]+/","-",$resultado);
		$resultado = preg_replace("/[^a-zA-Z0-9]$/","",$resultado);
		return $resultado;
	}

	/*
	* delaccents
	* gracias Thyng
	*/
	private function delaccents($str)   
	{    
		 	if($this->is_utf($str))   
		 	 {        
		 		$str = utf8_decode($str);    
		 	}         
		 	$str = htmlentities($str);     
		 	$str = preg_replace('/&([a-zA-Z0-9])(uml|acute|grave|circ|tilde);/','$1',$str);     
		 	return html_entity_decode($str);   
	 }    

   private function is_utf ($t)
   {
       if ( @preg_match ('/.+/u', $t) )       
            return 1;
	}
}
?>