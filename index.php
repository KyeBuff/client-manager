<?php

require 'vendor/autoload.php';

use App\FrontController;

$session = new FrontController();

$session->set_url("$_SERVER[REQUEST_URI]");

$session->render();

function get_partial($filename) 
{
    include "src/view/partials/$filename.php";
}