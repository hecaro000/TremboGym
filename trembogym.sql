-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3308
-- Tiempo de generación: 29-02-2024 a las 11:45:49
-- Versión del servidor: 5.7.24
-- Versión de PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trembogym`
--
CREATE DATABASE IF NOT EXISTS `trembogym` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `trembogym`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociado`
--

CREATE TABLE `asociado` (
  `Contrarto_Id` int(11) NOT NULL,
  `Tarifa_Id` int(11) NOT NULL,
  `Fech_ini` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Cliente_Id` varchar(9) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Fech_Nac` date NOT NULL,
  `Tel` int(9) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrarto`
--

CREATE TABLE `contrarto` (
  `Contrarto_Id` int(11) NOT NULL,
  `Fech_inicio` date NOT NULL,
  `Fech_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Servicio_Id` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `Tarifa_Id` int(11) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociado`
--
ALTER TABLE `asociado`
  ADD PRIMARY KEY (`Contrarto_Id`,`Tarifa_Id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cliente_Id`);

--
-- Indices de la tabla `contrarto`
--
ALTER TABLE `contrarto`
  ADD PRIMARY KEY (`Contrarto_Id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Servicio_Id`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`Tarifa_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asociado`
--
ALTER TABLE `asociado`
  MODIFY `Contrarto_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrarto`
--
ALTER TABLE `contrarto`
  MODIFY `Contrarto_Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*Los usuarios, coger cada uno el vuestro*/
# Privilegios para `hector`@`%hector`

GRANT ALL PRIVILEGES ON *.* TO 'hector'@'%hector' WITH GRANT OPTION;


# Privilegios para `lucas`@`%lucas`

GRANT ALL PRIVILEGES ON *.* TO 'lucas'@'%lucas' WITH GRANT OPTION;


# Privilegios para `ruben`@`%ruben`

GRANT ALL PRIVILEGES ON *.* TO 'ruben'@'%ruben' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `trembogym`.* TO 'ruben'@'%ruben' WITH GRANT OPTION;