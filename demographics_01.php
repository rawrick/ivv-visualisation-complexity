<?php
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$occupation = $_REQUEST['occupation'];
$email = $_REQUEST['email'];
$filename = "demographics_01.txt";
$content = file($filename);
$fp = fopen($filename,"w");
fputs($fp,$age);
fputs($fp,$gender);
fputs($fp,$occupation);
fputs($fp,$email);
fclose($fp);
?>