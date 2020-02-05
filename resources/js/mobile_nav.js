function toggleMenu()
{
	let menuItems = document.getElementsByClassName("menuItem");
	for (var i = 0; i < menuItems.length; i++) {
		
        if (menuItems[i].style.display === "none") {
		  menuItems[i].style.display = "block";
		} else {
			menuItems[i].style.display = "none";
		}
	}
}