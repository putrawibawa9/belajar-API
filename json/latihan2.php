<?php

$data = file_get_contents("coba.json");


$decode = json_decode($data,true);

echo $decode[0]["pembimbing"]["pembimbing1"];

?>