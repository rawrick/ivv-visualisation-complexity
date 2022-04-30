<?php
$email = $_REQUEST['email'];
$filemain = "emails.txt";
$content = file($filemain);
$fp = fopen($filemain,"a");
fputs($fp,"\n");
fputs($fp,$email);
fclose($fp);
?>