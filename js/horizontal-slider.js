/**
 * File horizontal-slider.js.
 *
 * Add accessibility cues to scroll inside a horizontal slider.
 */

( function() {
	let hs = 				document.querySelectorAll(".horizontal-slider")[0],
		rightArrow = 		document.createElement("div"),
		leftArrow = 		document.createElement("div"),
		totalWidth = 		hs.scrollWidth,
	 	clientWidth = 		hs.clientWidth,
		distance = 			800,
		leftMargin =		((clientWidth - 1168) / 2) - 32,
		scrolledPx = 		hs.scrollLeft,
		hsNotVisible = 		totalWidth - clientWidth,
		scrolledPercent = 	(scrolledPx / hsNotVisible) * 100,
		ticking = 			false,
		lastScrollLeft = 	0;
	
	function show (el, show) {
		show ? el.style.visibility = "hidden" : el.style.visibility = "visible";
	}
	
	function manageArrow() {
		scrolledPx = hs.scrollLeft;
		hsNotVisible = totalWidth - clientWidth;
		scrolledPercent = (scrolledPx / hsNotVisible) * 100;

		// enhance smoothness: the arrow disappear a little bit befor the end of the div
		(scrolledPx >= hsNotVisible-16) ? show(rightArrow, true) : show(rightArrow, false); 
		(scrolledPx <= leftMargin-64) ? show(leftArrow, true) : show(leftArrow, false); 
	}

	function sideScroll(direction, speed){
		scrollAmount = 0;
		let step = distance/5;
		var slideTimer = setInterval(function(){
			if(direction == 'left'){
				hs.scrollLeft -= step;
			} else {
				hs.scrollLeft += step;
			}
			scrollAmount += step;
			if(scrollAmount >= distance){
				window.clearInterval(slideTimer);
			}
		}, speed);
	}


	hs.appendChild(rightArrow); 
	rightArrow.innerHTML = "<span>→</span>";
	rightArrow.classList.add("arrow", "arrow--right");
	hs.appendChild(leftArrow); 
	leftArrow.innerHTML = "<span>←</span>"
	leftArrow.classList.add("arrow", "arrow--left");

	// Initial check — in case the user refreshed not in position 0
	(scrolledPx >= hsNotVisible-16) ? show(rightArrow, true) : show(rightArrow, false); 
	(scrolledPx <= leftMargin-64) ? show(leftArrow, true) : show(leftArrow, false); 

	hs.addEventListener('scroll', function(e) {
		lastScrollLeft = hs.scrollLeft;

		if (!ticking) {
			// requestAnimationFrame reduce the repainting in the page
			window.requestAnimationFrame(function() {
				manageArrow();
				ticking = false;
			});

			ticking = true;
	   };
	}) ;

	rightArrow.addEventListener('click', function(){sideScroll('right', 25, distance)}, false);
	leftArrow.addEventListener('click', function(){sideScroll('left', 25, distance)}, false);
}
)();

