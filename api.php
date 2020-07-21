<?php

$rand = rand(1,201);
$url = 'https://cdn.jsdelivr.net/gh/kmj233/setu/setu/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>