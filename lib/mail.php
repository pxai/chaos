<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');


/**
* mail
* sending mails from chaos
*/
	
class LibMail {
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
	* sendemail
	* Sets proper headers and send email
	*/
	public function sendemail ($to,$subject,$message,$bcc,$from)
	{
			$headers = "From: ".$from . "\r\n" .
			"Reply-To: ".$from . "\r\n" .
			"X-Mailer: Chaos Mailer.";
			$headers .= ($bcc != "")?"Bcc: ".$bcc."\r\n":"";

			return mail($to, $subject, $message, $headers);

	}
	
}
?>