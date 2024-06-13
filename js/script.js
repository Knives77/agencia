const hideButton = document.getElementById("hide-button");
const selects = document.querySelectorAll("select");

hideButton.addEventListener("click", () => {
  selects.forEach((select) => {
    select.classList.toggle("hidden");
  });
});

function confirmarEliminacion(event) {
  var id = document.getElementById("eliminar").value;
  var confirmar = confirm(
    "¿Estás seguro de que deseas eliminar el registro con ID: " + id + "?"
  );
  if (!confirmar) {
    event.preventDefault(); // Evita el envío del formulario
  }
}

function confirmarSubida(event) {
  var id = document.getElementById("subir").value;
  var confirmar = confirm("¿Estás seguro de que deseas subir el registro ?");
  if (!confirmar) {
    event.preventDefault(); // Evita el envío del formulario
  }
}
