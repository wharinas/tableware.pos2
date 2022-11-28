class ModalSide
{
// ======
// CHECK:
// ======
	check = 
	{
		background: () => (document.querySelector('#modal-side').className.indexOf('active') > -1),
		left      : () => (document.querySelector('#modal-side .content.left').className.indexOf('active') > -1),
		right     : () => (document.querySelector('#modal-side .content.right').className.indexOf('active') > -1),
	};
// ==========
// CALL: เรียก
// ==========
	call(side, element, target)
	{
		// call backgroudn when no background:
		this.#callBackground();
		// banish other side when other side has active.
		if (side == 'left' && this.check.right())
			this.#banishRight();
		if (side == 'right' && this.check.left())
			this.#banishLeft();
		// call current side.
		if (side == 'left')
			this.#callLeft();
		else if (side == 'right')
			this.#callRight();
	}

	#callBackground()
	{
		const obj = document.querySelector('#modal-side');

		obj.classList.remove("modal_background_fadein");
		obj.classList.remove("modal_background_fadeout");
		obj.classList.add("modal_background_fadein");
		obj.classList.add('active');
		obj.style.opacity = '1';
		obj.style.display = 'block';
	}

	#callLeft()
	{
		const obj = document.querySelector('#modal-side .content.left');

		obj.classList.remove("modal_left_fadein");
		obj.classList.remove("modal_left_fadeout");
		obj.classList.add("modal_left_fadein");
		obj.classList.add('active');
		obj.style.marginLeft = '0';
		obj.style.display    = 'block';
	}

	#callRight()
	{
		const obj = document.querySelector('#modal-side .content.right');

		obj.classList.remove("modal_right_fadein");
		obj.classList.remove("modal_right_fadeout");
		obj.classList.add("modal_right_fadein");
		obj.classList.add('active');
		obj.style.marginRight = '0';
		obj.style.display     = 'block';
	}
// ==============
// Banish: เอาออก
// ==============
	banish(side)
	{
		if ((side == 'left' || side == 'both') && this.check.left())
			this.#banishLeft();
		if ((side == 'right' || side == 'both') && this.check.right())
			this.#banishRight();

		if (!this.check.left() && !this.check.right())
			this.#banishBackground();
	}

	#banishBackground()
	{
		const obj = document.querySelector('#modal-side');

		obj.classList.remove("modal_background_fadein");
		obj.classList.remove("modal_background_fadeout");
		obj.classList.add("modal_background_fadeout");
		obj.classList.remove('active');
		obj.style.opacity = '0';
		setTimeout(function () { obj.style.display = 'none'  }, 500);
	}

	#banishLeft()
	{
		const obj = document.querySelector('#modal-side .content.left');

		obj.classList.remove("modal_left_fadein");
		obj.classList.remove("modal_left_fadeout");
		obj.classList.add("modal_left_fadeout");
		obj.classList.remove('active');
		obj.style.marginLeft = '-100%';
		setTimeout(function() { obj.style.display = 'none'; }, 500);
	}

	#banishRight()
	{
		const obj = document.querySelector('#modal-side .content.right');

		obj.classList.remove("modal_right_fadein");
		obj.classList.remove("modal_right_fadeout");
		obj.classList.add("modal_right_fadeout");
		obj.classList.remove('active');
		obj.style.marginRight = '-100%';
		setTimeout(function() { obj.style.display = 'none'; }, 500);
	}

	static event()
	{
		const modal_background = document.querySelector("#modal-side .background");

		modal_background.addEventListener('click', () => (new ModalSide()).banish('both'));
	}
}
ModalSide.event();
