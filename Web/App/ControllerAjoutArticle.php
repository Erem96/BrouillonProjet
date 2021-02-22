<?php

if((isset($_POST['ArticleName']) && !empty($_POST['ShopPrice']) && !empty($_POST['ClientPrice']) && !empty($_POST['Unit'])))
{
    $ArticleName = $_POST['ArticleName'];
    $PrixFournisseur = $_POST['ShopPrice'];
    $ClientPrice = $_POST['ClientPrice'];
    $Unit = $_POST['Unit'];
   // $refPersonne = $_COOKIE['refPersonnes'];
    $description = $_POST['description'];
    $ImageURL = $_POST['PictureURL'];

    $query = "select COUNT(*) FROM produits WHERE nomProduit LIKE '$ArticleName'";
    $reponse = $bdd->prepare($query);
    $reponse->execute();
    $record = $reponse->fetch(PDO::FETCH_ASSOC);
    $reponse->closeCursor();
    if($record["COUNT(*)"] === "0")
    {
        $query = "insert into produits(nomProduit, descriptionProduit, prixAchatParUnit, prixventeParUnit, unit, illustrationUrl, dateEncodage, UserCreator) 
        VALUES ('$ArticleName', '$description',  '$PrixFournisseur', '$ClientPrice', '$Unit', '$ImageURL', SYSDATE(), 0);";
        $reponse = $bdd->prepare($query);
        $reponse->execute();
        $reponse->closeCursor();
        

	// 	CALL `JournalAdd`('insert', 'produits', (SELECT (MAX(refProduit) + 1) FROM produits), UserRef, '');
    }
    else
    {
        echo 'le nom existe deja';
    }
}
else
{

    

}

?>