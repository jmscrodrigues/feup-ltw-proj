.mode columns
.headers on
PRAGMA foreign_keys=OFF;

drop table if exists NOTIFICATION;

drop table if exists USER;
drop table if exists OWNER;
drop table if exists TOURIST;
drop table if exists PLACE;
drop table if exists PICTURES;
drop table if exists RESERVATION;
drop table if exists REVIEW;
drop table if exists MESSAGE;
drop table if exists NOTIFICATION;

PRAGMA foreign_keys=ON;

create table USER(
    id INTEGER PRIMARY KEY,
	username TEXT UNIQUE,
    name TEXT NOT NULL,
	email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL,
	CONSTRAINT CHK_USER CHECK (length(username)>=6 AND length(username)<=20));

create table PLACE(
    idPlace INTEGER PRIMARY KEY,
    name TEXT NOT NULL,
    price INTEGER NOT NULL,
    street TEXT NOT NULL,
    number INTEGER NOT NULL,
    city TEXT NOT NULL,
    country TEXT NOT NULL,
    description TEXT,
    classification INTEGER default 0,
	idUser INTEGER NOT NULL REFERENCES USER ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT CHK_PLACE CHECK (price>=0),
    UNIQUE(street,number,city,country));

create table PICTURES(
    idPicture INTEGER PRIMARY KEY,
    picturePath TEXT NOT NULL,
    idPlace INTEGER NOT NULL REFERENCES PLACE ON DELETE CASCADE ON UPDATE CASCADE,
    aproved BOOLEAN NOT NULL);

create table RESERVATION(
    idReservation INTEGER PRIMARY KEY,
	idPlace INTEGER NOT NULL REFERENCES PLACE ON DELETE CASCADE ON UPDATE CASCADE,
    idTourist TEXT NOT NULL REFERENCES USER ON DELETE CASCADE ON UPDATE CASCADE,
    beginDate DATE NOT NULL,
    endDate DATE NOT NULL,
    CONSTRAINT CHK_RESERVATION CHECK (endDate>beginDate));


create table REVIEW(
    idReservation INTEGER NOT NULL REFERENCES RESERVATION ON DELETE CASCADE ON UPDATE CASCADE PRIMARY KEY,
    classification INTEGER NOT NULL,
    comment TEXT,
    reply TEXT);

CREATE TRIGGER IF NOT EXISTS CheckReviewDate 
BEFORE INSERT ON REVIEW
BEGIN
SELECT raise(rollback, 'So pode dar uma review quando acabar a sua reserva.') WHERE EXISTS(
	SELECT 1
	FROM RESERVATION WHERE
	new.idReservation = RESERVATION.idReservation
	AND (SELECT date('now') < RESERVATION.endDate));
END;

CREATE TRIGGER IF NOT EXISTS updateRating 
AFTER INSERT ON REVIEW
BEGIN
UPDATE PLACE SET classification =
    (SELECT avg(classification) from REVIEW, RESERVATION as reserv,RESERVATION as reserv2
    WHERE REVIEW.idReservation = reserv.idReservation AND new.idReservation = reserv2.idReservation 
    AND reserv.idPlace = reserv2.idPlace)
    WHERE EXISTS (
        SELECT * FROM RESERVATION WHERE
        new.idReservation = RESERVATION.idReservation AND RESERVATION.idPlace = PLACE.idPlace); 
END;

create table MESSAGE(
    messageNumber INTEGER PRIMARY KEY,
	idOwner TEXT NOT NULL REFERENCES USER ON DELETE CASCADE ON UPDATE CASCADE,
    idTourist TEXT NOT NULL REFERENCES USER ON DELETE CASCADE ON UPDATE CASCADE,
    sender BOOLEAN NOT NULL,
    message TEXT NOT NULL);