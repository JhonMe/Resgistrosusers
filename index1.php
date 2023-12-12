<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Enfermedades Ocupacionales</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    h3 {
        font-size: 18px;
        margin-top: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-top: 10px;
    }

    input[type="text"],
    input[type="number"],
    input[type="month"],
    input[type="file"],
    select,
    input[type="radio"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>REGISTRO DE ENFERMEDADES OCUPACIONALES</h2>

        <h3>DATOS DEL EMPLEADOR PRINCIPAL:</h3>
        <form method="post" action="guardar_datos1.php">
            <label for="razon_social">Razón Social o Denominación Social:</label>
            <input type="text" name="razon_social" required>

            <label for="ruc">RUC:</label>
            <input type="text" name="ruc" required>

            <label for="domicilio">Domicilio (Dirección, distrito, departamento, provincia):</label>
            <input type="text" name="domicilio" required>

            <label for="tipo_actividad">Tipo de Actividad Económica:</label>
            <input type="text" name="tipo_actividad" required>

            <label for="num_trabajadores">Nº Trabajadores en el Centro Laboral:</label>
            <input type="number" name="num_trabajadores" required>

            <label for="anio_inicio_actividad">Año de Inicio de la Actividad:</label>
            <input type="number" name="anio_inicio_actividad" required>

            <!-- Completar solo si las actividades son de alto riesgo -->
            <h4>Completar solo si las actividades son de alto riesgo:</h4>
            <label for="num_trabajadores_sctr">Nº Trabajadores Afiliados al SCTR:</label>
            <input type="number" name="num_trabajadores_sctr">

            <label for="num_trabajadores_no_sctr">Nº Trabajadores No Afiliados al SCTR:</label>
            <input type="number" name="num_trabajadores_no_sctr">

            <label for="nombre_aseguradora">Nombre de la Aseguradora:</label>
            <input type="text" name="nombre_aseguradora">

            <label for="lineas_produccion">Líneas de Producción y/o Servicios:</label>
            <input type="text" name="lineas_produccion">

            <!-- DATOS DEL EMPLEADOR DE INTERMEDIACIÓN, TERCERIZACIÓN, CONTRATISTA, SUBCONTRATISTA, OTROS -->
            <h3>DATOS DEL EMPLEADOR DE INTERMEDIACIÓN, TERCERIZACIÓN, CONTRATISTA, SUBCONTRATISTA, OTROS:</h3>
            <label for="razon_social_intermediacion">Razón Social o Denominación Social:</label>
            <input type="text" name="razon_social_intermediacion">

            <label for="ruc_intermediacion">RUC:</label>
            <input type="text" name="ruc_intermediacion">

            <label for="domicilio_intermediacion">Domicilio (Dirección, distrito, departamento, provincia):</label>
            <input type="text" name="domicilio_intermediacion">

            <label for="tipo_actividad_intermediacion">Tipo de Actividad Económica:</label>
            <input type="text" name="tipo_actividad_intermediacion">

            <label for="num_trabajadores_intermediacion">Nº Trabajadores en el Centro Laboral:</label>
            <input type="number" name="num_trabajadores_intermediacion">

            <label for="anio_inicio_actividad_intermediacion">Año de Inicio de la Actividad:</label>
            <input type="number" name="anio_inicio_actividad_intermediacion">

            <!-- Completar solo si las actividades del empleador de intermediación/tercerización son de alto riesgo -->
            <h4>Completar solo si las actividades son de alto riesgo:</h4>
            <label for="num_trabajadores_sctr_intermediacion">Nº Trabajadores Afiliados al SCTR:</label>
            <input type="number" name="num_trabajadores_sctr_intermediacion">

            <label for="num_trabajadores_no_sctr_intermediacion">Nº Trabajadores No Afiliados al SCTR:</label>
            <input type="number" name="num_trabajadores_no_sctr_intermediacion">

            <label for="nombre_aseguradora_intermediacion">Nombre de la Aseguradora:</label>
            <input type="text" name="nombre_aseguradora_intermediacion">

            <label for="lineas_produccion_intermediacion">Líneas de Producción y/o Servicios:</label>
            <input type="text" name="lineas_produccion_intermediacion">

            <!-- DATOS REFERENTES A LA ENFERMEDAD OCUPACIONAL -->
            <h3>DATOS REFERENTES A LA ENFERMEDAD OCUPACIONAL:</h3>
            <label for="tipo_agente">Tipo de Agente que Originó la Enfermedad Ocupacional:</label>
            <input type="text" name="tipo_agente">

            <label for="mes_anio">Mes y Año:</label>
            <input type="month" name="mes_anio">

            <label for="nombre_enfermedad">Nombre de la Enfermedad Ocupacional:</label>
            <input type="text" name="nombre_enfermedad">

            <label for="parte_afectada">Parte del Cuerpo o Sistema del Trabajador Afectado:</label>
            <input type="text" name="parte_afectada">

            <label for="num_trabajadores_afectados">Nº de Trabajadores Afectados:</label>
            <input type="number" name="num_trabajadores_afectados">

            <label for="areas">Áreas:</label>
            <input type="text" name="areas">

            <label for="num_cambios_puestos">Nº de Cambios de Puestos Generados (de ser el caso):</label>
            <input type="number" name="num_cambios_puestos">

            <!-- TABLA REFERENCIAL 1: TIPOS DE AGENTES -->
            <h3>TABLA REFERENCIAL 1: TIPOS DE AGENTES</h3>
            <label>FÍSICO:</label><br>
            <input type="checkbox" name="fisico[]" value="Ruido F1"> Ruido F1<br>
            <input type="checkbox" name="fisico[]" value="Vibración F2"> Vibración F2<br>
            <input type="checkbox" name="fisico[]" value="Iluminación F3"> Iluminación F3<br>
            <input type="checkbox" name="fisico[]" value="Ventilación F4"> Ventilación F4<br>
            <input type="checkbox" name="fisico[]" value="Presión alta o baja F5"> Presión alta o baja F5<br>
            <input type="checkbox" name="fisico[]" value="Temperatura (Calor o frío) F6"> Temperatura (Calor o frío)
            F6<br>
            <input type="checkbox" name="fisico[]" value="Humedad F7"> Humedad F7<br>
            <input type="checkbox" name="fisico[]" value="Radiación en general F8"> Radiación en general F8<br>
            <input type="checkbox" name="fisico[]" value="Otros, indicar F9"> Otros, indicar F9<br><br>

            <label>QUÍMICO:</label><br>
            <input type="checkbox" name="quimico[]" value="Gases Q1"> Gases Q1<br>
            <input type="checkbox" name="quimico[]" value="Vapores Q2"> Vapores Q2<br>
            <input type="checkbox" name="quimico[]" value="Neblinas Q3"> Neblinas Q3<br>
            <input type="checkbox" name="quimico[]" value="Rocío Q4"> Rocío Q4<br>
            <input type="checkbox" name="quimico[]" value="Polvo Q5"> Polvo Q5<br>
            <input type="checkbox" name="quimico[]" value="Humos Q6"> Humos Q6<br>
            <input type="checkbox" name="quimico[]" value="Líquidos Q7"> Líquidos Q7<br>
            <input type="checkbox" name="quimico[]" value="Otros, indicar Q8"> Otros, indicar Q8<br><br>

            <label>BIOLÓGICO:</label><br>
            <input type="checkbox" name="biologico[]" value="Virus B1"> Virus B1<br>
            <input type="checkbox" name="biologico[]" value="Bacilos B2"> Bacilos B2<br>
            <input type="checkbox" name="biologico[]" value="Bacterias B3"> Bacterias B3<br>
            <input type="checkbox" name="biologico[]" value="Hongos B4"> Hongos B4<br>
            <input type="checkbox" name="biologico[]" value="Parásitos B5"> Parásitos B5<br>
            <input type="checkbox" name="biologico[]" value="Insectos B6"> Insectos B6<br>
            <input type="checkbox" name="biologico[]" value="Roedores B7"> Roedores B7<br>
            <input type="checkbox" name="biologico[]" value="Otros, indicar B8"> Otros, indicar B8<br><br>

            <label>DISERGONÓMICO:</label><br>
            <input type="checkbox" name="disergonomico[]" value="Manipulación inadecuada de carga D1"> Manipulación
            inadecuada de carga D1<br>
            <input type="checkbox" name="disergonomico[]" value="Diseño de puesto inadecuado D2"> Diseño de puesto
            inadecuado D2<br>
            <input type="checkbox" name="disergonomico[]" value="Posturas inadecuadas D3"> Posturas inadecuadas D3<br>
            <input type="checkbox" name="disergonomico[]" value="Trabajos repetitivos D4"> Trabajos repetitivos D4<br>
            <input type="checkbox" name="disergonomico[]" value="Otros, indicar D5"> Otros, indicar D5<br><br>

            <label>PSICOSOCIALES:</label><br>
            <input type="checkbox" name="psicosociales[]" value="Hostigamiento psicológico P1"> Hostigamiento
            psicológico
            P1<br>
            <input type="checkbox" name="psicosociales[]" value="Estrés laboral P2"> Estrés laboral P2<br>
            <input type="checkbox" name="psicosociales[]" value="Turno rotativo P3"> Turno rotativo P3<br>
            <input type="checkbox" name="psicosociales[]" value="Falta de comunicación y entrenamiento P4"> Falta de
            comunicación y entrenamiento P4<br>
            <input type="checkbox" name="psicosociales[]" value="Autoritarismo P5"> Autoritarismo P5<br>
            <input type="checkbox" name="psicosociales[]" value="Otros, indicar P6"> Otros, indicar P6<br><br>

            <!-- DETALLE DE LAS CAUSAS QUE GENERAN LAS ENFERMEDADES OCUPACIONALES POR TIPO DE AGENTE -->
            <h3>DETALLE DE LAS CAUSAS QUE GENERAN LAS ENFERMEDADES OCUPACIONALES POR TIPO DE AGENTE:</h3>
            <label for="causas_enfermedades">Adjuntar documento con las causas:</label>
            <input type="file" name="causas_enfermedades"><br><br>

            <!-- COMPLETAR SOLO EN CASO DE EMPLEO DE SUSTANCIAS CANCERÍGENAS -->
            <h3>COMPLETAR SOLO EN CASO DE EMPLEO DE SUSTANCIAS CANCERÍGENAS</h3>
            <label for="sustancias_cancerigenas">Relación de Sustancias Cancerígenas:</label>
            <input type="text" name="sustancias_cancerigenas"><br><br>

            <label for="monitoreos_agentes">¿Se han realizado monitoreos de los agentes presentes en el ambiente
                (SI/NO)?:</label>
            <input type="radio" name="monitoreos_agentes" value="SI"> SI
            <input type="radio" name="monitoreos_agentes" value="NO"> NO<br><br>

            <!-- MEDIDAS CORRECTIVAS -->
            <h3>MEDIDAS CORRECTIVAS</h3>
            <label for="descripcion_medidas">Descripción de la Medida Correctiva:</label>
            <input type="text" name="descripcion_medidas"><br><br>

            <label for="responsable_medidas">Responsable:</label>
            <input type="text" name="responsable_medidas"><br><br>

            <label for="fecha_ejecucion">Fecha de Ejecución:</label>
            <input type="date" name="fecha_ejecucion"><br><br>

            <label for="estado_medidas">Estado de la implementación de la medida correctiva:</label>
            <select name="estado_medidas">
                <option value="realizada">Realizada</option>
                <option value="pendiente">Pendiente</option>
                <option value="en_ejecucion">En Ejecución</option>
            </select><br><br>

            <!-- RESPONSABLES DEL REGISTRO Y DE LA INVESTIGACIÓN -->
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
    </div>
</body>

</html>