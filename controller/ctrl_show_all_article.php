<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './manager/manager_article.php';
    include './vue/view_show_all_article.php';

     //instancier l'objet
     $art = new ManagerArticle("",);
      //stocke dans un tableau la liste des articles de la BDD
    $tab = $art->showAllArticle($bdd);
    //boucle pour afficher la liste des articles (avec le nom et le prix)
    foreach($tab as $value){
        echo '<li>
        '.$value->nom_article.', '.$value->prix_article.' €
        </li>';
    }
?>