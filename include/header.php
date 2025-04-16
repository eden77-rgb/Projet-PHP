<?php
    if (session_status() === PHP_SESSION_NONE) {

        session_start();
    }
?>

<header>
    <nav>
        <p class="blog">Mon Blog</p>

        <ul class="nav-links">
            <li>
                <a href="index.php">Accueil</a>
            </li>

            <li class="menu-admin">
                <?php if (isset($_SESSION["admin_id"])): ?>

                    <a href="admin.php">Admin</a>
                    <a href="logout.php">Déconnexion</a>
                    <p>Connecté en tant que <?= $_SESSION["admin_prenom"] ?> <?= $_SESSION["admin_nom"] ?></p>

                <?php else: ?>

                    <a href="login.php">Connexion</a>

                <?php endif; ?>
            </li>
        </ul>
    </nav>
</header>

