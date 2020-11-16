<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Добавление записи</title>
</head>
<body>

    <a href="../index.php"><button type="button" class="btn btn-outline-danger">На главную</button></a><br><br>


    <!--  Форма данных для добавления в БД  -->
    <form action="#" method="post">
        <input type="text" name="title" id="title" placeholder="Заголовок"><br><br>
        <textarea type="text" name="description" id="description" placeholder="Текст \ Описание" cols="30" rows="10"></textarea><br><br>
        <input type="text" name="type" id="type" placeholder="Тема"><br><br>
        <input type="submit" name="submit" id="submit" value="Добавить"><br><br><br><br><br>
    </form>


    <!--  Какие темы есть в БД  -->
        <?php
            // DB
                require("../config/db.php");
            // SQL
                $sql = "SELECT DISTINCT type FROM `articles`"; // DISTINCT - функция в SQL которая позволяет выбрать значения из БД без повторений
                $query = $pdo->query($sql);

            // Определение переменных "-> ТУТ <-" для того чтобы выводить ПРЕДУПРЕЖДЕНИЕ о необходимости заполнить все данные в форме

            // Variables
                @$title = strip_tags(trim($_POST["title"]));
                @$description = strip_tags(trim($_POST["description"]));
                @$type = strip_tags(trim($_POST["type"]));

            // Validation
            // Прямо тут выводим доступные темы и предупреждение если поля не заполнены
                if($title == "" || $description == "" || $type == "")
                {
                    echo "<strong>Необходимо заполнить все поля!</strong><br>";

                    echo "<h2>Доступные темы:</h2>" . "<br>";
                    while($row = $query->fetch(PDO::FETCH_OBJ))
                    {
                        echo $row->type . " ; ";
                    }

                    exit();
                } else {
                    echo "<strong>Добавить что - то ещё?</strong><br><br>";

                    echo "<h2>Доступные темы:</h2>" . "<br>";
                    while($row = $query->fetch(PDO::FETCH_OBJ))
                    {
                        echo $row->type . " ; ";
                    }
                }
        ?>


    <!--  Добавление в БД  -->
    <?php
        // SQL
            $sql = "INSERT INTO articles (title, description, author, type) VALUES (:title, :description, :author, :type)";
            $query = $pdo->prepare($sql);
            $query->execute([
                "title" => $title,
                "description" => $description,
                "author" => $_COOKIE["user"],
                "type" => $type,
            ]);
    ?>

</body>
</html>