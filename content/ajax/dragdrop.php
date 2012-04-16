<?php  if ( ! defined('BASEPATH')) exit('Infinite suffering and everlasting pain, Hell awaits for you');


$error_message[0] = "Unknown problem with upload.";
$error_message[1] = "Uploaded file too large (load_max_filesize).";
$error_message[2] = "Uploaded file too large (MAX_FILE_SIZE).";
$error_message[3] = "File was only partially uploaded.";
$error_message[4] = "Choose a file to upload.";

$upload_dir  = $config["upload_dir"];
$errors = "";

if ($_FILES['upload_file']['name']) {

  /*  if (!preg_match("/(gif|jpg|jpeg|png)$/",$_FILES['user_file']['name'][$i])) {
        echo "I asked for an image...";
    } else {
    	*/
    	
    	if ($_FILES["upload_file"]["size"]>= $config["upload_size"]) {
    		$errors .= ' "size" : "incorrect", ';
    	}
    	
		$errors = rtrim($errors,",");

	
	if (!$errors) {

			$ext = pathinfo($_FILES["upload_file"]["name"], PATHINFO_EXTENSION);

			$type = $item->getType($ext);
			    	
    		$newid = $item->createItem(-1,$_FILES['upload_file']['name'],$type,$_FILES['upload_file']['name']);
			//$newid = 666;

			$upload_dir .= "/items/".($newid %1024);
			@mkdir($upload_dir,0777,true);
			$upload_file = $upload_dir."/".$newid.".".$ext;
	    		
    		
        if (is_uploaded_file($_FILES['upload_file']['tmp_name'])) {
            if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $upload_file)) {
                /* Great success... */
                echo '{ "Result" : "Success" , "Newid" : "'.$newid.'" , "Name" : "'.$_FILES['upload_file']['name'].'", "Ext" : "'.$ext.'","Size" : "'.$_FILES['upload_file']['size'].'",  }';
            } else {
                echo '{ "Result" : "Error moving file" , "Newid" : "'.$newid.'" }';
            }
        } else {
                echo '{ "Result" : "No file uploaded" , "Newid" : "'.$newid.'" }';
        }    
   } else {
   		echo '{"Result" : "Error" , '.$errors.'}';
   }
}
?>