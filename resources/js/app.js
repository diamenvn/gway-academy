import "./bootstrap";

window.onload = function () {
  var buttonCollapse = document.querySelectorAll('[data-toggle="collapse"]');
  buttonCollapse.forEach((element) => element.addEventListener("click", collapseHandler));
};

function collapseHandler(e) {
  var target = this.getAttribute("href");
  document.querySelector(target).classList.toggle("d-block");
}
