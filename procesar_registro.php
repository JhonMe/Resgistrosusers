<?php
include("conexion.php"); // Incluir el archivo de conexión (asegúrate de que la ruta sea correcta)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear arrays asociativos para cada tipo de dato y tabla correspondiente
    $empleado_principal_data = [
        "numero_trabajadores" => $_POST["numero_trabajadores"],
        "razon_social" => $_POST["razon_social"],
        "ruc" => $_POST["ruc"],
        "domicilio" => $_POST["domicilio"],
        "actividad_economica" => $_POST["actividad_economica"],
        "alto_riesgo" => isset($_POST["alto_riesgo"]) ? 1 : 0,
        "afiliados_sctr" => $_POST["afiliados_sctr"],
        "no_afiliados_sctr" => $_POST["no_afiliados_sctr"],
        "aseguradora" => $_POST["aseguradora"]
    ];

    $trabajador_data = [
        "nombre_apellido" => $_POST["nombre_apellido"],
        "dni_ce" => $_POST["dni_ce"],
        "edad" => $_POST["edad"],
        "area" => $_POST["area"],
        "puesto" => $_POST["puesto"],
        "antiguedad" => $_POST["antiguedad"],
        "sexo" => $_POST["sexo"],
        "turno" => $_POST["turno"],
        "tipo_contrato" => $_POST["tipo_contrato"],
        "experiencia" => $_POST["experiencia"],
        "horas_jornada" => $_POST["horas_jornada"]
    ];

    $investigacion_data = [
        "fecha_accidente" => $_POST["fecha_accidente"],
        "hora_accidente" => $_POST["hora_accidente"],
        "fecha_investigacion" => $_POST["fecha_investigacion"],
        "lugar_accidente" => $_POST["lugar_accidente"],
        "gravedad_accidente" => $_POST["gravedad_accidente"],
        "grado_incapacitante" => $_POST["grado_incapacitante"],
        "dias_descanso_medico" => $_POST["dias_descanso_medico"],
        "trabajadores_afectados" => $_POST["trabajadores_afectados"],
        "hechos_accidente" => $_POST["hechos_accidente"]
    ];

    $causas_data = [
        "causas_accidente" => $_POST["causas_accidente"]
    ];

    $medidas_correctivas_data = [
        "descripcion_medida" => $_POST["descripcion_medida"],
        "responsable" => $_POST["responsable"],
        "fecha_ejecucion" => $_POST["fecha_ejecucion"],
        "estado_medida" => $_POST["estado_medida"]
    ];

    $responsables_data = [
        "nombre_responsable" => $_POST["nombre_responsable1"],
        "cargo_responsable" => $_POST["cargo_responsable1"],
        "fecha_responsable" => $_POST["fecha_responsable1"],
        "firma_responsable" => $_POST["firma_responsable1"]
    ];

    // Crear funciones para insertar datos en las tablas correspondientes
    function insertarEmpleadoPrincipal($conn, $data)
    {
        $sql = "INSERT INTO datos_empleado_principal (numero_trabajadores, razon_social, ruc, domicilio, actividad_economica, alto_riesgo, afiliados_sctr, no_afiliados_sctr, aseguradora) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Convierte el array asociativo en un array de valores
            $values = array_values($data);

            // Enlaza los valores a los marcadores de posición (?, ?, ...)
            $stmt->bind_param(str_repeat("s", count($values)), ...$values);

            if ($stmt->execute()) {
                return true;
            } else {
                echo "Error al insertar datos en datos_empleado_principal: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error en la preparación de la sentencia para datos_empleado_principal: " . $conn->error;
        }

        return false;
    }

    function insertarTrabajador($conn, $data)
    {
        $sql = "INSERT INTO datos_trabajador (nombre_apellido, dni_ce, edad, area, puesto, antiguedad, sexo, turno, tipo_contrato, experiencia, horas_jornada) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Convierte el array asociativo en un array de valores
            $values = array_values($data);

            // Enlaza los valores a los marcadores de posición (?, ?, ...)
            $stmt->bind_param(str_repeat("s", count($values)), ...$values);

            if ($stmt->execute()) {
                return true;
            } else {
                echo "Error al insertar datos en datos_trabajador: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error en la preparación de la sentencia para datos_trabajador: " . $conn->error;
        }

        return false;
    }

    function insertarInvestigacion($conn, $data)
    {
        $sql = "INSERT INTO datos_investigacion (fecha_accidente, hora_accidente, fecha_investigacion, lugar_accidente, gravedad_accidente, grado_incapacitante, dias_descanso_medico, trabajadores_afectados, hechos_accidente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Convierte el array asociativo en un array de valores
            $values = array_values($data);

            // Enlaza los valores a los marcadores de posición (?, ?, ...)
            $stmt->bind_param(str_repeat("s", count($values)), ...$values);

            if ($stmt->execute()) {
                return true;
            } else {
                echo "Error al insertar datos en datos_investigacion: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error en la preparación de la sentencia para datos_investigacion: " . $conn->error;
        }

        return false;
    }

    function insertarCausas($conn, $data)
    {
        $sql = "INSERT INTO datos_causas (causas_accidente) VALUES (?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Convierte el array asociativo en un array de valores
            $values = array_values($data);

            // Enlaza los valores a los marcadores de posición (?, ?, ...)
            $stmt->bind_param("s", $values[0]);

            if ($stmt->execute()) {
                return true;
            } else {
                echo "Error al insertar datos en datos_causas: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error en la preparación de la sentencia para datos_causas: " . $conn->error;
        }

        return false;
    }

    function insertarMedidasCorrectivas($conn, $data)
    {
        $sql = "INSERT INTO datos_medidas_correctivas (descripcion_medida, responsable, fecha_ejecucion, estado_medida) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Convierte el array asociativo en un array de valores
            $values = array_values($data);

            // Enlaza los valores a los marcadores de posición (?, ?, ...)
            $stmt->bind_param(str_repeat("s", count($values)), ...$values);

            if ($stmt->execute()) {
                return true;
            } else {
                echo "Error al insertar datos en datos_medidas_correctivas: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error en la preparación de la sentencia para datos_medidas_correctivas: " . $conn->error;
        }

        return false;
    }

    function insertarResponsables($conn, $data)
    {
        $sql = "INSERT INTO datos_responsables (nombre_responsable, cargo_responsable, fecha_responsable, firma_responsable) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Convierte el array asociativo en un array de valores
            $values = array_values($data);

            // Enlaza los valores a los marcadores de posición (?, ?, ...)
            $stmt->bind_param(str_repeat("s", count($values)), ...$values);

            if ($stmt->execute()) {
                return true;
            } else {
                echo "Error al insertar datos en datos_responsables: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error en la preparación de la sentencia para datos_responsables: " . $conn->error;
        }

        return false;
    }

    // Ejecutar las funciones de inserción
    $conn->autocommit(false); // Iniciar una transacción

    $inserciones_exitosas = true;

    // Insertar en la tabla de Datos del Empleado Principal
    if (!insertarEmpleadoPrincipal($conn, $empleado_principal_data)) {
        $inserciones_exitosas = false;
    }

    // Insertar en la tabla de Datos del Trabajador
    if (!insertarTrabajador($conn, $trabajador_data)) {
        $inserciones_exitosas = false;
    }

    // Insertar en la tabla de Datos de la Investigación del Accidente
    if (!insertarInvestigacion($conn, $investigacion_data)) {
        $inserciones_exitosas = false;
    }

    // Insertar en la tabla de Datos de las Causas del Accidente
    if (!insertarCausas($conn, $causas_data)) {
        $inserciones_exitosas = false;
    }

    // Insertar en la tabla de Datos de las Medidas Correctivas
    if (!insertarMedidasCorrectivas($conn, $medidas_correctivas_data)) {
        $inserciones_exitosas = false;
    }

    // Insertar en la tabla de Datos de los Responsables
    if (!insertarResponsables($conn, $responsables_data)) {
        $inserciones_exitosas = false;
    }

    if ($inserciones_exitosas) {
        $conn->commit(); // Todas las inserciones fueron exitosas, realizar la transacción
        echo "Datos almacenados exitosamente.";
    } else {
        $conn->rollback(); // Al menos una inserción falló, realizar un rollback
        echo "Error al almacenar datos. La transacción se ha revertido.";
    }

    $conn->autocommit(true); // Restaurar la configuración de autocommit
}

$conn->close(); // Cerrar la conexión
?>