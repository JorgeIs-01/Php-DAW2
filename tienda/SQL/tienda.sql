-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2020 a las 19:11:22
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--
CREATE DATABASE IF NOT EXISTS `tienda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tienda`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Usuario` varchar(30) NOT NULL,
  `Contrasena` varchar(30) NOT NULL,
  `DNI` varchar(10) NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Usuario`, `Contrasena`, `DNI`, `gmail`) VALUES
('Admin', 'admin', 'Admin', ''),
('Jorge', 'asd', '48251235a', 'asd@gmail.com'),
('Jorge', 'asd', '48251235a', 'asd@gmail.com'),
('Sergi', 'gay', 'un poco ga', 'sergi@gay.com'),
('alex', 'alex', 'mosso', 'alex@mosso.com'),
('alexasd', 'asd', 'mosso', 'alex@mosso.com'),
('Jorgeasd', '', '48251235a', 'asd@gmail.com'),
('Jorge', 'asd', '48251235aa', 'asd@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `Idpedido` varchar(5) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `nombreProducto` varchar(10) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidosok`
--

CREATE TABLE IF NOT EXISTS `pedidosok` (
  `Idpedido` varchar(20) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `nombreProducto` varchar(30) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `precio` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `oferta` tinyint(1) NOT NULL,
  `precio` varchar(3) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `Nombre`, `descripcion`, `oferta`, `precio`, `imagen`) VALUES
(0, 'barra de pan', 'la mejor barra de pan', 0, '1', '0'),
(0, 'asd', 'asdad', 0, '10', '0'),
(0, 'asd', 'asdad', 0, '10', 'https://t2.rg.ltmcdn.com/es/images/7/9/3/mazapan_de_toledo_18397_600_square.jpg'),
(0, 'barra de pan', 'El mejor mazapan', 0, '10', 'https://t2.rg.ltmcdn.com/es/images/7/9/3/mazapan_de_toledo_18397_600_square.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
