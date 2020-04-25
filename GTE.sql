-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql113.260mb.net
-- Tiempo de generación: 20-10-2019 a las 17:27:24
-- Versión del servidor: 5.6.45-86.1
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `n260m_20445422_GTE`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1esoa`
--

CREATE TABLE `1esoa` (
  `id` int(11) NOT NULL,
  `fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `materia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tarea` varchar(10000) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1esoacalendar`
--

CREATE TABLE `1esoacalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` longtext NOT NULL,
  `evento` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1esobcalendar`
--

CREATE TABLE `1esobcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1esoccalendar`
--

CREATE TABLE `1esoccalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1esodcalendar`
--

CREATE TABLE `1esodcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1esoecalendar`
--

CREATE TABLE `1esoecalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1esofcalendar`
--

CREATE TABLE `1esofcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `1esogcalendar`
--

CREATE TABLE `1esogcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` longtext NOT NULL,
  `evento` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2eso`
--

CREATE TABLE `2eso` (
  `id` int(255) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `enlace` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2esoacalendar`
--

CREATE TABLE `2esoacalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` longtext NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2esobcalendar`
--

CREATE TABLE `2esobcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2esoccalendar`
--

CREATE TABLE `2esoccalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2esodcalendar`
--

CREATE TABLE `2esodcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2esoecalendar`
--

CREATE TABLE `2esoecalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2esofcalendar`
--

CREATE TABLE `2esofcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3eso`
--

CREATE TABLE `3eso` (
  `id` int(11) NOT NULL,
  `materia` varchar(1000) NOT NULL,
  `tema` varchar(1000) NOT NULL,
  `enlace` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3esoacalendar`
--

CREATE TABLE `3esoacalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3esobcalendar`
--

CREATE TABLE `3esobcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) CHARACTER SET latin1 NOT NULL,
  `otro` varchar(100) CHARACTER SET latin1 NOT NULL,
  `materia` varchar(100) CHARACTER SET latin1 NOT NULL,
  `asunto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tarea` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `evento` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3esoccalendar`
--

CREATE TABLE `3esoccalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3esodcalendar`
--

CREATE TABLE `3esodcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3esoecalendar`
--

CREATE TABLE `3esoecalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) CHARACTER SET latin1 NOT NULL,
  `otro` varchar(100) CHARACTER SET latin1 NOT NULL,
  `materia` varchar(100) CHARACTER SET latin1 NOT NULL,
  `asunto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tarea` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `evento` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `3esofcalendar`
--

CREATE TABLE `3esofcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) CHARACTER SET latin1 NOT NULL,
  `otro` varchar(100) CHARACTER SET latin1 NOT NULL,
  `materia` varchar(100) CHARACTER SET latin1 NOT NULL,
  `asunto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tarea` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `evento` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4eso`
--

CREATE TABLE `4eso` (
  `id` int(11) NOT NULL,
  `materia` varchar(1000) NOT NULL,
  `tema` varchar(1000) NOT NULL,
  `enlace` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4esoacalendar`
--

CREATE TABLE `4esoacalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4esobcalendar`
--

CREATE TABLE `4esobcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) CHARACTER SET latin1 NOT NULL,
  `otro` varchar(100) CHARACTER SET latin1 NOT NULL,
  `materia` varchar(100) CHARACTER SET latin1 NOT NULL,
  `asunto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tarea` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `evento` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4esoccalendar`
--

CREATE TABLE `4esoccalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4esodcalendar`
--

CREATE TABLE `4esodcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4esoecalendar`
--

CREATE TABLE `4esoecalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `4esofcalendar`
--

