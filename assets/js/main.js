const phs = document.querySelectorAll(".js-PH");
const modal = document.querySelector(".js-modal");
const modalcontainer = document.querySelector(".js-modal-container");
const Close = document.querySelector(".js-close");

function showph() {
  modal.classList.add("open");
}
function exitph() {
  modal.classList.remove("open");
}
for (const ph of phs) {
  ph.addEventListener("click", showph);
}
Close.addEventListener("click", exitph);
modal.addEventListener("click", exitph);
modalcontainer.addEventListener("click", function (even) {
  even.stopPropagation();
});
