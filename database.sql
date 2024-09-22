CREATE DATABASE phpavanzado;


CREATE TABLE registro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL
);




CREATE TABLE `clases` (
  `id_clase` int NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `clases` (`id_clase`, `unidad`, `fecha`) VALUES
(1, 'hola', '2024-08-15'),
(2, 'hola', '2024-08-15'),
(3, 'hola', '2024-08-15'),
(4, '12', '2024-08-13'),
(7, '15', '2024-08-06'),
(8, '17', '2024-08-20'),
(9, '17', '2024-08-20'),
(10, '15', '2024-08-20'),
(12, 'hola', '2024-08-07'),
(16, 'hola', '2024-08-21'),
(18, 'hola', '2024-08-13'),
(19, 'ASAS', '2024-08-14'),
(20, 'hola', '2024-08-06'),
(21, 'clari15', '2024-08-21'),
(22, 'unidad 1', '2024-08-06');

ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_clase`);

ALTER TABLE `clases`
  MODIFY `id_clase` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;



CREATE TABLE `compras` (
  `id_compra` int NOT NULL,
  `codigo` int NOT NULL,
  `producto` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);
COMMIT;

ALTER TABLE `compras`
  MODIFY `id_compra` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


CREATE TABLE `consultas` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `consulta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `consultas` (`nombre`, `apellido`, `correo`, `consulta`) VALUES
('', 'rafa', 'aurelio', 'adios consulta eviada'),
('', 'Ariel', 'Barzabal', 'hola mundo'),
('', 'Martin', 'Gimenes', 'volve'),
('', 'juan', 'perez', 'deime que sale\r\n'),
('', 'Martin', 'Romero', 'creo que pude conectar');

ALTER TABLE `consultas`
  ADD PRIMARY KEY (`correo`);
COMMIT;


CREATE TABLE `productos` (
  `codigo` int NOT NULL,
  `producto` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `productos` (`codigo`, `producto`, `descripcion`, `precio`) VALUES
(1001, 'Lampara Xenon B54', 'Las lamparas de xenon generan hasta 4 veces mas luz que las lamparas halogenas comunes. El consumo de energia es de 35watt, casi la mitad del consumo de las lamparas halogenas comunes. ', '234.00'),
(1002, 'Lampara Xenon B16', 'El funcionamiento mediante la descarga electrica aumenta la cantidad de horas utiles de la lampara, ya que los golpes y las vibraciones no las da?an, como sucede con las lamparas halogenas.MODIFICADO', '546.00'),
(1003, 'Lampara Xenon 300SD', 'El funcionamiento mediante la descarga electrica aumenta la cantidad de horas utiles de la lampara, ya que los golpes y las vibraciones no las da?an, como sucede con las lamparas halogenas.', '344.00'),
(1004, 'Lampara Xenon B45SD', 'No hace falta realizar ninguna modificacion electrica en el auto, tampoco hace falta cortar cables. Hay kits para cada modelo y marca de autos. Los kits consumen casi la mitad de electricidad que las lamparas halogenas comunes.', '256.40'),
(1005, 'Lampara Xenon 28SE', 'Este modelo de lampara genera un ahorro de combustible.', '310.50'),
(1006, 'Lampara Xenon B345', 'En caso de ser necesario se pueden colocar lamparas halogenas de forma inmediata, los kits no modifican la instalacion electrica original del auto. ', '340.00'),
(1007, 'Lampara Xenon 34SE', 'En caso de ser necesario se pueden colocar lamparas halogenas de forma inmediata, los kits no modifican la instalacion electrica original del auto. ', '322.50'),
(1008, 'Lampara Xenon B90', 'Las lamparas de xenon generan menos calor que las lamparas halogenas, todas las opticas soportan las lamparas de xenon.', '349.90'),
(1009, 'Lampara Xenon 43SE', 'Las lamparas de xenon generan menos calor que las lamparas halogenas, todas las opticas soportan las lamparas de xenon.', '230.90'),
(1010, 'Lampara Xenon 98DE', 'Las lamparas de xenon generan menos calor que las lamparas halogenas, todas las opticas soportan las lamparas de xenon.', '110.00'),
(1011, 'Lampara Xenon 65SD', 'Los balastros son de menor tama?o y son digitales. Los balastros no generan ningun tipo de interferencia en las computadoras de los autos ni en las radios. ', '430.00'),
(1012, 'Lampara Xenon B44', 'Los balastros son de menor tama?o y son digitales. Los balastros no generan ningun tipo de interferencia en las computadoras de los autos ni en las radios.', '235.60'),
(1013, 'Lampara Xenon 3D4G', 'Las lamparas de 6000k generan el mismo color que los autos de alta gama que vienen con lamparas de xenon de serie. A medida que aumenta la temperatura de las lamparas la potencia lum?nica disminuye. ', '260.60'),
(1014, 'Lampara Xenon 109FD', 'Las lamparas de 6000k generan el mismo color que los autos de alta gama que vienen con lamparas de xenon de serie. A medida que aumenta la temperatura de las lamparas la potencia lum?nica disminuye. ', '430.00'),
(1015, 'Lampara Xenon 90FT', 'El funcionamiento mediante la descarga electrica aumenta la cantidad de horas utiles de la lampara, ya que los golpes y las vibraciones no las da?an, como sucede con las lamparas halogenas.', '456.60'),
(1016, 'Lampara Xenon FG34', 'El funcionamiento mediante la descarga electrica aumenta la cantidad de horas utiles de la lampara, ya que los golpes y las vibraciones no las da?an, como sucede con las lamparas halogenas.', '190.00');

ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

ALTER TABLE `productos`
  MODIFY `codigo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;
COMMIT;

