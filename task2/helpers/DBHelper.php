<?php


namespace helpers;


class DBHelper
{
    public $db;

    public function __construct($dbConf)
    {
        $this->db = new PDO(
            'mysql:host=' . $dbConf['dbHost'] . ';dbname=' . $dbConf['dbName'],
            $dbConf['dbUser'],
            $dbConf['dbPassword']
        );
    }
}