<?php if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');

/**
* item.php
* items that creep in the chaos
*/



class LibItem {
	var $config;
	var $db;
	var $current;
	var $util;
		
	/**
	* __construct
	*
	*/
	public function __construct ($config,$db,$util)
	{	
		$this->config = $config;
		$this->db = $db;
		$this->util = $util;
	}
	
	
	/**
	* selectItem
	* given an id select that item
	*/
	public function selectItem ($id)
	{	
		$tags = "";	
		$item = $this->db->query("select item.*, chaos.name as chaosname from item left join chaos on chaos.id=item.idchaos where item.id=" . $id);
		$tag = $this->db->query("SELECT tag.id, tag.tag FROM item_tag inner join (tag) on (item_tag.idtag=tag.id) WHERE iditem=".$id);

		foreach ($tag as $t) {
			$tags .= $t["tag"].", ";
		}
		
		$tags = rtrim($tags,",");

		$this->current = $item[0];
		$this->current["tags"] = $tags;
		return $item[0];
	}

	/**
	* isOwner
	* Checks if user is owner of the item
	*/	
	public function isOwner($iditem,$iduser) {
		
		return ($this->current["iduser"] == $iduser || $this->current["sessionid"]==session_id());
	}
	
	/**
	* create
	* Creates a new item in chaos
	* returns newly created id
	*/
	public function createItem ($idchaos,$uploadname,$uploaddescription,$uploadtype,$url) {

		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
		$sessionid = ($iduser)?"":session_id();
		$sql = "insert into item (idchaos,name,description,idtype,url,iduser,sessionid) values (".$idchaos.",'".$uploadname."','".$uploaddescription."',".$uploadtype.",'".$url."',".$iduser.",'".$sessionid."')";
		$this->db->nonquery($sql);
		$newid = $this->db->insert_id(); 
		$cleanurl = $this->genCleanUrl($newid, $uploadname);
		
		$sql = "update item set cleanurl='".$cleanurl."' where id=" . $newid;
		$this->db->nonquery($sql);

		return $newid; 
	}

	/**
	* updateItem
	* Creates a new item in chaos
	* returns newly created id
	*/
	public function updateItem ($iditem,$uploadname,$uploaddescription,$url) {
		$linkneeded = array(1,4,5,6,8);
		$item = $this->selectItem($iditem);
		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
		if (in_array($item["idtype"],$linkneeded)) 
			$sql = "update item set name='".$uploadname."',description='".$uploaddescription."',url='".$url."' where id=".$iditem ." and ((iduser=" . $iduser .") or (sessionid='".session_id()."'))";
		else		
			$sql = "update item set name='".$uploadname."',description='".$uploaddescription."' where id=".$iditem ." and ((iduser=" . $iduser.") or (sessionid='".session_id()."'))";

		//echo $sql; exit;
		$this->db->nonquery($sql);
		$cleanurl = $this->genCleanUrl($iditem, $uploadname);
		
		$sql = "update item set cleanurl='".$cleanurl."' where id=" . $iditem . " and (iduser=".$iduser.") or (sessionid='".session_id()."')";
		$ok = $this->db->nonquery($sql);

		return $iditem; 
	}

	/**
	* deleteItem
	* Deletes an item in chaos
	* returns ok or not
	*/
	public function deleteItem ($iditem) {

		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
		$sql = "update item set idchaos=-1 where id=".$iditem ." and iduser=" . $iduser;
		$ok = $this->db->nonquery($sql);

		return $ok; 
	}	
	
	public function getType ($extension) {
		$extension = strtolower($extension);
		
		if (in_array($extension, $this->config["images"])) {return 1;}	
		if (in_array($extension, $this->config["video"])) {return 2;}			
		if (in_array($extension, $this->config["audio"])) {return 3;}	
		
		return 4;	
	}

	public function loadType () {
		$html = "";
		
		$types = $this->db->query("select * from item_type where active=1 order by id");
		foreach ($types as $t) {
			$name = strtolower($t["name"]);
			$html .='<li><a href="'.$t["id"].'" title="'._("Upload $name").'" id="upload_'.$name.'"><img src="images/'.$name.'.gif" title="'._("Upload $name").'" alt="'._("Upload $name").'" border="0"/></a></li>';
		}
		return $html;
		
	}
	
	private function genCleanUrl ($id,$title) {
		$clearurl = $this->util->genclearurl($title);

		$result = $this->db->query("select cleanurl from item where id<>".$id." and cleanurl like '%".$title."%'");
		
		if (count($result))
		{		
			$clearurl = $clearurl . "_" .(count($result)+1);
		}
		
		return $clearurl;
		
	}


