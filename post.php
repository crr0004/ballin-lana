<!DOCTYPE html>
<html>
<head>
	<title>Home Page - Developer BreakDown</title>
	<link href="css/reset.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/posts.css" rel="stylesheet">

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
</head>

<body>
<!-- Blog entry nav -->

<div class="entry">
	<h3>Blog title</h3>
	<div class="entrycontent">
		<p class="intropara">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae nunc fringilla, condimentum nulla sed, sollicitudin risus. </p>
		<br>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae nunc fringilla, condimentum nulla sed, sollicitudin risus. In diam erat, gravida vitae aliquam vel, auctor eget massa. Nullam dictum, dui sit amet pellentesque feugiat, lorem metus iaculis dolor, ut imperdiet libero orci vel justo. Quisque tincidunt, sapien vel dictum dictum, orci justo ultrices erat, in accumsan quam dolor nec leo. Sed non vestibulum eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed dapibus volutpat tellus ultrices tempor. Aenean eu metus et purus pretium fringilla a non neque.</p>
		<h4>Sub Title</h4>
		<p>Fusce nec velit nec massa sagittis venenatis. Fusce vel ultrices nisi, in pulvinar felis. Nunc molestie neque ac aliquet viverra. Aenean quis varius orci. Etiam porttitor, enim eget mattis adipiscing, ipsum orci auctor augue, fringilla congue nunc lacus consectetur ipsum. Nullam semper, tortor nec facilisis iaculis, ligula sapien congue metus, ut imperdiet urna justo a felis. In hac habitasse platea dictumst. Nullam id massa at nisi ultrices tempus sit amet eu metus. Duis varius dui tortor. Duis vitae malesuada neque, sed faucibus mauris. Integer non nulla cursus, sodales arcu vitae, vulputate nulla. Ut ultricies in nisl vitae imperdiet. Donec ultricies vitae diam euismod laoreet.</p>
		<p>Vestibulum erat dui, tincidunt sed volutpat et, semper venenatis urna. Vivamus euismod interdum lorem, sed mollis massa pellentesque eget. Sed lectus nulla, tempus sit amet interdum ac, egestas quis ipsum. Nulla sed est quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc luctus justo quam, eu molestie elit gravida vel. Sed a purus neque. Nullam a felis in risus aliquam ultricies vitae in tortor. Aenean laoreet orci ac elit eleifend, quis ultricies magna tincidunt. Vestibulum pretium justo tincidunt ante ultricies convallis. Suspendisse blandit magna a dui porta, id viverra est lobortis. Suspendisse pulvinar neque ac elementum cursus. Maecenas vitae mi imperdiet, vehicula lectus et, auctor enim. In hendrerit viverra diam non posuere. Pellentesque non aliquet est. In hac habitasse platea dictumst.</p>
	</div>
</div>

<ul class="entrynav">
	<span>6/6/2014</span>
	<ul class="entrydate">
		<li>Entry</li>
		<li>Entry</li>
	</ul>
	<span>13/6/14</span>
	<ul class="entrydate">
		<li>Entry</li>
		<li>Entry</li>
	</ul>
	<span>20/6/14</span>
	<ul class="entrydate">
		<li>Entry</li>
		<li>Entry</li>
	</ul>
</ul>

<!-- Blog entry nav end -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- Blog navbar script -->

<script type="text/javascript">
	$(".entrynav span").click(function(){
		$(".entrydateactive").attr("class", "entrydate");
		console.log($(this))
		console.log($(this).next());
		$(this).next().attr("class", "entrydateactive");
	});
	$(".entrydate").first().attr("class", "entrydateactive");
</script>

<!-- Blog navbar script end -->
</body>
</html>