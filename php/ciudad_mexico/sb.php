<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../conex.php";

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $ubicacion = $_POST['ubicacion'];
    $costo_viaje = $_POST['costo_viaje'];
    $foto = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];

    // Mover la foto subida a una carpeta en el servidor
    $upload_dir = '../upload/ciudad_mexico/';
    $foto_path = $upload_dir . basename($foto);

    // Mover la imagen a la carpeta de destino
    if (!move_uploaded_file($foto_tmp, $foto_path)) {
        die("Error al mover el archivo.");
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO ciudad_mexico (nombre, descripcion, ubicacion, costo_viaje, Foto) VALUES (?, ?, ?, ?, ?)";
    $declaracion = $conexion->prepare($sql);
    $declaracion->bind_param("sssds", $nombre, $descripcion, $ubicacion, $costo_viaje, $foto_path);

    // Ejecutar la consulta
    if ($declaracion->execute()) {
        echo "El registro se ha agregado correctamente.";
    } else {
        echo "Error al agregar el registro: " . $declaracion->error;
    }

    // Cerrar la conexión
    $conexion->close();
    echo "  <script>
                alert('Agregado con exito');
                location.href = './c.php';
            </script>";
    exit;
} else {
    // Si se intenta acceder al script sin enviar datos por POST
    echo "Acceso no permitido.";
}
?>