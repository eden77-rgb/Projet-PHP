<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
    
            include("include/header.php");
            include("include/basedonnee.php");
            
            echo "<h1> Articles :</h1>";

            $sql = "SELECT * 
                    FROM posts";
    
            $query = $pdo->query($sql);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
            foreach ($results as $row)
            {
            
                ?>

                <div>
                    <ul>
                        <li class="titre"><a href="post.php?id=<?php echo htmlspecialchars($row["id"]) ?>">
                            <?php echo htmlspecialchars($row["titre"]); ?></a></li>

                        <li class="contenu"><?php echo htmlspecialchars(substr($row["contenu"], 0, 100)); ?>...</li>

                        <li class="bouton"><button><a href="post.php?id=<?php echo $row["id"] ?>">> Lire la suite</a></button></li>
                    </ul>
                </div>
                
                <?php
            }
        
        ?>
    </body>
    
    <?php
        include("include/footer.php");
    ?>

</html>