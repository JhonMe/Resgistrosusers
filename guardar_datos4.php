<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos (reemplaza con tus propias credenciales)
    $servername = "localhost"; // Nombre del servidor MySQL (generalmente "localhost" en entorno local)
    $username = "root"; // Tu nombre de usuario de MySQL
    $password = ""; // Tu contraseña de MySQL
    $dbname = "registro_empleados"; // Nombre de la base de datos
    

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    // Obtener datos del formulario (empleador)
    $razonSocial = $_POST["razon_social"];
    $ruc = $_POST["ruc"];
    $domicilio = $_POST["domicilio"];
    $actividadEconomica = $_POST["actividad_economica"];
    $numTrabajadores = $_POST["num_trabajadores"];

    // Insertar datos del empleador en la tabla empleador4
    $sqlEmpleador = "INSERT INTO empleador4 (razon_social, ruc, domicilio, actividad_economica, num_trabajadores)
                    VALUES ('$razonSocial', '$ruc', '$domicilio', '$actividadEconomica', $numTrabajadores)";

    if ($conn->query($sqlEmpleador) === TRUE) {
        // Obtener el ID del empleador recién insertado
        $idEmpleador = $conn->insert_id;

        // Insertar resultados estadísticos
        $resultadosEstadisticos = $_POST["resultados_estadisticos"];
        $sqlResultados = "INSERT INTO resultados_estadisticos4 (id_empleador, resultados)
                          VALUES ($idEmpleador, '$resultadosEstadisticos')";
        $conn->query($sqlResultados);

        // Insertar análisis de las causas de las desviaciones
        $causasDesviaciones = $_POST["causas_desviaciones"];
        $sqlCausas = "INSERT INTO causas_desviaciones4 (id_empleador, causas)
                      VALUES ($idEmpleador, '$causasDesviaciones')";
        $conn->query($sqlCausas);

        // Insertar conclusiones y recomendaciones
        $conclusionesRecomendaciones = $_POST["conclusiones_recomendaciones"];
        $sqlConclusiones = "INSERT INTO conclusiones_recomendaciones4 (id_empleador, conclusiones)
                            VALUES ($idEmpleador, '$conclusionesRecomendaciones')";
        $conn->query($sqlConclusiones);

        // Insertar datos del responsable del registro
        $nombreResponsable = $_POST["nombre_responsable"];
        $cargoResponsable = $_POST["cargo_responsable"];
        $fechaResponsable = $_POST["fecha"];
        $firmaResponsable = $_POST["firma"];
        $sqlResponsable = "INSERT INTO responsable_registro4 (id_empleador, nombre, cargo, fecha, firma)
                           VALUES ($idEmpleador, '$nombreResponsable', '$cargoResponsable', '$fechaResponsable', '$firmaResponsable')";
        $conn->query($sqlResponsable);

        echo "Datos guardados correctamente.";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>