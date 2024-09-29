<?php

$url = explode('?', $_SERVER['REQUEST_URI'])[0] ?? 'not-found';

if($url == '/'){
    header('Location: https://ecypse.iljmp.com/1/beam-ltd');
}else if($url == '/fb-deal'){
    header('Location: https://ecypse.iljmp.com/1/beam-ltd');
}else{
    echo "Comming soon";
}