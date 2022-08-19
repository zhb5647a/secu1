<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './manager/manager_article.php';
    include './vue/view_create_article.php';
    
    //test si le bouton submit est cliqué
    if(isset($_POST['create'])){
        //test si les champs sont remplis
        if($_POST['nom_article'] !="" AND $_POST['prix_article'] !=""){
            //sécurisation des variables POST
            $nom = htmlspecialchars(strip_tags(trim($_POST['nom_article'])));
            $prix = htmlspecialchars(strip_tags(trim($_POST['prix_article'])));
            //instancier l'objet
            $art = new ManagerArticle($nom, $prix);
            var_dump($art);
            $art->createArticle($bdd);
        }
        else{
            echo 'Les champs sont vides';
        }
    }
    else{
        echo 'Pour ajouter un article cliquez sur ajouter';
    }
?>