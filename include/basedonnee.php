<?php

    $dsn = "mysql:host=localhost:3306;dbname=blog";
    $login = "root";
    $password = "root";

    try {

        $pdo = new PDO($dsn, $login, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    
    catch (PDOException $e) {

        echo "Erreur de connexion : " .$e->getMessage();
    }

?>
