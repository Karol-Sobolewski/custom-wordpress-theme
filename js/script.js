{
	const backButton = document.getElementById( `backButton` );
	const forwardButton = document.getElementById( `forwardButton` );
	const allSlides = [...document.querySelectorAll( `.slider-column` )];

	/**
	 *
	 */
	function initSlider() {
		let left = 1;
		let right = 992 >= window.innerWidth ? 1 : 3;
		const list = 992 >= window.innerWidth ? [0] : [0, 1, 2];
		list.forEach( ( item ) => {
			const showSlide = allSlides[item];
			showSlide.classList.add( `active` );
		} );
		backButton.addEventListener( `click`, function () {
			if ( 992 >= window.innerWidth ) {
				if ( 2 <= left ) {
					console.log( right );
					left -= 1;
					right -= 1;
					allSlides.forEach( ( slide ) => {
						slide.classList.remove( `active` );
					} );
					const showSlide = allSlides[left - 1];
					showSlide.classList.add( `active` );
				}
			} else if ( 2 <= left && right >= allSlides.length - 1 ) {
				left -= 1;
				right -= 1;
				list.length = 0;
				for ( let i = left; i <= right; i++ ) {
					list.push( i );
				}
				allSlides.forEach( ( slide ) => {
					slide.classList.remove( `active` );
				} );
				list.forEach( ( item ) => {
					const showSlide = allSlides[item - 1];
					showSlide.classList.add( `active` );
				} );
			}
		} );
		forwardButton.addEventListener( `click`, function () {
			if ( 992 >= window.innerWidth ) {
				if ( 1 <= right &&   right <= allSlides.length -1 ) {
					console.log( right );
					left += 1;
					right += 1;
					allSlides.forEach( ( slide ) => {
						slide.classList.remove( `active` );
					} );
					const showSlide = allSlides[left - 1];
					showSlide.classList.add( `active` );
				}
			} else if ( 3 >= left && right <= allSlides.length - 1 ) {
				left += 1;
				right += 1;
				list.length = 0;
				for ( let i = left; i <= right; i++ ) {
					list.push( i );
				}
				allSlides.forEach( ( slide ) => {
					slide.classList.remove( `active` );
				} );
				list.forEach( ( item ) => {
					const showSlide = allSlides[item - 1];
					showSlide.classList.add( `active` );
				} );
			}
		} );
	}
	initSlider();
}
