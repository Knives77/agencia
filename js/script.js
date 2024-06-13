const hideButton = document.getElementById("hide-button");
const selects = document.querySelectorAll("select");
const conf = document.getElementById("imgC");

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

function confirmarEditar(event) {
  var id = document.getElementById("editar").value;
  var confirmar = confirm("¿Estás seguro de que deseas editar el registro ?");
  if (!confirmar) {
    event.preventDefault(); // Evita el envío del formulario
  }
}

conf.addEventListener("change", function () {
  if (this.checked) {
    document.getElementById("foto").disabled = true;
    document.getElementById("imagen").disabled = true;
  } else {
    document.getElementById("foto").disabled = false;
    document.getElementById("imagen").disabled = false;
  }
});
