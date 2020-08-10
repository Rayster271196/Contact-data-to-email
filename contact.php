<?php
//variables
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

mail("raysterfds@gmail.com",$subject,$message,"From: $name<$email>");
?>