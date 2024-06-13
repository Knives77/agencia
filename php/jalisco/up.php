<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["editarR"])) {
    $id = $_POST["editarR"];
    include_once "../conex.php";

    $sql = "SELECT * FROM jalisco WHERE id = ?";
    if ($stmt = $conexion->prepare($sql)) {
        $stmt->bind_param("i", $id);

        // Ejecutar la declaración
        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
            if ($resultado->num_rows > 0) {
                $registro = $resultado->fetch_assoc();
            } else {
                echo "<script>
                alert('No se encontró ID.');
                location.href = './e.php';
                </script>";
                exit;
            }
        } else {
            echo "Error al seleccionar el registro: " . $stmt->error;
            exit;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error al preparar la declaración: " . $conexion->error;
        exit;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "<script>
    alert('ID no proporcionado.');
    location.href = './e.php';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agencia</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/tablas.css" />
    <link rel="stylesheet" href="../css/forms.css" />
    <style>
        body {
            background-image: url("../../img/fondos/f3.jpg");
        }
    </style>
</head>

<body>
    <header>
        <h1>Agencia</h1>
        <nav>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option selected disabled>Principal</option>
                <option value="../../index.html"><i>Inicio</i></option>
                <option value="../../galeria.html">Galeria</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option selected disabled>Ciudad de México</option>
                <option value="./c.php">Consulta</option>
                <option value="./a.php">Alta</option>
                <option value="./b.php">Baja</option>
                <option value="./e.php">Editar</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option disabled>Jalisco</option>
                <option value="../jalisco/c.php">Consulta</option>
                <option value="../jalisco/a.php">Alta</option>
                <option value="../jalisco/b.php">Baja</option>
                <option selected value="../jalisco/e.php">Editar</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option disabled selected>Quintana Roo</option>
                <option value="../quintana_roo/c.php">Consulta</option>
                <option value="../quintana_roo/a.php">Alta</option>
                <option value="../quintana_roo/b.php">Baja</option>
                <option value="../quintana_roo/e.php">Editar</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option disabled selected>Yucatán</option>
                <option value="../yucatan/c.php">Consulta</option>
                <option value="../yucatan/a.php">Alta</option>
                <option value="../yucatan/b.php">Baja</option>
                <option value="../yucatan/e.php">Editar</option>
            </select>
            <button id="hide-button">X</button>
        </nav>
    </header>
    <main>
        <h2>Editar Registro - Jalisco</h2>
        <div class="form-content">
            <form action="at.php" method="POST" enctype="multipart/form-data" onsubmit="confirmarSubida(event)">
                <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
                <label for="nombre">Nombre: </label>
                <input type="text" value="<?php echo $registro['nombre']; ?>" id="nombre" name="nombre"
                    required><br><br>

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion"
                    required><?php echo $registro['descripcion']; ?></textarea><br>

                <label for="ubicacion">Ubicación:</label>
                <input type="text" id="ubicacion" name="ubicacion" value="<?php echo $registro['ubicacion']; ?>"
                    required min="0"><br>

                <label for="costo_viaje">Precio: </label>
                <input type="number" id="costo_viaje" value="<?php echo $registro['costo_viaje']; ?>" name="costo_viaje"
                    required min="0"><br><br>

                <label for="foto">Foto:</label><br><br>
                <label for="imgC">Mantener imagen: </label>
                <input type="checkbox" checked name="imgC" id="imgC"><br><br>
                <img src="<?php echo $registro['foto']; ?>" alt="a"><br><br>

                <input disabled required type="file" id="foto" name="foto" accept="image/*"><br><br>

                <input type="submit" value="Enviar" id="subir">
                <input type="reset" value="Reset">
            </form>
            <br>
        </div>
    </main>
    <footer>&copy; 2023 Agencia</footer>
    <script src="../../js/script.js"></script>
</body>

</html>