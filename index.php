<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Блог</title>

</head>
<body>

    <header class="top">Мужской сайт</header>

    <div class="left">
        <!--  Форма поиска по темам  -->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col">-->
<!--                    <h1>Поиск по темам</h1>-->
<!--                    <form action="./Articles/articles.php" method="post">-->
<!--                        <input type="text" name="search" id="search" placeholder="Поиск" class="form-control"><br>-->
<!--                        <input type="submit" name="submit" id="submit" value="Найти" class="btn btn-success">-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <form action="./Articles/articles.php" method="post">
            <button type="submit" name="Food">Еда</button>
            <button type="submit" name="Car">Машины</button>
            <button type="submit" name="Hunt">Охота</button>
        </form>

    </div>

    <div class="right">
        <div class="container">
            <div class="row">

                <!--               					Регистрация и Авторизация									 -->
                <?php if(@$_COOKIE["user"] == ""): ?> <!--  Если пользователь не зашёл то выводить формы регистрации и авторизации  -->
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

                <?php else: ?> <!--  Иначе выводить всё остальное  -->

                    <!--    Статьи и добавление статей    -->

                    <h3> <?php echo $_COOKIE["user"]; ?> <a href="reg_auth/exit.php"><button type="button" class="btn btn-danger">Выйти</button></a></h3>

                    <a href="./Articles/add.php"><button type="button" class="btn btn-info">Добавить новую статью</button></a>

                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="bottom"></div>

</body>
</html>