<?php

class formpageController
{
    public function index(): void
    {   
        // pak alle posts & comments: display in table.
        require_once(__DIR__ . "/../models/postModel.php");
        $postModel = new postModel();
        $posts = $postModel->showAllPosts();

        require_once(__DIR__ . "/../models/commentModel.php");
        $postModel = new commentModel();
        $comments = $postModel->showAllComments();

        

        $ContentHTML = "
        <section class=\"form1\">
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
        <section class=\"form2\">
            <form action=\"/commentAdd\" method=\"post\">
                <h1>Create Comment</h1>
                <p>
                    <label>Post Id</label><br>
                    <input type=\"text\" name=\"PostID\" required>
                </p>
                <p>
                    <label>Bericht</label><br>
                    <textarea name=\"bericht\" required></textarea>
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

    // Create post
    public function create(): void {
        // POST request
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

    // create comment on post
    public function Addcomment(): void {
        require_once(__DIR__ . "/../models/commentModel.php");

        // POST request
        $postId = $_POST["PostID"];
        $comment = $_POST["bericht"];
        $author = $_POST["author"];

        $commentModel = new commentModel();

        $data = [
            "PostID" => $postId,
            "bericht" => $comment,
            "author" => $author,
        ]; 

        $commentModel->CreateComment($data);

        header(header: "Location: /formpage");
        exit;
    }

    public function showAllPosts(): void {
        require_once(__DIR__ . "/../models/postModel.php");
        $postModel = new postModel();

        $postModel ->showAllPosts();
    }

    public function showAllComments(): void {
        require_once(__DIR__ . "/../models/postModel.php");
        $postModel = new commentModel();

        $postModel ->showAllComments();
    }
}
