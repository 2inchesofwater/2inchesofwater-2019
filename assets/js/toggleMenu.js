
function toggleMenu(id) {
  let el_menu = document.getElementById(id);
  let attr = el_menu.attributes;
  let el_firstChild = document.getElementById(id).firstElementChild;
  let aria = document.getElementById('aria-announce');
  
  if (attr['aria-expanded'].value == "true") {
    el_menu.setAttribute("aria-hidden", "false");
	el_menu.setAttribute("aria-expanded", "false");
	aria.textContent = "Menu is now closed";
  } else {
    el_menu.setAttribute("aria-hidden", "false");
	el_menu.setAttribute("aria-expanded", "true");
	el_firstChild.setAttribute("tabindex","-1");
	el_firstChild.focus();
	aria.textContent = "Menu is now open";
  }
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
	let el_menu = document.getElementById('menu');
	let aria = document.getElementById('aria-announce');
	
    if (evt.keyCode == 27) {
		el_menu.setAttribute("aria-hidden", "true");
		el_menu.setAttribute("aria-expanded", "false");
		aria.textContent = "Menu is now closed";
    }
};