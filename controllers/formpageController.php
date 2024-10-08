<?php

class formpageController
{
    public function index(): void
    {
        $title =
        $ContentHTML = "
        <section>
            <form action=\"/submit-form\" method=\"post\">
                <h1>Create post</h1>
                <p>
                    <label>Title</label><br>
                    <label>
                        <input type=\"text\" name=\"title\" value=\"title\">
                        Mr
                    </label>
                    <label>
                        <input type=\"text\" name=\"content\" value=\"content\">
                        Mr
                    </label>
                </p>
                <button type=\"submit\">Submit</button>
            </form>
        </section>
        ";


        include(__DIR__ . "/../views/formpage.view.php");
    }

    public function create(): void {
        $title = $_POST["title"];
        $content = $_POST["content"];

    }
}