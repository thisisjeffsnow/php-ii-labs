DROP PROCEDURE IF EXISTS phpcourse.fixDate;
DELIMITER $
CREATE PROCEDURE phpcourse.fixDate(
p_order int
)
BEGIN
update orders set date = UNIX_TIMESTAMP(date) where id = p_order;
END
$
DELIMITER ;