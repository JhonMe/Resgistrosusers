<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleado</title>
    <link rel="stylesheet" href="stylos.css">

</head>

<body>
    <h1>Datos del empleado principal</h1>
    <form action="procesar_registro.php" method="post">
        <label for="numero_trabajadores">N° de trabajadores en el centro laboral:</label>
        <input type="text" name="numero_trabajadores" required><br>

        <label for="razon_social">Razon social o denominación social:</label>
        <input type="text" name="razon_social" required><br>

        <label for="ruc">RUC:</label>
        <input type="text" name="ruc" required><br>

        <label for="domicilio">Domicilio (Dirección, distrito, departamento, empresa):</label>
        <input type="text" name="domicilio" required><br>

        <label for="actividad_economica">Tipo de actividad económica:</label>
        <input type="text" name="actividad_economica" required><br>

        <label for="alto_riesgo">COMPLETAR SÓLO EN CASO QUE LAS ACTIVIDADES DEL EMPLEADOR SEAN CONSIDERADAS DE ALTO
            RIESGO:</label>
        <input type="checkbox" name="alto_riesgo" id="alto_riesgo">
        <br>

        <div id="formulario_adicional" style="display: none;">
            <h2>Formulario Adicional</h2>
            <label for="afiliados_sctr">N° TRABAJADORES AFILIADOS AL SCTR:</label>
            <input type="text" name="afiliados_sctr"><br>

            <label for="no_afiliados_sctr">N° TRABAJADORES NO AFILIADOS AL SCTR:</label>
            <input type="text" name="no_afiliados_sctr"><br>

            <label for="aseguradora">NOMBRE DE LA ASEGURADORA:</label>
            <input type="text" name="aseguradora"><br>
        </div>

        <label for="intermediacion_tercerizacion">Completar sólo si contrata servicios de intermediación o
            tercerización:</label>
        <input type="checkbox" name="intermediacion_tercerizacion" id="intermediacion_tercerizacion">
        <br>

        <div id="formulario_intermediacion" style="display: none;">
            <h2>Formulario Intermediación/Tercerización</h2>
            <!-- Campos para intermediación/tercerización aquí -->
            <label for="numero_trabajadores_intermediacion">N° de trabajadores en el centro laboral:</label>
            <input type="text" name="numero_trabajadores_intermediacion" required><br>

            <label for="razon_social_intermediacion">Razon social o denominación social:</label>
            <input type="text" name="razon_social_intermediacion" required><br>

            <label for="ruc_intermediacion">RUC:</label>
            <input type="text" name="ruc_intermediacion" required><br>

            <label for="domicilio_intermediacion">Domicilio (Dirección, distrito, departamento, empresa):</label>
            <input type="text" name="domicilio_intermediacion" required><br>

            <label for="actividad_economica_intermediacion">Tipo de actividad económica:</label>
            <input type="text" name="actividad_economica_intermediacion" required><br>

            <label for="alto_riesgo_intermediacion">COMPLETAR SÓLO EN CASO QUE LAS ACTIVIDADES DEL EMPLEADOR SEAN
                CONSIDERADAS DE ALTO
                RIESGO:</label>
            <input type="checkbox" name="alto_riesgo_intermediacion" id="alto_riesgo_intermediacion">
            <br>

            <div id="formulario_adicional_intermediacion" style="display: none;">
                <h2>Formulario Adicional Intermediación/Tercerización</h2>
                <label for="afiliados_sctr_intermediacion">N° TRABAJADORES AFILIADOS AL SCTR:</label>
                <input type="text" name="afiliados_sctr_intermediacion"><br>

                <label for="no_afiliados_sctr_intermediacion">N° TRABAJADORES NO AFILIADOS AL SCTR:</label>
                <input type="text" name="no_afiliados_sctr_intermediacion"><br>

                <label for="aseguradora_intermediacion">NOMBRE DE LA ASEGURADORA:</label>
                <input type="text" name="aseguradora_intermediacion"><br>
            </div>
        </div>

        <input type="submit" value="Registrar">

        <h2 class="titulo">Datos del Trabajador</h2>
        <div class="datos-trabajador">
            <label for="nombre_apellido">APELLIDOS Y NOMBRES DEL TRABAJADOR ACCIDENTADO:</label>
            <input type="text" name="nombre_apellido" required><br>

            <label for="dni_ce">Nº DNI/CE:</label>
            <input type="text" name="dni_ce" required><br>

            <label for="edad">EDAD:</label>
            <input type="text" name="edad" required><br>

            <label for="area">ÁREA:</label>
            <input type="text" name="area" required><br>

            <label for="puesto">PUESTO DE TRABAJO:</label>
            <input type="text" name="puesto" required><br>

            <label for="antiguedad">ANTIGÜEDAD EN EL EMPLEO:</label>
            <input type="text" name="antiguedad" required><br>

            <label for="sexo">SEXO (F/M):</label>
            <input type="text" name="sexo" required><br>

            <label for="turno">TURNO (D/T/N):</label>
            <input type="text" name="turno" required><br>

            <label for="tipo_contrato">TIPO DE CONTRATO:</label>
            <input type="text" name="tipo_contrato" required><br>

            <label for="experiencia">TIEMPO DE EXPERIENCIA EN EL PUESTO DE TRABAJO:</label>
            <input type="text" name="experiencia" required><br>

            <label for="horas_jornada">N° HORAS TRABAJADAS EN LA JORNADA LABORAL (Antes del accidente):</label>
            <input type="text" name="horas_jornada" required><br>
        </div>

        <div>
            <h2>INVESTIGACIÓN DEL ACCIDENTE DE TRABAJO</h2>

            <label for="fecha_hora_accidente">FECHA Y HORA DE OCURRENCIA DEL ACCIDENTE:</label>
            <input type="date" name="fecha_accidente" required>
            <input type="time" name="hora_accidente" required><br>

            <label for="fecha_investigacion">FECHA DE INICIO DE LA INVESTIGACIÓN:</label>
            <input type="date" name="fecha_investigacion" required><br>

            <label for="lugar_accidente">LUGAR EXACTO DONDE OCURRIÓ EL ACCIDENTE:</label>
            <input type="text" name="lugar_accidente" required><br>

            <label for="gravedad_accidente">GRAVEDAD DEL ACCIDENTE DE TRABAJO:</label><br>
            <input type="radio" name="gravedad_accidente" value="Accidente Leve"> Accidente Leve<br>
            <input type="radio" name="gravedad_accidente" value="Accidente Incapacitante"> Accidente Incapacitante<br>
            <input type="radio" name="gravedad_accidente" value="Accidente Mortal"> Accidente Mortal<br>

            <label for="grado_incapacitante">GRADO DEL ACCIDENTE INCAPACITANTE (DE SER EL CASO):</label><br>
            <input type="radio" name="grado_incapacitante" value="Total Temporal"> Total Temporal<br>
            <input type="radio" name="grado_incapacitante" value="Parcial Temporal"> Parcial Temporal<br>
            <input type="radio" name="grado_incapacitante" value="Parcial Permanente"> Parcial Permanente<br>
            <input type="radio" name="grado_incapacitante" value="Total Permanente"> Total Permanente<br>

            <label for="dias_descanso_medico">Nº DÍAS DE DESCANSO MÉDICO:</label>
            <input type="text" name="dias_descanso_medico"><br>

            <label for="trabajadores_afectados">Nº DE TRABAJADORES AFECTADOS:</label>
            <input type="text" name="trabajadores_afectados"><br>

        </div>

        <h2>DESCRIPCIÓN DEL ACCIDENTE DE TRABAJO</h2>

        <label for="hechos_accidente">Describa sólo los hechos, no escriba información subjetiva que no pueda ser
            comprobada:</label>
        <textarea name="hechos_accidente" rows="4" cols="50" required></textarea><br>

        <label for="declaracion_afectado">Adjuntar Declaración del afectado sobre el accidente de trabajo:</label>
        <input type="file" name="declaracion_afectado"><br>

        <label for="declaracion_testigos">Adjuntar Declaración de testigos (de ser el caso):</label>
        <input type="file" name="declaracion_testigos"><br>

        <label for="documentos_ayuda">Adjuntar Procedimientos, planos, registros, entre otros que ayuden a la
            investigación (de ser el caso):</label>
        <input type="file" name="documentos_ayuda"><br>


        <h2>DESCRIPCIÓN DE LAS CAUSAS QUE ORIGINARON EL ACCIDENTE DE TRABAJO</h2>

        <label for="causas_accidente">Cada empresa o entidad pública o privada, puede adoptar el modelo de determinación
            de causas, que mejor se adapte a sus características y debe adjuntar al presente formato el desarrollo de la
            misma.</label>
        <textarea name="causas_accidente" rows="4" cols="50" required></textarea><br>


        <h2>MEDIDAS CORRECTIVAS</h2>

        <label for="descripcion_medida">DESCRIPCIÓN DE LA MEDIDA CORRECTIVA:</label>
        <textarea name="descripcion_medida" rows="4" cols="50" required></textarea><br>

        <label for="responsable">RESPONSABLE:</label>
        <input type="text" name="responsable" required><br>

        <label for="fecha_ejecucion">FECHA DE EJECUCIÓN:</label>
        <input type="date" name="fecha_ejecucion" required><br>

        <label for="estado_medida">ESTADO DE LA IMPLEMENTACIÓN DE LA MEDIDA CORRECTIVA:</label>
        <select name="estado_medida" required>
            <option value="realizada">Realizada</option>
            <option value="pendiente">Pendiente</option>
            <option value="en_ejecucion">En Ejecución</option>
        </select><br>


        <h2>RESPONSABLES DEL REGISTRO Y DE LA INVESTIGACIÓN</h2>

        <!-- Primer responsable -->
        <label for="nombre_responsable1">Nombre:</label>
        <input type="text" name="nombre_responsable1" required><br>

        <label for="cargo_responsable1">Cargo:</label>
        <input type="text" name="cargo_responsable1" required><br>

        <label for="fecha_responsable1">Fecha:</label>
        <input type="date" name="fecha_responsable1" required><br>

        <label for="firma_responsable1">Firma:</label>
        <input type="text" name="firma_responsable1" required><br><br>

        <!-- Segundo responsable -->
        <label for="nombre_responsable2">Nombre:</label>
        <input type="text" name="nombre_responsable2"><br>

        <label for="cargo_responsable2">Cargo:</label>
        <input type="text" name="cargo_responsable2"><br>

        <label for="fecha_responsable2">Fecha:</label>
        <input type="date" name="fecha_responsable2"><br>

        <label for="firma_responsable2">Firma:</label>
        <input type="text" name="firma_responsable2"><br>

        <input type="submit" value="Enviar"> <!-- Botón para enviar el formulario -->


    </form>


    <script>
    document.getElementById('alto_riesgo').addEventListener('change', function() {
        var formularioAdicional = document.getElementById('formulario_adicional');
        formularioAdicional.style.display = this.checked ? 'block' : 'none';
    });

    document.getElementById('intermediacion_tercerizacion').addEventListener('change', function() {
        var formularioIntermediacion = document.getElementById('formulario_intermediacion');
        formularioIntermediacion.style.display = this.checked ? 'block' : 'none';
    });

    document.getElementById('alto_riesgo_intermediacion').addEventListener('change', function() {
        var formularioAdicionalIntermediacion = document.getElementById('formulario_adicional_intermediacion');
        formularioAdicionalIntermediacion.style.display = this.checked ? 'block' : 'none';
    });
    </script>
</body>

</html>