<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php

            include("include/header.php");

            include("include/basedonnee.php");

            $id = $_GET["id"];

            $sql = "SELECT * FROM posts WHERE id = ?";
            $query = $pdo->prepare($sql);
            $query->execute([$id]);
            $articleData = $query->fetch(PDO::FETCH_ASSOC);

            $titre = isset($_POST["titre"]) ? $_POST["titre"] : "";
            $article = isset($_POST["article"]) ? $_POST["article"] : "";

            if ($titre != "") {
            
                if ($article != "") {
                
                    $sql = "UPDATE posts
                            SET titre = ?, contenu = ?
                            WHERE id = ?";

                    $query = $pdo->prepare($sql);
                    $query-> execute([$titre, $article, $id]);
                
                    header("Location: index.php");
                }
            }
        ?>

        <h2>Editer un article</h2>
        
        <h3>Article</h3>
        
        <form action="" method="post">
            <ul>
                <li>
                    <label for="titre">Titre : </label>
                    <input type="text" name="titre" class="edit-titre" id="titre" value="<?php echo $articleData['titre']; ?>">
                </li>
        
                <li>
                    <label for="article">Article : </label>
                    <textarea name="article" class="edit-article" id="article"><?php echo $articleData['contenu']; ?></textarea>
                </li>
        
                <li>
                    <input type="submit" class="submit" value="Mettre à jour">
                </li>
            </ul>
        </form>
    </body>
</html>