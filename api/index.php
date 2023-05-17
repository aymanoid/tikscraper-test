<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Helpers\Wrappers;

$router = new \Bramus\Router\Router();

$router->get('/', function () {
    $api = Wrappers::api();
    $user = $api->user("fumifumi510");
    $user->feed(0);
    if ($user->ok()) {
        echo "success";
    } else {
        echo $user->error()->tiktok_msg;
    }


});

$router->run();