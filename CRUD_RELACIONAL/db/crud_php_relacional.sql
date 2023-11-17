-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 05:51:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

-- Crear la base de datos bd_nike si no existe
CREATE DATABASE IF NOT EXISTS `bd_nike` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `bd_nike`;

-- Eliminar las tablas existentes si es necesario
DROP TABLE IF EXISTS `proveedor`;
DROP TABLE IF EXISTS `producto`;
DROP TABLE IF EXISTS `ventas`;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `proveedor`
--
CREATE TABLE `proveedor` (
  `id_proveedor` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `origen` VARCHAR(50) NOT NULL,
  `transporte` VARCHAR(50) NOT NULL,
  `ubicacion` VARCHAR(50) NOT NULL,
  `categoria_p` VARCHAR(50) NOT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

INSERT INTO `proveedor` (`nombre`, `origen`, `transporte`, `ubicacion`, `categoria_p`, `correo`, `telefono`)
VALUES
  ('Proveedor1', 'Origen1', 'Transporte1', 'Ubicacion1', 'Categoria1', 'correo1@example.com', '123456789'),
  ('Proveedor2', 'Origen2', 'Transporte2', 'Ubicacion2', 'Categoria2', 'correo2@example.com', '987654321');


-- --------------------------------------------------------
-- Estructura de tabla para la tabla `producto`
--
CREATE TABLE `producto` (
  `id_producto` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre_p` VARCHAR(50) NOT NULL,
  `color` VARCHAR(50) NOT NULL,
  `precio` FLOAT(10, 2) NOT NULL,
  `mujer_hombre` VARCHAR(50) NOT NULL,
  `talla` VARCHAR(50) NOT NULL,
  `cantidad` VARCHAR(50) NOT NULL,
  `marca` VARCHAR(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

INSERT INTO `producto` (`nombre_p`, `color`, `precio`, `mujer_hombre`, `talla`, `cantidad`, `marca`)
VALUES
  ('Producto1', 'Rojo', 29.99, 'Mujer', 'M', '50', 'Marca1'),
  ('Producto2', 'Azul', 39.99, 'Hombre', 'L', '30', 'Marca2');


-- --------------------------------------------------------
-- Estructura de tabla para la tabla `ventas`
--
CREATE TABLE `ventas` (
  `id_venta` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `producto` VARCHAR(100) NOT NULL,
  `precio` DECIMAL(10, 2) NOT NULL,
  `cantidad` INT(100) NOT NULL,
  `total` DECIMAL(10, 2) NOT NULL,
  `id_cajero` INT(100) NOT NULL,
  `id_cliente` INT(100) NOT NULL,
  `no_factura` INT(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

INSERT INTO `ventas` (`fecha`, `hora`, `producto`, `precio`, `cantidad`, `total`, `id_cajero`, `id_cliente`, `no_factura`)
VALUES
  ('2023-08-25', '12:30:00', 'Producto1', 29.99, 5, 149.95, 1, 101, 1001),
  ('2023-08-25', '14:45:00', 'Producto2', 39.99, 3, 119.97, 2, 102, 1002);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
