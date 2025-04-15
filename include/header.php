<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
            if (session_status() === PHP_SESSION_NONE)
            {
                session_start();
            }
        ?>

        <h1>Blog PHP</h1>

        <nav>
            <a href="index.php">Accueil</a>


            <?php if (isset($_SESSION["admin_id"])): ?>
                <a href="admin.php">Admin</a>
                <a href="logout.php">Déconnexion</a>
                <p>Connecté en tant que <?= $_SESSION["admin_prenom"] ?> <?= $_SESSION["admin_nom"] ?></p>

            <?php else: ?>
                <a href="login.php">Connexion</a>
            <?php endif; ?>

            
        </nav>



    </body>

</html>