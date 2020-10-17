<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
            // Присваиваем $type то что пришло с index.php, благодраря этому, можно будет просто добавлять кнопку на index.php и создать базу данных не трогая другие файлы
            // Я оптимизировал как мог
            $type = $_POST;
            foreach($type as $k => $v)
            {
                $type = $k;
            }
            echo $type;
        ?>
    </title>
</head>
<body>
    <?php
    // DB
    require("../config/db.php");

    // SQL request
    $sql = "SELECT * FROM `articles` WHERE `type` = '$type'";
    $query = $pdo->query($sql);

    while($row = $query->fetch(PDO::FETCH_OBJ))
    {
        echo "<pre>";
        echo "<li><b>$row->title</b></li> <a href='./item.php?title=".$row->title."&description=".$row->description."&author=".$row->author."'>Смотреть</a> </br></br>";
        echo "</pre>";
    }
    ?>
</body>
</html>