<?php
// DB
    require("../config/db.php");

// Присваиваем $type то что пришло с index.php, благодраря этому, можно будет просто добавлять кнопку на index.php и создать базу данных не трогая другие файлы
// Я оптимизировал как мог
    $type = $_POST;
    foreach($type as $k => $v)
    {
        $type = $k;
    }

// SQL request
    $sql = "SELECT * FROM `articles` WHERE `type` = 'Car'";
    $query = $pdo->query($sql);

    while($row = $query->fetch(PDO::FETCH_OBJ))
    {
        echo "<pre>";
        echo "<li><b>$row->title</b></li> <a href='./item.php?title=".$row->title."&description=".$row->description."&author=".$row->author."'>Смотреть</a> </br></br>";
        echo "</pre>";
    }