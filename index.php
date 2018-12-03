<?php

use src\FrontController;

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class);
    include "$file.php";
});

$session = new FrontController();

$session->set_url("$_SERVER[REQUEST_URI]");

$session->render();

function get_partial($filename) 
{
    include "src/view/partials/$filename.php";
}