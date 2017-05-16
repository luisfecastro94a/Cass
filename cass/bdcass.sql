-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2017 a las 00:40:23
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcass`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `area` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `area`) VALUES
(1, 'Laboratorio'),
(2, 'Soporte'),
(3, 'Instalaciones'),
(4, 'Contrato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambios`
--

CREATE TABLE `cambios` (
  `id_cambios` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_contadores` int(11) NOT NULL,
  `fecha_cambio` datetime NOT NULL,
  `cod_toner` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `cod_fusor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `cod_tambor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `num_contador` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `observacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombreC` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombreC`, `activo`) VALUES
(1, 'Gerente General', 1),
(2, 'SubGerente', 1),
(3, 'Tecnico', 1),
(4, 'Vendedor', 1),
(5, 'Administrativo Contable', 1),
(6, 'Asistente Gerencia', 1),
(7, 'Coordinadora Serv. Tecnico', 1),
(8, 'Gerente Comercial', 1),
(9, 'Gerente Finanzas', 1),
(10, 'Jefe Soporte Tecnico', 1),
(11, 'Junior', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombrec` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombrec`) VALUES
(1, 'Puerto Montt'),
(2, 'Puerto Varas\r\n'),
(3, 'Alerce'),
(4, 'Llanquihue'),
(5, 'Fresia'),
(6, 'Frutillar'),
(7, 'Calbuco'),
(8, 'Los Muermos'),
(9, 'Maullin'),
(10, 'Cochamo'),
(11, 'Santiago'),
(12, 'Osorno'),
(13, 'Conce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `rut` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `fono` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `giro` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_contacto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fono_contacto` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_contacto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo_contacto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion_pago` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `id_ciudad`, `nombre`, `rut`, `fono`, `correo`, `giro`, `direccion`, `nombre_contacto`, `fono_contacto`, `correo_contacto`, `cargo_contacto`, `condicion_pago`) VALUES
(3, 11, 'Salmones Aysen S.A.', '76650680-1', '123', 'luisfecastro94@gmail.com', 'servicio tÃ©cnico u comercializaciÃ³n equipos de oficina sus accesorios ', 'AVDA. DEL VALLE 961 OF. 1703', 'Carlos rival', '013', 'crival@aysen.cl', 'SUPERVISOR PECES', 'CREDITO 30 DÃAS'),
(4, 1, 'AGUAS CLARAS S.A.', '96509550-0', '123456789', 'aguasclaras@aguasclaras.cl', 'REPRODUCCION Y CRIANZAS DE PECES MARINOS', 'AVDA. DEL VALLE 961 OF. 1703', 'Javier', '1', 'aguasclaras@aguasclaras.cl', 'Javier', 'CREDITO 30 DÃAS'),
(5, 1, 'BIONORTEC LTDA.', '76047521-1', '652234343', 'bionortec@bionortec.cl', 'OTROS SERVICIOS AGRICOLAS N.C.P.', 'Ruta V-505, Km 0.7 Loteo Appel, Parcela 11', 'alejandro', '1', 'bionortec@bionortec.cl', 'a', 'CREDITO 30 DÃAS'),
(6, 1, 'CASS S.A.', '76102295-4', '652564300', 'cass@cass.cl', 'servicio tÃ©cnico u comercializaciÃ³n equipos de oficina sus accesorios Repuestos e Insumos', 'egaÃ±a #212 ', 'Luis Castro', '984728296', 'cass@cass.cl', 'Estudiante Practica', 'EFECTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_encargado`
--

CREATE TABLE `cliente_encargado` (
  `id_cliente_encargado` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombreE` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `rut` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `fono` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente_encargado`
--

INSERT INTO `cliente_encargado` (`id_cliente_encargado`, `id_cliente`, `nombreE`, `rut`, `fono`, `correo`) VALUES
(1, 4, 'Marcelo', '187527341', '123456789', 'cass@cass.cl'),
(2, 5, 'Carlos ', '187527341', '12345678', 'cass@cass.cl'),
(3, 3, 'Luis', '18752734-1', '984728296', 'lcastro@cass.cl'),
(4, 5, 'Francisco', '9290714-7', '123', 'farellano@cass.cl'),
(5, 6, 'carlos ', '11714804-1', '123', 'cpunulef@cass.cl'),
(6, 6, 'Miguel Angel', '15487321-K', '12345678911', 'mgallardo@cass.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comisiones`
--

CREATE TABLE `comisiones` (
  `id_comisiones` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `valor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `comision` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contadores`
--

CREATE TABLE `contadores` (
  `id_contadores` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_uf` int(11) NOT NULL,
  `fecha_lectura` datetime NOT NULL,
  `num_contador` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `num_contador_anterior` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `pag_impresas` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `valor_facturar` decimal(11,4) NOT NULL,
  `fecha_cambio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contadores_detalle`
--

CREATE TABLE `contadores_detalle` (
  `id_contadores_detalle` int(11) NOT NULL,
  `id_contadores` int(11) NOT NULL,
  `fecha_lectura` datetime NOT NULL,
  `num_contador` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id_contrato` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre_contacto` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fono_contacto` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_contacto` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo_contacto` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `ubicacion_equipo` varchar(55) COLLATE utf8_spanish2_ci NOT NULL,
  `valor_copia_negro` decimal(11,4) NOT NULL,
  `valor_copia_color` decimal(11,4) NOT NULL,
  `costo_fijo` decimal(2,2) NOT NULL,
  `min_copias` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_termino` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_detalle`
--

CREATE TABLE `contrato_detalle` (
  `id_contrato_detalle` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(11) NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha_cotizacion` datetime NOT NULL,
  `fecha_respuesta` datetime NOT NULL,
  `comentario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_con_presupuesto`
--

CREATE TABLE `cotizacion_con_presupuesto` (
  `id_cotizacion_con_presupuesto` int(11) NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  `id_cotizacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha_creacion` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_ingreso` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `serie_equipo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `sintoma_cliente` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `sintoma_tecnico` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `nombreImagen` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_aviso`
--

CREATE TABLE `equipo_aviso` (
  `id_equipo_aviso` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `fecha_aviso` datetime NOT NULL,
  `medio_aviso` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_aviso1` datetime NOT NULL,
  `medio_aviso1` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_aviso2` datetime NOT NULL,
  `medio_aviso2` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_entrada`
--

CREATE TABLE `equipo_entrada` (
  `id_equipo_entrada` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente_encargado` int(11) NOT NULL,
  `id_cliente_salida` int(11) NOT NULL,
  `fecha_entrada` datetime NOT NULL,
  `total_equipos` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_salida`
--

CREATE TABLE `equipo_salida` (
  `id_equipo_salida` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente_encargado` int(11) NOT NULL,
  `fecha_salida` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadistica`
--

CREATE TABLE `estadistica` (
  `id_estadistica` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_contadores` int(11) NOT NULL,
  `num_copias_toner` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `num_copias_fusor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `num_copias_tambor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'reparado'),
(2, 'Sin reparar'),
(3, 'En Proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_detalle`
--

CREATE TABLE `factura_detalle` (
  `id_factura_detalle` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `id_proforma` int(11) NOT NULL,
  `cantidad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `nombreImagen` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`) VALUES
(1, 'Apple'),
(2, 'LG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelacceso`
--

CREATE TABLE `nivelacceso` (
  `id_nivelacceso` int(11) NOT NULL,
  `nivel` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `maxmonto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nivelacceso`
--

INSERT INTO `nivelacceso` (`id_nivelacceso`, `nivel`, `maxmonto`, `activo`) VALUES
(1, 'root', '1', 1),
(2, 'Gerente', '1000000', 1),
(3, 'Administrativo', '350000', 1),
(4, 'Soporte', '500000', 1),
(5, 'Laboratorio', '400000', 1),
(6, 'Recepcion', '600000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_trabajo`
--

CREATE TABLE `orden_trabajo` (
  `id_orden_trabajo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_ot_tipo` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_cotizacion` int(11) NOT NULL,
  `num_ot` int(255) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_cierre` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ot_detalle`
--

CREATE TABLE `ot_detalle` (
  `id_ot_detalle` int(11) NOT NULL,
  `id_ot` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_proforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ot_tipo`
--

CREATE TABLE `ot_tipo` (
  `id_ot_tipo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ot_tipo`
--

INSERT INTO `ot_tipo` (`id_ot_tipo`, `nombre`) VALUES
(1, 'Hardware'),
(2, 'Software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `id_parametros` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `valor` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` char(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `p_inicio` datetime NOT NULL,
  `p_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `id_presupuesto` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_cotizacion` int(11) NOT NULL,
  `valor_reparacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_presupuesto` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proforma`
--

CREATE TABLE `proforma` (
  `id_proforma` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proforma_detalle`
--

CREATE TABLE `proforma_detalle` (
  `id_proforma_detalle` int(11) NOT NULL,
  `id_proforma` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_cotizacion` int(11) NOT NULL,
  `id_ot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `rut` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `razon_social` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fono` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `giro` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_contacto` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `fono_contacto` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_contacto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo_contacto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` varchar(12) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `id_ciudad`, `rut`, `razon_social`, `direccion`, `fono`, `giro`, `correo`, `nombre_contacto`, `fono_contacto`, `correo_contacto`, `cargo_contacto`, `fecha_creacion`) VALUES
(1, 1, '18752734-1', 'Luis Felipe Castro Godoy', 'Pichipelluco casa 4', '984728296', 'estudiante', 'lcastro@cass.cl', 'Luis Castro', '984728296', 'lcastro@cass.cl', 'Estudiante Practica', '12/05/2017'),
(2, 2, '9290714-7', 'Francisco Arellano', 'Valle Volcanes', '12', 'servicio tÃ©cnico u comercializaciÃ³n equipos de oficina sus accesorios Repuestos e Insumos', 'farellano@cass.cl', 'jose perez', '56', 'joseper@dl.cl', 'Encargado Provedoor', '12/05/2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto`
--

CREATE TABLE `repuesto` (
  `id_repuesto` int(11) NOT NULL,
  `id_proveedo` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_repuesto_solicitud` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `valor_neto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `valor_margen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `valor_total` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `fecha_solicitud` datetime NOT NULL,
  `descripcion` varchar(65) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto_solicitud`
--

CREATE TABLE `repuesto_solicitud` (
  `id_repuesto_solicitud` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_ot` int(11) NOT NULL,
  `fecha_solicitud` datetime NOT NULL,
  `fecha_recepcion` datetime NOT NULL,
  `tipo_repuesto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uf`
--

CREATE TABLE `uf` (
  `id_uf` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `valor_uf` decimal(11,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_nivelacceso` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `domicilio` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `rut` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_nivelacceso`, `id_cargo`, `nombre`, `domicilio`, `fono`, `rut`, `clave`, `correo`) VALUES
(1, 2, 1, 'Luis Castro', 'pichipelluco', '984728296', '18752734-1', '123456789', 'lcastro@cass.cl'),
(2, 2, 1, 'Carlos  Stange', 'Puerto Montt', '1', '10303722-0', '7220', 'cstange@cass.cl'),
(3, 2, 1, 'Francisco Orellana', 'Valle Volcanes', '3', '9290714-7', '7147', 'farellano@cass.cl'),
(4, 5, 1, 'Lorena Riquelme', 'Puerto Montt', '1', '10725655-5', '6555', 'lorena@cass.cl'),
(5, 1, 1, 'Carlos  Punulef', 'Pichipelluco', '1234', '11714804-1', '8041', 'cpunulef@cass.cl'),
(6, 5, 3, 'Miguel Angel', 'Puerto Montt', '3', '15487321-K', '321k', 'mgallardo@cass.cl'),
(7, 2, 9, 'Alejandra Villaroel', 'a', '1', '10541805-1', '123', 'avillaroel@cass.cl'),
(8, 5, 3, 'Maximiliano Fuentealba', 'a', '1', '15299063-4', '123', 'mfuentealba@cass.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `id_visita` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `fecha_visita` datetime NOT NULL,
  `motivo_visita` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `cambios`
--
ALTER TABLE `cambios`
  ADD PRIMARY KEY (`id_cambios`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cliente_encargado`
--
ALTER TABLE `cliente_encargado`
  ADD PRIMARY KEY (`id_cliente_encargado`);

--
-- Indices de la tabla `contadores`
--
ALTER TABLE `contadores`
  ADD PRIMARY KEY (`id_contadores`);

--
-- Indices de la tabla `contadores_detalle`
--
ALTER TABLE `contadores_detalle`
  ADD PRIMARY KEY (`id_contadores_detalle`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id_contrato`);

--
-- Indices de la tabla `contrato_detalle`
--
ALTER TABLE `contrato_detalle`
  ADD PRIMARY KEY (`id_contrato_detalle`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_cotizacion`);

--
-- Indices de la tabla `cotizacion_con_presupuesto`
--
ALTER TABLE `cotizacion_con_presupuesto`
  ADD PRIMARY KEY (`id_cotizacion_con_presupuesto`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `equipo_aviso`
--
ALTER TABLE `equipo_aviso`
  ADD PRIMARY KEY (`id_equipo_aviso`);

--
-- Indices de la tabla `equipo_entrada`
--
ALTER TABLE `equipo_entrada`
  ADD PRIMARY KEY (`id_equipo_entrada`);

--
-- Indices de la tabla `equipo_salida`
--
ALTER TABLE `equipo_salida`
  ADD PRIMARY KEY (`id_equipo_salida`);

--
-- Indices de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  ADD PRIMARY KEY (`id_estadistica`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  ADD PRIMARY KEY (`id_factura_detalle`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `nivelacceso`
--
ALTER TABLE `nivelacceso`
  ADD PRIMARY KEY (`id_nivelacceso`);

--
-- Indices de la tabla `orden_trabajo`
--
ALTER TABLE `orden_trabajo`
  ADD PRIMARY KEY (`id_orden_trabajo`);

--
-- Indices de la tabla `ot_detalle`
--
ALTER TABLE `ot_detalle`
  ADD PRIMARY KEY (`id_ot_detalle`);

--
-- Indices de la tabla `ot_tipo`
--
ALTER TABLE `ot_tipo`
  ADD PRIMARY KEY (`id_ot_tipo`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`id_parametros`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`id_presupuesto`);

--
-- Indices de la tabla `proforma`
--
ALTER TABLE `proforma`
  ADD PRIMARY KEY (`id_proforma`);

--
-- Indices de la tabla `proforma_detalle`
--
ALTER TABLE `proforma_detalle`
  ADD PRIMARY KEY (`id_proforma_detalle`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  ADD PRIMARY KEY (`id_repuesto`);

--
-- Indices de la tabla `repuesto_solicitud`
--
ALTER TABLE `repuesto_solicitud`
  ADD PRIMARY KEY (`id_repuesto_solicitud`);

--
-- Indices de la tabla `uf`
--
ALTER TABLE `uf`
  ADD PRIMARY KEY (`id_uf`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`id_visita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cambios`
--
ALTER TABLE `cambios`
  MODIFY `id_cambios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cliente_encargado`
--
ALTER TABLE `cliente_encargado`
  MODIFY `id_cliente_encargado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `contadores`
--
ALTER TABLE `contadores`
  MODIFY `id_contadores` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contadores_detalle`
--
ALTER TABLE `contadores_detalle`
  MODIFY `id_contadores_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contrato_detalle`
--
ALTER TABLE `contrato_detalle`
  MODIFY `id_contrato_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cotizacion_con_presupuesto`
--
ALTER TABLE `cotizacion_con_presupuesto`
  MODIFY `id_cotizacion_con_presupuesto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipo_aviso`
--
ALTER TABLE `equipo_aviso`
  MODIFY `id_equipo_aviso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipo_entrada`
--
ALTER TABLE `equipo_entrada`
  MODIFY `id_equipo_entrada` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipo_salida`
--
ALTER TABLE `equipo_salida`
  MODIFY `id_equipo_salida` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  MODIFY `id_estadistica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  MODIFY `id_factura_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `nivelacceso`
--
ALTER TABLE `nivelacceso`
  MODIFY `id_nivelacceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `orden_trabajo`
--
ALTER TABLE `orden_trabajo`
  MODIFY `id_orden_trabajo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ot_detalle`
--
ALTER TABLE `ot_detalle`
  MODIFY `id_ot_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ot_tipo`
--
ALTER TABLE `ot_tipo`
  MODIFY `id_ot_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `parametros`
--
ALTER TABLE `parametros`
  MODIFY `id_parametros` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `id_presupuesto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proforma`
--
ALTER TABLE `proforma`
  MODIFY `id_proforma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proforma_detalle`
--
ALTER TABLE `proforma_detalle`
  MODIFY `id_proforma_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  MODIFY `id_repuesto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `repuesto_solicitud`
--
ALTER TABLE `repuesto_solicitud`
  MODIFY `id_repuesto_solicitud` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `uf`
--
ALTER TABLE `uf`
  MODIFY `id_uf` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `id_visita` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
