# api-rest-slim-framework
API-REST with slim framework in PHP and MySQL for a notes application with two related tables "users" and "notes".


# Slim Framework

**Slim is a PHP micro-framework, which helps you create APIs quickly but reliably.**
**In essence, Slim is a dispatcher that receives an HTTP request, invokes an appropriate callback routine, and returns an HTTP response.**

# Users:

**Insert:**

```php
$apisUsers = new Users();
$result = $apisUsers->insert($name, $email, $password);
```

First send the texts by the GET protocol, of course.

**Update:**

```php
$apisUsers = new Users();
$result = $apisUsers->update($id, $name, $email, $password);
```

Also first send the texts through the PUT protocol.

**Delete:**

```php
$apisUsers = new Users();
$result = $apisUsers->delete($id);
```

You need to send the user id first.

**FetchAll:**

```php
$apisUsers = new Users();
$result = $apisUsers->fetchAll();
```

Get all the records and return them.

Example:

```json
[
       {
              "id": "1",
              "name": "Bruno",
              "email": "bruno@example.com",
              "password": "123"
       },
       {
              "id": "2",
              "name": "Juan",
              "email": "juan@example.com",
              "password": "123"
       },
       {
              "id": "3",
              "name": "Maria",
              "email": "maria@example.com",
              "password": "123"
       }
]
```

**And FetchById:**

```php
$apisUsers = new Users();
$result = $apisUsers->fetchById($id);
```

Get all the records that match the id.

Example (id=1):

```json
[
       {
              "id": "1",
              "name": "Bruno",
              "email": "bruno@example.com",
              "password": "123"
       }
]
```

_With the table "notes" in similar, it is just to change the respective fields and values_
