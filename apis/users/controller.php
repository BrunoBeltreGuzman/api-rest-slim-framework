<?php

require_once 'model.php';

class Controller
{
       private $model = null;

       public function __construct()
       {
              $this->model = new Model();
       }

       public function insert($args)
       {
              if (isset($args)) {
                     if (isset($args['name']) && isset($args['email']) && isset($args['email'])) {
                            $name = $args['name'];
                            $email = $args['email'];
                            $password = $args['password'];
                            $result = $this->model->insert($name, $email, $password);
                            return json_encode($result);
                     }
                     return json_encode("inputs missing, incomplete inputs");
              } else {
                     return json_encode("no inputs received");
              }
       }

       public function update($args)
       {
              if (isset($args)) {
                     if (isset($args['id']) && isset($args['name']) && isset($args['email']) && isset($args['email'])) {
                            $id = $args['id'];
                            $name = $args['name'];
                            $email = $args['email'];
                            $password = $args['password'];
                            $result = $this->model->update($id, $name, $email, $password);
                            return json_encode($result);
                     }
                     return json_encode("inputs missing, incomplete inputs");
              } else {
                     return json_encode("no inputs received");
              }
       }


       public function delete($args)
       {
              if (isset($args)) {
                     if (isset($args["id"])) {
                            $id = $args['id'];
                            $users = $this->model->delete($id);
                            return json_encode($users);
                     } else {
                            return json_encode("inputs missing, incomplete inputs");
                     }
              } else {
                     return json_encode("no inputs received");
              }
       }

       public function fetchAll($args)
       {
              $users = $this->model->fetchAll();
              return json_encode($users);
       }

       public function fetchById($args)
       {
              $id = $args['id'];
              $users = $this->model->fetchById($id);
              return json_encode($users);
       }
}
