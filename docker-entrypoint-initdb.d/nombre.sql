CREATE TABLE `usuarios`(
   `nombre` VARCHAR(255),
   `apellidos` VARCHAR(255)
) ENGINE=InnoDB CHARACTER SET=utf8;

INSERT INTO `usuarios`
    (`nombre`, `apellidos`)
VALUES
    ('Benito', 'Lopera Perrote'),
    ('Manuel', 'Jumilla Pandero')
;
