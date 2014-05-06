<?php

function getNavBar(){
	return '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php?name=welcome">Home</a></li>
            <li><a href="newpost.php">New Post</a></li>
            <li><a href="editpost.php">Edit Post</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>';
}

function getPost($get){
   $openDefault = false;
  if(isset($get["name"])){
    $fileContents = file_get_contents("json/" . htmlspecialchars($get["name"]) . ".json");
    if($fileContents != false){
      $contents = json_decode($fileContents, true);
    }else{
      $openDefault = true;
    }
  }else{
    $openDefault = true;
  }

  if($openDefault){
    $contents = json_decode(file_get_contents("json/default.json"), true);
  }
  return $contents;
}
?>