	/**
	 * searchItems
	 * search items
	 */
	public function searchItems ($term, $chaos= 0, $howmany = 10) {
		$html = "";
		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:-1;
		$chaosterm = (!$chaos)?" item.idchaos > -1 ":" item.idchaos = ".$chaos;
		$searchterm = " (description like '%".$term."%' or item.name like '%".$term."%' or url like '%".$term."%' or chaos.name='%".$term."%')";
//		$sql = "select item.id as id from item inner join chaos on item.idchaos=chaos.id where " . $chaosterm . " and ". $searchterm ." and (chaostype>1 or (chaostype=1 and item.iduser=".$iduser.")) order by item.created desc limit 0,".$howmany;
		$sql = "select item.id as id from item left join chaos on item.idchaos=chaos.id left join chaos_user on chaos_user.idchaos=chaos.id where " . $chaosterm . " and ". $searchterm ." and (item.idchaos=0 or chaostype>1 or (chaostype=1 and chaos.iduser=".$iduser.") or (chaostype=1 and chaos_user.iduser=".$iduser.")) order by item.created desc limit 0,".$howmany;
		//echo $sql;
		$items = $this->db->query($sql);
		
		foreach ($items as $item) {
			$html .= $this->getItem($item["id"]);
		}
		
		return $html;
	}
	
	
	/**
	 * getLasts
	 * get last item
	 */
	public function getLasts($page = 0, $chaos= 0, $howmany=10 ) {
		$html = "";
		$this->current["id"] = $chaos;
		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:-1;
		if (!$chaos) {
			$sql = "select item.id from item left join chaos on item.idchaos=chaos.id where idchaos=0 or chaostype>1 order by item.created desc limit ".$page.",".$howmany;
		}else {
			$sql = "select id from item where idchaos=".$chaos. " order by created desc limit ".$page.",".$howmany;
		}
		$items = $this->db->query($sql);
		
		foreach ($items as $item) {
			$html .= $this->getItem($item["id"]);
		}
		
		return $html;
	}
	
	/**
	 * getByTag
	 * get last item
	 */
	public function getByTag($tag, $howmany = 10 ) {
		$html = "";
		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:-1;
		$sql = "select item_tag.iditem as id from item_tag left join ( tag ) on ( item_tag.idtag = tag.id ) left join item on item.id=item_tag.iditem  left join chaos  on chaos.id=item.idchaos  left join chaos_user on chaos_user.idchaos=chaos.id  where tag.tag =  '".$tag."' and (item.idchaos=0 or chaostype >1 or (chaostype =1 and chaos.iduser =  ".$iduser.") or (chaostype=1 and chaos_user.iduser=".$iduser."))order by item.created desc limit 0 , ".$howmany;		"select item.id as id from item inner join chaos on item.idchaos=chaos.id inner join item_tag on item_tag.iditem=item.id inner join (tag) on (item_tag.idtag=tag.id)inner join tag o where " . $chaosterm . " and ". $searchterm ." and (chaostype>1 or (chaostype=1 and item.iduser=".$iduser.")) order by item.created desc limit 0,".$howmany;
		//echo $sql;
		$items = $this->db->query($sql);
		
		foreach ($items as $item) {
			$html .= $this->getItem($item["id"]);
		}
		
		return $html;

	}
	
