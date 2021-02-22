<?php

if((isset($_POST['nom']) && !empty($_POST['nom'])))
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $pseudo = $_POST['pseudo'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
    

            $query = "select COUNT(*) FROM personnes WHERE pseudo LIKE '$pseudo'";
            $reponse = $bdd->prepare($query);
            $reponse->execute();
            $record = $reponse->fetch(PDO::FETCH_ASSOC);
            $reponse->closeCursor();
            if($record["COUNT(*)"] === "0")
            {
             $query = "call insert into personnes((nom, prenom, pseudo, adresseMail, motDePasse, statut) 
             values ('$nom', '$prenom', '$pseudo', '$mail', 
             '$password', 'client', 0)";
             $reponse = $bdd->prepare($query);
             $reponse->execute();
            }
            else
            {
                echo 'ce nom d utilisateur est deja pris';
            }
        }






?>