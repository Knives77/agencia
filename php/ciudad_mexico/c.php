<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agencia</title>
    <link rel="stylesheet" href="../../css/style.css" />
</head>

<body>
    <header>
        <h1>Agencia</h1>
        <nav>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option selected disabled>Principal</option>
                <option value="./index.html"><i>Inicio</i></option>
                <option value="./galeria.html">Galeria</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option disabled selected>Ciudad de México</option>
                <option value="./php/ciudad_mexico/c.php">Consulta</option>
                <option value="./php/ciudad_mexico/a.php">Alta</option>
                <option value="./php/ciudad_mexico/b.php">Baja</option>
                <option value="./php/ciudad_mexico/e.php">Editar</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option disabled selected>Jalisco</option>
                <option value="./php/jalisco/c.php">Consulta</option>
                <option value="./php/jalisco/a.php">Alta</option>
                <option value="./php/jalisco/b.php">Baja</option>
                <option value="./php/jalisco/e.php">Editar</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option disabled selected>Quintana Roo</option>
                <option value="./php/quintana_roo/c.php">Consulta</option>
                <option value="./php/quintana_roo/a.php">Alta</option>
                <option value="./php/quintana_roo/b.php">Baja</option>
                <option value="./php/quintana_roo/e.php">Editar</option>
            </select>
            <select
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option disabled selected>Yucatán</option>
                <option value="./php/yucatan/c.php">Consulta</option>
                <option value="./php/yucatan/a.php">Alta</option>
                <option value="./php/yucatan/b.php">Baja</option>
                <option value="./php/yucatan/e.php">Editar</option>
            </select>
            <button id="hide-button">X</button>
        </nav>
    </header>
    <main>
        <h2>Consulta - Ciudad de México</h2>

    </main>
    <footer>&copy; 2023 Agencia</footer>
    <script src="../../js/script.js"></script>
</body>

</html>