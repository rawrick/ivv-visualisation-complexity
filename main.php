<?php
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$occupation = $_REQUEST['occupation'];
$group = $_REQUEST['group'];
$topic_1 = $_REQUEST['topic_1'];
$sliders_1 = $_REQUEST['sliders_1'];
$feedback_1 = $_REQUEST['feedback_1'];
$freetext_1 = $_REQUEST['freetext_1'];
$topic_2 = $_REQUEST['topic_2'];
$sliders_2 = $_REQUEST['sliders_2'];
$feedback_2 = $_REQUEST['feedback_2'];
$freetext_2 = $_REQUEST['freetext_2'];
$filemain = "main.txt";
$content = file($filemain);
$fp = fopen($filemain,"a");
fputs($fp,"\n");
fputs($fp,$age . ";");
fputs($fp,$gender . ";");
fputs($fp,$occupation . ";");
fputs($fp,$group . ";");
fputs($fp,$topic_1 . ";");
fputs($fp,$sliders_1 . ";");
fputs($fp,$feedback_1 . ";");
fputs($fp,$freetext_1 . ";");
fputs($fp,$topic_2 . ";");
fputs($fp,$sliders_2 . ";");
fputs($fp,$feedback_2 . ";");
fputs($fp,$freetext_2);
fclose($fp);
?>