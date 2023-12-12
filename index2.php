<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Registro de Incidentes Peligrosos e Incidentes</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        margin: 0;
    }

    form {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    h3 {
        background-color: #333;
        color: #fff;
        padding: 10px;
        margin: 0;
        margin-top: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="datetime-local"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    textarea {
        height: 100px;
    }

    select {
        padding: 5px;
    }

    input[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #555;
    }
    </style>
</head>

<body>
    <h2>REGISTRO DE INCIDENTES PELIGROSOS E INCIDENTES</h2>

    <h3>DATOS DEL EMPLEADOR PRINCIPAL:</h3>
    <form method="post" action="guardar_datos2.php">
        <label for="razon_social">Razón Social o Denominación Social:</label>
        <input type="text" name="razon_social" required><br><br>

        <label for="ruc">RUC:</label>
        <input type="text" name="ruc" required><br><br>

        <label for="domicilio">Domicilio (Dirección, distrito, departamento, provincia):</label>
        <input type="text" name="domicilio" required><br><br>

        <label for="tipo_actividad">Tipo de Actividad Económica:</label>
        <input type="text" name="tipo_actividad" required><br><br>

        <label for="num_trabajadores">Nº Trabajadores en el Centro Laboral:</label>
        <input type="number" name="num_trabajadores" required><br><br>

        <h4>Completar sólo si contrata servicios de intermediación o tercerización:</h4>

        <h3>DATOS DEL EMPLEADOR DE INTERMEDIACIÓN, TERCERIZACIÓN, CONTRATISTA, SUBCONTRATISTA, OTROS:</h3>
        <label for="razon_social_intermediacion">Razón Social o Denominación Social:</label>
        <input type="text" name="razon_social_intermediacion"><br><br>

        <label for="ruc_intermediacion">RUC:</label>
        <input type="text" name="ruc_intermediacion"><br><br>

        <label for="domicilio_intermediacion">Domicilio (Dirección, distrito, departamento, provincia):</label>
        <input type="text" name="domicilio_intermediacion"><br><br>

        <label for="tipo_actividad_intermediacion">Tipo de Actividad Económica:</label>
        <input type="text" name="tipo_actividad_intermediacion"><br><br>

        <label for="num_trabajadores_intermediacion">Nº Trabajadores en el Centro Laboral:</label>
        <input type="number" name="num_trabajadores_intermediacion"><br><br>

        <h3>DATOS DEL TRABAJADOR (Completar sólo si el incidente afecta a trabajador(es)):</h3>
        <label for="apellidos_nombres_trabajador">Apellidos y Nombres del Trabajador:</label>
        <input type="text" name="apellidos_nombres_trabajador"><br><br>

        <label for="num_dni_ce">Nº DNI/CE:</label>
        <input type="text" name="num_dni_ce"><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad"><br><br>

        <label for="area">Área:</label>
        <input type="text" name="area"><br><br>

        <label for="puesto_trabajo">Puesto de Trabajo:</label>
        <input type="text" name="puesto_trabajo"><br><br>

        <label for="antiguedad_empleo">Antigüedad en el Empleo:</label>
        <input type="text" name="antiguedad_empleo"><br><br>

        <label for="sexo">Sexo (F/M):</label>
        <input type="text" name="sexo"><br><br>

        <label for="turno">Turno (D/T/N):</label>
        <input type="text" name="turno"><br><br>

        <label for="tipo_contrato">Tipo de Contrato:</label>
        <input type="text" name="tipo_contrato"><br><br>

        <label for="experiencia_puesto_trabajo">Tiempo de Experiencia en el Puesto de Trabajo:</label>
        <input type="text" name="experiencia_puesto_trabajo"><br><br>

        <label for="num_horas_jornada">N° Horas Trabajadas en la Jornada Laboral (Antes del suceso):</label>
        <input type="text" name="num_horas_jornada"><br><br>

        <h3>INVESTIGACIÓN DEL INCIDENTE PELIGROSO O INCIDENTE</h3>
        <label for="incidente_peligroso">Marcar con (X) si es Incidente Peligroso o Incidente:</label>
        <input type="checkbox" name="incidente_peligroso" value="Incidente Peligroso"> Incidente Peligroso
        <input type="checkbox" name="incidente_peligroso" value="Incidente"> Incidente<br><br>

        <label for="num_trabajadores_afectados">Nº Trabajadores Potencialmente Afectados:</label>
        <input type="number" name="num_trabajadores_afectados"><br><br>

        <label for="num_pobladores_afectados">Nº Pobladores Potencialmente Afectados:</label>
        <input type="number" name="num_pobladores_afectados"><br><br>

        <label for="atencion_primeros_auxilios">Detallar Tipo de Atención en Primeros Auxilios (De ser el caso):</label>
        <input type="text" name="atencion_primeros_auxilios"><br><br>

        <label for="fecha_hora_incidente">Fecha y Hora en que Ocurrió el Incidente Peligroso o Incidente:</label>
        <input type="datetime-local" name="fecha_hora_incidente"><br><br>

        <label for="fecha_inicio_investigacion">Fecha de Inicio de la Investigación:</label>
        <input type="date" name="fecha_inicio_investigacion"><br><br>

        <label for="lugar_incidente">Lugar Exacto Donde Ocurrió el Hecho:</label>
        <input type="text" name="lugar_incidente"><br><br>

        <h3>DESCRIPCIÓN DEL INCIDENTE PELIGROSO O INCIDENTE</h3>
        <label for="descripcion_incidente">Descripción:</label><br>
        <textarea name="descripcion_incidente" rows="4" cols="50"></textarea><br><br>

        <label for="causas_incidente">Causas:</label><br>
        <textarea name="causas_incidente" rows="4" cols="50"></textarea><br><br>

        <h3>MEDIDAS CORRECTIVAS</h3>
        <label for="descripcion_medida_correctiva">Descripción de la Medida Correctiva a Implementarse:</label>
        <input type="text" name="descripcion_medida_correctiva"><br><br>

        <label for="responsable_medida_correctiva">Responsable:</label>
        <input type="text" name="responsable_medida_correctiva"><br><br>

        <label for="fecha_ejecucion_medida_correctiva">Fecha de Ejecución:</label>
        <input type="date" name="fecha_ejecucion_medida_correctiva"><br><br>

        <label for="estado_medida_correctiva">Estado de la Implementación de la Medida Correctiva:</label>
        <select name="estado_medida_correctiva">
            <option value="realizada">Realizada</option>
            <option value="pendiente">Pendiente</option>
            <option value="en_ejecucion">En Ejecución</option>
        </select><br><br>

        <h3>RESPONSABLES DEL REGISTRO Y DE LA INVESTIGACIÓN</h3>
        <label for="nombre_responsable1">Nombre:</label>
        <input type="text" name="nombre_responsable1"><br><br>

        <label for="cargo_responsable1">Cargo:</label>
        <input type="text" name="cargo_responsable1"><br><br>

        <label for="fecha_firma1">Fecha:</label>
        <input type="date" name="fecha_firma1"><br><br>

        <label for="firma1">Firma:</label>
        <input type="text" name="firma1"><br><br>

        <label for="nombre_responsable2">Nombre:</label>
        <input type="text" name="nombre_responsable2"><br><br>

        <label for="cargo_responsable2">Cargo:</label>
        <input type="text" name="cargo_responsable2"><br><br>

        <label for="fecha_firma2">Fecha:</label>
        <input type="date" name="fecha_firma2"><br><br>

        <label for="firma2">Firma:</label>
        <input type="text" name="firma2"><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>

</html>