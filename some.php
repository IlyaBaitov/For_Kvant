<?php
    require("./config/db.php");
    $sql = "INSERT INTO test(title, text) VALUES(:title, :content)";
    $query = $pdo->prepare($sql);
    $query->execute([
        "title" => $_POST["title"],
        "content" => $_POST["content"],
    ]);