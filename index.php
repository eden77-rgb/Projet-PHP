<html>

<body>
    <?php

        $dsn = "mysql:host=localhost:3306;dbname=blog";
        $login = "root";
        $password = "root";

        try {
            
            $pdo = new PDO($dsn, $login, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "<p>Connexion réussi</p>";

            $sql = "SELECT *
                    FROM admin";
            
            $query = $pdo->query($sql);
            $results = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row) {
                
                echo $row["id"] ." - " .$row["login"] ." - " .$row["password"] ." - " .$row["nom"] ." - " .$row["prenom"];
            }

        }
        
        catch (PDOException $e) {
            
            echo "Erreur : " .$e->getMessage();
        }

    ?>
</body>

</html>