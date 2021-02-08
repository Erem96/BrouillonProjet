<?php 

echo "dbtest";
$bdd = new PDO('mysql:host=localhost;dbname=Projectfinal;charset=utf8', 'testuser', 'alexis123', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>