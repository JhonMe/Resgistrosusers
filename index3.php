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
    <h2>REGISTRO DE INSPECCIONES INTERNAS DE SEGURIDAD Y SALUD EN EL TRABAJO</h2>

    <h3>DATOS DEL EMPLEADOR:</h3>
    <form method="post" action="guardar_datos3.php">
        <label for="razon_social">RAZÓN SOCIAL O DENOMINACIÓN SOCIAL:</label>
        <input type="text" name="razon_social" required><br><br>

        <label for="ruc">RUC:</label>
        <input type="text" name="ruc" required><br><br>

        <label for="domicilio">Domicilio (Dirección, distrito, departamento, provincia):</label>
        <input type="text" name="domicilio" required><br><br>

        <label for="tipo_actividad">ACTIVIDAD ECONÓMICA:</label>
        <input type="text" name="tipo_actividad" required><br><br>

        <label for="num_trabajadores">Nº TRABAJADORES EN EL CENTRO LABORAL:</label>
        <input type="number" name="num_trabajadores" required><br><br>

        <label for="area_inspeccionada">ÁREA INSPECCIONADA:</label>
        <input type="text" name="area_inspeccionada" required><br><br>

        <label for="fecha_inspeccion">FECHA DE LA INSPECCIÓN:</label>
        <input type="date" name="fecha_inspeccion" required><br><br>

        <label for="responsable_area">RESPONSABLE DEL ÁREA INSPECCIONADA:</label>
        <input type="text" name="responsable_area" required><br><br>

        <label for="responsable_inspeccion">RESPONSABLE DE LA INSPECCIÓN:</label>
        <input type="text" name="responsable_inspeccion" required><br><br>

        <label for="hora_inspeccion">HORA DE LA INSPECCIÓN:</label>
        <input type="datetime-local" name="hora_inspeccion" required><br><br>

        <label for="tipo_inspeccion ">TIPO DE INSPECCIÓN (MARCAR CON X):</label>
        <input type="checkbox" name="tipo_inspeccion" value="planeada"> PLANEADA
        <input type="checkbox" name="tipo_inspeccion" value="no planeada"> NO PLANEADA
        <input type="checkbox" name="tipo_inspeccion" value="otro_detallar"> OTRO, DETALLAR<br><br>

        <h3>OBJETIVO DE LA INSPECCIÓN INTERNA</h3>

        <label for="descripcion_interna">Descripción:</label><br>
        <textarea name="descripcion_interna" rows="4" cols="50"></textarea><br><br>

        <h3> RESULTADO DE LA INSPECCIÓN</h3>
        <h4>Indicar nombre completo del personal que participó en la inspección interna.</h4>

        <label for="resultado_incidente">Descripción:</label><br>
        <textarea name="resultado_incidente" rows="4" cols="50"></textarea><br><br>


        <h3>DESCRIPCIÓN DE LA CAUSA ANTE RESULTADOS DESFAVORABLES DE LA INSPECCIÓN</h3>

        <label for="descripcion_causa">Descripción:</label><br>
        <textarea name="descripcion_causa" rows="4" cols="50"></textarea><br><br>

        <h3>CONCLUSIONES Y RECOMENDACIONES</h3>

        <label for="conslusion_recomendacion">Descripción:</label><br>
        <textarea name="conslusion_recomendacion" rows="4" cols="50"></textarea><br><br>
        <label for="vereficacion_adj">ADJUNTAR : - Lista de verificación de ser el caso.:</label>
        <input type="file" name="vereficacion_adj"><br><br>



        <h3>RESPONSABLE DEL REGISTRO:</h3>
        <label for="nombre_responsable1">Nombre:</label>
        <input type="text" name="nombre_responsable1"><br><br>

        <label for="cargo_responsable1">Cargo:</label>
        <input type="text" name="cargo_responsable1"><br><br>

        <label for="fecha_firma1">Fecha:</label>
        <input type="date" name="fecha_firma1"><br><br>

        <label for="firma1">Firma:</label>
        <input type="text" name="firma1"><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>

</html>