	/**
	* getItem
	* Given an id returns a block with the item
	*/
	public function getItem ($id,$full=0) {
		$html = "";
		$class = ($full)?"item full":"item";
		$item = $this->db->query("select chaos.name as chaosname, item.*, item_type.name as typename, user.login from item left join chaos on chaos.id=item.idchaos inner join item_type on item.idtype=item_type.id  left join user on user.id=item.iduser where item.id=".$id);

		if (count($item)) {
			$html .= '<div class="'.$class.'" id="item-'.$id.'">';
			$edit = (($_SESSION["iduser"] == $item[0]["iduser"]) || (session_id() == $item[0]["sessionid"]))?'<span class="item-edit"><a href="'.$item[0]["id"].'" title="'._("edit item").'" class="item_edit">'._("edit").'</a> | <a href="'.$item[0]["id"].'" title="'._("delete item").'" class="item_delete">'._("delete").'</a></span>':'';
			$type = strtolower($item[0]["typename"]);
			$html .= '<div class="item-type"><a href="'.$item[0]["url"].'" title="'.$item[0]["name"].'"><img src="images/'.$type.'.gif" title="'.sprintf(_("This item is %s"),$type).'" alt="'.sprintf(_("This item is %s"),$type).'" class="type_'.$item[0]["idtype"].'" /></a></div>';
			$title = (strlen($item[0]["name"])>30)?substr($item[0]["name"],0,30)."...":$item[0]["name"];
			$html .= '<div class="item-name"><a href="'.$item[0]["url"].'" title="'.$item[0]["name"].'">'.$title.'</a> '.$edit.'</div>';
			$username = ($item[0]["login"])?$item[0]["login"]:"Anonymous";
			$itemdate = date("F jS, Y", strtotime($item[0]["created"]));
			$html .= '<div class="item-details"><span class="item-date">'.$itemdate.'</span><span class="item-user">'.sprintf(_(" by %s"),$username). ' ';
			if (!$this->current["id"] && $item[0]["idchaos"]>0)
				$html .= '<span class="item-chaos">'._("in").' <a href="?p='.$item[0]["chaosname"].'" title="'.sprintf(_("Go to %s"),$item[0]["chaosname"]).'">'.$item[0]["chaosname"].'<img src="images/vortexlt.png" title="'.sprintf(_("Go to %s"),$item[0]["chaosname"]).'" alt="'.sprintf(_("Go to %s"),$item[0]["chaosname"]).'"  /></a></span>';
			$html .= '</div>';
			if ($full) {
				$html .= $this->getItemvisualization($item[0]); 
				$descriptiontext = $item[0]["description"];
			} else {
				$descriptiontext = substr($item[0]["description"],0,30);
			}
			$html .= '<div class="item-description">&nbsp;'.$descriptiontext.'</div>';
			$html .= '<div class="item-link"><a href="'.$item[0]["url"].'" title="'.$item[0]["name"].'">'._("Open").'</a></div>';
			$html .= '<div class="item-tags">';
			$html .= '<img src="images/tags.png" title="'._("Tags").'" alt="'._("Tags").'"  /> <span> ';
							$tags = $this->db->query("SELECT tag.id, tag.tag FROM item_tag inner join (tag) on (item_tag.idtag=tag.id) WHERE iditem=".$id);
			foreach ($tags as $tag) {
				$html .= '<a href="?p=tag&tag='.$tag["tag"].'" title="'.sprintf(_("Items tagged with %s"),$tag["tag"]).'">'.$tag["tag"].'</a>, ';
			}
			$html = rtrim($html,", ");
			$html .= '</span></div>';
			$html .= '</div>';
		}
		
		return $html;
	}
	
	/**
	* getItemJson
	* Given an id returns a block with the item
	*/
	public function getItemJson ($id) {
		$item = $this->db->query("select chaos.name as chaosname, item.*, item_type.name as typename, user.login from item left join chaos on chaos.id=item.idchaos inner join item_type on item.idtype=item_type.id  left join user on user.id=item.iduser where item.id=".$id);

		if (count($item) &&  (($_SESSION["iduser"] == $item[0]["iduser"]) || (session_id() == $item[0]["sessionid"]))) {
			$html .= '{ "Id" : "'.$id.'" ,';
			$html .= ' "Chaos" : "'.$item[0]["idchaos"].'" ,';
			$html .= ' "Name" : "'.$item[0]["name"].'" ,';
			$html .= ' "Description" : "'.$item[0]["description"].'" ,';
			$html .= ' "Url" : "'.$item[0]["url"].'" ,';
			$html .= ' "Idtype" : "'.$item[0]["idtype"].'" ,';
			$html .= ' "Tags" : "';
			$tags = $this->db->query("SELECT tag.id, tag.tag FROM item_tag inner join (tag) on (item_tag.idtag=tag.id) WHERE iditem=".$id);
			foreach ($tags as $tag) {
				$html .= $tag["tag"].', ';
			}
			$html = rtrim($html,", ");
			$html .= '"';
		} else {
			$html = '{ "Result" : "Error" ';
			}

		$html .= ' }';
		
		return $html;
	}
	
	/**
	* getItemvisualization
	* creates correct xhtml for item type
	*/
	public function getItemvisualization ($item) {
		$html = "";
		switch ($item["idtype"]) {
			case 1:  // image
						$html .= '<img src="'.$item["url"].'" title="'.$item["name"].'" alt="'.$item["name"].'" />';
						break;
			case 2:  // video
						$html .= '<video src="'.$item["url"].'" title="'.$item["name"].'"></video>';
						break;
			case 3:  // audio
						$html .= '<audio controls="controls">
  									<source src="'.$item["url"].'" type="audio/mpeg" />
  											'._("Your browser does not support the audio element.").'</audio>';
						break;
			default:
						$html .= '<a href="'.$item["url"].'" title="'._("Download").' '.$item["name"].'">'._("Download").'</a>';
						break;
		}
		
		return $html;
	}

}

?>