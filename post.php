<?php

    include("include/header.php");

    include("basedonnee.php");

    $id = $_GET["id"];

    $sql = "SELECT *, admin.prenom AS auteur_prenom, admin.nom AS auteur_nom
            FROM posts
            JOIN admin
                ON posts.auteur_id = admin.id
            WHERE posts.id = ?";

    $query = $pdo->prepare($sql);
    $query->execute([$id]);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        
        ?>

            <ul>
                <li><?php echo $row["titre"] ?></li>
                <li><?php echo $row["date_creation"] ?></li>
                <li>Rédigé par : <?php echo $row["auteur_prenom"] . " " . $row["auteur_nom"] ?></li>
                <li><?php echo $row["contenu"] ?></li>
            </ul>

        <?php
    }
?>
