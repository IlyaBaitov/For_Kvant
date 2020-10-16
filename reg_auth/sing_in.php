<?php
// Variables from "index.php" => "USERS" => "sign_in"
    $login = strip_tags(trim($_POST["login"]));
    $password = strip_tags(trim($_POST["pass"]));

    if($login == "" || $password == "")
    {
        echo "Заполните все поля </br> <a href='../index.php'>Заполнить</a>";
        exit();
    }

    $password = md5($password);

// DB connecrion "USERS"
    require("../config/db.php");

// SQL request "USERS"
    $sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
    $query = $pdo->query($sql);

    $users = $query->fetch(PDO::FETCH_ASSOC);

    $user = $users["login"];
    setcookie("user", $user, time() + 3600, "/");

// Location on index.php
    header("Location: ../index.php");
?>