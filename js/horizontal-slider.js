/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var hs = document.querySelectorAll(".horizontal-slider")[0];

	var rightArrow = document.createElement("div");
	hs.appendChild(rightArrow); 
	rightArrow.innerHTML = "→";
	rightArrow.classList.add("arrow", "right-arrow");
	// console.log(hs);
	// hs.style.color = "purple";
	
}
)();
