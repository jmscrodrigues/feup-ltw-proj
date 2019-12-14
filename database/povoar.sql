PRAGMA foreign_keys	= ON;

insert into USER values (NULL,NULL,'sumol_de_ananas','Gonçalo Marantes','goncalomarantes99@gmail.com',NULL,'e05f79651d465214e7558a382ed0f0e5a77380a649f4573f3a1036dc4ee10c0b');--secretpass
insert into USER values (NULL,NULL,'monopoly_guy','John Smith','iplayasthethimble@gmail.com',NULL,'b339abbe244b92e5c157e9cc68f7fe677c42836c3dd93e49471a4a5451a842d2');--cenassecretas
insert into USER values (NULL,NULL,'big_dollars','Johnny Smith','ihavemoney@hotmail.com',NULL,'5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');--password
insert into USER values (NULL,NULL,'banana_papaya','Joe Mamma','tuttifrutyy@gmail.com',NULL,'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER values (NULL,NULL,'user_1','Joe Pappa','istoeummail@gmail.com',NULL,'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER values (NULL,NULL,'user_2','Joe Gramma','estemailexiste@gmail.com',NULL,'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER values (NULL,NULL,'nome_original','Joaquim Gomes','realmail@hotmail.com',NULL,'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER values (NULL,NULL,'user_3','Jose Andrade','randommail@gmail.com',NULL,'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER values (NULL,NULL,'user_4','Joao Araujo','theoriginalemail@hotmail.com',NULL,'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER values (NULL,NULL,'username','Afonso Mendonça','mail@gmail.com',NULL,'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123

insert into PLACE values (NULL,'Apartamento no Rossio',42,'Rua do Rossio',18,'Lisboa','Portugal','E um apartamento',NULL,2);
insert into PLACE values (NULL,'Vivenda a beira mar',95,'Rua da Foz',1,'Porto','Portugal','Muito luxuosa',NULL,3);
insert into PLACE values (NULL,'Moradia em Madrid',75,'Puerta del Sol',35,'Madrid','Espanha','Estilo espanhol',NULL,3);
insert into PLACE values (NULL,'Casa em Campo Alegre',55,'Rua de Tras',29,'Porto','Portugal','Elegante',NULL,2);
insert into PLACE values (NULL,'Apartamento no Porto',80,'Rua das Flores',18,'Porto','Portugal','Apartamento',NULL,2);
insert into PLACE values (NULL,'Apartamento no Porto',81,'Rua das Flores',20,'Porto','Portugal','Outro Apartamento',NULL,2);
insert into PLACE values (NULL,'Apartamento no Porto',80,'Rua das Flores',22,'Porto','Portugal','Apartamento',NULL,6);
insert into PLACE values (NULL,'Apartamento no Porto',83,'Rua das Flores',24,'Porto','Portugal','Apartamento Barato',NULL,5);
insert into PLACE values (NULL,'Apartamento no Porto',80,'Rua das Flores',26,'Porto','Portugal','Apartamento Premium',NULL,4);
insert into PLACE values (NULL,'Apartamento no Porto',85,'Rua das Flores',28,'Porto','Portugal','Apartamento',NULL,7);

insert into PICTURES values (NULL,'/assets/images/logo.png',1,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',2,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',3,1);
insert into PICTURES values (NULL,'/assets/images/sofa_test.jpeg',4,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',4,0);
insert into PICTURES values (NULL,'/assets/images/logo.png',5,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',6,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',4,0);
insert into PICTURES values (NULL,'/assets/images/logo.png',7,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',8,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',8,0);
insert into PICTURES values (NULL,'/assets/images/sofa_test.png',8,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',9,1);
insert into PICTURES values (NULL,'/assets/images/logo.png',10,1);

insert into RESERVATION values (NULL,1,1,'2019-05-15','2019-05-20');
insert into RESERVATION values (NULL,1,4,'2019-08-01','2019-08-03');
insert into RESERVATION values (NULL,2,1,'2019-09-15','2019-10-01');
insert into RESERVATION values (NULL,6,4,'2019-06-11','2019-06-15');
insert into RESERVATION values (NULL,4,4,'2019-06-11','2019-06-15');
insert into RESERVATION values (NULL,3,4,'2020-01-05','2020-01-15');
insert into RESERVATION values (NULL,3,5,'2020-02-11','2020-02-15');
insert into RESERVATION values (NULL,3,6,'2020-03-11','2020-03-14');
insert into RESERVATION values (NULL,3,2,'2020-04-09','2020-04-14');
insert into RESERVATION values (NULL,3,5,'2020-05-11','2020-05-16');
insert into RESERVATION values (NULL,3,5,'2019-06-10','2019-06-13');
insert into RESERVATION values (NULL,7,4,'2019-06-11','2019-06-15');
insert into RESERVATION values (NULL,6,4,'2020-06-11','2020-06-15');
insert into RESERVATION values (NULL,9,4,'2019-06-11','2019-06-15');
insert into RESERVATION values (NULL,4,4,'2019-06-11','2019-06-15');

insert into REVIEW values (1,1,'Horrible place','We are sad to hear that you didnt enjoy your reservation');
insert into REVIEW values (2,4,'Great location','We are glad you enjoyed');
insert into REVIEW values (3,5,'Best place ever','');
insert into REVIEW values (4,3,'Meh','');
insert into REVIEW values (5,3,'','');
insert into REVIEW values (11,5,'','');
insert into REVIEW values (12,2,'','');
insert into REVIEW values (14,4,'Meh','');
insert into REVIEW values (15,1,'Horrible','');
--os outros não tem review porque a reserva ainda não aconteceu

insert into MESSAGE values (NULL,2,4,1,'Perdi o jogo');
insert into MESSAGE values (NULL,2,4,1,'E tu?');
insert into MESSAGE values (NULL,2,4,0,'Tambem perdi o jogo');
insert into MESSAGE values (NULL,2,4,0,'Isto era mesmo necessário?');
insert into MESSAGE values (NULL,2,1,1,'Perdi o jogo');
insert into MESSAGE values (NULL,3,1,0,'Perdi o jogo');