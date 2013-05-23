-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2013 a las 09:22:03
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
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `IdCat` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`IdCat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`IdCat`, `Categoria`) VALUES
(1, 'Alimentos'),
(2, 'Animales y Mascotas'),
(3, 'Autos y Motos'),
(4, 'Autopartes'),
(5, 'Bebés'),
(6, 'Bicicletas'),
(7, 'Casas'),
(8, 'Celulares y Smartphones'),
(9, 'Computadoras'),
(10, 'Departamentos'),
(11, 'Deportes'),
(12, 'Electrodomésticos'),
(13, 'Electrónicos'),
(14, 'Empleos / Bolsa de trabajo'),
(15, 'Encuentros personales / Adultos'),
(16, 'Extravíos / Servicio a la comunidad'),
(17, 'Herramientas'),
(18, 'Hogar'),
(19, 'Instrumentos Musicales'),
(20, 'Joyería y Accesorios'),
(21, 'Libros y Revistas'),
(22, 'Locales Comerciales'),
(23, 'Música y Películas'),
(24, 'Muebles'),
(25, 'Oficina'),
(26, 'Ropa y Calzado'),
(27, 'Saldos'),
(28, 'Salud y Belleza'),
(29, 'Terrenos'),
(30, 'Videojuegos'),
(31, 'Varios');

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
  `IdCat` int(11) NOT NULL DEFAULT '31',
  `Promo` int(1) NOT NULL DEFAULT '0',
  `Creado` date NOT NULL,
  `Actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdClasificado`),
  KEY `IdUsuario` (`IdUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `clasificados`
--

INSERT INTO `clasificados` (`IdClasificado`, `Titulo`, `Precio`, `PrecioDiv`, `Detalles`, `Marca`, `Modelo`, `Estado`, `IdUsuario`, `IdCat`, `Promo`, `Creado`, `Actualizado`) VALUES
(1, 'Hermosos Cachorros Labrador', 1500, 0, 'Muy bonitos, 1 mes de nacidos, excelentes acompañantes siempre fieles, los tengo en color negro y meil', '', '', '', 4, 2, 0, '2013-05-12', '2013-05-20 20:51:28'),
(2, 'Mustang', 36000, 1, 'Excelente auto restaurado y en perfectas condiciones Mustang 64 Cobra todo un clasico', 'Ford', 'Mustang', '1964', 3, 3, 0, '2013-05-12', '2013-05-20 20:51:44'),
(5, 'Ford Mustang 2000 Convertible', 2700, 1, 'FORD MUSTANG 2000 , AUTOMATICO , CONVERTIBLE , INTERIORES DE PIEL , TITULO -EN MANO , TEL 172 7391 ,, NEX 152*203445*2 ,,... 2700dlls .. VENDO O KAMBIO ,,,. EN EXELENTES CONDICIONES', 'Ford', 'Mustang', '2000', 1, 3, 0, '2013-05-22', '2013-05-23 00:49:27'),
(6, 'Jeep Liberty 2004', 6900, 1, '6 cil\r\n4x4\r\nimportada\r\nasegurada\r\na/c frio\r\ncd mp3\r\nasientos de piel\r\ncalenton en los asientos\r\ncontroles de audio en volante\r\nelectrica\r\nllantas todo terreno 80% vida\r\nverificacion ambiental ok\r\nplacas 2013\r\nenterita sin detalles \r\nposible cambio x carro de igual valor o menor mas diferencia\r\n6461604353', 'Jeep', 'Liberty', '2004', 2, 3, 0, '2013-05-22', '2013-05-23 00:54:34'),
(7, 'Dodge STRATUS 94', 13000, 0, 'fronterizo buen estado', 'Dodge', 'Stratus', '1994', 2, 3, 0, '2013-05-22', '2013-05-23 00:55:30'),
(8, 'Chrysler Pacifica Touring 2005', 5650, 1, 'Recien llegada muy buena y economica la camioneta\r\n-bolsas ok \r\n-alarma de agencia \r\n-CD, MP3, A/C, toda electrica\r\n-Quemacocos\r\n-3er asiento la de lujo\r\n-rines de aluminio\r\n-puerta trasera electronica que abre y cierra con control\r\n-soy de trato llegaremos a un acuerdo con el precio...', 'Chrysler', 'Pacifica', '2005', 1, 3, 0, '2013-05-22', '2013-05-23 00:57:11'),
(9, 'Mazda 5 2007', 6700, 1, '-76 mil millas\r\n-buenas llantas\r\n-tercer asiento\r\n-toda eléctrica, cd, a/c , sunroof\r\n-de lujo muy cómoda y económica', 'Mazda', '5', '2007', 1, 3, 0, '2013-05-22', '2013-05-23 00:58:03');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`IdImagen`, `IdClasificado`, `NombreImagen`) VALUES
(1, 1, 'labradorcachorros.jpg'),
(2, 2, 'mustang64.jpg'),
(5, 5, 'mustang2000.jpg'),
(6, 6, 'liberty2004.jpg'),
(7, 7, 'stratus97.jpg'),
(8, 8, 'touring2005.jpg'),
(9, 9, 'mazda5.jpg');

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
  `Nivel` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`IdUsuario`),
  KEY `NickName` (`NickName`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NickName`, `Password`, `Nombre`, `Apellidos`, `FechaNacimiento`, `Email`, `Telefono`, `Celular`, `Nivel`) VALUES
(1, 'elbarto', 'e10adc3949ba59abbe56e057f20f883e', 'El Barto', 'Simpson', '1987-05-05', 'fake1234@springfield.com', '', '', 1),
(2, 'elchuy', 'e10adc3949ba59abbe56e057f20f883e', 'Jesus', 'Galaviz', '1991-05-09', 'jesus@uabc.edu.mx', '', '', 1),
(3, 'ali', 'e10adc3949ba59abbe56e057f20f883e', 'Alí', 'Adame Cantorán', '1991-12-15', 'aliadame15@gmail.com', '', '6461308843', 5),
(4, 'melissa', 'e10adc3949ba59abbe56e057f20f883e', 'Mely', 'Ayala', '1990-08-15', 'meli@outlook.com', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
