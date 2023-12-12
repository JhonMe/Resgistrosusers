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

// Procesar datos del empleador principal
if (isset($_POST["razon_social"])) {
    $razon_social = validarDatos($_POST["razon_social"]);
    $ruc = validarDatos($_POST["ruc"]);
    $domicilio = validarDatos($_POST["domicilio"]);
    $tipo_actividad = validarDatos($_POST["tipo_actividad"]);
    $num_trabajadores = validarDatos($_POST["num_trabajadores"]);

    // Insertar datos en la tabla datos_empleador_principal
    $sql = "INSERT INTO datos_empleador_principal2 (razon_social, ruc, domicilio, tipo_actividad, num_trabajadores)
            VALUES ('$razon_social', '$ruc', '$domicilio', '$tipo_actividad', '$num_trabajadores')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos del empleador principal: " . $conn->error;
    }
}

// Procesar datos del empleador de intermediación
if (isset($_POST["razon_social_intermediacion"])) {
    $razon_social_intermediacion = validarDatos($_POST["razon_social_intermediacion"]);
    $ruc_intermediacion = validarDatos($_POST["ruc_intermediacion"]);
    $domicilio_intermediacion = validarDatos($_POST["domicilio_intermediacion"]);
    $tipo_actividad_intermediacion = validarDatos($_POST["tipo_actividad_intermediacion"]);
    $num_trabajadores_intermediacion = validarDatos($_POST["num_trabajadores_intermediacion"]);

    // Insertar datos en la tabla datos_empleador_intermediacion
    $sql = "INSERT INTO datos_empleador_intermediacion2 (razon_social, ruc, domicilio, tipo_actividad, num_trabajadores)
            VALUES ('$razon_social_intermediacion', '$ruc_intermediacion', '$domicilio_intermediacion', '$tipo_actividad_intermediacion', '$num_trabajadores_intermediacion')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos del empleador de intermediación: " . $conn->error;
    }
}

// Procesar datos del trabajador (si aplica)
if (isset($_POST["apellidos_nombres_trabajador"])) {
    $apellidos_nombres_trabajador = validarDatos($_POST["apellidos_nombres_trabajador"]);
    $num_dni_ce = validarDatos($_POST["num_dni_ce"]);
    $edad = validarDatos($_POST["edad"]);
    $area = validarDatos($_POST["area"]);
    $puesto_trabajo = validarDatos($_POST["puesto_trabajo"]);
    $antiguedad_empleo = validarDatos($_POST["antiguedad_empleo"]);
    $sexo = validarDatos($_POST["sexo"]);
    $turno = validarDatos($_POST["turno"]);
    $tipo_contrato = validarDatos($_POST["tipo_contrato"]);
    $experiencia_puesto_trabajo = validarDatos($_POST["experiencia_puesto_trabajo"]);
    $num_horas_jornada = validarDatos($_POST["num_horas_jornada"]);

    // Insertar datos en la tabla datos_trabajador
    $sql = "INSERT INTO datos_trabajador2 (apellidos_nombres, num_dni_ce, edad, area, puesto_trabajo, antiguedad_empleo, sexo, turno, tipo_contrato, experiencia_puesto_trabajo, num_horas_jornada)
            VALUES ('$apellidos_nombres_trabajador', '$num_dni_ce', '$edad', '$area', '$puesto_trabajo', '$antiguedad_empleo', '$sexo', '$turno', '$tipo_contrato', '$experiencia_puesto_trabajo', '$num_horas_jornada')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos del trabajador: " . $conn->error;
    }
}

// Procesar datos de la investigación
if (isset($_POST["incidente_peligroso"])) {
    $incidente_peligroso = validarDatos($_POST["incidente_peligroso"]);
    $num_trabajadores_afectados = validarDatos($_POST["num_trabajadores_afectados"]);
    $num_pobladores_afectados = validarDatos($_POST["num_pobladores_afectados"]);
    $atencion_primeros_auxilios = validarDatos($_POST["atencion_primeros_auxilios"]);
    $fecha_hora_incidente = date("Y-m-d H:i:s", strtotime($_POST["fecha_hora_incidente"]));
    $fecha_inicio_investigacion = $_POST["fecha_inicio_investigacion"];
    $lugar_incidente = validarDatos($_POST["lugar_incidente"]);

    // Insertar datos en la tabla investigacion
    $sql = "INSERT INTO investigacion2 (incidente_peligroso, num_trabajadores_afectados, num_pobladores_afectados, atencion_primeros_auxilios, fecha_hora_incidente, fecha_inicio_investigacion, lugar_incidente)
            VALUES ('$incidente_peligroso', '$num_trabajadores_afectados', '$num_pobladores_afectados', '$atencion_primeros_auxilios', '$fecha_hora_incidente', '$fecha_inicio_investigacion', '$lugar_incidente')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos de la investigación: " . $conn->error;
    }
}

// Procesar datos de medidas correctivas
if (isset($_POST["descripcion_medida_correctiva"])) {
    $descripcion_medida_correctiva = validarDatos($_POST["descripcion_medida_correctiva"]);
    $responsable_medida_correctiva = validarDatos($_POST["responsable_medida_correctiva"]);
    $fecha_ejecucion_medida_correctiva = $_POST["fecha_ejecucion_medida_correctiva"];
    $estado_medida_correctiva = validarDatos($_POST["estado_medida_correctiva"]);

    // Insertar datos en la tabla medidas_correctivas
    $sql = "INSERT INTO medidas_correctivas2 (descripcion_medida_correctiva, responsable_medida_correctiva, fecha_ejecucion_medida_correctiva, estado_medida_correctiva)
            VALUES ('$descripcion_medida_correctiva', '$responsable_medida_correctiva', '$fecha_ejecucion_medida_correctiva', '$estado_medida_correctiva')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos de medidas correctivas: " . $conn->error;
    }
}

// Procesar datos de responsables
if (isset($_POST["nombre_responsable1"])) {
    $nombre_responsable1 = validarDatos($_POST["nombre_responsable1"]);
    $cargo_responsable1 = validarDatos($_POST["cargo_responsable1"]);
    $fecha_firma1 = $_POST["fecha_firma1"];
    $firma1 = validarDatos($_POST["firma1"]);

    // Insertar datos en la tabla responsables
    $sql = "INSERT INTO responsables3 (nombre, cargo, fecha_firma, firma)
            VALUES ('$nombre_responsable1', '$cargo_responsable1', '$fecha_firma1', '$firma1')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos de responsables 1: " . $conn->error;
    }
}

if (isset($_POST["nombre_responsable2"])) {
    $nombre_responsable2 = validarDatos($_POST["nombre_responsable2"]);
    $cargo_responsable2 = validarDatos($_POST["cargo_responsable2"]);
    $fecha_firma2 = $_POST["fecha_firma2"];
    $firma2 = validarDatos($_POST["firma2"]);

    // Insertar datos en la tabla responsables
    $sql = "INSERT INTO responsables4 (nombre, cargo, fecha_firma, firma)
            VALUES ('$nombre_responsable2', '$cargo_responsable2', '$fecha_firma2', '$firma2')";

    if ($conn->query($sql) === FALSE) {
        echo "Error al insertar datos de responsables 2: " . $conn->error;
    }
}

// Cierra la conexión
$conn->close();

// Redirige a una página de confirmación o muestra un mensaje de éxito
echo "Datos guardados exitosamente.";
?>