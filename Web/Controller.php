<?php


function addArticle()
{
    require('Views\AjoutArticleView.php'); 
}

function validateArticle()
{
    echo "article valide";
}

function ListeArticle()
{
    $query = "select * from produits";
    require("DBScript/cursor.php");
    $records = $reponse->fetchAll(PDO::FETCH_ASSOC);
    $reponse->closeCursor();
    require("DBScript/ListeArticleView.php");
}
?>