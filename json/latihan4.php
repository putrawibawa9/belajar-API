<?php

$data = file_get_contents("food.json");


$decode = json_decode($data,true);

echo $decode["foodCategories"][0]["foods"][1];

?>