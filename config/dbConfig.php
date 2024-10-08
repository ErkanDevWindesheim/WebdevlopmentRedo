<?php

class dbConfig {

    // database connectie
    protected $serverNaam;
    protected $userNaam;
    protected $password;
    protected $dbNaam;

    function Dbconfig(): void {
        $this -> serverNaam = 'localhost';
        $this -> userNaam = 'root';
        $this -> password = '+jeVj4qC.~qF&43';
        $this -> dbNaam = 'profileapp';

        $dbh = new PDO('mysql:host=localhost;dbname=test', $userNaam, $password);
    }
 
}