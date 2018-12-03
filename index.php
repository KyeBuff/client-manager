<?php

use src\FrontController;

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class);
    include "$file.php";
});

$session = new FrontController();

$session->set_url("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

$session->render();