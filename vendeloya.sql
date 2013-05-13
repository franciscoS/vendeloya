-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2013 a las 22:35:38
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `vendeloya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificados`
--

CREATE TABLE IF NOT EXISTS `clasificados` (
  `IdClasificado` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(45) NOT NULL,
  `Precio` float NOT NULL,
  `PrecioDiv` int(1) NOT NULL DEFAULT '0',
  `Detalles` text NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Modelo` varchar(45) NOT NULL,
  `Estado` varchar(45) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Creado` date NOT NULL,
  `Actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdClasificado`),
  KEY `IdUsuario` (`IdUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `clasificados`
--

INSERT INTO `clasificados` (`IdClasificado`, `Titulo`, `Precio`, `PrecioDiv`, `Detalles`, `Marca`, `Modelo`, `Estado`, `IdUsuario`, `Creado`, `Actualizado`) VALUES
(1, 'Hermosos Cachorros Labrador', 1500, 0, 'Muy bonitos, 1 mes de nacidos, excelentes acompañantes siempre fieles, los tengo en color negro y meil', '', '', '', 4, '2013-05-12', '2013-05-12 20:14:29'),
(2, 'Mustang', 36000, 1, 'Excelente auto restaurado y en perfectas condiciones Mustang 64 Cobra todo un clasico', 'Ford', 'Mustang', '1964', 3, '2013-05-12', '2013-05-12 20:30:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `IdImagen` int(11) NOT NULL AUTO_INCREMENT,
  `IdClasificado` int(11) NOT NULL,
  `NombreImagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdImagen`),
  KEY `IdClasificado` (`IdClasificado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`IdImagen`, `IdClasificado`, `NombreImagen`) VALUES
(1, 1, 'labradorcachorros.jpg'),
(2, 2, 'mustang64.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NickName` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Celular` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `NickName` (`NickName`),
  KEY `NickName_2` (`NickName`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NickName`, `Password`, `Nombre`, `Apellidos`, `FechaNacimiento`, `Email`, `Telefono`, `Celular`) VALUES
(1, 'elbarto', 'changos!', 'El Barto', 'Simpson', '1987-05-05', 'fake1234@springfield.com', '', ''),
(2, 'elchuy', '1234567', 'Jesus', 'Galaviz', '1991-05-09', 'jesus@uabc.edu.mx', '', ''),
(3, 'ali', '123456', 'Alí', 'Adame Cantorán', '1991-12-15', 'aliadame15@gmail.com', '', '6461308843'),
(4, 'melissa', '121212', 'Mely', 'Ayala', '1990-08-15', 'meli@outlook.com', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
