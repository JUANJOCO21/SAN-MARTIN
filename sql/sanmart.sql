-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 00:11:33
-- Versión del servidor: 8.4.0
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";


-- Usar la base de datos correcta

CREATE DATABASE IF NOT EXISTS SubestacionSanmartin;

USE SubestacionSanmartin;


SET NAMES utf8mb4;


-- Eliminar tablas si existen

DROP TABLE IF EXISTS `ventas`;

DROP TABLE IF EXISTS `compras`;

DROP TABLE IF EXISTS `proveedor`;

DROP TABLE IF EXISTS `productos`;

DROP TABLE IF EXISTS `cliente`;

DROP TABLE IF EXISTS `usuario`;


-- Tabla usuario

CREATE TABLE `usuario` (

  `ID` int NOT NULL AUTO_INCREMENT,

  `Nombre` varchar(100) DEFAULT NULL,

  `Apellido` varchar(100) DEFAULT NULL,

  `Email` varchar(100) DEFAULT NULL,

  `Contrasena` varchar(100) DEFAULT NULL,

  `Rol` varchar(50) DEFAULT NULL,

  PRIMARY KEY (`ID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Datos de usuario

INSERT INTO `usuario` (`Nombre`, `Apellido`, `Email`, `Contrasena`, `Rol`) VALUES

('Admin', 'Sistema', 'admin@sistema.com', 'admin123', 'Administrador'),

('Vendedor', 'Principal', 'ventas@sistema.com', 'ventas123', 'Vendedor'),

('Juan José', 'Cordoba', 'jjcordoba@sistema.com', 'jjcordoba123', 'Vendedor'),

('Emir', 'Muñoz', 'emir@sistema.com', 'emir123', 'Supervisor'),

('Orlando', 'Pajajoy', 'orlando@sistema.com', 'orlando123', 'Vendedor'),

('Fabian', 'Alvear', 'fabian@sistema.com', 'fabian123', 'Vendedor');


-- Tabla cliente

CREATE TABLE `cliente` (

  `ID` int NOT NULL AUTO_INCREMENT,

  `Nombre` varchar(100) DEFAULT NULL,

  `Apellido` varchar(100) DEFAULT NULL,

  `Correo` varchar(100) DEFAULT NULL,

  `Direccion` varchar(255) DEFAULT NULL,

  `Telefono` varchar(20) DEFAULT NULL,

  `TipoCliente` varchar(50) DEFAULT NULL,

  `UsuarioID` int DEFAULT NULL,

  PRIMARY KEY (`ID`),

  FOREIGN KEY (`UsuarioID`) REFERENCES `usuario` (`ID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Datos de cliente

INSERT INTO `cliente` (`Nombre`, `Apellido`, `Correo`, `Direccion`, `Telefono`, `TipoCliente`, `UsuarioID`) VALUES

('Industrias Eléctricas', 'S.A.', 'contacto@industriasea.com', 'Calle Industrial 123', '555-0101', 'Mayorista', 1),

('Constructora', 'Voltios', 'info@voltios.com', 'Carrera 789', '555-0103', 'Empresa', 1),

('Instituto', 'Tecnológico', 'compras@instituto.edu', 'Av. Educación 456', '555-0104', 'Empresa', 1);


-- Tabla productos

CREATE TABLE `productos` (

  `ID` int NOT NULL AUTO_INCREMENT,

  `Nombre` varchar(100) DEFAULT NULL,

  `Descripcion` varchar(255) DEFAULT NULL,

  `Precio` decimal(10,2) DEFAULT NULL,

  `Stock` int DEFAULT NULL,

  `Categoria` varchar(50) DEFAULT NULL,

  `Especificaciones` text DEFAULT NULL,

  `GarantiaMeses` int DEFAULT NULL,

  `UsuarioID` int DEFAULT NULL,

  PRIMARY KEY (`ID`),

  FOREIGN KEY (`UsuarioID`) REFERENCES `usuario` (`ID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Datos de productos

INSERT INTO `productos` (`Nombre`, `Descripcion`, `Precio`, `Stock`, `Categoria`, `Especificaciones`, `GarantiaMeses`, `UsuarioID`) VALUES

('Transformador 100kVA', 'Transformador trifásico de distribución', 500000.00, 5, 'Transformadores', '100kVA, 13200/220V, Refrigeración ONAN', 24, 1),

('Tablero de distribución', 'Tablero trifásico 24 circuitos', 150000.00, 10, 'Tableros', '24 circuitos, 225A, IP54', 12, 1),

('Cable THHN 8 AWG', 'Cable unipolar THHN', 30000.00, 1000, 'Cables', '8 AWG, 600V, Negro', 6, 1),

('Breaker 3x100A', 'Interruptor termomagnético', 75000.00, 20, 'Protecciones', '3x100A, 10kA', 12, 1),

('Contactor 50A', 'Contactor tripolar', 125000.00, 15, 'Control', '50A, 220V, AC3', 12, 1),

('PLC Básico', 'Controlador Lógico Programable', 850000.00, 5, 'Automatización', '12 DI/8 DO, Ethernet, 24VDC', 18, 1);


-- Tabla proveedor

CREATE TABLE `proveedor` (

  `ID` int NOT NULL AUTO_INCREMENT,

  `Nombre` varchar(100) DEFAULT NULL,

  `Direccion` varchar(255) DEFAULT NULL,

  `Telefono` varchar(20) DEFAULT NULL,

  `TipoProducto` varchar(100) DEFAULT NULL,

  `TiempoEntrega` int DEFAULT NULL,

  `UsuarioID` int DEFAULT NULL,

  PRIMARY KEY (`ID`),

  FOREIGN KEY (`UsuarioID`) REFERENCES `usuario` (`ID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Datos de proveedor

INSERT INTO `proveedor` (`Nombre`, `Direccion`, `Telefono`, `TipoProducto`, `TiempoEntrega`, `UsuarioID`) VALUES

('Transformadores del Norte', 'Zona Industrial 1', '555-0201', 'Transformadores', 15, 1),

('Cables Unidos', 'Sector Industrial 2', '555-0202', 'Cables y Conductores', 5, 1),

('Equipos Eléctricos SA', 'Parque Industrial 3', '555-0203', 'Tableros y Protecciones', 10, 1),

('Automation Tech', 'Zona Franca 1', '555-0204', 'Equipos de Automatización', 20, 1);


-- Tabla compras

CREATE TABLE `compras` (

  `ID` int NOT NULL AUTO_INCREMENT,

  `Fecha` date DEFAULT NULL,

  `Total` decimal(10,2) DEFAULT NULL,

  `Cantidad` int DEFAULT NULL,

  `Precio` decimal(10,2) DEFAULT NULL,

  `ProductoID` int DEFAULT NULL,

  `UsuarioID` int DEFAULT NULL,

  `ProveedorID` int DEFAULT NULL,

  `GarantiaFecha` date DEFAULT NULL,

  PRIMARY KEY (`ID`),

  FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ID`),

  FOREIGN KEY (`UsuarioID`) REFERENCES `usuario` (`ID`),

  FOREIGN KEY (`ProveedorID`) REFERENCES `proveedor` (`ID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Datos de compras

INSERT INTO `compras` (`Fecha`, `Total`, `Cantidad`, `Precio`, `ProductoID`, `UsuarioID`, `ProveedorID`, `GarantiaFecha`) VALUES

('2024-09-03', 5000000.00, 10, 500000.00, 1, 1, 1, '2025-09-03'),

('2024-09-20', 3000000.00, 20, 150000.00, 2, 1, 3, '2025-09-20'),

('2024-09-13', 1500000.00, 50, 30000.00, 3, 1, 2, '2025-03-13'),

('2024-09-25', 2500000.00, 20, 125000.00, 5, 1, 3, '2025-09-25');


-- Tabla ventas

CREATE TABLE `ventas` (

  `ID` int NOT NULL AUTO_INCREMENT,

  `Fecha` date DEFAULT NULL,

  `Total` decimal(10,2) DEFAULT NULL,

  `Cantidad` int DEFAULT NULL,

  `Precio` decimal(10,2) DEFAULT NULL,

  `ProductoID` int DEFAULT NULL,

  `UsuarioID` int DEFAULT NULL,

  `ClienteID` int DEFAULT NULL,

  `GarantiaVencimiento` date DEFAULT NULL,

  `MetodoPago` varchar(50) DEFAULT NULL,

  PRIMARY KEY (`ID`),

  FOREIGN KEY (`ProductoID`) REFERENCES `productos` (`ID`),

  FOREIGN KEY (`UsuarioID`) REFERENCES `usuario` (`ID`),

  FOREIGN KEY (`ClienteID`) REFERENCES `cliente` (`ID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Datos de ventas

INSERT INTO `ventas` (`Fecha`, `Total`, `Cantidad`, `Precio`, `ProductoID`, `UsuarioID`, `ClienteID`, `GarantiaVencimiento`, `MetodoPago`) VALUES

('2024-09-18', 1500000.00, 3, 500000.00, 1, 3, 1, '2026-09-18', 'Transferencia'),

('2024-09-10', 300000.00, 2, 150000.00, 2, 4, 2, '2025-09-10', 'Efectivo'),

('2024-09-25', 850000.00, 1, 850000.00, 6, 5, 3, '2026-03-25', 'Tarjeta de Crédito');


COMMIT;