CREATE TABLE usuarios(
   nombre VARCHAR(255),
   rol VARCHAR(255),
   puntos_poder VARCHAR(255),
   perfil VARCHAR(255),
   armas VARCHAR(255),
   promocion VARCHAR(255),
   habilidades VARCHAR(255),
   estratagema VARCHAR(255),
   clavefaccion VARCHAR(255),
   clave VARCHAR(255),

); --ENGINE=InnoDB CHARACTER SET=utf8;

INSERT INTO `usuarios`
    (`nombre`, `rol`,'puntos_poder','perfil','armas','promocion','habilidades','estratagema','clavefaccion','clave')
VALUES
    ('Gran Inmundicia', 'Cuartel general','10','4','espada venenosa','-','nube de moscas','chaosdaemos','nurgle'),
    ('Gran Inmundicia', 'Cuartel general','10','4','espada venenosa','-','nube de moscas','chaosdaemos','nurgle'),
    ('Gran Inmundicia', 'Cuartel general','10','4','espada venenosa','-','nube de moscas','chaosdaemos','nurgle')
;
