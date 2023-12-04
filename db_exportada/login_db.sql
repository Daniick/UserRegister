-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 05:39:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(500) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `bio` varchar(600) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `contrasena`, `photo`, `name`, `bio`, `phone`) VALUES
(27, 'david.ortega.pajaro1@gmail.com', '$2y$10$mUveLndJ5BJhLA8HLU0ec.bdJEgiPnOIg1lj.LerjL28wcEMhCuN.', '../upload/profile_27.jpg', 'David Andrés', 'hola', '3013871040'),
(28, 'a@gmail.com', '$2y$10$rfTp4Oo83TtvHvOVTwq8hu9HsXIboYkX/INLh26Do7NmgIq6cqJg.', '../upload/profile_28.jpeg', '123', '123', '123'),
(29, 'rotcarrillo_8@hotmail.com', '$2y$10$whcwEnEvrotuz20hE9thI.CLUEK4jJPzrpHUOen01huj6G.BmtycG', '../upload/profile_29.png', 'Spanish', 'actualizacion 111', '3013871040'),
(30, 'ass@gmail.com', '$2y$10$v/PnRQZuLNd1cwm2NLQjLuBwcTA/vcLIbxpENtRpc.rUJy6w.xxSW', '', '', '', ''),
(35, 'fixter234@gmail.com', '$2y$10$Qa6/Yotsg/njsGWxkhjpHus2o.eCMuSpA/fKEsH38kP41qXlSJIkK', '', '', '', ''),
(36, 'admin@admin', '$2y$10$yugfVH1Tbt3HuCUf0v8EyOXpCR2bugkqBC2E5wEJcq5ZpDZJcnAMG', '../upload/profile_36.jpg', 'admin', 'soy un buen ciudadano', '12345'),
(37, 'test@test', '$2y$10$K3DM0C7nSIaSC39EUZtsf.EspqVsIH/WzdteevQgfv/oM7cv7ToHG', '../upload/profile_37.jpg', 'test', 'hola perro', '3013871040');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
