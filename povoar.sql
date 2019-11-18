PRAGMA foreign_keys	= ON;

insert into USER values ('sumol_de_ananas','Gonçalo Marantes','goncalomarantes99@gmail.com','*************');
insert into USER values ('monopoly_guy','John Smith','iplayasthethimble@gmail.com','cenassecretas');
insert into USER values ('big_dollars','Johnny Smith','ihavemoney@gmail.com','password');
insert into USER values ('banana_papaya','Joe Mamma','tuttifrutyy@gmail.com','password123');

insert into OWNER values ('monopoly_guy');
insert into OWNER values ('big_dollars');

insert into TOURIST values ('sumol_de_ananas');
insert into TOURIST values ('banana_papaya');

insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Apartamento no Rossio',42,'Rua do Rossio',18,'Porto','Portugal','E um apartamento','monopoly_guy');
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Vivenda a beira mar',95,'Rua da Foz',1,'Porto','Portugal','Muito luxuosa','big_dollars');
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Moradia em Madrid',75,'Rua da Foz',35,'Madrid','Expanha','Estilo espanhol','big_dollars');
insert into PLACE(name,price,street,number,city,country,description,idUser) values ('Casa em Campo Alegre',55,'Rua de Tras',29,'Porto','Portugal','Elegante','monopoly_guy');

insert into PICTURES(picturePath,idPlace,aproved) values ('/Images/001.jpg',1,TRUE);
insert into PICTURES(picturePath,idPlace,aproved) values ('/Images/002.jpg',2,TRUE);
insert into PICTURES(picturePath,idPlace,aproved) values ('/Images/003.jpg',3,TRUE);
insert into PICTURES(picturePath,idPlace,aproved) values ('/Images/004.jpg',4,FALSE);
insert into PICTURES(picturePath,idPlace,aproved) values ('/Images/005.jpg',4,TRUE);

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
