<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
    
    <?php

        include("include/header.php");

        include("include/basedonnee.php");

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
                    <li><?php echo $row["contenu"] ?></li>
                    <li><?php echo $row["date_creation"] ?></li>
                    <li>Rédigé par : <?php echo $row["auteur_prenom"] . " " . $row["auteur_nom"] ?></li>

                </ul>

            <?php
        }
    ?>

    <?php
        $sql = "SELECT * FROM comments WHERE post_id = ?";


        $query = $pdo->prepare($sql);
        $query->execute([$id]);
        $commentaires = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($commentaires as $commentaire) {
            ?>
            <ul>
                <li id="pseudoo"><?php echo $commentaire["pseudo"]; ?></li>
                <li><?php echo $commentaire["contenu"]; ?></li>
                <li><?php echo $commentaire["date_creation"]; ?></li>
            </ul>
            <?php
        }
    ?>

    <form method="post" action="#">
        <ul>
            <li>
                <label for="pseudo">Pseudo : </label>
                <input type="text" name="pseudo" id="pseudo">
            </li>

            <li>
                <label for="commentaire">Commentaire : </label>
                <input type="textarea" name="commentaire" id="commentaire">
            </li>

            <li>
                <input type="submit">
            </li>
        </ul>
    </form>
    <?php
        $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : "";
        $commentaire = isset($_POST["commentaire"]) ? $_POST["commentaire"] : "";

        if ($pseudo != "" && $commentaire != "")
        {
                $pseudo = $_POST["pseudo"];
                $commentaire = $_POST["commentaire"];
                $date = date(("Y-m-d H:i:s"));
                $postId = $id;

                $sql = "INSERT INTO comments (pseudo, contenu, date_creation, post_id)
                        VALUES (?, ?, ?, ?)";

                $query = $pdo->prepare($sql, );
                $query->execute([$pseudo, $commentaire, $date, $postId]);

                header("Location: post.php?id=" . $id);
                exit();
        }
    ?>


    </body>
</html>