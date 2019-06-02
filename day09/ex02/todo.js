var parent_div = document.getElementById("ft_list");

window.onload = function(){
	var arr = [];
	var tmp = document.cookie;
	arr = JSON.parse(tmp);
	arr.forEach(function (e){
		addItem(e);
	});
}

function getTime() {
	var d = new Date();
	d.setTime(d.getTime() + (30*24*60*60*1000));
	var expires = "expires="+ d.toUTCString();
	return expires;
}

function Setcookie (){
	var lst = parent_div.children;
	var arr = [];
	for(var i = 0; i < lst.length; i++)
		arr.unshift(escape(lst[i].innerHTML));
	var string = JSON.stringify(arr);
	document.cookie = string + '; ' + getTime();
}

function ask()
{
	todo = prompt("Please enter some text");
	if (todo != "" && todo.replace(/\s/g, "").length)
		addItem(todo);
}


function addItem(todo)
{
	var new_elem = document.createElement("div");
	new_elem.innerHTML = unescape(todo);
	new_elem.onclick = removeitem;
	parent_div.insertBefore(new_elem, parent_div.firstChild);
	Setcookie();
}

function removeitem(e)
{
	var accpet = confirm("Are you sure");
	if (accpet)
	{
		parent_div.removeChild(e.target);
		Setcookie();
	}
}