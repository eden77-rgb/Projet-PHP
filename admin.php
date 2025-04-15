<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <?php

            include("include/header.php");

            include("include/basedonnee.php");

            date_default_timezone_set("Europe/Paris");

        ?>

        <h1>Panneau d'administration</h1>

        <button><a href="addarticle.php">Rédiger un nouvel article</a></button>

        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Categorie</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php

                    $sql = "SELECT *, posts.id AS post_id, admin.prenom AS auteur_prenom, admin.nom AS auteur_nom, categories.name AS categorie
                            FROM posts
                            JOIN admin
                                ON posts.auteur_id = admin.id
                            JOIN categories
                                ON posts.categorie_id = categories.id";

                    $query = $pdo->query($sql);
                    $results = $query->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($results as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row["titre"]; ?></td>
                                <td><?php echo $row["auteur_prenom"] ." "   .$row["auteur_nom"]?></td>
                                <td><?php echo $row["categorie"] ?></td>
                                <td><button><a href="edit.php?id=<?php echo $row["post_id"] ?>">Editer</a></button></td>
                                <td><button><a href="delete.php?id=<?php echo $row["post_id"]; ?>">Supprimer</a></button></td>
                            </tr>

                        <?php

                    }
                ?>
            </tbody>
        </table>
    </body>

</html>