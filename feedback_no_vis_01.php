<?php
$sliders = $_REQUEST['sliders'];
$freetext = $_REQUEST['freetext'];
$filename = "feedback_no_vis_01.txt";
$content = file($filename);
$fp = fopen($filename,"w");
fputs($fp,$sliders);
fputs($fp,$freetext);
fclose($fp);
?>