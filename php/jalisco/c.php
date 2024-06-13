<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agencia</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/tablas.css" />
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
                <option value="../ciudad_mexico/c.php">Consulta</option>
                <option value="../ciudad_mexico/a.php">Alta</option>
                <option value="../ciudad_mexico/b.php">Baja</option>
                <option value="../ciudad_mexico/e.php">Editar</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option disabled>Jalisco</option>
                <option selected value="./c.php">Consulta</option>
                <option value="./a.php">Alta</option>
                <option value="./b.php">Baja</option>
                <option value="./e.php">Editar</option>
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
        <h2>Consulta - Jalisco</h2>
        <?php
        include_once "../conex.php";
        // Realizar la consulta
        $sql = "SELECT * FROM jalisco";
        $resultado = $conexion->query($sql);
        // Verificar si hay resultados
        if ($resultado->num_rows > 0) {
            // Comenzar a imprimir la tabla HTML
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Ubicación</th><th>Precio ($)</th><th>Foto</th></tr>";

            // Iterar sobre los resultados y mostrar cada fila
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila["id"] . "</td>";
                echo "<td>" . $fila["nombre"] . "</td>";
                echo "<td>" . $fila["descripcion"] . "</td>";
                echo "<td>" . $fila["ubicacion"] . "</td>";
                echo "<td>" . $fila["costo_viaje"] . "</td>";
                echo "<td><img src='" . $fila["foto"] . "' alt='imagen'></td>";
                echo "</tr>";
            }
            // Cerrar la tabla
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }
        // Cerrar la conexión a la base de datos
        $conexion->close();
        ?>
    </main>
    <footer>&copy; 2023 Agencia</footer>
    <script src="../../js/script.js"></script>
</body>

</html>