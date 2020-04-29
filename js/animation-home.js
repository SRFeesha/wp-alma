//var path = document.querySelector("#Internal-5");
//var length = path.getTotalLength();
var tl = gsap.timeline();
var heading = document.querySelectorAll("#headline h1");
// var headline = document.querySelectorAll(".headline");
var sub = document.querySelectorAll("#headline h3")[0];

function revealText() {
  tl.fromTo(
    "#trippy-line path",
    10,
    { strokeDashoffset: 4950 },
    { strokeDashoffset: 0 }
  )
    .fromTo(
      heading,
      0.5,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0 },
      "-=9"
    )
    .fromTo(sub, 0.5, { opacity: 0, y: "100px" }, { opacity: 1, y: 0 }, "-=8.8")
    .fromTo(
      ".primary-button",
      0.5,
      { opacity: 0, y: "100px" },
      { opacity: 1, y: 0 },
      "-=8.4"
    )
    .fromTo(
        "#masthead", .3, {opacity: 0, y: "-100"}, {opacity: 1, y:0},"-=8.6"
    )
}

function animateLine() {
  let svg = document.querySelectorAll("#trippy-line path");
  for (let i = 0; i < 5; i++) {
    svg[i].classList.toggle("animate");
  }
}

function showAgain() {
  //  tl.restart();
  tl.to("#trippy-line path", 0.2, { strokeDashoffset: 4950 });
  revealText();
}

window.addEventListener("load", function () {
  revealText();
});

document.querySelector("button").addEventListener("click", showAgain);
