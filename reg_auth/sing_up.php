<?php
// Variables from "index.php" => "USERS" => "sign_up"
    $login = strip_tags(trim($_POST["login"]));
    $password = strip_tags(trim($_POST["pass"]));

// Validation
    if($login == "" || $password == "")
    {
        echo "Заполните все поля </br> <a href='../index.php'>Заполнить</a>";
        exit();
    }

    $password = md5($password);

// DB connection "USERS"
    require("../config/db.php");

// SQL request "USERS"
    $sql = "INSERT INTO `users` (`login`, `password`) VALUES (:login, :password)";
    $query = $pdo->prepare($sql);
    $query->execute([
        "login" => $login,
        "password" => $password,
    ]);

// Location on index.php
    header("Location: ../index.php");
?>