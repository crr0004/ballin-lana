function save(){
	var title = document.getElementById("title").value;
	var content = document.getElementById("pagecontent").value;
	console.log("Title: " + title);
	console.log("content: " + content);
	saveManual(title, content, false);
}

function saveManual(title, content, manual){
	if(manual){
		var fileName = document.getElementById("fileName").innerHTML;
	}
	$.post("php/save.php", {"title": title, "content": content, "manual": manual, "fileName": fileName}, function(data, status){
		alert("Data: " + data + "\nStatus: " + status);
		$("#link").attr({"href": "index.php?name=" + data});
		$("#link").text(title);
	});
}