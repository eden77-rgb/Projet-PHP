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
                    <label for="titre">Titre : </label>
                    <input type="text" name="titre" id="titre">
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

                                    <option value=<?php echo $row["id"] ?>><?php echo $row["name"] ?></option>

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

            $titre = isset($_POST["titre"]) ? $_POST["titre"] : "";
            $article = isset($_POST["article"]) ? $_POST["article"] : "";
            $categoriePost = isset($_POST["categorie"]) ? $_POST["categorie"] : "";

            if ($titre != "" && $article != "" && $categoriePost != "") {

                    $titre = $_POST["titre"];
                    $article = $_POST["article"];
                    $date = date(("Y-m-d H:i:s"));
                    $auteurId = $_SESSION["admin_id"];
                    $categorieId = $categoriePost;

                    $sql = "INSERT INTO posts (titre, contenu, date_creation, auteur_id, categorie_id)
                            VALUES (?, ?, ?, ?, ?)";

                    $query = $pdo->prepare($sql, );
                    $query->execute([$titre, $article, $date, $auteurId, $categorieId]);

                    echo "L'article a été ajouté avec succès !";
            }
            else 
            {
                echo "Veuillez remplir tous les champs";
            }
        ?>
    </body>

</html>