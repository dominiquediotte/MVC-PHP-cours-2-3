<?php

class DBModel
{
    protected $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', null, 'db_cours2', 3306);

        if ($this->mysqli->connect_errno) {
            die("Failed to connect to MySQL: " . $this->mysqli->connect_errno);
        }
    }
}
