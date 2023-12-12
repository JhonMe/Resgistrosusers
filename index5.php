<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DEL MONITOREO DE AGENTES FÍSICOS, QUÍMICOS, BIOLÓGICOS, PSICOSOCIALES Y FACTORES DE RIESGO
        DISERGONÓMICOS</title>
    <style>
    /* Agrega tu estilo CSS aquí */
    /* Puedes personalizar los estilos según tus preferencias */

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
    input[type="date"],
    select,
    textarea {
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
        <h2>REGISTRO DEL MONITOREO DE AGENTES FÍSICOS, QUÍMICOS, BIOLÓGICOS, PSICOSOCIALES Y FACTORES DE RIESGO
            DISERGONÓMICOS</h2>

        <h3>DATOS DEL EMPLEADOR:</h3>
        <form method="post" action="guardar_datos5.php">
            <label for="razon_social">RAZÓN SOCIAL O DENOMINACIÓN SOCIAL:</label>
            <input type="text" name="razon_social" required>

            <label for="ruc">RUC:</label>
            <input type="text" name="ruc" required>

            <label for="domicilio">DOMICILIO (Dirección, distrito, departamento, provincia):</label>
            <input type="text" name="domicilio" required>

            <label for="actividad_economica">ACTIVIDAD ECONÓMICA:</label>
            <input type="text" name="actividad_economica" required>

            <label for="num_trabajadores">Nº TRABAJADORES EN EL CENTRO LABORAL:</label>
            <input type="number" name="num_trabajadores" required>

            <h3>DATOS DEL MONITOREO:</h3>
            <label for="area_monitoreada">ÁREA MONITOREADA:</label>
            <input type="text" name="area_monitoreada" required>

            <label for="fecha_monitoreo">FECHA DEL MONITOREO:</label>
            <input type="date" name="fecha_monitoreo" required>

            <label for="tipo_riesgo_monitoreado">INDICAR TIPO DE RIESGO A SER MONITOREADO (AGENTES FÍSICOS, QUÍMICOS,
                BIOLÓGICOS, PSICOSOCIALES Y FACTORES DE RIESGO DISERGONÓMICOS):</label>
            <input type="text" name="tipo_riesgo_monitoreado" required>

            <label for="programa_monitoreo">CUENTA CON PROGRAMA DE MONITOREO (SÍ/NO):</label>
            <select name="programa_monitoreo" required>
                <option value="SI">SI</option>
                <option value="NO">NO</option>
            </select>

            <label for="frecuencia_monitoreo">FRECUENCIA DE MONITOREO:</label>
            <input type="text" name="frecuencia_monitoreo" required>

            <label for="num_trabajadores_expuestos">Nº TRABAJADORES EXPUESTOS EN EL CENTRO LABORAL:</label>
            <input type="number" name="num_trabajadores_expuestos" required>

            <h3>NOMBRE DE LA ORGANIZACIÓN QUE REALIZA EL MONITOREO (De ser el caso):</h3>
            <input type="text" name="organizacion_monitoreo">

            <h3>RESULTADOS DEL MONITOREO:</h3>
            <textarea name="resultados_monitoreo" rows="4" cols="50"></textarea>

            <h3>DESCRIPCIÓN DE LAS CAUSAS ANTE DESVIACIONES PRESENTADAS:</h3>
            <textarea name="causas_desviaciones_presentadas" rows="4" cols="50"></textarea>

            <h3>CONCLUSIONES Y RECOMENDACIONES SOBRE LOS RESULTADOS DEL MONITOREO:</h3>
            <textarea name="conclusiones_recomendaciones_monitoreo" rows="4" cols="50"></textarea>

            <h3>RESPONSABLE DEL REGISTRO:</h3>
            <label for="nombre_responsable">Nombre:</label>
            <input type="text" name="nombre_responsable" required>

            <label for="cargo_responsable">Cargo:</label>
            <input type="text" name="cargo_responsable" required>

            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" required>

            <label for="firma">Firma:</label>
            <input type="text" name="firma" required>

            <input type="submit" value="Guardar">
        </form>
    </div>
</body>

</html>