<?php

require_once "IConnection.php";
require_once "properties.php";

class ConnectionMySQL implements IConnection
{

       private $connection = null;

       public function connect()
       {
              try {
                     $this->connection = new PDO(constant("HOST") . constant("DATABASE"), constant("USER"), constant("PASSWORD"));
                     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $this->connection->exec("set names utf8");
                     return true;
              } catch (Exception $exception) {
                     echo $exception->getMessage();
                     return false;
              }
       }

       public function disConnect()
       {
              try {
                     $this->connection = null;
                     return true;
              } catch (Exception $exception) {
                     echo $exception->getMessage();
                     return false;
              }
       }

       public function getConnection()
       {
              $this->connect();
              return $this->connection;
       }

       public function closeConnection()
       {
              try {
                     $this->connection = null;
                     return true;
              } catch (Exception $exception) {
                     echo $exception->getMessage();
                     return false;
              }
       }

       public function closeStatement($statement)
       {
              try {
                     $statement = null;
              } catch (Exception $exception) {
                     echo $exception->getMessage();
              }
       }

       public function printException($exception)
       {
              echo $exception->getMessage();
       }

       public function printExceptionAndMessage($exception, $message)
       {
              echo $message, "\n", "\n";
              echo $exception->getMessage();
       }

       public function printExceptionConnection()
       {
              echo $this->connection->errorInfo();
       }
}
