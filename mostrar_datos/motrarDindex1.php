<?php
include("../conexion.php"); // Incluye el archivo de conexión (ajusta la ruta según sea necesario)

// Función para obtener todos los datos de una tabla
function obtenerDatos($tabla) {
    global $conn;
    $sql = "SELECT * FROM $tabla";
    $result = $conn->query($sql);
    $datos = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }
    }

    return $datos;
}

// Obtener datos de todas las tablas
$datosEmpleador = obtenerDatos("datos_empleador_principal1");
$datosIntermediacion = obtenerDatos("datos_empleador_intermediacion1");
$datosEnfermedad = obtenerDatos("datos_enfermedad_ocupacional1");
$datosMedidas = obtenerDatos("medidas_correctivas1");
$datosResponsables = obtenerDatos("responsables1");

$conn->close(); // Cerrar la conexión
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
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
        color: #333;
    }

    /* Estilos para el encabezado y el menú de navegación */
    header {
        background-color: #333;
        padding: 20px 0;
        text-align: center;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
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
        transition: background-color 0.3s, color 0.3s;
        border-radius: 5px;
    }

    nav a:hover {
        background-color: #007BFF;
    }

    /* Estilos para los submenús */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #333;
        min-width: 160px;
        z-index: 1;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .dropdown-content a {
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        display: block;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
    }

    .dropdown-content a:hover {
        background-color: #007BFF;
        border-radius: 0;
    }

    /* Estilos para el contenido principal */
    .container {
        max-width: 90%;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        /* Bordes redondeados */
    }

    h3 {
        background-color: #007BFF;
        color: #fff;
        padding: 15px 0;
        margin: 0;
        border-radius: 10px 10px 0 0;
        text-align: center;
        /* Centrar el texto */
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
        transition: background-color 0.3s;
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
    <!-- Para la tabla Datos del Empleador de Intermediación -->
    <h1>Datos del Empleador de Intermediación</h1>
    <table border="1">
        <tr>
            <th>Razón Social</th>
            <th>RUC</th>
            <th>Domicilio</th>
            <th>Tipo de Actividad</th>
            <th>Número de Trabajadores</th>
            <th>Año de Inicio de Actividad</th>
            <th>Número de Trabajadores SCTR</th>
            <th>Número de Trabajadores no SCTR</th>
            <th>Nombre de Aseguradora</th>
            <th>Líneas de Producción</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($datosIntermediacion as $dato) : ?>
        <tr>
            <td><?php echo $dato["razon_social"]; ?></td>
            <td><?php echo $dato["ruc"]; ?></td>
            <td><?php echo $dato["domicilio"]; ?></td>
            <td><?php echo $dato["tipo_actividad"]; ?></td>
            <td><?php echo $dato["num_trabajadores"]; ?></td>
            <td><?php echo $dato["anio_inicio_actividad"]; ?></td>
            <td><?php echo $dato["num_trabajadores_sctr"]; ?></td>
            <td><?php echo $dato["num_trabajadores_no_sctr"]; ?></td>
            <td><?php echo $dato["nombre_aseguradora"]; ?></td>
            <td><?php echo $dato["lineas_produccion"]; ?></td>
            <td>
                <a href="editar.php?tabla=intermediacion&id=<?php echo $dato["id"]; ?>">Editar</a>
                <a href="eliminar.php?tabla=intermediacion&id=<?php echo $dato["id"]; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Para la tabla Datos de la Enfermedad Ocupacional -->
    <h1>Datos de la Enfermedad Ocupacional</h1>
    <table border="1">
        <tr>
            <th>Tipo de Agente</th>
            <th>Mes y Año</th>
            <th>Nombre de Enfermedad</th>
            <th>Parte Afectada</th>
            <th>Número de Trabajadores Afectados</th>
            <th>Áreas</th>
            <th>Número de Cambios de Puestos</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($datosEnfermedad as $dato) : ?>
        <tr>
            <td><?php echo $dato["tipo_agente"]; ?></td>
            <td><?php echo $dato["mes_anio"]; ?></td>
            <td><?php echo $dato["nombre_enfermedad"]; ?></td>
            <td><?php echo $dato["parte_afectada"]; ?></td>
            <td><?php echo $dato["num_trabajadores_afectados"]; ?></td>
            <td><?php echo $dato["areas"]; ?></td>
            <td><?php echo $dato["num_cambios_puestos"]; ?></td>
            <td>
                <a href="editar.php?tabla=enfermedad&id=<?php echo $dato["id"]; ?>">Editar</a>
                <a href="eliminar.php?tabla=enfermedad&id=<?php echo $dato["id"]; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Para la tabla Medidas Correctivas -->
    <h1>Medidas Correctivas</h1>
    <table border="1">
        <tr>
            <th>Descripción de la Medida</th>
            <th>Responsable</th>
            <th>Fecha de Ejecución</th>
            <th>Estado de la Medida</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($datosMedidas as $dato) : ?>
        <tr>
            <td><?php echo $dato["descripcion_medida"]; ?></td>
            <td><?php echo $dato["responsable"]; ?></td>
            <td><?php echo $dato["fecha_ejecucion"]; ?></td>
            <td><?php echo $dato["estado_medida"]; ?></td>
            <td>
                <a href="editar.php?tabla=medidas&id=<?php echo $dato["id"]; ?>">Editar</a>
                <a href="eliminar.php?tabla=medidas&id=<?php echo $dato["id"]; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Para la tabla Responsables -->
    <h1>Responsables</h1>
    <table border="1">
        <tr>
            <th>Nombre del Responsable</th>
            <th>Cargo del Responsable</th>
            <th>Fecha de Firma</th>
            <th>Firma</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($datosResponsables as $dato) : ?>
        <tr>
            <td><?php echo $dato["nombre_responsable"]; ?></td>
            <td><?php echo $dato["cargo_responsable"]; ?></td>
            <td><?php echo $dato["fecha_firma"]; ?></td>
            <td><?php echo $dato["firma"]; ?></td>
            <td>
                <a href="editar.php?tabla=responsables&id=<?php echo $dato["id"]; ?>">Editar</a>
                <a href="eliminar.php?tabla=responsables&id=<?php echo $dato["id"]; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>


    <!-- Repetir el bloque de código similar para las otras tablas -->
</body>

</html>