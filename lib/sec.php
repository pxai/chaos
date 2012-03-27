<?php
/**
* sec.php
* chaotic but let's trye to make it secure
*/



class LibSec {
	var $config;
	var $chars = "abcdefghjkmnpqrstuvwxyz23456789";
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
	* create
	* Creates a captcha image
	*/
	public function create () {
		$html = "";
		
		$captchakey = $this->captchastring();
		$captchauser =   $this->captchastring();
		
		$this->db->nonquery("insert into captcha (id,captcha) values ('".$captchakey."','".$captchauser."')");

		$html .= '<label for="captcha">'._("Solve this captcha").'</label><br />';
		$html .= '<img src="index?p=captcha&key='.$captchakey.'" alt="'._("Solve this captcha").'" title="'._("Solve this captcha").'" />';
		$html .= '<input type="hidden" name="captchakey" id="captchakey" value="'.$captchakey.'" /><span id="captchalog"></span><br />';
		$html .= '<input type="text" name="captcha" id="captcha" value="" /><span id="captchalog"></span><br />';
		
		
		return $html;
		
	}

	/**
	* captcrandomstringhastring
	* generates a random string
	*/
	public function randomstring ($long = 8) {
		$result = "";
		for ($i=0;$i<$long;$i++)
			$result .= substr($this->chars,rand(0,(strlen($this->chars)-1)),1);
			
		return $result;
	}

	
	/**
	* sanitize
	* Limpia un array o lo que se le diga
	*/
	public function sanitize ($what)
	{
		switch ($what)
		{
			case "post": 
							 foreach($_POST as $k => $v)
							 {
							 	$_POST[$k] = $this->striphtml($v);
							 }
							 break;
			case "get":  
							 foreach($_GET as $k => $v)
							 {
							 	$_GET[$k] = $this->striphtml($v);
							 }
							 break;
			default:     return strip_tags($what);
							 break;
		}
	}
	
	/**
	* striphtml
	* quita los simbolos < y >
	*/
	public function striphtml ($txt)
	{
		// Reemplazos sugeridos por el manual.
	
		$busqueda = array ('@<script[^>]*?>.*?</script>@si', // Remover javascript
                 '@<[\/\!]*?[^<>]*?>@si',          // Remover etiquetas HTML
                 '@&(quot|#34);@i',                // Reemplazar entidades HTML
                 '@&(amp|#38);@i',
                 '@&(lt|#60);@i',
                 '@&(gt|#62);@i',
                 '@&(nbsp|#160);@i',
                 '@&(iexcl|#161);@i',
                 '@&(cent|#162);@i',
                 '@&(pound|#163);@i',
                 '@&(copy|#169);@i',
                 '@&#(\d+);@e');                    // evaluar como php

		$reemplazar = array ('',
                  '\1',
                  '"',
                  '&',
                  '<',
                  '>',
                  ' ',
                  chr(161),
                  chr(162),
                  chr(163),
                  chr(169),
                  'chr(\1)');
                  
		$txt = preg_replace($busqueda, $reemplazar, $txt);
		$txt = htmlspecialchars($txt);
		return $txt;
	}

	

}

?>