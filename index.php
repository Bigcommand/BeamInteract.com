<?php

$url = explode('?', $_SERVER['REQUEST_URI'])[0] ?? 'not-found';

if($_SERVER['REQUEST_URI'] === '/'){
    header('Location: https://ecypse.iljmp.com/1/beam-ltd');
}else if($_SERVER['REQUEST_URI'] === '/fb-deal'){
    header('Location: https://ecypse.iljmp.com/1/beam-ltd');
}else{
    echo "Comming soon";
}