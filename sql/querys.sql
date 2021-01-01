--insert
INSERT INTO
       users (name, email, password)
values
       (:name, :email, :password);

--update
UPDATE
       users
SET
       name = :name,
       email = :email,
       password = :password
where
       id = :id;

--delete
DELETE FROM
       users
where
       id = :id;

--fetchAll
SELECT
       *
FROM
       users;

--fetchById
SELECT
       *
FROM
       users
WHERE
       id = $ id;