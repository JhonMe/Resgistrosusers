<?php
include("../conexion.php");

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

$datosEmpleadorPrincipal = obtenerDatos("datos_empleador_principal2");
$datosIntermediacion = obtenerDatos("datos_empleador_intermediacion2");
$datosTrabajador = obtenerDatos("datos_trabajador2");
$datosInvestigacion = obtenerDatos("investigacion2");
$datosDescripcion = obtenerDatos("medidas_correctivas2");
$datosResponsables = obtenerDatos("responsables3");
$datosResponsables2 = obtenerDatos("responsables4");

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>DATOS DEL EMPLEADOR PRINCIPAL:</h1>
    <table>
        <tr>
            <th>Razón Social o Denominación Social:</th>
            <th>RUC:</th>
            <th>Domicilio (Dirección, distrito, departamento, provincia):</th>
            <th>Tipo de Actividad Económica:</th>
            <th>Nº Trabajadores en el Centro Laboral:</th>
        </tr>
        <?php foreach ($datosEmpleadorPrincipal as $dato) : ?>
        <tr>
            <td><?php echo isset($dato["razon_social"]) ? $dato["razon_social"] : ''; ?></td>
            <td><?php echo isset($dato["ruc"]) ? $dato["ruc"] : ''; ?></td>
            <td><?php echo isset($dato["domicilio"]) ? $dato["domicilio"] : ''; ?></td>
            <td><?php echo isset($dato["tipo_actividad"]) ? $dato["tipo_actividad"] : ''; ?></td>
            <td><?php echo isset($dato["num_trabajadores"]) ? $dato["num_trabajadores"] : ''; ?></td>
            <td>
                <a
                    href="editar.php?tabla=intermediacion&id=<?php echo isset($dato["id"]) ? $dato["id"] : ''; ?>">Editar</a>
                <a
                    href="eliminar.php?tabla=intermediacion&id=<?php echo isset($dato["id"]) ? $dato["id"] : ''; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h1>DATOS DEL EMPLEADOR DE INTERMEDIACIÓN, TERCERIZACIÓN, CONTRATISTA, SUBCONTRATISTA, OTROS:</h1>
    <table>
        <tr>
            <th>Razón Social o Denominación Social:</th>
            <th>RUC:</th>
            <th>Domicilio (Dirección, distrito, departamento, provincia):</th>
            <th>Tipo de Actividad Económica:</th>
            <th>Nº Trabajadores en el Centro Laboral:</th>
        </tr>
        <?php foreach ($datosIntermediacion as $dato) : ?>
        <tr>
            <td><?php echo isset($dato["razon_social_intermediacion"]) ? $dato["razon_social_intermediacion"] : ''; ?>
            </td>
            <td><?php echo isset($dato["ruc_intermediacion"]) ? $dato["ruc_intermediacion"] : ''; ?></td>
            <td><?php echo isset($dato["domicilio_intermediacion"]) ? $dato["domicilio_intermediacion"] : ''; ?></td>
            <td><?php echo isset($dato["tipo_actividad_intermediacion"]) ? $dato["tipo_actividad_intermediacion"] : ''; ?>
            </td>
            <td><?php echo isset($dato["num_trabajadores_intermediacion"]) ? $dato["num_trabajadores_intermediacion"] : ''; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h1>DATOS DEL TRABAJADOR (Completar sólo si el incidente afecta a trabajador(es)):</h1>
    <table>
        <tr>
            <th>Apellidos y Nombres del Trabajador:</th>
            <th>Nº DNI/CE:</th>
            <th>Edad:</th>
            <th>Área:</th>
            <th>Puesto de Trabajo:</th>
            <th>Antigüedad en el Empleo:</th>
            <th>Sexo (F/M):</th>
            <th>Turno (D/T/N):</th>
            <th>Tipo de Contrato:</th>
            <th>Tiempo de Experiencia en el Puesto de Trabajo:</th>
            <th>N° Horas Trabajadas en la Jornada Laboral (Antes del suceso):</th>
        </tr>
        <?php foreach ($datosTrabajador as $dato) : ?>
        <tr>
            <td><?php echo isset($dato["apellidos_nombres_trabajador"]) ? $dato["apellidos_nombres_trabajador"] : ''; ?>
            </td>
            <td><?php echo isset($dato["num_dni_ce"]) ? $dato["num_dni_ce"] : ''; ?></td>
            <td><?php echo isset($dato["edad"]) ? $dato["edad"] : ''; ?></td>
            <td><?php echo isset($dato["area"]) ? $dato["area"] : ''; ?></td>
            <td><?php echo isset($dato["puesto_trabajo"]) ? $dato["puesto_trabajo"] : ''; ?></td>
            <td><?php echo isset($dato["antiguedad_empleo"]) ? $dato["antiguedad_empleo"] : ''; ?></td>
            <td><?php echo isset($dato["sexo"]) ? $dato["sexo"] : ''; ?></td>
            <td><?php echo isset($dato["turno"]) ? $dato["turno"] : ''; ?></td>
            <td><?php echo isset($dato["tipo_contrato"]) ? $dato["tipo_contrato"] : ''; ?></td>
            <td><?php echo isset($dato["experiencia_puesto_trabajo"]) ? $dato["experiencia_puesto_trabajo"] : ''; ?>
            </td>
            <td><?php echo isset($dato["num_horas_jornada"]) ? $dato["num_horas_jornada"] : ''; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h1>INVESTIGACIÓN DEL INCIDENTE PELIGROSO O INCIDENTE</h1>
    <table>
        <tr>
            <th>Marcar con (X) si es Incidente Peligroso o Incidente:</th>
            <th>Nº Trabajadores Potencialmente Afectados:</th>
            <th>Nº Pobladores Potencialmente Afectados:</th>
            <th>Detallar Tipo de Atención en Primeros Auxilios (De ser el caso):</th>
            <th>Fecha y Hora en que Ocurrió el Incidente Peligroso o Incidente:</th>
            <th>Fecha de Inicio de la Investigación:</th>
            <th>Lugar Exacto Donde Ocurrió el Hecho:</th>
        </tr>
        <?php foreach ($datosInvestigacion as $dato) : ?>
        <tr>
            <td><?php echo isset($dato["incidente_peligroso"]) ? $dato["incidente_peligroso"] : ''; ?></td>
            <td><?php echo isset($dato["num_trabajadores_afectados"]) ? $dato["num_trabajadores_afectados"] : ''; ?>
            </td>
            <td><?php echo isset($dato["num_pobladores_afectados"]) ? $dato["num_pobladores_afectados"] : ''; ?></td>
            <td><?php echo isset($dato["atencion_primeros_auxilios"]) ? $dato["atencion_primeros_auxilios"] : ''; ?>
            </td>
            <td><?php echo isset($dato["fecha_hora_incidente"]) ? $dato["fecha_hora_incidente"] : ''; ?></td>
            <td><?php echo isset($dato["fecha_inicio_investigacion"]) ? $dato["fecha_inicio_investigacion"] : ''; ?>
            </td>
            <td><?php echo isset($dato["lugar_incidente"]) ? $dato["lugar_incidente"] : ''; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h1>DESCRIPCIÓN DEL INCIDENTE PELIGROSO O INCIDENTE:</h1>
    <table>
        <tr>
            <th>Descripción Detallada del Incidente Peligroso o Incidente:</th>
        </tr>
        <?php foreach ($datosDescripcion as $dato) : ?>
        <tr>
            <td><?php echo isset($dato["descripcion_incidente"]) ? $dato["descripcion_incidente"] : ''; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h1>RESPONSABLES DE LA INVESTIGACIÓN:</h1>
    <table>
        <tr>
            <th>Nombres y Apellidos del Responsable de la Investigación:</th>
            <th>Cargo del Responsable:</th>
        </tr>
        <?php foreach ($datosResponsables as $dato) : ?>
        <tr>
            <td><?php echo isset($dato["responsable_investigacion"]) ? $dato["responsable_investigacion"] : ''; ?></td>
            <td><?php echo isset($dato["cargo_responsable"]) ? $dato["cargo_responsable"] : ''; ?></td>
        </tr>
        <?php endforeach; ?>
        <?php foreach ($datosResponsables2 as $dato) : ?>
        <tr>
            <td><?php echo isset($dato["responsable_investigacion_2"]) ? $dato["responsable_investigacion_2"] : ''; ?>
            </td>
            <td><?php echo isset($dato["cargo_responsable_2"]) ? $dato["cargo_responsable_2"] : ''; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>