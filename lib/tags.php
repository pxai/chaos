<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');


/**
* LibTags
* a chaos with tags would be less chaotic or not...
*/

class LibTags   {

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
	* getTags
	* Get tags for a given file
	*/
	public function getTags ($item)
	{

			$result = $this->db->query("SELECT tag.id, tag.tag FROM item_tag inner join (tag) on (item_tag.idtag=tag.id) WHERE iditem=".$item);
			return $result;
	}
	

	/**
	* setTags
	* setTags for item
	*/	
	public function setTags ($tags,$item)
	{
	

			$finaltags = array();
			$finaltagstext = array();
			
			$ts = preg_split("/,/",$tags);
			$ok = 1;
			foreach ($ts as $t)
			{
				$t = strtolower(trim($t));
			
				if ($t=="" || in_array($t,$finaltagstext)) continue;
			
				$result = $this->db->query("select * from tag where tag='".$t."'");
 
				if (count($result))
				{
					$r = $result[0];
					$finaltags[] = $r["id"];
				}
				else
				{
					$this->db->nonquery("insert into tag (tag) values ('".$t."')");
					$lastid = $this->db->insert_id();

					$finaltags[] = $lastid;
				}
					$finaltagstext[] = $t;
			}//foreach		
		
			// We delete previous
			$this->db->nonquery("delete from item_tag where iditem=".$item); 
	
			// And insert
			foreach ($finaltags as $ft)
			{
				$this->db->nonquery("insert into item_tag (iditem, idtag) values (".$item.",".$ft.")");
			}//foreach
					
	}
	

}
/* End of file tags.php */
/* Location: ./application/models/tags.php */