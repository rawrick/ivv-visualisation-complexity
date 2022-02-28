<?php
$sliders = $_REQUEST['sliders'];
$filename = "sliders_complex_01.txt";
$content = file($filename);
$fp = fopen($filename,"w");
fputs($fp,$sliders);
fclose($fp);
?>