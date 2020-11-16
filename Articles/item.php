<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title><?php echo $_GET["title"] ?></title>
</head>
<body>
    <a href="../index.php"><button type="button" class="btn btn-outline-danger">На главную</button></a><br><br>

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

</body>
</html>