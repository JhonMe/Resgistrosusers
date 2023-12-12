<?php
$servername = "localhost"; // Nombre del servidor MySQL (generalmente "localhost" en entorno local)
$username = "root"; // Tu nombre de usuario de MySQL
$password = ""; // Tu contraseña de MySQL
$dbname = "registro_empleados"; // Nombre de la base de datos

// Función para validar datos
function validarDatos($dato) {
    $dato = trim($dato); // Eliminar espacios en blanco al principio y al final
    $dato = stripslashes($dato); // Eliminar barras invertidas
    $dato = htmlspecialchars($dato); // Convertir caracteres especiales a entidades HTML
    return $dato;
}

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Procesar datos del formulario y guardar en la tabla datos_empleador
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $razon_social = validarDatos($_POST["razon_social"]);
    $ruc = validarDatos($_POST["ruc"]);
    $domicilio = validarDatos($_POST["domicilio"]);
    $tipo_actividad = validarDatos($_POST["tipo_actividad"]);
    $num_trabajadores = validarDatos($_POST["num_trabajadores"]);
    $area_inspeccionada = validarDatos($_POST["area_inspeccionada"]);
    $fecha_inspeccion = validarDatos($_POST["fecha_inspeccion"]);
    $responsable_area = validarDatos($_POST["responsable_area"]);
    $responsable_inspeccion = validarDatos($_POST["responsable_inspeccion"]);
    $hora_inspeccion = validarDatos($_POST["hora_inspeccion"]);
    $tipo_inspeccion = validarDatos($_POST["tipo_inspeccion"]);

    $sql = "INSERT INTO datos_empleador3 (razon_social, ruc, domicilio, tipo_actividad, num_trabajadores, area_inspeccionada, fecha_inspeccion, responsable_area, responsable_inspeccion, hora_inspeccion, tipo_inspeccion)
            VALUES ('$razon_social', '$ruc', '$domicilio', '$tipo_actividad', '$num_trabajadores', '$area_inspeccionada', '$fecha_inspeccion', '$responsable_area', '$responsable_inspeccion', '$hora_inspeccion', '$tipo_inspeccion')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos del empleador: " . $conn->error;
    }

    // Obtener el ID del último registro insertado
    $datos_empleador_id = $conn->insert_id;

    // Procesar datos del cuadro de "OBJETIVO DE LA INSPECCIÓN INTERNA"
    $descripcion_interna = validarDatos($_POST["descripcion_interna"]);

    $sql = "INSERT INTO objetivo_inspeccion3 (datos_empleador_id, descripcion)
            VALUES ('$datos_empleador_id', '$descripcion_interna')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos del objetivo de la inspección: " . $conn->error;
    }

    // Procesar datos del cuadro de "RESULTADO DE LA INSPECCIÓN"
    $resultado_incidente = validarDatos($_POST["resultado_incidente"]);

    $sql = "INSERT INTO resultado_inspeccion3 (datos_empleador_id, resultado_incidente)
            VALUES ('$datos_empleador_id', '$resultado_incidente')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos del resultado de la inspección: " . $conn->error;
    }

    // Procesar datos del cuadro de "DESCRIPCIÓN DE LA CAUSA ANTE RESULTADOS DESFAVORABLES DE LA INSPECCIÓN"
    $descripcion_causa = validarDatos($_POST["descripcion_causa"]);

    $sql = "INSERT INTO causa_resultado3 (datos_empleador_id, descripcion_causa)
            VALUES ('$datos_empleador_id', '$descripcion_causa')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos de la causa ante resultados desfavorables: " . $conn->error;
    }

    // Procesar datos del cuadro de "CONCLUSIONES Y RECOMENDACIONES"
    $conslusion_recomendacion = validarDatos($_POST["conslusion_recomendacion"]);
    $vereficacion_adj = validarDatos($_POST["vereficacion_adj"]);

    $sql = "INSERT INTO conclusiones_recomendaciones3 (datos_empleador_id, conslusion_recomendacion, vereficacion_adj)
            VALUES ('$datos_empleador_id', '$conslusion_recomendacion', '$vereficacion_adj')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos de conclusiones y recomendaciones: " . $conn->error;
    }

    // Procesar datos del cuadro de "RESPONSABLE DEL REGISTRO"
    $nombre_responsable1 = validarDatos($_POST["nombre_responsable1"]);
    $cargo_responsable1 = validarDatos($_POST["cargo_responsable1"]);
    $fecha_firma1 = validarDatos($_POST["fecha_firma1"]);
    $firma1 = validarDatos($_POST["firma1"]);

    $sql = "INSERT INTO responsable_registro3 (datos_empleador_id, nombre_responsable1, cargo_responsable1, fecha_firma1, firma1)
            VALUES ('$datos_empleador_id', '$nombre_responsable1', '$cargo_responsable1', '$fecha_firma1', '$firma1')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos del responsable del registro: " . $conn->error;
    }

    // Cierra la conexión
    $conn->close();

    // Redirige a una página de confirmación o muestra un mensaje de éxito
    echo "Datos guardados exitosamente.";
}
?>