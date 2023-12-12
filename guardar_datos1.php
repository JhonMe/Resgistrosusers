<!-- guardar_datos.php -->
<?php
include("conexion.php"); // Incluir el archivo de conexión (asegúrate de que la ruta sea correcta)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario para la tabla de Datos del Empleador Principal
    $sql_empleador = "INSERT INTO datos_empleador_principal1 (razon_social, ruc, domicilio, tipo_actividad, num_trabajadores, anio_inicio_actividad, num_trabajadores_sctr, num_trabajadores_no_sctr, nombre_aseguradora, lineas_produccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_empleador = $conn->prepare($sql_empleador);

    if ($stmt_empleador) {
        $stmt_empleador->bind_param(
            "ssssiiiiis",
            $_POST["razon_social"],
            $_POST["ruc"],
            $_POST["domicilio"],
            $_POST["tipo_actividad"],
            $_POST["num_trabajadores"],
            $_POST["anio_inicio_actividad"],
            $_POST["num_trabajadores_sctr"],
            $_POST["num_trabajadores_no_sctr"],
            $_POST["nombre_aseguradora"],
            $_POST["lineas_produccion"]
        );

        if ($stmt_empleador->execute()) {
            echo "Datos del Empleador Principal almacenados exitosamente.<br>";
        } else {
            echo "Error al insertar datos del Empleador Principal: " . $stmt_empleador->error . "<br>";
        }
        $stmt_empleador->close();
    } else {
        echo "Error en la preparación de la sentencia para datos_empleador_principal: " . $conn->error . "<br>";
    }

    // Procesar los datos del formulario para la tabla de Datos del Empleador de Intermediación
    $sql_intermediacion = "INSERT INTO datos_empleador_intermediacion1 (razon_social, ruc, domicilio, tipo_actividad, num_trabajadores, anio_inicio_actividad, num_trabajadores_sctr, num_trabajadores_no_sctr, nombre_aseguradora, lineas_produccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_intermediacion = $conn->prepare($sql_intermediacion);

    if ($stmt_intermediacion) {
        $stmt_intermediacion->bind_param(
            "ssssiiiiis",
            $_POST["razon_social_intermediacion"],
            $_POST["ruc_intermediacion"],
            $_POST["domicilio_intermediacion"],
            $_POST["tipo_actividad_intermediacion"],
            $_POST["num_trabajadores_intermediacion"],
            $_POST["anio_inicio_actividad_intermediacion"],
            $_POST["num_trabajadores_sctr_intermediacion"],
            $_POST["num_trabajadores_no_sctr_intermediacion"],
            $_POST["nombre_aseguradora_intermediacion"],
            $_POST["lineas_produccion_intermediacion"]
        );

        if ($stmt_intermediacion->execute()) {
            echo "Datos del Empleador de Intermediación almacenados exitosamente.<br>";
        } else {
            echo "Error al insertar datos del Empleador de Intermediación: " . $stmt_intermediacion->error . "<br>";
        }
        $stmt_intermediacion->close();
    } else {
        echo "Error en la preparación de la sentencia para datos_empleador_intermediacion: " . $conn->error . "<br>";
    }

    // Procesar los datos del formulario para la tabla de Datos de la Enfermedad Ocupacional
    $sql_enfermedad = "INSERT INTO datos_enfermedad_ocupacional1 (tipo_agente, mes_anio, nombre_enfermedad, parte_afectada, num_trabajadores_afectados, areas, num_cambios_puestos) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt_enfermedad = $conn->prepare($sql_enfermedad);

    if ($stmt_enfermedad) {
        $stmt_enfermedad->bind_param(
            "ssssiis",
            $_POST["tipo_agente"],
            $_POST["mes_anio"],
            $_POST["nombre_enfermedad"],
            $_POST["parte_afectada"],
            $_POST["num_trabajadores_afectados"],
            $_POST["areas"],
            $_POST["num_cambios_puestos"]
        );

        if ($stmt_enfermedad->execute()) {
            echo "Datos de la Enfermedad Ocupacional almacenados exitosamente.<br>";
        } else {
            echo "Error al insertar datos de la Enfermedad Ocupacional: " . $stmt_enfermedad->error . "<br>";
        }
        $stmt_enfermedad->close();
    } else {
        echo "Error en la preparación de la sentencia para datos_enfermedad_ocupacional: " . $conn->error . "<br>";
    }

    // Procesar los datos del formulario para la tabla de Medidas Correctivas
    $sql_medidas = "INSERT INTO medidas_correctivas1 (descripcion_medida, responsable, fecha_ejecucion, estado_medida) VALUES (?, ?, ?, ?)";
    $stmt_medidas = $conn->prepare($sql_medidas);

    if ($stmt_medidas) {
        $stmt_medidas->bind_param(
            "ssss",
            $_POST["descripcion_medidas"],
            $_POST["responsable_medidas"],
            $_POST["fecha_ejecucion"],
            $_POST["estado_medidas"]
        );

        if ($stmt_medidas->execute()) {
            echo "Medidas Correctivas almacenadas exitosamente.<br>";
        } else {
            echo "Error al insertar Medidas Correctivas: " . $stmt_medidas->error . "<br>";
        }
        $stmt_medidas->close();
    } else {
        echo "Error en la preparación de la sentencia para medidas_correctivas: " . $conn->error . "<br>";
    }

    // Procesar los datos del formulario para la tabla de Responsables
    $sql_responsables = "INSERT INTO responsables1 (nombre_responsable, cargo_responsable, fecha_firma, firma) VALUES (?, ?, ?, ?)";
    $stmt_responsables = $conn->prepare($sql_responsables);

    if ($stmt_responsables) {
        $stmt_responsables->bind_param(
            "ssss",
            $_POST["nombre_responsable1"],
            $_POST["cargo_responsable1"],
            $_POST["fecha_firma1"],
            $_POST["firma1"]
        );

        if ($stmt_responsables->execute()) {
            echo "Responsables almacenados exitosamente.<br>";
        } else {
            echo "Error al insertar Responsables: " . $stmt_responsables->error . "<br>";
        }
        $stmt_responsables->close();
    } else {
        echo "Error en la preparación de la sentencia para responsables: " . $conn->error . "<br>";
    }

    $conn->close(); // Cerrar la conexión
}
?>