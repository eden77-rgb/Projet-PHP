<?php
    session_start();
    include("include/basedonnee.php");

    if (isset($_GET["id"]))
    {

        $id = (int) $_GET["id"];
        $sql = "DELETE FROM comments WHERE post_id = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id]);

        $id = (int) $_GET["id"];
        $sql = "DELETE FROM posts WHERE id = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id]);

        header("Location: admin.php");
        exit();
    }
?>
