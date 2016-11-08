<?php
/* author: Ridwan website: http://blogciqwan.com/ */ 
//Defining Constants 
define('HOST','localhost'); 
define('USER','admin_adit'); 
define('PASS','silahkanmasuk123'); 
define('DB','admin_adit'); 
//Connecting to Database 
$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); 
?>