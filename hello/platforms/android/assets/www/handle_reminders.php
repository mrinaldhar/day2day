<?php
$rem = $_GET['rem'];
$fp = fopen(”reminders.txt”, “a”);
$savestring = $rem . “,” . $id . “n”;
fwrite($fp, $savestring);
fclose($fp);
?>