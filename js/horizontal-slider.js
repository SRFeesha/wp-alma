/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	// var hs = document.querySelectorAll(".horizontal-slider")[0];
	// // var view = document.querySelectorAll(".horizontal-slider .container")[0];
	// var totalWidth = hs.scrollWidth;
	// var clientWidth = hs.clientWidth;
	// var move = 500;
	// var sliderLimit = clientWidth;
	// var actualPosition = clientWidth + hs.scrollLeft;

	// console.log("Total: " + totalWidth);
	// console.log("Client: " + clientWidth);
	// console.log("Percentuale visibile: " + clientWidth / totalWidth);

	// var rightArrow = document.createElement("div");
	// hs.appendChild(rightArrow); 
	// rightArrow.innerHTML = "→";
	// rightArrow.classList.add("arrow", "right-arrow");
	// // console.log(view);
	// // hs = view;

	// function moveRight(){    
	// 	console.log("Prima: " + actualPosition);
	// 	hs.scrollLeft += move;
	// 	console.log("Dopo: " + (clientWidth + hs.scrollLeft));
	// 	// if (currentPosition >= sliderLimit) view.stop(false,true).animate({left:"-="+move},{ duration: 400})
	// };
	
	// if (clientWidth == totalWidth){
	// 	rightArrow.classList.add("greyed");
	// }
	// else {
	// 	rightArrow.classList.remove("greyed");
	// }

	// rightArrow.addEventListener('click', event => {
	// 	moveRight()
	// });

	// // rightArrow.click(moveRight());



	// var slider = document.getElementsByClassName('.horizontal.slider')[0];

	// // create a simple instance
	// // by default, it only adds horizontal recognizers
	// var mc = new Hammer(slider);

	// // listen to events...
	// mc.on("panleft panright", function(ev) {
	// 	if (ev)
	// 	slider.textContent = ev.type +" gesture detected.";
	// });
}
)();





// $("#leftArrow").click(function(){

//     var currentPosition = parseInt(view.css("left"));
//     if (currentPosition < 0) view.stop(false,true).animate({left:"+="+move},{ duration: 400})

// });