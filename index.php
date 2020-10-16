<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Блог</title>

    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
    </script>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">

                <!--  Вывод статей и добаление записей в БД  -->

                <a href="./Articles/add.php"><input type="button" name="add_articles" id="add_articles" value="Добавить новую запись"></a>

                <form action="./Articles/article.php" method="post">
                    <input type="submit" name="Car" id="Car" value="Машинки"><br><br>
                    <input type="submit" name="Hunt" id="Hunt" value="Охота"><br><br>
                    <input type="submit" name="Food" id="Food" value="Еда"><br><br>
                    <input type="submit" name="Something" id="Something" value="Разное"><br><br><br>
                </form>

            </div>

<!--            <div class="col">-->
<!--                <!--  Регистрация  -->
<!--                <h1>Регистрация</h1>-->
<!--                <form action="./reg_auth/sing_up.php" method="post" class="form-control">-->
<!--                    <input type="text">-->
<!--                </form>-->
<!--            </div>-->
<!---->
<!--            <div class="col">-->
<!--                <!--  Авторизация  -->
<!--                <h1>Авторизация</h1>-->
<!--                <form action="./reg_auth/sing_in.php" method="post" class="form-control">-->
<!---->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->


    <!--               					Col for "SIGN UP" and "SIGN IN"									 -->
    <?php if(@$_COOKIE["user"] == ""): ?>
        <div class="col">
            <h1>Регистрация</h1>
            <form action="./reg_auth/sing_up.php" method="post">
                <input type="text" name="login" id="login" placeholder="Enter your login" class="form-control">
                <input type="password" name="pass" id="pass" placeholder="Enter your password" class="form-control">
                <input type="submit" name="submit" id="submit" value="Sign up" class="form-control">
            </form>
        </div>

        <div class="col">
            <h1>Авторизация</h1>
            <form action="./reg_auth/sing_in.php" method="post">
                <input type="text" name="login" id="login" placeholder="Enter your login" class="form-control">
                <input type="password" name="pass" id="pass" placeholder="Enter your password" class="form-control">
                <input type="submit" name="submit" id="submit" value="Sign in" class="form-control">
            </form>
        </div>

    <?php else: ?>
        <h3> <?php echo $_COOKIE["user"]; ?> <a href="reg_auth/exit.php">Exit</a></h3>
    <?php endif; ?>

</body>
</html>