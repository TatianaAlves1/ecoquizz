<?php

// $rota = $_GET['url'] ?? '';
$request = explode("/",$_SERVER['REQUEST_URI']);

// echo $request;
switch($request[2]){
    case '':
        include __DIR__."/src/views/home.php";
        break;
    case 'home':
        include __DIR__."/src/views/home.php";
        break;
    case 'quiz':
        include __DIR__."/src/views/quiz.php";
        break;
    case 'resultado':
        include __DIR__."/src/views/resultado.php";
        break;
    default:
        include __DIR__."/404.html";
        break;
}