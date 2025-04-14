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

            echo "<p>" .$row["id"] ." - " .$row["titre"] ." - " .$row["contenu"] ." - " .$row["date_creation"] ."</p>";
        }

    ?>
</body>

</html>