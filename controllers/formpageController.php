<?php

class formpageController
{
    public function index(): void
    {
        $ContentHTML = "
        <section>
            <form action=\"/submit-form\" method=\"post\">
                <h1>Create post</h1>
                <p>
                    <label>Title</label><br>
                    <input type=\"text\" name=\"title\" required>
                </p>
                <p>
                    <label>Content</label><br>
                    <textarea name=\"content\" required></textarea>
                </p>
                <p>
                    <label>Author</label><br>
                    <input type=\"text\" name=\"author\" required>
                </p>
                <button type=\"submit\">Submit</button>
            </form>
        </section>
        ";

        include(__DIR__ . "/../views/formpage.view.php");
    }

    // Handle form van create post
    public function create(): void {
        // Get form data from POST request
        $title = $_POST["title"];
        $content = $_POST["content"];
        $author = $_POST["author"];

        // security redenen om sql injection te verkomen
        $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
        $author = htmlspecialchars($author, ENT_QUOTES, 'UTF-8');

        // Include de model en maak post aan
        require_once(__DIR__ . "/../models/postModel.php");
        $postModel = new postModel();
        $data = [
            "title" => $title,
            "content" => $content,
            "author" => $author
        ];

        $postModel->create($data);

        // Redirect naar form pagina
        header(header: "Location: /formpage");
        exit;
    }
}
