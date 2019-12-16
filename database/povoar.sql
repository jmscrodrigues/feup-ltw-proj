PRAGMA foreign_keys	= ON;

insert into USER(username,name,email,password) values ('sumol_de_ananas','Gonçalo Marantes','goncalomarantes99@gmail.com','$2y$12$eMsDVM1f7w1pT2hMrkk9o.yfiSSZLYrKl6vvA/BokWFa/1wu67iZq');--secretpass
insert into USER(username,name,email,password) values ('monopoly_guy','John Smith','iplayasthethimble@gmail.com','$2y$12$.qsa6IdR7h3CS8UTm.W6cOlFbowYtKPf.IGdspMfrmWzGrYEK4lsy');--cenassecretas
insert into USER(username,name,email,password) values ('big_dollars','Johnny Smith','ihavemoney@hotmail.com','$2y$12$yJk7iPZsz5ehUOL.jlcZLuOOPtqQz.9FDR.haGmY7A4zFKdYNE4vC');--password
insert into USER(username,name,email,password) values ('banana_papaya','Joe Mamma','tuttifrutyy@gmail.com','$2y$12$NANboUIJUn3bJHnDuKeDrOVKhGLnl4LA39zWEBRLMbb8Z/EuKCRMi');--password123
insert into USER(username,name,email,password) values ('user_1','Joe Pappa','istoeummail@gmail.com','$2y$12$qxjEyOOwgeS1Ve5p4ovgKute0fuCUDH5HlUZbIk3OiLXhlfR7eHbK');--password123
insert into USER(username,name,email,password) values ('user_2','Joe Gramma','estemailexiste@gmail.com','$2y$12$BaqwMfHAxPJ3B.d44jZ0MeiML1Cjgg7bqTq38fqdl3u623RpEfkQG');--password123
insert into USER(username,name,email,password) values ('nome_original','Joaquim Gomes','realmail@hotmail.com','$2y$12$JhWTuMhkn.F3wofFhYCVKOEAOqMVMUf/vddQVHbAgU9R2TXx/mLPu');--password123
insert into USER(username,name,email,password) values ('user_3','Jose Andrade','randommail@gmail.com','$2y$12$tAHA0bEJj.h7QFxt8eQyK.aROmwlm76p2wbJFR9j3/5u0sp67tc1a');--password123
insert into USER(username,name,email,password) values ('user_4','Joao Araujo','theoriginalemail@hotmail.com','$2y$12$kH6aJoy2HxEIOJxsG0VHXeMv4q9ZXwz2LGLtAtfDF/KAmMU67wnIG');--password123
insert into USER(username,name,email,password) values ('username','Afonso Mendonça','mail@gmail.com','$2y$12$Ydp/xQk9GginmbLIUWsBseacJgI2UUn6.pOsbejU9c9H36Iebshla');--password123

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