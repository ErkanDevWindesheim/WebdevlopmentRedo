<?php

class dbConfig {

    protected $serverNaam = 'localhost';
    protected $userNaam = 'root';
    protected $password = '+jeVj4qC.~qF&43';
    protected $dbNaam = 'profileapp';
    protected $dbh;

    public function __construct() {
        try {
            $this->dbh = new PDO("mysql:host={$this->serverNaam};dbname={$this->dbNaam}", username: $this->userNaam, password: $this->password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO {
        return $this->dbh;
    }
}
