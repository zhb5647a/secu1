<?php
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    switch($path){
        case '/secu/createArticle':
            include './controller/ctrl_create_article.php';
            break;  
        case '/secu/createArticle':
                include './controller/ctrl_show_all_article.php';
                break; 
         default :
            include './controller/ctrl_show_all_article.php';
            break;
    }
?>