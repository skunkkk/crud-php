<?php

class Database
{
    private string  $host;
    private string $database;
    private string $username;
    private string $password;
    private $conn;

    public function __construct($host, $database, $username, $password){
        $this->host=$host;
        $this->database=$database;
        $this->username=$username;
        $this->password=$password;w
    }

}

?>