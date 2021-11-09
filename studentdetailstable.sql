-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2021 a las 21:15:04
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbacademic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studentdetailstable`
--

CREATE TABLE `studentdetailstable` (
  `student_id` int(255) NOT NULL,
  `student_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `student_class` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `student_phone_num` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `studentdetailstable`
--

INSERT INTO `studentdetailstable` (`student_id`, `student_name`, `student_class`, `student_phone_num`, `student_email`) VALUES
(31, 'Teresa Valencia', 'Biología', '1234567', 'tvalencia@gmail.com'),
(32, 'Faustino Zapata', 'Mecánica', '3692581', 'fausto@gmail.com'),
(33, 'Walter Rodas', 'Topografía', '62047125', 'wrodas@gmail.com'),
(34, 'Pastora Valencia', 'Ciencias', '858585', 'psval@gmail.com'),
(44, 'Francisco Valencia', 'Estampador', '5454545', 'fval@hotmail.com'),
(45, 'Oscar Valencia Zapata', 'Albañil', '5454545', 'oval@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `studentdetailstable`
--
ALTER TABLE `studentdetailstable`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `studentdetailstable`
--
ALTER TABLE `studentdetailstable`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
