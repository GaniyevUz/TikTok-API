<?php

$url = $_GET["url"];
$type = $_GET["type"];
$get = json_decode(file_get_contents("https://tikdown.org/getAjax?url=" . urlencode($url) . "&_token=t4JdZ9etWtvCbI68c77THtVyYJEtEp4DrGg2Af8W"), true);
print_r($get);
die();
$links = [];

$ex = explode('href="', $get['html']);
array_push($links,  explode('" name="download"', $ex[1])[0]);
array_push($links,  explode('" name="download"', $ex[2])[0]);

// header("content-type: application/json");
// echo json_encode($links, JSON_PRETTY_PRINT);
if($type == 1){
    header("location: ".$links[0]);
}else { 
    header("location: ".$links[1]);
}