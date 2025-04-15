<?php

    include("include/header.php");

    include("basedonnee.php");

?>

<h2>Editer un article</h2>

<h3>Article</h3>

<form action="" method="post">
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
            <input type="submit" value="Mettre à jour">
        </li>
    </ul>
</form>

<?php

    $id = $_GET["id"];

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

