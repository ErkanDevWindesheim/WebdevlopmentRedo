<?php

class commentModel {

    private $pdo;

    public function __construct() {
        // Include the database config and de PDO connectie
        require_once(__DIR__ . '/../config/dbConfig.php');
        $db = new dbConfig();
        $this->pdo = $db->getConnection();
    }

    public function CreateComment(array $data): void {
        // prepare statement
        $sql = "INSERT INTO Comments (PostID, bericht, author) VALUES (:PostID, :bericht, :author)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':PostID' => $data['PostID'],
            ':bericht' => $data['bericht'],
            ':author' => $data['author']
        ]);

    }

    public function showAllComments(): array {
        // Execute de query
        $COMMENTSdata = $this->pdo->query('SELECT commentid, PostID, bericht FROM comments');
        
        // Fetch alle posts als een associative array
        $comments = $COMMENTSdata->fetchAll(PDO::FETCH_ASSOC);
    
        // Return de data
        return $comments;
    }
}