 select * from PLACE ORDER BY idPlace DESC LIMIT 4; --most recent, limit 4
  select * from PLACE ORDER BY classification DESC LIMIT 4; --best classified, limit 4
-- select PLACE.* from PLACE,RESERVATION WHERE PLACE.idPlace=RESERVATION.idPlace GROUP BY PLACE.name ORDER BY count(*) DESC LIMIT 4; --most popular, limit 4
-- select * from PICTURES where idPlace=X; --select pictures from house x
