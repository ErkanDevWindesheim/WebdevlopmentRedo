<?php

class postModel {

    private $pdo;  // Store the PDO connection

    public function __construct() {
        // Include the database config and de PDO connectie
        require_once(__DIR__ . '/../config/dbConfig.php');
        $db = new dbConfig();  // Maak een instance of dbConfig
        $this->pdo = $db->getConnection();  // Pak de pdo connectie
    }

    public function create(array $data): void {
        // Prepare the SQL statement to avoid SQL injection
        $sql = "INSERT INTO Posts (title, content, author, created_at) VALUES (:title, :content, :author, NOW())";

        // Prepare the statement
        $stmt = $this->pdo->prepare($sql);

        // GO and fire de data naar de database
        $stmt->execute(params: [
            ':title' => $data['title'],
            ':content' => $data['content'],
            ':author' => $data['author']
        ]);
    }
}
