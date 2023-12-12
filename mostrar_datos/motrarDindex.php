<?php
session_start(); // Iniciar la sesión si no está iniciada
include("../conexion.php"); // Incluye el archivo de conexión (ajusta la ruta según sea necesario)

// Función para obtener todos los datos de una tabla
function obtenerDatos($tabla) {
    global $conn;
    $sql = "SELECT * FROM $tabla";
    $result = $conn->query($sql);
    $datos = array();

    if ($result && $result->num_rows > 0) { // Verifica si la consulta fue exitosa y si hay resultados
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }
    }

    return $datos;
}

// Obtener datos de todas las tablas
$datosEmpleadorPrincipal = obtenerDatos("datos_empleado_principal1");
$datosEmpleadorIntermediacion = obtenerDatos("datos_trabajador");
$datosEnfermedadOcupacional = obtenerDatos("datos_investigacion");
$datosMedidasCorrectivas = obtenerDatos("datos_causas");
$datosResponsablesMedidasCorrectivas = obtenerDatos("datos_medidas_correctivas");
$datosResponsables = obtenerDatos("datos_responsables");

// Verificar si la sesión está iniciada antes de mostrar el nombre de usuario
$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "Invitado";

$conn->close(); // Cerrar la conexión
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Visualización</title>
</head>

<body>
    <div class="container">
        <h3>Bienvenido, <?php echo $usuario; ?></h3>
        <!-- Muestra el nombre de usuario o "Invitado" si no hay sesión iniciada -->

        <!-- Datos de Empleado Principal -->
        <?php if (!empty($datosEmpleadorPrincipal)) { ?>
        <h4>Datos de Empleado Principal:</h4>
        <ul>
            <li>Número de Trabajadores: <?php echo $datosEmpleadorPrincipal[0]["numero_trabajadores"]; ?></li>
            <li>Razón Social: <?php echo $datosEmpleadorPrincipal[0]["razon_social"]; ?></li>
            <li>RUC: <?php echo $datosEmpleadorPrincipal[0]["ruc"]; ?></li>
            <li>Domicilio: <?php echo $datosEmpleadorPrincipal[0]["domicilio"]; ?></li>
            <li>Actividad Económica: <?php echo $datosEmpleadorPrincipal[0]["actividad_economica"]; ?></li>
            <li>Alto Riesgo: <?php echo $datosEmpleadorPrincipal[0]["alto_riesgo"] ? 'Sí' : 'No'; ?></li>
            <li>Afiliados a SCT: <?php echo $datosEmpleadorPrincipal[0]["afiliados_sctr"]; ?></li>
            <li>No Afiliados a SCT: <?php echo $datosEmpleadorPrincipal[0]["no_afiliados_sctr"]; ?></li>
            <li>Aseguradora: <?php echo $datosEmpleadorPrincipal[0]["aseguradora"]; ?></li>
        </ul>
        <?php } ?>

        <!-- Datos de Trabajador -->
        <?php if (!empty($datosEmpleadorIntermediacion)) { ?>
        <h4>Datos de Trabajador:</h4>
        <ul>
            <li>Nombre y Apellido: <?php echo $datosEmpleadorIntermediacion[0]["nombre_apellido"]; ?></li>
            <li>DNI o CE: <?php echo $datosEmpleadorIntermediacion[0]["dni_ce"]; ?></li>
            <li>Edad: <?php echo $datosEmpleadorIntermediacion[0]["edad"]; ?></li>
            <li>Área: <?php echo $datosEmpleadorIntermediacion[0]["area"]; ?></li>
            <li>Puesto: <?php echo $datosEmpleadorIntermediacion[0]["puesto"]; ?></li>
            <li>Antigüedad: <?php echo $datosEmpleadorIntermediacion[0]["antiguedad"]; ?></li>
            <li>Sexo: <?php echo $datosEmpleadorIntermediacion[0]["sexo"]; ?></li>
            <li>Turno: <?php echo $datosEmpleadorIntermediacion[0]["turno"]; ?></li>
            <li>Tipo de Contrato: <?php echo $datosEmpleadorIntermediacion[0]["tipo_contrato"]; ?></li>
            <li>Experiencia: <?php echo $datosEmpleadorIntermediacion[0]["experiencia"]; ?></li>
            <li>Horas de Jornada: <?php echo $datosEmpleadorIntermediacion[0]["horas_jornada"]; ?></li>
        </ul>
        <?php } ?>

        <!-- Datos de Investigación del Accidente -->
        <?php if (!empty($datosEnfermedadOcupacional)) { ?>
        <h4>Datos de Investigación del Accidente:</h4>
        <ul>
            <li>Fecha del Accidente: <?php echo $datosEnfermedadOcupacional[0]["fecha_accidente"]; ?></li>
            <li>Hora del Accidente: <?php echo $datosEnfermedadOcupacional[0]["hora_accidente"]; ?></li>
            <li>Fecha de la Investigación: <?php echo $datosEnfermedadOcupacional[0]["fecha_investigacion"]; ?></li>
            <li>Lugar del Accidente: <?php echo $datosEnfermedadOcupacional[0]["lugar_accidente"]; ?></li>
            <li>Gravedad del Accidente: <?php echo $datosEnfermedadOcupacional[0]["gravedad_accidente"]; ?></li>
            <li>Grado Incapacitante: <?php echo $datosEnfermedadOcupacional[0]["grado_incapacitante"]; ?></li>
            <li>Días de Descanso Médico: <?php echo $datosEnfermedadOcupacional[0]["dias_descanso_medico"]; ?></li>
            <li>Trabajadores Afectados: <?php echo $datosEnfermedadOcupacional[0]["trabajadores_afectados"]; ?></li>
            <li>Hechos del Accidente: <?php echo $datosEnfermedadOcupacional[0]["hechos_accidente"]; ?></li>
        </ul>
        <?php } ?>

        <!-- Datos de Causas del Accidente -->
        <?php if (!empty($datosMedidasCorrectivas)) { ?>
        <h4>Causas del Accidente:</h4>
        <p><?php echo $datosMedidasCorrectivas[0]["causas_accidente"]; ?></p>
        <?php } ?>

        <!-- Datos de Medidas Correctivas -->
        <?php if (!empty($datosResponsablesMedidasCorrectivas)) { ?>
        <h4>Medidas Correctivas:</h4>
        <ul>
            <li>Descripción de la Medida: <?php echo $datosResponsablesMedidasCorrectivas[0]["descripcion_medida"]; ?>
            </li>
            <li>Responsable: <?php echo $datosResponsablesMedidasCorrectivas[0]["responsable"]; ?></li>
            <li>Fecha de Ejecución: <?php echo $datosResponsablesMedidasCorrectivas[0]["fecha_ejecucion"]; ?></li>
            <li>Estado de la Medida: <?php echo $datosResponsablesMedidasCorrectivas[0]["estado_medida"]; ?></li>
        </ul>
        <?php } ?>

        <!-- Datos de Responsables -->
        <?php if (!empty($datosResponsables)) { ?>
        <h4>Responsables:</h4>
        <ul>
            <li>Nombre del Responsable: <?php echo $datosResponsables[0]["nombre_responsable"]; ?></li>
            <li>Cargo del Responsable: <?php echo $datosResponsables[0]["cargo_responsable"]; ?></li>
            <li>Fecha del Responsable: <?php echo $datosResponsables[0]["fecha_responsable"]; ?></li>
            <li>Firma del Responsable: <?php echo $datosResponsables[0]["firma_responsable"]; ?></li>
        </ul>
        <?php } ?>
    </div>
</body>

</html>