<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/index.css"> <!-- Index CSS -->
    <title>Статьи</title>
</head>
<body>

    <header class="top">Мужской сайт</header>

    <div class="left">
        <form action="#" method="post">
            <button type="submit" name="Food">Еда</button>
            <button type="submit" name="Car">Машины</button>
            <button type="submit" name="Hunt">Охота</button>
        </form>
    </div>
    <div class="right">
        <a href="../index.php"><button type="button" class="btn btn-outline-danger">На главную</button></a><br><br>

        <!--  Вывод статей  -->
        <?php
            // Variable
            foreach($_POST as $k => $v)
                @$type = $k;

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

    </div>
    <div class="bottom"></div>

    <!--  Доступные метки  -->
<!--    --><?php
//        // DB
//            require("../config/db.php");
//        // SQL
//            $sql = "SELECT DISTINCT type FROM `articles`";
//            $query = $pdo->query($sql);
//
//            echo "<h2>Доступные темы</h2>";
//            while($row = $query->fetch(PDO::FETCH_OBJ))
//            {
//                echo $row->type . " ; ";
//            }
//    ?>

</body>
</html>