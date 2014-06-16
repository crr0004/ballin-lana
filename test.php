<!DOCTYPE html>
<html>
<style type="text/css">
.pop{
   background-color: black;
   width: 50px;
}

.popactive{
	transition: background-color 2s;
    background-color: blue;
    width: 50px;
}
</style>
<head>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<title></title>
</head>
<body>

<p>Hell</p>
<div class="pop">Hello</div>

<script type="text/javascript">

	$(".pop").click(function(){
		console.log($(".pop"));
		//$(this).switchClass("pop", "popactive", 2);
		$(this).attr("class", "popactive");
	});
</script>
</body>
</html>