CREATE TABLE `4esofcalendar` (
  `id` int(3) NOT NULL,
  `fecha` date NOT NULL,
  `tipoevento` varchar(100) NOT NULL,
  `otro` varchar(100) NOT NULL,
  `materia` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `tarea` varchar(1000) NOT NULL,
  `evento` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias_festivos`
--

CREATE TABLE `dias_festivos` (
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educaplay_act`
--

CREATE TABLE `educaplay_act` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educaplay_act_2`
--

CREATE TABLE `educaplay_act_2` (
  `ID` int(3) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educaplay_act_3`
--

CREATE TABLE `educaplay_act_3` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educaplay_act_4`
--

CREATE TABLE `educaplay_act_4` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_de_curso`
--

CREATE TABLE `inicio_de_curso` (
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `learnclick_act`
--

CREATE TABLE `learnclick_act` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `learnclick_act_2`
--

CREATE TABLE `learnclick_act_2` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `learnclick_act_3`
--

CREATE TABLE `learnclick_act_3` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `learnclick_act_4`
--

CREATE TABLE `learnclick_act_4` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scratch_act`
--

CREATE TABLE `scratch_act` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scratch_act_2`
--

CREATE TABLE `scratch_act_2` (
  `ID` int(3) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scratch_act_3`
--

CREATE TABLE `scratch_act_3` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scratch_act_4`
--

CREATE TABLE `scratch_act_4` (
  `ID` int(11) NOT NULL,
  `actividad` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones_de_navidad`
--

CREATE TABLE `vacaciones_de_navidad` (
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones_de_pascua`
--

CREATE TABLE `vacaciones_de_pascua` (
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `1esoa`
--
ALTER TABLE `1esoa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `1esoacalendar`
--
ALTER TABLE `1esoacalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `1esobcalendar`
--
ALTER TABLE `1esobcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `1esoccalendar`
--
ALTER TABLE `1esoccalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `1esodcalendar`
--
ALTER TABLE `1esodcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `1esoecalendar`
--
ALTER TABLE `1esoecalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `1esofcalendar`
--
ALTER TABLE `1esofcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `1esogcalendar`
--
ALTER TABLE `1esogcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2eso`
--
ALTER TABLE `2eso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2esoacalendar`
--
ALTER TABLE `2esoacalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2esobcalendar`
--
ALTER TABLE `2esobcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2esoccalendar`
--
ALTER TABLE `2esoccalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2esodcalendar`
--
ALTER TABLE `2esodcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2esoecalendar`
--
ALTER TABLE `2esoecalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `2esofcalendar`
--
ALTER TABLE `2esofcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3eso`
--
ALTER TABLE `3eso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3esoacalendar`
--
ALTER TABLE `3esoacalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3esobcalendar`
--
ALTER TABLE `3esobcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3esoccalendar`
--
ALTER TABLE `3esoccalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3esodcalendar`
--
ALTER TABLE `3esodcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3esoecalendar`
--
ALTER TABLE `3esoecalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `3esofcalendar`
--
ALTER TABLE `3esofcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4eso`
--
ALTER TABLE `4eso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4esoacalendar`
--
ALTER TABLE `4esoacalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4esobcalendar`
--
ALTER TABLE `4esobcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4esoccalendar`
--
ALTER TABLE `4esoccalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4esodcalendar`
--
ALTER TABLE `4esodcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4esoecalendar`
--
ALTER TABLE `4esoecalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `4esofcalendar`
--
ALTER TABLE `4esofcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `educaplay_act`
--
ALTER TABLE `educaplay_act`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `educaplay_act_2`
--
ALTER TABLE `educaplay_act_2`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `educaplay_act_3`
--
ALTER TABLE `educaplay_act_3`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `educaplay_act_4`
--
ALTER TABLE `educaplay_act_4`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `learnclick_act`
--
ALTER TABLE `learnclick_act`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `learnclick_act_2`
--
ALTER TABLE `learnclick_act_2`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `learnclick_act_3`
--
ALTER TABLE `learnclick_act_3`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `learnclick_act_4`
--
ALTER TABLE `learnclick_act_4`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `scratch_act`
--
ALTER TABLE `scratch_act`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `scratch_act_2`
--
ALTER TABLE `scratch_act_2`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `scratch_act_3`
--
ALTER TABLE `scratch_act_3`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `scratch_act_4`
--
ALTER TABLE `scratch_act_4`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `1esoa`
--
ALTER TABLE `1esoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `1esoacalendar`
--
ALTER TABLE `1esoacalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `1esobcalendar`
--
ALTER TABLE `1esobcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `1esoccalendar`
--
ALTER TABLE `1esoccalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `1esodcalendar`
--
ALTER TABLE `1esodcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `1esoecalendar`
--
ALTER TABLE `1esoecalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `1esofcalendar`
--
ALTER TABLE `1esofcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `1esogcalendar`
--
ALTER TABLE `1esogcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2eso`
--
ALTER TABLE `2eso`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2esoacalendar`
--
ALTER TABLE `2esoacalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2esobcalendar`
--
ALTER TABLE `2esobcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2esoccalendar`
--
ALTER TABLE `2esoccalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2esodcalendar`
--
ALTER TABLE `2esodcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2esoecalendar`
--
ALTER TABLE `2esoecalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `2esofcalendar`
--
ALTER TABLE `2esofcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3eso`
--
ALTER TABLE `3eso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3esoacalendar`
--
ALTER TABLE `3esoacalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3esobcalendar`
--
ALTER TABLE `3esobcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3esoccalendar`
--
ALTER TABLE `3esoccalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3esodcalendar`
--
ALTER TABLE `3esodcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3esoecalendar`
--
ALTER TABLE `3esoecalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `3esofcalendar`
--
ALTER TABLE `3esofcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4eso`
--
ALTER TABLE `4eso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4esoacalendar`
--
ALTER TABLE `4esoacalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4esobcalendar`
--
ALTER TABLE `4esobcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4esoccalendar`
--
ALTER TABLE `4esoccalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4esodcalendar`
--
ALTER TABLE `4esodcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4esoecalendar`
--
ALTER TABLE `4esoecalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `4esofcalendar`
--
ALTER TABLE `4esofcalendar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `educaplay_act`
--
ALTER TABLE `educaplay_act`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `educaplay_act_2`
--
ALTER TABLE `educaplay_act_2`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `educaplay_act_3`
--
ALTER TABLE `educaplay_act_3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `educaplay_act_4`
--
ALTER TABLE `educaplay_act_4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `learnclick_act`
--
ALTER TABLE `learnclick_act`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `learnclick_act_2`
--
ALTER TABLE `learnclick_act_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `learnclick_act_3`
--
ALTER TABLE `learnclick_act_3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `learnclick_act_4`
--
ALTER TABLE `learnclick_act_4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `scratch_act`
--
ALTER TABLE `scratch_act`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `scratch_act_2`
--
ALTER TABLE `scratch_act_2`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `scratch_act_3`
--
ALTER TABLE `scratch_act_3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `scratch_act_4`
--
ALTER TABLE `scratch_act_4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
