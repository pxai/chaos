<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* db.php
* the chaos also needs somewhere to save its content
*/



class LibCaptcha {
	var $config;
	var $chars = "ABCDEFGHJKMNPRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789";
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
	public function create ($long=8) {
		$html = "";
		
		$captchakey = $this->captchastring($long);
		$captchauser =   $this->captchastring($long);
		
		$this->db->nonquery("insert into captcha (id,captcha) values ('".$captchakey."','".$captchauser."')");

		$html .= '<label for="captcha">'._("Solve this captcha").'</label><br />';
		$html .= '<img src="index.php?p=captcha&key='.$captchakey.'" alt="'._("Solve this captcha").'" title="'._("Solve this captcha").'" />';
		$html .= '<input type="hidden" name="captchakey" id="captchakey" value="'.$captchakey.'" /><span id="captchalog"></span><br />';
		$html .= '<input type="text" name="captcha" id="captcha" value="" /><span id="captchalog"></span><br />';
		
		
		return $html;
		
	}

	/**
	* captchastring
	* generates a captcha string
	*/
	public function captchastring ($long = 8) {
		$result = "";
		for ($i=0;$i<$long;$i++)
			$result .= substr($this->chars,rand(0,(strlen($this->chars)-1)),1);
			
		return $result;
	}

	/**
	* validate
	* validates a captcha image
	*/
	public function validate ($key,$string) {
		$isvalid = false;

		if (!key || !$string) { return false;}		
		
		$reg = $this->db->query("select * from captcha where id='".$key."' and captcha='".$string."'");
		$isvalid = ($reg[0]["captcha"] == $string);

				
		return $isvalid;
		
	}

	/**
	* drop
	* deletes captcha from db
	*/
	public function drop ($key) {
		$this->db->nonquery("delete from captcha where id='".$key."'");
	}
	
	/**
	* create
	* Creates a captcha image
	*/
	public function generate ($text) {
		header("Content-type: image/png");
		$height = 32;
		$width = 100;
		$im = ImageCreate($width, $height);
		// fore and back colors
		$fc = array(rand(0,255),rand(0,255),rand(0,255));
		$bc = array(rand(0,255),rand(0,255),rand(0,255));
		
		$im = ImageCreate($width, $height);
		$bck = ImageColorAllocate($im, $bc[0],$bc[1],$bc[2]);
		ImageFill($im, 0, 0, $bck);
		ImageLine($im, 0, 0, $width, $height, $white);
 		for($i=0;$i<=99;$i=$i+10) {
			ImageLine($im, 0, $i, $width, $height, $white); } 
		$txt_color = ImageColorAllocate ($im, 255, 255, 255);
 		ImageString ($im, 31, 5, 5,  $text , $txt_color);
		ImagePNG($im);
	}
	
	

}

?>