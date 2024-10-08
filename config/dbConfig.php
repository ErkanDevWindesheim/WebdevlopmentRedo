<?php


/*--------------------------------------------------//
//                                                  //
//                   Database settings              //
//                                                  //
//--------------------------------------------------*/


// Dit is de database settings en kan aangeroepen worden door elk bestand in dit project.
class dbConfig {

    protected $serverNaam = 'localhost';
    protected $userNaam = 'root';
    protected $password = '+jeVj4qC.~qF&43';
    protected $dbNaam = 'profileapp';
    protected $conn = NULL;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->serverNaam};dbname={$this->dbNaam}", username: $this->userNaam, password: $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO {
        return $this->conn;
    }
}
