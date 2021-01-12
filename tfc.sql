-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-10-2020 a las 14:49:45
-- Versión del servidor: 10.1.47-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tfc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `numatricula` varchar(8) NOT NULL,
  `dnialumno` varchar(8) NOT NULL,
  `nombrealumno` varchar(45) DEFAULT NULL,
  `dniprofesorpk` varchar(8) DEFAULT NULL,
  `fechaincorporacion` date DEFAULT NULL,
  `numordenfk` int(5) DEFAULT NULL,
  `numgrupofk` int(5) DEFAULT NULL,
  `apellidoPaterno` varchar(45) DEFAULT NULL,
  `apellidoMaterno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `numgrupo` int(5) NOT NULL,
  `nombregrupo` varchar(45) DEFAULT NULL,
  `numcomponentes` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`numgrupo`, `nombregrupo`, `numcomponentes`) VALUES
(1, 'MITHOS', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesorayudaalumno`
--

CREATE TABLE `profesorayudaalumno` (
  `dniprofesorpfk` varchar(8) NOT NULL,
  `numatriculapkf` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `dniprofesor` varchar(8) NOT NULL,
  `nombreprofesor` varchar(45) DEFAULT NULL,
  `domicilio` varchar(70) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `apellidop` varchar(45) DEFAULT NULL,
  `apellidom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`dniprofesor`, `nombreprofesor`, `domicilio`, `correo`, `apellidop`, `apellidom`) VALUES
('650424V', 'Salome', 'Insurgentes #3 San Esteban Tizatlan Tlaxcala Tlaxcala', 'sal_salome@hotmail.com', 'Cruz', 'Padilla'),
('700430V', 'Erick Elliut', 'Av.juarez 94-a San Esteban Tizatlan Tlaxcala Tlaxcala', 'eric.k.elliut@hotmail.com', 'Juarez', 'Padilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesorformatribunal`
--

CREATE TABLE `profesorformatribunal` (
  `dniprofesorpfk` varchar(8) NOT NULL,
  `numtribunalpfk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesorformatribunal`
--

INSERT INTO `profesorformatribunal` (`dniprofesorpfk`, `numtribunalpfk`) VALUES
('650424V', 2),
('700430V', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `numordenpfk` int(5) NOT NULL,
  `titulo` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tfcs`
--

CREATE TABLE `tfcs` (
  `numorden` int(5) NOT NULL,
  `fechacomienzo` date DEFAULT NULL,
  `numtribunalfk` int(5) DEFAULT NULL,
  `tema` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tfcs`
--

INSERT INTO `tfcs` (`numorden`, `fechacomienzo`, `numtribunalfk`, `tema`) VALUES
(0, '2018-02-02', 2, 'Ciencias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tribunales`
--

CREATE TABLE `tribunales` (
  `numtribunal` int(5) NOT NULL,
  `lugardeexamen` varchar(45) DEFAULT NULL,
  `numcomponentes` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tribunales`
--

INSERT INTO `tribunales` (`numtribunal`, `lugardeexamen`, `numcomponentes`) VALUES
(2, 'Apizaco', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numatricula`),
  ADD KEY `dniprofesorpk` (`dniprofesorpk`),
  ADD KEY `numordenfk` (`numordenfk`),
  ADD KEY `numgrupofk` (`numgrupofk`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`numgrupo`);

--
-- Indices de la tabla `profesorayudaalumno`
--
ALTER TABLE `profesorayudaalumno`
  ADD PRIMARY KEY (`dniprofesorpfk`,`numatriculapkf`),
  ADD KEY `numatriculapkf` (`numatriculapkf`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`dniprofesor`);

--
-- Indices de la tabla `profesorformatribunal`
--
ALTER TABLE `profesorformatribunal`
  ADD PRIMARY KEY (`dniprofesorpfk`,`numtribunalpfk`),
  ADD KEY `numtribunalpfk` (`numtribunalpfk`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`numordenpfk`);

--
-- Indices de la tabla `tfcs`
--
ALTER TABLE `tfcs`
  ADD PRIMARY KEY (`numorden`),
  ADD KEY `numtribunalfk` (`numtribunalfk`);

--
-- Indices de la tabla `tribunales`
--
ALTER TABLE `tribunales`
  ADD PRIMARY KEY (`numtribunal`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`dniprofesorpk`) REFERENCES `profesores` (`dniprofesor`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`numordenfk`) REFERENCES `tfcs` (`numorden`),
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`numgrupofk`) REFERENCES `grupos` (`numgrupo`);

--
-- Filtros para la tabla `profesorayudaalumno`
--
ALTER TABLE `profesorayudaalumno`
  ADD CONSTRAINT `profesorayudaalumno_ibfk_1` FOREIGN KEY (`dniprofesorpfk`) REFERENCES `profesores` (`dniprofesor`),
  ADD CONSTRAINT `profesorayudaalumno_ibfk_2` FOREIGN KEY (`numatriculapkf`) REFERENCES `alumnos` (`numatricula`);

--
-- Filtros para la tabla `profesorformatribunal`
--
ALTER TABLE `profesorformatribunal`
  ADD CONSTRAINT `profesorformatribunal_ibfk_1` FOREIGN KEY (`dniprofesorpfk`) REFERENCES `profesores` (`dniprofesor`),
  ADD CONSTRAINT `profesorformatribunal_ibfk_2` FOREIGN KEY (`numtribunalpfk`) REFERENCES `tribunales` (`numtribunal`);

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `temas_ibfk_1` FOREIGN KEY (`numordenpfk`) REFERENCES `tfcs` (`numorden`);

--
-- Filtros para la tabla `tfcs`
--
ALTER TABLE `tfcs`
  ADD CONSTRAINT `tfcs_ibfk_1` FOREIGN KEY (`numtribunalfk`) REFERENCES `tribunales` (`numtribunal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
