


CREATE TABLE tb_mapeos(
    id_map                  INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nro_vehiculos           VARCHAR (255) NULL,
    estado_ruta             VARCHAR (255) NULL,
    obs                     VARCHAR (255) NULL,


    fyh_creacion            DATETIME        NULL,
    fyh_actualizacion       DATETIME        NULL,
    fyh_eliminacion         DATETIME        NULL,
    estado                  VARCHAR (10)
);