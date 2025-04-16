<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>

        <?php
            session_start();
            include("include/header.php");
            include("include/basedonnee.php");
            date_default_timezone_set("Europe/Paris");
        ?>

        <h1>Rédiger un nouvel article</h1>

        <form method="post" action="#">
            <ul>
                <li>
                    <label for="title">Titre : </label>
                    <input type="text" name="title" id="title">
                </li>

                <li>
                    <label for="article">Article : </label>
                    <input type="textarea" name="article" id="article">
                </li>

                <li>
                    <label for="contenue">Contenue : </label>
                    <select name="categorie" id="categorie">

                        <?php

                            $sql = "SELECT *
                                    FROM categories";

                            $query = $pdo->query($sql);
                            $results = $query->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($results as $row) {

                                ?>

                                    <option value=<?php echo htmlspecialchars($row["id"]) ?>>
                                        <?php echo htmlspecialchars($row["name"]) ?></option>

                                <?php

                            }

                        ?>

                    </select>
                </li>

                <li>
                    <input type="submit">
                </li>
            </ul>
        </form>

        <?php

            $title = isset($_POST["title"]) ? $_POST["title"] : "";
            $article = isset($_POST["article"]) ? $_POST["article"] : "";
            $post_categorie = isset($_POST["categorie"]) ? $_POST["categorie"] : "";

            if ($title != "" && $article != "" && $post_categorie != "") {

                    $title = $_POST["title"];
                    $article = $_POST["article"];
                    $date = date(("Y-m-d H:i:s"));
                    $author_id = $_SESSION["admin_id"];
                    $categorie_id = $post_categorie;

                    $sql = "INSERT INTO posts (titre, contenu, date_creation, auteur_id, categorie_id)
                            VALUES (?, ?, ?, ?, ?)";

                    $query = $pdo->prepare($sql, );
                    $query->execute([$title, $article, $date, $author_id, $categorie_id]);

                    echo "L'article a été ajouté avec succès !";
            }
            else 
            {
                echo "Veuillez remplir tous les champs";
            }
        ?>
    </body>

    <?php
        include("include/footer.php");
    ?>

</html>