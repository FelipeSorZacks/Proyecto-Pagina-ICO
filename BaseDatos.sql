-- donde exista una db con el mismo nombre la elimina
drop schema if exists `test_php`;

-- se crear la DB 
create schema  if not exists `test_php` default  character set utf8 collate  utf8_spanish2_ci;
USE `test_php`; 

-- se crear la tabla
CREATE TABLE `persona` (
    `numero` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre_usuario` TEXT NOT NULL,
    `carrera` TEXT NOT NULL,
    `no_cuenta` BIGINT NOT NULL,
    `direccion` TEXT NOT NULL,
    `telefono` VARCHAR(8) NOT NULL,
    `email` TEXT NOT NULL,
    `password` VARCHAR(8) NOT NULL,
    `fecha_registro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `permisos` INT(11) NOT NULL DEFAULT '2',
    PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `test_php`.`persona`
CHANGE COLUMN `numero` `numero` INT(11) NOT NULL AUTO_INCREMENT;




INSERT INTO `persona`(`nombre_usuario`, `carrera`, `no_cuenta`, `direccion`, `telefono`, `email`, `password`, `fecha_registro`, `permisos`) 
VALUES 
('Aaron Velasco', 'ico', '413112576', 'gloria 15', '5612315', 'aaron@gmail.com', '123456', '2020-05-12 17:40:00', 2),
('Felipe Soriano', 'ico', '413112575', 'gloria 402', '5612315', 'felipe@gmail.com', '123456', '2020-05-12 17:40:00', 2),
('Carlos Mendoza', 'sistemas', '413114789', 'avenida siempre viva 123', '5619874', 'carlos@gmail.com', '789456', '2021-08-15 10:30:00', 2),
('Lucia Perez', 'matematicas', '413118765', 'calle los sauces 50', '5623456', 'lucia@gmail.com', '456123', '2021-09-20 14:15:00', 1),
('Miguel Salazar', 'quimica', '413112345', 'carrera 10 #45', '5632145', 'miguel@gmail.com', '123789', '2022-01-10 09:25:00', 3),
('Sandra Lopez', 'fisica', '413116543', 'calle 21a', '5643210', 'sandra@gmail.com', '321654', '2022-02-11 16:45:00', 2),
('Ricardo Ruiz', 'literatura', '413119876', 'avenida 5 #13', '5654321', 'ricardo@gmail.com', '654789', '2022-03-05 18:00:00', 1),
('Maria Torres', 'filosofia', '413114321', 'calle 33', '5665432', 'maria@gmail.com', '987321', '2022-05-09 11:40:00', 3),
('David Jimenez', 'administracion', '413112221', 'zona centro', '5676543', 'david@gmail.com', '321987', '2022-07-13 14:30:00', 2),
('Elena Diaz', 'psicologia', '413118899', 'calle laurel 19', '5687654', 'elena@gmail.com', '987654', '2023-02-21 08:50:00', 2),
('Gabriel Suarez', 'ingenieria', '413119654', 'barrio san jose', '5698765', 'gabriel@gmail.com', '654321', '2023-05-03 12:20:00', 1),
('Patricia Ramos', 'derecho', '413114432', 'ciudadela 15', '5612345', 'patricia@gmail.com', '123321', '2023-08-07 17:30:00', 3);
