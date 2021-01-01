<?php

require_once 'users.php';

class Model
{

       public function __construct()
       {
       }

       public function  insert($name, $email, $password)
       {
              $apisUsers = new Users();
              $result = $apisUsers->insert($name, $email, $password);
              return $result;
       }

       public function  update($id, $name, $email, $password)
       {
              $apisUsers = new Users();
              $result = $apisUsers->update($id, $name, $email, $password);
              return $result;
       }

       public function  delete($id)
       {
              $apisUsers = new Users();
              $result = $apisUsers->delete($id);
              return $result;
       }



       public function fetchAll()
       {
              $users = array();
              $apisUsers = new Users();
              $result = $apisUsers->fetchAll();
              if ($result->rowCount()) {
                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $items[] = array(
                                   "id" => $row["id"],
                                   "name" => $row["name"],
                                   "email" => $row["email"],
                                   "password" => $row["password"]
                            );
                            $users = $items;
                     }
                     return $users;
              } else {
                     return "No Users registered";
              }
       }

       public function fetchById($id)
       {
              $users = array();
              $apisUsers = new Users();
              $result = $apisUsers->fetchById($id);
              if ($result->rowCount()) {
                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $items[] = array(
                                   "id" => $row["id"],
                                   "name" => $row["name"],
                                   "email" => $row["email"],
                                   "password" => $row["password"]
                            );
                            $users = $items;
                     }
                     return $users;
              } else {
                     return "No Users registered";
              }
       }
}
