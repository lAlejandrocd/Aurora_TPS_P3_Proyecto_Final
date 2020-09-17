-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2020 a las 05:10:28
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sispow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `codigo_admin` int(20) NOT NULL,
  `key_admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`codigo_admin`, `key_admin`) VALUES
(123, 66666),
(345, 77777);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `codigo_carrito` int(20) NOT NULL,
  `cantidad` double NOT NULL,
  `documento` int(20) NOT NULL,
  `cod_producto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `codigo_categoria` int(20) NOT NULL,
  `nombre_categoria` varchar(30) NOT NULL,
  `descripcion_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`codigo_categoria`, `nombre_categoria`, `descripcion_categoria`) VALUES
(1001, 'novedad1', 'Se asignara un espacio para visualizar las categorias'),
(1002, 'novedad2', 'en este apartado se deposita informaciÃ³n con respecto a las caracteristicas del producto'),
(1003, 'novedad3', 'Se asignara un espacio para visualizar las categorias y demas'),
(1101, 'Tarjetas', 'Tarjetas Graficas, Video, Sonido, Board entre otros.'),
(1102, 'Discos Duros', 'Capacidad de almacenamiento de el equipo'),
(1103, 'Chasis', 'Chasis para personalizar tu equipo'),
(1104, 'Audio', 'Todo tipo de dispositivos de audio para tu equipo'),
(1105, 'Procesador', 'Procesadores de toda gama para tu equipo'),
(1106, 'Accesorios', 'Todo tipo de elementos de personalización para tu equipo, entre ellos Mouse, Teclado, Pantalla, Audi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle` int(20) NOT NULL,
  `codigo_factura` int(20) NOT NULL,
  `codigo_producto` int(20) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `precio` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_detalle`, `codigo_factura`, `codigo_producto`, `cantidad`, `precio`) VALUES
(54, 76, 17, 1, '353000.00'),
(55, 76, 12, 1, '119900.00'),
(56, 77, 16, 1, '330000.00'),
(57, 77, 3, 1, '965000.00'),
(58, 78, 1, 1, '518999.00'),
(59, 79, 21, 1, '401000.00'),
(60, 80, 15, 1, '495000.00'),
(61, 81, 2, 1, '874000.00'),
(62, 82, 2, 1, '874000.00'),
(63, 83, 31, 1, '538000.00'),
(64, 83, 6, 1, '836000.00'),
(65, 84, 3, 1, '965000.00'),
(66, 84, 2, 1, '874000.00'),
(67, 85, 47, 1, '260000.00'),
(68, 86, 10, 2, '4725000.00'),
(69, 87, 10, 2, '4725000.00'),
(70, 88, 10, 2, '4725000.00'),
(71, 89, 10, 2, '4725000.00'),
(72, 90, 43, 1, '68000.00'),
(73, 91, 11, 1, '119900.00'),
(74, 91, 6, 1, '836000.00'),
(75, 92, 5, 1, '940000.00'),
(76, 92, 26, 1, '535000.00'),
(77, 93, 2, 1, '874000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `codigo_envio` int(20) NOT NULL,
  `documento_identidad` int(20) NOT NULL,
  `codigo_factura` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`codigo_envio`, `documento_identidad`, `codigo_factura`) VALUES
(45, 1234567890, 76),
(46, 1234567890, 77),
(47, 1234567890, 78),
(48, 1234567890, 79),
(49, 1234567890, 80),
(52, 1107528994, 83),
(53, 1107528994, 84),
(54, 1107528994, 85),
(58, 1107528994, 89),
(59, 1107528994, 90),
(60, 1107528994, 91),
(61, 1107528994, 92),
(62, 1107528994, 93);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `codigo_factura` int(20) NOT NULL,
  `id_usuario` int(20) NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`codigo_factura`, `id_usuario`, `total`, `fecha`) VALUES
(76, 1234567890, '472900.00', '2020-07-10'),
(77, 1234567890, '1295000.00', '2020-07-10'),
(78, 1234567890, '518999.00', '2020-07-10'),
(79, 1234567890, '401000.00', '2020-07-10'),
(80, 1234567890, '495000.00', '2020-07-10'),
(83, 1107528994, '836000.00', '2020-07-21'),
(84, 1107528994, '1839000.00', '2020-07-21'),
(85, 1107528994, '260000.00', '2020-07-21'),
(86, 1107528994, '9450000.00', '2020-07-21'),
(87, 1107528994, '9450000.00', '2020-07-21'),
(88, 1107528994, '9450000.00', '2020-07-21'),
(89, 1107528994, '9450000.00', '2020-07-21'),
(90, 1107528994, '68000.00', '2020-08-02'),
(91, 1107528994, '955900.00', '2020-08-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` int(20) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `cantidad_producto` int(10) NOT NULL,
  `precio_producto` decimal(20,0) NOT NULL,
  `descripcion_producto` varchar(171) NOT NULL,
  `estado_producto` varchar(20) NOT NULL,
  `imagen_producto` varchar(100) NOT NULL,
  `codigo_codigo_categoria` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre_producto`, `cantidad_producto`, `precio_producto`, `descripcion_producto`, `estado_producto`, `imagen_producto`, `codigo_codigo_categoria`) VALUES
(1, 'Asus GeForce GT 1030 2GB OC Phoenix PH-GT1030-O2G Tarjeta de Video', 1, '518999', '- GDDR5 de 2 GB y 64 bits- Reloj de nÃºcleo 1278 MHz (modo OC)- 1252 MHz (modo de juego)- Boost Clock 1531 MHz (modo OC)- 1506 MHz (modo de juego)- 1 x DVI-D 1 x', 'disponible', 'img/1/Asus GeForce GT 1030 2GB OC Phoenix PH-GT1030-O2G Tarjeta de Video.jpg', 1001),
(2, 'Asus GeForce GTX 1650 SUPER  PHOENIX OC 4GB  PH-GTX1650S-O4G Tarjeta de Video', -1, '874000', '\r\n- GDDR6 de 4 GB y 128 bits\r\n- Core Clock 1530 MHz\r\n- Boost Clock OC Mode: 1770 MHz\r\n- Modo de juego (predeterminado): 1740 MHz\r\n- 1 x DVI-D 1 x HDMI 2.0b 1 x DisplayPort', 'disponible', 'img/2/Asus GeForce GTX 1650 SUPER  PHOENIX OC 4GB  PH-GTX1650S-O4G Tarjeta de Video.jpg', 1101),
(3, 'EVGA GTX 1650 SUPER SC ULTRA Gaming 4GB 04G-P4-1357-KR Tarjeta de Video', 4, '965000', '- Reloj real Boost: 1755 MHz; Detalle de la memoria: 4096MB GDDR6\r\n- La nueva arquitectura NVIDIA Turing para brindarle nuevos niveles increÃ­bles de realismo, velocidad, ', 'disponible', 'img/3/EVGA GTX 1650 SUPER SC ULTRA Gaming 4GB 04G-P4-1357-KR Tarjeta de Video.jpg', 1101),
(4, 'EVGA GTX 1650 4GB SUPER XC BLACK GAMING 04G-P4-1251-KR Tarjeta de Video', 2, '895000', '- GDDR6 de 4 GB y 128 bits\r\n- Boost Clock 1725 MHz\r\n- 1 x HDMI 1 x DisplayPort \r\n- 1280 nÃºcleos CUDA\r\n- PCI Express 3.0 x16', 'disponible', 'img/4/EVGA GTX 1650 SUPER SC ULTRA Gaming 4GB 04G-P4-1357-KR Tarjeta de Video.jpg', 1101),
(5, 'MSI GeForce GTX 1650 SUPER VENTUS XS OC 4GB Tarjeta de Video', 5, '940000', '- GDDR6 de 4 GB y 128 bits\r\n- Boost Clock 1740 MHz\r\n- 1 x DL-DVI-D 1 x HDMI 2.0b 1 x DisplayPort 1.4\r\n- 1280 nÃºcleos CUDA\r\n- PCI Express 3.0 x16', 'disponible', 'img/5/MSI GeForce GTX 1650 SUPER VENTUS XS OC 4GB Tarjeta de Video.jpg', 1101),
(6, 'PNY Quadro P620 2Gb V2 VCQP620V2-BLK Tarjeta de Video', 0, '836000', '- Quadro P400\r\n\r\n- GDDR5  2GB\r\n\r\n- PCI Express 3.0 x16\r\n\r\n- 3 x DisplayPort 1.4', 'disponible', 'img/6/PNY Quadro P620 2Gb V2 VCQP620V2-BLK Tarjeta de Video.jpg', 1101),
(7, 'PNY Quadro P2200 5Gb GDDR5X 160 Bit VCQP2200-BLK Tarjeta de Video', 3, '2480999', '\r\n- NÃºcleos CUDA  1280\r\n\r\n- 5 GB de GDDR5X\r\n\r\n- Hasta 200 GB / s\r\n\r\n- DP 1.4 (4)\r\n\r\n- PCI Express 3.0 x16\r\n\r\n- Hasta 3.8 TFLOPs\r\n\r\n- 4.40 \"de alto x 7.90\" de largo, ranur', 'disponible', 'img/7/PNY Quadro P2200 5Gb GDDR5X 160 Bit VCQP2200-BLK Tarjeta de Video.jpg', 1101),
(8, 'Gigabyte Radeon RX 5700 OC 8GB Windforce RGB GV-R57GAMING OC-8GD Tarjeta de Video', 3, '1911000', '- GDDR6 6 GB\r\n\r\n- Reloj de refuerzo: hasta 1750 MHz (la tarjeta de referencia es 1725 MHz)\r\n\r\n- Reloj base: 1565 MHz (la tarjeta de referencia es 1465 MHz)\r\n\r\n- Reloj de j', 'disponible', 'img/8/Gigabyte Radeon RX 5700 OC 8GB Windforce RGB GV-R57GAMING OC-8GD Tarjeta de Video.jpg', 1101),
(9, 'ZOTAC GAMING GeForce GTX 1650 OC 4GB GDDR6', 3, '849000', 'GPU GeForceÂ® GTX 1650\r\nCUDA cores 896\r\nVideo Memory 4GB GDDR6\r\nMemory Bus 128-bit\r\nEngine Clock Boost: 1620 MHz\r\nMemory Clock 12 Gbps\r\nPCI Express 3.0\r\nDisplay Outputs Di', 'disponible', 'img/9/9ZOTAC GAMING GeForce GTX 1650 OC 4GB GDDR6.jpg', 1101),
(10, 'PNY Quadro P4000 NVIDIA Quadro 8Gb VCQP4000-BLK Tarjeta de Video', -3, '4725000', '- GDDR5  8GB\r\n\r\n- PCI Express 3.0 x16\r\n\r\n- 4 x DisplayPort 1.4\r\n\r\n- NÃºcleos CUDA1792\r\n', 'disponible', 'img/10/PNY Quadro P4000 NVIDIA Quadro 8Gb VCQP4000-BLK Tarjeta de Video.jpg', 1101),
(11, 'Arctic P604 Wireless Blanco Auriculares', 15, '119900', 'El diseÃ±o ultra ligero con no mÃ¡s de 142 gramos hace que los auriculares Bluetooth sean cÃ³modos durante todo el dÃ­a. Gracias a las almohadillas que cierran suavemente,', 'disponible', 'img/11/Arctic P604 Wireless Blanco Auriculares.jpg', 1104),
(12, 'Arctic P604 Wireless Morado Auriculares', 4, '119900', 'El P604 Wireless es perfecto para escuchar tu mÃºsica favorita donde sea que estÃ©s. En el tren, mientras estÃ¡ de compras o de camino al trabajo, con el P604 Wireless pue', 'disponible', 'img/12/Arctic P604 Wireless Morado Auriculares.jpg', 1104),
(13, 'Arctic P604 Wireless Negro Auriculares', 18, '119900', 'El P604 Wireless es perfecto para escuchar tu mÃºsica favorita donde sea que estÃ©s. En el tren, mientras estÃ¡ de compras o de camino al trabajo, con el P604 Wireless pue', 'disponible', 'img/13/Arctic P604 Wireless Negro Auriculares.jpg', 1104),
(15, 'Logitech H820E Usb Mono Aural Inalambrica 981-000512 Auriculares', 4, '495000', 'Los auriculares Logitech H820e permanecen conectados a menos de 100 metros de su escritorio, con hasta 10 horas de tiempo de conversaciÃ³n de banda ancha. La conectividad ', 'disponible', 'img/15/Logitech H820E Usb Mono Aural Inalambrica 981-000512 Auriculares.jpg', 1104),
(16, 'Antec P6 LED Blanco Ventana Lateral Matx Negra Torre', 24, '330000', '- Minimalismo elegante: diseÃ±o limpio y moderno con un proyector de logotipo LED incorporado\r\n- Interior que ahorra espacio: 4 unidades SSD de 2.5 \"y 2 bahÃ­as extraÃ­ble', 'disponible', 'img/16/Antec P6 LED Blanco Ventana Lateral Matx Negra Torre.jpg', 1103),
(17, 'Antec VSK10 Value Solution Matx Negra Torre', 1, '353000', '- Soporte de placa base: hasta Micro-ATX- Ventilador regular de 1 X 120 mm en la parte trasera incluido- Listo para radiadores de hasta 280 mm delante y 120 mm detrÃ¡s', 'disponible', 'img/17/Antec VSK10 Value Solution Matx Negra Torre.jpg', 1002),
(18, 'Corsair SPEC 05 + Fuente 550W 80 PLUS WHITE Ventana Lateral Atx CC-9011151-MX Torre', 6, '445001', '-Torre Mediana\r\n\r\n- Color Negro \r\n\r\n- Ventana Lateral\r\n\r\nFuente de Poder \r\n\r\n-80 PLUS White Certified\r\n\r\n- ATX12V v2.31 / EPS 2.92\r\n\r\n- 100 - 240 V 47 - 63 Hz\r\n', 'disponible', 'img/18/Corsair SPEC 05 + Fuente 550W 80 PLUS WHITE Ventana Lateral Atx CC-9011151-MX Torre.jpg', 1103),
(20, 'Thermaltake Commander C34 ARGB 2* 200mm Vidrio Lateral Atx CA-1N5-00M1WN-00 Torre', 6, '440000', '- SISTEMA DE ILUMINACIÃ“N: 2 ventiladores preinstalados de 200 mm 5V MB Sync ARGB (SincronizaciÃ³n con ASUS, Gigabyte, MSI, ASRock) + 1x Ventilador negro trasero\r\n- TABLER', 'disponible', 'img/20/Thermaltake Commander C34 ARGB 2 200mm Vidrio Lateral Atx CA-1N5-00M1WN-00 Torre.jpg', 1103),
(21, 'Thermaltake H200 TG RGB Negra Vidrio Lateral CA-1M3-00M1WN-03 Atx Torre', 5, '401000', '- ATX Mid Tower\r\n\r\n- USB 3.0 x 2, HD Audio x 1, BotÃ³n RGB x 1\r\n\r\n- LimitaciÃ³n de altura del enfriador de la CPU: 180 mm \r\n  LimitaciÃ³n de longitud VGA: 320 mm\r\n\r\n- Sopo', 'disponible', 'img/21/Thermaltake H200 TG RGB Negra Vidrio Lateral CA-1M3-00M1WN-03 Atx Torre.jpg', 1103),
(22, 'Thermaltake H200 TG Snow RGB Vidrio Lateral CA-1M3-00M6WN-03 Atx Torre', 6, '401000', '- Tira de iluminaciÃ³n RGB, 19 modos de iluminaciÃ³n y 7 colores, simplemente controlados por el botÃ³n RGB\r\n- Un vidrio templado de 4 mm con montaje estÃ¡ndar\r\n- El diseÃ', 'disponible', 'img/22/Thermaltake H200 TG Snow RGB Vidrio Lateral CA-1M3-00M6WN-03 Atx Torre.jpg', 1103),
(23, 'Thermaltake Level 20 RS ARGB Vidrio Templado Atx CA-1P8-00M1WN-00 Torre', 6, '859000', '- Torre central de vidrio templado SPCC / ATX\r\n- 2 x USB 3.0, 2 x USB 2.0, 1 x audio HD, 1 x puertos frontales de botÃ³n RGB\r\n- Bastidor de HDD de 2.5 \"o 3.5\" / Soporte de', 'disponible', 'img/23/Thermaltake Level 20 RS ARGB Vidrio Templado Atx CA-1P8-00M1WN-00 Torre.jpg', 1103),
(24, 'Thermaltake S300 TG Vidrio Lateral Blanco Atx CA-1P5-00M6WN-00 Torre', 4, '407000', '- Torre central de vidrio templado SPCC / ATX\r\n- 1 x USB 3.0, 2 x USB 2.0, 1 x puertos frontales de audio HD\r\n- 2 x 3.5 \"o 2.5\" (Rack HDD), 2 x 3.5 \"(Sin Rack HDD) Compart', 'disponible', 'img/24/Thermaltake S300 TG Vidrio Lateral Blanco Atx CA-1P5-00M6WN-00 Torre.jpg', 1103),
(25, 'Thermaltake V200 ventana lateral vidrio templado Atx CA-1K8-00M1WN-01 Torre ', 8, '300000', '\r\n- Serie V200  \r\n\r\n- Formato Atx\r\n\r\n- Ventana Lateral\r\n\r\n- 2 x USB 2.0 / 1 x USB 3.0 / 1 x Audio HD / 1 x BotÃ³n RGB', 'disponible', 'img/25/Thermaltake V200 ventana lateral vidrio templado Atx CA-1K8-00M1WN-01 Torre.jpg', 1103),
(26, 'Adata SU650 960GB SATA III ASU630SS-960GQ-R Disco Solido', 17, '535000', 'La unidad de estado sÃ³lido Ultimate SU650 implementa 3D NAND Flash y un controlador de alta velocidad,\r\n que ofrece capacidades de hasta 1.92TB. Ofrece un rendimiento de ', 'disponible', 'img/26/Adata SU650 960GB SATA III ASU630SS-960GQ-R Disco Solido.jpg', 1102),
(28, 'Seagate 2TB Expansion Negro Disco Externo', 9, '315000', 'El disco duro portÃ¡til Seagate Expansion ofrece una soluciÃ³n fÃ¡cil de usar cuando necesita agregar \r\nalmacenamiento instantÃ¡neamente a su computadora y llevar archivos', 'disponible', 'img/28/Seagate 2TB Expansion Negro Disco Externo.jpg', 1102),
(29, 'XPG GAMMIX S11 Pro 1TB Nvme M.2 2280 PCIE 3.0 x4 AGAMMIXS11P-1TT-C Disco Solido', 2, '737000', 'Con la interfaz PCIe Gen3x4 extrarrÃ¡pida y la compatibilidad con NVMe 1.3, la unidad GAMMIX S11 Pro ofrece velocidades de lectura/escritura increÃ­blemente rÃ¡pidas \r\nde ', 'disponible', 'img/29/XPG GAMMIX S11 Pro 1TB Nvme M.2 2280 PCIE 3.0 x4 AGAMMIXS11P-1TT-C Disco Solido.jpg', 1102),
(30, 'XPG SX6000 Lite 1TB NVMe M.2 2280 3D NAND ASX6000LNP-1TT-C Disco Solido', 11, '798000', '\r\nCon HMB (Host Memory Buffer) y SLC Caching, el SX6000 Lite acelera las velocidades de lectura / escritura de hasta 1800 / 1200MB / \r\n y ofrece un rendimiento aleatorio d', 'disponible', 'img/30/XPG SX6000 Lite 1TB NVMe M.2 2280 3D NAND ASX6000LNP-1TT-C Disco Solido.jpg', 1102),
(31, 'AMD Ryzen 3 3200G 4 Core 3.6 GHz (4.0 GHz Turbo) Procesador', 5, '538000', 'El poder de jugar. Totalmente desbloqueado.La respuesta y el rendimiento que esperas de un equipo mucho mÃ¡s costoso.', 'disponible', 'img/31/AMD Ryzen 3 3200G 4 Core 3.6 GHz (4.0 GHz Turbo) Procesador.jpg', 1003),
(32, 'AMD Ryzen 5 3400G 4 Core 3.7 GHz (4.2 GHz Turbo) Procesador', 1, '912001', 'La tarjeta grÃ¡fica mÃ¡s potente en un procesador para computadoras de escritorio\r\n\r\nEl poder de jugar. Totalmente desbloqueado.', 'disponible', 'img/32/AMD Ryzen 5 3400G 4 Core 3.7 GHz (4.2 GHz Turbo) Procesador.jpg', 1105),
(33, 'AMD Ryzen 7 1800X 8 core 3.6GHZ (4.0 GHz Turbo) Procesador', 20, '980000', 'TecnologÃ­a AMD SenseMITecnologÃ­a AMD XFR (rango de frecuencias extendido)socket AM4Max Turbo Frequency 4.0 GHz16 MB de cachÃ© L3CachÃ© de 4MB L2Soporte DDR4', 'disponible', 'img/33/AMD Ryzen 7 1800X 8 core 3.6GHZ (4.0 GHz Turbo) Procesador.jpg', 1105),
(34, 'AMD Ryzen 7 1800X 8 core 3.6GHZ (4.0 GHz Turbo) Procesador', 22, '980000', 'TecnologÃ­a AMD SenseMI\r\nTecnologÃ­a AMD XFR (rango de frecuencias extendido)\r\nsocket AM4\r\nMax Turbo Frequency 4.0 GHz\r\n16 MB de cachÃ© L3\r\nCachÃ© de 4MB L2\r\nSoporte DDR4\r', 'disponible', 'img/34/AMD Ryzen 7 1800X 8 core 3.6GHZ (4.0 GHz Turbo) Procesador.jpg', 1105),
(35, 'AMD RYZEN 9 3900X 12 Core 3.8 GHz (4.6 GHz Turbo) Procesador', 2, '2549000', 'Fabricados para Rendir. DiseÃ±ados para Ganar.\r\n\r\nEl procesador mÃ¡s avanzado que existe1 con hasta 12 nÃºcleos para los jugadores de Ã©lite de todo el mundo', 'disponible', 'img/35/AMD RYZEN 9 3900X 12 Core 3.8 GHz (4.6 GHz Turbo) Procesador.jpg', 1105),
(36, 'AMD Ryzen 9 3950X 16 Core 3.5 GHz (4.7 GHz Turbo) Procesador', 1, '3998000', 'El procesador para computadoras de escritorio de 16 nÃºcleos mÃ¡s potente del mundo1\r\n\r\nEl procesador para computadoras de escritorio de 16 nÃºcleos mÃ¡s potente del mundo', 'disponible', 'img/36/AMD Ryzen 9 3950X 16 Core 3.5 GHz (4.7 GHz Turbo) Procesador.jpg', 1105),
(37, 'CORSAIR M55 RGB PRO CH-9308011-NA Mouse Gaming', 4, '182000', '- USB 2.0\r\n\r\n- Optico\r\n\r\n- LED RGB\r\n', 'disponible', 'img/37/CORSAIR M55 RGB PRO CH-9308011-NA Mouse Gaming.jpg', 1106),
(38, 'CORSAIR K70 RGB MK 2 SE BACKLIT RGB CH-9109114-NA Teclado Gamer ', 7, '797000', '- Interruptor CHERRYÂ® MX Speed\r\n\r\n- USB 2.0 tipo A\r\n\r\n- Marco de aluminio cepillado anodizado plateado de grado aeronÃ¡utico, construido para soportar una vida de juego\r\n', 'disponible', 'img/38/CORSAIR K70 RGB MK 2 SE BACKLIT RGB CH-9109114-NA Teclado Gamer.jpg', 1106),
(39, 'APC 6 PE66 SALIDAS MULTITOMA CON SUPRESOR DE PICOS', 8, '48000', '\r\n- Frecuencia de entrada 50/60 Hz\r\n\r\n- Tipo de Salida : NEMA 5-15R\r\n\r\n- Corriente mÃ¡xima de lÃ­nea 15A', 'disponible', 'img/39/APC 6 PE66 SALIDAS MULTITOMA CON SUPRESOR DE PICOS.jpg', 1106),
(41, 'Combo Thermaltake 4 en 1 Gaming combo kit KB-GCK-PLBLSP-01 KB', 22, '270000', 'Teclado y mouse de 3 colores con 4 efectos de iluminaciÃ³n\r\nTeclado de membrana: 3 teclas macro y anti-efecto fantasma\r\nRatÃ³n Ã³ptico Avago 5050\r\nAuriculares para juegos:', 'disponible', 'img/41/Combo Thermaltake 4 en 1 Gaming combo kit KB-GCK-PLBLSP-01 KB.jpg', 1106),
(42, 'CORSAIR HARPOON RGB PRO  CH-9301111-NA Mouse Gaming', 2, '128000', '- USB 2.0.\r\n\r\n- Optico.\r\n\r\n- LED RGB. \r\n\r\n-Sensor Ã³ptico de alta precisiÃ³n para juegos de 6000 ppp con seguimiento avanzado.\r\n\r\n-El diseÃ±o contorneado proporciona un aj', 'disponible', 'img/42/CORSAIR HARPOON RGB PRO  CH-9301111-NA Mouse Gaming.jpg', 1106),
(43, 'Pad Mouse Logitech G240', 0, '68000', 'ALFOMBRILLA DE TELA G240 PARA JUEGOS\r\n\r\nTAMAÃ‘O CLÃSICO: 280 X 340 mm\r\nGROSOR ULTRAFINO: 1 mm\r\nTELA : TEXTURA UNIFORME', 'disponible', 'img/43/Pad Mouse Logitech G240.jpg', 1106),
(44, 'El Gato Hd60s Sistema De Captura De Juego Usb 3.0', 7, '845000', 'Especificaciones TÃ©cnicas\r\n\r\nEmpieza a crear\r\n\r\nRendimiento al instante\r\n\r\nStreaming al instante\r\n\r\nGrabaciÃ³n al instante\r\n\r\nTu contenido, al instante', 'disponible', 'img/44/El Gato Hd60s Sistema De Captura De Juego Usb 3.0.jpg', 1106),
(45, 'Mouse Gaming Logitech Pro', 2, '260000', 'Sensor: HERO\r\nResoluciÃ³n: 100 â€“ 16.000 dpi\r\nSin suavizado/aceleraciÃ³n/filtros\r\nAceleraciÃ³n mÃ¡x.: >40 G1Pruebas realizadas sobre alfombrilla de mouse Logitech G240 pa', 'disponible', 'img/45/Mouse Gaming Logitech Pro.jpg', 1106),
(46, 'Combo Thermaltake 4 En 1 Gaming Knucker', 2, '285000', 'KIT JUEGO 4 EN 1 KNUCKER\r\n\r\nEl KIT DE JUEGO KNUCKER 4 EN 1\r\n\r\nEl teclado utiliza interruptores de Ã©mbolo de grado de juego para una sensaciÃ³n mecÃ¡nica como la sensibili', 'disponible', 'img/46/Combo Thermaltake 4 en 1 Gaming combo kit KB-GCK-PLBLSP-01 KB.jpg', 1106),
(47, 'Mouse Gaming Zowie Fk1 E-sports', 5, '260000', 'ESPECIFICACIONES\r\nDPI: 400/800/1600/3200\r\nUSB: USB 2.0 / 3.0 Plug & Play\r\nBotones: 5 botones\r\nLongitud del cable: 2 m / 6,6 pies\r\nTasa de informe: 125/500/1000 Hz', 'disponible', 'img/47/Mouse Gaming Zowie Fk1 E-sports.jpg', 1106),
(48, 'HUB USB de 7 puertos, con placa protectora deslizable', 2, '177549', 'Cable USB de conexiÃ³n de 55 cm\r\nIncluye eliminador para utilizar sin restricciÃ³n de energÃ­a los 7 puertos al mismo tiempo\r\nDimensiones: 11 cm x 2.5 cm x 1.9 cm', 'disponible', 'img/48/HUB USB de 7 puertos, con placa protectora deslizable.jpg', 1106);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `documento_identidad` int(20) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `email` char(45) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`documento_identidad`, `nombre_completo`, `email`, `clave`, `telefono`, `direccion`) VALUES
(128586, 'Omar gutierrez', 'bahemag@gmail.com', '$2y$10$1Q1lqUbjGtQN.', 3246454, 'calle 13 bis o #9-23'),
(1107093237, 'Luis Mario Perdomo Rosales', 'lmpr9534@gmail.com', '12345', 3750839, 'calle 38 # 33-31'),
(1107528994, 'luis alejandro ceron delgado', 'lalejandrocd1@gmail.com', '123456', 2147483647, 'calle 13 bis o #9-23'),
(1234567890, 'Marlon Estiben Reina Dinas', 'marlonwtf919@gmail.com', '12345', 4452031, 'calle 50 # 28 f 65'),
(2147483647, 'Patricia hernandez', 'hernadez_33@outlook.com', '$2y$10$2LzbKRLfw5iy9', 3750125, 'CALLE 9 # 153-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codigo_admin`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`codigo_carrito`),
  ADD KEY `documento` (`documento`),
  ADD KEY `cod_producto` (`cod_producto`) USING BTREE;

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`codigo_categoria`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`codigo_envio`),
  ADD KEY `codigo_ventas` (`codigo_factura`),
  ADD KEY `documento_identidad` (`documento_identidad`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`codigo_factura`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `codigo_codigo_categoria` (`codigo_codigo_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento_identidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `codigo_envio` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `codigo_factura` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`documento`) REFERENCES `usuarios` (`documento_identidad`),
  ADD CONSTRAINT `carrito_ibfk_3` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`codigo_producto`);

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_producto`);

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_2` FOREIGN KEY (`documento_identidad`) REFERENCES `usuarios` (`documento_identidad`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`documento_identidad`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`codigo_codigo_categoria`) REFERENCES `categorias` (`codigo_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
