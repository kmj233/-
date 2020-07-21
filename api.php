<?php

$rand = rand(1,4);
$url = 'https://cdn.jsdelivr.net/gh/kmj233/setu@V-2.0/images/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>