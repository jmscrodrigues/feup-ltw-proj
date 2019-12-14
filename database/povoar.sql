PRAGMA foreign_keys	= ON;

insert into USER(username,name,email,password) values ('sumol_de_ananas','Gonçalo Marantes','goncalomarantes99@gmail.com','e05f79651d465214e7558a382ed0f0e5a77380a649f4573f3a1036dc4ee10c0b');--secretpass
insert into USER(username,name,email,password) values ('monopoly_guy','John Smith','iplayasthethimble@gmail.com','b339abbe244b92e5c157e9cc68f7fe677c42836c3dd93e49471a4a5451a842d2');--cenassecretas
insert into USER(username,name,email,password) values ('big_dollars','Johnny Smith','ihavemoney@hotmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');--password
insert into USER(username,name,email,password) values ('banana_papaya','Joe Mamma','tuttifrutyy@gmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
<<<<<<< HEAD
insert into USER(username,name,email,password) values ('user_1','Joe Pappa','istoeummail@gmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER(username,name,email,password) values ('user_2','Joe Gramma','estemailexiste@gmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER(username,name,email,password) values ('nome_original','Joaquim Gomes','realmail@hotmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER(username,name,email,password) values ('user_3','Jose Andrade','randommail@gmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER(username,name,email,password) values ('user_4','Joao Araujo','theoriginalemail@hotmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
insert into USER(username,name,email,password) values ('username','Afonso Mendonça','mail@gmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123

insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Rossio',42,'Rua do Rossio',18,'Lisboa','Portugal','E um apartamento',2);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Vivenda a beira mar',95,'Rua da Foz',1,'Porto','Portugal','Muito luxuosa',3);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Moradia em Madrid',75,'Puerta del Sol',35,'Madrid','Espanha','Estilo espanhol',3);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Casa em Campo Alegre',55,'Rua de Tras',29,'Porto','Portugal','Elegante',2);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Porto',80,'Rua das Flores',18,'Porto','Portugal','Apartamento',2);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Porto',81,'Rua das Flores',20,'Porto','Portugal','Outro Apartamento',2);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Porto',80,'Rua das Flores',22,'Porto','Portugal','Apartamento',6);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Porto',83,'Rua das Flores',24,'Porto','Portugal','Apartamento Barato',5);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Porto',80,'Rua das Flores',26,'Porto','Portugal','Apartamento Premium',4);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Porto',85,'Rua das Flores',28,'Porto','Portugal','Apartamento',7);
=======

insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Rossio',42,'Rua do Rossio',18,'Porto','Portugal','E um apartamento',2);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Vivenda a beira mar',95,'Rua da Foz',1,'Porto','Portugal','Muito luxuosa',3);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Moradia em Madrid',75,'Puerta del Sol',35,'Madrid','Expanha','Estilo espanhol',3);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Casa em Campo Alegre',55,'Rua de Tras',29,'Porto','Portugal','Elegante',2);
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Porto',80,'Rua das Flores',18,'Porto','Portugal','Apartamento',2);
>>>>>>> 1-main-page

insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',1,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',2,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',3,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/sofa_test.jpeg',4,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',4,0);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',5,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',6,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',4,0);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',7,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',8,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',8,0);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/sofa_test.png',8,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',9,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',10,1);

insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (1,1,'2019-05-15','2019-05-20');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (1,4,'2019-08-01','2019-08-03');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (2,1,'2019-09-15','2019-10-01');
<<<<<<< HEAD
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (6,4,'2019-06-11','2019-06-15');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (4,4,'2019-06-11','2019-06-15');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (3,4,'2020-01-05','2020-01-15');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (3,5,'2020-02-11','2020-02-15');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (3,6,'2020-03-11','2020-03-14');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (3,2,'2020-04-09','2020-04-14');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (3,5,'2020-05-11','2020-05-16');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (3,5,'2019-06-10','2019-06-13');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (7,4,'2019-06-11','2019-06-15');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (6,4,'2020-06-11','2020-06-15');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (9,4,'2019-06-11','2019-06-15');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (4,4,'2019-06-11','2019-06-15');
=======
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (3,4,'2019-06-11','2019-06-15');
>>>>>>> 1-main-page

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

insert into MESSAGE(idOwner,idTourist,sender,message) values (2,4,1,'Perdi o jogo');
<<<<<<< HEAD
insert into MESSAGE(idOwner,idTourist,sender,message) values (2,4,1,'E tu?');
insert into MESSAGE(idOwner,idTourist,sender,message) values (2,4,0,'Tambem perdi o jogo');
insert into MESSAGE(idOwner,idTourist,sender,message) values (2,4,0,'Isto era mesmo necessário?');
=======
insert into MESSAGE(idOwner,idTourist,sender,message) values (2,4,0,'Tambem perdi o jogo');
>>>>>>> 1-main-page
insert into MESSAGE(idOwner,idTourist,sender,message) values (2,1,1,'Perdi o jogo');
insert into MESSAGE(idOwner,idTourist,sender,message) values (3,1,0,'Perdi o jogo');