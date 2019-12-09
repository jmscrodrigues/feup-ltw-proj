PRAGMA foreign_keys	= ON;

<<<<<<< HEAD
insert into USER values ('sumol_de_ananas','Gonçalo Marantes','goncalomarantes99@gmail.com','e05f79651d465214e7558a382ed0f0e5a77380a649f4573f3a1036dc4ee10c0b');--secretpass
insert into USER values ('monopoly_guy','John Smith','iplayasthethimble@gmail.com','b339abbe244b92e5c157e9cc68f7fe677c42836c3dd93e49471a4a5451a842d2');--cenassecretas
insert into USER values ('big_dollars','Johnny Smith','ihavemoney@gmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');--password
insert into USER values ('banana_papaya','Joe Mamma','tuttifrutyy@gmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
=======
insert into USER(username,name,email,password) values ('sumol_de_ananas','Gonçalo Marantes','goncalomarantes99@gmail.com','e05f79651d465214e7558a382ed0f0e5a77380a649f4573f3a1036dc4ee10c0b');--secretpass
insert into USER(username,name,email,password) values ('monopoly_guy','John Smith','iplayasthethimble@gmail.com','b339abbe244b92e5c157e9cc68f7fe677c42836c3dd93e49471a4a5451a842d2');--cenassecretas
insert into USER(username,name,email,password) values ('big_dollars','Johnny Smith','ihavemoney@gmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');--password
insert into USER(username,name,email,password) values ('banana_papaya','Joe Mamma','tuttifrutyy@gmail.com','ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f');--password123
>>>>>>> 2cb58e88854d876754572a33ab24db31f4d9f780

insert into OWNER values ('monopoly_guy');
insert into OWNER values ('big_dollars');

insert into TOURIST values ('sumol_de_ananas');
insert into TOURIST values ('banana_papaya');

insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Rossio',42,'Rua do Rossio',18,'Porto','Portugal','E um apartamento','monopoly_guy');
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Vivenda a beira mar',95,'Rua da Foz',1,'Porto','Portugal','Muito luxuosa','big_dollars');
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Moradia em Madrid',75,'Puerta del Sol',35,'Madrid','Expanha','Estilo espanhol','big_dollars');
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Casa em Campo Alegre',55,'Rua de Tras',29,'Porto','Portugal','Elegante','monopoly_guy');
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Porto',80,'Rua das Flores',18,'Porto','Portugal','Apartamento','monopoly_guy');

insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',1,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',2,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',3,1);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/logo.png',4,0);
insert into PICTURES(picturePath,idPlace,aproved) values ('/assets/images/sofa_test.jpeg',4,1);

insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (1,'sumol_de_ananas','2019-05-15','2019-05-20');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (1,'banana_papaya','2019-08-01','2019-08-03');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (2,'sumol_de_ananas','2019-09-15','2019-10-01');
insert into RESERVATION(idPlace,idTourist,beginDate,endDate) values (3,'banana_papaya','2019-06-11','2019-06-15');

insert into REVIEW values (1,1,'Horrible place','We are sad to hear that you didnt enjoy your reservation');
insert into REVIEW values (2,4,'Great location','We are glad you enjoyed');
insert into REVIEW values (3,5,'Best place ever','');
insert into REVIEW values (4,3,'Meh','');

insert into MESSAGE(idOwner,idTourist,sender,message) values ('monopoly_guy','banana_papaya',1,'Perdi o jogo');
insert into MESSAGE(idOwner,idTourist,sender,message) values ('monopoly_guy','banana_papaya',0,'Tambem perdi o jogo');
insert into MESSAGE(idOwner,idTourist,sender,message) values ('monopoly_guy','sumol_de_ananas',1,'Perdi o jogo');
insert into MESSAGE(idOwner,idTourist,sender,message) values ('big_dollars','sumol_de_ananas',0,'Perdi o jogo');