class ModalPopup
{
	static call()
	{
		const obj = document.querySelector("#modal-popup");

		obj.classList.remove("fadeout");
		obj.classList.remove("fadein");
		obj.classList.add("fadein");
		obj.classList.add('active');
		obj.style.opacity = '1';
		obj.style.display = 'flex';
	}

	static banish()
	{
		const obj = document.querySelector("#modal-popup");

		obj.classList.remove("fadein");
		obj.classList.remove("fadeout");
		obj.classList.add("fadeout");
		obj.classList.remove('active');
		obj.style.opacity = '0';
		setTimeout(() => { 
			obj.style.display = 'none';
		}, 200);
	}

	static event()
	{
		const modal_popup_background = document.querySelector("#modal-popup .background");
		const modal_popup_btn_close = document.querySelector("#modal-popup .btn-close");
		const modal_popup_btn_cancel = document.querySelector("#modal-popup .btn-cancel");

		modal_popup_background.addEventListener('click', ModalPopup.banish); //case click .background
		modal_popup_btn_close.addEventListener('click', ModalPopup.banish); //case click button close
		modal_popup_btn_cancel.addEventListener('click', ModalPopup.banish); //case click button cancel
	}
}

ModalPopup.event();