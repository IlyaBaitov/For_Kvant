<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление записи</title>
</head>
<body>

    <a href="../index.php">На главную</a><br><br>

    <!--  Данные для добавления в БД  -->

    <form action="#" method="post">
        <input type="text" name="title" id="title" placeholder="Заголовок"><br><br>
        <textarea type="text" name="description" id="description" placeholder="Текст \ Описание" cols="30" rows="10"></textarea><br><br>
        <input type="text" name="author" id="author" placeholder="Автор"><br><br>
        <input type="text" name="type" id="type" placeholder="Тема"><br><br>
        <input type="submit" name="submit" id="submit" value="Добавить"><br><br><br><br><br>
    </form>

    <!--  Какие типы есть в БД  -->
        <?php
            // DB
                require("../config/db.php");
            // SQL
                $sql = "SELECT DISTINCT type FROM `articles`"; // DISTINCT - функция в SQL которая позволяет выбрать значения из БД без повторений
                $query = $pdo->query($sql);

            // Определение переменных тут для того чтобы выводить ПРЕДУПРЕЖДЕНИЕ о необходимости заполнить все данные в форме

            // Variables
                @$title = strip_tags(trim($_POST["title"]));
                @$description = strip_tags(trim($_POST["description"]));
                @$author = strip_tags(trim($_POST["author"]));
                @$type = strip_tags(trim($_POST["type"]));

            // Validation
            // Прямо тут выводим доступные темы и предупреждение если поля не заполнены
                if($title == "" || $description == "" || $author == "" || $type == "")
                {
                    echo "<strong>Необходимо заполнить все поля!</strong><br><br>";

                    echo "<h2>Доступные темы:</h2>" . "<br>";

                    while($row = $query->fetch(PDO::FETCH_OBJ))
                    {
                        echo "<h4>" . $row->type . "</h4>" . "<br>";
                    }

                    exit();
                } else {
                    echo "<strong>Добавить что - то ещё?</strong><br><br>";

                    echo "<h2>Доступные темы:</h2>" . "<br>";

                    while($row = $query->fetch(PDO::FETCH_OBJ))
                    {
                        echo "<h4>" . $row->type . "</h4>" . "<br>";
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
                "author" => $author,
                "type" => $type,
            ]);
    ?>

</body>
</html>