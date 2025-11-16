-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2025 a las 23:21:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(8) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `username` tinytext NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, NULL, 'rreinoso', 'rreinoso1', 'rreinoso@gmail.com'),
(2, NULL, 'scazares', 'sebastian123', 'sebastian@gmail.com'),
(11, 'roberto', 'rreinoso', '1234566', 'hola@gmail.com'),
(12, NULL, 'hola', '$2y$10$Np1cSdIFjenmMFqUVvlr9.d8u.p6Z/imNYp1IMmaPSglmpIcQwvAy', 'mm@gmail.com'),
(13, NULL, 'javier', '$2y$10$RqZegpC9rVEJODVGuUM.UuC5FhEh3Kn1jhRuAdmFUXPBy75HNOioC', 'jasvier@hotmail.com'),
(14, 'Johanna Molina', 'rreinoso12', '$2y$10$zplnrSQ6l4MjloHhhTJ38.RUcieDTthWV5Ou.vgSP/2gVYpHEeGdG', 'rei@gmail.com'),
(15, 'Mariuxi Estrella', 'mari', '$2y$10$pKz8OoxrqfHrAMNodMWsj.hRYdA4cHHdOBnpnUPSmt3hPZDGZBaaa', 'mari@gmail.com'),
(16, 'DAYANA ', 'DAYITO', '$2y$10$P3KbMTYgIoYLTukRNLQuG.dhFgQb/RU9MalSPP0Yng5PzOLH2T.xS', 'dayito@gmail.com'),
(17, 'DAYAN', 'DAYIT', '$2y$10$EOVdmThhHjgb/qKwZ7lKxuxF/k6t0wnGoaYrYZykQlvScIWPLBq26', 'dayit@gmail.com'),
(18, 'daya', 'dayitoo', '$2y$10$lZElrsAXAUxYyacwqJ1IduPxLS8zRJTJ.G19CDxgkg3pPq7Z.Xpxi', 'dayan@gmail.com'),
(19, 'roberto reinoso', 'robrey', '$2y$10$D9w/sAn0Xnd55wsgzhDYH.10xwsO47stTfExqoE7Rj0xdKg9z3nUO', 'rey@gmail.com'),
(20, 'sebastian cazares', 'sebitas', '$2y$10$0yiI0y9zBSTy412FXqH3p.vxYZoH3NfGxsHebkKMQQvPkP65apeq6', 'sebas@gmail.com'),
(21, 'holaa', 'holaa', '$2y$10$4EUUmaZNAaDn1ArnDwhXMeZh1V/KIJmwALUkpZYXcXfxodUGAIGp.', 'hola1@gmail.com'),
(22, 'marce', 'marce', '$2y$10$OAopZV88McBP1iU4BKymqezlQ1KeBGcXAEFWtEAT/8Nhjjxci4hJC', 'mace@gmail.com'),
(23, 'hilda', 'hildis', '$2y$10$e3W2pHuOY9KvYA4ft7w6L.ETN.2W2DMs7io5fG2h40HUa2CHw0FxO', 'hilda@gmail.com'),
(24, 'francisco galindo', 'francis', '$2y$10$HuIT6tEAfzxic/Mx3T040uT9i4b1/NqeB394Sc0AlFkqGOc0x2fd6', 'francias@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
