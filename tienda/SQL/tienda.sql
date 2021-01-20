-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-01-2021 a las 15:50:38
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `Id` varchar(5) NOT NULL,
  `IdPedido` varchar(5) NOT NULL,
  `nombreProducto` varchar(10) NOT NULL,
  `cantidad` int(3) DEFAULT NULL,
  `precio` int(3) DEFAULT NULL,
  `PrecioTotal` int(4) DEFAULT NULL,
  `imagen` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminok`
--

CREATE TABLE `adminok` (
  `Id` varchar(5) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Cantidad` varchar(10) NOT NULL,
  `PrecioTotalPedido` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `Usuario` varchar(30) NOT NULL,
  `Contrasena` varchar(30) NOT NULL,
  `DNI` varchar(10) NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Usuario`, `Contrasena`, `DNI`, `gmail`) VALUES
('marti', 'marti', 'catalan', 'marti@gmail.com'),
('Admin', 'admin', 'Administra', 'Admin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marti`
--

CREATE TABLE `marti` (
  `Id` varchar(5) NOT NULL,
  `IdPedido` varchar(5) NOT NULL,
  `nombreProducto` varchar(10) NOT NULL,
  `cantidad` int(3) DEFAULT NULL,
  `precio` int(3) DEFAULT NULL,
  `PrecioTotal` int(4) DEFAULT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `martiok`
--

CREATE TABLE `martiok` (
  `Id` varchar(5) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Cantidad` varchar(10) NOT NULL,
  `PrecioTotalPedido` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `martiok`
--

INSERT INTO `martiok` (`Id`, `Usuario`, `Cantidad`, `PrecioTotalPedido`) VALUES
('1', 'marti', '2', 20),
('2', 'marti', '34', 340),
('3', 'marti', '6', 60),
('4', 'marti', '2', -300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `destacar` tinyint(1) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `precio` varchar(3) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `Nombre`, `descripcion`, `destacar`, `categoria`, `precio`, `imagen`) VALUES
(4, 'chaqueta', 'the north face ', 1, 'chaqueta', '330', 'https://cdn.shopify.com/s/files/1/2576/0124/products/CHAQUETA-MAPAMUNDI_700x.jpg?v=1599419137'),
(5, 'Air force 1', 'Zapatillas air force 1 colaboracion por offwhite', 1, 'zapatillas', '460', 'https://mk0justfreshkic4kglq.kinstacdn.com/wp-content/uploads/2018/10/Off-White-Nike-Air-Force-1-Low-Volt-1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `adminok`
--
ALTER TABLE `adminok`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `marti`
--
ALTER TABLE `marti`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `martiok`
--
ALTER TABLE `martiok`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
