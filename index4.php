<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE ESTADÍSTICAS DE SEGURIDAD Y SALUD</title>
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
        font-size: 20px;
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
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    textarea {
        resize: vertical;
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
        <h2>REGISTRO DE ESTADÍSTICAS DE SEGURIDAD Y SALUD</h2>

        <h3>DATOS DEL EMPLEADOR:</h3>
        <form method="post" action="guardar_datos4.php">
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

            <h3>DESCRIBIR LOS RESULTADOS ESTADÍSTICOS (COMPARAR CON LOS OBJETIVOS DEL SISTEMA DE GESTIÓN DE SEGURIDAD Y
                SALUD EN EL TRABAJO)</h3>
            <textarea name="resultados_estadisticos" rows="4" cols="50"></textarea>

            <h3>ANÁLISIS DE LAS CAUSAS QUE ORIGINARON LAS DESVIACIONES</h3>
            <textarea name="causas_desviaciones" rows="4" cols="50"></textarea>

            <h3>CONCLUSIONES Y RECOMENDACIONES</h3>
            <textarea name="conclusiones_recomendaciones" rows="4" cols="50"></textarea>

            <h3>RESPONSABLE DEL REGISTRO</h3>
            <textarea name="responsable_registro" rows="4" cols="50"></textarea>

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