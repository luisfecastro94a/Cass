-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2017 a las 15:30:24
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cass`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` char(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--
-- en uso(#1932 - Table 'cass.ciudad' doesn't exist in engine)
-- Error leyendo datos: (#1932 - Table 'cass.ciudad' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--
-- en uso(#1932 - Table 'cass.cliente' doesn't exist in engine)
-- Error leyendo datos: (#1932 - Table 'cass.cliente' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_encargado`
--

CREATE TABLE `cliente_encargado` (
  `id_cliente_encargado` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `rut` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `fono` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
-- Estructura de tabla para la tabla `comuna`
--
-- en uso(#1932 - Table 'cass.comuna' doesn't exist in engine)
-- Error leyendo datos: (#1932 - Table 'cass.comuna' doesn't exist in engine)

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
  `id_imagen` int(11) NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `modelo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_ingreso` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `serie_equipo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `sintoma_cliente` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `sintoma_tecnico` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
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
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelacceso`
--

CREATE TABLE `nivelacceso` (
  `id_nivelacceso` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `maxmonto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` char(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
  `razon_social` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fono` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `giro` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_contacto` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `fono_contacto` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_contacto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo_contacto` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--
-- en uso(#1932 - Table 'cass.provincia' doesn't exist in engine)
-- Error leyendo datos: (#1932 - Table 'cass.provincia' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--
-- en uso(#1932 - Table 'cass.region' doesn't exist in engine)
-- Error leyendo datos: (#1932 - Table 'cass.region' doesn't exist in engine)

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
  `id_usuario` int(100) NOT NULL,
  `id_nivelacceso` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `domicilio` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `rut` int(12) NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cambios`
--
ALTER TABLE `cambios`
  MODIFY `id_cambios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente_encargado`
--
ALTER TABLE `cliente_encargado`
  MODIFY `id_cliente_encargado` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nivelacceso`
--
ALTER TABLE `nivelacceso`
  MODIFY `id_nivelacceso` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_ot_tipo` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `id_visita` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
