<?php
/**
* create_ajax.php
* ajax handler for chaos creation
* Expected data:
*  chaosname
*  privatechaos
*  securityquestion
*  securityanswer
*/

$characters = ($user->logged)?3:8;
echo $captcha->create($characters);

?>