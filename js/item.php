<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_GET["title"] ?></title>
</head>
<body>
    <?php
        $title = $_GET["title"];
        $description = $_GET["description"];
        $author = $_GET["author"];
    ?>

    <pre>
        <?php echo $title ?></br>
        <?php echo $description ?></br>
        <?php echo $author ?></br>
    </pre>

    <a href="../index.php">На главную</a>
</body>
</html>