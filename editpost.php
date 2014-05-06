<!DOCTYPE html>

<?php include 'php/info.php' ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Post</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">
    <link href="css/editpost.css" rel="stylesheet">


  </head>
  <?php

    $blog = getPost($_GET)['Blog'];
    $defaultPost = false;
    if($blog["title"] == "File not found"){
      $defaultPost = true;
    }

    function getBlogValue($blog, $name, $defaultPost){
      if($defaultPost){
        return "";
      }else{
        return $blog[$name];
      }
    }
  ?>
  <body>

<!-- Work around for getting the name of the post through to javascript. Not a security hole because this page is only viewable to the author and not the public -->
  <p class="nodisplay" id="fileName"><?php if(!$defaultPost){echo $_GET["name"];} ?></p>

    <?php echo getNavBar(); ?>

    <div class="container content">

      <div class="input-group input-group-lg">
       <input type="text" id="title" class="form-control" placeholder="Title"
       value=<?php echo getBlogValue($blog, "title", $defaultPost) ?>>
      </div>

      <div class="input-group">
        <textarea id="pagecontent" rows="10" cols="45"><?php echo getBlogValue($blog, "contents", $defaultPost) ?></textarea>
        <button type="button" onclick="saveEdit();">Save</button>
      </div>

      <a id="link" target="_blank" href="#"></a>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">
    function saveEdit(){
      saveManual(document.getElementById("title").value, document.getElementById("pagecontent").value, true);
    }
    </script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/blogcms.js"></script>
  </body>
</html>
