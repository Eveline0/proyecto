-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2020 a las 19:32:33
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `codigo` varchar(20) NOT NULL,
  `catalogo` varchar(30) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `medio_pago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` int(10) NOT NULL,
  `img1` varchar(20) NOT NULL,
  `img2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `precio`, `img1`, `img2`) VALUES
('0000', 'PC Acer', 3000000, 'acer1.jpg', 'acer2.jpg'),
('0001', 'Samsung S20', 4000000, 'celu1.jpg', 'celu2.jpg'),
('0002', 'Google pixel 3', 2500000, 'celu3.jpg', 'celu4.jpg'),
('0003', 'Iphone 11', 3500000, 'celu5.jpg', 'celu6.jpg'),
('0004', 'Play 4', 1600000, 'consola1.jpg', 'consola2.jpg'),
('0005', 'Audifonos gamer', 400000, 'diadema.jpg', 'diadema2.jpg'),
('0006', 'Nvidia titan rtx', 21000000, 'grafica1.jpg', 'grafica2.jpg'),
('0007', 'Nvidia 2080 rtx', 8000000, 'grafica3.jpg', 'grafica4.jpg'),
('0008', 'HP Pavilon', 7000000, 'hp1.jpg', 'hp2.jpg'),
('0009', 'Lenovo legion', 5000000, 'legion1.jpg', 'legion2.jpg'),
('0010', 'Mouse MSI', 200000, 'mouse1.jpg', 'mouse2.jpg'),
('0011', 'Pantalla MSI', 1500000, 'pantalla1.jpg', 'pantalla2.jpg'),
('0012', 'Apple watch', 1300000, 'reloj1.jpg', 'reloj2.jpg'),
('0013', 'Teclado MSI', 800000, 'teclado1.jpg', 'teclado2.jpg'),
('0014', 'TV Samsung 70\"', 3500000, 'tele1.jpg', 'tele2.jpg'),
('0015', 'TV Samsung UHD', 10000000, 'tele3.jpg', 'tele4.jpg'),
('0016', 'Torre HP', 8000000, 'torre1.jpg', 'torre2.jpg'),
('0017', 'Xbox one', 1500000, 'xbox1.jpg', 'xbox2.jpg'),
('0018', 'Nintendo switch', 2600000, 'nintendo1.jpg', 'nintendo2.jpg'),
('0019', 'Equipo de sonido LG', 800000, 'equipo1.jpg', 'equipo2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `correo`, `contrasena`) VALUES
('Eveline', 'evelinebrbs@gmail.com', '1236'),
('Eveline', 'evelinebrbs@gmsail.com', '1234'),
('juan', 'pepito@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
