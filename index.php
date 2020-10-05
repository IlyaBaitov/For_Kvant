<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">

        $(function(){
            $('#form1').submit(function(e) {
                e.preventDefault();
                var data = $(this).serialize();
                $.ajax({
                    type: "GET",
                    url: "js/articles.php",
                    data: data,
                    success: function(result) {
                        $('#result').html(result);
                    }
                });
            });
        });

    </script>

</head>
<body>
    <form action="./Articles/article.php" method="post">
        <input type="submit" name="Car" id="Car" value="Машинки">
        <input type="submit" name="Hunt" id="Hunt" value="Охота">
        <input type="submit" name="Food" id="Food" value="Еда"><br><br><br>
    </form>



    <form id="form1" method="get" action="js/articles.php">
        <input type="submit" name="Car" id="Car" value="Машинки">
    </form>

    <div id="result">

    </div>

</body>
</html>