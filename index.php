<html>

<body>
    <?php

        include("include/header.php");

        include("basedonnee.php");
        
        $sql = "SELECT * 
                FROM posts";

        $query = $pdo->query($sql);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row) {

            ?>

                <p><a href="post.php?id=<?php echo $row["id"] ?>"><?php echo $row["titre"] ." - " .$row["contenu"] ." - " .$row["date_creation"] ?></a></p>

            <?php

        }

    ?>
</body>

</html>