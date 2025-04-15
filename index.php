<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
    
            include("include/header.php");
    
            include("include/basedonnee.php");
            
            $sql = "SELECT * 
                    FROM posts";
    
            $query = $pdo->query($sql);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
            foreach ($results as $row)
            {
            
                ?>

                <p>
                    <a href="post.php?id=<?php echo $row["id"] ?>">
                        <?php echo $row["titre"]; ?>
                    </a>
                    - <?php echo substr($row["contenu"], 0, 100); ?>...
                    - <?php echo $row["date_creation"]; ?>
                </p>
            
                <?php
            }
        
        ?>
    </body>

</html>