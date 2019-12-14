--select * from PLACE ORDER BY idPlace DESC LIMIT 4; --most recent, limit 4
--select * from PLACE ORDER BY classification DESC LIMIT 4; --best classified, limit 4
-- select PLACE.* from PLACE,RESERVATION WHERE PLACE.idPlace=RESERVATION.idPlace GROUP BY PLACE.name ORDER BY count(*) DESC LIMIT 4; --most popular, limit 4
-- select * from PICTURES where idPlace=X; --select pictures from house x

--select * from PLACE WHERE (PLACE.price between minPrice AND maxPrice) AND PLACE.country like "%Country%" AND PLACE.city like "%City%" AND PLACE.name like "%Name%" ORDER BY idPlace DESC LIMIT 4;
--select * from PLACE WHERE (PLACE.price between minPrice AND maxPrice) AND PLACE.country like "%Country%" AND PLACE.city like "%City%" AND PLACE.name like "%Name%" ORDER BY classification DESC LIMIT 4;
--select  PLACE.* from PLACE,RESERVATION WHERE (PLACE.price between minPrice AND maxPrice) AND PLACE.country like "%Country%" AND PLACE.city like "%City%" AND PLACE.name like "%Name%" AND PLACE.idPlace=RESERVATION.idPlace GROUP BY PLACE.name ORDER BY count(*) DESC LIMIT 4;
--filtragem com preço, país, cidade e nome, as strings podem ficar vazias se não forem usadas (ex: "%%"), a ordem é a mesma de cima