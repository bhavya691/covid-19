<?php
$data = file_get_contents('https://api.covid19api.com/summary');
$cd = json_decode($data,true);
echo "<pre>";
print_r($cd);

?>