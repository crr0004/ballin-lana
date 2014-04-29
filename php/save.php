<?php

$title = htmlspecialchars($_POST["title"]);
$content = $_POST["content"];

$toEncode = array("Blog" => array("title" => $title, "contents" => $content));

$encodedJson = json_encode($toEncode);

if(json_last_error() != JSON_ERROR_NONE){
	throw new Exception(json_last_error_msg());
}
$fileName = date('Ymd') . "{$title[0]}";
file_put_contents("../json/{$fileName}.json", $encodedJson);
echo $fileName;

?>