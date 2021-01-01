<?php

interface IConnection
{

       public function connect();

       public function disConnect();

       public function getConnection();

       public function closeStatement($statement);

       public function closeConnection();

       public function printException($exception);

       public function printExceptionConnection();

       public function printExceptionAndMessage($exception, $message);
}
