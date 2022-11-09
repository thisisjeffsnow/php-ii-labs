## Lab: SQL Statements
---
Identify the results of each of the following SQL statements:
```
SELECT * FROM users;
SELECT firstname, lastname FROM users AS u WHERE u.id = 25;
INSERT INTO users (firstname, lastname) VALUES(James, Bond);
UPDATE users SET firstname=Rube, lastname=Goldberg WHERE users.id=420;
DELETE FROM users WHERE firstname=Rube;
SELECT * FROM users ORDER BY lastname DESC;
```
---
Answer:

```
SELECT * FROM users;
```
Select all columns and all rows from the users table.

```
SELECT firstname, lastname FROM users AS u WHERE u.id = 25;
```
Return the firstname and lastname columns from from the users table where the
id column is equal to 25.

```
INSERT INTO users (firstname, lastname) VALUES(James, Bond);
```

Insert a record into users table, setting firstname column to James and
lastname column to Bond.

```
UPDATE users SET firstname=Rube, lastname=Goldberg WHERE users.id=420;
```

Change the firstname column to Rube and lastname column to Goldberg in the users
table for the row where the id column is 420.

```
DELETE FROM users WHERE firstname=Rube;
```

Delete all rows from the users table where the firstname column is Rube.

```
SELECT * FROM users ORDER BY lastname DESC;
```
Select all columns and all rows from the users table sorted by the lastname
column in reverse alphabetical order.











