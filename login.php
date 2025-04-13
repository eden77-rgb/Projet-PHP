<html>

<body>

    <?php
        
        include("include/header.php");

    ?>

    <h2>Page de Connexion Admin</h1>

    <form method="post" action="#">
        <ul>
            <li>
                <label for="login">Login : </label>
                <input type="text" name="login" id="login">
            </li>

            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" id="password">
            </li>

            <li>
                <input type="submit">
            </li>
        </ul>
    </form>

    <?php
        
        $login = isset( $_POST["login"] ) ? $_POST["login"] : "";
        $password = isset( $_POST["password"] ) ? $_POST["password"] : "";

        if ($login == "adminEden") { // changement de condition pour n'importe qu'elle admin

            if ($password == "admin") {
                
                echo "Connexion réussi";

                header("Location: admin.php");
                exit();
            }
        }

    ?>
</body>

</html>