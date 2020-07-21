<?php
$rand = rand(1,4);
$url = 'https://cdn.jsdelivr.net/gh/kmj233/setu/images/'.$rand.'.jpg';
header("Location:".$url);
?>