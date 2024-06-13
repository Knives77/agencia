<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imgC = isset($_POST["imgC"]) ? $_POST["imgC"] : null;
    $id = $_POST["id"];

    include_once "../conex.php";

    if (!$imgC) {
        // Obtener datos del formulario
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $ubicacion = $_POST['ubicacion'];
        $costo_viaje = $_POST['costo_viaje'];
        $foto = $_FILES['foto']['name'];
        $foto_tmp = $_FILES['foto']['tmp_name'];

        // Mover la foto subida a una carpeta en el servidor
        $upload_dir = '../upload/jalisco/';
        $foto_path = $upload_dir . basename($foto);

        // Preparar la consulta SQL
        $sql = "UPDATE jalisco SET nombre=?, descripcion=?, ubicacion=?, costo_viaje=?, foto=? WHERE id=?";
        $declaracion = $conexion->prepare($sql);
        $declaracion->bind_param("sssisi", $nombre, $descripcion, $ubicacion, $costo_viaje, $foto_path, $id);

        // Mover la imagen a la carpeta de destino
        if (!move_uploaded_file($foto_tmp, $foto_path)) {
            die("Error al mover el archivo.");
        }
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
        // Obtener datos del formulario
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $ubicacion = $_POST['ubicacion'];
        $costo_viaje = $_POST['costo_viaje'];

        // Preparar la consulta SQL
        $sql = "UPDATE jalisco SET nombre=?, descripcion=?, ubicacion=?, costo_viaje=? WHERE id=?";
        $declaracion = $conexion->prepare($sql);
        $declaracion->bind_param("sssii", $nombre, $descripcion, $ubicacion, $costo_viaje, $id);

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
    }
} else {
    echo "<script>
    alert('Método de solicitud no válido.');
    location.href = './e.php';
    </script>";
    // Cerrar la conexión
    $conexion->close();
}


?>