<?php

foreach($this->comptes as $compte)
    {
    
        echo 'Reference: '.$compte->refPersonnes.'<br><br>Pseudo: '.$compte->pseudo.'<br><br>Adresse mail: '.
        $compte->adresseMail." <br><br>_______________________________________________<br><br>"; 
    }

    ?>