-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 17:29:02
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causas_desviaciones4`
--

CREATE TABLE `causas_desviaciones4` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `causas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `causas_desviaciones4`
--

INSERT INTO `causas_desviaciones4` (`id`, `id_empleador`, `causas`) VALUES
(1, 1, 'por mientras ninguno ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causas_desviaciones5`
--

CREATE TABLE `causas_desviaciones5` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `causas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `causas_desviaciones5`
--

INSERT INTO `causas_desviaciones5` (`id`, `id_empleador`, `causas`) VALUES
(1, 1, 'ninguno'),
(2, 2, 'ninguno'),
(3, 3, 'ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causas_enfermedades1`
--

CREATE TABLE `causas_enfermedades1` (
  `id` int(11) NOT NULL,
  `id_enfermedad` int(11) NOT NULL,
  `causa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causa_resultado3`
--

CREATE TABLE `causa_resultado3` (
  `id` int(11) NOT NULL,
  `datos_empleador_id` int(11) DEFAULT NULL,
  `descripcion_causa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `causa_resultado3`
--

INSERT INTO `causa_resultado3` (`id`, `datos_empleador_id`, `descripcion_causa`) VALUES
(1, 1, 'comosmka');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conclusiones_recomendaciones3`
--

CREATE TABLE `conclusiones_recomendaciones3` (
  `id` int(11) NOT NULL,
  `datos_empleador_id` int(11) DEFAULT NULL,
  `conslusion_recomendacion` text NOT NULL,
  `vereficacion_adj` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conclusiones_recomendaciones3`
--

INSERT INTO `conclusiones_recomendaciones3` (`id`, `datos_empleador_id`, `conslusion_recomendacion`, `vereficacion_adj`) VALUES
(1, 1, 'esta bien', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conclusiones_recomendaciones4`
--

CREATE TABLE `conclusiones_recomendaciones4` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `conclusiones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conclusiones_recomendaciones4`
--

INSERT INTO `conclusiones_recomendaciones4` (`id`, `id_empleador`, `conclusiones`) VALUES
(1, 1, 'jajjaj pero como si fuera peligrosa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conclusiones_recomendaciones5`
--

CREATE TABLE `conclusiones_recomendaciones5` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `conclusiones_recomendaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conclusiones_recomendaciones5`
--

INSERT INTO `conclusiones_recomendaciones5` (`id`, `id_empleador`, `conclusiones_recomendaciones`) VALUES
(1, 1, 'talvez'),
(2, 2, 'talvez'),
(3, 3, 'talvez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_causas`
--

CREATE TABLE `datos_causas` (
  `id` int(11) NOT NULL,
  `causas_accidente` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_causas`
--

INSERT INTO `datos_causas` (`id`, `causas_accidente`) VALUES
(1, 'hbjhbcnbjcb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empleador3`
--

CREATE TABLE `datos_empleador3` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `ruc` varchar(15) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `tipo_actividad` varchar(255) NOT NULL,
  `num_trabajadores` int(11) NOT NULL,
  `area_inspeccionada` varchar(255) NOT NULL,
  `fecha_inspeccion` date NOT NULL,
  `responsable_area` varchar(255) NOT NULL,
  `responsable_inspeccion` varchar(255) NOT NULL,
  `hora_inspeccion` datetime NOT NULL,
  `tipo_inspeccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_empleador3`
--

INSERT INTO `datos_empleador3` (`id`, `razon_social`, `ruc`, `domicilio`, `tipo_actividad`, `num_trabajadores`, `area_inspeccionada`, `fecha_inspeccion`, `responsable_area`, `responsable_inspeccion`, `hora_inspeccion`, `tipo_inspeccion`) VALUES
(1, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 71, 'nose', '2023-09-16', 'puede', 'claro', '2023-09-10 23:41:00', 'planeada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empleador_intermediacion1`
--

CREATE TABLE `datos_empleador_intermediacion1` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `ruc` varchar(15) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `tipo_actividad` varchar(255) NOT NULL,
  `num_trabajadores` int(11) NOT NULL,
  `anio_inicio_actividad` int(11) NOT NULL,
  `num_trabajadores_sctr` int(11) DEFAULT NULL,
  `num_trabajadores_no_sctr` int(11) DEFAULT NULL,
  `nombre_aseguradora` varchar(255) DEFAULT NULL,
  `lineas_produccion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_empleador_intermediacion1`
--

INSERT INTO `datos_empleador_intermediacion1` (`id`, `razon_social`, `ruc`, `domicilio`, `tipo_actividad`, `num_trabajadores`, `anio_inicio_actividad`, `num_trabajadores_sctr`, `num_trabajadores_no_sctr`, `nombre_aseguradora`, `lineas_produccion`) VALUES
(1, 'somos sii', '938484', 'av manitales', 'ni una sera', 7, 2019, 37, 17, '0', 'Lineas sii');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empleador_intermediacion2`
--

CREATE TABLE `datos_empleador_intermediacion2` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(255) DEFAULT NULL,
  `ruc` varchar(15) DEFAULT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `tipo_actividad` varchar(255) DEFAULT NULL,
  `num_trabajadores` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_empleador_intermediacion2`
--

INSERT INTO `datos_empleador_intermediacion2` (`id`, `razon_social`, `ruc`, `domicilio`, `tipo_actividad`, `num_trabajadores`) VALUES
(1, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(2, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(3, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(4, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(5, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(6, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(7, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(8, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(9, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(10, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(11, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(12, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32),
(13, 'ninguna', '938484478', 'av manitales', 'ni una sera', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empleador_principal1`
--

CREATE TABLE `datos_empleador_principal1` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `ruc` varchar(15) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `tipo_actividad` varchar(255) NOT NULL,
  `num_trabajadores` int(11) NOT NULL,
  `anio_inicio_actividad` int(11) NOT NULL,
  `num_trabajadores_sctr` int(11) DEFAULT NULL,
  `num_trabajadores_no_sctr` int(11) DEFAULT NULL,
  `nombre_aseguradora` varchar(255) DEFAULT NULL,
  `lineas_produccion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_empleador_principal1`
--

INSERT INTO `datos_empleador_principal1` (`id`, `razon_social`, `ruc`, `domicilio`, `tipo_actividad`, `num_trabajadores`, `anio_inicio_actividad`, `num_trabajadores_sctr`, `num_trabajadores_no_sctr`, `nombre_aseguradora`, `lineas_produccion`) VALUES
(1, 'se nota', '2365765277', 'av los cornejos', 'masp', 4, 2019, 45, 3, '0', 'Servicio domestico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empleador_principal2`
--

CREATE TABLE `datos_empleador_principal2` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `ruc` varchar(15) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `tipo_actividad` varchar(255) NOT NULL,
  `num_trabajadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_empleador_principal2`
--

INSERT INTO `datos_empleador_principal2` (`id`, `razon_social`, `ruc`, `domicilio`, `tipo_actividad`, `num_trabajadores`) VALUES
(1, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(2, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(3, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(4, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(5, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(6, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(7, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(8, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(9, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(10, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(11, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(12, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33),
(13, 'senati', '2365765277', 'av los cornejos', 'nose sabe', 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empleado_principal`
--

CREATE TABLE `datos_empleado_principal` (
  `id` int(11) NOT NULL,
  `numero_trabajadores` int(11) DEFAULT NULL,
  `razon_social` varchar(255) DEFAULT NULL,
  `ruc` varchar(15) DEFAULT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `actividad_economica` varchar(255) DEFAULT NULL,
  `alto_riesgo` tinyint(1) DEFAULT NULL,
  `afiliados_sctr` int(11) DEFAULT NULL,
  `no_afiliados_sctr` int(11) DEFAULT NULL,
  `aseguradora` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_empleado_principal`
--

INSERT INTO `datos_empleado_principal` (`id`, `numero_trabajadores`, `razon_social`, `ruc`, `domicilio`, `actividad_economica`, `alto_riesgo`, `afiliados_sctr`, `no_afiliados_sctr`, `aseguradora`) VALUES
(1, 345, 'se nota', '2365765277', 'av los cornejos', 'somos lo', 0, 35, 22, 'company');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_enfermedad_ocupacional1`
--

CREATE TABLE `datos_enfermedad_ocupacional1` (
  `id` int(11) NOT NULL,
  `tipo_agente` varchar(255) NOT NULL,
  `mes_anio` date NOT NULL,
  `nombre_enfermedad` varchar(255) NOT NULL,
  `parte_afectada` varchar(255) NOT NULL,
  `num_trabajadores_afectados` int(11) NOT NULL,
  `areas` text DEFAULT NULL,
  `num_cambios_puestos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_enfermedad_ocupacional1`
--

INSERT INTO `datos_enfermedad_ocupacional1` (`id`, `tipo_agente`, `mes_anio`, `nombre_enfermedad`, `parte_afectada`, `num_trabajadores_afectados`, `areas`, `num_cambios_puestos`) VALUES
(1, 'Cancer', '0000-00-00', 'Diabetes', 'Cuello', 5, '0', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_investigacion`
--

CREATE TABLE `datos_investigacion` (
  `id` int(11) NOT NULL,
  `fecha_accidente` date DEFAULT NULL,
  `hora_accidente` time DEFAULT NULL,
  `fecha_investigacion` date DEFAULT NULL,
  `lugar_accidente` varchar(255) DEFAULT NULL,
  `gravedad_accidente` varchar(255) DEFAULT NULL,
  `grado_incapacitante` varchar(255) DEFAULT NULL,
  `dias_descanso_medico` int(11) DEFAULT NULL,
  `trabajadores_afectados` int(11) DEFAULT NULL,
  `hechos_accidente` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_investigacion`
--

INSERT INTO `datos_investigacion` (`id`, `fecha_accidente`, `hora_accidente`, `fecha_investigacion`, `lugar_accidente`, `gravedad_accidente`, `grado_incapacitante`, `dias_descanso_medico`, `trabajadores_afectados`, `hechos_accidente`) VALUES
(1, '2023-09-08', '01:31:00', '2023-09-06', 'huariaca', 'Accidente Leve', 'Total Temporal', 63, 2, 'hoalconomjbsjbkjsb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_medidas_correctivas`
--

CREATE TABLE `datos_medidas_correctivas` (
  `id` int(11) NOT NULL,
  `descripcion_medida` text DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL,
  `fecha_ejecucion` date DEFAULT NULL,
  `estado_medida` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_medidas_correctivas`
--

INSERT INTO `datos_medidas_correctivas` (`id`, `descripcion_medida`, `responsable`, `fecha_ejecucion`, `estado_medida`) VALUES
(1, 'djhjjhwkj', 'raul', '2023-09-15', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_monitoreo5`
--

CREATE TABLE `datos_monitoreo5` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `area_monitoreada` varchar(255) NOT NULL,
  `fecha_monitoreo` date NOT NULL,
  `tipo_riesgo_monitoreado` varchar(255) NOT NULL,
  `programa_monitoreo` enum('SI','NO') NOT NULL,
  `frecuencia_monitoreo` varchar(255) NOT NULL,
  `num_trabajadores_expuestos` int(11) NOT NULL,
  `organizacion_monitoreo` varchar(255) DEFAULT NULL,
  `resultados_monitoreo` text DEFAULT NULL,
  `causas_desviaciones_presentadas` text DEFAULT NULL,
  `conclusiones_recomendaciones_monitoreo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_monitoreo5`
--

INSERT INTO `datos_monitoreo5` (`id`, `id_empleador`, `area_monitoreada`, `fecha_monitoreo`, `tipo_riesgo_monitoreado`, `programa_monitoreo`, `frecuencia_monitoreo`, `num_trabajadores_expuestos`, `organizacion_monitoreo`, `resultados_monitoreo`, `causas_desviaciones_presentadas`, `conclusiones_recomendaciones_monitoreo`) VALUES
(1, 1, 'talvez', '2023-09-08', 'ninguna la verdad', 'NO', 'okey', 13, 'onu', NULL, NULL, NULL),
(2, 2, 'talvez', '2023-09-08', 'ninguna la verdad', 'NO', 'okey', 13, 'onu', NULL, NULL, NULL),
(3, 3, 'talvez', '2023-09-08', 'ninguna la verdad', 'NO', 'okey', 13, 'onu', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_responsables`
--

CREATE TABLE `datos_responsables` (
  `id` int(11) NOT NULL,
  `nombre_responsable` varchar(255) DEFAULT NULL,
  `cargo_responsable` varchar(255) DEFAULT NULL,
  `fecha_responsable` date DEFAULT NULL,
  `firma_responsable` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_responsables`
--

INSERT INTO `datos_responsables` (`id`, `nombre_responsable`, `cargo_responsable`, `fecha_responsable`, `firma_responsable`) VALUES
(1, 'Jose', 'empleado', '2023-09-09', 'noseajaj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_trabajador`
--

CREATE TABLE `datos_trabajador` (
  `id` int(11) NOT NULL,
  `nombre_apellido` varchar(255) DEFAULT NULL,
  `dni_ce` varchar(15) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `puesto` varchar(255) DEFAULT NULL,
  `antiguedad` int(11) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `turno` char(1) DEFAULT NULL,
  `tipo_contrato` varchar(255) DEFAULT NULL,
  `experiencia` varchar(255) DEFAULT NULL,
  `horas_jornada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_trabajador`
--

INSERT INTO `datos_trabajador` (`id`, `nombre_apellido`, `dni_ce`, `edad`, `area`, `puesto`, `antiguedad`, `sexo`, `turno`, `tipo_contrato`, `experiencia`, `horas_jornada`) VALUES
(1, 'Johan camcelo pabletich', '83738289', 33, 'majista', 'gerente', 23, 'M', 'T', 'alños', 'ynose', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_trabajador2`
--

CREATE TABLE `datos_trabajador2` (
  `id` int(11) NOT NULL,
  `apellidos_nombres` varchar(255) DEFAULT NULL,
  `num_dni_ce` varchar(15) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `puesto_trabajo` varchar(255) DEFAULT NULL,
  `antiguedad_empleo` varchar(255) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `turno` varchar(1) DEFAULT NULL,
  `tipo_contrato` varchar(255) DEFAULT NULL,
  `experiencia_puesto_trabajo` varchar(255) DEFAULT NULL,
  `num_horas_jornada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_trabajador2`
--

INSERT INTO `datos_trabajador2` (`id`, `apellidos_nombres`, `num_dni_ce`, `edad`, `area`, `puesto_trabajo`, `antiguedad_empleo`, `sexo`, `turno`, `tipo_contrato`, `experiencia_puesto_trabajo`, `num_horas_jornada`) VALUES
(1, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(2, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(3, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(4, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(5, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(6, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(7, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(8, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(9, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(10, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(11, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(12, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33'),
(13, 'Marcos daniel', '73367282', 27, 'Secretaria', 'nose', 'antigua', 'M', 'D', 'empleo', '2', '33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleador4`
--

CREATE TABLE `empleador4` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `ruc` varchar(20) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `actividad_economica` varchar(255) NOT NULL,
  `num_trabajadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleador4`
--

INSERT INTO `empleador4` (`id`, `razon_social`, `ruc`, `domicilio`, `actividad_economica`, `num_trabajadores`) VALUES
(1, 'Utel', '2738210001', 'no entiendo ', 'activa', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleador5`
--

CREATE TABLE `empleador5` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `ruc` varchar(20) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `actividad_economica` varchar(255) NOT NULL,
  `num_trabajadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleador5`
--

INSERT INTO `empleador5` (`id`, `razon_social`, `ruc`, `domicilio`, `actividad_economica`, `num_trabajadores`) VALUES
(1, 'senati', '2365765277', 'av los cornejos', 'activa', 22),
(2, 'senati', '2365765277', 'av los cornejos', 'activa', 22),
(3, 'senati', '2365765277', 'av los cornejos', 'activa', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion2`
--

CREATE TABLE `investigacion2` (
  `incidente_peligroso` varchar(60) NOT NULL,
  `num_trabajadores_afectados` int(15) NOT NULL,
  `num_pobladores_afectados` int(50) NOT NULL,
  `atencion_primeros_auxilios` varchar(70) NOT NULL,
  `fecha_hora_incidente` datetime NOT NULL,
  `fecha_inicio_investigacion` date NOT NULL,
  `lugar_incidente` varchar(80) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `investigacion2`
--

INSERT INTO `investigacion2` (`incidente_peligroso`, `num_trabajadores_afectados`, `num_pobladores_afectados`, `atencion_primeros_auxilios`, `fecha_hora_incidente`, `fecha_inicio_investigacion`, `lugar_incidente`, `ID`) VALUES
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 1),
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 2),
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 3),
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 4),
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 5),
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 6),
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 7),
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 8),
('Incidente', 33, 22, '12', '2023-09-07 19:34:00', '2023-09-08', 'Huanuco', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigacion_incidente2`
--

CREATE TABLE `investigacion_incidente2` (
  `id` int(11) NOT NULL,
  `incidente_peligroso` varchar(255) DEFAULT NULL,
  `num_trabajadores_afectados` int(11) DEFAULT NULL,
  `num_pobladores_afectados` int(11) DEFAULT NULL,
  `atencion_primeros_auxilios` text DEFAULT NULL,
  `fecha_hora_incidente` datetime DEFAULT NULL,
  `fecha_inicio_investigacion` date DEFAULT NULL,
  `lugar_incidente` varchar(255) DEFAULT NULL,
  `descripcion_incidente` text DEFAULT NULL,
  `causas_incidente` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas_correctivas1`
--

CREATE TABLE `medidas_correctivas1` (
  `id` int(11) NOT NULL,
  `descripcion_medida` text NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `fecha_ejecucion` date NOT NULL,
  `estado_medida` enum('realizada','pendiente','en_ejecucion') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medidas_correctivas1`
--

INSERT INTO `medidas_correctivas1` (`id`, `descripcion_medida`, `responsable`, `fecha_ejecucion`, `estado_medida`) VALUES
(1, 'noase', 'Maicol', '2023-09-06', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas_correctivas2`
--

CREATE TABLE `medidas_correctivas2` (
  `id` int(11) NOT NULL,
  `descripcion_medida_correctiva` varchar(255) DEFAULT NULL,
  `responsable_medida_correctiva` varchar(255) DEFAULT NULL,
  `fecha_ejecucion_medida_correctiva` date DEFAULT NULL,
  `estado_medida_correctiva` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medidas_correctivas2`
--

INSERT INTO `medidas_correctivas2` (`id`, `descripcion_medida_correctiva`, `responsable_medida_correctiva`, `fecha_ejecucion_medida_correctiva`, `estado_medida_correctiva`) VALUES
(1, 'noseee', 'Pedro', '2023-09-15', 'en_ejecucion'),
(2, 'noseee', 'Pedro', '2023-09-15', 'en_ejecucion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivo_inspeccion3`
--

CREATE TABLE `objetivo_inspeccion3` (
  `id` int(11) NOT NULL,
  `datos_empleador_id` int(11) DEFAULT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `objetivo_inspeccion3`
--

INSERT INTO `objetivo_inspeccion3` (`id`, `datos_empleador_id`, `descripcion`) VALUES
(1, 1, 'nose si dabes eeoror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsables1`
--

CREATE TABLE `responsables1` (
  `id` int(11) NOT NULL,
  `nombre_responsable` varchar(255) NOT NULL,
  `cargo_responsable` varchar(255) NOT NULL,
  `fecha_firma` date NOT NULL,
  `firma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsables1`
--

INSERT INTO `responsables1` (`id`, `nombre_responsable`, `cargo_responsable`, `fecha_firma`, `firma`) VALUES
(1, 'Pedro', 'Marido', '2023-09-07', 'misimsk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsables2`
--

CREATE TABLE `responsables2` (
  `id` int(11) NOT NULL,
  `nombre_responsable` varchar(255) DEFAULT NULL,
  `cargo_responsable` varchar(255) DEFAULT NULL,
  `fecha_firma` date DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsables3`
--

CREATE TABLE `responsables3` (
  `nombre` varchar(40) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `fecha_firma` date NOT NULL,
  `firma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsables3`
--

INSERT INTO `responsables3` (`nombre`, `cargo`, `fecha_firma`, `firma`) VALUES
('Piero', 'Coronel', '2023-09-03', 'misimsk'),
('Piero', 'Coronel', '2023-09-03', 'misimsk'),
('Piero', 'Coronel', '2023-09-03', 'misimsk'),
('Piero', 'Coronel', '2023-09-03', 'misimsk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsables4`
--

CREATE TABLE `responsables4` (
  `nombre` varchar(40) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `fecha_firma` date NOT NULL,
  `firma` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsables4`
--

INSERT INTO `responsables4` (`nombre`, `cargo`, `fecha_firma`, `firma`) VALUES
('Maria', 'sub gerente', '2023-09-23', 'soksks'),
('Maria', 'sub gerente', '2023-09-23', 'soksks'),
('Maria', 'sub gerente', '2023-09-23', 'soksks');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable_registro3`
--

CREATE TABLE `responsable_registro3` (
  `id` int(11) NOT NULL,
  `datos_empleador_id` int(11) DEFAULT NULL,
  `nombre_responsable1` varchar(255) DEFAULT NULL,
  `cargo_responsable1` varchar(255) DEFAULT NULL,
  `fecha_firma1` date DEFAULT NULL,
  `firma1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsable_registro3`
--

INSERT INTO `responsable_registro3` (`id`, `datos_empleador_id`, `nombre_responsable1`, `cargo_responsable1`, `fecha_firma1`, `firma1`) VALUES
(1, 1, 'Pedro', 'empleado', '2023-09-15', '9jimmk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable_registro4`
--

CREATE TABLE `responsable_registro4` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `firma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsable_registro4`
--

INSERT INTO `responsable_registro4` (`id`, `id_empleador`, `nombre`, `cargo`, `fecha`, `firma`) VALUES
(1, 1, 'Jabier', 'Tesorero', '2023-09-15', 'immkmai');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable_registro5`
--

CREATE TABLE `responsable_registro5` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `firma` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsable_registro5`
--

INSERT INTO `responsable_registro5` (`id`, `id_empleador`, `nombre`, `cargo`, `fecha`, `firma`) VALUES
(1, 1, 'Jose', 'secretario', '2023-09-13', 'moskoo'),
(2, 2, 'Jose', 'secretario', '2023-09-13', 'moskoo'),
(3, 3, 'Jose', 'secretario', '2023-09-13', 'moskoo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_estadisticos4`
--

CREATE TABLE `resultados_estadisticos4` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `resultados` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultados_estadisticos4`
--

INSERT INTO `resultados_estadisticos4` (`id`, `id_empleador`, `resultados`) VALUES
(1, 1, 'si como se tuviera estemos juntoos de lo mejor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_monitoreo5`
--

CREATE TABLE `resultados_monitoreo5` (
  `id` int(11) NOT NULL,
  `id_empleador` int(11) NOT NULL,
  `resultados` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultados_monitoreo5`
--

INSERT INTO `resultados_monitoreo5` (`id`, `id_empleador`, `resultados`) VALUES
(1, 1, 'ninguna'),
(2, 2, 'ninguna'),
(3, 3, 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_inspeccion3`
--

CREATE TABLE `resultado_inspeccion3` (
  `id` int(11) NOT NULL,
  `datos_empleador_id` int(11) DEFAULT NULL,
  `resultado_incidente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultado_inspeccion3`
--

INSERT INTO `resultado_inspeccion3` (`id`, `datos_empleador_id`, `resultado_incidente`) VALUES
(1, 1, 'smmammamma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_agentes1`
--

CREATE TABLE `tipos_agentes1` (
  `id` int(11) NOT NULL,
  `tipo_agente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'jhon', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `causas_desviaciones4`
--
ALTER TABLE `causas_desviaciones4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `causas_desviaciones5`
--
ALTER TABLE `causas_desviaciones5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `causas_enfermedades1`
--
ALTER TABLE `causas_enfermedades1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `causa_resultado3`
--
ALTER TABLE `causa_resultado3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_empleador_id` (`datos_empleador_id`);

--
-- Indices de la tabla `conclusiones_recomendaciones3`
--
ALTER TABLE `conclusiones_recomendaciones3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_empleador_id` (`datos_empleador_id`);

--
-- Indices de la tabla `conclusiones_recomendaciones4`
--
ALTER TABLE `conclusiones_recomendaciones4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `conclusiones_recomendaciones5`
--
ALTER TABLE `conclusiones_recomendaciones5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `datos_causas`
--
ALTER TABLE `datos_causas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_empleador3`
--
ALTER TABLE `datos_empleador3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_empleador_intermediacion1`
--
ALTER TABLE `datos_empleador_intermediacion1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_empleador_intermediacion2`
--
ALTER TABLE `datos_empleador_intermediacion2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_empleador_principal1`
--
ALTER TABLE `datos_empleador_principal1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_empleador_principal2`
--
ALTER TABLE `datos_empleador_principal2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_empleado_principal`
--
ALTER TABLE `datos_empleado_principal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_enfermedad_ocupacional1`
--
ALTER TABLE `datos_enfermedad_ocupacional1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_investigacion`
--
ALTER TABLE `datos_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_medidas_correctivas`
--
ALTER TABLE `datos_medidas_correctivas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_monitoreo5`
--
ALTER TABLE `datos_monitoreo5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `datos_responsables`
--
ALTER TABLE `datos_responsables`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_trabajador`
--
ALTER TABLE `datos_trabajador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_trabajador2`
--
ALTER TABLE `datos_trabajador2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleador4`
--
ALTER TABLE `empleador4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleador5`
--
ALTER TABLE `empleador5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `investigacion2`
--
ALTER TABLE `investigacion2`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `investigacion_incidente2`
--
ALTER TABLE `investigacion_incidente2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medidas_correctivas1`
--
ALTER TABLE `medidas_correctivas1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medidas_correctivas2`
--
ALTER TABLE `medidas_correctivas2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objetivo_inspeccion3`
--
ALTER TABLE `objetivo_inspeccion3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_empleador_id` (`datos_empleador_id`);

--
-- Indices de la tabla `responsables1`
--
ALTER TABLE `responsables1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `responsables2`
--
ALTER TABLE `responsables2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `responsable_registro3`
--
ALTER TABLE `responsable_registro3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_empleador_id` (`datos_empleador_id`);

--
-- Indices de la tabla `responsable_registro4`
--
ALTER TABLE `responsable_registro4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `responsable_registro5`
--
ALTER TABLE `responsable_registro5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `resultados_estadisticos4`
--
ALTER TABLE `resultados_estadisticos4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `resultados_monitoreo5`
--
ALTER TABLE `resultados_monitoreo5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleador` (`id_empleador`);

--
-- Indices de la tabla `resultado_inspeccion3`
--
ALTER TABLE `resultado_inspeccion3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_empleador_id` (`datos_empleador_id`);

--
-- Indices de la tabla `tipos_agentes1`
--
ALTER TABLE `tipos_agentes1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `causas_desviaciones4`
--
ALTER TABLE `causas_desviaciones4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `causas_desviaciones5`
--
ALTER TABLE `causas_desviaciones5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `causas_enfermedades1`
--
ALTER TABLE `causas_enfermedades1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `causa_resultado3`
--
ALTER TABLE `causa_resultado3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conclusiones_recomendaciones3`
--
ALTER TABLE `conclusiones_recomendaciones3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conclusiones_recomendaciones4`
--
ALTER TABLE `conclusiones_recomendaciones4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conclusiones_recomendaciones5`
--
ALTER TABLE `conclusiones_recomendaciones5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos_causas`
--
ALTER TABLE `datos_causas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_empleador3`
--
ALTER TABLE `datos_empleador3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_empleador_intermediacion1`
--
ALTER TABLE `datos_empleador_intermediacion1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_empleador_intermediacion2`
--
ALTER TABLE `datos_empleador_intermediacion2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `datos_empleador_principal1`
--
ALTER TABLE `datos_empleador_principal1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_empleador_principal2`
--
ALTER TABLE `datos_empleador_principal2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `datos_empleado_principal`
--
ALTER TABLE `datos_empleado_principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_enfermedad_ocupacional1`
--
ALTER TABLE `datos_enfermedad_ocupacional1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_investigacion`
--
ALTER TABLE `datos_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_medidas_correctivas`
--
ALTER TABLE `datos_medidas_correctivas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_monitoreo5`
--
ALTER TABLE `datos_monitoreo5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos_responsables`
--
ALTER TABLE `datos_responsables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_trabajador`
--
ALTER TABLE `datos_trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_trabajador2`
--
ALTER TABLE `datos_trabajador2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `empleador4`
--
ALTER TABLE `empleador4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleador5`
--
ALTER TABLE `empleador5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `investigacion2`
--
ALTER TABLE `investigacion2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `investigacion_incidente2`
--
ALTER TABLE `investigacion_incidente2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medidas_correctivas1`
--
ALTER TABLE `medidas_correctivas1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medidas_correctivas2`
--
ALTER TABLE `medidas_correctivas2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `objetivo_inspeccion3`
--
ALTER TABLE `objetivo_inspeccion3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `responsables1`
--
ALTER TABLE `responsables1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `responsables2`
--
ALTER TABLE `responsables2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `responsable_registro3`
--
ALTER TABLE `responsable_registro3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `responsable_registro4`
--
ALTER TABLE `responsable_registro4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `responsable_registro5`
--
ALTER TABLE `responsable_registro5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `resultados_estadisticos4`
--
ALTER TABLE `resultados_estadisticos4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `resultados_monitoreo5`
--
ALTER TABLE `resultados_monitoreo5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `resultado_inspeccion3`
--
ALTER TABLE `resultado_inspeccion3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipos_agentes1`
--
ALTER TABLE `tipos_agentes1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `causas_desviaciones4`
--
ALTER TABLE `causas_desviaciones4`
  ADD CONSTRAINT `causas_desviaciones4_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador4` (`id`);

--
-- Filtros para la tabla `causas_desviaciones5`
--
ALTER TABLE `causas_desviaciones5`
  ADD CONSTRAINT `causas_desviaciones5_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador5` (`id`);

--
-- Filtros para la tabla `causa_resultado3`
--
ALTER TABLE `causa_resultado3`
  ADD CONSTRAINT `causa_resultado3_ibfk_1` FOREIGN KEY (`datos_empleador_id`) REFERENCES `datos_empleador3` (`id`);

--
-- Filtros para la tabla `conclusiones_recomendaciones3`
--
ALTER TABLE `conclusiones_recomendaciones3`
  ADD CONSTRAINT `conclusiones_recomendaciones3_ibfk_1` FOREIGN KEY (`datos_empleador_id`) REFERENCES `datos_empleador3` (`id`);

--
-- Filtros para la tabla `conclusiones_recomendaciones4`
--
ALTER TABLE `conclusiones_recomendaciones4`
  ADD CONSTRAINT `conclusiones_recomendaciones4_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador4` (`id`);

--
-- Filtros para la tabla `conclusiones_recomendaciones5`
--
ALTER TABLE `conclusiones_recomendaciones5`
  ADD CONSTRAINT `conclusiones_recomendaciones5_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador5` (`id`);

--
-- Filtros para la tabla `datos_monitoreo5`
--
ALTER TABLE `datos_monitoreo5`
  ADD CONSTRAINT `datos_monitoreo5_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador5` (`id`);

--
-- Filtros para la tabla `objetivo_inspeccion3`
--
ALTER TABLE `objetivo_inspeccion3`
  ADD CONSTRAINT `objetivo_inspeccion3_ibfk_1` FOREIGN KEY (`datos_empleador_id`) REFERENCES `datos_empleador3` (`id`);

--
-- Filtros para la tabla `responsable_registro3`
--
ALTER TABLE `responsable_registro3`
  ADD CONSTRAINT `responsable_registro3_ibfk_1` FOREIGN KEY (`datos_empleador_id`) REFERENCES `datos_empleador3` (`id`);

--
-- Filtros para la tabla `responsable_registro4`
--
ALTER TABLE `responsable_registro4`
  ADD CONSTRAINT `responsable_registro4_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador4` (`id`);

--
-- Filtros para la tabla `responsable_registro5`
--
ALTER TABLE `responsable_registro5`
  ADD CONSTRAINT `responsable_registro5_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador5` (`id`);

--
-- Filtros para la tabla `resultados_estadisticos4`
--
ALTER TABLE `resultados_estadisticos4`
  ADD CONSTRAINT `resultados_estadisticos4_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador4` (`id`);

--
-- Filtros para la tabla `resultados_monitoreo5`
--
ALTER TABLE `resultados_monitoreo5`
  ADD CONSTRAINT `resultados_monitoreo5_ibfk_1` FOREIGN KEY (`id_empleador`) REFERENCES `empleador5` (`id`);

--
-- Filtros para la tabla `resultado_inspeccion3`
--
ALTER TABLE `resultado_inspeccion3`
  ADD CONSTRAINT `resultado_inspeccion3_ibfk_1` FOREIGN KEY (`datos_empleador_id`) REFERENCES `datos_empleador3` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
