<?php
$id = $_REQUEST['id'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$occupation = $_REQUEST['occupation'];
$email = $_REQUEST['email'];
$sliders_1 = $_REQUEST['sliders_1'];
$feedback_1 = $_REQUEST['feedback_1'];
$freetext_1 = $_REQUEST['freetext_1'];
$sliders_2 = $_REQUEST['sliders_2'];
$feedback_2 = $_REQUEST['feedback_2'];
$freetext_2 = $_REQUEST['freetext_2'];
$filename = "main.txt";
$content = file($filename);
$fp = fopen($filename,"w");
fputs($fp,"\n");
fputs($fp,$id);
fputs($fp,$age);
fputs($fp,$gender);
fputs($fp,$occupation);
fputs($fp,$sliders_1);
fputs($fp,$feedback_1);
fputs($fp,$freetext_1);
fputs($fp,$sliders_2);
fputs($fp,$feedback_2);
fputs($fp,$freetext_2);
fputs($fp,$email);
fclose($fp);
?>