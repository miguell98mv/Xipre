-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2020 a las 01:16:11
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursos`
--
CREATE DATABASE IF NOT EXISTS `cursos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `cursos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cmas`
--

CREATE TABLE `cmas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cmas`
--

INSERT INTO `cmas` (`id`, `nombre`) VALUES
(1, 'Aprende a Programar desde cero en C/C++ [Parte 1] (Primer Programa)'),
(2, 'Aprende a Programar desde cero en C/C++ [Parte 2] (Variables)'),
(3, 'Aprende a Programar desde cero en C/C++ [Parte 3] (Variables en memoria)'),
(4, 'Aprende a Programar desde cero en C/C++ [Parte 4] (Arreglos)'),
(5, 'Aprende a Programar desde cero en C/C++ [Parte 5] (Ciclos)'),
(6, 'Aprende a Programar desde cero en C/C++ [Parte 6] (Funciones)'),
(7, 'Aprende a Programar desde cero en C/C++ [Parte 7] (Switch - Case)'),
(8, 'Aprende a Programar desde cero en C/C++ [Parte 8] (Ejercicio Menú)'),
(9, 'Aprende a Programar desde cero en C/C++ [Parte 9] (Parametros y Return)'),
(10, 'Aprende a Programar desde cero en C/C++ [Parte 10] (Llenado de arreglos)'),
(11, 'Aprende a Programar desde cero en C/C++ [Parte 11] (matrices)'),
(12, 'Aprende a Programar desde cero en C/C++ [Parte 12] (Ciclos Anidados)'),
(13, 'Aprende a Programar desde cero en C/C++ [Parte 13] (Recursividad)'),
(14, 'Aprende a Programar desde cero en C/C++ [Parte 14] (Operadores Logicos)'),
(15, 'Aprende a Programar desde cero en C/C++ [Parte 15] (Retorno de Valor)'),
(16, 'Aprende a Programar desde cero en C/C++ [Parte 16] (Repaso)'),
(17, 'Aprende a Programar desde cero en C/C++ [Parte 17] (Apuntadores)'),
(18, 'Aprende a Programar desde cero en C/C++ [Parte 18] (If - else)'),
(19, 'Aprende a Programar desde cero en C/C++ [Parte 19] (Estructuras - Struct)'),
(20, 'Aprende a Programar desde cero en C/C++ [Parte 20] (Modulo o Residuo)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `curso` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `id` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`curso`, `id`, `email`, `nombre`, `apellido`, `comentario`, `fecha`) VALUES
('php', 1, 'miguel98@gmail.com', 'miguel', 'valero', 'Q buen video..', '0000-00-00 00:00:00'),
('php', 1, 'maria@gmail.com', 'maria', 'abarca', 'Gracias q buen video', '0000-00-00 00:00:00'),
('php', 1, 'yeison@gmail.com', 'yeison', 'valero', 'Que buen video', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csharp`
--

CREATE TABLE `csharp` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `csharp`
--

INSERT INTO `csharp` (`id`, `nombre`) VALUES
(1, '1. C# desde cero con Visual Studio (IDE y Hola mundo)'),
(2, '2. C# desde cero con Visual Studio  (Estructura básica)'),
(3, '3. C# desde cero con Visual Studio  (Variables)'),
(4, '4. C# desde cero con Visual Studio (Mostrar variables en consola)'),
(5, '5. C# desde cero con Visual Studio  (Operadores Logicos)'),
(6, '6. C# desde cero con Visual Studio (Operadores Aritmeticos)'),
(7, '7. C# desde cero con Visual Studio  (Leer de Consola)'),
(8, '8. C# desde cero con Visual Studio  (Sentencia If)'),
(9, '9. C# desde cero con Visual Studio  (Sentencia If - else)'),
(10, '10. C# desde cero con Visual Studio  (Expresiones Logicas)'),
(11, '11. C# desde cero con Visual Studio  (Switch - Case)'),
(12, '12. C# desde cero con Visual Studio  (Ciclos - While)'),
(13, '13. C# desde cero con Visual Studio (Ciclos - Do - While)'),
(14, '14. C# desde cero con Visual Studio  (Ciclos -For)'),
(15, '15. C# desde cero con Visual Studio  (Funciones que ejecutan codigo)'),
(16, '16. C# desde cero con Visual Studio  (Funciones que devuelven un valor)'),
(17, '17. C# desde cero con Visual Studio  (Funciones que reciben valores)'),
(18, '18. C# desde cero con Visual Studio  (Funciones que reciben y devuelven valores)'),
(19, '19. C# desde cero con Visual Studio  Arreglos'),
(20, '20. C# desde cero con Visual Studio Arreglos con ciclos FOR)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `css`
--

CREATE TABLE `css` (
  `id` int(11) NOT NULL,
  `nombre` varchar(999) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `css`
--

INSERT INTO `css` (`id`, `nombre`) VALUES
(1, '1. CSS profesional -Presentacion[1]'),
(2, '2. CSS profesional -Sintaxis y formas de aplicar CSS'),
(3, '3. CSS profesional - Normalizar estilos y desarrollo ordenado'),
(4, '4. CSS profesional - Importando hojas de estilo'),
(5, '5. CSS profesional - Selector de tipo o etiqueta'),
(6, '6. CSS profesional - Selector de id'),
(7, '7. CSS profesional - Selector de clase'),
(8, '8. CSS profesional - Selectores compuestos'),
(9, '9. CSS profesional - Selector de atributo'),
(10, '10. CSS profesional - Selector de hermanos (Adyacente)'),
(11, '11. CSS profesional -  Especificidad'),
(12, '12. CSS profesional -  Variables'),
(13, '13. CSS profesional - Unidades de medida relativas'),
(14, '14. CSS profesional - Unidades de medida absolutas'),
(15, '15. CSS profesional - Modelo de caja (Margin y Padding)'),
(16, '16. CSS profesional - Modelo de caja (Colapsado de margenes)'),
(17, '17. CSS profesional - Modelo de caja (Borde)'),
(18, '18. CSS profesional - Modelo de caja (Width y Height)'),
(19, '19. CSS profesional - Modelo de caja (Tamaño de cajas)'),
(20, '20. CSS profesional - Esquinas redondeadas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `html`
--

INSERT INTO `html` (`id`, `nombre`) VALUES
(1, 'Programación Web desde Cero [Parte 1] (Primer Página Web)'),
(2, 'Programación Web desde Cero [Parte 2] (Estructura básica HTML)'),
(3, 'Programación Web desde Cero [Parte 3] (Estructura Cabecera \"head\")'),
(4, 'Programación Web desde Cero [Parte 4] (Etiquetas básicas)'),
(5, 'Programación Web desde Cero [Parte 5] (Listas)'),
(6, 'Programación Web desde Cero [Parte 6] (Tablas)'),
(7, 'Programación Web desde Cero [Parte 7] (Div - Contenedores)'),
(8, 'Programación Web desde Cero [Parte 8] (Enlaces)'),
(9, 'Programación Web desde Cero [Parte 9] (Imagenes)'),
(10, 'Programación Web desde Cero [Parte 10] (Formularios)'),
(11, 'Programación Web desde Cero [Parte 11] (Primer pagina WEB)'),
(12, 'Programación Web desde Cero [Parte 12] (Símbolos HTML)'),
(13, 'Programación Web desde Cero [Parte 13] (Introducción a CSS)'),
(14, 'Programación Web desde Cero [Parte 14] (Sintaxis Básica de CSS)'),
(15, 'Programación Web desde Cero [Parte 15] (Identificadores y Clases CSS)'),
(16, 'Programación Web desde Cero [Parte 16] (Estilos CSS de Texto)'),
(17, 'Programación Web desde Cero [Parte 17] (Estilos CSS Parrafos, Fondos y Cajas)'),
(18, 'Programación Web desde Cero [Parte 18] (Estilos CSS Pseudoclases)'),
(19, 'Programación Web desde Cero [Parte 19] (Posiciones)'),
(20, 'Programación Web desde Cero [Parte 20] (Nuestra WEB con Estilos CSS)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `javascript`
--

CREATE TABLE `javascript` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `javascript`
--

INSERT INTO `javascript` (`id`, `nombre`) VALUES
(1, '1. Curso JavaScript desde 0. Presentación. Vídeo 1'),
(2, '2. Curso JavaScript desde 0. Introducción. Vídeo 2'),
(3, '3. Curso JavaScript desde 0. Sintaxis Básica I. Ubicación del código. Vídeo 3'),
(4, '4. Curso JavaScript desde 0. Sintaxis Básica II.  Estructuras Básicas. Vídeo 4'),
(5, '5. Curso JavaScript desde 0. Sintaxis Básica III. Operadores Básicos. Vídeo 5'),
(6, '6. Curso JavaScript desde 0. Sintaxis Básica IV. Operadores y prompt. Vídeo 6'),
(7, '7. Curso JavaScript desde 0. Sintaxis Básica V  Arrays, Matrices, Arreglos. Vídeo 7'),
(8, '8. Curso JavaScript desde 0. Sintaxis Básica V. Arrays, Matrices, Arreglos II. Vídeo 8'),
(9, '9. Curso JavaScript desde 0. POO I. Vídeo 9'),
(10, '10. Curso JavaScript desde 0. POO II. Vídeo 10'),
(11, '11. Curso JavaScript desde 0. Control flujo  Condicional If I. Vídeo 11'),
(12, '12. Curso JavaScript desde 0. Control flujo. Condicional If II. Vídeo 12'),
(13, '13. Curso JavaScript desde 0. Control flujo. Condicional If III. Vídeo 13'),
(14, '14. Curso JavaScript desde 0. Control flujo  Condicional If IV. Vídeo 14'),
(15, '15. Curso JavaScript desde 0. Control flujo  Bucle While I. Vídeo 15'),
(16, '16. Curso JavaScript desde 0. Control flujo  Bucle While II. Vídeo 16'),
(17, '17. Curso JavaScript desde 0. Control flujo. Bucle Do  While I. Vídeo 17'),
(18, '18. Curso JavaScript desde 0. Control flujo  Bucle Do  While II. Vídeo 18'),
(19, '19. Curso JavaScript desde 0. Control flujo Bucle For I. Vídeo 19'),
(20, '20. Curso JavaScript desde 0. Control flujo  Bucle For II. Vídeo 20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `php`
--

CREATE TABLE `php` (
  `id` int(11) NOT NULL,
  `nombre` varchar(999) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `php`
--

INSERT INTO `php` (`id`, `nombre`) VALUES
(1, '01 - PHP desde cero - Presentación'),
(2, '02 - PHP desde cero - Configurando el entorno de desarrollo'),
(3, '03 - PHP desde cero - Primeros pasos'),
(4, '04 - PHP desde cero - variables'),
(5, '05 - PHP desde cero - arrays'),
(6, '06 - PHP desde cero - variables predefinidas'),
(7, '07 - PHP desde cero - constantes'),
(8, '08 - PHP desde cero - constantes predefinidas'),
(9, '09 - PHP desde cero - operadores aritméticos'),
(10, '10 - PHP desde cero - Operador de asignacion'),
(11, '11 - PHP desde cero - Operadores de incremento y decremento'),
(12, '12 - PHP desde cero - Operadores de comparación'),
(13, '13 - PHP desde cero - Operadores lógicos'),
(14, '14 - PHP desde cero - Condicionales simples'),
(15, '15 - PHP desde cero - Condicionales dobles'),
(16, '16 - PHP desde cero - Condicionales multiples'),
(17, '17 - PHP desde cero - Sintaxis alternativa de las estructuras condicionales'),
(18, '18 - PHP desde cero - Estructura switch'),
(19, '19 - PHP desde cero - Ciclo While'),
(20, '20 - PHP desde cero - Ciclo Do while');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `email` varchar(999) COLLATE utf8_spanish2_ci NOT NULL,
  `image` varchar(999) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`email`, `image`, `password`, `nombre`, `apellido`) VALUES
('maria@gmail.com', 'SAM_0545.JPG', '$2y$10$FUMJHWnB.YDp.O7HK26b0OZk3ePcOXEK2BuH0pIZ0g2NoIHffklBO', 'maria', 'abarca'),
('miguel98@gmail.com', '35628274_2165566510386994_794438275380019200_n.jpg', '$2y$10$5SoZK/CA8vtaofR8Slm.zuzmJmL0qwhklMs.o/sMCuhFTdJub52gy', 'miguel', 'valero'),
('yeison@gmail.com', '35628274_2165566510386994_794438275380019200_n.jpg', '$2y$10$L4ncnqPp7479LLmL6XPjleg9ZFLCNxvjEJxY7ol6Cxe/deIIWmXK6', 'yeison', 'valero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cmas`
--
ALTER TABLE `cmas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `csharp`
--
ALTER TABLE `csharp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `javascript`
--
ALTER TABLE `javascript`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cmas`
--
ALTER TABLE `cmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `csharp`
--
ALTER TABLE `csharp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `css`
--
ALTER TABLE `css`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `javascript`
--
ALTER TABLE `javascript`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `php`
--
ALTER TABLE `php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
