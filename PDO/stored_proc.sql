DROP PROCEDURE IF EXISTS phpcourse.findDesc;
DELIMITER $
CREATE PROCEDURE phpcourse.findDesc(
p_desckeyword varchar(50)
)
BEGIN
select * from orders where description like p_desckeyword;
END
$
DELIMITER ;