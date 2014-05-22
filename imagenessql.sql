-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2014 a las 06:39:15
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `imagenes`
--
CREATE DATABASE IF NOT EXISTS `imagenes`;
USE `imagenes`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgarchivo`
--

CREATE TABLE IF NOT EXISTS `imgarchivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(250) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `imgarchivo`
--

INSERT INTO `imgarchivo` (`id`, `ruta`, `nombre`) VALUES
(1, '/img/0b8322dafc02db75c7e18b338f5c3a21_20822000.png', '0b8322dafc02db75c7e18b338f5c3a21_20822000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
