<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost"; // Nombre del servidor MySQL (generalmente "localhost" en entorno local)
$username = "root"; // Tu nombre de usuario de MySQL
$password = ""; // Tu contraseña de MySQL
$dbname = "registro_empleados"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Función para limpiar y validar datos
function validarDatos($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Procesar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del empleador
    $razon_social = validarDatos($_POST["razon_social"]);
    $ruc = validarDatos($_POST["ruc"]);
    $domicilio = validarDatos($_POST["domicilio"]);
    $actividad_economica = validarDatos($_POST["actividad_economica"]);
    $num_trabajadores = validarDatos($_POST["num_trabajadores"]);

    // Insertar datos del empleador en la tabla "empleador5"
    $sql_empleador = "INSERT INTO empleador5 (razon_social, ruc, domicilio, actividad_economica, num_trabajadores)
                      VALUES ('$razon_social', '$ruc', '$domicilio', '$actividad_economica', '$num_trabajadores')";

    if ($conn->query($sql_empleador) === TRUE) {
        echo "Datos del empleador guardados con éxito.";
    } else {
        echo "Error al insertar datos del empleador: " . $conn->error;
    }

    // Obtener el ID del empleador recién insertado
    $id_empleador = $conn->insert_id;

    // Datos del monitoreo
    $area_monitoreada = validarDatos($_POST["area_monitoreada"]);
    $fecha_monitoreo = validarDatos($_POST["fecha_monitoreo"]);
    $tipo_riesgo_monitoreado = validarDatos($_POST["tipo_riesgo_monitoreado"]);
    $programa_monitoreo = validarDatos($_POST["programa_monitoreo"]);
    $frecuencia_monitoreo = validarDatos($_POST["frecuencia_monitoreo"]);
    $num_trabajadores_expuestos = validarDatos($_POST["num_trabajadores_expuestos"]);
    $organizacion_monitoreo = validarDatos($_POST["organizacion_monitoreo"]);
    $resultados_monitoreo = validarDatos($_POST["resultados_monitoreo"]);
    $causas_desviaciones_presentadas = validarDatos($_POST["causas_desviaciones_presentadas"]);
    $conclusiones_recomendaciones_monitoreo = validarDatos($_POST["conclusiones_recomendaciones_monitoreo"]);

    // Insertar datos del monitoreo en la tabla "datos_monitoreo5"
    $sql_monitoreo = "INSERT INTO datos_monitoreo5 (id_empleador, area_monitoreada, fecha_monitoreo, tipo_riesgo_monitoreado, programa_monitoreo, frecuencia_monitoreo, num_trabajadores_expuestos, organizacion_monitoreo)
                      VALUES ('$id_empleador', '$area_monitoreada', '$fecha_monitoreo', '$tipo_riesgo_monitoreado', '$programa_monitoreo', '$frecuencia_monitoreo', '$num_trabajadores_expuestos', '$organizacion_monitoreo')";

    if ($conn->query($sql_monitoreo) === TRUE) {
        echo "Datos del monitoreo guardados con éxito.";
    } else {
        echo "Error al insertar datos del monitoreo: " . $conn->error;
    }

    // Obtener el ID del monitoreo recién insertado
    $id_monitoreo = $conn->insert_id;

    // Insertar datos de resultados del monitoreo en la tabla "resultados_monitoreo5"
    $sql_resultados_monitoreo = "INSERT INTO resultados_monitoreo5 (id_empleador, resultados)
                                  VALUES ('$id_empleador', '$resultados_monitoreo')";

    if ($conn->query($sql_resultados_monitoreo) === TRUE) {
        echo "Resultados del monitoreo guardados con éxito.";
    } else {
        echo "Error al insertar datos de resultados del monitoreo: " . $conn->error;
    }

    // Insertar datos de causas de desviaciones en la tabla "causas_desviaciones5"
    $sql_causas_desviaciones = "INSERT INTO causas_desviaciones5 (id_empleador, causas)
                                VALUES ('$id_empleador', '$causas_desviaciones_presentadas')";

    if ($conn->query($sql_causas_desviaciones) === TRUE) {
        echo "Causas de desviaciones guardadas con éxito.";
    } else {
        echo "Error al insertar datos de causas de desviaciones: " . $conn->error;
    }

    // Insertar datos de conclusiones y recomendaciones en la tabla "conclusiones_recomendaciones5"
    $sql_conclusiones_recomendaciones = "INSERT INTO conclusiones_recomendaciones5 (id_empleador, conclusiones_recomendaciones)
                                          VALUES ('$id_empleador', '$conclusiones_recomendaciones_monitoreo')";

    if ($conn->query($sql_conclusiones_recomendaciones) === TRUE) {
        echo "Conclusiones y recomendaciones guardadas con éxito.";
    } else {
        echo "Error al insertar datos de conclusiones y recomendaciones: " . $conn->error;
    }

    // Datos del responsable del registro
    $nombre_responsable = validarDatos($_POST["nombre_responsable"]);
    $cargo_responsable = validarDatos($_POST["cargo_responsable"]);
    $fecha = validarDatos($_POST["fecha"]);
    $firma = validarDatos($_POST["firma"]);

    // Insertar datos del responsable del registro en la tabla "responsable_registro5"
    $sql_responsable = "INSERT INTO responsable_registro5 (id_empleador, nombre, cargo, fecha, firma)
                        VALUES ('$id_empleador', '$nombre_responsable', '$cargo_responsable', '$fecha', '$firma')";

    if ($conn->query($sql_responsable) === TRUE) {
        echo "Datos del responsable del registro guardados con éxito.";
    } else {
        echo "Error al insertar datos del responsable del registro: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>