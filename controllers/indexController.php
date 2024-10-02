<?php

class indexController {
    public function index(): mixed {
        return require __DIR__ . "../views/routes/index.view.php";
    }
}