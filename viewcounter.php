<?php
function pageview_counter(){
if (isset($visitor)){
if ($visitor=="visited")
include("pageview-counter.php");
} else {
$file=fopen("pageview-counter.php","r+");
$result=fread($file,filesize("pageview-counter.php"));
fclose($file);
$result += 1;
$file=fopen("pageview-counter.php","w+");
fputs($file,$result);
fclose($file);
include("pageview-counter.php");
}
}
?>