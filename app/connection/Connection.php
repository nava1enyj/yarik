<?php
class DataBase{

    private $database;

    public function __construct()
    {
        $this->database = new PDO('mysql:host=localhost;dbname=yarik', 'root', 'A15102014f1!');

    }


    public function getDatabase()
    {

       return $this->database;
    }

}