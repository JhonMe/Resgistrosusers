<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    header("Location: index.html"); // Redirige al formulario de inicio de sesión si no ha iniciado sesión
    exit();
}

// Aquí puedes mostrar el contenido de la página de inicio después del inicio de sesión
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
    /* Estilos generales */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('img/fondo.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    /* Estilos para el encabezado y el menú de navegación */
    header {
        background-color: rgba(0, 0, 0, 0.7);
        padding: 10px 0;
        text-align: center;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    nav li {
        margin: 0;
        padding: 0;
        text-align: center;
    }

    nav a {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
    }

    nav a:hover {
        background-color: #0056b3;
        border-radius: 5px;
    }

    /* Estilos para los submenús */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.7);
        min-width: 160px;
        z-index: 1;
    }

    .dropdown-content a {
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        display: block;
        text-align: center;
    }

    .dropdown-content a:hover {
        background-color: #0056b3;
        border-radius: 0;
    }

    /* Estilos para el contenido principal */
    .container {
        max-width: 90%;
        margin: 20px auto;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
    }

    h3 {
        background-color: #333;
        color: #fff;
        padding: 10px;
        margin: 0;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        color: #007BFF;
    }

    a:hover {
        color: #0056b3;
        font-weight: bold;
    }

    .logout {
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #fff;
        background-color: #d9534f;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
    }

    .logout:hover {
        background-color: #c9302c;
    }

    @media screen and (max-width: 768px) {
        .container {
            max-width: 100%;
            padding: 10px;
        }
    }

    /* Estilos para los submenús activos */
    .dropdown.active .dropdown-content {
        display: block;
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="dropdown" id="inicio-dropdown">
                    <a href="#" onclick="toggleSubMenu('inicio')">Inicio</a>
                    <div class="dropdown-content" id="inicio">
                        <a href="index.php">Registro de Empleado</a>
                        <a href="index1.php">Registro de Enfermedades Ocupacionales</a>
                        <a href="index2.php">Registro de Incidentes Peligrosos e Incidentes</a>
                        <a href="index3.php">Registro de Inspecciones Internas de Seguridad y Salud en el Trabajo</a>
                        <a href="index4.php">Registro de Estadísticas de Seguridad y Salud</a>
                        <a href="index5.php">Registro del Monitoreo de Agentes Físicos, Químicos, Biológicos,
                            Psicosociales y Factores de Riesgo Disergonómicos</a>
                    </div>
                </li>
                <li class="dropdown" id="mostrar-datos-dropdown">
                    <a href="#" onclick="toggleSubMenu('mostrar-datos')">Mostrar Datos</a>
                    <div class="dropdown-content" id="mostrar-datos">
                        <a href="mostrar_datos/motrarDindex.php">Mostrar Empleados</a>
                        <a href="mostrar_datos/motrarDindex1.php">Mostrar Empleados</a>
                        <a href="mostrar_enfermedades.php">Mostrar Enfermedades Ocupacionales</a>
                        <!-- Agrega otros enlaces relacionados con "Mostrar Datos" aquí -->
                    </div>
                </li>
                <li class="dropdown" id="ejemplo-dropdown">
                    <a href="#" onclick="toggleSubMenu('ejemplo')">Ejemplo</a>
                    <div class="dropdown-content" id="ejemplo">
                        <a href="mostrar_ejemplo.php">Mostrar Ejemplo</a>
                        <!-- Agrega otros enlaces relacionados con "Ejemplo" aquí -->
                    </div>
                </li>
                <li style="float: right;"><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h3>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h3>
        <!-- Tu contenido principal aquí -->
    </div>

    <script>
    // Función para activar/desactivar los submenús al hacer clic
    function toggleSubMenu(id) {
        const dropdowns = document.querySelectorAll('.dropdown-content');
        dropdowns.forEach((dropdown) => {
            dropdown.style.display = 'none';
        });

        const subMenu = document.getElementById(id);
        subMenu.style.display = 'block';
    }
    </script>
</body>

</html>
>