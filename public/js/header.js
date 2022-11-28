function toggleMenu()
{
	const menuModal  = new Modal();
	const has_active = menuModal.check.left();

	if (!has_active)
		menuModal.call('left', 'element', '#menu');
	else 
		menuModal.banish('left');
}

function toggleOrder()
{
	const menuModal  = new Modal();
	const has_active = menuModal.check.right();

	if (!has_active)
		menuModal.call('right', 'element', '#menu');
	else 
		menuModal.banish('right');
}

const btn_menu  = document.querySelector("#header .btn-menu");
const btn_order = document.querySelector("#header .btn-order");

btn_menu.addEventListener("click", toggleMenu);
btn_order.addEventListener("click", toggleOrder);

// This for debugs:
// toggleMenu();