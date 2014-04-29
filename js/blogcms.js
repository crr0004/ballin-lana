function save(){
	var title = document.getElementById("title").value;
	var content = document.getElementById("pageconent").value;
	console.log("Title: " + title);
	console.log("content: " + content);
	$.post("php/save.php", {"title": title, "content": content}, function(data, status){
		alert("Data: " + data + "\nStatus: " + status);
		$("#link").attr({"href": "index.php?name=" + data});
		$("#link").text(title);
	});
}