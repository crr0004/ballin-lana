<!DOCTYPE html>
<html>
<head>
	<title>Home Page - Developer BreakDown</title>
	<link href="css/index.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
	<link href="css/posts.css" rel="stylesheet">
</head>

<body>

<!-- Nav Bar -->
<div class="navbar">
	<a href="#home">Developer Breakdown | Chris Rhodes</a>
	<div>
		<a href="index.php">Home</a>
		<a href="#games">Games</a>
		<a href="post.php">Ramblings</a>
		<a href="#about">About Me</a>
	</div>
</div>
<!-- End Nav bar -->
<!-- Blog entry -->

<div class="entry">
hello
</div>

<div class="entrynav">
	<ul class="entrydate">
		<span>6/6/2014</span>
		<li>Entry</li>
		<li>Entry</li>
	</ul>
	<ul class="entrydate">
		<span>13/6/2014</span>
		<li>Entry</li>
		<li>Entry</li>
	</ul>
	<ul class="entrydate">
		<span>20/6/2014</span>
		<li>Entry</li>
		<li>Entry</li>
	</ul>
</div>

<!-- Blog entry end -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- Blog navbar script -->

<script type="text/javascript">
	$(".entrydate").click(function(){
		$(".entrydateactive").attr("class", "entrydate");
		$(this).attr("class", "entrydateactive");
	});
	$(".entrydate").first().attr("class", "entrydateactive");
</script>

<!-- Blog navbar script end -->
</body>
</html>