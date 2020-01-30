-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2019 a las 18:17:02
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `descuentos`
--
CREATE DATABASE IF NOT EXISTS `descuentos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `descuentos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE `descuentos` (
  `Id_descuento` int(10) NOT NULL,
  `Empresa` varchar(120) NOT NULL,
  `Codigo_descuento` varchar(30) NOT NULL,
  `Descripcion` varchar(150) NOT NULL,
  `Fecha_emision` date NOT NULL,
  `Caducidad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`Id_descuento`, `Empresa`, `Codigo_descuento`, `Descripcion`, `Fecha_emision`, `Caducidad`) VALUES
(1, 'Sony', 'DHT789', '20% descuento en juegos play station', '2019-11-15', '2019-11-30'),
(2, 'NETFLIX', 'DSDF433', '1 MES DE PRUEBA GRATIS', '2019-11-28', '2019-12-28'),
(3, 'MICROSOFT', 'ASDQ1247', '30% DESCUENTO EN CONSOLAS COMPRANDO 1 JUEGO', '2019-11-28', '2019-12-28'),
(4, 'CINEMEX', 'CNMX7848', '1 BOLETO GRATIS A PARTIR DE 1 COMPRA EN TAQUILLA', '2019-11-28', '2019-12-28'),
(5, 'DIDI', 'DD472Y', '50% A PARTIR DE LAS 2PM EL DÃA QUE LO USES', '2019-11-25', '2019-11-30'),
(6, 'DIDI', 'DDFF3423', '5% DESCUENTO EN ENVIO ', '2019-11-20', '2019-11-30'),
(7, 'UBER', 'UBBR4242', '5% DESCUENTO EN PRIMER VIAJE DEL DÃA', '2019-11-20', '2019-11-30'),
(8, 'UBER', 'UBBR4242', '10% DESCUENTO EN 1 VIAJE EL FIN DE SEMANA', '2019-11-20', '2019-11-30'),
(9, 'SONY', 'PLY323', '30% DESCUENTO EN CONTROLES A PARTIR DE LA SEGUNDA COMPRA', '2019-11-20', '2019-11-30'),
(10, 'SONY', 'PLY356', '10% DESCUENTO EN CABLES DE PODER PARA CONSOLAS', '2019-11-20', '2019-11-30'),
(11, 'CINEMEX', 'CNMX1231', '5% DESCUENTO EN PALOMITAS MEDIANAS', '2019-11-20', '2019-11-30'),
(12, 'MICROSOFT', 'XBX89D', 'GRATIS 1 JUEGO A PARTIR DE LA COMPRA DE 1 CONSOLA', '2019-11-20', '2019-11-30'),
(13, 'STEAM', 'STM780', 'GRATIS 1 DLC EN LA COMPRA DE CUALQUIER JUEGO', '2019-11-20', '2019-11-30'),
(14, 'STEAM', 'STM744DA', '30% DESCUENTO COMPRANDO CALL OF DUTY', '2019-11-20', '2019-11-30'),
(15, 'UBER EATS', 'UBET1234Y', '5% DESCUENTO EN ENVIO', '2019-11-20', '2019-11-30'),
(16, 'UBER EATS', 'UBET143E', 'ENVIO GRATIS EN PEDIDOS DE $200 EN ADELANTE', '2019-11-20', '2019-11-30'),
(17, 'MCDONALDS', 'MC2342EWQ', '10% DESCUENTO EN TU SEGUNDA HAMBURGUESA GRANDE', '2019-11-20', '2019-11-30'),
(18, 'MCDONALDS', 'MC2342EWQ', '1 HAMBURGESA GRATIS EN PEDIDOS DE $10 EN ADELANTE', '2019-11-20', '2019-11-30'),
(19, 'BURGUER KING', 'KNG323EW', '1 HELADO GRATIS EN LA COMPRA DE 2 HAMBURGUESAS ', '2019-11-20', '2019-11-30'),
(20, 'BURGUER KING', 'KNGD3426', '1 PAY DE QUESO AL COMPRAR UNA HAMBURGUESA GRANDE', '2019-11-20', '2019-11-30'),
(21, 'CINEPOLIS', 'CNPER2233', '5% DESCUENT EN COMIDA AL COMPRAR MAS DE 2 ENTRADAS', '2019-11-20', '2019-11-30'),
(22, 'CINEPOLIS', 'CNPD8372JH', '1 BOLETO GRATIS A PARTIR DE LA COMPRA DEL SEGUNDO BOLETO', '2019-11-20', '2019-11-30'),
(23, 'DIDIFOOD', 'DDFF', '5% DESCUENTO EN ENVIO', '2019-11-20', '2019-11-30'),
(24, 'DIDIFOOD', 'DDFF', '5% EN PEDIDOS MAYORES A $100', '2019-11-20', '2019-11-30'),
(25, 'CINEMEX', 'ASDAF435', '10% DESCUENTO 1 BOLETO', '2019-11-20', '2019-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `Id tienda` int(15) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo_electronico` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`Id tienda`, `Nombre`, `Direccion`, `Telefono`, `Correo_electronico`, `Password`) VALUES
(1, 'Imprenta sa de ', 'Cll juan aldama 120', '7894561230', 'tienda@hotmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(10) NOT NULL,
  `Nombres` varchar(20) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `Correo_electronico` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombres`, `Apellidos`, `Correo_electronico`, `Password`) VALUES
(1, 'KEVIN', 'Rojas moncayo', 'kevinrojas06@gmail.com', '123456'),
(2, 'Diego', 'Franco', 'diego@gmail.com', '123'),
(3, 'Alain', 'Andres', 'alain@hotmail.com', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`Id_descuento`);

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`Id tienda`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `Id_descuento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `Id tienda` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Base de datos: `particionhorizontal`
--
CREATE DATABASE IF NOT EXISTS `particionhorizontal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `particionhorizontal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_soldados`
--

CREATE TABLE `datos_soldados` (
  `Id` int(10) DEFAULT NULL,
  `Nombre_y_apellido` varchar(30) DEFAULT NULL,
  `Batallon` varchar(30) DEFAULT NULL,
  `Compania` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `particion1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `particion1` (
`Id` int(5)
,`Nombre` varchar(15)
,`Raza` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `particion2`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `particion2` (
`Id` int(5)
,`Nombre` varchar(15)
,`Raza` varchar(15)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinaria_sucursal_1`
--

CREATE TABLE `veterinaria_sucursal_1` (
  `Id` int(5) DEFAULT NULL,
  `Nombre` varchar(15) DEFAULT NULL,
  `Raza` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
PARTITION BY RANGE (Id)
(
PARTITION grupo1 VALUES LESS THAN (6) ENGINE=InnoDB,
PARTITION grupo2 VALUES LESS THAN (11) ENGINE=InnoDB
);

--
-- Volcado de datos para la tabla `veterinaria_sucursal_1`
--

INSERT INTO `veterinaria_sucursal_1` (`Id`, `Nombre`, `Raza`) VALUES
(1, 'Kaiser', 'Pitbull'),
(2, 'Simon', 'Schnawser'),
(3, 'Bruno', 'Doberman'),
(4, 'Gucci', 'Pastor Aleman'),
(5, 'Kira', 'Golden Retreave'),
(5, 'Goretty', 'Pitbull'),
(6, 'Whiskey', 'Pomerania'),
(7, 'Channel', 'Pomerania'),
(8, 'Zeus', 'Pitbull'),
(9, 'Mateo', 'Criollo'),
(10, 'Freya', 'Pastor Inglés');

-- --------------------------------------------------------

--
-- Estructura para la vista `particion1`
--
DROP TABLE IF EXISTS `particion1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `particion1`  AS  select `veterinaria_sucursal_1`.`Id` AS `Id`,`veterinaria_sucursal_1`.`Nombre` AS `Nombre`,`veterinaria_sucursal_1`.`Raza` AS `Raza` from `veterinaria_sucursal_1` PARTITION (`grupo1`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `particion2`
--
DROP TABLE IF EXISTS `particion2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `particion2`  AS  select `veterinaria_sucursal_1`.`Id` AS `Id`,`veterinaria_sucursal_1`.`Nombre` AS `Nombre`,`veterinaria_sucursal_1`.`Raza` AS `Raza` from `veterinaria_sucursal_1` PARTITION (`grupo2`) ;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Volcado de datos para la tabla `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"snap_to_grid\":\"off\",\"angular_direct\":\"direct\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"red_social\",\"table\":\"usuarios\"},{\"db\":\"descuentos\",\"table\":\"descuentos\"},{\"db\":\"descuentos\",\"table\":\"usuarios\"},{\"db\":\"descuentos\",\"table\":\"tiendas\"},{\"db\":\"descuentos\",\"table\":\"registro usuarios\"},{\"db\":\"descuentos\",\"table\":\"registro tiendas\"},{\"db\":\"descuentos\",\"table\":\"Registro tiendas\"},{\"db\":\"descuentos\",\"table\":\"Registro usuarios\"},{\"db\":\"pruebadb\",\"table\":\"tabla\"},{\"db\":\"particionhorizontal\",\"table\":\"datos_soldados\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-12-11 17:16:45', '{\"lang\":\"es\",\"Console\\/Mode\":\"collapse\",\"FontSize\":\"85%\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `pruebadb`
--
CREATE DATABASE IF NOT EXISTS `pruebadb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pruebadb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE `tabla` (
  `clave` varchar(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `carrera` varchar(40) NOT NULL,
  `semestre` int(2) NOT NULL,
  `edad` int(2) NOT NULL,
  `cp` int(10) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `materia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`clave`, `nombre`, `direccion`, `telefono`, `carrera`, `semestre`, `edad`, `cp`, `calificacion`, `materia`) VALUES
('001', 'Kevin Rojas', 'Camino real metepec 120', '1230546789', 'Ingenieria sistemas', 7, 26, 0, 9, 'Bases de datos distribuidas'),
('12345', 'KEVIN ROJAS', 'CAMINO REAL A METEPEC 120', '1234567890', 'INGENIERIA SISTEMAS', 7, 26, 0, 8, 'FISICA'),
('12345', 'KEVIN ROJAS', 'CAMINO REAL A METEPEC 120', '1234567890', 'INGENIERIA SISTEMAS', 7, 26, 0, 8, 'FISICA'),
('656', 'GHGHVHVH', 'HFGH', 'GFGFUGFU', 'GCGVH', 4, 45, 0, 7, 'FDFGF'),
('656', 'GHGHVHVH', 'HFGH', 'GFGFUGFU', 'GCGVH', 4, 45, 0, 7, 'FDFGF'),
('', '', '', '', '', 0, 0, 0, 0, '');
--
-- Base de datos: `red_social`
--
CREATE DATABASE IF NOT EXISTS `red_social` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `red_social`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `Nombres` varchar(20) DEFAULT NULL,
  `Primer_apellido` varchar(15) DEFAULT NULL,
  `Segundo_apellido` varchar(15) DEFAULT NULL,
  `Direccion` varchar(150) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `Password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Nombres`, `Primer_apellido`, `Segundo_apellido`, `Direccion`, `Telefono`, `Correo`, `Password`) VALUES
(1, 'Kevin Andres', 'Rojas', 'Moncayo', 'Camino Real a Metepec 120-16, Col. El hÃ­pico', '7894561230', 'kevinrojas06@gmail.com', '789456'),
(2, 'Diego ', 'Vidal', 'Apolonio', 'Pino Suarez 45', '01122587', 'diegoapolonio@gmail.com', '12844'),
(3, 'Diego', 'Franco', 'Morales', 'Ignacio Comonfot 16', '7854102364', 'diego@gmail.com', '4568987'),
(4, 'Maria Paula', 'Llanos ', 'Devia', 'Melchor muzquiz 500 int. 7', '0231458710', 'paula14@gmail.com', '012547'),
(5, 'Jennifer', 'Morales', 'Aroca', 'Pino Suarez 34', '1254000014', 'jennifer@outlook.com', '12365784');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
