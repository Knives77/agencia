const hideButton = document.getElementById("hide-button");
const selects = document.querySelectorAll("select");

hideButton.addEventListener("click", () => {
  selects.forEach((select) => {
    select.classList.toggle("hidden");
  });
});
