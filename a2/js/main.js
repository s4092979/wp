function home() {
    location.href = "index.php"
}

function doMenu() {
	let menu = document.getElementById("navSelect");
	let optionNumber = menu.options.selectedIndex;
	let url = menu.options[optionNumber].value;
	location.href = url;
}