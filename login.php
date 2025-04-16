<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <?php
            session_start();
            include("include/header.php");
            include("include/basedonnee.php");
        ?>

        <h2 class="h2">Page de Connexion Admin</h2>

        <form class="login" method="post" action="#">
            <ul>
                <li class="group">
                    <label for="login">Login : </label>
                    <input type="text" name="login" id="login">
                </li>

                <li class="group">
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                </li>

                <li>
                    <input type="submit" class="submit">
                </li>
            </ul>
        </form>

        <?php

            $login = isset( $_POST["login"] ) ? $_POST["login"] : "";
            $password = isset( $_POST["password"] ) ? $_POST["password"] : "";

            $sql = "SELECT * FROM admin WHERE login = ?";
            $query = $pdo->prepare($sql);
            $query->execute([$login]);
            $admin = $query->fetch(PDO::FETCH_ASSOC);

            if ($login != "" && $password != "")
            {
                if ($admin)
                {
                    if ($password == $admin["password"])
                    {
                        $_SESSION["admin_id"] = $admin["id"];
                        $_SESSION["admin_nom"] = $admin["nom"];
                        $_SESSION["admin_prenom"] = $admin["prenom"];

                        header("Location: admin.php");
                        exit();
                    }
                    else
                    {
                        echo "Mot de passe incorrect";
                    }
                }
            }
    ?>
    </body>

</html>