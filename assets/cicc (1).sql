-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-01-2024 a las 21:31:15
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cicc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int NOT NULL,
  `fecha_nac` date NOT NULL,
  `tutor` varchar(100) NOT NULL,
  `grado` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `dni`, `fecha_nac`, `tutor`, `grado`) VALUES
(14, ' Aytana', 'Cornett Esperon', 0, '0000-00-00', '', 5),
(13, ' Emilia', 'Casal', 0, '0000-00-00', '', 5),
(11, ' Gael\r\n', 'Airala Pezzano', 0, '0000-00-00', '', 5),
(35, ' Alma', 'Ariente Alvarez', 0, '0000-00-00', '', 6),
(15, ' Francisco', 'David-Sarra', 0, '0000-00-00', '', 5),
(16, ' Thiago Ezequiel', 'Ferro', 0, '0000-00-00', '', 5),
(17, ' Itzel', 'Fuertes Mamani', 0, '0000-00-00', '', 5),
(18, ' Manuel', 'Galdo', 0, '0000-00-00', '', 5),
(19, ' Emma', 'Gómez', 0, '0000-00-00', '', 5),
(20, ' Lucas', 'Gómez Andre', 0, '0000-00-00', '', 5),
(21, ' Ari Nicolàs', 'Hermida', 0, '0000-00-00', '', 5),
(22, ' Ciro', 'Maggioni Roche', 0, '0000-00-00', '', 5),
(23, ' Salvador', 'Maggioni Roche', 0, '0000-00-00', '', 5),
(24, ' Juan Cruz', 'Martz', 0, '0000-00-00', '', 5),
(25, ' Helena', 'Navarro Yaltone', 0, '0000-00-00', '', 5),
(26, ' Santino', 'Ocampo Storero', 0, '0000-00-00', '', 5),
(27, ' Ignacio', 'Olivera Herrera ', 0, '0000-00-00', '', 5),
(28, ' Juliana', 'Oviedo Navarro', 0, '0000-00-00', '', 5),
(29, ' Josefina', 'Pascolat', 0, '0000-00-00', '', 5),
(30, ' Leónidas', 'Salinas', 0, '0000-00-00', '', 5),
(31, ' Emilia', 'Santeyan', 0, '0000-00-00', '', 5),
(32, ' Mercedes', 'Tarruella', 0, '0000-00-00', '', 5),
(33, ' Francesca', 'Valetti', 0, '0000-00-00', '', 5),
(34, ' Leia', 'Volta', 0, '0000-00-00', '', 5),
(36, ' Juan Bautista', 'Arista', 0, '0000-00-00', '', 6),
(37, ' Sophìa', 'Baraschi Drujera', 0, '0000-00-00', '', 6),
(38, ' Aitana', 'Fernandez Kynzl', 0, '0000-00-00', '', 6),
(39, ' Benicio', 'Frace', 0, '0000-00-00', '', 6),
(40, ' Santino Samir', 'Galvàn', 0, '0000-00-00', '', 6),
(41, ' Emilia', 'Gazaneo', 0, '0000-00-00', '', 6),
(42, ' Franco', 'Ghizzoni', 0, '0000-00-00', '', 6),
(43, ' Maia Sofìa', 'Irigoyen', 0, '0000-00-00', '', 6),
(44, ' Victoria ', 'Mas-Brizuela', 0, '0000-00-00', '', 6),
(45, ' Elian Valentín', 'Migone', 0, '0000-00-00', '', 6),
(46, ' Valentina', 'Millahual Sartori', 0, '0000-00-00', '', 6),
(47, ' Valentino', 'Orengo Portone', 0, '0000-00-00', '', 6),
(48, ' Uriel', 'Osovnikar', 0, '0000-00-00', '', 6),
(49, ' Lisandro ', 'Padilla Elder', 0, '0000-00-00', '', 6),
(50, ' Bautista', 'Pérez Lavayen', 0, '0000-00-00', '', 6),
(51, ' Thiago ', 'Piattoni Loureyro', 0, '0000-00-00', '', 6),
(52, ' Lisandro', 'Redivo', 0, '0000-00-00', '', 6),
(53, ' Valentina', 'Rissoto', 0, '0000-00-00', '', 6),
(54, ' Emma ', 'Rodríguez Vergara', 0, '0000-00-00', '', 6),
(55, ' Francisco Giuseppe', 'Serra', 0, '0000-00-00', '', 6),
(56, ' Francisca Graciana', 'Ullua', 0, '0000-00-00', '', 6),
(57, ' Isabella', 'Wesner Sáenz', 0, '0000-00-00', '', 6),
(58, ' Luna Abril', 'Duarte', 0, '0000-00-00', '', 6),
(59, ' Alma Milagros', 'Alles', 0, '0000-00-00', '', 7),
(60, ' Donato', 'Andreani Paterno', 0, '0000-00-00', '', 7),
(61, ' Thiago Agustìn', 'Britez', 0, '0000-00-00', '', 7),
(62, ' Victorio', 'Buzzo Sciu', 0, '0000-00-00', '', 7),
(63, ' Gabriel ', 'Contreras', 0, '0000-00-00', '', 7),
(64, ' Nicoletta', 'Del Bianco', 0, '0000-00-00', '', 7),
(65, ' Enzo Leonel', 'Fernàndez', 0, '0000-00-00', '', 7),
(66, ' Ignacio', 'Garcìa', 0, '0000-00-00', '', 7),
(67, ' Juan Martìn', 'Martz', 0, '0000-00-00', '', 7),
(68, ' Dante', 'Pascolat', 0, '0000-00-00', '', 7),
(69, ' Ignacio', 'Pérez Leal', 0, '0000-00-00', '', 7),
(70, ' Celina', 'Polizzotto', 0, '0000-00-00', '', 7),
(71, ' Romàn', 'Sierra', 0, '0000-00-00', '', 7),
(72, ' Aluen', 'Trejo Hurzainqui', 0, '0000-00-00', '', 7),
(73, ' Simona Giuliana', 'Valetti', 0, '0000-00-00', '', 7),
(74, ' Felipe ', 'Zaupa', 0, '0000-00-00', '', 7),
(75, ' Olivia', 'Dalceggio Idiarte', 0, '0000-00-00', '', 7),
(76, ' Kenai', 'Sanhueza Signorelli', 0, '0000-00-00', '', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `user`, `pass`, `nombre`) VALUES
(1, 'karina', 'karina', 'Karina Berger'),
(2, 'jonatan', 'jonatan', 'Jonatan Toro');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
