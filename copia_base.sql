
CREATE DATABASE IF NOT EXISTS `crud_db2`;
USE `crud_db2`;


CREATE TABLE IF NOT EXISTS `roles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(150),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `password` varchar(350) DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT NULL,
  `ultima_conexion` timestamp NULL DEFAULT NULL,
  `rol_id` INT(11) DEFAULT 2,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`rol_id`) REFERENCES `roles`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `roles` (`nombre`, `descripcion`) VALUES
('Administrador', 'Control total del sistema'),
('Usuario', 'Puede acceder a su propio perfil'),
('Invitado', 'Acceso limitado');



INSERT INTO `usuarios` (`id`, `nombre`, `email`, `edad`, `password`, `fecha_creacion`, `ultima_conexion`, `rol_id`) VALUES
  (1, 'Pedro Pérez', 'pedro@gmail.com', 32, '123', '2025-09-10 13:02:38', '2025-10-01 14:22:15', 1), -- Admin
  (2, 'David Valencia', 'davidv@gmail.com', 50, '321', '2025-09-12 09:00:00', NULL, 2),              -- Usuario
  (3, 'Zharick L.', 'zharick@gmail.com', 28, '789', '2025-09-15 08:30:00', NULL, 2),                 -- Usuario
  (4, 'Carlos López', 'carlos1@gmail.com', 20, '456', '2025-09-20 10:45:00', NULL, 2),               -- Usuario
  (5, 'Camila Borges', 'camila.b@gmail.com', 44, 'abc123', '2025-09-24 16:15:13', NULL, 2),          -- Usuario
  (6, 'Alejandra Ruiz', 'aleja@gmail.com', 33, '1', '2025-09-24 16:41:45', NULL, 3),                 -- Invitado
  (7, 'Carlos M.', 'carlos2@gmail.com', 35, '11', '2025-09-24 16:46:04', NULL, 2),                   -- Usuario
  (8, 'Laura Méndez', 'laura@gmail.com', 29, 'pass123', '2025-09-25 12:10:22', NULL, 2),             -- Usuario
  (9, 'Samuel Díaz', 'samuel@gmail.com', 41, 'sam321', '2025-09-26 09:18:40', NULL, 2),              -- Usuario
  (10, 'Valentina Torres', 'valen.torres@gmail.com', 27, 'valen2025', '2025-09-27 14:30:00', NULL, 2); -- Usuario



CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(11) NOT NULL,
  `titulo` VARCHAR(200) NOT NULL,
  `contenido` TEXT NOT NULL,
  `fecha_publicacion` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `publicacion_id` INT(11) NOT NULL,
  `usuario_id` INT(11) NOT NULL,
  `comentario` TEXT NOT NULL,
  `fecha_comentario` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`publicacion_id`) REFERENCES `publicaciones`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

