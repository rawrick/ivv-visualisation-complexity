<?php
$sliders = $_REQUEST['sliders']; 
$filename = "sliders_no_vis_01.txt";
$content = file($filename);
$fp = fopen($filename,"w");
fputs($fp,$sliders);
fclose($fp);
?>