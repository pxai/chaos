<?php
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
		$item = $this->db->query("select * from item where id=" . $id);
		return $item[0];
	}
	
	/**
	* create
	* Creates a new item in chaos
	* returns newly created id
	*/
	public function createItem ($idchaos,$uploadname,$uploaddescription,$uploadtype,$url) {

		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
		$sql = "insert into item (idchaos,name,description,idtype,url,iduser) values (".$idchaos.",'".$uploadname."','".$uploaddescription."',".$uploadtype.",'".$url."',".$iduser.")";
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
		$linkneeded = array(5,6,8);
		$item = $this->selectItem($iditem);
		$iduser = ($_SESSION["iduser"])?$_SESSION["iduser"]:0;
		if (in_array($item["idtype"],$linkneeded)) 
			$sql = "update item set name='".$uploadname."',description='".$uploaddescription."',url='".$url."' where id=".$iditem ." and iduser=" . $iduser;
		else		
			$sql = "update item set name='".$uploadname."',description='".$uploaddescription."' where id=".$iditem ." and iduser=" . $iduser;

		$this->db->nonquery($sql);
		$cleanurl = $this->genCleanUrl($iditem, $uploadname);
		
		$sql = "update item set cleanurl='".$cleanurl."' where id=" . $iditem . " and iduser=".$iduser;
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
		
		$chaosterm = (!$chaos)?" idchaos > -1 ":" idchaos = ".$chaos;
		$searchterm = " (description like '%".$term."%' or item.name like '%".$term."%' or url like '%".$term."%' or chaos.name='%".$term."%')";
		$sql = "select item.id as id from item inner join chaos on item.idchaos=chaos.id where " . $chaosterm . " and ". $searchterm ." and (private=0 or (private=1 and item.iduser=".$_SESSION["iduser"].")) order by item.created desc limit 0,".$howmany;
		
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
	public function getLasts($howmany = 10, $chaos= 0 ) {
		$html = "";
		
		$items = $this->db->query("select id from item where idchaos=".$chaos. " order by created desc limit 0,".$howmany);
		
		foreach ($items as $item) {
			$html .= $this->getItem($item["id"]);
		}
		
		return $html;
	}
	
	/**
	* getItem
	* Checks if a chaos exists or not
	*/
	public function getItem ($id,$full=0) {
		$html = "";
		$item = $this->db->query("select item.*, tag.tag, item_type.name as typename, item_tag.idtag, user.login from item inner join item_type on item.idtype=item_type.id left join item_tag on item.id=item_tag.iditem left join tag on tag.id=item_tag.idtag left join user on user.id=iduser where item.id=".$id);

		if (count($item)) {
			$html .= '<div class="item" id="item-'.$id.'">';
			$title = (strlen($item[0]["name"])>30)?substr($item[0]["name"],0,30)."...":$item[0]["name"];
			$html .= '<div class="item-name"><a href="'.$item[0]["url"].'" title="'.$item[0]["name"].'">'.$title.'</a></div>';
			$type = strtolower($item[0]["typename"]);
			$username = ($item[0]["login"])?$item[0]["login"]:"Anonymous";
			$itemdate = date("F jS, Y", strtotime($item[0]["created"]));
			$edit = ($_SESSION["iduser"] == $item[0]["iduser"])?'<a href="'.$item[0]["id"].'" title="'._("edit item").'" class="item_edit">'._("edit").'</a> | <a href="'.$item[0]["id"].'" title="'._("delete item").'" class="item_delete">'._("delete").'</a>':'';
			$html .= '<div class="item-details"><span class="item-date">'.$itemdate.'</span><span class="item-user">'.sprintf(_(" by %s"),$username).' '.$edit.'</div>';
			$html .= '<div class="item-type"><a href="'.$item[0]["url"].'" title="'.$item[0]["name"].'"><img src="images/'.$type.'.gif" title="'.sprintf(_("This item is %s"),$type).'" alt="'.sprintf(_("This item is %s"),$type).'" class="type_'.$item[0]["idtype"].'" /></a></div>';
			if ($full)			
				$html .= $this->getItemvisualization($item[0]); 
			$html .= '<div class="item-description">'.$item[0]["description"].'</div>';
			$html .= '<div class="item-link"><a href="'.$item[0]["url"].'" title="'.$item[0]["name"].'">'._("Open").'</a></div>';
			$html .= '<div class="item-tags">';
			$html .= _("Tags: ")."<span>";
			foreach ($item as $it) {
				$html .= '<a href="?p=tag&tag='.$it["tag"].'" title="'.sprintf(_("Items tagged with %s"),$it["tag"]).'">'.$it["tag"].'</a>, ';
			}
			$html = rtrim($html,", ");
			$html .= '</span></div>';
			$html .= '</div>';
		}
		
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