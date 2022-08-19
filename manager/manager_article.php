<?php
    class ManagerArticle extends Article{
        /*---------------------------------------------
                        Méthodes
        ----------------------------------------------*/
        public function createArticle(object $bdd):void{
            try{
                $nom = $this->getNomArt();
                $prix = $this->getPrixArt();
                $req = $bdd->prepare('INSERT INTO article(nom_article, prix_article) 
                VALUES(?, ?)');
                $req->bindparam(1,$nom, PDO::PARAM_STR);
                $req->bindparam(2,$prix, PDO::PARAM_STR);
                $req->execute();
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        public function showAllArticle(object $bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM article');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }     
?>