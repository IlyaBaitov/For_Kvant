<?php
// Variables
    $login = strip_tags(trim($_POST["login"]));
    $password = strip_tags(trim($_POST["pass"]));

// Validation
    if($login == "" || $password == "")
    {
        echo "Заполните все поля </br> <a href='../index.php'>Заполнить</a>";
        exit();
    }

    $password = md5($password);

// DB
    require("../config/db.php");

// SQL
    $sql = "INSERT INTO `users` (`login`, `password`) VALUES (:login, :password)";
    $query = $pdo->prepare($sql);
    $query->execute([
        "login" => $login,
        "password" => $password,
    ]);

// Location
    header("Location: ../index.php");
?>