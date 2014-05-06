<?php
if(strlen($_POST["title"]) == 0){
	echo "Couldn't save";
	return;
}

$title = htmlspecialchars($_POST["title"]);
$manual = false;
if(isset($_POST["manual"])){
	$manual = filter_var($_POST["manual"], FILTER_VALIDATE_BOOLEAN);
}
$content = $_POST["content"];

$toEncode = array("Blog" => array("title" => $title, "contents" => $content));

$encodedJson = json_encode($toEncode);

if(json_last_error() != JSON_ERROR_NONE){
	throw new Exception(json_last_error_msg());
}
if($manual){
	$fileName = $_POST["fileName"];
}else{
	$fileName = date('Ymd') . "{$title[0]}";
}
file_put_contents("../json/{$fileName}.json", $encodedJson);
echo $fileName;

?>