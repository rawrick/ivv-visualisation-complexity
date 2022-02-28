<?php
$sliders = $_REQUEST['sliders'];
$freetext = $_REQUEST['freetext'];
$filename = "feedback_complex_01.txt";
$content = file($filename);
$fp = fopen($filename,"w");
fputs($fp,$sliders);
fputs($fp,$freetext);
fclose($fp);
?>