<?php

$rota = $_GET['url'] ?? '';



switch($rota){
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