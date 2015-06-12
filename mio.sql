SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*==============================================================*/
/* Data Base: `mio`                                 */
/*==============================================================*/
CREATE DATABASE IF NOT EXISTS `mio` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `mio`;


drop table if exists ENTRADA;

/*==============================================================*/
/* Table: ENTRADA                                               */
/*==============================================================*/
create table ENTRADA (
   IDENTRADA             bigint unsigned not null auto_increment,
   TITULO               varchar(20)          null,
   CUERPO               varchar(500)          null,
   FECHA                TIMESTAMP               null,
   primary key (IDENTRADA)
);

	  
/*Creación de registros 1234/123478*/
INSERT INTO ENTRADA(TITULO,CUERPO,FECHA)
     VALUES ('El Comienzo','En un comienzo existian mil personas, todas alineadas y bien formadas',NOW());

INSERT INTO ENTRADA(TITULO,CUERPO,FECHA)
     VALUES ('La Rezaca','Todos se miraban las caras mientras veian caer el vidrio desde aquella extraña nube',NOW());

INSERT INTO ENTRADA(TITULO,CUERPO,FECHA)
     VALUES ('Calidez','El tiempo no pasa mientras te miro avanzar hacia mi, me haces creer en el salto cuantico',NOW());
