<?php
/**
* gettags.php
* ajax handler for chaos creation
* Expected data:
*  q
*/
header("Content-type: text/json");
$tag =  filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);
//$tag = $_POST["q"];

$tags = $db->query("select * from tag where tag like '%".$tag."%'");

$result = "[";

for($i=0;$i<count($tags);$i++) {
	$result .= '"'.$tags[$i]["tag"].'",'; 
}

$result = rtrim($result,",") . " ]";

echo $result;

?>