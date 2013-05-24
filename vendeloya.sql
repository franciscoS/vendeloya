-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2013 a las 12:12:58
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `clasificados`
--

INSERT INTO `clasificados` (`IdClasificado`, `Titulo`, `Precio`, `PrecioDiv`, `Detalles`, `Marca`, `Modelo`, `Estado`, `IdUsuario`, `IdCat`, `Promo`, `Creado`, `Actualizado`) VALUES
(5, 'Ford Mustang 2000 Convertible', 2700, 1, 'FORD MUSTANG 2000\r\nAUTOMATICO\r\nCONVERTIBLE\r\nINTERIORES DE PIEL\r\nTITULO -EN MANO\r\nTEL 172 7391\r\nNEX 152*203445*2\r\nvendo o cambio', 'Ford', 'Mustang', '2000', 1, 3, 1, '2013-05-22', '2013-05-24 10:09:14'),
(6, 'Jeep Liberty 2004', 6900, 1, '6 cil\r\n4x4\r\nimportada\r\nasegurada\r\na/c frio\r\ncd mp3\r\nasientos de piel\r\ncalenton en los asientos\r\ncontroles de audio en volante\r\nelectrica\r\nllantas todo terreno 80% vida\r\nverificacion ambiental ok\r\nplacas 2013\r\nenterita sin detalles \r\nposible cambio x carro de igual valor o menor mas diferencia\r\n6461604353', 'Jeep', 'Liberty', '2004', 2, 3, 1, '2013-05-22', '2013-05-24 06:37:29'),
(7, 'Dodge STRATUS 94', 13000, 0, 'fronterizo buen estado', 'Dodge', 'Stratus', '1994', 2, 3, 0, '2013-05-22', '2013-05-23 00:55:30'),
(8, 'Chrysler Pacifica Touring 2005', 5650, 1, 'Recien llegada muy buena y economica la camioneta\r\n-bolsas ok \r\n-alarma de agencia \r\n-CD, MP3, A/C, toda electrica\r\n-Quemacocos\r\n-3er asiento la de lujo\r\n-rines de aluminio\r\n-puerta trasera electronica que abre y cierra con control\r\n-soy de trato llegaremos a un acuerdo con el precio...', 'Chrysler', 'Pacifica', '2005', 1, 3, 1, '2013-05-22', '2013-05-24 06:37:09'),
(9, 'Mazda 5 2007', 6700, 1, '-76 mil millas\r\n-buenas llantas\r\n-tercer asiento\r\n-toda eléctrica, cd, a/c , sunroof\r\n-de lujo muy cómoda y económica', 'Mazda', '5', '2007', 1, 3, 0, '2013-05-22', '2013-05-23 00:58:03'),
(10, 'Town Country 2003', 5000, 1, 'Nacional\r\nFacturada a su nombre \r\nExcelentes condiciones mecánicas\r\nInteriores excelentes\r\nDoble aire acondicionado \r\nBolsas de aire limpias \r\nLista para viajar\r\n$5000 dlls \r\nInf\r\nCel 151 85 88\r\nRadio 152*14*19405 ', 'Chrysler', 'Town Country', '2003', 2, 3, 0, '2013-05-23', '2013-05-23 07:47:38'),
(19, 'Vendo Casa en Valle Dorado', 500000, 0, '1 Pisos / Levels\r\n3 Recámaras / Bedrooms\r\n2 Baños / Baths\r\n\r\nCocina / Kitchen\r\nSala / Living Room\r\nComedor / Dining room\r\nRejas / Window protection\r\nBardeada / Perimetral fence\r\nCochera / Garage\r\npara 1 automóviles / for 1 car(s)\r\nEstacionamiento / Parking\r\npara 0 automóviles / for 0 car(s)\r\n\r\nServicios\r\nAgua / Water\r\nDrenaje / Drainage\r\nLuz / Electricity\r\nTeléfono / Telephone lines\r\nCable / Cable', '', '', '1960', 3, 7, 0, '2013-05-23', '2013-05-24 10:12:50');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`IdImagen`, `IdClasificado`, `NombreImagen`) VALUES
(5, 5, 'mustang2000.jpg'),
(6, 6, 'liberty2004.jpg'),
(7, 7, 'stratus97.jpg'),
(8, 8, 'touring2005.jpg'),
(9, 9, 'mazda5.jpg'),
(10, 10, 'towncountry2003.jpg'),
(19, 19, 'pano1_low_out.swf');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
