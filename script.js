function show() {
  document.querySelector(".hamburger").classList.toggle("open");
  document.querySelector(".navigation").classList.toggle("active");
}

// this is a script for blur
document.getElementById("blurButton").addEventListener("click", function () {
  var targetDiv = document.getElementById("targetDiv");
  targetDiv.classList.toggle("filter-blur");
});


// this script for hamburger icon starts from here-----------
const menuBtn = document.getElementById("blurButton");
menuBtn.addEventListener("click", navTransition);

function navTransition() {
  document.querySelector(".hamburger").classList.toggle("open");
  document.querySelector(".navigation").classList.toggle("nav-active");
}
// this script for hamburger icon ends from here-------------